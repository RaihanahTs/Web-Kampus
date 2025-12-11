<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mahasiswa</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Biodata Mahasiswa</h3>

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
          <div class="row mb-2">
            <div class="col-sm-8">
              <table class="table table-striped">
                <tbody>
                  <tr><td>NIM</td><td><?=$mhs->nim?></td></tr>
                  <tr><td>Nama</td><td><?=$mhs->nama?></td></tr>
                  <tr><td>Gender</td><td><?=$mhs->gender?></td></tr>
                  <tr><td>Tempat, Tanggal Lahir</td><td><?=$mhs->tmpt_lahir?>, <?=$mhs->tgl_lahir?></td></tr>
                  <tr><td>Prodi</td><td><?=$mhs->kode_prodi?></td></tr>
                  <tr><td>IPK</td><td><?=$mhs->ipk?></td></tr>
                </tbody>
              </table>
            </div>
            <div class="col-sm-4">
              Foto
            </div>
          </div>
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