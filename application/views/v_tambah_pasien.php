<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Input Data Pasien</h1>
          </div>

          <div class="card">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('c_tambah_pasien/tambah_pasien_aksi') ?>" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control">
                            <?php echo form_error('nama','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" name="nik" class="form-control">
                            <?php echo form_error('nik','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control">
                            <?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                    
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                    <option value="">--Pilih jenis kelamin--</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                            </select>
                            <?php echo form_error('jenis_kelamin','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>No Telepon</label>
                            <input type="text" name="no_telepon" class="form-control">
                            <?php echo form_error('no_telepon','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                        <button type="reset" class="btn btn-danger mt-4">Reset</button>

                    </div>
                </div>
                </form>
            </div>
          </div>

        </section>
</div>