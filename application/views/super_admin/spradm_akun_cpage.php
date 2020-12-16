<div class="main-content" style="background-color:#E4CEA3">
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