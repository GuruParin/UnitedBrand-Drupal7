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
					<table class="grid-nav landing-grid" id="fleet-grid" width="700" height="280">
				<tbody><tr>
					<td class="white-text mdBlu"><a href="aircraft-overview.html" hidefocus="hidefocus"><h2>Aircraft Overview</h2>
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
			<?php endif; ?>
		
	<!-- End of Table wrap-->	</div>
