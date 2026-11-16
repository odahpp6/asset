<?php get_header(); ?>


<main id="top">
 <section id="main">
 <video poster="" autoplay loop muted id="top_back">
    <source src="<?php bloginfo('template_directory');?>/images/miyabi.mp4" type="video/mp4"> 
    </video>

<div class="container" id="maincatch">

    <div id="toptitle"> <h1 class="text-center font-weight-bold text-shadow-white mb-4 pt-3"> 中小企業経営者の皆様<br>社員向け『金融経済教育』を実施していますか？</h1>
    <!-- <p class="text-center mb-1 read">金融教育を受けたことがない方はぜひ！</p>
    <p class="text-center mb-1 read">金融商品を販売しない中立公正なアドバイザーが、</p>
    <p class="text-center mb-1 read">お金の基本と投資の知識をわかりやすくお伝えします。</p>
     -->
     <div class="row justify-content-center mx-0">
       <div class="col-lg-10 text-center bg-w p-3">
       <p class="mb-3">ファイナンシャル・ウェルビーイングという<br class="d-lg-block d-none">言葉をお聞きになったことはありますか？</p>
<p class="mb-3">「自らの経済状況を管理し、必要な選択をすることによって、現在及び将来にわたって、<br class="d-lg-block d-none">経済的な観点から一人ひとりが多様な幸せを実現し、安心感を得られている状態」<br class="d-lg-block d-none">（金融経済教育推進機構ウェブサイトより）とされています。</p>
<p class="mb-3">中小企業においては、<br class="d-lg-block d-none">給与水準や年金・退職金制度だけでなく、<br class="d-lg-block d-none">社員の資産形成支援への取り組みなど十分とはいえない状況です。</p>
<p class="mb-3">そこで、中小企業の経営者の皆さまにご提案です！<br class="d-lg-block d-none">社員が様々なライフイベントやリタイア後の生活において、<br class="d-lg-block d-none">ファイナンシャル・ウェルビーイングを実現できるように<br class="d-lg-block d-none">社員一人ひとりの「金融リテラシー」の向上をめざす<br class="d-lg-block d-none">「金融経済教育」を福利厚生制度として取り入れてみませんか！</p>

       </div>
     </div>





      </div><!-- row mb-4 -->



</div>
</section>




<section id="visionArea" class="px-4">
    <div class="container-fluid">



  <div class="heading text-center mb-5">
      <h2 class="h2 d-inline-block"> <img class="" src="/wp-content/themes/asset/images/aic_ttl.png" alt="ideco">VISION</h2>
      <p class="h5">金融リテラシーの向上を通じ、誰もが自ら、資産形成の設計図をデザインできるような社会の実現に向け貢献すること</p> 
   </div>
  
 
        </div><!-- container-fluid -->
      
</section>



<section id="seminar" class="">

  <div class="container">
      <div class="heading text-center mb-4">
        <h2 class="h2 d-inline-block"><img class="" src="/wp-content/themes/asset/images/aic_ttl.png" alt="ideco">SEMINAR</h2>     
       　</div>
<p class="text-center text-white"> セミナー、講演情報はこちら</p>
      <ul class="row blogcol work">
    <?php    
    $contents=array(
    'posts_per_page'=>3,
    'category_name'=>'seminer'
    );
    $the_query=new WP_Query($contents);
      ?>

      <?php if($the_query->have_posts()){
      while($the_query->have_posts()){$the_query->the_post();
      ?>

<li class="col-12 col-sm-4 mb-3 text-center">
<a href="<?php the_permalink();?>">
<?php if(has_post_thumbnail()){
the_post_thumbnail('myOriginalSizeB');}else{
echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/noimage.png" class="mw-100" />';
}?> 
 <span class="work"><?php the_title();?></span>

</a> 


</li>
<?php }  } wp_reset_postdata();?>

</ul>

    <p class="text-center"><a href="/category/seminer/" class="btn-more">READ MORE</a></p>
  </div>
  <!-- /.containner -->
 
</section>



<section id="study" class="py-4">
  <div class="container">
  <div class="heading text-center mb-5"><h2 class="d-inline-block"> <img class="" src="/wp-content/themes/asset/images/aic_ttl.png" alt="ideco">アセットデザインラボで金融経済教育を</h2></div>  
  <div class="row flex-row-reverse mb-5">
  <div class="row mb-5">
     <div class="col-sm-6 text-center">
      <img class="mw-100 h-auto w-100" src="/wp-content/themes/asset/images/houjin.png" alt="">
       </div>
     <div class="col-sm-6 align-self-center" id="keiryou">
      <h3 class="text-center font-weight-bold mb-4">法人向けサービス</h3>
    <p class="font-weight-bold h5">社員向け金融教育を福利厚生で始めてみませんか！！</p>
    <p>弊社は、中小企業様に福利厚生制度として「資産形成・金融リテラシー研修」など「社員向け金融経済教育」をご提案いたします。</p>

<p>「社員向け金融経済教育」は、Z世代の学生から企業に対して要望の高い社内研修の1つであり、今後の人材採用・社員満足度向上に繋がる「福利厚生制度」といえます。</p><p>金融庁のアンケート結果では、「Z世代と呼ばれる学生が企業や職場を選ぶ際に用意してくれたら良いと思う研修の第１位が、「資産形成・金融リテラシー研修」という結果でした。</p>

