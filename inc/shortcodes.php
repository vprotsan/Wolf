<?php
/**
 * Wolf Shortcodes
 *
 * This file contains all the default Wolf shortcodes.
 *
 * @package wolf
 */


/**
 * Enable Shortcodes in widget areas
 *
 * @since 1.4.1
 */
add_filter('widget_text', 'do_shortcode');

/**
 * Shortcode to display Return To Top link
 *
 * @since 1.4.1
 */
add_shortcode( 'return-to-top', 'wolf_return_to_top' );
function wolf_return_to_top() {
    $link = '<a href="#top" class="rtt cb" title="Return to top of page">' . apply_filters( 'wolf_return_to_top_text', __( 'Return to Top', 'wolf' ) ) . '</a>';
    return $link;
}



