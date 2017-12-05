

<section id="full-screen-carousel">


    <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">



        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <?php $loop= new WP_Query(array(
            'post_type' => 'home_page',
            'orderby' => 'post_id',
            'order' => 'ASC'
           ));?>

           <?php  while ( $loop->have_posts() ) : $loop->the_post(); $i++; ?>
             <?php
             $postid = get_the_ID();
             $carousel_image = get_field('carousel_image',$post_id);
             //$carousel_image_category = the_field('carousel_image_category',$post_id);
             $carousel_image_desc = get_field('carousel_image_desc',$post_id);

            ?>

            <?php if($i ==1){?>
              <div class="item active">
                  <img src="<?php echo $carousel_image['url']; ?>" alt="...">
                  <div class="carousel-caption">
                    <h1><?php echo the_field('carousel_image_category',$post_id); ?></h3>
                      <p><?php echo $carousel_image_desc; ?></p>
                  </div>
              </div>
            <?php  }else{ ?>
              <div class="item">
                  <img src="<?php echo $carousel_image['url']; ?>" alt="...">
                  <div class="carousel-caption">
                    <h1><?php echo the_field('carousel_image_category',$post_id); ?></h3>
                      <p><?php echo $carousel_image_desc; ?></p>
                  </div>
              </div>
        <?php  } ?>



  <?php endwhile;wp_reset_query(); ?>


        </div>


        <!-- Controls -->
        <a class="left carousel-control" href="#carouselFade" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselFade" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</section>
