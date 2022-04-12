
    <footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
					
							<?php 
								/* Hämtar lämplig widget  */
								dynamic_sidebar('widget2');
							?>

						
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
							<?php 
								/* Hämtar lämplig widget  */
								dynamic_sidebar('widget3');
							?>
					</div>
					
                    <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                    <h4>Social media</h4>
					<ul class="social">
						<li>
                            <!-- Hämtar in footerMenyn -->
                            <?php wp_nav_menu(array(
                            'theme_location' => 
                            'footermeny'
                            ));
                            ?>

						</li>
					</ul>

                        </div>
                            
                        
					
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<p>Copyright &copy; Grupp X, 2016</p>
					</div>
				</div>
			</div>
			
    </footer>

	<!-- printar ut script och eller data  -->
    <?php wp_footer(); ?>
    
</body>
</html>