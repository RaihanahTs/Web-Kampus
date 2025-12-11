<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Dosen</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Biodata Dosen</h3>

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
                  <tr><td>NIDN</td><td><?=$dosen->nidn?></td></tr>
                  <tr><td>Nama</td><td><?=$dosen->nama?></td></tr>
                  <tr><td>Gender</td><td><?=$dosen->gender?></td></tr>
                  <tr><td>Tempat, Tanggal Lahir</td><td><?=$dosen->tmpt_lahir?>, <?=$dosen->tgl_lahir?></td></tr>
                  <tr><td>Pendidikan Terakhir</td><td><?=$dosen->pendidikan_akhir?></td></tr>
                  <tr><td>Kode Prodi</td><td><?=$dosen->kode_prodi?></td></tr>
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