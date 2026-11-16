<?php get_header(); ?>

<?php 
$cate=get_the_category();
//categoryを取得する
$catename= $cate[0]->name;
$url=$cate[0]->category_nicename;
?>



<section id="main" class="kasou">
 <video poster="" autoplay loop muted id="top_back">
    <source src="<?php bloginfo('template_directory');?>/images/douga_a.mp4" type="video/mp4"> 
    </video>

<div class="container">

  <div class="row">
    <div class="col-sm-12">
     <p class="text-center h1" id="title">WORK</p>
 
    </div><!-- col-sm-5 -->
 

  </div><!-- row mb-4 -->

</div>
</section>




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
  <div class="col-lg-12 post">
 
<ul  class="row justify-content-around mt-4 blogcol">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<li class="col-lg-4 p-3">
<div class="thumbnail">
    <?php if(has_post_thumbnail()){ ?>
    <?php the_post_thumbnail('myOriginalSizeB'); ?>
     <?php }else{?>

    <img src="<?php bloginfo('template_directory');?>/images/noimage.png"
        alt="noimage" class="mw-100"  /><?php  }?>
      </div><!-- col-lg-5_end -->

          <div class="p-1">
                 <h4 class="text-center text-orange"><?php the_title();?></h4>
                      <p class="text-center">
              <a href="<?php the_permalink(); ?>" class="btn-more bk">READ MORE</a>
             </p>
           </div><!-- col-lg-7_end -->
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
</div><!-- row justify-content-between mt-4 -->
</div><!-- container clearfix_end -->
</div><!-- container-fluid_end -->



<?php get_footer(); ?>