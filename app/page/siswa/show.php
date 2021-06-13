<?php 

if (!isset($_GET['id'])) headTo('siswa');

$tb = new Table('siswa', 'id_siswa');
$item = $tb->get($_GET['id']);

$tb = new Table('nilai', 'id_nilai');
$items = $tb->getWhere('id_siswa', $_GET['id']);
?>
<div class="pcoded-content">
    
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-12">
                            <?php if (hasFlash()): ?>
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <?= getFlash(); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php endif; ?>
                            <div class="card">
                                <div class="card-header">
                                    <h5>Siswa</h5>
                                    <span>Detail siswa LPK Prima Kapuas</span>
                                    <a href="<?= linkTo('siswa'); ?>" class="btn btn-outline-primary btn-sm mt-2 px-4">Kembali</a>
                                    <a href="<?= linkWithId('siswa_edit', $item['id_siswa']); ?>" class="btn btn-primary btn-sm mt-2 px-4">Edit</a>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option" style="width: 30px;">
                                            <li><i class="fa fa open-card-option fa-wrench"></i></li>
                                            <li><i class="fa fa-window-maximize full-card"></i></li>
                                            <li><i class="fa minimize-card fa-minus"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block table-border-style" style="">
                                    <dl class="dl-horizontal row">
                                        <dt class="col-sm-4">Nama</dt>
                                        <dd class="col-sm-8"><?= $item['nama']; ?></dd>

                                        <dt class="col-sm-4">Tempat, Tanggal Lahir</dt>
                                        <dd class="col-sm-8"><?= $item['tempat_lahir']; ?>, <?= date('d/m/Y', strtotime($item['tanggal_lahir'])); ?></dd>

                                        <dt class="col-sm-4">Jenis Kelamin</dt>
                                        <dd class="col-sm-8"><?= $item['jenis_kelamin']=='L' ? 'Laki-laki' : 'Perempuan'; ?></dd>

                                        <dt class="col-sm-4">Agama</dt>
                                        <dd class="col-sm-8"><?= $item['agama']; ?></dd>

                                        <dt class="col-sm-4">Pendidikan Terakhir</dt>
                                        <dd class="col-sm-8"><?= $item['pendidikan_terakhir']; ?></dd>

                                        <dt class="col-sm-4">Nama Orang Tua</dt>
                                        <dd class="col-sm-8"><?= $item['orang_tua']; ?></dd>

                                        <dt class="col-sm-4">Pekerjaan</dt>
                                        <dd class="col-sm-8"><?= $item['pekerjaan']; ?></dd>

                                        <dt class="col-sm-4">No. Telepon</dt>
                                        <dd class="col-sm-8"><?= $item['no_telp']; ?></dd>

                                        <dt class="col-sm-4">Alamat</dt>
                                        <dd class="col-sm-8"><?= $item['alamat']; ?></dd>

                                        <dt class="col-sm-4">Program/Kelas</dt>
                                        <dd class="col-sm-8"><?= $item['program']; ?></dd>
                                        
                                        <dt class="col-sm-4">Status</dt>
                                        <dd class="col-sm-8">
                                            <?php if($item['status']==null): ?>
                                                Berhenti
                                            <?php elseif($item['status']==0): ?>
                                                Calon Siswa
                                            <?php elseif($item['status']==1): ?>
                                                Aktif
                                            <?php elseif($item['status']==2): ?>
                                                Lulus
                                            <?php endif; ?>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Evaluasi</h5>
                                    <span>Hasil evaluasi <?= $item['nama']; ?></span>
                                    <?php if ($item['status'] == 1): ?>
                                    <a href="#" data-toggle="modal" data-target="#tambahNilai" class="btn btn-primary btn-sm mt-2 px-4">Tambah Evaluasi</a>
                                    <?php endif; ?>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option" style="width: 30px;">
                                            <li><i class="fa fa open-card-option fa-wrench"></i></li>
                                            <li><i class="fa fa-window-maximize full-card"></i></li>
                                            <li><i class="fa minimize-card fa-minus"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block table-border-style" style="">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered" id="table3">
                                            <thead>
                                                <tr class="text-center">
                                                    <th rowspan="2" style="text-align: center; vertical-align: middle; ">#</th>
                                                    <th rowspan="2" style="text-align: center; vertical-align: middle; ">Tanggal</th>
                                                    <th rowspan="2" style="text-align: center; vertical-align: middle; ">Sistem Operasi</th>
                                                    <th colspan="3" class="text-center">Microsoft Office</th>
                                                    <th rowspan="2" style="text-align: center; vertical-align: middle; ">Status</th>
                                                    <th rowspan="2" class="text-center" style="width: 50px;text-align: center; vertical-align: middle;">Aksi</th>
                                                </tr>
                                                <tr class="text-center">
                                                    <th class="text-center">Ms. Word</th>
                                                    <th class="text-center">Ms. Excel</th>
                                                    <th class="text-center">Ms. Powerpoint</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php foreach($items as $item): ?>
                                                <tr>
                                                    <th scope="row"><?= $no++; ?></th>
                                                    <td><?= date('d/m/Y', strtotime($item['tanggal'])); ?></td>
                                                    <td><?= $item['pn1']; ?></td>
                                                    <td><?= $item['pn2']; ?></td>
                                                    <td><?= $item['pn3']; ?></td>
                                                    <td><?= $item['pn4']; ?></td>
                                                    <td><?= $item['hasil']; ?></td>
                                                    <td>
                                                        <form action="<?= actionWithId('nilai', 'delete', $item['id_siswa']); ?>" method="POST" class="d-inline">
                                                            <input type="hidden" name="id" value="<?= $item['id_nilai']; ?>">
                                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahNilai" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="tambahNilaiLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahNilaiLabel">Evaluasi a.n. <?= $item['nama']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= actionWithId('nilai', 'insert', $item['id_siswa']) ?>" class="form-material" method="POST">
      <div class="modal-body">
        <div class="form-group form-default mt-4">
            <input type="date" name="tanggal" class="form-control" value="<?php echo date('Y-m-d'); ?>" required>
            <span class="form-bar"></span>
            <label class="float-label">Tanggal Evaluasi</label>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group form-default mt-4">
                    <input type="text" name="pn1" class="form-control" required>
                    <span class="form-bar"></span>
                    <label class="float-label">Nilai Sistem Operasi</label>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group form-default mt-4">
                    <input type="text" name="pn2" class="form-control" required>
                    <span class="form-bar"></span>
                    <label class="float-label">Nilai Ms. Word</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group form-default mt-4">
                    <input type="text" name="pn3" class="form-control" required>
                    <span class="form-bar"></span>
                    <label class="float-label">Nilai Ms. Excel</label>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group form-default mt-4">
                    <input type="text" name="pn4" class="form-control" required>
                    <span class="form-bar"></span>
                    <label class="float-label">Nilai Ms. Powerpoint</label>
                </div>
            </div>
        </div>
        <div class="form-group form-default mt-4">
            <select name="hasil" class="form-control">
                <option value="Lulus">Lulus</option>
                <option value="Belum Lulus">Belum Lulus</option>
            </select>
            <span class="form-bar"></span>
            <label class="float-label">Hasil</label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>