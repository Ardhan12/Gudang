 <!-- MAIN CONTENT-->
 <div class="main-content">
     <div class="section__content section__content--p30">
         <div class="container-fluid">
             <div class="row">

                 <div class="col-md-12">
                     <div class="overview-wrap">
                         <h2 class="title-1">Data Akun Admin</h2>

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
                         <form class="form-header form-header" action="akun_cari" method="post">
                             <input class="au-input au-input--w400" type="text" placeholder="Cari data ...">
                             <button class="au-btn--submit" type="submit">
                                 <i class="zmdi zmdi-search"></i>
                             </button>
                         </form>
                     </div>
                 </div>
                 <div class="table-data__tool-right">
                     <a href="akun_create"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                             <i class="zmdi zmdi-plus"></i>tambah data</button></a>
                     <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                         <!-- <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>-->
                         <div class="dropDownSelect2"></div>
                     </div>
                 </div>
             </div>
             <div class="table-responsive table-responsive-data2">
                 <table class="table table-data2">
                     <thead>
                         <tr>
                          <!--   <th>
                                 <label class="au-checkbox">
                                     <input type="checkbox">
                                     <span class="au-checkmark"></span>
                                 </label>
                             </th>-->
                             <th>no</th>
                             <th>NIP</th>
                             <th>Nama</th>
                             <th>email</th>
                             <th>telepon</th>
                             <th>username</th>
                             <th>aksi</th>

                         </tr>
                     </thead>
                     <tbody>
                         <tr class="tr-shadow">

                             <?php
                             $no = 1;
                                foreach ($rows as $row) {
                                    
                                ?>
                         <tr>
                          <!--   <td>
                                 <label class="au-checkbox">
                                     <input type="checkbox">
                                     <span class="au-checkmark"></span>
                                 </label>
                             </td>-->
                             <td><?php echo $no; ?></td>
                             <td><?php echo $row->nip_admin; ?></td>
                             <td><?php echo $row->nama_admin; ?></td>
                             <td><?php echo $row->email_admin; ?></td>
                             <td><?php echo $row->telp_admin; ?></td>
                             <td><?php echo $row->username_admin ?></td>

                             <td>
                                 <div class="table-data-feature d-flex justify-content-start">
                                     <!--<button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                         <i class="zmdi zmdi-eye"></i>-->
                                     </button>
                                     <a href="akun_update/<?php echo $row->nip_admin; ?>"><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                             <i class="zmdi zmdi-edit"></i>
                                         </button></a>
                                     <a href="akun_delete/<?php echo $row->nip_admin; ?>"><button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                             <i class="zmdi zmdi-delete"></i>
                                         </button></a>
                                 </div>
                             </td>
                         </tr>
                     <?php
                            $no++;    }
                        ?>

                     </tbody>
                 </table>
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