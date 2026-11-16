

<?php get_header(); ?>

<div class="container-fluid">
<div class="kasou" id="main">
 <video poster="" autoplay loop muted id="top_back">
    <source src="<?php bloginfo('template_directory');?>/images/douga_a.mp4" type="video/mp4"> 
    </video>
  
  

 </div><!--headerBG -->

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


<div class="container news" id="container">
   <main>

<div class="row">
  <div class="col-lg-9">
 <h1 class="my-3"><?php the_title(); ?></h1>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   



   <?php the_content(); ?>
   <?php endwhile;?>
  <?php endif; ?>
</div>
  <div class="col-lg-3">
  <div id="sidebar" class="mt-4">
    <h3>アーカイブ</h3>
     <ul>
  <?php wp_get_archives( 'post_type=post&type=monthly&show_post_count=1' ); ?>
</ul>

  </div>
 
 <!--  <?php dynamic_sidebar('home_right_1'); ?> -->

</div>

</div>



</main>

<?php if(in_category(array('news'))){
get_template_part('news');
}?>

  

                         </div>
 

<style>
  img{
    max-width: 100%;
    height: auto;
  }
</style>
   

  
</div><!-- container_end -->
<?php require_once('contact.php');?>


<?php get_footer(); ?>