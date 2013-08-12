<?php
/**
 * @file
 * Zen theme's implementation to display a sidebar region.
 *
 * Available variables:
 * - $content: The content for this region, typically blocks.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - region: The current template type, i.e., "theming hook".
 *   - region-[name]: The name of the region with underscores replaced with
 *     dashes. For example, the page_top region would have a region-page-top class.
 * - $region: The name of the region variable as defined in the theme's .info file.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 *
 * @see template_preprocess()
 * @see template_preprocess_region()
 * @see zen_preprocess_region()
 * @see template_process()
 */
?>

<!-- Fleet Nav Grid -->
<div id="table-wrap">
	<?php if ($content): ?>		
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
										  <td>Fleet Count</td><td class="white-text"><?php print $field_seveneightyseven_total; ?></td></tr><tr>
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
						<h4><?php print $widebody_total; ?></h4> </td>
					<td class="white-text gray" rel="#sevenEightySeven"><h2>787</h2>
						<div class="expand-button">
								 <span class="fleet-count">Fleet Count <?php print $sevenEightySeven_total; ?></span>
						</div>
							
							</td>
							
								
								
					<td class="white-text ltBlu" rel="#sevenSevenSeven"><h2>777</h2>
						 	<div class="expand-button">
									 <span class="fleet-count">Fleet Count <?php print $sevenSeventySeven_total; ?></span>
							</div></td>					
					<td class="white-text dkBlu" rel="#sevenSixtySeven"><h2>767</h2>
						 	<div class="expand-button">
									 <span class="fleet-count">Fleet Count <?php print $sevenSixtySeven_total; ?></span>
							</div></td>
					<td class="white-text mdBlu"><h2>747</h2>	 
							<div class="expand-button">
									 <span class="fleet-count"><?php print $sevenEightyForty_total; ?></span>
							</div></td>
				</tr>
				
				<tr>
					<td class="dark-text"><h3>Narrowbody</h3>
						<h4>Fleet Count Total</h4>
						<h4><?php print $narrowbody_total; ?></h4></td>
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
			<?php endif; ?>
		
	<!-- End of Table wrap-->	</div>
