<?php
/*
Template Name: Insctructors
*/?>
<?php get_header();?>

<?php $hero = get_field('hero'); ?>
<?php if($hero['image']): ?>
<div class="instructors-video d-flex align-items-center justify-content-center bg-img" style="background-image: url(<?php echo $hero['image']?>);">

<?php else:?>  
<div class="instructors-video d-flex align-items-center justify-content-center bg-img" style="background-image: url(<?php echo bloginfo('template_url')?>/img/bg-img/classroom.jpg);">
<?php endif;?>        
<?php if($hero['title']): ?>
            <h2><?php echo $hero['title'];?></h2>
            <?php else:?>
                <h2>Be The Best Teacher</h2>
            <?php endif;?>
</div>



<?php if( have_rows('tutors') ): ?>
<?php $title = get_sub_field('title');?>
    <section class="best-tutors-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        
                        
                            <?php if ($title) : ?> 
                               <h3> <?php echo $title; ?></h3>
                            <?php else:?> 
                               <h3>The Best Tutors in Town </h3>
                            <?php endif;?>    
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="tutors-slide owl-carousel">


                    <?php while( have_rows('tutors') ): the_row(); 
                        $image = get_sub_field('image');
                        $fullName = get_sub_field('fullname');
                        $role = get_sub_field('role');
                        $description = get_sub_field('description');
                        $fb = get_sub_field('fb');
                        $ig = get_sub_field('ig');
                        $tw = get_sub_field('tw');
                    ?>
                    <div class="single-tutors-slides">  
                            
                            <div class="tutor-thumbnail">
                                <img src="<?php echo $image;?>" alt="">
                            </div>
                            
                            <div class="tutor-information text-center">
                                <h5><?php echo $fullName; ?></h5>
                                <span><?php echo $role; ?></span>
                                <p><?php echo $description; ?></p>
                                <div class="social-info">
                                    <a href="www.facebook.com/<?php echo $fb;?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="www.instagram.com/<?php echo $ig;?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="www.twitter.com/<?php echo $tw;?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                    </div>
    <?php endwhile; ?>
    </div>
    </div> 
    </div> 
    </div> 
</section>
<?php else:?>
    <section class="best-tutors-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        
                        <h3>The Best Tutors in Town</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="tutors-slide owl-carousel">

                        <div class="single-tutors-slides">
                            
                            <div class="tutor-thumbnail">
                                <img src="<?php echo bloginfo('template_url')?>/img/bg-img/t2.png" alt="">
                            </div>
                            
                            <div class="tutor-information text-center">
                                <h5>John Doe</h5>
                                <span>Teacher</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="single-tutors-slides">
                            <div class="tutor-thumbnail">
                                <img src="<?php echo bloginfo('template_url')?>/img/bg-img/t2.png" alt="">
                            </div>
                            <div class="tutor-information text-center">
                                <h5>John Doe</h5>
                                <span>Teacher</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="single-tutors-slides">
                            
                            <div class="tutor-thumbnail">
                                <img src="<?php echo bloginfo('template_url')?>/img/bg-img/t2.png" alt="">
                            </div>
                            
                            <div class="tutor-information text-center">
                                <h5>John Doe</h5>
                                <span>Teacher</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="single-tutors-slides">
                            
                            <div class="tutor-thumbnail">
                                <img src="<?php echo bloginfo('template_url')?>/img/bg-img/t2.png" alt="">
                            </div>
                            
                            <div class="tutor-information text-center">
                                <h5>John Doe</h5>
                                <span>Teacher</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="single-tutors-slides">
                            
                            <div class="tutor-thumbnail">
                                <img src="<?php echo bloginfo('template_url')?>/img/bg-img/t2.png" alt="">
                            </div>
                            
                            <div class="tutor-information text-center">
                                <h5>John Doe</h5>
                                <span>Teacher</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>


<?php if( have_rows('teachers') ): ?>

    <section class="top-teacher-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Top Teachers in Every Field</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                
                <div class="col-12 col-md-6 col-lg-4">

