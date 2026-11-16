

<section id="work" class="py-4">

  <div class="container">
      <div class="heading text-center mb-4">
        <h2 class="h2 text-white d-inline-block">Work</h2>     
       　</div>

      <ul class="row blogcol work">
    <?php    
    $contents=array('category_name'=>'top',
    'posts_per_page'=>3
    );
    $the_query=new WP_Query($contents);
      ?>

      <?php if($the_query->have_posts()){
      while($the_query->have_posts()){$the_query->the_post();
      ?>

<li class="col-12 col-sm-4">
<a href="<?php the_permalink();?>">
<?php if(has_post_thumbnail()){
the_post_thumbnail();}else{
echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/noimage.png" class="mw-100" />';
}?> 
 <span class="work"><?php the_title();?></span>

</a> 


</li>
<?php }  } wp_reset_postdata();?>

</ul>

    <p class="text-center"><a href="/category/work/" class="btn-more">More</a></p>
  </div>
  <!-- /.containner -->
 
</section>
