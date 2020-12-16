                   
                   <div class="row" style="margin-right: 0px; margin-left: 0px;">
                   <div class="col-md-3"></div>
                        <div class="col-md-8">
                            <div class="copyright"style="padding-bottom: 10px;padding-top: 10px;">
                            <p>©2020. <b>SARUGO</b> by <img src="https://limapuluhkotakab.go.id/assets/images/logokominfo.png" style="width: 25px; margin-bottom: 1px"> <a href="https://kominfo.limapuluhkotakab.go.id/"> Diskominfo Kabupaten Lima Puluh Kota</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PAGE CONTAINER-->



                </div>

                <!-- Jquery JS-->
                <script src="<?= base_url() ?>assets/vendor/jquery-3.2.1.min.js"></script>
                <!-- Bootstrap JS-->
                <script src="<?= base_url() ?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
                <script src="<?= base_url() ?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
                <!-- Vendor JS       -->
                <script src="<?= base_url() ?>assets/vendor/slick/slick.min.js">
                </script>
                <script src="<?= base_url() ?>assets/vendor/wow/wow.min.js"></script>
                <script src="<?= base_url() ?>assets/vendor/animsition/animsition.min.js"></script>
                <script src="<?= base_url() ?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
                </script>
                <script src="<?= base_url() ?>assets/vendor/counter-up/jquery.waypoints.min.js"></script>
                <script src="<?= base_url() ?>assets/vendor/counter-up/jquery.counterup.min.js">
                </script>
                <script src="<?= base_url() ?>assets/vendor/circle-progress/circle-progress.min.js"></script>
                <script src="<?= base_url() ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
                <script src="<?= base_url() ?>assets/vendor/chartjs/Chart.bundle.min.js"></script>
                <script src="<?= base_url() ?>assets/vendor/select2/select2.min.js">
                </script>
                <script src="<?= base_url() ?>assets/vendor/vector-map/jquery.vmap.js"></script>
                <script src="<?= base_url() ?>assets/vendor/vector-map/jquery.vmap.min.js"></script>
                <script src="<?= base_url() ?>assets/vendor/vector-map/jquery.vmap.sampledata.js"></script>
                <script src="<?= base_url() ?>assets/vendor/vector-map/jquery.vmap.world.js"></script>
                
               <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
                <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

                

                <!-- Main JS-->
                <script src="<?= base_url() ?>assets/js/main.js"></script>

                <script>
                    $(document).ready(function(){ 
                    $('#summernote').summernote();
                    $('.summernote').summernote();
                     
                });


                $('#summernote').summernote({
                    placeholder: 'Silahkan ketik disini',
                    tabsize: 2,
                    height: 120,
                    toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                    ]
                });
                $('.summernote').summernote({
                    placeholder: 'Silahkan ketik disini',
                    tabsize: 2,
                    height: 120,
                    toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                    ]
                });
                
                
                </script>




</body>

</html>
<!-- end document-->