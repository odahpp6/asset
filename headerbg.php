
<section id="main" class="kasou">
 <video poster="" autoplay loop muted id="top_back">
    <source src="<?php bloginfo('template_directory');?>/images/miyabi.mp4" type="video/mp4"> 
    </video>






<div class="container">

  <div class="row">
    <div class="col-sm-12">
    
  <?php if(is_page(array('12'))){?>

    <p class="text-center h1" id="title">投資信託</p>

<?php }elseif(is_page('about')){?>
  <p class="text-center h1" id="title">ABOUT</p>
  <?php }else{?>
    <p class="text-center h1" id="title"><?php the_title();?></p>
    <?php }?>
  
  </div><!-- col-sm-5 -->
 

  </div><!-- row mb-4 -->

</div>
</section>




