<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Update Data Wisata</h2>
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
                        <form action="<?php echo base_url('admin/wisata/update'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <input type="hidden" name="id" value="<?= $dataWisata->id_wisata ?>">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Jenis Wisata</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input value="<?= $dataWisata->nama_wisata ?>" required placeholder="Wisata Alam" type="text" id="judul_banner" name="nama_wisata" class="form-control">
                                    <small class="form-text text-muted">Masukan jenis wisata , misal : "Wisata Alam"</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Menu</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static">Wisata</p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" class=" form-control-label">Upload Gambar</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input value="<?= base_url() . $dataWisata->gambar ?>" type="file" id="gbr_banner" name="gambar" class="form-control-file">
                                    <small class="form-text text-muted">File JPG/JPEG/PNG max file 2Mb</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label">Deskripsi</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea name="keterangan" id="summernote" rows="9" placeholder="Masukkan deskripsi ..." class="form-control">
                         <?= $dataWisata->keterangan ?>
                        </textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label">Lokasi</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input value="<?= $dataWisata->lokasi ?>" class="form-control" name="lokasi" type="text" id="mapsearch">
                                    <!-- <div class="form-control" id="map-canvas"></div> -->
                                    <small class="form-text text-muted">Masukkan alamat/lokasi</small>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Simpan Perubahan
                                </button>
                                <button onClick="window.history.back()" type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Batal
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tampilan untuk form data foto  -->
<div id="form-photo" class="d-none">
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12 underline text-center">
                        <h3>Form Tambah Foto Baru</h3>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body card-block">
                            <form action="<?php echo base_url('admin/wisata/addResource?type=photo'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Nama/Judul Foto</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input required placeholder="Wisata Alam" type="text" id="judul_banner" name="nama_resource" class="form-control">
                                        <small class="form-text text-muted">Masukan Nama/Judul Dari Foto , misal : "Kebun Jeruk"</small>
                                    </div>
                                </div>
                                <input type="hidden" name="id_wisata" value="<?= $dataWisata->id_wisata ?>">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">Upload Foto </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input required type="file" id="foto" name="gambar" class="form-control-file">
                                        <small class="form-text text-muted">File JPG/JPEG/PNG max file 2Mb</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Deskripsi</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea required name="keterangan" rows="9" placeholder="Masukkan deskripsi ..." class="form-control summernote"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Lokasi</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input class="form-control" name="lokasi" type="text" id="mapsearch">
                                        <!-- <div class="form-control" id="map-canvas"></div> -->
                                        <small class="form-text text-muted">Masukkan alamat/lokasi</small>
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
</div>
<!-- Akhir Tampilan untuk form data foto -->

<!-- Tampilan untuk form data dan video  -->
<div id="form-video" class="d-none">
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12 underline text-center">
                        <h3>Form Tambah Video Baru</h3>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body card-block">
                            <form action="<?php echo base_url('admin/wisata/addResource?type=video'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Nama/Judul Foto</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input required placeholder="Wisata Alam" type="text" id="judul_banner" name="nama_resource" class="form-control">
                                        <small class="form-text text-muted">Masukan Nama/Judul Dari Video , misal : "Kebun Jeruk"</small>
                                    </div>
                                </div>
                                <input type="hidden" name="id_wisata" value="<?= $dataWisata->id_wisata ?>">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">Upload Video </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input required type="file" id="foto" name="gambar" class="form-control-file">
                                        <small class="form-text text-muted">File MP4 max file </small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Deskripsi</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea required name="keterangan" id="isi_hlmstat" rows="9" placeholder="Masukkan deskripsi ..." class="form-control summernote"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Lokasi</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input class="form-control" name="lokasi" type="text" id="mapsearch">
                                        <!-- <div class="form-control" id="map-canvas"></div> -->
                                        <small class="form-text text-muted">Masukkan alamat/lokasi</small>
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
</div>
<!-- Akhir Tampilan untuk form data video  -->

<!-- tampilan untuk data foto dan video -->
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Data Foto Dan Video </h2>
                    </div>
                </div>
            </div>
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-3">
                </div>
            </div>
            <!-- DATA TABLE -->
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <div class="rs-select2--light rs-select2--md">
                    </div>
                </div>
                <div class="table-data__tool-right">
                    <a href="#form-photo">
                        <button onClick="showFormPhoto()" class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-image"></i>Tambah Foto </button>
                    </a>
                    <a href="#form-video">
                        <button onClick="showFormVideo()" class="au-btn au-btn-icon au-btn--blue au-btn--small">
                            <i class="zmdi zmdi-movie"></i>Tambah Video</button>
                    </a>
                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                    </div>
                </div>
            </div>
            <div class="bg-light table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>jenis wisata</th>
                            <th>Deskripsi</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter = 1;
                        foreach ($dataResource as $key => $resource) : ?>
                            <tr class="tr-shadow">
                                <td><?= $counter++ ?></td>
                                <td>
                                    <span><?= $resource->nama_resource ?></span>
                                </td>
                                <td class="link"><?= substr($resource->keterangan, 0, 150) . '.....' ?></td>
                                <td>
                                    <div class="table-data-feature">
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                            <i class="zmdi zmdi-eye"></i>
                                        </button>
                                        <!-- <a href="<?= base_url("admin/wisata/edit?id=$resource->id_wisata") ?>"><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                         <i class="zmdi zmdi-edit"></i>
                                     </button></a> -->
                                        <a href="<?= base_url("admin/wisata/deleteResource?id=$resource->id_resource&id_wisata=$resource->id_wisata") ?>">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <?php if ($counter == 1) : ?>
                    <div class="text-center">
                        <h1>Belum Ada Data Foto atau Video yang di inputkan.</h1>
                        <p class="text-danger">Silahkan Tambahkan Foto/Video!</p>
                    </div>
                <?php endif ?>
            </div>
            <!-- END DATA TABLE -->
        </div>
    </div>
</div>
<!-- akhir tampilan untuk data foto dan video -->
<script>
    const formPhoto = document.querySelector("#form-photo")
    const formVideo = document.querySelector("#form-video")
    const showFormPhoto = () => {
        formVideo.className = "d-none"
        formPhoto.className = "";
    }

    const showFormVideo = () => {
        formPhoto.className = "d-none"
        formVideo.className = ""
    }
</script>