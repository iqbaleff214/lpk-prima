<?php $tb = new Table('siswa', 'id_siswa'); ?>
<div class="pcoded-content">
    
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
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
                                <span>Daftar siswa LPK Prima Kapuas</span>
                                <a href="<?= linkTo('siswa_tambah'); ?>" class="btn btn-primary btn-sm mt-2 px-4">Tambah Siswa</a>
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
                                    <table class="table table-hover" id="table2">
                                        <thead>
                                            <tr class="text-center">
                                                <th>#</th>
                                                <th>Nama</th>
                                                <th>JK</th>
                                                <th>Alamat</th>
                                                <th>No. Telp</th>
                                                <th>Kelas</th>
                                                <th>Status</th>
                                                <th style="width: 150px;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach($tb->getAll() as $item): ?>
                                            <tr>
                                                <th scope="row"><?= $no++; ?></th>
                                                <td><?= $item['nama']; ?></td>
                                                <td><?= $item['jenis_kelamin']; ?></td>
                                                <td><?= $item['alamat']; ?></td>
                                                <td><?= $item['no_telp']; ?></td>
                                                <td><?= $item['program']; ?></td>
                                                <td>
                                                    <?php if($item['status']==null): ?>
                                                        <label class="label label-danger">Berhenti</label>
                                                    <?php elseif($item['status']==0): ?>
                                                        <label class="label label-inverse-primary">Calon</label>
                                                    <?php elseif($item['status']==1): ?>
                                                        <label class="label label-primary">Aktif</label>
                                                    <?php elseif($item['status']==2): ?>
                                                        <label class="label label-success">Lulus</label>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <a href="<?= linkWithId('siswa_detil', $item['id_siswa']); ?>" class="btn btn-primary btn-sm">Lihat</a>
                                                    <a href="<?= linkWithId('siswa_edit', $item['id_siswa']); ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="<?= actionTo('siswa', 'delete'); ?>" method="POST" class="d-inline">
                                                        <input type="hidden" name="id" value="<?= $item['id_siswa']; ?>">
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