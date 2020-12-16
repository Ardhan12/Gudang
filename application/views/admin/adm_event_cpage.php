<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Form Input Data Event</h2>
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
                        <form action="<?= base_url('admin/event/create'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Nama Event</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="judul_hlmstat" name="nama_event" class="form-control">
                                    <small class="form-text text-muted">Masukan Nama Event</small>
                                    <span class="text-danger"><?php echo form_error('nama_event') ?></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Tanggal Awal</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input onChange="lamaEvent()" class="form-control" type="date" name="tgl_awal" id="tgl_awal">
                                    <small class="form-text text-muted">Masukan Tanggal Awal</small>
                                    <span class="text-danger"><?php echo form_error('tgl_awal') ?></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Tanggal Akhir</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input onChange="lamaEvent()" class="form-control" type="date" name="tgl_akhir" id="tgl_akhir">
                                    <small class="form-text text-muted">Masukan Tanggal Akhir</small>
                                    <span class="text-danger"><?php echo form_error('tgl_akhir') ?></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Lama Event(hari)</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="hidden" name="lama_event" id="input_lama">
                                    <input disabled class="form-control" type="number" min="1" max="365" name="lama_event" id="lama_event">
                                    <small class="form-text text-muted">Lama Events (hari)</small>
                                    <span class="text-danger"><?php echo form_error('lama_event') ?></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label">Deskripsi Event</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea name="keterangan" id="summernote" rows="9" placeholder="Masukkan isi berita ..." class="form-control"></textarea>
                                    <span class="text-danger"><?php echo form_error('keterangan') ?></span>
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
            <script>
                const tgl_awal = document.querySelector("#tgl_awal")
                const tgl_akhir = document.querySelector("#tgl_akhir")
                const lama_event = document.querySelector("#lama_event")
                const input_lama = document.querySelector("#input_lama")

                function lamaEvent() {
                    console.log(tgl_awal.value, typeof tgl_awal.value)
                    console.log(tgl_akhir.value, typeof tgl_akhir.value)

                    var awal = new Date(tgl_awal.value);
                    var akhir = new Date(tgl_akhir.value);

                    lama_event.value = (akhir - awal) / 86400000;
                    lama_event.value++;
                    input_lama.value = lama_event.value;

                }
            </script>