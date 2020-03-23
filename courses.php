<?php
    /*Template Name:Courses*/
?>
<?php get_header();?>
<div class="breadcumb-area">
    </div>
    <?php $hero = get_field('hero');?>
    <?php if($hero['image']):?>
    <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url(<?php echo $hero['image']?>);">

<?php else:?>

    <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url(<?php echo bloginfo('template_url')?>/img/bg-img/swe.jpg);">
<?php endif;?>
        <?php if($hero['title']):?>
        <h3><?php echo $hero['title'];?></h3>
        <?php else: ?>
            <h3>Software Engineering</h3>  
        <?php endif;?>
    </div>


<?php if( have_rows('courses') ): ?>

        <section class="popular-courses-area section-padding-100">
        <div class="container">
            <div class="row">
             

<?php while( have_rows('courses') ): the_row(); 

$image = get_sub_field('image');
$teacher = get_sub_field('teacher');
$module = get_sub_field('module');
$description = get_sub_field('description');
$name = get_sub_field('name');
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
                        </div>
</div>

<?php endwhile; ?>
</div>
</div>
</section>
<?php else: ?>
    <section class="popular-courses-area section-padding-100">
        <div class="container">
            <div class="row">
                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="<?php echo bloginfo('template_url')?>/img/bg-img/bc5.jpg" alt="">
                        
                        <div class="course-content">
                            <h4>Programming</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sarah Parker</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                        </div>

                    </div>
                </div>

                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="<?php echo bloginfo('template_url')?>/img/bg-img/bc2.jpg" alt="">
                        
                        <div class="course-content">
                            <h4>Management</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sarah Parker</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                        </div>

                    </div>
                </div>

                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <img src="<?php echo bloginfo('template_url')?>/img/bg-img/bc4.jpg" alt="">
                        
                        <div class="course-content">
                            <h4>Languages</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sarah Parker</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                        </div>

                    </div>
                </div>

                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="<?php echo bloginfo('template_url')?>/img/bg-img/bc2.jpg" alt="">
                        
                        <div class="course-content">
                            <h4>Management</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sarah Parker</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                        </div>

                    </div>
                </div>

                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="<?php echo bloginfo('template_url')?>/img/bg-img/bc5.jpg" alt="">
                        
                        <div class="course-content">
                            <h4>Programming</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sarah Parker</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                        </div>

                    </div>
                </div>

                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <img src="<?php echo bloginfo('template_url')?>/img/bg-img/bc4.jpg" alt="">
                        
                        <div class="course-content">
                            <h4>Languages</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sarah Parker</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                        </div>

                    </div>
                </div>

                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="<?php echo bloginfo('template_url')?>/img/bg-img/bc5.jpg" alt="">
                        
                        <div class="course-content">
                            <h4>Programming</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sarah Parker</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                        </div>

                    </div>
                </div>

                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="<?php echo bloginfo('template_url')?>/img/bg-img/bc2.jpg" alt="">
                        
                        <div class="course-content">
                            <h4>Management</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sarah Parker</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                        </div>

                    </div>
                </div>

                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <img src="<?php echo bloginfo('template_url')?>/img/bg-img/bc4.jpg" alt="">
                        
                        <div class="course-content">
                            <h4>Languages</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sarah Parker</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                        </div>

                    </div>
                </div>
            </div>

        
        </div>
    </section>
    <?php endif; ?>

    <?php get_footer();?>