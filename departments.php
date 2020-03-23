<?php
/*
Template Name: Departments
*/
?>
<?php get_header();?>
<? $field = get_field('field');?>
<?php if( have_rows('fields') ): ?>
    <section class="blog-area blog-page section-padding-100">
    <div class="container-fluid">
    <div class="row">
        <div class="col-12">
        <div class="blog-catagories d-flex flex-wrap justify-content-between">
​
<?php while( have_rows('fields') ): the_row(); 
​
    $image = get_sub_field('image');
    $name = get_sub_field('name');
    ?>
    <div class="single-catagories bg-img" style="background-image: url(<?php echo $image;?>);">
                            <a href="#">
                                <h6><?php echo $name?></h6>
                            </a>
    </div>
​
<?php endwhile; ?>
</div>
</div>
</div>
</div>
</section>
<?php else: ?>
    <section class="blog-area blog-page section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="blog-catagories mb-70 d-flex flex-wrap justify-content-between">
                        <div class="single-catagories bg-img" style="background-image: url(<?php echo bloginfo('template_url')?>/img/bg-img/bc1.jpg);">
                            <a href="#">
                                <h6>Management</h6>
                            </a>
                        </div>
                        <div class="single-catagories bg-img" style="background-image: url(<?php echo bloginfo('template_url')?>/img/bg-img/bc1.jpg);">
                            <a href="#">
                                <h6>Business</h6>
                            </a>
                        </div>
                        <div class="single-catagories bg-img" style="background-image: url(<?php echo bloginfo('template_url')?>/img/bg-img/bc1.jpg);">
                            <a href="#">
                                <h6>Software</h6>
                            </a>
                        </div>
                        <div class="single-catagories bg-img" style="background-image: url(<?php echo bloginfo('template_url')?>/img/bg-img/bc1.jpg);">
                            <a href="#">
                                <h6>Languages</h6>
                            </a>
                        </div>
                        <div class="single-catagories bg-img" style="background-image: url(<?php echo bloginfo('template_url')?>/img/bg-img/bc1.jpg);">
                            <a href="#">
                                <h6>Programming Languages</h6>
                            </a>
                        </div>
                        <div class="single-catagories bg-img" style="background-image: url(<?php echo bloginfo('template_url')?>/img/bg-img/bc1.jpg);">
                            <a href="#">
                                <h6>IT</h6>
                            </a>
                        </div>
                    </div>
                </div>
</div>
</section>
<?php endif; ?>
​
<?php if( have_rows('cards') ): ?>
    <section class="blog-area blog-page section-padding-100">
        <div class="container-fluid">            
            <div class="row">
 
​
<?php while( have_rows('cards') ): the_row(); 
​
    $image = get_sub_field('image');
    $desc = get_sub_field('description');
    $chef = get_sub_field('chef');
    $role = get_sub_field('role');
    $dep = get_sub_field('dep');
    ?>
                    <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms" style="visibility: visible; animation-delay: 250ms; animation-name: fadeInUp;">
                        <img src="<?php echo $image;?>" alt="">
                      
                        <div class="blog-content">
                            <a href="#" class="blog-headline">
                                <h4><?php echo $dep;?></h4>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#"><?php echo $role;?></a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#"><?php echo $chef;?></a>
                            </div>
                            <p><?php echo $desc;?></p>
                        </div>
                    </div>
                </div>
​
​
​
<?php endwhile; ?>
</div></div>
</section>
<?php else:?>
    <section class="blog-area blog-page section-padding-100">
        <div class="container-fluid">            
            <div class="row">
 
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms" style="visibility: visible; animation-delay: 250ms; animation-name: fadeInUp;">
                        <img src="<?php echo bloginfo('template_url')?>/img/bg-img/bc5.jpg" alt="">
                      
                        <div class="blog-content">
                            <a href="#" class="blog-headline">
                                <h4>Computer Science</h4>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Department Chef</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">John Doe</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                        </div>
                    </div>
                </div>
​
               
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                        <img src="<?php echo bloginfo('template_url')?>/img/bg-img/bc2.jpg" alt="">
                      
                        <div class="blog-content">
                            <a href="#" class="blog-headline">
                                <h4>Business</h4>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Department Chef</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Patrick Jane</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                        </div>
                    </div>
                </div>
            </div>
​
        </div>
    </section>
​
<?php endif; ?>
​
​
<?php $about = get_field('about');?>
<div class="container mb-70">
        <div class="row">
                <div class="col-12">
                    <div class="page-content">
                        <?php if($about['title']):?>
                        <h4><?php echo $about['title'];?></h4>
                        <?php else: ?>
                        <h4>About The School</h4>
                        <?php endif;?>
​
                        <?php if($about['desc']):?>
                            <p><?php echo $about['desc'];?></p>
​
                            <?php else: ?>
                        <p>Sed elementum lacus a risus luctus suscipit. Aenean sollicitudin sapien neque, in fermentum lorem dignissim a. Nullam eu mattis quam. Donec porttitor nunc a diam molestie blandit. Maecenas quis ultrices ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam eget vehicula lorem, vitae porta nisi. Ut vel quam erat. Ut vitae erat tincidunt, tristique mi ac, pharetra dolor. In et suscipit ex. Pellentesque aliquet velit tortor, eget placerat mi scelerisque a. Aliquam eu dui efficitur purus posuere viverra. Proin ut elit mollis, euismod diam et, fermentum enim.</p>
                        <?php endif;?>
​
                    </div>
                </div>
        </div>
    </div>
<?php get_footer();?>
