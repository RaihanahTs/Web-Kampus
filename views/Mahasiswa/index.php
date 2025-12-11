 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Mahasiswa</li>
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
          <h3 class="card-title">Data Mahasiswa STT-NF</h3>

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
            <h1>Daftar Mahasiswa STT-NF</h1>
            <table class="table table-striped">
                <thead>
                    <tr class="text-center">
                        <th>No</th><th>NIM</th><th>Nama</th><th>Gender</th>
                        <th>Tempat, Tanggal lahir</th>
                        <th>IPK</th><th>Kode Prodi</th><th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $nomor=1;
                    foreach($list_mhs as $obj){
                ?>
                    <tr class="text-center">
                        <td><?=$nomor?></td>
                        <td><?=$obj->nim?></td>
                        <td><?=$obj->nama?></td>
                        <td><?=$obj->gender?></td>
                        <td><?=$obj->tmpt_lahir?>, <?=$obj->tgl_lahir?></td>
                        <td><?=$obj->ipk?></td>
                        <td><?=$obj->kode_prodi?></td>
                        <td>
                          <a href="mahasiswa/view?nim=<?=$obj->nim?>" role="button" class="btn btn-primary">View</div></a>
                          <a href="mahasiswa/edit?nim=<?=$obj->nim?>" role="button" class="btn btn-primary">Edit</a>
                          <a href="mahasiswa/delete?nim=<?=$obj->nim?>" onclick= "if(!confirm('Anda Yakin Hapus Mahasiswa NIM <?=$obj->nim?>')){return false}" role="button" class="btn btn-primary">Delete</a>
                        </td>
                    </tr>
                    <?php
                      $nomor++;
                    }
                    ?>
                </tbody>
            </table>
            <!-- <button type="button" class="btn btn-secondary m-3 ">Create</button> -->
            <a href="mahasiswa/create" role="button" class="btn btn-primary m-3">Create Mahasiswa</a>
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
  <!-- /.content-wrapper -->

