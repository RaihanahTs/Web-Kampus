<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Data Program Studi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Program Studi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Program Studi STT-NF</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
           <h1>Daftar Program Studi STT-NF</h1>
           <table class="table table-striped">
               <thead>
                   <tr class="text-center">
                       <th>No</th>
                       <th>Kode</th>
                       <th>Nama Prodi</th>
                       <th>Ketua Prodi</th>
                       <th>Action</th>
                   </tr>
               </thead>
               <tbody>
                   <?php
                        $nomor = 1;
                        foreach($list_prodi as $obj){ 
                        
                   ?>
                    <tr class="text-center">
                        <td><?=$nomor?></td>
                        <td><?=$obj->kode?></td>
                        <td><?=$obj->nama?></td>
                        <td><?=$obj->kaprodi?></td>
                        <td>
                          <a href="prodi/view?kode=<?=$obj->kode?>"  role="button" class="btn btn-primary">View</div></a>
                          <a href="prodi/edit?kode=<?=$obj->kode?>"  role="button" class="btn btn-primary">Edit</a>
                          <a href="prodi/delete?kode=<?=$obj->kode?>" onclick= "if(!confirm('Anda Yakin Hapus Prodi Kode <?=$obj->kode?> ?')){return false}"  role="button" class="btn btn-primary">Delete</a>
                        </td>
                    </tr>
                   <?php
                        $nomor++;
                        }
                   ?>
               </tbody>
           </table>
           <a href="<?php echo base_url('index.php/prodi/create')?>" role="button" class="btn btn-primary m-3">Create Prodi</a>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
