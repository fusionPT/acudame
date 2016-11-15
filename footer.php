				<footer>
			        
		        	<?php 
			        	
			        	wp_nav_menu(array(
			        		'theme_location' => 'menu',
			        		'container' => '',
			        		'menu_class'=> 'inline'
			        	));
			        	
		        	?>
                    <p>&copy; <?php echo date('Y'); ?> Asociación ACUDAME Mérida</p>
	        	
		        </footer>
		        <?php wp_footer();?>
	        </div>
	        
	        
        </div><!-- End of container -->
        

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41351971-4', 'acudame.org');
  ga('send', 'pageview');

</script>
    </body>
</html>
