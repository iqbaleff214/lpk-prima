<?php $tb = new Table('siswa', 'id_siswa'); ?>
<div class="pcoded-content">
    
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Siswa</h5>
                                <span>Daftar siswa kelas Private LPK Prima Kapuas</span>
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
                                    <table class="table table-hover" id="table1">
                                        <thead>
                                            <tr class="text-center">
                                                <th>#</th>
                                                <th>Nama</th>
                                                <th>TTL</th>
                                                <th>JK</th>
                                                <th>Agama</th>
                                                <th>Orang Tua</th>
                                                <th>Pendidikan</th>
                                                <th>Pekerjaan</th>
                                                <th>Alamat</th>
                                                <th>No. Telp</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach($tb->getWhere('program', 'Private') as $item): ?>
                                            <tr>
                                                <th scope="row"><?= $no++; ?></th>
                                                <td><?= $item['nama']; ?></td>
                                                <td><?= $item['tempat_lahir']; ?>, <?= date('d/m/Y', strtotime($item['tanggal_lahir'])); ?></td>
                                                <td><?= $item['jenis_kelamin']; ?></td>
                                                <td><?= $item['agama']; ?></td>
                                                <td><?= $item['orang_tua']; ?></td>
                                                <td><?= $item['pendidikan_terakhir']; ?></td>
                                                <td><?= $item['pekerjaan']; ?></td>
                                                <td><?= $item['alamat']; ?></td>
                                                <td><?= $item['no_telp']; ?></td>
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