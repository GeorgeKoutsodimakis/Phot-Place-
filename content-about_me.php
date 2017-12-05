<?php

?>


<section class="about-me">

  <div class="header">
    <h1>ΠΟΙΟΙ ΕΙΜΑΣΤΕ</h1>
  </div>

  <?php
      $loop= new WP_Query(array(
      'post_type' => 'about',
      'orderby' => 'post_id',
      'order' => 'ASC',

    ));
  ?>

<?php if($loop->have_posts()) : ?>
    <?php while($loop->have_posts()) : $loop->the_post();
    $postid = get_the_ID();
    $logo=get_field('image_logo',$postid);
    $about_1=get_field('about_paragraph_1',$postid);
    $about_2=get_field('about_paragraph_2',$postid);
?>
      <div class="container about">


          <div class="col-md-7">
            <p><?php echo $about_1; ?></p>
            <p><?php echo $about_2; ?></p>
          </div>
          <div class="col-md-5 text-center about-img">
            <img class="img-circle img" src="<?php echo $logo['url']; ?>"alt="">
          </div>
      </div>
    <?php endwhile; ?>
<?php endif; wp_reset_query(); ?>





  <div class="container">
    <hr>
  </div>

  <div class="containe gal-footer">
    <button type="button" class="btn btn-default btn-circle btn-xl social"> <i class="fa fa-facebook fa-1x"></i></button>
    <button type="button" class="btn btn-default btn-circle btn-xl"> <i class="fa fa-instagram fa-1x"></i></button>
    <button type="button" class="btn btn-default btn-circle btn-xl"> <i class="fa fa-500px fa-1x"></i></button>
  </div>


</section>
