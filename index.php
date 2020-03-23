<?
/*
Template Name : Home 
*/
?>
<?php get_header();?>
<?php $hero = get_field('hero');?>
<?php if($hero['image']):?>
<section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(<?php echo $hero['image']?>);">
<?php else:?>
<section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(<?php echo bloginfo('template_url')?>/img/bg-img/bg1.jpg);">

<?php endif;?>        
<div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content text-center">
                        <?php if($hero['title']): ?>
                        <h2><?php echo $hero['title'];?></h2>
                        <?php else:?>
                            <h2>Official Website</h2>
                        <?php endif;?>


                        <?php if($hero['link_title']): ?>
                        <a href="#" class="btn clever-btn"><?php echo $hero['link_title'];?></a>

                        <?php else:?>
                            <a href="#" class="btn clever-btn">Get Started</a>

                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php if( have_rows('facts') ): ?>

    <section class="cool-facts-area section-padding-100-0">
        <div class="container">
        <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Upcoming Events</h3>
                    </div>
                </div>
            </div>

            <div class="row">
<?php while( have_rows('facts') ): the_row(); 

    
    $icon = get_sub_field('icon');
    $value = get_sub_field('value');
    $title = get_sub_field('title');

    ?>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="icon">
                            <img src="<?php echo $icon;?>" alt="">
                        </div>
                        <h2><span class="counter"><?php echo $value;?></span></h2>
                        <h5><?php echo $title;?></h5>
                    </div>
                </div>


<?php endwhile; ?>
        </div>
    </div>
</section>
<?php else: ?>
    <section class="cool-facts-area section-padding-100-0">
        <div class="container">
        <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>School Statistics</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="icon">
                            <img src="<?php echo bloginfo('template_url');?>/img/core-img/star.png" alt="">
                        </div>
                        <h2><span class="counter">123</span></h2>
                        <h5>Dedicated Tutors</h5>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <div class="icon">
                            <img src="<?php echo bloginfo('template_url');?>/img/core-img/events.png" alt="">
                        </div>
                        <h2><span class="counter">89</span></h2>
                        <h5>Scheduled Events</h5>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="1000ms">
                        <div class="icon">
                            <img src="<?php echo bloginfo('template_url');?>/img/core-img/earth.png" alt="">
                        </div>
                        <h2><span class="counter">56</span></h2>
                        <h5>Available Courses</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>



<?php if( have_rows('courses') ): ?>
    <section class="popular-courses-area section-padding-100-0" style="background-image: url(img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Our Free Online Courses</h3>
                    </div>
                </div>
            </div>

            <div class="row">


<?php while( have_rows('courses') ): the_row(); 

    $image = get_sub_field('image');
    $teacher = get_sub_field('teacher');
    $module = get_sub_field('module');
    $description = get_sub_field('description');
    $name = get_sub_field('name');
    $rating = get_sub_field('rating');
    $type = get_sub_field('type');
    $total = get_sub_field('total');

    ?>

<div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="<?php echo $image;?>" alt="">
                        <div class="course-content">
                            <h4><?php echo $name;?></h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#"><?php echo $teacher;?></a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#"><?php echo $module?></a>
                            </div>
                            <p><?php echo $description;?></p>
                        </div>
                    
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> <?php echo $total;?>
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> <?php echo $rating?>
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="#" class="free"><?php echo $type;?></a>
                            </div>
                        </div>
                    </div>
                </div>

<?php endwhile; ?>
</div>
</div>
</section>
<?php else:?>
    <section class="popular-courses-area section-padding-100-0" style="background-image: url(img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Our Free Online Courses</h3>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="<?php echo bloginfo('template_url');?>/img/bg-img/c1.jpg" alt="">

                        <div class="course-content">
                            <h4>English Grammar</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sarah Parker</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                        </div>
                  
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="#" class="free">Free</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="<?php echo bloginfo('template_url');?>/img/bg-img/c2.jpg" alt="">
                        <div class="course-content">
                            <h4>Vocabulary</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sarah Parker</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                        </div>
                    
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="#" class="free">Free</a>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <img src="<?php echo bloginfo('template_url');?>/img/bg-img/c3.jpg" alt="">
                        <div class="course-content">
                            <h4>Expository writing</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sarah Parker</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                        </div>
                    
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="#" class="free">Free</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>















    <section class="register-now section-padding-100-0 d-flex justify-content-between align-items-center" style="background-image: url(img/core-img/texture.png);">
    
        <div class="register-contact-form mb-100 wow fadeInUp" data-wow-delay="250ms">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="forms">
                            <h4>Courses For Free</h4>
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="text" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="phone" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="site" placeholder="Site">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn clever-btn w-100">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

     
        <div class="register-now-countdown mb-100 wow fadeInUp" data-wow-delay="500ms">
            <h3>Register Now</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae. Donec bibendum tortor sed mi faucibus vehicula. Sed erat lorem</p>
     
            <div class="register-countdown">
                <div class="events-cd d-flex flex-wrap" data-countdown="2019/03/01"></div>
            </div>
        </div>
    </section>
<?php get_footer();?>