<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body>
    <!-- header part start -->
    <header class="container-fluid slider">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php 
            $x=0;
            while(have_posts()): the_post();
            $x++;
            ?>
                <div class="carousel-item <?= ($x==1)?'active' : ''?> ">
                    <?php the_post_thumbnail();?>
                </div>
            <?php endwhile;?>
                <!-- 
                <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
                </div> -->

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </header>
    <!-- header part end -->
    <!-- logo part start -->
    <section class="container-fluid logo">
        <div class="row">
            <div class="col-sm-6">
                <?php the_custom_logo();?>
            </div>
            <div class="col-sm-6 text-end">
                <?php dynamic_sidebar('bdlogo');?>
            </div>
        </div>
    </section>
    <!-- logo part end -->

<?php wp_footer();?>
</body>
</html>