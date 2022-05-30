<section class="contact-area contact-bg" data-background="img/bg/contact_bg.jpg">
    <?php
    $hal = isset($_GET['hal']) ? $_GET['hal'] : '';
    // $id = isset($_GET['id']) ? $_GET['id'] : '';
    if(!empty($user) && $role != 'penonton'){
    if($hal == 'genre_form_add'){
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="contact-form-wrap d-flex justify-content-center">
                    <div class="row">
                        <div class="col-3">
                            <div class="widget-title mb-50">
                                <p class="title">Tambah <small>GENRE</small></p>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="contact-form">
                                <form action="genreController.php" method="post">
                                    <label class="text-white h5" for="inputnama">Nama</label>
                                    <input class="isi" type="text" name="nama" id="inputnama" required>

                                    <label class="text-white h5" for="inputket">Keterangan</label>
                                    <textarea class="isi" name="keterangan" id="inputket" rows="3"></textarea>

                                    <button class="bton" type="submit" name="proses" value="simpan">
                                        <i class="fas fa-save"></i> Simpan
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }elseif($hal == 'category_form_add'){
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="contact-form-wrap d-flex justify-content-center">
                    <div class="row">
                        <div class="col-3">
                            <div class="widget-title mb-50">
                                <p class="title">Tambah <small>CATEGORY</small></p>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="contact-form">
                                <form action="categoryController.php" method="post">
                                    <label class="text-white h5" for="inputnama">Nama</label>
                                    <input class="isi" type="text" name="nama" id="inputnama" required>

                                    <label class="text-white h5" for="inputket">Keterangan</label>
                                    <textarea class="isi" name="keterangan" id="inputket" rows="3"></textarea>

                                    <button class="bton" type="submit" name="proses" value="simpan">
                                        <i class="fas fa-save"></i> Simpan
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }elseif($hal == 'theater_form_add'){
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="contact-form-wrap d-flex justify-content-center">
                    <div class="row">
                        <div class="col-3">
                            <div class="widget-title mb-50">
                                <p class="title">Tambah <small>THEATER</small></p>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="contact-form">
                                <form action="theaterController.php" method="post">
                                    <label class="text-white h5" for="inputnama">Nama</label>
                                    <input class="isi" type="text" name="nama" id="inputnama" required>

                                    <label class="text-white h5" for="inputkode">Kode</label>
                                    <i class="fas fa-question-circle" data-placement="right" data-toggle="tooltip"
                                        title="format kode 5 karakter"></i>
                                    <input class="isi" type="text" name="kode" id="inputkode" required>

                                    <label class="text-white h5" for="inputcategory">Category</label>
                                    <select class="isi" id="inputcategory" name="category" required>
                                        <option value="" selected disabled>Pilih</option>
                                        <?php
                                        $obj = new Category();
                                        $rs = $obj->getAll();
                                        foreach($rs as $c){
                                        ?>
                                        <option value="<?= $c['id'] ?>"><?= $c['nama'] ?></option>
                                        <?php } ?>
                                    </select>

                                    <button class="bton" type="submit" name="proses" value="simpan">
                                        <i class="fas fa-save"></i> Simpan
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }elseif($hal == 'movie_form_add'){
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="contact-form-wrap d-flex justify-content-center">
                    <div class="row">
                        <div class="col-3">
                            <div class="widget-title mb-50">
                                <p class="title">Tambah <small>MOVIE</small></p>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="contact-form">
                                <form action="movieController.php" method="post" enctype="multipart/form-data">
                                    <label class="text-white h5" for="inputnama">Nama</label>
                                    <input class="isi" type="text" name="nama" id="inputnama" required>

                                    <label class="text-white h5" for="inputdurasi">Durasi</label>
                                    <i class="fas fa-question-circle" data-placement="right" data-toggle="tooltip"
                                        title="contoh '109 min'"></i>
                                    <input class="isi" type="text" name="durasi" id="inputdurasi" required>

                                    <label class="text-white h5" for="inputtahun">Tahun</label>
                                    <input class="isi" type="text" name="tahun" id="inputtahun" required>

                                    <label class="text-white h5" for="inputresolusi">Resolusi</label>
                                    <select class="isi" name="resolusi" id="inputresolusi" required>
                                        <option value="" selected disabled>Pilih</option>
                                        <option value="HD">HD</option>
                                        <option value="4K">4K</option>
                                        <option value="8K">8K</option>
                                    </select>

                                    <label class="text-white h5" for="inputgenre">Genre</label>
                                    <select class="isi" id="inputgenre" name="genre" required>
                                        <option value="" selected disabled>Pilih</option>
                                        <?php
                                        $obj = new Genre();
                                        $rs = $obj->getAll();
                                        foreach($rs as $g){
                                        ?>
                                        <option value="<?= $g['id'] ?>"><?= $g['nama'] ?></option>
                                        <?php } ?>
                                    </select>

                                    <label class="text-white h5" for="inputtheater">Theater</label>
                                    <select class="isi" id="inputtheater" name="theater" required>
                                        <option value="" selected disabled>Pilih</option>
                                        <?php
                                        $obj = new Theater();
                                        $rs = $obj->getAll();
                                        foreach($rs as $t){
                                        ?>
                                        <option value="<?= $t['id'] ?>"><?= $t['nama'] ?></option>
                                        <?php } ?>
                                    </select>

                                    <label class="text-white h5" for="formFile">Cover/Poster</label>
                                    <input class="isi" type="file" name="foto" id="formFile" required>

                                    <button class="bton" type="submit" name="proses" value="simpan">
                                        <i class="fas fa-save"></i> Simpan
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    }else{ include_once 'views/403.php'; }
    ?>
</section>