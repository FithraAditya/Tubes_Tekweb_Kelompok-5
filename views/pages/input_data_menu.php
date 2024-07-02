 <!-- Content Header (Page header) -->
 <section class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h3><i class="fas fa-plus-square"></i> Input Data Menu</h3>
             </div>
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="data_menu">Data Menu</a></li>
                     <li class="breadcrumb-item active">Input Data Menu</li>
                 </ol>
             </div>
         </div>
     </div><!-- /.container-fluid -->
 </section>

 <!-- Main content -->
 <section class="content">
     <!-- Default box -->

     <form action="data_menu" method="POST">
         <a href="data_menu" class="btn text-light" style="background-color: #042165;"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
         <div class="card mt-3">
             <div class="card-header" style="background-color: #042165;">
                 <h3 class="card-title text-white">Data Menu</h3>
             </div>
             <div class="card-body">
                 <div class="row">
                     <div class="form-group">
                         <label for="">ID</label>
                         <input type="text" name="id_menu" class="form-control" id="" placeholder="Masukkan ID" readonly>
                     </div>
                     <div class="form-group">
                         <label for="">Jenis Menu</label>
                         <select class="form-control" name="jenis_menu" id="" placeholder="Jenis Menu">
                             <option value="makanan">Makanan</option>
                             <option value="minuman">Minuman</option>
                         </select>
                     </div>
                     <div class="form-group">
                         <label for="">Nama Menu</label>
                         <input type="text" name="nama" class="form-control" id="" placeholder="Masukkan Nama Menu">
                     </div>
                     <div>
                         <label for="">Harga</label>
                         <input type="int" name="harga" class="form-control" id="" placeholder="Masukkan Harga">
                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-12 mb-3">
                 <button type="submit" name="simpan_data" class="btn btn-block btn-success float-right"><i class="fas fa-save"></i> Simpan Data</button>
             </div>
         </div>
         </div>
         </div>
     </form>
 </section>