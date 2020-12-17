<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Form Input Data Akun Admin</h2>

                    </div>

                </div>
            </div>
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-3">
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body card-block">
                        <form action="<?php echo site_url('spradm_sarugo/add'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Nama</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input required type="text" id="nama_admin" name="nama_admin" class="form-control">
                                    <small class="form-text text-muted">Masukan Nama Admin</small>
                                    <span class="text-danger"><?php echo form_error('nama_admin') ?></span>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">NIP</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="number" min="1" id="nip_admin" name="nip_admin" class="form-control">
                                    <small class="form-text text-muted">Masukan NIP Admin</small>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Telepon</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input required type="number" min="1000000" id="telp_admin" name="telp_admin" class="form-control">
                                    <small class="form-text text-muted">Masukan Telepon Admin</small>
                                    <span class="text-danger"><?php echo form_error('telp_admin') ?></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Email</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input required type="email" id="email_admin" name="email_admin" class="form-control">
                                    <small class="form-text text-muted">Masukan Email Admin</small>
                                    <span class="text-danger"><?php echo form_error('email_admin') ?></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Username</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input required type="text" id="username_admin" name="username_admin" class="form-control">
                                    <small class="form-text text-muted">Masukan Username Admin</small>
                                    <span class="text-danger"><?php echo form_error('username_admin') ?></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Password</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input required type="password" id="pas_admin" name="password_admin" class="form-control">
                                    <small class="form-text text-muted">Masukan Password Admin</small>
                                    <span class="text-danger"><?php echo form_error('password_admin') ?></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Konfirmasi Password</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="password" id="konfpass_admin" name="konfpass_admin" class="form-control">
                                    <small required class="form-text text-muted">Masukan Password Admin</small>
                                    <span class="text-danger"><?php echo form_error('konfpass_admin') ?></span>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class="d-block mb-0 form-control-label">Hak Akses </label>
                                </div>
                                <div class="col-12 col-md-9">
                                        
                                      <div class="row ">
                                            <div class="col-sm">
                                                <input class="access" name="hal_statis" id="hal_statis" type="checkbox" autocomplete="off"> <label for="hal_statis">Halaman Statis</label> <br>
                                                <input class="access" name="menu" id="menu" type="checkbox"> <label for="menu">Menu</label><br>
                                                <input class="access" name="sub_menu" id="sub_menu" type="checkbox" autocomplete="off"> <label for="sub_menu">Sub Menu</label><br>
                                                <input class="access" name="event" id="event" type="checkbox" autocomplete="off"> <label for="event">Event</label><br>
                                                <input class="access" name="banner"  id="banner" type="checkbox" autocomplete="off"> <label for="banner">Banner-Slider</label><br>
                                            </div>
                                            <div class="col-sm">
                                                <input class="access" name="wisata" id="wisata" type="checkbox" autocomplete="off"> <label for="wisata">Wisata</label><br>
                                                <input class="access" name="produk" id="produk" type="checkbox" autocomplete="off"> <label for="produk">Produk</label><br>
                                                <input class="access" name="paket_wisata" id="paket_wisata" type="checkbox" autocomplete="off"> <label for="paket_wisata">Paket Wisata</label><br>
                                                <input class="access" name="testimoni" id="testimoni" type="checkbox" autocomplete="off"> <label for="testimoni">Testimoni</label><br>
                                                <input class="access" name="berita" id="berita" type="checkbox" autocomplete="off"> <label for="berita">Berita</label><br>
                                            </div>
                                          <div class="col-sm">
                                                <input name="all" id="all" type="checkbox"> <label for="all">Semua</label><br>
                                            </div>
                                    </div>

                                   <!--  <div required class=" btn-group-toggle row" data-toggle="buttons">
                            <label class="  rounded access btn border   btn-outline-success  ">
                                <input  name="hal_statis"  id="hal_statis" type="checkbox" autocomplete="off"> Halaman Statis
                            </label>
                            <label class=" rounded access btn border   btn-outline-success">
                                <input name="menu"  id="menu"  type="checkbox"  > Menu
                            </label>
                            <label class=" rounded access btn border   bold btn-outline-success">
                                <input name="sub_menu"  id="sub_menu"  type="checkbox" autocomplete="off"> Sub Menu
                            </label>
                            <label class=" rounded access btn border    bold btn-outline-success">
                                <input name="event"  id="event"  type="checkbox" autocomplete="off"> Event
                            </label>
                            <label class=" rounded access btn border    bold btn-outline-success">
                                <input name="banner"  id="banner"  type="checkbox" autocomplete="off"> Banner/Slider
                            </label>
                            <label class=" rounded access btn border    bold btn-outline-success">
                                <input name="wisata"  id="wisata"  type="checkbox" autocomplete="off"> Wisata
                            </label>
                            <label class=" rounded access btn border    bold btn-outline-success">
                                <input name="produk"  id="produk"  type="checkbox" autocomplete="off"> Produk
                            </label>
                            <label class=" rounded access btn border    bold btn-outline-success">
                                <input name="paket_wisata"  id="paket_wisata"  type="checkbox" autocomplete="off"> Paket Wisata
                            </label>
                            <label class=" rounded access btn border    bold btn-outline-success">
                                <input name="testimoni"  id="testimoni"  type="checkbox" autocomplete="off"> Testimoni
                            </label>
                            <label class=" rounded access btn border    bold btn-outline-success">
                                <input name="berita"  id="berita"  type="checkbox" autocomplete="off"> Berita
                            </label>
                            <label class="all   rounded btn border    bold btn-outline-success">
                                <input   name="all"    type="checkbox"  > All
                            </label>
                        </div>   -->

                                </div>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

            <script>
                const access = document.querySelectorAll(".access")
                const all = document.querySelector("#all")

                all.addEventListener("click", function() {
                    // console.log("has check : ",all.children[0].hasAttribute("checked"))
                    if (!all.hasAttribute("checked")) {
                        access.forEach(element => {
                            // tambahkan atribute checked 
                            var checked = document.createAttribute("checked")
                            element.setAttributeNode(checked)


                        });
                        var checkd = document.createAttribute("checked")
                        all.setAttributeNode(checkd)


                    } else {
                        access.forEach(element => {
                            // remvoe atribute checked 
                            console.log("from uncheck")
                            element.removeAttribute("checked")


                        });

                        all.removeAttribute("checked");


                    }
                });

                // console.log(data.parentNode.className +=" active")
            </script>