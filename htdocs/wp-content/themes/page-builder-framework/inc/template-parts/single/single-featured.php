<?php
/**
 * Featured Image
 *
 * Renders the featured image on single pages.
 *
 * @package Page Builder Framework
 * @subpackage Template Parts
 */
 
// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

the_post_thumbnail( 'full', array( 'class' => 'wpbf-post-image' ) );

?>