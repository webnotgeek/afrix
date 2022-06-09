<?php /* Template Name: Products */ get_header(); ?>
 <!-- Page Title -->
 <section class="page-title" style="background-image: url(assets/images/background/bg-20.jpg);">
    <div class="background-text">
        <!-- <div data-parallax='{"x": 100}'>
            <div class="text-1">transida</div>
            <div class="text-2">transida</div>
        </div>                 -->
    </div>
    <div class="auto-container">
        <div class="content-box">
            <div class="content-wrapper">
                <div class="title">
                    <h1><?php the_title(); ?></h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li><?php the_title(); ?></li>
                </ul>
            </div>                    
        </div>
    </div>
</section>
<!-- products section -->

<section class="services-section style-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Main Products</div>
                <h2>Moving Your Products Across <br> All Borders</h2>
            </div>


            <div class="display-flex flex-wrap">
            <?php
                    $args = array(
                        'post_parent' => $post->ID,
                        'post_type' => 'page',
                        'orderby' => 'menu_order'
                    );

                    $child_query = new WP_Query( $args );
                ?>

                <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
                <div class="col col-md-4 service-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="<?php bloginfo('template_url') ?>/assets/images/resource/image-12.jpg" alt="">
                            <div class="content">
                                <div>
                                    <div class="icon"><span class="flaticon-airplane"></span></div>
                                    <h4><?php the_title(); ?></h4>
                                </div>            
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="text">Indignation and dislike men who <br> are so beguiled all demoralized by the <br>that all charms.</div>
                            <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div>
                        </div>
                        <div class="overlay" style="background-image: url(assets/images/resource/image-12-2.jpg);">
                            <div>
                                <div class="content">
                                    <div class="icon"><span class="flaticon-airplane"></span></div>
                                    <h4><?php the_title(); ?></h4>
                                </div>
                                <div class="text">Indignation and dislike men who <br> are so beguiled all demoralized by the <br>that all charms.</div>
                                <div class="link"><a href="<?php the_permalink(); ?>" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>

                <?php
                    wp_reset_postdata();
                ?>
            </div>
    </section>

<?php get_footer(); ?>
