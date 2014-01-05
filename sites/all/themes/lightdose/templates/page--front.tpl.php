<?php
// Path to the Light Dose theme	
//$lightdose = drupal_get_path('theme' , 'lightdose').'/html';

?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

<!--BEGIN Topper-->
<header class="theme-white background foreground topper" id="navigation">
	<div class="container stretch-height text-right">
		<a class="logo scroll stretch-height pull-left text-left" href="#slider">
			<!--BEGIN Logo image-->
			<!--DESCRIPTION

				Any image format can be used.
				In this example SVG logo is used with PNG fallback.

			-->
			<div class="image pull-left">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="50px" height="28px" viewBox="0 0 50 28" enable-background="new 0 0 50 28" xml:space="preserve">
					<switch>
						<g>
							<path fill="black" d="M10.822,0.013H-0.001v16.185v10.788h10.824h10.824V16.198H10.822V0.013z"/>
							<path fill="black" d="M32.471,0.013H16.235v10.789h16.236c1.494,0,2.705,1.208,2.705,2.697c0,1.491-1.211,2.698-2.705,2.698v0.001
								h-5.413v10.788h5.413c7.472,0,13.53-6.038,13.53-13.487C46.001,6.051,39.943,0.013,32.471,0.013z"/>
						</g>
						<foreignObject width="50" height="28">
							<img src="<?php print $lightdose; ?>/img/light-dose-logo.png" alt="" />
						</foreignObject>
					</switch>
				</svg>
			</div>
			<!--END Logo image-->

			<!--BEGIN Logo text-->
			<div class="text pull-left">
				<?php print $site_name;?>
				<br />
				<?php print $site_slogan;?>
			</div>
			<!--END Logo text-->
		</a>
		<button type="button" class="menu-toggle fa">
			&#xf0c9;
		</button>
		<div class="menu">
			<div class="stretch-both">

				<!--BEGIN Topper menu-->
				<ul class="nav list-inline navbar-nav scale-up">
					<li>
						<a class="scroll" href="#slider">
							Home
							<div class="overlay">
							</div>
						</a>
					<li>
						<a class="scroll" href="#about">
							About
							<div class="overlay">
							</div>
						</a>
					<li>
						<a class="scroll" href="#services">
							Services
							<div class="overlay">
							</div>
						</a>
					<li>
						<a class="scroll" href="#works">
							Works
							<div class="overlay">
							</div>
						</a>
					<li>
						<a class="scroll" href="#team">
							Team
							<div class="overlay">
							</div>
						</a>
					<li>
						<a class="scroll" href="#contacts">
							Contacts
							<div class="overlay">
							</div>
						</a>
					<!-- <li>
						<a class="scroll" href="blog.html#blog">
							Blog
							<div class="overlay">
							</div>
						</a>
					<li>
						<a class="dropdown" href="#">
							More&hellip;
						</a>
						<ul class="dropdown-slide text-left pull-right">
							<li>
								<a class="scroll" href="login.html">
									Login
								</a>
							<li>
								<a class="scroll" href="register.html">
									Register
								</a>
							<li>
								<a class="scroll" href="typography.html">
									Typography
								</a>
							<li>
								<a class="scroll" href="post.html">
									Blog post
								</a>
						</ul> -->
				</ul>
				<!--END Topper menu-->

			</div>
		</div>
	</div>
