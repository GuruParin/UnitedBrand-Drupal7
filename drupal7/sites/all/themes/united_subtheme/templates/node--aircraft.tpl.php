<?php
/**
 * @file
 * Zen theme's implementation to display a single Drupal page.
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
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
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
 * - $page['header']: Items for the header region.
 * - $page['navigation']: Items for the navigation region, below the main menu (if any).
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['footer']: Items for the footer region.
 * - $page['bottom']: Items to appear at the bottom of the page below the footer.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see zen_preprocess_page()
 * @see template_process()
 */
?>

    
      <!-- Start of node Aircraft-->
	<div id="aircraft-wrap" class="rapper">
	 <div id="center-wrap">
	

      <div id="table-wrap">
			
			<table class="grid-nav landing-grid" id="fleet-grid" width="700" height="280">
				<tbody><tr>
				<td class="white-text mdBlu">
                <a href="features/overview" hidefocus="hidefocus">
              
                <h2>Aircraft Overview</h2>
							<span id="plane-up" class="icon"></span>
							<div class="expand-button"></div>
							</a></td>
					<td class="white-text ltBlu"><h2>Seating</h2>
							<span id="seating" class="icon"></span>
							<div class="expand-button"></div>
							</td>
					<td class="white-text gray"><h2>Galleys</h2>
						 		<span id="galleys" class="icon"></span>
								<div class="expand-button"></div>
								</td>				
					<td class="white-text dkBlu"><h2>Lavatories</h2>
						 		<span id="lavatories" class="icon"></span>
								<div class="expand-button"></div>
								</td>
								
					<td class="white-text mdBlu"><h2>In Flight Entertainment</h2>	 
						<span id="headphones" class="icon"></span>
					<div class="expand-button">	</div>
					</td>
				</tr>
				
				<tr>
					<td class="dark-text"></td>
					<td class="white-text dkBlu" rel="#A319"><h2>Food and Beverage</h2>
								<span id="food" class="icon"></span>
								<div class="expand-button"></div>
								</td>
						
					<td class="white-text mdBlu">
						<h2>Tabletop</h2>	 
								<span id="tabletop" class="icon"></span>
							<div class="expand-button">	</div>
							</td>					
				
					<td class="white-text gray"><h2>Sleeping</h2>	 					
								<span id="sleeping" class="icon"></span>
							<div class="expand-button">	</div>
							</td>
							
					<td class="white-text ltBlu"><h2>Amenity Kits</h2>	 
						
								<span id="amenities" class="icon"></span>
								<div class="expand-button"></div>
								</td>
				</tr>
					
				
			</tbody></table>
			
		
	<!-- End of Table wrap-->	</div>
	</div>
	
		</div>
        
        
    </div><!-- /#content -->

    <div id="navigation">

    </div><!-- /#navigation -->

  </div><!-- /#main -->