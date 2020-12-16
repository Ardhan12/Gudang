<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Form Input Data Berita</h2>
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
                        <form action="<?= base_url('admin/berita/create'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <input type="hidden" value="<?= $this->session->admin->nama_admin ?>" name="admin">    
                        <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Judul Berita</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="judul_hlmstat" name="judul_berita" class="form-control">
                                    <small class="form-text text-muted">Masukan Judul Berita</small>
                                    <span class="text-danger"><?php echo form_error('judul_berita') ?></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label">Isi Berita</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea name="isi_berita" id="summernote" rows="9" placeholder="Masukkan isi berita ..." class="form-control"></textarea>
                                    <span class="text-danger"><?php echo form_error('isi_berita') ?></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" class=" form-control-label">Upload Gambar</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input required type="file" id="gbr_hlmstat" name="gambar" class="form-control-file">
                                    <small class="form-text text-muted">File JPG/JPEG/PNG max file 2Mb</small>
                                    <span class="text-danger"><?php echo form_error('gambar') ?></span>
                                </div>
                            </div>
                            <div class="d-none row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Tampilkan di Beranda?</label>
                                </div>
                                <div class="col col-md-9">
                                    <div class="form-check-inline form-check">
                                        <label for="inline-checkbox1" class="form-check-label ">
                                            <input type="checkbox" id="tampilkan_hlmstat" name="tampilkan_hlmstat" value="option1" class="form-check-input">Ya
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
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