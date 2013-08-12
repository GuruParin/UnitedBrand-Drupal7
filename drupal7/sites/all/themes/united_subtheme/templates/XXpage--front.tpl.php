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

<div id="page">
   <?php print render($page['header']); ?>
  
  <div id="main">

    <div id="content" class="column" role="main">
     
    
      <a id="main-content"></a>
  
      <!-- Start of-->
	<div id="home-wrap" class="rapper">
	 <div id="center-wrap">
     
	
        <h1 class="title" id="page-title">United Fleet<span class="smaller-title">Fleet total</span> <a href="#" id="updateButton">Fleet Updates</a>
        </h1>
	
<!-- Fleet Nav Grid -->
<div id="table-wrap">	
						<!-- OVERLAYS!! Begin First Row -->
			
							<!--  Overlay for "787" -->
							<div class="overlay yellowBox" id="sevenEightySeven" style="display: none;">
									<h2>787</h2>

								<ul class="aircraft-class-selection">
								<li><a href="/United%20Brand%20-%20Drupal%207/aircraft/777-3-class-int" hidefocus="hidefocus">3 Class Int</a></li> <!-- Link directly to aircraft class page-->
								<li><a href="#" hidefocus="hidefocus">2 Class Int</a></li>
								<li><a href="#" hidefocus="hidefocus">2 Class</a></li>
								</ul>

											<table class="spec-table"><tbody><tr>

										  <td class="first-col">Specs</td><td>&nbsp;</td> </tr><tr>
										  <td>Fleet Count</td><td class="white-text">$Fleet_total</td></tr><tr>
										<td>First delivery</td><td class="white-text">2004</td></tr><tr>
										<td>Max range</td><td class="white-text">5240nm (A-Model) / 7725nm (ER)</td></tr><tr>
										<td>Cruise speed</td><td class="white-text">550 mph</td></tr><tr>
						<td>Propulsion</td><td class="white-text">Two General Electric GE90 or two Pratt &amp; Whitney PW4077/4090 engines, rated up to 94,000 pounds thrust each</td></tr><tr>
										<td>Wing span</td><td class="white-text">199 feet, 11 inches</td></tr>
											</tbody></table>					

						<div class="close">close</div>
							</div>
					<!-- 2nd  overlay with id "777" -->
					<div class="overlay yellowBox" id="sevenSevenSeven" style="display: none;">
							<h2>777</h2>

						<ul class="aircraft-class-selection">
						<li><a href="aircraft-landing.html" hidefocus="hidefocus">3 Class Int</a></li> <!-- Link directly to aircraft class page-->
						<li><a href="#" hidefocus="hidefocus">2 Class Int</a></li>
						<li><a href="#" hidefocus="hidefocus">2 Class</a></li>
						</ul>

									<table class="spec-table"><tbody><tr>

								  <td class="first-col">Specs</td><td>&nbsp;</td> </tr><tr>
								  <td>Fleet Count</td><td class="white-text">43</td></tr><tr>
								<td>First delivery</td><td class="white-text">2004</td></tr><tr>
								<td>Max range</td><td class="white-text">5240nm (A-Model) / 7725nm (ER)</td></tr><tr>
								<td>Cruise speed</td><td class="white-text">550 mph</td></tr><tr>
				<td>Propulsion</td><td class="white-text">Two General Electric GE90 or two Pratt &amp; Whitney PW4077/4090 engines, rated up to 94,000 pounds thrust each</td></tr><tr>
								<td>Wing span</td><td class="white-text">199 feet, 11 inches</td></tr>
									</tbody></table>					

				<div class="close">close</div>
					</div>
					
					<!-- 3rd overlay with id "767" -->	
						<div class="overlay yellowBox" id="sevenSixtySeven" style="display: none;">
								<h2>767</h2>

							<ul class="aircraft-class-selection">
							<li><a href="aircraft-landing.html" hidefocus="hidefocus">3 Class Int</a></li> <!-- Link directly to aircraft class page-->
							<li><a href="#" hidefocus="hidefocus">2 Class Int</a></li>
							<li><a href="#" hidefocus="hidefocus">2 Class</a></li>
							</ul>

										<table class="spec-table"><tbody><tr>

									  <td class="first-col">Specs</td><td>&nbsp;</td> </tr><tr>
									  <td>Fleet Count</td><td class="white-text">43</td></tr><tr>
									<td>First delivery</td><td class="white-text">2004</td></tr><tr>
									<td>Max range</td><td class="white-text">5240nm (A-Model) / 7725nm (ER)</td></tr><tr>
									<td>Cruise speed</td><td class="white-text">550 mph</td></tr><tr>
					<td>Propulsion</td><td class="white-text">Two General Electric GE90 or two Pratt &amp; Whitney PW4077/4090 engines, rated up to 94,000 pounds thrust each</td></tr><tr>
									<td>Wing span</td><td class="white-text">199 feet, 11 inches</td></tr>
										</tbody></table>					

					<div class="close">close</div>
						</div>

					<!-- Begin Second Row -->
						<!-- first overlay with id "A319" -->
					<div class="overlay yellowBox" id="AthreeNineteen" style="display: none;"> 
								<h2>A319</h2>
						<ul class="aircraft-class-selection">
							<li><a href="aircraft-landing.html" hidefocus="hidefocus">3 Class Int</a></li> <!-- Link directly to aircraft class page-->
							<li><a href="#" hidefocus="hidefocus">2 Class Int</a></li>
							<li><a href="#" hidefocus="hidefocus">2 Class</a></li>
							</ul>
										<table class="spec-table"><tbody><tr>

									  <td class="first-col">Specs</td><td>&nbsp;</td> </tr><tr>
									  <td>Fleet Count</td><td class="white-text">43</td></tr><tr>
									<td>First delivery</td><td class="white-text">2004</td></tr><tr>
									<td>Max range</td><td class="white-text">5240nm (A-Model) / 7725nm (ER)</td></tr><tr>
									<td>Cruise speed</td><td class="white-text">550 mph</td></tr><tr>
					<td>Propulsion</td><td class="white-text">Two General Electric GE90 or two Pratt &amp; Whitney PW4077/4090 engines, rated up to 94,000 pounds thrust each</td></tr><tr>
									<td>Wing span</td><td class="white-text">199 feet, 11 inches</td></tr>
										</tbody></table>					

					<div class="close">close</div>
					</div>
		
				<!-- first overlay with id "A319" -->
			<div class="overlay yellowBox" id="AthreeTwenty" style="display: none;"> 
						<h2>A320</h2>
				<ul class="aircraft-class-selection">
					<li><a href="aircraft-landing.html" hidefocus="hidefocus">3 Class Int</a></li> <!-- Link directly to aircraft class page-->
					<li><a href="#" hidefocus="hidefocus">2 Class Int</a></li>
					<li><a href="#" hidefocus="hidefocus">2 Class</a></li>
					</ul>
								<table class="spec-table"><tbody><tr>

							  <td class="first-col">Specs</td><td>&nbsp;</td> </tr><tr>
							  <td>Fleet Count</td><td class="white-text">43</td></tr><tr>
							<td>First delivery</td><td class="white-text">2004</td></tr><tr>
							<td>Max range</td><td class="white-text">5240nm (A-Model) / 7725nm (ER)</td></tr><tr>
							<td>Cruise speed</td><td class="white-text">550 mph</td></tr><tr>
			<td>Propulsion</td><td class="white-text">Two General Electric GE90 or two Pratt &amp; Whitney PW4077/4090 engines, rated up to 94,000 pounds thrust each</td></tr><tr>
							<td>Wing span</td><td class="white-text">199 feet, 11 inches</td></tr>
								</tbody></table>					

			<div class="close">close</div>
			</div>
			
						<!-- Begin Third Row -->
							<!-- first overlay with id "A319" -->
						<div class="overlay yellowBox" id="E-Jets" style="display: none;"> 
									<h2>E-Jets</h2>
							<ul class="aircraft-class-selection">
								<li><a href="aircraft-landing.html" hidefocus="hidefocus">3 Class Int</a></li> <!-- Link directly to aircraft class page-->
								<li><a href="#" hidefocus="hidefocus">2 Class Int</a></li>
								<li><a href="#" hidefocus="hidefocus">2 Class</a></li>
								</ul>
											<table class="spec-table"><tbody><tr>

										  <td class="first-col">Specs</td><td>&nbsp;</td> </tr><tr>
										  <td>Fleet Count</td><td class="white-text">43</td></tr><tr>
										<td>First delivery</td><td class="white-text">2004</td></tr><tr>
										<td>Max range</td><td class="white-text">5240nm (A-Model) / 7725nm (ER)</td></tr><tr>
										<td>Cruise speed</td><td class="white-text">550 mph</td></tr><tr>
						<td>Propulsion</td><td class="white-text">Two General Electric GE90 or two Pratt &amp; Whitney PW4077/4090 engines, rated up to 94,000 pounds thrust each</td></tr><tr>
										<td>Wing span</td><td class="white-text">199 feet, 11 inches</td></tr>
											</tbody></table>					

						<div class="close">close</div>
						</div>
						
							<!-- END OF OVERLAYS!! -->
			
			<table class="grid-nav" id="fleet-grid" width="700" height="420">
				
				<tbody><tr>
					<td class="dark-text"><h3>Widebody</h3>
						<h4>Fleet Count Total</h4>
						<h4> $widebody_total;</h4> </td>
					<td class="white-text gray" rel="#sevenEightySeven"><h2>787</h2>
						<div class="expand-button">
								 <span class="fleet-count">Fleet Count XXX<!-- $sevenEightySeven_total; --></span>
						</div>
							
							</td>
							
								
								
					<td class="white-text ltBlu" rel="#sevenSevenSeven"><h2>777</h2>
						 	<div class="expand-button">
									 <span class="fleet-count">Fleet Count XXX<!-- $sevenSeventySeven_total; --></span>
							</div></td>					
					<td class="white-text dkBlu" rel="#sevenSixtySeven"><h2>767</h2>
						 	<div class="expand-button">
				<span class="fleet-count">Fleet Count $sevenSixtySeven_total; </span>
							</div></td>
					<td class="white-text mdBlu"><h2>747</h2>	 
							<div class="expand-button">
									 <span class="fleet-count"> XXX<!-- $sevenEightyForty_total;  etc...--> </span>
							</div></td>
				</tr>
				
				<tr>
					<td class="dark-text"><h3>Narrowbody</h3>
						<h4>Fleet Count Total</h4>
						<h4> $narrowbody_total; </h4></td>
					<td class="white-text dkBlu" rel="#AthreeNineteen"><h2>A319</h2>
							<div class="expand-button">
									 <span class="fleet-count">Fleet Count XXX</span>
							</div></td>
						
					<td class="white-text mdBlu" rel="#AthreeTwenty"><h2>A320</h2>	 
							<div class="expand-button">
									 <span class="fleet-count">Fleet Count XXX</span>
							</div></td>					
					<td class="white-text gray"><h2>737</h2>	 					
							<div class="expand-button">
									 <span class="fleet-count">Fleet Count XXX</span>
							</div></td>
					<td class="white-text dkBlu"><h2>757</h2>	 
							<div class="expand-button">
									 <span class="fleet-count">Fleet Count XXX</span>
							</div></td>
				</tr>
					
				<tr>
					<td class="dark-text"><h3>Regional</h3>
						<h4>Fleet Count Total</h4>
						<h4>XXX</h4></td>
					<td class="white-text ltBlu" rel="#E-Jets"><h2>E-Jets</h2>	 
							<div class="expand-button">
									 <span class="fleet-count">Fleet Count XXX</span>
							</div></td>
					<td class="white-text dkBlu"><h2>CRJs</h2>	 
							<div class="expand-button">
									 <span class="fleet-count">Fleet Count XXX</span>
							</div></td>
					<td class="white-text mdBlu"><h2>ERJ</h2>	 
							<div class="expand-button">
									 <span class="fleet-count">Fleet Count XXX</span>
							</div></td>					
					<td class="white-text ltBlu"><h2>PROP</h2>	 
							<div class="expand-button">
									 <span class="fleet-count">Fleet Count XXX</span>
							</div></td>
				</tr>
			</tbody></table>
		
		
	<!-- End of Table wrap-->	</div>

	</div>
	
		</div>
        
        
    </div><!-- /#content -->

    <div id="navigation">

      <?php print render($page['navigation']); ?>

    </div><!-- /#navigation -->

    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
       
      </aside><!-- /.sidebars -->
    <?php endif; ?>
    
     

  </div><!-- /#main -->

  <?php print render($page['footer']); ?>

</div><!-- /#page -->

<?php print render($page['bottom']); ?>