<p>経営者の皆さまが、社員一人ひとりのファイナンシャル・ウェルビーイング実現を後押しできるよう、弊社は、福利厚生制度の一環として金融経済教育やFPによる資産運用相談などの導入をご提案いたします。</p>


     </div>
  </div><!-- row -->


	   <div class="col-sm-6 text-center">
		  <img class="mw-100 h-auto w-100" src="/wp-content/themes/asset/images/kojin.png" alt="ideco">
	     </div>
	   <div class="col-sm-6 align-self-center">
      <h3 class="text-center font-weight-bold mb-4">個人向けサービス</h3>
		    <p>お任せください！</p>
        <p>投資初心者、投資経験の浅い方のお悩み解決！！</p>
        <p>NISAの始め方、iDeCoの始め方、を丁寧にお伝えします。</p>
      <p>２名以上のグループでお申込みいただければ、オーダーメイドのセミナーを開催させていただきます。</p>
      <p>また適宜、「資産運用」、「投資信託」、「NISA」のセミナーを開催いたします。</p>
    
<p><a href="https://byakuren-hokkaido.com/" class=""><img class="mw-100 h-auto w-100" src="/wp-content/themes/asset/images/contents.png" alt="取材代行・インタビュー代行ならコンテンツメンター"></a></p>

	   </div>
  </div><!-- row -->




  
     </div><!-- container -->
</section>



<section id="blog" class="">
  <div class="container">

 <div class="heading text-center mb-4">
 <h2 class="text-center d-inline-block"> <img class="" src="/wp-content/themes/asset/images/aic_ttl.png" alt="ideco">Blog/Column</h2>
    
  </div><!-- heading -->


 <ul class="row blogcol">
  <?php    
  $contents=array('category_name' => 'blog',
  'posts_per_page'=>3
  );
  $the_query=new WP_Query($contents);
    ?>

<?php if($the_query->have_posts()){
while($the_query->have_posts()){$the_query->the_post();
  ?>

<li class="col-12 col-sm-4">

<a href="<?php the_permalink();?>">
<?php 
$cate=get_the_category();
//categoryを取得する
$catename= $cate[0]->cat_name;
$url=$cate[0]->category_nicename;
?>
<?php if(has_post_thumbnail()){
the_post_thumbnail('myOriginalSizeB');}else{
echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/noimage.png" class="mw-100" />';
}?>

  <div class="blog_ttl_bg">
   <p class="date pr-2 mb-0"><?php the_time('Y/n/j');?></p>
   <p><?php the_title();?></p>
  </div>
</a>
<?php }  } wp_reset_postdata();?>

</ul>



  <p class="text-center"><a href="/category/blog/" class="btn-more">READ MORE</a></p>
  </div>
  <!-- /.container -->
</section>
<!-- /#contents -->



<section id="about" class="">
  <div class="container">
   <div class="heading text-center mb-4 py-4">
      <h2 class="h2 d-inline-block text-con"><img class="" src="/wp-content/themes/asset/images/aic_ttl.png" alt="ideco">ABOUT</h2></div>

      

<div class="row mb-4 flex-row-reverse">
  <div class="col-sm-6 text-center">
      <img src="<?php bloginfo('template_directory');?>/images/boss.JPG"
          alt=""class="mw-100 ">
  </div>
  <div class="col-sm-6"><h3 class="text-center font-weight-bold">アセットデザインラボとは</h3>
<p>中小企業で働く方々に金融経済教育をお届けすること！それがアセットデザインラボの大きな役割の１つです。</p>

<p>大企業に比べ、給与水準、退職金制度、企業年金制度など、必ずしも十分とはいえない、中小企業で働く皆さまが、ご自身でライフイベントや老後のための資産形成を行えるように、少しでもお力になりたいと考えています。</p>


<p class="text-center"><a href="/about/" class="btn-more">READ MORE</a></p>
  </div>
</div>

</div><!-- /.containner -->
</section>

  
  <section class="snsArea py-4">
    <div class="container">
        <div class="heading text-center mb-4">
            <h2 class="h2 d-inline-block"><img class="" src="/wp-content/themes/asset/images/aic_ttl.png" alt="ideco">SNS</h2>
         </div>
      
  <div class="row justify-content-center">
      <div class="col-4 text-center">
          <a href=""><i class="fab fa-facebook-square fa-5x color"></i></a>
      </div><!-- sm-4 -->
      <div class="col-4 text-center">
            <a href="https://www.youtube.com/channel/UCQR5jWD-CfoEBbqbeWZTZ3Q" target="_blank"><i class="fab fa-youtube fa-5x color text-danger"></i></a>
      </div><!-- sm-4 -->
    
      </div><!-- row -->
    </div>
  </section>





  
<section id="contact" class="py-4 bg-light">
  <div class="container">
 <div class="heading text-center mb-4">
      <h2 class="h2 d-inline-block"><img class="" src="/wp-content/themes/asset/images/aic_ttl.png" alt="ideco">お問い合わせはこちら
</h2></div>

<div class="row py-4 justify-content-center"><p class="text-center col-6 col-sm-4"><a href="tel:0487151718" class="btntel"><i class="fas fa-phone-volume pr-2"></i>TEL
</a></p>
  <!-- /.container -->
<p class="text-center col-sm-4 col-6"> <a href="/Contact/" class="btntel"><i class="pl-1 far fa-envelope"></i>MAIL</a></p></div>

</section>


</main>




<?php get_footer(); ?>