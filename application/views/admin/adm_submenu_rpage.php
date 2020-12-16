 <!-- MAIN CONTENT-->
 <div class="main-content">
     <div class="section__content section__content--p30">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-12">
                     <div class="overview-wrap">
                         <h2 class="title-1">Data Sub Menu</h2>

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
                                    <input class="au-input au-input--w400" type="text" placeholder="Cari SubMenu ...">
                                    <button class="au-btn--submit" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                     </div>
                 </div>
                 <div class="table-data__tool-right">
                    <a href="<?= base_url('admin/submenu/create')?>"> <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                         <i class="zmdi zmdi-plus"></i>Tambah SubMenu</button></a>
                     <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                        <!-- <select class="js-select2" name="type">
                             <option selected="selected">Export</option>
                             <option value="">Option 1</option>
                             <option value="">Option 2</option>
                         </select> -->
                         <div class="dropDownSelect2"></div>
                     </div>
                 </div>
             </div>
             <div class="table-responsive table-responsive-data2">
                 <table class="table table-data2">
                     <thead>
                         <tr> 
                             <th>no</th>
                             <th>sub menu</th>
                             <th>menu utama</th>
                             <th>Judul Halaman Statis</th>
                             <th>Status</th>
                             <th>aksi</th>
                         </tr>
                     </thead>
                     <tbody>
                          <?php $count=1; foreach ($dataSubMenu as $key => $subMenu) : ?>
                         <tr class="tr-shadow">
                              
                             <td><?=$count++?></td>
                             <td>
                                 <span><?=$subMenu->nama_sub_menu?></span>
                             </td>
                             <?php foreach ($dataMenu as $key => $menu): ?>
                                <?php if($menu->id == $subMenu->id_menu) : ?>
                                    <td class="link"><?=$menu->nama_menu?></td>
                                <?php endif ?>
                             <?php endforeach ?>
                             <td class="link"> <?=$subMenu->hal_statis?> </td>
                             
                             <td>
                                 <span class="status--<?=$subMenu->status_sub_menu>0?'process':'denied'?>"><?=$subMenu->status_sub_menu>0?"Aktif" : "Nonaktif"?></span>
                             </td>
                             <td>
                                 <div class="table-data-feature d-flex justify-content-start">
                                     <!--<button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                         <i class="zmdi zmdi-eye"></i>-->
                                     </button>
                                     <a href='<?= base_url("admin/submenu/update?id=$subMenu->id")?>' ><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                         <i class="zmdi zmdi-edit"></i>
                                     </button></a>
                                     <a href='<?= base_url("admin/submenu/delete?id=$subMenu->id")?>'>
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                     </a>
                                 </div>
                             </td>
                             <td></td>
                         </tr>

                         <?php endforeach ?>
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