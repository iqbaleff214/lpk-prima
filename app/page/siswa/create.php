<div class="pcoded-content">
    
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            
                            <form action="<?= actionTo('siswa', 'insert') ?>" class="form-material" method="POST">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Siswa</h5>
                                        <span>Menambah siswa baru LPK Prima Kapuas</span>
                                        <a href="<?= linkTo('siswa'); ?>" class="btn btn-outline-primary btn-sm mt-2 px-4">Kembali</a>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option" style="width: 30px;">
                                                <li><i class="fa fa open-card-option fa-wrench"></i></li>
                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                <li><i class="fa minimize-card fa-minus"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block table-border-style" style="">
                                        <div class="row mt-2">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group form-default">
                                                    <input type="text" name="nama" class="form-control" required>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Nama Lengkap</label>
                                                </div>
                                                <div class="form-group form-default mt-4">
                                                    <input type="text" name="tempat_lahir" class="form-control" required>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Tempat Lahir</label>
                                                </div>
                                                <div class="form-group form-default mt-4">
                                                    <input type="date" name="tanggal_lahir" class="form-control" required>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Tanggal Lahir</label>
                                                </div>
                                                <div class="form-group form-default mt-4">
                                                    <select name="jenis_kelamin" class="form-control">
                                                        <option value="L">Laki-laki</option>
                                                        <option value="P">Perempuan</option>
                                                    </select>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Jenis Kelamin</label>
                                                </div>
                                                <div class="form-group form-default mt-4">
                                                    <select name="agama" class="form-control">
                                                        <?php $agama = ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Buddha', 'Khonghucu']; ?>
                                                        <?php foreach($agama as $ag): ?>
                                                        <option value="<?= $ag; ?>"><?= $ag; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Agama</label>
                                                </div>
                                                <div class="form-group form-default mt-4">
                                                    <select name="pendidikan_terakhir" class="form-control">
                                                        <?php $pend = ['Tidak Sekolah', 'SD/Sederajat', 'SMP/Sederajat', 'SMP/Sederajat', 'SMA/Sederajat', 'D1/D2/D3/Diploma', 'S1/Sarjana', 'S2/Magister', 'S3/Doktor']; ?>
                                                        <?php foreach($pend as $pd): ?>
                                                        <option value="<?= $pd; ?>"><?= $pd; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Pendidikan Terakhir</label>
                                                </div>
                                                <div class="form-group form-default mt-4">
                                                    <input type="text" name="pekerjaan" class="form-control" required>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Pekerjaan</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group form-default">
                                                    <input type="text" name="orang_tua" class="form-control" required>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Nama Orang Tua</label>
                                                </div>
                                                <div class="form-group form-default mt-4">
                                                    <select name="program" class="form-control">
                                                        <option value="Reguler">Reguler</option>
                                                        <option value="Private">Private</option>
                                                    </select>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Program/Kelas</label>
                                                </div>
                                                <div class="form-group form-default mt-4">
                                                    <select name="status" class="form-control">
                                                        <?php $status = [0 => 'Calon', 1 => 'Aktif', 2 => 'Lulus', null => 'Berhenti']; ?>
                                                        <?php foreach($status as $key => $val): ?>
                                                        <option value="<?= $key; ?>"><?= $val; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Status</label>
                                                </div>
                                                <div class="form-group form-default mt-4">
                                                    <input type="text" name="no_telp" class="form-control" required>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">No. Telepon</label>
                                                </div>
                                                <div class="form-group form-default mt-4">
                                                    <textarea class="form-control" name="alamat" rows="5" required=""></textarea>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Alamat</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary mt-2 px-4">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>