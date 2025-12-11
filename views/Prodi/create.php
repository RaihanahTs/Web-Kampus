<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Data Program Studi</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Program Studi</h3>

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
            <?php echo form_open('prodi/save')?>
            <form>
                <div class="form-group row">
                    <label for="kode" class="col-4 col-form-label">Kode</label> 
                    <div class="col-8">
                    <input id="kode" name="kode" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_prodi" class="col-4 col-form-label">Nama Prodi</label> 
                    <div class="col-8">
                    <input id="nama_prodi" name="nama_prodi" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kaprodi" class="col-4 col-form-label">Ketua Prodi</label> 
                    <div class="col-8">
                    <input id="kaprodi" name="kaprodi" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
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