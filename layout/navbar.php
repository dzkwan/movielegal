<?php
$user = isset($_SESSION['MEMBER']) ? $_SESSION['MEMBER'] : '';
?>
<header>
    <div id="sticky-header" class="menu-area transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav show">
                            <div class="logo d-flex">
                                <a href="index.php">
                                    <h2>Movie<span style="color: #e4d804">legal</span></h2>
                                </a>
                                <?php
                                if(empty($user)){
                                ?>
                                <div class="d-lg-none">
                                    <button data-target="#search-modal" data-toggle="modal" class="bton ml-3"
                                        style="padding:10px 10px">Sign
                                        In <i class="fa fa-sign-in-alt ms-3"></i></button>
                                </div>
                                <?php
                                }else{
                                ?>
                                <div class="d-lg-none">
                                    <a href="logout.php" class="btn btn-logout ml-3 btn-danger"
                                        style="padding:10px 10px"
                                        onclick="return confirm('yakin ingin dikeluar?');">Logout <i
                                            class="fa fa-sign-out-alt ms-3"></i></a>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="navbar-wrap navbar-nav main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="index.php?hal=movie">Movie</a></li>
                                    <li class="menu-item-has-children">
                                        <a style="cursor:pointer">List <i class="fas fa-caret-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="index.php?hal=genre">Genre</a></li>
                                            <li><a href="index.php?hal=category">Category</a></li>
                                            <li><a href="index.php?hal=theater">Theater</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?hal=contact">Contact</a></li>
                                </ul>
                            </div>
                            <div class="header-action d-none d-md-block">
                                <ul>
                                    <?php
                                    if(empty($user)){
                                    ?>
                                    <li class="header-btn">
                                        <button data-target="#search-modal" data-toggle="modal" class="bton">Sign
                                            In <i class="fa fa-sign-in-alt ms-3"></i></button>
                                    </li>
                                    <?php
                                    }else{
                                    ?>
                                    <li class="d-none d-xl-block">
                                        <div class="footer-search">
                                            <div class="akun">
                                                <p class="d-inline px-2 pl-3"><?= $user['fullname'] ?> -
                                                    <?= $user['role'] ?></p>
                                                <a href="logout.php" class="btn btn-logout btn-danger"
                                                    onclick="return confirm('yakin ingin dikeluar?');">Logout <i
                                                        class="fa fa-sign-out-alt ms-3"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <div class="close-btn"><i class="fas fa-times"></i></div>

                        <nav class="menu-box">
                            <div class="nav-logo">
                                <a href="index.php">
                                    <h3>Movie<span style="color: #e4d804">legal</span></h3>
                                </a>
                            </div>
                            <div class="menu-outer">
                                <?php
                                if(empty($user)){}else{
                                ?>
                                <ul class="navigation">
                                    <li class="text-white py-3 pl-4">
                                        <?= $user['fullname'] ?> - <?= $user['role'] ?>
                                    </li>
                                </ul>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="search-modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h5 class="modal-title text-dark h4" id="staticBackdropLabel">Form Login
                        <i class="fas fa-exclamation-circle fa-xs" data-placement="right" data-toggle="tooltip"
                            title="user1: ahmad & pw: admin user2: sarah & pw: manager user3: jaidi & pw: staff &nbsp; user4: budi & pw: penonton"></i>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="memberController.php" method="post">
                        <div class="form-group">
                            <label class="text-dark h5" for="username">Username</label>
                            <input type="text" name="username" class="form-control" id="username" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark h5" for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="d-inline">
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-danger col-12"
                                        data-dismiss="modal">Cancel</button>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-login col-12">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>