

<footer id="footer" class="py-4">
  <div class="container">

<div class="row">
	<div class="col-lg-2">
		<a href=" /" class="navbar-brand"><img src="<?php bloginfo('template_directory');?>/images/logo.png"  alt="ロゴ" class="mw-100 main mx-auto" width=""></a>

	</div><!-- lg-2 -->
	<div class="col-lg-10"><?php wp_nav_menu(
			array(
				'theme_location'  => 'footer',
				'container' => false,
				'menu'=>'footer',
				'menu_class'=>'block',
				'menu_id'=>'footerMenu',
				
			)
		);?></div><!-- lg-10 -->
</div><!-- row -->



	
	
	
</div><!-- container -->

<p class="text-center text-white small">Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All rights Reserved.</p>
</footer>
<!-- / footer -->


<?php wp_footer(); ?>

</body>
</html>