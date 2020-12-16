<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
                    <div >
                    <a  href="<?=base_url("admin/home")?>">
                            <img src="<?= base_url() ?>assets/images/GOODANG.png" alt="SARUGO" />
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
                                <?php if(isset($this->session->admin->wisata) && $this->session->admin->wisata ) : ?>
                                    <li>
                                        <a href="<?=base_url("admin/wisata")?>">
                                            <i class="fas fa-location-arrow"></i>Kategori
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
                            </ul>
                        </nav>
                    </div>
                </aside>
                <!-- END MENU SIDEBAR-->