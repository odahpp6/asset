<?php get_header(); ?>

<?php 
$cate=get_the_category();
//categoryを取得する
$catename= $cate[0]->name;
$url=$cate[0]->category_nicename;
?>



<div class="headerBg blog">

   <h1 class="text-center"><?php echo $catename; ?></h1>
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





 <div class="container-fluid py-2">
  <div class="container">

  <div class="row justify-content-between mt-4">
  <div class="col-lg-9 post">
 
<ul  class="row mt-4 blogcol">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<li class="col-lg-4 p-2">
  <a href="<?php the_permalink();?>">
<div class="thumbnail">
    <?php if(has_post_thumbnail()){ ?>
    <?php the_post_thumbnail('myOriginalSizeB'); ?>
     <?php }else{?>

    <img src="<?php bloginfo('template_directory');?>/images/noimage.png"
        alt="noimage" class="mw-100"  /><?php  }?>
      </div>

          <div class="mt-1">
           <div class="d-inline-block"><i class="far fa-calendar-alt pr-1"></i><?php the_time('Y年n月j日');?></div>
           <div class="badge badge-primary <?php echo $url;?>"><?php echo $catename;?></div>
                 <h4><?php the_title();?></h4>
            <p><?php the_excerpt(); ?></p>
           
           </div> 
         </a>
  </li>
  <?php endwhile;?>
  <?php endif; ?>
</ul>


<div class="m-4">
<?php the_posts_pagination(
  array(
    'prev_next' => false,
    'prev_text' => '<i class="fas fa-chevron-left"></i>',
    'next_text' => '<i class="fas fa-chevron-right"></i>',
    'type'      => 'list',
  )
); ?>
</div>

</div><!-- col-lg-12_end -->
<div class="col-lg-3">
  <div id="sidebar" class="mt-4">
    <h3>アーカイブ</h3>
     <ul>
  <?php wp_get_archives( 'post_type=post&type=monthly&show_post_count=1' ); ?>
</ul>

  </div>
 
 <!--  <?php dynamic_sidebar('home_right_1'); ?> -->

</div>





</div><!-- row justify-content-between mt-4 -->
</div><!-- container clearfix_end -->
</div><!-- container-fluid_end -->
<?php require_once('contact.php');?>


<?php get_footer(); ?>


<style>


</style>