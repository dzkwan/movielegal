<section class="movie-area movie-bg" data-background="img/bg/movie_bg.jpg">
    <div class="container">
        <div class="row align-items-end mb-60">
            <div class="col-lg-6">
                <div class="section-title text-center text-lg-left d-lg-flex">
                    <h2 class="title">Now Playing</h2>
                    <?php
                    if(!empty($user) && $role != 'penonton'){
                    ?>
                    <a href="index.php?hal=movie_form_add" class="bton p-3 ml-3 mt-md-2 mt-lg-0"><i
                            class="fas fa-plus"></i> Add
                        New</a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row tr-movie-active">
            <?php
            $obj = new Movie();
            $rs = $obj->getAll();
            foreach($rs as $m){
            ?>
            <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer">
                <div class="movie-item movie-item-three mb-50">
                    <div class="movie-poster">
                        <img src="img/poster/<?= $m['foto'] ?>" height="490" alt="">
                        <div class="overlay-bawah"></div>
                        <div class="overlay-teks">
                            <h6 class="teks-bawah"><?= $m['genre'] ?></h6>
                            <h6 class="teks-bawah" style="color: #e4d804"><?= $m['theater'] ?></h6>
                        </div>
                        <ul class="overlay-btn">
                            <li><a href="#" class="bton">Book Now</a></li>
                            <li><a href="index.php?hal=movie_detail&id=<?= $m['id'] ?>" class="bton">Details</a></li>
                            <?php
                            if(!empty($user) && $role != 'penonton'){
                            ?>
                            <li>
                                <form action="movieController.php" method="post">
                                    <a href="index.php?hal=movie_form_edit&id=<?= $m['id'] ?>"
                                        class="btn btn-sm btn-success rounded py-2 px-2 me-1"><i class="fa fa-edit"
                                            aria-hidden="true"></i></a>
                                    <?php
                                    if($role != 'staff'){
                                    ?>
                                    <button type="submit" name="proses" value="hapus"
                                        onclick="return confirm('yakin <?= $m['nama'] ?> ingin dihapus?');"
                                        class="btn btn-sm btn-danger rounded p-2 me-1"><i class="fa fa-trash"
                                            aria-hidden="true"></i></button>
                                    <input type="hidden" name="idx" value="<?= $m['id'] ?>" />
                                    <?php
                                    }
                                    ?>
                                </form>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="movie-content">
                        <div class="top">
                            <h5 class="title"><a href="movie-details.html"><?= $m['nama'] ?></a></h5>
                            <span class="date"><?= $m['tahun'] ?></span>
                        </div>
                        <div class="bottom">
                            <ul>
                                <li>
                                    <span class="quality mr-3"><?= $m['resolusi'] ?></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </li>
                                <li>
                                    <span class="duration"><i class="far fa-clock"></i><?= $m['durasi'] ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="pagination-wrap mt-30">
                    <nav>
                        <ul>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>