</header>
<!--END Topper-->

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

		<!--BEGIN Slider-->
		<!--DESCRIPTION

			This article is designed as a slider-only.

		-->
		<article class="slider theme-color foreground">
			<div class="text-center" id="slider">
				<div class="inner-wrapper stretch-both">
					<div>
						<div class="scale-down">
							<h1 class="data-short">
								<?php print $site_name; ?>
							</h1>

							<!--BEGIN Slider caption-->
							<!--DESCRIPTION

								Here initial text below logo is set.
								It can be altered for any slide in <Slider images> section via 'alt' attribute.

							-->
							<h4 class="data-full">
								<?php print $site_slogan; ?>
							</h4>
							<!--END Slider caption-->

						</div>
						<a class="btn scroll" href="#works">
							View Our Works
						</a>
					</div>
				</div>

				<!--BEGIN Slider images-->
				<!--DESCRIPTION Text in .data-short and .data-full will change only if attributes on slides differ from original value. -->
				<img class="slide" src="http://placehold.it/1600x800/000000/000000" data-short="<?php print $site_name; ?>" data-full="<?php print $site_slogan; ?>" 
					alt="<?php print $site_name; ?>" />
				<!--END Slider images-->

			</div>
		</article>
		<!--END Slider-->

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
		<!--BEGIN About-->
		<!--DESCRIPTION

			This article is designed:
				- without parallax background
				- with image galleries, described in <Blueimp> section.

		-->
		<!--
		<iframe width="560" height="315" src="http://www.youtube-nocookie.com/embed/KTiQ75HY0DA?rel=0&enablejsapi=1" frameborder="0"></iframe>
		-->
		<article class="about page-light-dose theme-white background foreground links" id="about">
			<header class="text-center">
				<div class="sect">
					<div class="line line-left">
					</div>
					&sect;
					<div class="line line-right">
					</div>
				</div>
				<h2>
					About
				</h2>
			</header>
			<div class="container">
				<div class="row">

					<!--BEGIN Blueimp-->
					<!--DESCRIPTION

						Here a gallery of five images is formed.
						See .blueimp class reference for details.

					-->
					<div class="blueimp col-lg-3 col-md-3 col-sm-6 col-xs-12 masonry">

						<!--BEGIN Blueimp image-->
						<a href="http://placehold.it/800x400/000000/aaaaaa" title="">
							<img src="http://placehold.it/100x100/444444/aaaaaa" alt="" />
							<div class="overlay">
							</div>
						</a>
						<!--END Blueimp image-->

						<!--BEGIN Blueimp image-->
						<a href="http://placehold.it/800x400/000000/aaaaaa" title="">
							<img src="http://placehold.it/100x100/444444/aaaaaa" alt="" />
							<div class="overlay">
							</div>
						</a>
						<!--END Blueimp image-->

						<!--BEGIN Blueimp image-->
						<a href="http://placehold.it/800x400/000000/aaaaaa" title="">
							<img src="http://placehold.it/100x100/444444/aaaaaa" alt="" />
							<div class="overlay">
							</div>
						</a>
						<!--END Blueimp image-->

						<!--BEGIN Blueimp image-->
						<a href="http://placehold.it/800x400/000000/aaaaaa" title="">
							<img src="http://placehold.it/100x100/444444/aaaaaa" alt="" />
							<div class="overlay">
							</div>
						</a>
						<!--END Blueimp image-->

					</div>
					<!--END Blueimp-->

					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

						<!--BEGIN About block caption-->
						<span class="caption color">
							Who We Are?
						</span>
						<!--END About block caption-->

						<p>
							Our сompany became famous among thousands of visitors and purchasers of the most known online resource copyright works during the short period of its existence.
						</p>
						<p>
							Our сompany offers a number of creative products such as: online stores templates, one page promo sites, graphic works and corporate style for the wide audience.
						</p>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

						<!--BEGIN About block caption-->
						<span class="caption color">
							What Do We Do?
						</span>
						<!--END About block caption-->

						<p>
							«Itembridge» offers a number of creative products such as: online stores templates, one page promo sites, graphic works and corporate style for the wide audience.
						</p>
						<p>
							Corporate style and graphic works always have the perfect design so you do not have to change a lot of settings to achieve the desired style.
						</p>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

						<!--BEGIN About block caption-->
						<span class="caption color">
							Our Mission
						</span>
						<!--END About block caption-->

						<p>
							Our сompany is the friendly team of professionals, who create exclusive designs, unique and clear functionality of the templates.
						</p>
						<p>
							Corporate style and graphic works always have the perfect design so you do not have to change a lot of settings to achieve the desired style.
						</p>
					</div>
				</div>
			</div>
		</article>
		<!--END About-->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

		<!--BEGIN Facts-->
		<!--DESCRIPTION

			This article is designed:
				- with animated counters

		-->
		<article class="facts page-light-dose theme-white background foreground links" id="facts">
			<div class="container text-center">
				<h5>
					Some facts about our company
				</h5>

				<div class="row">

					<!--BEGIN Facts item-->
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<span class="fa" data-color="#E0302A">
							&#xf013;
						</span>
						<span class="counter">
							<span class="value">
								1400
							</span>
							<small>
								projects completed
							</small>
						</span>
					</div>
					<!--END Facts item-->

					<!--BEGIN Facts item-->
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<span class="fa" data-color="#DBA500">
							&#xf08a;
						</span>
						<span class="counter">
							<span class="value">
								750
							</span>
							<small>
								regular customers
							</small>
						</span>
					</div>
					<!--END Facts item-->

					<!--BEGIN Facts item-->
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<span class="fa" data-color="#117919">
							&#xf006;
						</span>
						<span class="counter">
							<span class="value">
								400
							</span>
							<small>
								positive reviews
							</small>
						</span>
					</div>
					<!--END Facts item-->

				</div>
			</div>
		</article>
		<!--END Facts-->
		
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->


		<!--BEGIN Services-->
		<!--DESCRIPTION

			This article is designed:
				- with parallax background, see DEMO styles for details.
				- with background-fade/blur and element slide-in animation effect upon first element viewing.

		-->
		<article class="services page-light-dose theme-color background foreground aparallax" id="services">
			<div class="underlay">
				<div class="overlay aparallax">
				</div>
				<header class="text-center">
					<div class="sect">
						<div class="line line-left">
						</div>
						&sect;
						<div class="line line-right">
						</div>
					</div>
					<h2>
						Services
					</h2>
				</header>
				<div class="container">
					<div class="row">

						<!--BEGIN Services item-->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<h4>

								<!--BEGIN Services item icon-->
								<!--DESCRIPTION

									For icon details one can visit
										http://fortawesome.github.io/Font-Awesome/cheatsheet/
									There all icon symbol details are supplied.

								-->
								<span class="fa">
									&#xf133;
								</span>
								<!--END Services item icon-->

								Promotion
							</h4>
							<p>
								Оne of the market mix elements, and a term used frequently in marketing. These elements are personal selling, advertising, sales promotion, direct marketing, and publicity. A promotional mix specifies how much attention to pay to each of the five subcategories, and how much money to budget for each.
							</p>
						</div>
						<!--END Services item-->

						<!--BEGIN Services item-->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<h4>

								<!--BEGIN Services item icon-->
								<span class="fa">
									&#xf0eb;
								</span>
								<!--END Services item icon-->

								Marketing
							</h4>
							<p>
								Refers to advertising and marketing efforts that use the Web and e-mail to deliver promotional marketing messages to consumers.
							</p>
						</div>
						<!--END Services item-->

						<div class="clearfix visible-sm">
						</div>

						<!--BEGIN Services item-->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<h4>

								<!--BEGIN Services item icon-->
								<span class="fa">
									&#xf087;
								</span>
								<!--END Services item icon-->

								Web Design
							</h4>
							<p>
								Encompasses the great amount of different skills and disciplines that are used in the production and maintenance of website.
							</p>
						</div>
						<!--END Services item-->

						<div class="clearfix visible-md">
						</div>

						<!--BEGIN Services item-->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<h4>

								<!--BEGIN Services item icon-->
								<span class="fa">
									&#xf08a;
								</span>
								<!--END Services item icon-->

								Production
							</h4>
							<p>
								The processes and methods used to transform tangible inputs (raw materials, semi-finished goods, subassemblies) and intangible inputs (ideas, information, knowledge) into goods or services. Resources are used in this process to create an output that is suitable for use or has exchange value.
							</p>
						</div>
						<!--END Services item-->

					</div>
				</div>
			</div>
		</article>
		<!--END Services-->
		
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->


		<!--BEGIN Works-->
		<!--DESCRIPTION

			This article is designed:
				- without bootstrap grid
				- with image galleries, described in <Blueimp> section.
				- with content carousel, described in <Caroufredsel> section.
				- with zoom-in animation effect upon first element viewing.

		-->
		<article class="works page-light-dose theme-white background foreground" id="works">
			<header class="text-center">
				<div class="sect">
					<div class="line line-left">
					</div>
					&sect;
					<div class="line line-right">
					</div>
				</div>
				<h2>
					Works
				</h2>
			</header>

			<div class="container">
				<div class="row tags text-center grid-filter">
					<a class="active" href="#" data-filter="*">
						All
					</a>
					<a href="#" data-filter=".architecture">
						Architecture
					</a>
					<a href="#" data-filter=".photography">
						Photography
					</a>
					<a href="#" data-filter=".style">
						Style
					</a>
					<a href="#" data-filter=".other">
						Other
					</a>
				</div>
			</div>
			<!--BEGIN Works grid-->
			<ul class="list-inline grid small text-left">

				<!--BEGIN Works grid item-->
				<li class="architecture">
					<img class="zoomIn img-responsive stretch-width" src="img/light-dose/works/works-image-0.jpg" alt="A Barcelona apartment by Eva Cotman" />
					<!--
					<img class="zoomIn img-responsive stretch-width" src="img/light-dose/works/a-barcelona-apartment-by-eva-cotman-gessato-gblog-1-580x386.jpg" alt="A Barcelona apartment by Eva Cotman" />
					-->
					<div class="overlay">
						<div class="stretch-both">
							<div>
								<h4>
									A Barcelona apartment by Eva Cotman
								</h4>
								<p>
									in Raval at the District of Ciutat Vella
								</p>
							</div>
						</div>
					</div>
				<!--END Works grid item-->

				<!--BEGIN Works grid item-->
				<li class="style">
					<img class="zoomIn img-responsive stretch-width" src="img/light-dose/works/works-image-1.jpg" alt="Bamboo chair Flow" />
					<!--
					<img class="zoomIn img-responsive stretch-width" src="img/light-dose/works/bamboo-chair-flow-by-cheng-tsung-feng-kao-min-chen-1-580x386.jpg" alt="Bamboo chair Flow" />
					-->
					<div class="overlay">
						<div class="stretch-both">
							<div>
								<h4>
									Bamboo chair Flow
								</h4>
								<p>
									by Cheng-Tsung Feng and Kao-Min Chen
								</p>
							</div>
						</div>
					</div>
				<!--END Works grid item-->

				<!--BEGIN Works grid item-->
				<li class="style">
					<img class="zoomIn img-responsive stretch-width" src="img/light-dose/works/works-image-2.jpg" alt="Jeroen Van Leur’s woodstock wardrobe" />
					<!--
					<img class="zoomIn img-responsive stretch-width" src="img/light-dose/works/jeroen-van-leurs-woodstock-wardrobe-1-580x388.jpg" alt="Jeroen Van Leur’s woodstock wardrobe" />
					-->
					<div class="overlay">
						<div class="stretch-both">
							<div>
								<h4>
									Jeroen Van Leur’s woodstock wardrobe
								</h4>
								<p>
									something more beautiful than a shower curtain
								</p>
							</div>
						</div>
					</div>
				<!--END Works grid item-->

				<!--BEGIN Works grid item-->
				<li class="style">
					<img class="zoomIn img-responsive stretch-width" src="img/light-dose/works/works-image-3.jpg" alt="LSTN, reclaimed wood headphones" />
					<!--
					<img class="zoomIn img-responsive stretch-width" src="img/light-dose/works/lstn-reclaimed-wood-headphones-9-580x386.jpg" alt="LSTN, reclaimed wood headphones" />
					-->
					<div class="overlay">
						<div class="stretch-both">
							<div>
								<h4>
									LSTN, reclaimed wood headphones
								</h4>
								<p>
									feels like a walk through the woods
								</p>
							</div>
						</div>
					</div>
				<!--END Works grid item-->

				<!--BEGIN Works grid item-->
				<li class="other">
					<img class="zoomIn img-responsive stretch-width" src="img/light-dose/works/works-image-4.jpg" alt="Nomadic ironing board" />
					<!--
					<img class="zoomIn img-responsive stretch-width" src="img/light-dose/works/nomadic-ironing-board-4-580x386.jpg" alt="Nomadic ironing board" />
					-->
					<div class="overlay">
						<div class="stretch-both">
							<div>
								<h4>
									Nomadic ironing board
								</h4>
								<p>
									do-it-yourself
								</p>
							</div>
						</div>
					</div>
				<!--END Works grid item-->

				<!--BEGIN Works grid item-->
				<li class="other">
					<img class="zoomIn img-responsive stretch-width" src="img/light-dose/works/works-image-5.jpg" alt="Outlier minimal backpack" />
					<!--
					<img class="zoomIn img-responsive stretch-width" src="img/light-dose/works/outlier-minimal-backpack-2-580x386.jpg" alt="Outlier minimal backpack" />
					-->
					<div class="overlay">
						<div class="stretch-both">
							<div>
								<h4>
									Outlier minimal backpack
								</h4>
								<p>
									nothing more than the bare minimum
								</p>
							</div>
						</div>
					</div>
				<!--END Works grid item-->

				<!--BEGIN Works grid item-->
				<li class="photography">
					<img class="zoomIn img-responsive stretch-width" src="img/light-dose/works/works-image-6.jpg" alt="Palm springs in postcards" />
					<!--
					<img class="zoomIn img-responsive stretch-width" src="img/light-dose/works/palm-springs-in-postcards-dolly-faibyshev-3-580x387.jpg" alt="Palm springs in postcards" />
					-->
					<div class="overlay">
						<div class="stretch-both">
							<div>
								<h4>
									Palm Springs in postcards
								</h4>
								<p>
									by Dolly Fairbyshev
								</p>
							</div>
						</div>
					</div>
				<!--END Works grid item-->

				<!--BEGIN Works grid item-->
				<li class="architecture photography">
					<img class="zoomIn img-responsive stretch-width" src="img/light-dose/works/works-image-7.jpg" alt="The Pump House" />
					<!--
					<img class="zoomIn img-responsive stretch-width" src="img/light-dose/works/the-pump-house-branch-studio-architects-1-580x386.jpg" alt="The Pump House" />
					-->
					<div class="overlay">
						<div class="stretch-both">
							<div>
								<h4>
									The Pump House
								</h4>
								<p>
									by Branch Studio Architects
								</p>
							</div>
						</div>
					</div>
				<!--END Works grid item-->

				<!--BEGIN Works grid item-->
				<!--
				<li class="other">
					<img class="zoomIn img-responsive stretch-width" src="img/light-dose/works/ucy-11f1-porteur-duomatic-by-ucy-gessato-gblog-3-580x388.jpg" alt="11F1 Porteur Duomatic by UCY" />
					<div class="overlay">
						<div class="stretch-both">
							<div>
								<h4>
									11F1 Porteur Duomatic by UCY
								</h4>
								<p>
									from Firenze Bicycle Film Festival
								</p>
							</div>
						</div>
					</div>
				-->
				<!--END Works grid item-->

			</ul>
			<!--END Works grid-->

			<!--BEGIN Works section-->
			<section class="page-light-dose collapse-height stretch-width">
				<div class="container">
					<div class="row">
						<div class="col-lg-1 col-md-2 col-sm-12 col-xs-12 text-right controls">
							<svg class="previous" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
								<switch>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#000" d="M0,12L12.6,0L14,1.4L3.4,11.9L14,22.6L12.6,24L0,12"/>
									<foreignObject width="24" height="24">
										<img class="previous" src="img/icon-previous.png" alt="Previous" title="Previous" />
									</foreignObject>
								</switch>
							</svg>
							<svg class="next" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 14 24" enable-background="new 0 0 14 24" xml:space="preserve">
								<switch>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#000" d="M14,12L1.4,24L0,22.6l10.6-10.7L0,1.4L1.4,0L14,12"/>
									<foreignObject width="24" height="24">
										<img class="next" src="img/icon-next.png" alt="Next" title="Next" />
									</foreignObject>
								</switch>
							</svg>
							<svg class="close" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="5 5 17 17" enable-background="new 0 0 27 27" xml:space="preserve">
								<switch>
									<g>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#000" d="M21.3,5L22,5.7L5.7,22L5,21.3L21.3,5z"/>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#000" d="M5,5.7L5.7,5L22,21.3L21.3,22L5,5.7z"/>
									</g>
									<foreignObject width="22" height="22">
										<img class="close" width="17" height="17" src="img/icon-close.png" alt="Close" title="Close" />
									</foreignObject>
								</switch>
							</svg>
						</div>
						<div class="col-lg-11 col-md-10 col-sm-12 col-xs-12">
							<div class="caroufredsel enable-controls">
								<div class="row">
									
									<!--BEGIN Works carousel item-->
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="caroufredsel enable-swipe enable-pagination blueimp">
											
											<!--BEGIN Works carousel item inner-->
											<div>
												<a class="img-responsive" href="img/light-dose/works/a-barcelona-apartment-by-eva-cotman-gessato-gblog-1-580x386.jpg" title="A barcelona apartment by Eva Cotman">
													<img class="img-responsive" src="img/light-dose/works/a-barcelona-apartment-by-eva-cotman-gessato-gblog-1-580x386.jpg" alt="A barcelona apartment by Eva Cotman" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<!--END Works carousel item inner-->

											<!--BEGIN Works carousel item inner-->
											<div>
												<a class="img-responsive" href="img/light-dose/works/a-barcelona-apartment-by-eva-cotman-gessato-gblog-2-580x386.jpg" title="A barcelona apartment by Eva Cotman">
													<img class="img-responsive" src="img/light-dose/works/a-barcelona-apartment-by-eva-cotman-gessato-gblog-2-580x386.jpg" alt="A barcelona apartment by Eva Cotman" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<!--END Works carousel item inner-->

											<!--BEGIN Works carousel item inner-->
											<div>
												<a class="img-responsive" href="img/light-dose/works/a-barcelona-apartment-by-eva-cotman-gessato-gblog-3-580x386.jpg" title="A barcelona apartment by Eva Cotman">
													<img class="img-responsive" src="img/light-dose/works/a-barcelona-apartment-by-eva-cotman-gessato-gblog-3-580x386.jpg" alt="A barcelona apartment by Eva Cotman" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<!--END Works carousel item inner-->

											<!--BEGIN Works carousel item inner-->
											<div>
												<a class="img-responsive" href="img/light-dose/works/a-barcelona-apartment-by-eva-cotman-gessato-gblog-4-580x386.jpg" title="A barcelona apartment by Eva Cotman">
													<img class="img-responsive" src="img/light-dose/works/a-barcelona-apartment-by-eva-cotman-gessato-gblog-4-580x386.jpg" alt="A barcelona apartment by Eva Cotman" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<!--END Works carousel item inner-->

											<!--BEGIN Works carousel item inner-->
											<div>
												<a class="img-responsive" href="img/light-dose/works/a-barcelona-apartment-by-eva-cotman-gessato-gblog-5-580x386.jpg" title="A barcelona apartment by Eva Cotman">
													<img class="img-responsive" src="img/light-dose/works/a-barcelona-apartment-by-eva-cotman-gessato-gblog-5-580x386.jpg" alt="A barcelona apartment by Eva Cotman" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<!--END Works carousel item inner-->

										</div>
										<span class="pagination text-center">
										</span>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

										<!--BEGIN Works carousel item desciption-->
										<h4>
											A barcelona apartment by Eva Cotman
										</h4>
										<div class="meta-wrapper">
											<div class="category">
												<b>
													Category:
												</b>
												Architecture
											</div>
										</div>
										<div>
											<p>
												This sweetheart apartment by architect Eva Cotman in Raval at the District of Ciutat Vella in Barcelona, Spain has swept us off our feet with romantic touches of reclaimed barn wood. The interior walls sparkle white as a blank canvas for the young couple living here to play with colorful additions of their own. Like the inviting library which stores great heights of books taking on the shape of a staircase that also works as a passage into a guest loft. Its purity and humility suits the simple; still the design keeps those who hope for more in life well satisfied.
											</p>
										</div>
										<!--END Works carousel item desciption-->

									</div>
								</div>
								<!--END Works carousel item-->

								<!--BEGIN Works carousel item-->
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="caroufredsel enable-swipe enable-pagination blueimp">
											<div>
												<a class="img-responsive" href="img/light-dose/works/bamboo-chair-flow-by-cheng-tsung-feng-kao-min-chen-1-580x386.jpg" title="Bamboo chair Flow">
													<img class="img-responsive" src="img/light-dose/works/bamboo-chair-flow-by-cheng-tsung-feng-kao-min-chen-1-580x386.jpg" alt="Bamboo chair Flow" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/bamboo-chair-flow-by-cheng-tsung-feng-kao-min-chen-2-580x386.jpg" title="Bamboo chair Flow">
													<img class="img-responsive" src="img/light-dose/works/bamboo-chair-flow-by-cheng-tsung-feng-kao-min-chen-2-580x386.jpg" alt="Bamboo chair Flow" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/bamboo-chair-flow-by-cheng-tsung-feng-kao-min-chen-3-580x386.jpg" title="Bamboo chair Flow">
													<img class="img-responsive" src="img/light-dose/works/bamboo-chair-flow-by-cheng-tsung-feng-kao-min-chen-3-580x386.jpg" alt="Bamboo chair Flow" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/bamboo-chair-flow-by-cheng-tsung-feng-kao-min-chen-4-580x386.jpg" title="Bamboo chair Flow">
													<img class="img-responsive" src="img/light-dose/works/bamboo-chair-flow-by-cheng-tsung-feng-kao-min-chen-4-580x386.jpg" alt="Bamboo chair Flow" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/bamboo-chair-flow-by-cheng-tsung-feng-kao-min-chen-14-580x434.jpg" title="Bamboo chair Flow">
													<img class="img-responsive" src="img/light-dose/works/bamboo-chair-flow-by-cheng-tsung-feng-kao-min-chen-14-580x434.jpg" alt="Bamboo chair Flow" />
													<div class="overlay">
													</div>
												</a>
											</div>
										</div>
										<span class="pagination text-center">
										</span>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<h4>
											Bamboo chair Flow
										</h4>
										<div class="meta-wrapper">
											<div class="category">
												<b>
													Category:
												</b>
												Style
											</div>
											<div class="client">
												<b>
													Client:
												</b>
												Cheng-Tsung Feng and Kao-Min Chen
											</div>
										</div>
										<div>
											<p>
												Come and relax in the original bamboo reclined chair Flow. Its name summarizes the whimsical and easy going design. Together designer Cheng-Tsung Feng and craft artist Kao-Min Chen produced the cloud like construction which makes it oh so lightweight and airy. Each piece takes up to 30 days to complete, handmade by a Taiwanese bamboo craft master of 25 years. The designer explains, “I would like to present the way of flying cloud, blowing wind and running water by bamboo material. The abstract of my concept represents a powerful action of nature turns into a weaker power gradually. I created lifeful, uncontrollable, perceptual and dynamic furniture, with vivid and lifelike strength.”
											</p>
										</div>
										<a class="btn btn-mono no-hover" href="blog.html#blog">
											Visit Site
										</a>
									</div>
								</div>
								<!--END Works carousel item-->

								<!--BEGIN Works carousel item-->
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="caroufredsel enable-swipe enable-pagination blueimp">
											<div>
												<a class="img-responsive" href="img/light-dose/works/jeroen-van-leurs-woodstock-wardrobe-1-580x388.jpg" title="Jeroen Van Leur’s woodstock wardrobe">
													<img class="img-responsive" src="img/light-dose/works/jeroen-van-leurs-woodstock-wardrobe-1-580x388.jpg" alt="Jeroen Van Leur’s woodstock wardrobe" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/jeroen-van-leurs-woodstock-wardrobe-2-580x388.jpg" title="Jeroen Van Leur’s woodstock wardrobe">
													<img class="img-responsive" src="img/light-dose/works/jeroen-van-leurs-woodstock-wardrobe-2-580x388.jpg" alt="Jeroen Van Leur’s woodstock wardrobe" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/jeroen-van-leurs-woodstock-wardrobe-3-580x388.jpg" title="Jeroen Van Leur’s woodstock wardrobe">
													<img class="img-responsive" src="img/light-dose/works/jeroen-van-leurs-woodstock-wardrobe-3-580x388.jpg" alt="Jeroen Van Leur’s woodstock wardrobe" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/jeroen-van-leurs-woodstock-wardrobe-6-580x388.jpg" title="Jeroen Van Leur’s woodstock wardrobe">
													<img class="img-responsive" src="img/light-dose/works/jeroen-van-leurs-woodstock-wardrobe-6-580x388.jpg" alt="Jeroen Van Leur’s woodstock wardrobe" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/jeroen-van-leurs-woodstock-wardrobe-7-580x388.jpg" title="Jeroen Van Leur’s woodstock wardrobe">
													<img class="img-responsive" src="img/light-dose/works/jeroen-van-leurs-woodstock-wardrobe-7-580x388.jpg" alt="Jeroen Van Leur’s woodstock wardrobe" />
													<div class="overlay">
													</div>
												</a>
											</div>
										</div>
										<span class="pagination text-center">
										</span>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<h4>
											Jeroen Van Leur’s woodstock wardrobe
										</h4>
										<div class="meta-wrapper">
											<div class="category">
												<b>
													Category:
												</b>
												Style
											</div>
										</div>
										<div>
											<p>
												Wondering about your flat in sorrow? Wishing there was something more beautiful than a shower curtain rod wedged between the door frame as a pathetic solution to lack of closets? Sure the pre wars are charming, but this is not going to work. Try something like Jeroen van Leur’s Woodstock Wardrobe. It’s pure and simple, an aesthetic gift to the alternative. It’s openness proves vulnerability, suggests truth and honesty. Exposing your wardrobe is just the beginning, the unique frame of wooden sticks and copper plunges into a cocked position making it more so pleasing to the eye. Like a symbol of the natural, perfectly imperfect, welcoming earth tones into your space available in various colors.
											</p>
										</div>
										<a class="btn btn-mono no-hover" href="blog.html#blog">
											Visit Site
										</a>
									</div>
								</div>
								<!--END Works carousel item-->

								<!--BEGIN Works carousel item-->
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="caroufredsel enable-swipe enable-pagination blueimp">
											<div>
												<a class="img-responsive" href="img/light-dose/works/lstn-reclaimed-wood-headphones-9-580x386.jpg" title="LSTN, reclaimed wood headphones">
													<img class="img-responsive" src="img/light-dose/works/lstn-reclaimed-wood-headphones-9-580x386.jpg" alt="LSTN, reclaimed wood headphones" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/lstn-reclaimed-wood-headphones-2-580x386.jpg" title="LSTN, reclaimed wood headphones">
													<img class="img-responsive" src="img/light-dose/works/lstn-reclaimed-wood-headphones-2-580x386.jpg" alt="LSTN, reclaimed wood headphones" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/lstn-reclaimed-wood-headphones-1-580x362.jpg" title="LSTN, reclaimed wood headphones">
													<img class="img-responsive" src="img/light-dose/works/lstn-reclaimed-wood-headphones-1-580x362.jpg" alt="LSTN, reclaimed wood headphones" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/lstn-reclaimed-wood-headphones-12-580x386.jpg" title="LSTN, reclaimed wood headphones">
													<img class="img-responsive" src="img/light-dose/works/lstn-reclaimed-wood-headphones-12-580x386.jpg" alt="LSTN, reclaimed wood headphones" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/lstn-reclaimed-wood-headphones-14-580x386.jpg" title="LSTN, reclaimed wood headphones">
													<img class="img-responsive" src="img/light-dose/works/lstn-reclaimed-wood-headphones-14-580x386.jpg" alt="LSTN, reclaimed wood headphones" />
													<div class="overlay">
													</div>
												</a>
											</div>
										</div>
										<span class="pagination text-center">
										</span>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<h4>
											LSTN, reclaimed wood headphones
										</h4>
										<div class="meta-wrapper">
											<div class="category">
												<b>
													Category:
												</b>
												Style
												<div class="client">
													<b>
														Client:
													</b>
													LSTN
												</div>
											</div>
										</div>
										<div>
											<p>
												Wearing a pair of LSTN Headphones feels like a walk through the woods. Insanely gorgeous polished grains in honey, espresso and mahogany on the ear pieces set the tone for a successful day. Responsibly made of reclaimed wood salvaged from flooring and furniture manufacturers. Most importantly is their mission to restore hearing for those less fortunate through the Starkey Hearing Foundation.  Each headset sold reacts in charity providing a hearing device for a person in need. Founders Joe Huff and Bridget Hilton are an inspiration, taking the hearing aids to developing nations themselves, being a part of the magical moment when the receiver hears for the first time.
											</p>
										</div>
										<a class="btn btn-mono no-hover" href="blog.html#blog">
											Visit Site
										</a>
									</div>
								</div>
								<!--END Works carousel item-->

								<!--BEGIN Works carousel item-->
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="caroufredsel enable-swipe enable-pagination blueimp">
											<div>
												<a class="img-responsive" href="img/light-dose/works/nomadic-ironing-board-1-580x386.jpg" title="Nomadic ironing board">
													<img class="img-responsive" src="img/light-dose/works/nomadic-ironing-board-1-580x386.jpg" alt="Nomadic ironing board" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/nomadic-ironing-board-2-580x386.jpg" title="Nomadic ironing board">
													<img class="img-responsive" src="img/light-dose/works/nomadic-ironing-board-2-580x386.jpg" alt="Nomadic ironing board" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/nomadic-ironing-board-3-580x386.jpg" title="Nomadic ironing board">
													<img class="img-responsive" src="img/light-dose/works/nomadic-ironing-board-3-580x386.jpg" alt="Nomadic ironing board" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/nomadic-ironing-board-4-580x386.jpg" title="Nomadic ironing board">
													<img class="img-responsive" src="img/light-dose/works/nomadic-ironing-board-4-580x386.jpg" alt="Nomadic ironing board" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/nomadic-ironing-board-5-580x386.jpg" title="Nomadic ironing board">
													<img class="img-responsive" src="img/light-dose/works/nomadic-ironing-board-5-580x386.jpg" alt="Nomadic ironing board" />
													<div class="overlay">
													</div>
												</a>
											</div>
										</div>
										<span class="pagination text-center">
										</span>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<h4>
											Nomadic ironing board
										</h4>
										<div class="meta-wrapper">
											<div class="category">
												<b>
													Category:
												</b>
												Other
											</div>
										</div>
										<div>
											<p>
												Years ago when the Do-it-yourself platform first encouraged individuals to venture out and have a go at making things with their own two hands a few leaders made their way to center stage printing instructional books on the subject. Among them 1973/1974 handbook in Nomadic Furniture 1 and 2 by James Hannessey and Victor Papanek explored the historic movement of DIY. Likewise, “Do-it-yourself furniture. Exciting designs for your home” edited by Harry Butler gave us permission to try new things like this design for the unique “Space saving ironing board” by chmara.rosinke which inspired the Nomadic ironing board before us. Made for the “Nomadic furniture 3.0. New Liberated Living?” at MAK – Österreichisches Museum für angewandte Kunst / Gegenwartskunst, the package flaunts a vanity that doubles as an ironing station. Included in the multifunctional piece is of course an ironing board, a mirror, light, storage drawer, small table top, and handy hooks.
											</p>
										</div>
									</div>
								</div>
								<!--END Works carousel item-->

								<!--BEGIN Works carousel item-->
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="caroufredsel enable-swipe enable-pagination blueimp">
											<div>
												<a class="img-responsive" href="img/light-dose/works/outlier-minimal-backpack-2-580x386.jpg" title="Outlier minimal backpack">
													<img class="img-responsive" src="img/light-dose/works/outlier-minimal-backpack-2-580x386.jpg" alt="Outlier minimal backpack" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/outlier-minimal-backpack-4-580x386.jpg" title="Outlier minimal backpack">
													<img class="img-responsive" src="img/light-dose/works/outlier-minimal-backpack-4-580x386.jpg" alt="Outlier minimal backpack" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/outlier-minimal-backpack-1-580x386.jpg" title="Outlier minimal backpack">
													<img class="img-responsive" src="img/light-dose/works/outlier-minimal-backpack-1-580x386.jpg" alt="Outlier minimal backpack" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/outlier-minimal-backpack-5-580x658.jpg" title="Outlier minimal backpack">
													<img class="img-responsive" src="img/light-dose/works/outlier-minimal-backpack-5-580x658.jpg" alt="Outlier minimal backpack" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/outlier-minimal-backpack-6-580x658.jpg" title="Outlier minimal backpack">
													<img class="img-responsive" src="img/light-dose/works/outlier-minimal-backpack-6-580x658.jpg" alt="Outlier minimal backpack" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/outlier-minimal-backpack-7-580x464.jpg" title="Outlier minimal backpack">
													<img class="img-responsive" src="img/light-dose/works/outlier-minimal-backpack-7-580x464.jpg" alt="Outlier minimal backpack" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/outlier-minimal-backpack-8-580x464.jpg" title="Outlier minimal backpack">
													<img class="img-responsive" src="img/light-dose/works/outlier-minimal-backpack-8-580x464.jpg" alt="Outlier minimal backpack" />
													<div class="overlay">
													</div>
												</a>
											</div>
										</div>
										<span class="pagination text-center">
										</span>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<h4>
											Outlier minimal backpack
										</h4>
										<div class="meta-wrapper">
											<div class="category">
												<b>
													Category:
												</b>
												Other
											</div>
											<div class="client">
												<b>
													Client:
												</b>
												Outlier
											</div>
										</div>
										<div>
											<p>
												The Minimal Backpack by Outlier offers nothing more than the bare minimum. A simple design in backpacker grade lightweight material it floats on water and rolls up tight as a soda can. Apparently the barely there characteristics are lost in the shadow of its mighty performance constructed of non-woven Dyneema fabric reportedly 10 times stronger than steel.  Made in cooperation with Hyperlite Mountain Gear in Biddeford, Maine.
											</p>
										</div>
										<a class="btn btn-mono no-hover" href="blog.html#blog">
											Visit Site
										</a>
									</div>
								</div>
								<!--END Works carousel item-->

								<!--BEGIN Works carousel item-->
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="caroufredsel enable-swipe enable-pagination blueimp">
											<div>
												<a class="img-responsive" href="img/light-dose/works/palm-springs-in-postcards-dolly-faibyshev-3-580x387.jpg" title="Palm Springs in postcards">
													<img class="img-responsive" src="img/light-dose/works/palm-springs-in-postcards-dolly-faibyshev-3-580x387.jpg" alt="Palm Springs in postcards" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/palm-springs-in-postcards-dolly-faibyshev-0-580x386.jpg" title="Palm Springs in postcards">
													<img class="img-responsive" src="img/light-dose/works/palm-springs-in-postcards-dolly-faibyshev-0-580x386.jpg" alt="Palm Springs in postcards" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/palm-springs-in-postcards-dolly-faibyshev-1-580x386.jpg" title="Palm Springs in postcards">
													<img class="img-responsive" src="img/light-dose/works/palm-springs-in-postcards-dolly-faibyshev-1-580x386.jpg" alt="Palm Springs in postcards" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/palm-springs-in-postcards-dolly-faibyshev-4-580x386.jpg" title="Palm Springs in postcards">
													<img class="img-responsive" src="img/light-dose/works/palm-springs-in-postcards-dolly-faibyshev-4-580x386.jpg" alt="Palm Springs in postcards" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/palm-springs-in-postcards-dolly-faibyshev-7-580x386.jpg" title="Palm Springs in postcards">
													<img class="img-responsive" src="img/light-dose/works/palm-springs-in-postcards-dolly-faibyshev-7-580x386.jpg" alt="Palm Springs in postcards" />
													<div class="overlay">
													</div>
												</a>
											</div>
										</div>
										<span class="pagination text-center">
										</span>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<h4>
											Palm Springs in postcards
										</h4>
										<div class="meta-wrapper">
											<div class="category">
												<b>
													Category:
												</b>
												Photography
											</div>
										</div>
										<div>
											<p>
												Photographer Dolly Faibyshev, a self-described “American born to Russian immigrants,” explores the American dream on both coasts, in New York City, Las Vegas, and now Palm Springs. Having captured dog shows, rodeos, and Occupy Wall Street on camera, she turns to architecture from the 1950s and 60s, looking at California just as an ordinary tourist might take in the view. Yet, Faibyshev’s Palm Springs is empty of people, uninterrupted but for the shadows of neighboring trees.
											</p>
										</div>
										<a class="btn btn-mono no-hover" href="blog.html#blog">
											Visit Site
										</a>
									</div>
								</div>
								<!--END Works carousel item-->

								<!--BEGIN Works carousel item-->
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="caroufredsel enable-swipe enable-pagination blueimp">
											<div>
												<a class="img-responsive" href="img/light-dose/works/the-pump-house-branch-studio-architects-1-580x386.jpg" title="The Pump House">
													<img class="img-responsive" src="img/light-dose/works/the-pump-house-branch-studio-architects-1-580x386.jpg" alt="The Pump House" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/the-pump-house-branch-studio-architects-12-580x386.jpg" title="The Pump House">
													<img class="img-responsive" src="img/light-dose/works/the-pump-house-branch-studio-architects-12-580x386.jpg" alt="The Pump House" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/the-pump-house-branch-studio-architects-13-580x290.jpg" title="The Pump House">
													<img class="img-responsive" src="img/light-dose/works/the-pump-house-branch-studio-architects-13-580x290.jpg" alt="The Pump House" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/the-pump-house-branch-studio-architects-14-580x386.jpg" title="The Pump House">
													<img class="img-responsive" src="img/light-dose/works/the-pump-house-branch-studio-architects-14-580x386.jpg" alt="The Pump House" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/the-pump-house-branch-studio-architects-4-580x386.jpg" title="The Pump House">
													<img class="img-responsive" src="img/light-dose/works/the-pump-house-branch-studio-architects-4-580x386.jpg" alt="The Pump House" />
													<div class="overlay">
													</div>
												</a>
											</div>
										</div>
										<span class="pagination text-center">
										</span>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<h4>
											The Pump House
										</h4>
										<div class="meta-wrapper">
											<div class="category">
												<b>
													Category:
												</b>
												Architecture, Photography
											</div>
											<div class="client">
												<b>
													Client:
												</b>
												Branch Studio Architects
											</div>
										</div>
										<div>
											<p>
												Rush into the Pump House whenever the need to be just as close to a pouring rain as your plush bed. It’s original intent was to shelter a few property items as a separate out building, soon after turned into something more. Now the fully self sufficient hideaway utilizing rain barrels for water, solar panels for energy, and wood burning stove for heat source. In beautiful craftsmanship it waits for visitors among the paddocks, up against a quiet damn. Made in collaboration with its carpenter owner and Branch Studio Architects.
											</p>
										</div>
										<a class="btn btn-mono no-hover" href="blog.html#blog">
											Visit Site
										</a>
									</div>
								</div>
								<!--
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="caroufredsel enable-swipe enable-pagination blueimp">
											<div>
												<a class="img-responsive" href="img/light-dose/works/ucy-11f1-porteur-duomatic-by-ucy-gessato-gblog-3-580x388.jpg" title="11F1 Porteur Duomatic by UCY">
													<img class="img-responsive" src="img/light-dose/works/ucy-11f1-porteur-duomatic-by-ucy-gessato-gblog-3-580x388.jpg" alt="11F1 Porteur Duomatic by UCY" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/ucy-11f1-porteur-duomatic-by-ucy-gessato-gblog-1-580x388.jpg" title="11F1 Porteur Duomatic by UCY">
													<img class="img-responsive" src="img/light-dose/works/ucy-11f1-porteur-duomatic-by-ucy-gessato-gblog-1-580x388.jpg" alt="11F1 Porteur Duomatic by UCY" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/ucy-11f1-porteur-duomatic-by-ucy-gessato-gblog-4-580x388.jpg" title="11F1 Porteur Duomatic by UCY">
													<img class="img-responsive" src="img/light-dose/works/ucy-11f1-porteur-duomatic-by-ucy-gessato-gblog-4-580x388.jpg" alt="11F1 Porteur Duomatic by UCY" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/ucy-11f1-porteur-duomatic-by-ucy-gessato-gblog-5-580x388.jpg" title="11F1 Porteur Duomatic by UCY">
													<img class="img-responsive" src="img/light-dose/works/ucy-11f1-porteur-duomatic-by-ucy-gessato-gblog-5-580x388.jpg" alt="11F1 Porteur Duomatic by UCY" />
													<div class="overlay">
													</div>
												</a>
											</div>
											<div>
												<a class="img-responsive" href="img/light-dose/works/ucy-11f1-porteur-duomatic-by-ucy-gessato-gblog-7-580x388.jpg" title="11F1 Porteur Duomatic by UCY">
													<img class="img-responsive" src="img/light-dose/works/ucy-11f1-porteur-duomatic-by-ucy-gessato-gblog-7-580x388.jpg" alt="11F1 Porteur Duomatic by UCY" />
													<div class="overlay">
													</div>
												</a>
											</div>
										</div>
										<span class="pagination text-center">
										</span>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<h4>
											11F1 Porteur Duomatic by UCY
										</h4>
										<div class="meta-wrapper">
											<div class="category">
												<b>
													Category:
												</b>
												Other
											</div>
											<div class="client">
												<b>
													Client:
												</b>
												UCY
											</div>
										</div>
										<div>
											<p>
												It’s so easy to love a bike so beautiful. Delightful, charming, handsome the three wins that steal any heart….even for those at the Firenze Bicycle Film Festival where it was just featured last week.  So, go ahead and stare: UCY bicycles are used to it. This amazing model is the 11F1 Porteur Duomatic. Proud to mention it’s wicked fast sporting an F1 track steel frame, columbus cromor, fillet brazed with soldering and stainless steel details, finished in an acid treatment then coated twice with clear polish. A convenient, well-sized carrier secured to the front also hosts a spiffy stainless steel thermos attached by fine leather straps. Fancy the unique mustache handlebar shape finished in leather ends, which perfectly compliment the similarly colored saddle and wheels.
											</p>
										</div>
									</div>
								</div>
								-->
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--END Works section-->

		</article>
		<!--End Works-->
		
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
		<!--BEGIN Team-->
		<!--DESCRIPTION

			This article is designed:
				- with zoom-in animation effect upon first element viewing.
				- with toggleable ratation hover effect
				- with both link and plain wrappers

			For supported social icon list one should see class reference sheet.

		-->
		<article class="team page-light-dose theme-white background foreground links" id="team">
			<header class="text-center">
				<div class="sect">
					<div class="line line-left">
					</div>
					&sect;
					<div class="line line-right">
					</div>
				</div>
				<h2>
					Team
				</h2>
			</header>
			<div class="container">
				<div class="row">

					<!--BEGIN Team item-->
					<div class="text-center col-lg-3 col-md-3 col-sm-6 col-xs-12">

						<!--BEGIN Team item wrapper-->
						<!--DESCRIPTION

							This wrapper is designed:
								- with hover animation
								- without link
						-->
						<span class="wrapper img-circle">
							<img class="zoomIn" src="http://placehold.it/180x180/000000/aaaaaa" alt="" />
							<span class="overlay img-circle">
							</span>
						</span>
						<!--END Team item wrapper-->

						<span class="caption color">
							Michael Collins
						</span>
						<small>
							Director
						</small>
						<p>
							An active contributor to various open source projects, has given presentations at developer events.
						</p>

						<!--BEGIN Team item social-->
						<ul class="list-inline grid social-small">
							<li>
								<a class="icon-facebook text-center" href="#">
								</a>
							<li>
								<a class="icon-twitter text-center" href="#">
								</a>
							<li>
								<a class="icon-google text-center" href="#">
								</a>
						</ul>
						<!--END Team item social-->

					</div>
					<!--END Team item-->

					<!--BEGIN Team item-->
					<div class="text-center col-lg-3 col-md-3 col-sm-6 col-xs-12">

						<!--BEGIN Team item wrapper-->
						<!--DESCRIPTION

							This wrapper is designed:
								- without hover animation
								- without link
						-->
						<span class="wrapper img-circle">
							<img class="zoomIn transition-none" src="http://placehold.it/180x180/000000/aaaaaa" alt="" />
							<span class="overlay img-circle">
							</span>
						</span>
						<!--END Team item wrapper-->

						<span class="caption color">
							Patrick Donalds
						</span>
						<small>
							Creative director
						</small>
						<p>
							Has great technical background, design sensibility, strong user experiences.
						</p>

						<!--BEGIN Team item social-->
						<ul class="list-inline grid social-small">
							<li>
								<a class="icon-facebook text-center" href="#">
								</a>
							<li>
								<a class="icon-twitter text-center" href="#">
								</a>
							<li>
								<a class="icon-google text-center" href="#">
								</a>
						</ul>
						<!--END Team item social-->

					</div>
					<!--END Team item-->

					<span class="clearfix visible-sm">
					</span>

					<!--BEGIN Team item-->
					<div class="text-center col-lg-3 col-md-3 col-sm-6 col-xs-12">

						<!--BEGIN Team item wrapper-->
						<!--DESCRIPTION

							This wrapper is designed:
								- with hover animation
								- with link
						-->
						<a class="wrapper img-circle" href="blog.html">
							<img class="zoomIn" src="http://placehold.it/180x180/000000/aaaaaa" alt="" />
							<span class="overlay img-circle">
							</span>
						</a>
						<!--END Team item wrapper-->

						<span class="caption color">
							Mett Rayan
						</span>
						<small>
							Manager
						</small>
						<p>
							Has great technical background, design sensibility, strong user experiences.
						</p>

						<!--BEGIN Team item social-->
						<ul class="list-inline grid social-small">
							<li>
								<a class="icon-facebook text-center" href="#">
								</a>
							<li>
								<a class="icon-twitter text-center" href="#">
								</a>
							<li>
								<a class="icon-google text-center" href="#">
								</a>
						</ul>
						<!--END Team item social-->

					</div>
					<!--END Team item-->

					<!--BEGIN Team item-->
					<div class="text-center col-lg-3 col-md-3 col-sm-6 col-xs-12">

						<!--BEGIN Team item wrapper-->
						<!--DESCRIPTION

							This wrapper is designed:
								- without hover animation
								- with link
						-->
						<a class="wrapper img-circle" href="blog.html">
							<img class="zoomIn transition-none" src="http://placehold.it/180x180/000000/aaaaaa" alt="" />
							<span class="overlay img-circle">
							</span>
						</a>
						<!--END Team item wrapper-->

						<span class="caption color">
							David Cohen
						</span>
						<small>
							Developer
						</small>
						<p>
							An expert on open data and open source software and has been featured in publications.
						</p>

						<!--BEGIN Team item social-->
						<ul class="list-inline grid social-small">
							<li>
								<a class="icon-facebook text-center" href="#">
								</a>
							<li>
								<a class="icon-twitter text-center" href="#">
								</a>
							<li>
								<a class="icon-google text-center" href="#">
								</a>
						</ul>
						<!--END Team item social-->

					</div>
					<!--END Team item-->

				</div>
			</div>
		</article>
		<!--END Team-->

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
		<!--BEGIN Skills-->
		<!--DESCRIPTION

			This article is designed:
				- with colored progress circles

		-->
		<article class="skills page-light-dose theme-white background foreground links" id="skills">
			<div class="container text-center">
				<h5>
					Professional Skills
				</h5>

				<div class="row">

					<!--BEGIN Skills item-->
					<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" data-color="#EC4742">
								<span class="sr-only">Axure</span>
							</div>
						</div>
					</div>
					<!--END Skills item-->

					<!--BEGIN Skills item-->
					<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" data-color="#E97332">
								<span class="sr-only">Photoshop</span>
							</div>
						</div>
					</div>
					<!--END Skills item-->

					<!--BEGIN Skills item-->
					<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" data-color="#DEBD08">
								<span class="sr-only">HTML</span>
							</div>
						</div>
					</div>
					<!--END Skills item-->

					<!--BEGIN Skills item-->
					<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" data-color="#50A456">
								<span class="sr-only">CSS</span>
							</div>
						</div>
					</div>
					<!--END Skills item-->

					<div class="clearfix visible-sm">
					</div>

					<!--BEGIN Skills item-->
					<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" data-color="#2B5F96">
								<span class="sr-only">JavaScript</span>
							</div>
						</div>
					</div>
					<!--END Skills item-->

					<!--BEGIN Skills item-->
					<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" data-color="#904AB2">
								<span class="sr-only">Wordpress</span>
							</div>
						</div>
					</div>
					<!--END Skills item-->

				</div>
			</div>
		</article>
		<!--END Skills-->

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
		<!--BEGIN Success Stories-->
		<!--DESCRIPTION

			This article is designed:
				- with parallax background, see DEMO styles for details.
				- with content carousel and pagiation.

		-->
		<article class="stories page-light-dose theme-color background foreground links aparallax" id="stories">
			<div class="underlay">
				<header class="text-center">
					<div class="sect">
						<div class="line line-left">
						</div>
						&sect;
						<div class="line line-right">
						</div>
					</div>
					<h2>
						Success Stories
					</h2>
					<h5>
						We love our clients and they love us
					</h5>
				</header>
				<div class="container">
					<div class="controls">
						<svg class="previous" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
							<switch>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#000" d="M0,12L12.6,0L14,1.4L3.4,11.9L14,22.6L12.6,24L0,12"/>
								<foreignObject width="24" height="24">
									<img class="previous" src="img/icon-previous.png" alt="Previous" title="Previous" />
								</foreignObject>
							</switch>
						</svg>
						<svg class="next" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="24px" viewBox="0 0 14 24" enable-background="new 0 0 14 24" xml:space="preserve">
							<switch>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#000" d="M14,12L1.4,24L0,22.6l10.6-10.7L0,1.4L1.4,0L14,12"/>
								<foreignObject width="24" height="24">
									<img class="next" src="img/icon-next.png" alt="Next" title="Next" />
								</foreignObject>
							</switch>
						</svg>
					</div>
					<div class="row">
						<div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
							<div class="caroufredsel enable-swipe enable-controls enable-pagination image-pagination">

								<!--BEGIN Success Stories item-->
								<div class="row" data-image="img/light-dose/stories-logo3.png">
									<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 text-left text-right-md">
										<div>
											<strong>
												Client:
											</strong>
										</div>
										<div>
											Mark Example,
										</div>
										<em>
											Best Internet Company
										</em>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
										Praesent tristique volutpat mollis. Pellentesque egestas sapien neque, eget laoreet libero ullamcorper et. Donec in sapien a dui suscipit semper. Praesent tellus lacus, egestas ut molestie at, semper eget nibh. Praesent quis luctus diam. Nunc laoreet auctor sagittis. Donec sed ante venenatis, pellentesque lorem in, elementum diam. Nunc sit amet lorem faucibus, posuere tellus feugiat, pretium arcu.
									</div>
									<div class="clearfix">
									</div>
								</div>
								<!--END Success Stories item-->

								<!--BEGIN Success Stories item-->
								<div class="row" data-image="img/light-dose/stories-logo1.png">
									<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 text-left text-right-md">
										<div>
											<strong>
												Client:
											</strong>
										</div>
										<div>
											Mark Example,
										</div>
										<em>
											Best Internet Company
										</em>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
										Praesent tristique volutpat mollis. Pellentesque egestas sapien neque, eget laoreet libero ullamcorper et. Donec in sapien a dui suscipit semper. Praesent tellus lacus, egestas ut molestie at, semper eget nibh. Praesent quis luctus diam. Nunc laoreet auctor sagittis. Donec sed ante venenatis, pellentesque lorem in, elementum diam. Nunc sit amet lorem faucibus, posuere tellus feugiat, pretium arcu.
									</div>
									<div class="clearfix">
									</div>
								</div>
								<!--END Success Stories item-->

								<!--BEGIN Success Stories item-->
								<div class="row" data-image="img/light-dose/stories-logo2.png">
									<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 text-left text-right-md">
										<div>
											<strong>
												Client:
											</strong>
										</div>
										<div>
											Mark Example,
										</div>
										<em>
											Best Internet Company
										</em>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
										Praesent tristique volutpat mollis. Pellentesque egestas sapien neque, eget laoreet libero ullamcorper et. Donec in sapien a dui suscipit semper. Praesent tellus lacus, egestas ut molestie at, semper eget nibh. Praesent quis luctus diam. Nunc laoreet auctor sagittis. Donec sed ante venenatis, pellentesque lorem in, elementum diam. Nunc sit amet lorem faucibus, posuere tellus feugiat, pretium arcu.
									</div>
									<div class="clearfix">
									</div>
								</div>
								<!--END Success Stories item-->

								<!--BEGIN Success Stories item-->
								<div class="row" data-image="img/light-dose/stories-logo0.png">
									<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 text-left text-right-md">
										<div>
											<strong>
												Client:
											</strong>
										</div>
										<div>
											Mark Example,
										</div>
										<em>
											Best Internet Company
										</em>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
										Praesent tristique volutpat mollis. Pellentesque egestas sapien neque, eget laoreet libero ullamcorper et. Donec in sapien a dui suscipit semper. Praesent tellus lacus, egestas ut molestie at, semper eget nibh. Praesent quis luctus diam. Nunc laoreet auctor sagittis. Donec sed ante venenatis, pellentesque lorem in, elementum diam. Nunc sit amet lorem faucibus, posuere tellus feugiat, pretium arcu.
									</div>
									<div class="clearfix">
									</div>
								</div>
								<!--END Success Stories item-->

							</div>
						</div>
					</div>
					<ul class="pagination grid list-inline text-center">
					</ul>
				</div>
			</div>
		</article>
		<!--END Success Stories-->
		
		

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->


		<!--BEGIN Last Posts-->
		<!--DESCRIPTION

			This article is designed:
				- with content carousel for blog posts.

		-->
		<article class="posts page-light-dose theme-white background foreground links" id="posts">
			<header class="text-center">
				<div class="sect">
					<div class="line line-left">
					</div>
					&sect;
					<div class="line line-right">
					</div>
				</div>
				<h2>
					Last Posts
				</h2>
			</header>
			<div class="container">
				<div class="controls">
					<svg class="previous" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
						<switch>
							<path fill-rule="evenodd" clip-rule="evenodd" fill="#000" d="M0,12L12.6,0L14,1.4L3.4,11.9L14,22.6L12.6,24L0,12"/>
							<foreignObject width="24" height="24">
								<img class="previous" src="img/icon-previous.png" alt="Previous" title="Previous" />
							</foreignObject>
						</switch>
					</svg>
					<svg class="next" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="24px" viewBox="0 0 14 24" enable-background="new 0 0 14 24" xml:space="preserve">
						<switch>
							<path fill-rule="evenodd" clip-rule="evenodd" fill="#000" d="M14,12L1.4,24L0,22.6l10.6-10.7L0,1.4L1.4,0L14,12"/>
							<foreignObject width="24" height="24">
								<img class="next" src="img/icon-next.png" alt="Next" title="Next" />
							</foreignObject>
						</switch>
					</svg>
				</div>
				<div class="row">
					<div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
						<div class="caroufredsel enable-swipe enable-controls">

							<!--BEGIN Last Posts item-->
							<div class="row">
								<div class="col-lg-offset-2 col-lg-10 col-md-offset-2 col-md-10 col-sm-12 col-xs-12">
									<a href="blog.html#blog">
										<h5>
											Welcome to «Itembridge»
										</h5>
									</a>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 text-left text-right-md">
									<div>
										<small class="date">
											13/09/2013,
										</small>
									</div>
									<div>
										<small class="author">
											writted by Michael Collins
										</small>
									</div>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
									<p>
										Our сompany became famous among thousands of visitors and purchasers of the most known online resource copyright works during the short period of its existence. Our сompany offers a number of creative products such as: online stores templates, one page promo sites, graphic works and corporate style for the wide audience.
									</p>
									<a class="more" href="post.html">
										Read More
										<div class="arrow">
											<span class="tip">
											</span>
										</div>
									</a>
								</div>
							</div>
							<!--END Last Posts item-->

							<!--BEGIN Last Posts item-->
							<div class="row">
								<div class="col-lg-offset-2 col-lg-10 col-md-offset-2 col-md-10 col-sm-12 col-xs-12">
									<a href="blog.html#blog">
										<h5>
											«The Hobbit 2» Premiere
										</h5>
									</a>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 text-left text-right-md">
									<div>
										<small class="date">
											12/09/2013,
										</small>
									</div>
									<div>
										<small class="author">
											writted by Patrick Donalds
										</small>
									</div>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
									<p>
										The Hobbit: The Desolation of Smaug is an upcoming 2013 epic fantasy adventure film co-written, produced and directed by Peter Jackson. It is the second installment of a three-part film series based on J. R. R. Tolkien's 1937 novel The Hobbit, beginning with An Unexpected Journey (2012) and set to conclude with There and Back Again (2014). The three films together act as prequels to Jackson's The Lord of the Rings film series.
									</p>
									<a class="more" href="post.html">
										Read More
										<div class="arrow">
											<span class="tip">
											</span>
										</div>
									</a>
								</div>
							</div>
							<!--END Last Posts item-->

							<!--BEGIN Last Posts item-->
							<div class="row">
								<div class="col-lg-offset-2 col-lg-10 col-md-offset-2 col-md-10 col-sm-12 col-xs-12">
									<a href="blog.html#blog">
										<h5>
											The 2013 Best Food Blog Awards
										</h5>
									</a>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 text-left text-right-md">
									<div>
										<small class="date">
											11/09/2013,
										</small>
									</div>
									<div>
										<small class="author">
											writted by Mett Rayan
										</small>
									</div>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
									<img class="img-responsive" src="img/light-dose/blog/blog-4.jpg" alt="blog-4" />
									<p>
										Our ongoing mission is to chronicle a world of authentic cuisine, so we find what we're looking for more and more in one place: online food blogs.
									</p>
									<a class="more" href="post.html">
										Read More
										<div class="arrow">
											<span class="tip">
											</span>
										</div>
									</a>
								</div>
							</div>
							<!--END Last Posts item-->

						</div>
					</div>
				</div>
			</div>
		</article>
		<!--END Last Posts-->
		
		
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
		<!--BEGIN Action-->
		<!--DESCRIPTION

			Just a simple text block with a button.

		-->
		<article class="action page-light-dose theme-color background foreground links aparallax" id="action">
			<div class="underlay">
				<div class="container">
					<h5 class="text-center">
						<strong>
							Some call to action block
						</strong>
					</h5>
					<div class="row">
						<div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-12">
							<p>
								Mauris sed mi eget justo fermentum feugiat. Curabitur aliquam, leo nec adipiscing vehicula, sapien massa porta augue, non tristique risus lorem imperdiet tortor. Nulla sodales enim ut massa ultricies.
							</p>
						</div>
						<div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-12 text-center">
							<a class="scroll btn" href="#contacts">
								Get in Touch
							</a>
						</div>
					</div>
				</div>
			</div>
		</article>
		<!--END Action-->
		

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
		<!--BEGIN FAQ-->
		<!--DESCRIPTION

			This article is designed:
				- with toggleble accordions

		-->
		<article class="faq page-light-dose theme-white background foreground links" id="faq">
			<header class="text-center">
				<div class="sect">
					<div class="line line-left">
					</div>
					&sect;
					<div class="line line-right">
					</div>
				</div>
				<h2>
					FAQ
				</h2>
			</header>
			<div class="container">
				<div class="row">

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

						<!--BEGIN FAQ item-->
						<div class="accordion open">
							<div class="caption-wrapper">
								<span class="caption">
									Curabitur feugiat arcu ligula?
								</span>
								<div class="line">
								</div>
								<span class="sign pull-right">
								</span>
							</div>
							<div class="contents">
								Curabitur dolor nibh, pharetra et pellentesque eget, tristique ut nulla. Mauris pretium ornare ante, sed rutrum tellus bibendum et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
							</div>
						</div>
						<!--END FAQ item-->

						<!--BEGIN FAQ item-->
						<div class="accordion">
							<div class="caption-wrapper">
								<span class="caption">
									Praesent tristique volutpat mollis. Pellentesque egestas sapien neque, eget laoreet?
								</span>
								<div class="line">
								</div>
								<span class="sign pull-right">
								</span>
							</div>
							<div class="contents">
								Curabitur dolor nibh, pharetra et pellentesque eget, tristique ut nulla. Mauris pretium ornare ante, sed rutrum tellus bibendum et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
							</div>
						</div>
						<!--END FAQ item-->

						<!--BEGIN FAQ item-->
						<div class="accordion">
							<div class="caption-wrapper">
								<span class="caption">
									Duis interdum tincidunt nibh et malesuada?
								</span>
								<div class="line">
								</div>
								<span class="sign pull-right">
								</span>
							</div>
							<div class="contents">
								Curabitur dolor nibh, pharetra et pellentesque eget, tristique ut nulla. Mauris pretium ornare ante, sed rutrum tellus bibendum et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
							</div>
						</div>
						<!--END FAQ item-->

					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

						<!--BEGIN FAQ item-->
						<div class="accordion">
							<div class="caption-wrapper">
								<span class="caption">
									Curabitur feugiat arcu ligula?
								</span>
								<div class="line">
								</div>
								<span class="sign pull-right">
								</span>
							</div>
							<div class="contents">
								Curabitur dolor nibh, pharetra et pellentesque eget, tristique ut nulla. Mauris pretium ornare ante, sed rutrum tellus bibendum et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
							</div>
						</div>
						<!--END FAQ item-->

						<!--BEGIN FAQ item-->
						<div class="accordion">
							<div class="caption-wrapper">
								<span class="caption">
									Praesent tristique volutpat mollis. Pellentesque egestas sapien neque, eget laoreet?								</span>
								<div class="line">
								</div>
								<span class="sign pull-right">
								</span>
							</div>
							<div class="contents">
								Curabitur dolor nibh, pharetra et pellentesque eget, tristique ut nulla. Mauris pretium ornare ante, sed rutrum tellus bibendum et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
							</div>
						</div>
						<!--END FAQ item-->

						<!--BEGIN FAQ item-->
						<div class="accordion">
							<div class="caption-wrapper">
								<span class="caption">
									Duis interdum tincidunt nibh et malesuada?
								</span>
								<div class="line">
								</div>
								<span class="sign pull-right">
								</span>
							</div>
							<div class="contents">
								Curabitur dolor nibh, pharetra et pellentesque eget, tristique ut nulla. Mauris pretium ornare ante, sed rutrum tellus bibendum et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
							</div>
						</div>
						<!--END FAQ item-->

					</div>

				</div>
			</div>
		</article>
		<!--END FAQ-->
		

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
		<!--BEGIN Pricing-->
		<!--DESCRIPTION

			This article is designed:
				- with parallax background, see DEMO styles for details.
				- with simple-colored package blocks.
		-->
		<article class="pricing page-light-dose theme-color background foreground links aparallax" id="pricing">
			<div class="underlay">
				<header class="text-center">
					<div class="sect">
						<div class="line line-left">
						</div>
						&sect;
						<div class="line line-right">
						</div>
					</div>
					<h2>
						Pricing
					</h2>
					<h5>
						Choose one of the packages
					</h5>
				</header>
				<div class="container">
					<div class="row">

						<!--BEGIN Pricing package-->
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<a class="package" data-color="#E0302A" href="#">
								<div class="caption">
									<span class="fa text-center">
										&#xf072;
									</span>
									<h5>
										Basic package
									</h5>
								</div>
								<ul class="features text-center">
									<li>
										Duis tincidunt erat quam
									<li>
										Etiam placerat sapien
									<li>
										Aliquam libero est
								</ul>
							</a>
						</div>
						<!--END Pricing package-->

						<!--BEGIN Pricing package-->
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<a class="package" data-color="#CF7A00" href="#">
								<div class="caption">
									<span class="fa text-center">
										&#xf0d6;
									</span>
									<h5>
										Business package
									</h5>
								</div>
								<ul class="features text-center">
									<li>
										Duis tincidunt erat quam
									<li>
										Etiam placerat sapien
									<li>
										Aliquam libero est
									<li>
										Quisque et porta neque
								</ul>
							</a>
						</div>
						<!--END Pricing package-->

						<!--BEGIN Pricing package-->
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<a class="package" data-color="#117919" href="#">
								<div class="caption">
									<span class="fa text-center">
										&#xf091;
									</span>
									<h5>
										Gold package
									</h5>
								</div>
								<ul class="features text-center">
									<li>
										Duis tincidunt erat quam
									<li>
										Etiam placerat sapien
									<li>
										Aliquam libero est
									<li>
										Quisque et porta neque
									<li>
										Donec sed pretium eros
								</ul>
							</a>
						</div>
						<!--END Pricing package-->

					</div>
				</div>
			</div>
		</article>
		<!--END Pricing-->
		

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
		<!--BEGIN Video-->
		<!--DESCRIPTION

			This article is designed:
				- with embedded responsive video

		-->
		<article class="video page-light-dose theme-white background foreground links" id="video">
			<header class="text-center">
				<div class="sect">
					<div class="line line-left">
					</div>
					&sect;
					<div class="line line-right">
					</div>
				</div>
				<h2>
					Video Tour
				</h2>
			</header>
			<div class="container">
				<div class="row">

					<!--BEGIN Video container-->
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 video-container">
						<iframe src="http://player.vimeo.com/video/76990578" width="500" height="281"></iframe>
					</div>
					<!--END Video container-->

					<!--BEGIN Video description-->
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p><a href="http://vimeo.com/76990578">Unleashed: Menswear Dog</a> from <a href="http://vimeo.com/bluechalk">Blue Chalk</a> on <a href="https://vimeo.com">Vimeo</a>.</p> <p>When David Fung and wife Yena Kim decided on a whim to create a Tumblr featuring their adorable shiba inu dog, Bodhi, dressed in sophisticated menswear, little did they know that they would soon be leaving their full time jobs to author a book and start a canine fashion line.<br /> <br /> Producer: Catherine Yrisarri<br /> Director of Photography, Editor: Rob Finch<br /> Executive Producer: Greg Moyer<br /> Motion Graphics: Drew Jordan<br /> Assistant Camera: Tim Trotman<br /> Sound Mix: Chip Sloan<br /> Still Photography: Menswear Dog <br /> <br /> Created by Blue Chalk Media (http://www.bluechalk.com)<br /> <br /> Related Link: Menswear Dog (http://mensweardog.tumblr.com)</p>
					</div>
					<!--END Video description-->

				</div>
			</div>
		</article>
		<!--END Video-->
		
		

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
		<!--BEGIN Contacts-->
		<!--DESCRIPTION

			This article is designed:
				- with parallax background, see DEMO styles for details.
				- with zoom-in animation effect upon first element viewing.

		-->
		<article class="contacts page-light-dose theme-color background foreground links aparallax" id="contacts">
			<div class="underlay">
				<header class="text-center light">
					<div class="sect">
						<div class="line line-left">
						</div>
						&sect;
						<div class="line line-right">
						</div>
					</div>
					<h2>
						Contacts
					</h2>
				</header>
				<div class="container">
					<div class="row">

						<!--BEGIN Contatcs item-->
						<div class="text-center col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<a href="skype:+7771001234">

								<!--BEGIN Contatcs item icon-->
								<!--DESCRIPTION

									For icon details one can visit
										http://fortawesome.github.io/Font-Awesome/cheatsheet/
									There all icon symbol details are supplied.

									For zoom-in animation see .zoomIn class reference.

								-->
								<h4 class="fa zoomIn">
									&#xf10a;
								</h4>
								<!--END Contatcs item icon-->

								<div class="overlay">
								</div>
								<p>
									Call Us +777 (100) 1234
								</p>
							</a>
						</div>
						<!--END Contatcs item-->

						<!--BEGIN Contatcs item-->
						<div class="text-center col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<a href="mailto:mail@example.com">

								<!--BEGIN Contatcs item icon-->
								<h4 class="fa zoomIn">
									&#xf003;
								</h4>
								<!--END Contatcs item icon-->

								<div class="overlay">
								</div>
								<address>
									mail@example.com
								</address>
							</a>
						</div>
						<!--END Contatcs item-->

						<!--BEGIN Contatcs item-->
						<div class="text-center col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<a href="https://maps.google.com/maps?q=49+Archdale,+2B+Charleston&amp;hl=ru&amp;sll=37.0625,-95.677068&amp;sspn=60.028724,135.263672&amp;hnear=49+Archdale+St,+Charleston,+South+Carolina+29401&amp;t=m&amp;z=17">

								<!--BEGIN Contatcs item icon-->
								<h4 class="fa zoomIn">
									&#xf041;
								</h4>
								<!--END Contatcs item icon-->

								<div class="overlay">
								</div>
								<address>
									49 Archdale, 2B Charleston,
									<br />
									New York City, USA
								</address>
							</a>
						</div>
						<!--END Contatcs item-->

					</div>

					<!--BEGIN Contacts form-->
					<form name="feedbackForm" method="POST" action="/" class="small text-center validator">
						<h4>
							Say Hello
						</h4>
						<ul class="list-inline grid">
							<li>
								<input name="feedbackFormName" type="text" class="form-control" placeholder="Name" data-validator="required|alpha_numeric">
							<li>
								<input name="feedbackFormEmail" type="text" class="form-control" placeholder="Email" data-validator="required|valid_email">
							<li>
								<textarea name="feedbackFormComment" class="form-control" placeholder="Comment" data-validator="required"></textarea>
						</ul>
						<input name="Submit" type="submit" class="btn btn-default" value="Submit" />
					</form>
					<!--END Contacts form-->

				</div>
			</div>
		</article>
		<!--END Contacts-->
		
		

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
		<!--BEGIN Footer-->
		<footer class="footer theme-color background foreground text-center">
			<div class="container">
				<ul class="list-inline nav-footer">
					<li>
						<a class="scroll" href="index.html#body">
							Home
						</a>
					<li>
						<a class="scroll" href="index.html#about">
							About
						</a>
					<li>
						<a class="scroll" href="index.html#services">
							Services
						</a>
					<li>
						<a class="scroll" href="index.html#works">
							Works
						</a>
					<li>
						<a class="scroll" href="index.html#team">
							Team
						</a>
					<li>
						<a class="scroll" href="index.html#contacts">
							Contacts
						</a>
					<li>
						<a class="scroll" href="blog.html#blog">
							Blog
						</a>
					<li>
						<a class="scroll" href="login.html">
							Login
						</a>
					<li>
						<a class="scroll" href="post.html">
							Post
						</a>
					<li>
						<a class="scroll" href="typography.html">
							Typography
						</a>
					<li>
						<a class="scroll" href="register.html">
							Register
						</a>
				</ul>
				<div class="copyright">
					Copyright &copy; ItemBridge Inc. 2013
					<div class="sect">
						&sect;
					</div>
				</div>
				<div class="inner-wrapper text-center stretch-width">
					<div>
						<!--BEGIN Footer social-->
						<!--DESCRIPTION

							For supported social icon list one should see class reference sheet.

						-->
						<ul class="list-inline grid reverse social">
							<li>
								<a class="icon-reddit text-center" href="#">
								</a>
							<li>
								<a class="icon-digg text-center" href="#">
								</a>
							<li>
								<a class="icon-linkedin text-center" href="#">
								</a>
							<li>
								<a class="icon-facebook text-center" href="#">
								</a>
							<li>
								<a class="icon-twitter text-center" href="#">
								</a>
							<li>
								<a class="icon-google text-center" href="#">
								</a>
						</ul>
						<!--END Footer social-->
					</div>
				</div>
			</div>
		</footer>
		<!--END Footer-->

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
		<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
			<div class="slides">
			</div>
			<h3 class="title">
			</h3>
			<a class="prev">
				‹
			</a>
			<a class="next">
				›
			</a>
			<a class="close">
				×
			</a>
			<a class="play-pause">
			</a>
			<ol class="indicator">
			</ol>
		</div>
