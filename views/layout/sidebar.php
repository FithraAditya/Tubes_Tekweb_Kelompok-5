 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #A6ABC8;">
   <a href="<?= $base_url; ?>dashboard" class="brand-link">
     <img src="<?= $base_url; ?>dist/img/1633914908.64566163901c9d9ff.png" alt="Logo" class="brand-image">
     <span class="brand-text font-weight-light" style="color: black;">O'Teras Cafe</span>
   </a>
   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="<?= $base_url; ?>dist/img/0.png" alt="User Image">
       </div>
       <div class="info">
         <a href="<?= $base_url; ?>dashboard" class="d-block" style="color: black;"><?= $_SESSION['nama']; ?></a>
       </div>
     </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
         <li class="nav-item has-treeview">
           <a href="<?= $base_url; ?>dashboard" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt" style="color: black;"></i>
             <p style="color: black;">
               Dashboard
             </p>
           </a>

         </li>

         <li class="nav-item has-treeview">
           <a href="data_menu" class="nav-link">
             <i class="nav-icon fas fa-bread-slice" style="color: black;"></i>
             <p style="color: black;">
               Data Menu
             </p>
           </a>
         </li>

         <li class="nav-item has-treeview">
           <a href="<?= $base_url; ?>data_transaksi" class="nav-link">
             <i class="nav-icon fas fa-comment-dollar" style="color: black;"></i>
             <p style="color: black;">
               Data Transaksi
             </p>
           </a>
         </li>




       </ul>



     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>