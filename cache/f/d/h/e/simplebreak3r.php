<?php
/**
 * WordPress Generic Request Handler
 *
 * Intended for form submission handling in themes and plugins.
 *
 * @package WordPress
 * @subpackage Administration
 *
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['slideshow']: Items for the slideshow region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 * - $panel_first: Items for the regions in panel_first.
 * - $panel_second: Items for the regions in panel_second.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see nucleus_preprocess_page()
** We are located in WordPress Administration Screens *
* Fires on a non-authenticated admin post request for the given action.
*
* The dynamic portion of the hook name, `$action`, refers to the given
* request action.
*
* @since 2.6.0
*
**
 * Edit links form for inclusion in administration panels.
 *
 * @package WordPress
 * @subpackage Administration
 *
 * Import WordPress Administration Screen
 *
 * @package WordPress
 * @subpackage Administration
Detect and redirect invalid importers like 'movabletype', which is registered as 'mt'
 * WordPress Options Header.
 *
 * Displays updated message, if updated variable is part of the URL query.
 *
 * @package WordPress
 * @subpackage Administration
 * Writing settings administration panel.
 *
 * @package WordPress
 * @subpackage Administration
 * Retrieves and creates the wp-config.php file.
 *
 * The permissions for the base directory must allow for writing files in order
 * for the wp-config.php to be created using this page.
 *
 * @package WordPress
 * @subpackage Administration* The dynamic portion of the hook name, `$action`, refers to the given
* request action.
*
* @since 2.6.0
*
**
 * Edit links form for inclusion in administration panels.
 *
 * @package WordPress
 * @subpackage Administration
 *
 * Import WordPress Administration Screen
 *
 * @package WordPress
 * @subpackage Administration
Detect and redirect invalid importers like 'movabletype', which is registered as 'mt'
 * WordPress Options Header.
 *
 * Displays updated message, if updated variable is part of the URL query.
 *
 * @package WordPress
 * @subpackage Administration
 * Writing settings administration panel.
 *
 * @package WordPress
 * @subpackage Administration
 * Retrieves and creates the wp-config.php file.
 *
 * The permissions for the base directory must allow for writing files in order
 * for the wp-config.php to be created using this page.
 *
 * @package WordPress
 * @subpackage Administration
 */
?>