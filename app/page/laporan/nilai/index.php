<?php $tb = new Database(); ?>
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
                                <span>Daftar nilai siswa LPK Prima Kapuas</span>
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
                                                <th rowspan="2" style="text-align: center; vertical-align: middle; ">#</th>
                                                <th rowspan="2" style="text-align: center; vertical-align: middle; ">Nama</th>
                                                <th rowspan="2" style="text-align: center; vertical-align: middle; ">JK</th>
                                                <th rowspan="2" style="text-align: center; vertical-align: middle; ">Kelas</th>
                                                <th rowspan="2" style="text-align: center; vertical-align: middle; ">Status</th>
                                                <th rowspan="2" style="text-align: center; vertical-align: middle; ">Sistem Operasi</th>
                                                <th colspan="3" class="text-center">Microsoft Office</th>
                                                <th rowspan="2" style="text-align: center; vertical-align: middle; ">Hasil</th>
                                                <th rowspan="2" style="text-align: center; vertical-align: middle; ">No. Telp</th>
                                                <th rowspan="2" style="text-align: center; vertical-align: middle; ">Alamat</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th class="text-center">Ms. Word</th>
                                                <th class="text-center">Ms. Excel</th>
                                                <th class="text-center">Ms. Powerpoint</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php $sql = "SELECT * FROM siswa JOIN nilai ON siswa.id_siswa=nilai.id_siswa"; ?>
                                            <?php foreach($tb->getAllQueryDB($sql) as $item): ?>
                                            <tr>
                                                <th scope="row"><?= $no++; ?></th>
                                                <td><?= $item['nama']; ?></td>
                                                <td><?= $item['jenis_kelamin']; ?></td>
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
                                                <td><?= $item['pn1']; ?></td>
                                                <td><?= $item['pn2']; ?></td>
                                                <td><?= $item['pn3']; ?></td>
                                                <td><?= $item['pn4']; ?></td>
                                                <td><?= $item['hasil']; ?></td>
                                                <td><?= $item['no_telp']; ?></td>
                                                <td><?= $item['alamat']; ?></td>
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