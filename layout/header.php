<?php
$hal = isset($_GET['hal']) ? $_GET['hal'] : '';
$id = isset($_GET['id']) ? $_GET['id'] : '';
if(empty($hal)){
?>
<section class="banner-area banner-bg" data-background="img/banner/banner_bg01.jpg">
    <div class="container custom-container">
        <div class="row">
            <div class="col-xl-6 col-lg-8">
                <div class="banner-content">
                    <h6 class="sub-title wow fadeInUp text-white" data-wow-delay=".2s" data-wow-duration="1.8s">
                        Movie<span style="color: #e4d804">legal</h6>
                    <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1.8s">Best Platform for Book
                        a <span>Movie</span>
                    </h2>
                    <a href="index.php?hal=movie" class="banner-btn bton wow fadeInUp" data-wow-delay=".8s"
                        data-wow-duration="1.8s"><i class="fas fa-play"></i> Book Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}elseif($hal == 'movie'){
?>
<section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/movie.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="title"><span class="text-uppercase"><?= $hal;?></span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $hal;?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}elseif($hal == 'genre'){
?>
<section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/genre.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="title"><span class="text-uppercase"><?= $hal;?></span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="">List</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $hal;?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}elseif($hal == 'category'){
?>
<section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/category.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="title"><span class="text-uppercase"><?= $hal;?></span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="">List</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $hal;?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}elseif($hal == 'contact'){
?>
<section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/contact.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="title"><span class="text-uppercase"><?= $hal;?></span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $hal;?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}elseif($hal == 'theater'){
?>
<section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/theater.jpeg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="title"><span class="text-uppercase"><?= $hal;?></span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="">List</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $hal;?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}elseif($hal == 'genre_form_add'){
?>
<section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/genre.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="title"><span class="text-uppercase">Form Add</span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="">List</a></li>
                            <li class="breadcrumb-item"><a href="index.php?hal=genre">Genre</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Add</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}elseif($hal == 'category_form_add'){
?>
<section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/category.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="title"><span class="text-uppercase">Form Add</span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="">List</a></li>
                            <li class="breadcrumb-item"><a href="index.php?hal=category">Category</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Add</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}elseif($hal == 'theater_form_add'){
?>
<section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/theater.jpeg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="title"><span class="text-uppercase">Form Add</span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="">List</a></li>
                            <li class="breadcrumb-item"><a href="index.php?hal=theater">Theater</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Add</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}elseif($hal == 'movie_form_add'){
?>
<section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/movie.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="title"><span class="text-uppercase">Form Add</span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="index.php?hal=movie">Movie</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Add</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}elseif($hal == 'genre_form_edit'){
?>
<section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/genre.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="title"><span class="text-uppercase">Form Edit</span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="">List</a></li>
                            <li class="breadcrumb-item"><a href="index.php?hal=genre">Genre</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}elseif($hal == 'category_form_edit'){
?>
<section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/category.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="title"><span class="text-uppercase">Form Edit</span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="">List</a></li>
                            <li class="breadcrumb-item"><a href="index.php?hal=category">Category</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}elseif($hal == 'theater_form_edit'){
?>
<section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/theater.jpeg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="title"><span class="text-uppercase">Form Edit</span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="">List</a></li>
                            <li class="breadcrumb-item"><a href="index.php?hal=theater">Theater</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}elseif($hal == 'movie_form_edit'){
?>
<section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/movie.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="title"><span class="text-uppercase">Form Edit</span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="index.php?hal=movie">Movie</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}elseif($hal == 'movie_detail'){
$obj = new Movie();
$data = $obj->getMovie($id);
?>
<section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/movie.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="title"><span class="text-uppercase"><?= $data['nama'] ?></span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="index.php?hal=movie">Movie</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $data['nama'] ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}
?>