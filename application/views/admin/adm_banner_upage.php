<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Update Data Banner-Slider</h2>
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
                        <form action="<?php echo base_url('admin/banner/update'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <input type="hidden" name="id_banner" value="<?= $banner->id_banner ?>">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Judul Banner</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input value="<?= $banner->judul ?>" type="text" id="judul" name="judul" class="form-control">
                                    <small class="form-text text-muted">Masukan judul banner</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label required for="file-input" class=" form-control-label">Upload Gambar</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input value="<?= base_url() . $banner->foto ?>" type="file" id="gbr_banner" name="gbr_banner" class="form-control-file">
                                    <small class="form-text text-muted">File JPG/JPEG/PNG max file 2Mb</small>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Simpan Perubahan
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Batal
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>