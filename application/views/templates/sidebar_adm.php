<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
                    <div >
                    <a  href="<?=base_url("admin/home")?>">
                            <img src="<?= base_url() ?>assets/images/sarugo-logo.png" alt="SARUGO" />
                        </a>
                    </div>
                    <div class="menu-sidebar2__content ">
                        <!--<div class="account2">
                    <div class="image img-cir img-120">
                        <img src="assets/images/logo-kominfo.jpg" />
                    </div>
                    <h4 class="name">SARUGO</h4>
                    <a href="#">Sign out</a>
                </div>-->
                        <nav class="navbar-sidebar">
                            <ul class="list-unstyled navbar__list">
                                <li>
                                    <a class="js-arrow" href="<?=base_url("admin/home")?>">
                                        <i class="fas fa-home"></i>Home
                                    </a>
                                </li>

                                <?php if(isset($this->session->admin->hal_statis) && $this->session->admin->hal_statis ) : ?>
                                     
                                    <li>
                                        <a href="<?=base_url("admin/statis")?>">
                                            <i class="fas fa-chart-bar"></i>Halaman Statis</a>
                                    </li>
                                <?php endif ?> 

                                <?php if(isset($this->session->admin->event) && $this->session->admin->event ) : ?>
                                    <li>
                                        <a href="<?=base_url("admin/event")?>">
                                            <i class="fas fa-calendar"></i>Event</a>
                                    </li>
                                <?php endif ?>

                                <?php if(isset($this->session->admin->menu) && $this->session->admin->menu ) : ?>
                                
                                    <li>
                                        <a href="<?=base_url("admin/menu")?>">
                                            <i class="fas fa-bars"></i>Menu</a>
                                    </li>
                                <?php endif ?>   

                                <?php if(isset($this->session->admin->sub_menu) && $this->session->admin->sub_menu ) : ?>
                                    <li>
                                        <a href="<?=base_url("admin/submenu")?>">
                                            <i class="fas fa-indent"></i>Sub Menu
                                        </a>
                                    </li>
                                <?php endif ?>

                                <?php if(isset($this->session->admin->banner) && $this->session->admin->banner ) : ?>
                                    <li>
                                        <a href="<?=base_url("admin/banner")?>">
                                            <i class="fas fa-picture-o"></i>Banner/Slider
                                        </a>
                                    </li>
                                <?php endif ?>

                                <?php if(isset($this->session->admin->wisata) && $this->session->admin->wisata ) : ?>
                                    <li>
                                        <a href="<?=base_url("admin/wisata")?>">
                                            <i class="fas fa-location-arrow"></i>Wisata
                                        </a>
                                    </li>
                                <?php endif ?>

                                <?php if(isset($this->session->admin->produk) && $this->session->admin->produk ) : ?>
                                    <li>
                                        <a href="<?=base_url("admin/produk")?>">
                                            <i class="fas fa-tag"></i>Produk
                                        </a>
                                    </li>
                                <?php endif ?>

                                <?php if(isset($this->session->admin->paket_wisata) && $this->session->admin->paket_wisata ) : ?>
                                    <li>
                                        <a href="<?=base_url("admin/paketwisata")?>">
                                            <i class="fas fa-bookmark"></i>Paket Wisata
                                        </a>
                                    </li>
                                <?php endif ?>

                                <?php if(isset($this->session->admin->testimoni) && $this->session->admin->testimoni ) : ?>
                                    <li>
                                        <a href="<?=base_url("admin/testimoni")?>">
                                            <i class="fas fa-comment"></i>Testimoni
                                        </a>
                                    </li>
                                <?php endif ?>

                                <?php if(!isset($this->session->admin->berita) || $this->session->admin->berita ) : ?>
                                    <li>
                                        <a href="<?=base_url("admin/berita")?>">
                                            <i class="fas fa-desktop"></i>Berita
                                        </a>
                                    </li>
                                <?php endif ?>
                                
                            </ul>
                        </nav>
                    </div>
                </aside>
                <!-- END MENU SIDEBAR-->