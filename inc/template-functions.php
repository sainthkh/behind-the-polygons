<?php

/**
 * Determines if post thumbnail can be displayed.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return bool
 */
function btp_can_show_post_thumbnail() {
	/**
	 * Filters whether post thumbnail can be displayed.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @param bool $show_post_thumbnail Whether to show post thumbnail.
	 */
	return apply_filters(
		'btp_can_show_post_thumbnail',
		! post_password_required() && ! is_attachment() && has_post_thumbnail()
	);
}

