<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Labb 1</title>
	
    <?php wp_head(); ?>
</head>
<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
                        <!-- Hämtar sidans info från url och name ses som text OBS! Kolla upp det!!! -->
						<a class="logo" href="<?php get_bloginfo("url"); ?>
                        <?php get_bloginfo("name"); ?> "></a>
                        
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
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">

                        <?php wp_nav_menu(array(
                            'theme_location' => 
                            'huvudmeny'
                        ));
                        ?>
						
					</div>
				</div>
			</div>
		</nav>