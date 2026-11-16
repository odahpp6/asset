

<?php get_header(); ?>
<?php require_once('headerbg.php'); ?>



 <div class="container-fluid bg-light py-2">
<div class="container">
  <div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
</div>
</div><!-- container-fluid bg-light -->



<div class="container-fluid kasou">
<div class="container py-4">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php the_content(); ?>
      <?php endwhile;?>
  <?php endif; ?>
    
  

 
    


</div><!-- container_end -->
</div><!-- container-fluid -->




<?php require_once('contact.php');?>




<?php get_footer(); ?>