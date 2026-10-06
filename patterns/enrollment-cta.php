<?php
/**
 * Title: Enrollment CTA
 * Slug: bloom/enrollment-cta
 * Categories: bloom
 * Description: Big sunny banner inviting parents to book a tour.
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"var:preset|color|sunny"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-sunny-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"fontSize":"xx-large","className":"bloom-rise"} -->
			<h2 class="wp-block-heading bloom-rise has-xx-large-font-size">Come see the sunshine for yourself</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size">Book a personal tour — meet the teachers, peek into the classrooms, and let your little one try the slide. Tours run every weekday morning.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"#2e2a26","text":"#ffffff"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-text-color has-background wp-element-button" href="/book-tour" style="background-color:#2e2a26">Book a Tour</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"#2e2a26"}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="tel:+15551234567" style="color:#2e2a26">Call (555) 123-4567</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"sizeSlug":"large","className":"is-style-bloom-sticker bloom-float-slow"} -->
			<figure class="wp-block-image size-large is-style-bloom-sticker bloom-float-slow"><img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?q=80&amp;w=1200&amp;auto=format&amp;fit=crop" alt="Joyful child with arms wide open"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