<?php while( have_rows('teachers') ): the_row(); 

    $image = get_sub_field('image');
    $fullname = get_sub_field('fullname');
    $role = get_sub_field('role');

    ?>
    <div class="single-instructor d-flex align-items-center mb-30">
                        <div class="instructor-thumb">
                            <img src="<?php echo $image;?>" alt="">
                        </div>
                        <div class="instructor-info">
                            <h5><?php echo $fullname; ?></h5>
                            <span><?php echo $role; ?></span>
                        </div>
    </div>
    
<?php endwhile; ?>
</div>
</div>
</div>
</section>
<?php else:?>
    <section class="top-teacher-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Top Teachers in Every Field</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-instructor d-flex align-items-center mb-30">
                        <div class="instructor-thumb">
                            <img src="<?php echo bloginfo('template_url')?>/img/bg-img/t5.png" alt="">
                        </div>
                        <div class="instructor-info">
                            <h5>Sarah Jane</h5>
                            <span>Teacher</span>
                        </div>
                    </div>
                </div>

                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-instructor d-flex align-items-center mb-30">
                        <div class="instructor-thumb">
                            <img src="<?php echo bloginfo('template_url')?>/img/bg-img/t5.png" alt="">
                        </div>
                        <div class="instructor-info">
                            <h5>Sarah Jane</h5>
                            <span>Teacher</span>
                        </div>
                    </div>
                </div>

                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-instructor d-flex align-items-center mb-30">
                        <div class="instructor-thumb">
                            <img src="<?php echo bloginfo('template_url')?>/img/bg-img/t5.png" alt="">
                        </div>
                        <div class="instructor-info">
                            <h5>Sarah Jane</h5>
                            <span>Teacher</span>
                        </div>
                    </div>
                </div>

                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-instructor d-flex align-items-center mb-30">
                        <div class="instructor-thumb">
                            <img src="<?php echo bloginfo('template_url')?>/img/bg-img/t5.png" alt="">
                        </div>
                        <div class="instructor-info">
                            <h5>Sarah Jane</h5>
                            <span>Teacher</span>
                        </div>
                    </div>
                </div>

                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-instructor d-flex align-items-center mb-30">
                        <div class="instructor-thumb">
                            <img src="<?php echo bloginfo('template_url')?>/img/bg-img/t5.png" alt="">
                        </div>
                        <div class="instructor-info">
                            <h5>Sarah Jane</h5>
                            <span>Teacher</span>
                        </div>
                    </div>
                </div>

                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-instructor d-flex align-items-center mb-30">
                        <div class="instructor-thumb">
                            <img src="<?php echo bloginfo('template_url')?>/img/bg-img/t5.png" alt="">
                        </div>
                        <div class="instructor-info">
                            <h5>Sarah Jane</h5>
                            <span>Teacher</span>
                        </div>
                    </div>
                </div>

                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-instructor d-flex align-items-center mb-30">
                        <div class="instructor-thumb">
                            <img src="<?php echo bloginfo('template_url')?>/img/bg-img/t5.png" alt="">
                        </div>
                        <div class="instructor-info">
                            <h5>Sarah Jane</h5>
                            <span>Teacher</span>
                        </div>
                    </div>
                </div>

                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-instructor d-flex align-items-center mb-30">
                        <div class="instructor-thumb">
                            <img src="<?php echo bloginfo('template_url')?>/img/bg-img/t5.png" alt="">
                        </div>
                        <div class="instructor-info">
                            <h5>Sarah Jane</h5>
                            <span>Teacher</span>
                        </div>
                    </div>
                </div>

                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-instructor d-flex align-items-center mb-30">
                        <div class="instructor-thumb">
                            <img src="<?php echo bloginfo('template_url')?>/img/bg-img/t5.png" alt="">
                        </div>
                        <div class="instructor-info">
                            <h5>Sarah Jane</h5>
                            <span>Teacher</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>
<?php get_footer();?>
