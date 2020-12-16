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
                        <form action="<?= base_url('admin/event/update'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <input type="hidden" name="id_event" value="<?= $dataEvent->id_event ?>">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Nama Event</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input value="<?= $dataEvent->nama_event ?>" required type="text" id="judul_hlmstat" name="nama_event" class="form-control">
                                    <small class="form-text text-muted">Masukan Nama Event</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Tanggal Awal</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input value="<?= $dataEvent->tgl_awal ?>" required onChange="lamaEvent()" class="form-control" type="date" name="tgl_awal" id="tgl_awal">
                                    <small class="form-text text-muted">Masukan Tanggal Awal</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Tanggal Akhir</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input value="<?= $dataEvent->tgl_akhir ?>" required onChange="lamaEvent()" class="form-control" type="date" name="tgl_akhir" id="tgl_akhir">
                                    <small class="form-text text-muted">Masukan Tanggal Akhir</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Lama Event(hari)</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input value="<?= $dataEvent->lama_event ?>" type="hidden" name="lama_event" id="input_lama">
                                    <input value="<?= $dataEvent->lama_event ?>" disabled class="form-control" type="number" min="1" max="365" name="lama_event" id="lama_event">
                                    <small class="form-text text-muted">Lama Events (hari)</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label">Deskripsi Event</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea required name="keterangan" id="summernote" rows="9" placeholder="Masukkan isi berita ..." class="form-control"><?= $dataEvent->keterangan ?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" class=" form-control-label">Upload Gambar</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="gbr_hlmstat" name="gambar" class="form-control-file">
                                    <small class="form-text text-muted">File JPG/JPEG/PNG max file 2Mb</small>
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
                                    <i class="fa fa-dot-circle-o"></i> Simpan Perubahan
                                </button>
                                <button onClick="window.history.back()" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Batal
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