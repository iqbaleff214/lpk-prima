
                <div class="pcoded-content">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">LPK Prima Kapuas</h5>
                                        <p class="m-b-0">Halaman Beranda</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $siswa = new Table('siswa', 'id_siswa'); ?>
                    
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <?php if (hasFlash()): ?>
                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                        <?= getFlash(); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php endif; ?>
                                    <div class="row">

                                        <?php $calon = $siswa->countWhere('status', 0); ?>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="card">
                                                <div class="card-block">
                                                    <div class="row align-items-center">
                                                        <div class="col-8">
                                                            <h4 class="text-c-blue"><?= $calon; ?></h4>
                                                            <h6 class="text-muted m-b-0">orang</h6>
                                                        </div>
                                                        <div class="col-4 text-right">
                                                            <i class="fa fa-bar-chart f-28"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-c-blue">
                                                    <div class="row align-items-center">
                                                        <div class="col-9">
                                                            <p class="text-white m-b-0">Calon Siswa Baru</p>
                                                        </div>
                                                        <div class="col-3 text-right">
                                                            <!-- <i class="fa fa-line-chart text-white f-16"></i> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php $aktif = $siswa->countWhere('status', 1); ?>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="card">
                                                <div class="card-block">
                                                    <div class="row align-items-center">
                                                        <div class="col-8">
                                                            <h4 class="text-c-purple"><?= $aktif; ?></h4>
                                                            <h6 class="text-muted m-b-0">orang</h6>
                                                        </div>
                                                        <div class="col-4 text-right">
                                                            <i class="fa fa-bar-chart f-28"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-c-purple">
                                                    <div class="row align-items-center">
                                                        <div class="col-9">
                                                            <p class="text-white m-b-0">Siswa Aktif</p>
                                                        </div>
                                                        <div class="col-3 text-right">
                                                            <!-- <i class="fa fa-line-chart text-white f-16"></i> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php $lulus = $siswa->countWhere('status', 2); ?>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="card">
                                                <div class="card-block">
                                                    <div class="row align-items-center">
                                                        <div class="col-8">
                                                            <h4 class="text-c-green"><?= $lulus; ?></h4>
                                                            <h6 class="text-muted m-b-0">orang</h6>
                                                        </div>
                                                        <div class="col-4 text-right">
                                                            <i class="fa fa-bar-chart f-28"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-c-green">
                                                    <div class="row align-items-center">
                                                        <div class="col-9">
                                                            <p class="text-white m-b-0">Alumnus</p>
                                                        </div>
                                                        <div class="col-3 text-right">
                                                            <!-- <i class="fa fa-line-chart text-white f-16"></i> -->
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
                </div>