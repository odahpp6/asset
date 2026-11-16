<?php get_header(); ?>

<?php 
$cate=get_the_category();
//categoryを取得する
$catename= $cate[0]->cat_name;
$url=$cate[0]->category_nicename;
?>

<section id="main" class="kasou">
 <video poster="" autoplay loop muted id="top_back">
    <source src="<?php bloginfo('template_directory');?>/images/douga_a.mp4" type="video/mp4"> 
    </video>

<div class="container">

  <div class="row">
    <div class="col-sm-12">
     <h1 class="text-center" id="title"><?php echo $catename; ?></h1>
 
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


<?php 

  $args = array(
    'posts_per_page' => 12
  );

 $query = new WP_Query($args);

;?> 


 <div class="container-fluid py-2">
  <div class="container">

  <div class="row justify-content-between mt-4">
  <div class="col-lg-12 post">
 
<ul  class="row mt-4">
  <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
<li class="col-lg-4">
<div class="thumbnail">
    <?php if(has_post_thumbnail()){ ?>
    <?php the_post_thumbnail('myOriginalSizeA'); ?>
     <?php }else{?>

    <img src="<?php bloginfo('template_directory');?>/images/noimage.png"
        alt="noimage" class="mw-100"  /><?php  }?>
      </div><!-- col-lg-5_end -->
<?php 
$cate=get_the_category();
//categoryを取得する
$catename= $cate[0]->cat_name;
$url=$cate[0]->category_nicename;
?>
          <div class="">
          
                 <p><?php the_title();?></p>
                       <p class="text-center">
              <a href="<?php the_permalink(); ?>" class="btn btn-dark">READ MORE</a>
             </p>
           </div><!-- col-lg-7_end -->
  </li>
  <?php endwhile;?>
  <?php endif; ?>
</ul>


<div class="m-4">
<?php 
$big = 999999999; // need an unlikely integer

echo paginate_links( array(
'show_all' => true,  
'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
'format' => '?paged=%#%',
'current' => max( 1, get_query_var('paged') ),
'prev_text' => '前へ',
'next_text' => '次へ',
'total' => $my_query->max_num_pages) );
 wp_reset_postdata();
?>



</div>

</div><!-- col-lg-12_end -->
</div><!-- row justify-content-between mt-4 -->
</div><!-- container clearfix_end -->
</div><!-- container-fluid_end -->



<?php get_footer(); ?>