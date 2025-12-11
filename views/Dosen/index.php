<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Data Dosen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Dosen</li>
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
          <h3 class="card-title">Data Dosen STT-NF</h3>

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
            <h1>Daftar Dosen STT-NF</h1>
            <table class="table table-striped">
                <thead>
                    <tr class="text-center">
                        <th>No</th><th>NIDN</th><th>Nama</th><th>Gender</th><th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th><th>Pendidikan Akhir</th><th>Kode Prodi</th><th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $nomor=1;
                    foreach($list_dsn as $obj){
                ?>
                    <tr class="text-center">
                        <td><?=$nomor?></td>
                        <td><?=$obj->nidn?></td>
                        <td><?=$obj->nama?></td>
                        <td><?=$obj->gender?></td>
                        <td><?=$obj->tmpt_lahir?></td>
                        <td><?=$obj->tgl_lahir?></td>
                        <td><?=$obj->pendidikan_akhir?></td>
                        <td><?=$obj->kode_prodi?></td>
                        <td>
                          <a href="dosen/view?nidn=<?=$obj->nidn?>" role="button" class="btn btn-primary">View</div></a>
                          <a href="dosen/edit?nidn=<?=$obj->nidn?>" role="button" class="btn btn-primary">Edit</a>
                          <a href="dosen/delete?nidn=<?=$obj->nidn?>" onclick= "if(!confirm('Anda Yakin Hapus Mahasiswa NIM <?=$obj->nidn?>')){return false}" role="button" class="btn btn-primary">Delete</a>
                        </td>
                    </tr>
                    <?php
                    $nomor++;
                    }
                    ?>
                </tbody>
            </table>
            <a href="<?php echo base_url('index.php/dosen/create')?>" role="button" class="btn btn-primary m-3">Create Dosen</a>
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
