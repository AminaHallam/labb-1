<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
   <!--  Hämtar titeln för varje sida -syns i flicken längst upp-  -->
	<title><?php wp_title(' '); ?></title>
	
    <!-- printar ut script och eller data  -->
    <?php wp_head(); ?>
	
</head>
<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
                        <!-- Hämtar sidans info från url och echo name som text på sidan -->
						<a class="logo" href="<?php echo get_bloginfo('url'); ?>"><?php echo get_bloginfo('name'); ?></a>

                        
					</div>
					<div class="col-sm-6 hidden-xs">
						<?php 
                            // Form input för sökfunktion
                            get_search_form(); 
                        ?> 

					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
         <!-- Form input för sökfunktion -->
			<?php get_search_form(); ?> 
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">

                        <!-- Hämtar och skriver ut lämplig menu  -->
                        <?php wp_nav_menu(array(
                            'theme_location' => 
                            'huvudmeny'
                        ));
                        ?>
						
					</div>
				</div>
			</div>
		</nav>
    </div>