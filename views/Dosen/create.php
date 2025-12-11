<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Data Dosen</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Dosen</h3>

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
            <?php echo form_open('dosen/save')?>
            <div class="form-group row">
                <label for="nidn" class="col-4 col-form-label">NIDN</label> 
                <div class="col-8">
                <input id="nidn" name="nidn" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="P"> 
                    <label for="gender_0" class="custom-control-label">Perempuan</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="L"> 
                    <label for="gender_1" class="custom-control-label">Laki-laki</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="tmpt_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
                <div class="col-8">
                <input id="tmpt_lahir" name="tmpt_lahir" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tggl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
                <div class="col-8">
                <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="pendidikan_akhir" class="col-4 col-form-label">Pendidikan Akhir</label> 
                <div class="col-8">
                <input id="pendidikan_akhir" name="pendidikan_akhir" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <label for="kode_prodi" class="col-4 col-form-label">Kode Prodi</label> 
                <div class="col-8">
                <input id="kode_prodi" name="kode_prodi" type="text" class="form-control">
                </div>
            </div> 
            
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <?php echo form_close()?> 
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