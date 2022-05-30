<section class="pricing-area pricing-bg" data-background="img/bg/pricing_bg.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title title-style-three text-center mb-50">
                    <span class="sub-title">our Category</span>
                    <h2 class="title mb-3">Our Category</h2>
                    <?php
                    if(!empty($user) && $role != 'penonton'){
                    ?>
                    <a href="index.php?hal=category_form_add" class="bton"><i class="fas fa-plus"></i> Add New</a>
                    <?php
                    if($role != 'staff'){
                    ?>
                </div>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Warning!</strong> perhatikan halaman <strong>THEATER</strong> sebelum delete.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
                }
                }
                ?>
            </div>
        </div>
        <div class="pricing-box-wrap">
            <div class="row">
                <?php
                $obj = new Category();
                $rs = $obj->getAll();
                foreach($rs as $c){
                ?>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="category-box mb-30">
                        <div class="pricing-top m-0">
                            <div class="price mb-3">
                                <h1 class="text-dark"><i class="fas fa-couch fa-2x"></i></h1>
                            </div>
                            <h3 class="teks"><?= $c['nama'] ?></h3>
                            <h6 class="teks"><?= $c['keterangan'] ?></h6>
                        </div>
                        <?php
                        if(!empty($user) && $role != 'penonton'){
                        ?>
                        <div class="pricing-btn d-flex justify-content-end">
                            <form action="categoryController.php" method="post">
                                <a href="index.php?hal=category_form_edit&id=<?= $c['id'] ?>"
                                    class="btn btn-sm btn-success rounded py-2 px-2 me-1"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a>
                                <?php
                                if($role != 'staff'){
                                ?>
                                <button type="submit" name="proses" value="hapus"
                                    onclick="return confirm('yakin <?= $c['nama'] ?> ingin dihapus?');"
                                    class="btn btn-sm btn-danger rounded p-2 me-1"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                                <input type="hidden" name="idx" value="<?= $c['id'] ?>" />
                                <?php
                                }
                                ?>
                            </form>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>