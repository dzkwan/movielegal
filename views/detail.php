<?php
$hal = isset($_GET['hal']) ? $_GET['hal'] : '';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$obj = new Movie();
$data = $obj->getMovie($id);
?>
<section class="movie-details-area" data-background="img/bg/movie_details_bg.jpg">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-xl-3 col-lg-4">
                <div class="movie-details-img">
                    <img src="img/poster/<?= $data['foto'] ?>" width="303" height="470" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-lg-8">
                <div class="movie-details-content">
                    <h2><span><?= $data['nama'] ?></span></h2>
                    <div class="banner-meta">
                        <ul>
                            <li class="quality">
                                <span><?= $data['resolusi'] ?></span>
                            </li>
                            <li class="release-time">
                                <span><i class="fas fa-couch"></i> <?= $data['theater'] ?></span>
                                <span><i class="fas fa-certificate"></i> <?= $data['genre'] ?></span>
                                <span><i class="far fa-calendar-alt"></i> <?= $data['tahun'] ?></span>
                                <span><i class="far fa-clock"></i> <?= $data['durasi'] ?></span>
                            </li>
                        </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod tempor.There are many
                        variations of passages of lorem Ipsum available, but the majority have suffered alteration in
                        some injected humour.
                    </p>
                    <div class="movie-details-prime">
                        <ul>
                            <li class="share"><a href="#"><i class="fas fa-share-alt"></i> Share</a></li>
                            <li class="share"><a href="#"><i class="fas fa-thumbs-up"></i> Like</a></li>
                            <li class="watch"><a href="#" class="bton"><i class="fas fa-ticket-alt"></i> Book Now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="episode-area episode-bg" data-background="img/bg/episode_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="movie-history-wrap">
                    <h3 class="title">Sinopsis</h3>
                    <p>Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod tempor.There are many
                        variations of passages of lorem Ipsum available, but the majority have suffered alteration in
                        some injected humour.There are many variations of passages of Lorem Ipsum available, but the
                        majority have suffered alteration in some form, by injected humour, or randomised words which
                        don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need
                        to be sure there isn't anything errassing hidden in the middle of text. All the Lorem Ipsum
                        generators on the Internet tend to repeat predefined chunks as necessary, making this the first
                        true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a
                        handful Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium magnam neque aut
                        illo magni asperiores, minus modi est sequi qui fugiat nulla deleniti, quisquam at ratione?
                        Iusto libero sint quibusdam Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi
                        doloribus rem optio. Dolor quibusdam quam id? Aspernatur eveniet, porro temporibus magnam id,
                        assumenda nisi eligendi corporis ipsa quod, nostrum tempora.</p>
                </div>
            </div>
        </div>
    </div>
</section>