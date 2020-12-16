<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Form Input Data Banner-Slider</h2>
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
                        <form action="<?php echo base_url('admin/banner/create'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Judul Banner</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="judul_banner" name="judul" class="form-control">
                                    <small class="form-text text-muted">Masukan judul banner</small>
                                    <span class="text-danger"><?php echo form_error('judul') ?></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" class=" form-control-label">Upload Gambar</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input required type="file" id="gbr_banner" name="gbr_banner" class="d-inline input_foto">
                                    <small class="form-text text-muted">File JPG/JPEG/PNG max file 2Mb</small>
                                    <!--<small style="color:red;font-weight:bold">ukuran 1045 x 613 px</small><br>-->
                                    <span class="text-danger"><?php echo form_error('gbr_banner') ?></span>
                                    <img width="100" id="preview_photo" src="" alt="No Image" class=" ">
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
        </div>
    </div>
</div>
<script>
    const input_foto = document.querySelector(".input_foto");
    const preview_photo = document.querySelector("#preview_photo")
    input_foto.addEventListener('change', () => {
        console.log(input_foto.value)
        preview_photo.src = input_foto.value
    })
</script>