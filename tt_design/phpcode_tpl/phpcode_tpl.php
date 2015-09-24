<?php
/**
 * Author Template functions for use in themes.
 *
 * These functions must be used within the WordPress Loop.
 *
 * @link https://codex.wordpress.org/Author_Templates
 *
 * @package WordPress
 * @subpackage Template
 */

/**
 * Retrieve the author of the current post.
 *
 * @since 1.5.0
 *
 * @global object $authordata The current author's DB object.
 *
 * @param string $deprecated Deprecated.
 * @return string|null The author's display name.
 */

/**
 * Display the name of the author of the current post.
 *
 * The behavior of this function is based off of old functionality predating
 * get_the_author(). This function is not deprecated, but is designed to echo
 * the value from get_the_author() and as an result of any old theme that might
 * still use the old behavior will also pass the value from get_the_author().
 *
 * The normal, expected behavior of this function is to echo the author and not
 * return it. However, backwards compatibility has to be maintained.
 *
 * @since 0.71
 * @see get_the_author()
 * @link https://codex.wordpress.org/Template_Tags/the_author
 *
 * @param string $deprecated Deprecated.
 * @param string $deprecated_echo Deprecated. Use get_the_author(). Echo the string or return it.
 * @return string|null The author's display name, from get_the_author().
 */
