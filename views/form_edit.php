<section class="contact-area contact-bg" data-background="img/bg/contact_bg.jpg">
    <?php
    $hal = isset($_GET['hal']) ? $_GET['hal'] : '';
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    if(!empty($user) && $role != 'penonton'){
    if($hal == 'genre_form_edit'){
    $obj = new Genre();
    $data = $obj->getGenre($id);
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="contact-form-wrap d-flex justify-content-center">
                    <div class="row">
                        <div class="col-3">
                            <div class="widget-title mb-50">
                                <p class="title">Ubah Data <small><?= $data['nama'] ?></small></p>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="contact-form">
                                <form action="genreController.php" method="post">
                                    <label class="text-white h5" for="inputnama">Nama</label>
                                    <input class="isi" type="text" name="nama" id="inputnama"
                                        value="<?= $data['nama'] ?>" required>

                                    <label class="text-white h5" for="inputket">Keterangan</label>
                                    <textarea class="isi" name="keterangan" id="inputket"
                                        rows="3"><?= $data['keterangan'] ?></textarea>

                                    <button class="bton" type="submit" name="proses" value="ubah">
                                        <i class="fas fa-save"></i> Simpan
                                    </button>
                                    <input type="hidden" name="idx" value="<?= $id ?>">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }elseif($hal == 'category_form_edit'){
    $obj = new Category();
    $data = $obj->getCategory($id);
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="contact-form-wrap d-flex justify-content-center">
                    <div class="row">
                        <div class="col-3">
                            <div class="widget-title mb-50">
                                <p class="title">Ubah Data <small><?= $data['nama'] ?></small></p>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="contact-form">
                                <form action="categoryController.php" method="post">
                                    <label class="text-white h5" for="inputnama">Nama</label>
                                    <input class="isi" type="text" name="nama" id="inputnama"
                                        value="<?= $data['nama'] ?>" required>

                                    <label class="text-white h5" for="inputket">Keterangan</label>
                                    <textarea class="isi" name="keterangan" id="inputket"
                                        rows="3"><?= $data['keterangan'] ?></textarea>

                                    <button class="bton" type="submit" name="proses" value="ubah">
                                        <i class="fas fa-save"></i> Simpan
                                    </button>
                                    <input type="hidden" name="idx" value="<?= $id ?>">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }elseif($hal == 'theater_form_edit'){
    $obj = new Theater();
    $data = $obj->getTheater($id);
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="contact-form-wrap d-flex justify-content-center">
                    <div class="row">
                        <div class="col-3">
                            <div class="widget-title mb-50">
                                <p class="title">Ubah Data <small><?= $data['nama'] ?></small></p>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="contact-form">
                                <form action="theaterController.php" method="post">
                                    <label class="text-white h5" for="inputnama">Nama</label>
                                    <input class="isi" type="text" name="nama" id="inputnama"
                                        value="<?= $data['nama'] ?>" required>

                                    <label class="text-white h5" for="inputkode">Kode</label>
                                    <input class="isi" type="text" name="kode" id="inputkode"
                                        value="<?= $data['kode'] ?>" required>

                                    <label class="text-secondary h5" for="inputcategory">Category</label>
                                    <i class="fas fa-exclamation-circle" data-placement="right" data-toggle="tooltip"
                                        title="for some reason you can't change this field"></i>
                                    <select class="isi" id="inputcategory" name="category" disabled required>
                                        <option value="<?= $data['category'] ?>" selected>
                                            <?= $data['category'] ?></option>
                                    </select>

                                    <button class="bton" type="submit" name="proses" value="ubah">
                                        <i class="fas fa-save"></i> Simpan
                                    </button>
                                    <input type="hidden" name="idx" value="<?= $id ?>">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }elseif($hal == 'movie_form_edit'){
    $obj = new Movie();
    $data = $obj->getMovie($id);
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="contact-form-wrap d-flex justify-content-center">
                    <div class="row">
                        <div class="col-3">
                            <div class="widget-title mb-50">
                                <p class="title">Ubah Data <small><?= $data['nama'] ?></small></p>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="contact-form">
                                <form action="movieController.php" method="post" enctype="multipart/form-data">
                                    <label class="text-white h5" for="inputnama">Nama</label>
                                    <input class="isi" type="text" name="nama" id="inputnama"
                                        value="<?= $data['nama'] ?>" required>

                                    <label class="text-white h5" for="inputdurasi">Durasi</label>
                                    <input class="isi" type="text" name="durasi" id="inputdurasi"
                                        value="<?= $data['durasi'] ?>" required>

                                    <label class="text-white h5" for="inputtahun">Tahun</label>
                                    <input class="isi" type="text" name="tahun" id="inputtahun"
                                        value="<?= $data['tahun'] ?>" required>

                                    <label class="text-white h5" for="inputresolusi">Resolusi</label>
                                    <select class="isi" name="resolusi" id="inputresolusi" required>
                                        <option value="<?= $data['resolusi'] ?>" selected>
                                            <?= $data['resolusi'] ?></option>
                                        <?php
                                        if($data['resolusi'] == 'HD'){
                                        ?>
                                        <option value="4K">4K</option>
                                        <option value="8K">8K</option>
                                        <?php
                                        }elseif($data['resolusi'] == '4K'){
                                        ?>
                                        <option value="HD">HD</option>
                                        <option value="8K">8K</option>
                                        <?php
                                        }elseif($data['resolusi'] == '8K'){
                                        ?>
                                        <option value="HD">HD</option>
                                        <option value="4K">4K</option>
                                        <?php
                                        }else{
                                        ?>
                                        <option value="HD">HD</option>
                                        <option value="4K">4K</option>
                                        <option value="8K">8K</option>
                                        <?php
                                        }
                                        ?>
                                    </select>

                                    <label class="text-secondary h5" for="inputgenre">Genre</label>
                                    <i class="fas fa-exclamation-circle" data-placement="right" data-toggle="tooltip"
                                        title="for some reason you can't change this field"></i>
                                    <select class="isi" id="inputgenre" name="genre" disabled required>
                                        <option value="<?= $data['genre'] ?>" selected><?= $data['genre'] ?></option>
                                    </select>

                                    <label class="text-secondary h5" for="inputtheater">Theater</label>
                                    <i class="fas fa-exclamation-circle" data-placement="right" data-toggle="tooltip"
                                        title="for some reason you can't change this field"></i>
                                    <select class="isi" id="inputtheater" name="theater" disabled required>
                                        <option value="<?= $data['theater'] ?>" selected><?= $data['theater'] ?>
                                        </option>
                                    </select>

                                    <label class="text-white h5" for="formFile">Cover/Poster</label>
                                    <input class="isi" type="file" name="foto" id="formFile"
                                        value="<?= $data['foto'] ?>" required>

                                    <button class="bton" type="submit" name="proses" value="ubah">
                                        <i class="fas fa-save"></i> Simpan
                                    </button>
                                    <input type="hidden" name="idx" value="<?= $id ?>">
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