 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-light-primary elevation-4">
     <!-- Brand Logo -->
     <a href="/home" class="brand-link">
         <img src="<?= base_url('assets/'); ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">Aplikasi Surat PT MSO</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="<?= base_url('assets/'); ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">Alexander Pierce</a>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                 <li class="nav-item">
                     <a href="/home" class="nav-link <?php if ($title == "Dashboard") {
                                                            echo 'active';
                                                        } ?>">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Dashboard
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="pages/widgets.html" class="nav-link">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Widgets
                             <span class="right badge badge-danger">New</span>
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-chart-pie"></i>
                         <p>
                             Kelola Data
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="pages/charts/chartjs.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Data User</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="pages/charts/flot.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Data Perusahaan</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="pages/charts/inline.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Data Produk</p>
                             </a>
                         </li>

                     </ul>
                 </li>

                 <li class="nav-header">LABELS</li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon far fa-circle text-danger"></i>
                         <p class="text">Important</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon far fa-circle text-warning"></i>
                         <p>Warning</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon far fa-circle text-info"></i>
                         <p>Informational</p>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>