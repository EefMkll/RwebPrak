<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Pasien</h1>
          </div>
            <?php echo $this->session->flashdata('pesan') ?>
          <table class="table table-hover table-striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>No Telepon</th>
                </tr>               
            </thead>
            <tbody>
                <?php 
                    $no = 1;
                    foreach($pasien as $ps) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $ps->nama ?></td>
                            <td><?php echo $ps->nik ?></td>
                            <td><?php echo $ps->alamat ?></td>
                            <td><?php echo $ps->jenis_kelamin ?></td>
                            <td><?php echo $ps->no_telepon ?></td>
                        </tr>
                    <?php endforeach; ?>
            </tbody>
          </table>
        </section>
</div>