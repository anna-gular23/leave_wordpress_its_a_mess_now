<?php
/*
*   Template Name: Landing Page
*/
?>
   <?php echo get_header(); ?>
    <section id="hero" class="clearfix" data-type="background" data-speed="5">
        <div class="container">
            <div class="row">
                <div class="col-xs-5">
                    <?php echo get_the_post_thumbnail(4, 'post_thumbnail');?>
                </div><!-- end col -->
                <div class="col-xs-7">
                    <h1><?php echo get_post_meta(7, 'main-heading', true);?></h1>
                </div><!-- end col -->
            </div><!-- end row -->
            <div class="row buttons">
                <div class="col-sm-6">
                    <button type="button" id="btnPortfolio" class="btn btn-default hero-btn"><?php echo get_post_meta(7, 'btn-portfolio-text', true); ?></button>
                </div><!-- end col-->
                <div class="col-sm-6">
                    <button type="button" id="btnContact" class="btn btn-primary hero-btn"><?php echo get_post_meta(7, 'btn-contact-text', true);  ?></button>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
  </header>
  
  <section id="mainContent">
     <hr id="pink">
       <hr id="pinkthin">
          <div class="container">
              <div class="row">
                  <div class="col-xs-4">
                     <h2><?php echo get_post_meta(7, 'h2-heading-content', true);?></h2>
                  </div><!-- end col -->
                  <div class="col-xs-8">
                      <p><?php echo get_post_meta(4, 'content-paragraph', true) ?></p>
                  </div><!-- end col -->
              </div><!-- end row -->
          </div><!-- end container -->
          <hr id="cyan">
          <hr id="cyanthin">
  </section>
  
  <section id="more">
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <h3><?php echo get_post_meta(4, 'h3-heading-webdesign', true);?></h3>
                  <p><?php echo get_post_meta(4, 'p-webdesign', true); ?></p>
                  <button type="button" class="btn btn-default more-btn"><?php echo get_post_meta(4,'more-btn', true);?></button>
              </div><!-- end col -->
              <div class="col-md-4">
                  <h3><?php echo get_post_meta(4, 'h3-heading-webprogramming', true);?></h3>
                  <p><?php echo get_post_meta(4, 'p-webprogramming', true);?>
                  </p>
                  <button type="button" class="btn btn-default more-btn"><?php echo get_post_meta(4,'more-btn', true);?></button>
              </div><!-- end col -->
              <div class="col-md-4">
                  <h3><?php echo get_post_meta(4, 'h3-appdevelopment', true); ?></h3>
                  <p><?php echo get_post_meta(4, 'p-appdevelopment', true);?></p> 
                  <button type="button" class="btn btn-default more-btn"><?php echo get_post_meta(4,'more-btn', true);?></button>
              </div><!-- end col -->
          </div><!-- end row -->
      </div><!-- end container -->
  </section>
<?php get_footer(); ?>
