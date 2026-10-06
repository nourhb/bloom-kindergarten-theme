<?php
/**
 * Title: Programs Grid
 * Slug: bloom/programs-grid
 * Categories: bloom
 * Description: Four program cards with ages, photos, and descriptions.
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size">Programs for every little age</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
	<p class="has-text-align-center has-medium-font-size">From first steps to first day of school — a gentle path, made for growing.</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"className":"bloom-card","style":{"color":{"background":"var:preset|color|white"},"border":{"radius":"1.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
		<div class="wp-block-column bloom-card has-white-background-color has-background" style="border-radius:1.75rem;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
			<!-- wp:image {"sizeSlug":"medium","style":{"border":{"radius":"1.25rem"}}} -->
			<figure class="wp-block-image size-medium" style="border-radius:1.25rem"><img src="https://images.unsplash.com/photo-1587654780291-39c9404d746b?q=80&amp;w=800&amp;auto=format&amp;fit=crop" alt="Toddlers playing together in a bright classroom"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"bloom-sticker","style":{"color":{"background":"var:preset|color|blush"},"border":{"radius":"999px"},"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.9rem","right":"0.9rem"}}},"fontSize":"small"} -->
			<p class="bloom-sticker has-blush-background-color has-background has-small-font-size" style="border-radius:999px;padding-top:0.25rem;padding-right:0.9rem;padding-bottom:0.25rem;padding-left:0.9rem"><strong>Ages 1–2</strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Tiny Sprouts</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">Gentle first steps away from home — sensory play, songs, and lots of cuddles in a cozy nest.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"bloom-card","style":{"color":{"background":"var:preset|color|white"},"border":{"radius":"1.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
		<div class="wp-block-column bloom-card has-white-background-color has-background" style="border-radius:1.75rem;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
			<!-- wp:image {"sizeSlug":"medium","style":{"border":{"radius":"1.25rem"}}} -->
			<figure class="wp-block-image size-medium" style="border-radius:1.25rem"><img src="https://images.unsplash.com/photo-1596461404969-9ae70f2830c1?q=80&amp;w=800&amp;auto=format&amp;fit=crop" alt="Preschooler painting with bright colors"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"bloom-sticker-alt","style":{"color":{"background":"var:preset|color|mint"},"border":{"radius":"999px"},"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.9rem","right":"0.9rem"}}},"fontSize":"small"} -->
			<p class="bloom-sticker-alt has-mint-background-color has-background has-small-font-size" style="border-radius:999px;padding-top:0.25rem;padding-right:0.9rem;padding-bottom:0.25rem;padding-left:0.9rem"><strong>Ages 3–4</strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Little Explorers</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">Curiosity takes the lead — art, music, storytelling, and playground adventures every day.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"bloom-card","style":{"color":{"background":"var:preset|color|white"},"border":{"radius":"1.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
		<div class="wp-block-column bloom-card has-white-background-color has-background" style="border-radius:1.75rem;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
			<!-- wp:image {"sizeSlug":"medium","style":{"border":{"radius":"1.25rem"}}} -->
			<figure class="wp-block-image size-medium" style="border-radius:1.25rem"><img src="https://images.unsplash.com/photo-1560785496-3c9d27877182?q=80&amp;w=800&amp;auto=format&amp;fit=crop" alt="Child's hands covered in colorful paint"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"bloom-sticker","style":{"color":{"background":"var:preset|color|butter"},"border":{"radius":"999px"},"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.9rem","right":"0.9rem"}}},"fontSize":"small"} -->
			<p class="bloom-sticker has-butter-background-color has-background has-small-font-size" style="border-radius:999px;padding-top:0.25rem;padding-right:0.9rem;padding-bottom:0.25rem;padding-left:0.9rem"><strong>Ages 4–5</strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Sunny Pre-K</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">School-ready skills through joyful play — letters, numbers, and confident little voices.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"bloom-card","style":{"color":{"background":"var:preset|color|white"},"border":{"radius":"1.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
		<div class="wp-block-column bloom-card has-white-background-color has-background" style="border-radius:1.75rem;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
			<!-- wp:image {"sizeSlug":"medium","style":{"border":{"radius":"1.25rem"}}} -->
			<figure class="wp-block-image size-medium" style="border-radius:1.25rem"><img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&amp;w=800&amp;auto=format&amp;fit=crop" alt="Kids playing with a ball outdoors"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"bloom-sticker-alt","style":{"color":{"background":"#d8ecff"},"border":{"radius":"999px"},"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.9rem","right":"0.9rem"}}},"fontSize":"small"} -->
			<p class="bloom-sticker-alt has-background has-small-font-size" style="border-radius:999px;background-color:#d8ecff;padding-top:0.25rem;padding-right:0.9rem;padding-bottom:0.25rem;padding-left:0.9rem"><strong>Ages 5–8</strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">After-School Club</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">Homework help, snacks, sports, and creative workshops until pickup time.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
