 <!-- MAIN CONTENT-->
 <div class="main-content">
     <div class="section__content section__content--p30">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-12">
                     <div class="overview-wrap">
                         <h2 class="title-1">Data Testimoni</h2>

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
                     <form class="form-header form-header" action="" method="post">
                                    <input class="au-input au-input--w400" type="text" placeholder="Cari data ...">
                                    <button class="au-btn--submit" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                     </div>
                 </div>
                 <div class="table-data__tool-right"> 
                         <div class="dropDownSelect2"></div>
                     </div>
                 </div>
             </div>
             <div class="table-responsive table-responsive-data2">
                 <table class="table table-data2">
                     <thead>
                         <tr> 
                             <th>no</th>
                             <th>nama</th>
                             <th>pekerjaan</th>
                             <th>alamat</th>
                             <th>testimoni</th>
                             <th>bintang</th>
                             <th>status</th>
                             <th>aksi</th>
                         </tr>
                     </thead>
                     <tbody>
                     <?php $counter=1; foreach ($dataTestimoni as $key => $testi) :?>

                         <tr class="tr-shadow"> 
                             <td><?= $counter++ ?></td>
                             <td>
                                 <span><?= $testi->nama_testi ?></span>
                             </td>
                             <td><?= $testi->pekerjaan_testi ?></td>
                             <td><?= $testi->alamat_testi ?></td>
                             <td><?= substr($testi->pesan_testi,0,20)."..." ?></td>
                             <td><?= $testi->bintang ?></td>
                             <td>
                                 <span class="status--process"><?= $testi->tampilkan? "Tampil":"Belum Tampil" ?></span>
                             </td>
                             <td>
                                 <div class="table-data-feature d-flex justify-content-start">
                                    <?php if(!$testi->tampilkan) : ?>
                                        <form action="<?= base_url("admin/testimoni/tampilkan") ?>" method="post">
                                            <input type="hidden" name="id_testi" value="<?= $testi->id_testi ?>">
                                            <button type="submit" class="btn-primary p-1 rounded mr-1"  data-toggle="tooltip" data-placement="top" title="View">
                                            <i class="zmdi zmdi-eye"></i>Tampilkan
                                            </button>
                                        </form>
                                    <?php endif ?>
                                     
                                        
                                    <a href="<?= base_url("admin/testimoni/delete?id_testi=$testi->id_testi") ?>"><button class="item btn-danger text-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                         <i class="zmdi zmdi-delete"></i>
                                     </button></a>
                                       
                                 </div>
                             </td>
                         </tr>

                         <?php endforeach?>

                          
                     </tbody>
                 </table>

                    <?php if($counter==1):?>
                        <h3 class="text-center">Belum ada testimoni dari pengunjung!</h3>
                    <?php endif ?>

             </div>
             <!-- END DATA TABLE -->
         </div>
     </div>
 </div>
 </div>
 </div>
 <!-- END MAIN CONTENT-->
 <!-- END PAGE CONTAINER-->
 </div>

 </div>