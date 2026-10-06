/**
 * Bloom — front-end interactions.
 *
 * Back-to-top button, scroll reveals, animated counters.
 * Vanilla JS. Honors prefers-reduced-motion.
 */
(function () {
	'use strict';

	var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	/* ---------- Back to top ---------- */
	var topBtn = document.querySelector('.bloom-top');
	if (topBtn) {
		var onScroll = function () {
			if (window.scrollY > 600) {
				topBtn.classList.add('bloom-show');
			} else {
				topBtn.classList.remove('bloom-show');
			}
		};
		window.addEventListener('scroll', onScroll, { passive: true });
		onScroll();
		topBtn.addEventListener('click', function () {
			window.scrollTo({ top: 0, behavior: reduceMotion ? 'auto' : 'smooth' });
		});
	}

	if (reduceMotion) {
		// Show everything immediately, no animation.
		document.querySelectorAll('.bloom-rise, .bloom-pop').forEach(function (el) {
			el.classList.add('bloom-in');
		});
		return;
	}

	/* ---------- Scroll reveals ---------- */
	if ('IntersectionObserver' in window) {
		var revealer = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					entry.target.classList.add('bloom-in');
					revealer.unobserve(entry.target);
				}
			});
		}, { threshold: 0.15 });

		document.querySelectorAll('.bloom-rise, .bloom-pop').forEach(function (el) {
			revealer.observe(el);
		});
	} else {
		document.querySelectorAll('.bloom-rise, .bloom-pop').forEach(function (el) {
			el.classList.add('bloom-in');
		});
	}

	/* ---------- Animated counters ---------- */
	var easeOut = function (t) { return 1 - Math.pow(1 - t, 3); };

	var animateCount = function (el) {
		var target = parseFloat(el.getAttribute('data-count'));
		var decimals = parseInt(el.getAttribute('data-decimals') || '0', 10);
		var suffix = el.getAttribute('data-suffix') || '';
		if (isNaN(target)) { return; }
		var duration = 1600;
		var start = null;

		var step = function (now) {
			if (!start) { start = now; }
			var p = Math.min((now - start) / duration, 1);
			var value = (target * easeOut(p)).toFixed(decimals);
			// Keep a thousands separator for large integers.
			if (decimals === 0 && target >= 1000) {
				value = Number(value).toLocaleString('en-US');
			}
			el.textContent = value + suffix;
			if (p < 1) { requestAnimationFrame(step); }
		};
		requestAnimationFrame(step);
	};

	if ('IntersectionObserver' in window) {
		var counter = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					animateCount(entry.target);
					counter.unobserve(entry.target);
				}
			});
		}, { threshold: 0.4 });

		document.querySelectorAll('[data-count]').forEach(function (el) {
			counter.observe(el);
		});
	}
})();
