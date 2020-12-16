<div class="main-content">
     <div class="section__content section__content--p30">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-12">
                     <div class="overview-wrap">
                         <h2 class="title-1">Update Data Akun Admin</h2>

                     </div>

                 </div>
             </div>
             <div class="row m-t-25">
                 <div class="col-sm-6 col-lg-3">
                 </div>
             </div>
 
<div class="col-lg-12">
    <div class="card">
        <!--<div class="card-header">
            <strong>Basic Form</strong> Elements
        </div>-->
        <div class="card-body card-block">
            <form action="akun_update" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">NIP</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="nip_admin" name="nip_admin" class="form-control" value="<?php echo $akun_model->nip_admin; ?>"">
                        <small class="form-text text-muted">Masukan NIP Admin</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Nama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="nama_admin" name="nama_admin" class="form-control" value="<?php echo $akun_model->nama_admin; ?>">
                        <small class="form-text text-muted">Masukan Nama Admin</small>
                    </div>
                </div>
                
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Telepon</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="telp_admin" name="telp_admin" class="form-control" value="<?php echo $akun_model->telp_admin; ?>"">
                        <small class="form-text text-muted">Masukan Telepon Admin</small>
                    </div>
                </div>
                 <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Email</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="email" id="email_admin" name="email_admin" class="form-control" value="<?php echo $akun_model->email_admin; ?>">
                        <small class="form-text text-muted">Masukan Email Admin</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Username</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="username_admin" name="username_admin" class="form-control" value="<?php echo $akun_model->username_admin; ?>">
                        <small class="form-text text-muted">Masukan Username Admin</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Password</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="password" id="password_admin" name="password_admin" class="form-control" value="<?php echo $akun_model->password_admin; ?>">
                        <small class="form-text text-muted">Masukan Password Admin</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Konfirmasi Password</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="password" id="judul_hlmstat" name="judul_hlmstat" class="form-control" value="<?php echo $akun_model->konfpass_admin; ?>">
                        <small class="form-text text-muted">Masukan Password Admin</small>
                    </div>
                </div>
                
                <div class="card-footer">
            <button type="submit" value="simpan" class="btn btn-primary btn-sm" name="btnSubmit">
                <i class="fa fa-dot-circle-o"></i> Simpan Perubahan
            </button>
            <button type="reset" value="batal" class="btn btn-danger btn-sm" onclick="javascript:history.go(-1);">
                <i class="fa fa-ban"></i> Batal
            </button>
        </div>
            </form>
            
        </div>
        
    </div>
    
</div>