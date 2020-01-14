
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card bg-transparent">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-1">
                                <img src="<?php echo base_url(); ?>assets/images/Produksi.png" alt="Produksi" height="65" width="65">
                            </div>
                            <div class="col-4">
                                <br>
                                <h3> Monitor Data Produksi</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Produksi Harian / Monitor Data Produksi -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <div class="col-12">
                                <h3><strong>Produksi Harian</strong></h3>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <h4 class="card-title" style="color: blue ; margin-left: 15px" ><strong id="realHarian">0KWh</strong></h4>
                                    <h6 class="card-subtitle" style="margin-left: 15px">Pada 12.00 PM</h6>
                                </div>
                                <div class="col-lg-2" style="text-align: left">
                                    <h4 class="card-title" style="color: blue ; margin-left: 15px"><strong id="TotalHarian">0KWh</strong></h4>
                                    <h6 class="card-subtitle" style="margin-left: 15px">Total Produksi    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- column -->
                            <div class="col-lg-12">
                                <div class="campaign" id="produksiHarian"></div>
                            </div>
                            <!-- column -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========================================================================================== -->
                                        <!-- Produksi Mingguan -->
        <!-- ========================================================================================== -->

         <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                         <div class="col-12">
                            <h3><strong>Produksi Mingguan</strong></h3>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <h4 class="card-title" style="color: blue; margin-left: 30px"><strong id="TotalMingguan">0KWh</strong></h4>
                                <h6 class="card-subtitle" style="margin-left: 30px">Total Produksi</h6>
                            </div>
                            <div class="col-lg-2" style="text-align: left">
                                <!-- <h4 class="card-title" style="color: blue"><strong>600KWh</strong></h4>
                                <h6 class="card-subtitle">Total Produksi    </h6>  -->
                            </div>
                        </div>
                        <!-- Bulanan -->
                        <div class="pt-3">
                            <div class="row">
                                <!-- column -->
                               <div class="col-md-12 col-lg-12">
                                  <div class="campaign" id="produksiMingguan"></div>
                                    <div class="row mb-0 mt-3 text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
          </div>
        <!-- ============================================================== -->
        <!-- END PRODUKSI MINGGUAN -->
        <!-- ============================================================== -->

        <!-- ========================================================================================== -->
                                                <!-- Produksi Bulanan -->
        <!-- ========================================================================================== -->

         <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                         <div class="col-12">
                            <h3><strong>Produksi Bulanan</strong></h3>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <h4 class="card-title" style="color: blue; margin-left: 30px"><strong id="TotalBulanan">0KWh</strong></h4>
                                <h6 class="card-subtitle" style="margin-left: 30px">Total Produksi</h6>
                            </div>
                            <div class="col-lg-2" style="text-align: left">
                                <!-- <h4 class="card-title" style="color: blue"><strong>600KWh</strong></h4>
                                <h6 class="card-subtitle">Total Produksi    </h6>  -->
                            </div>
                        </div>
                        <!-- Bulanan -->
                        <div class="pt-3">
                            <div class="row">
                                <!-- column -->
                               <div class="col-md-12 col-lg-12">
                                  <div class="campaign" style="position: relative; height:250px;" id="produksiBulanan"></div>
                                    <div class="row mb-0 mt-3 text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
          </div>
        <!-- ============================================================== -->
        <!-- END PRODUKSI BULANAN -->
        <!-- ============================================================== -->
<!-- ========================================================================================== -->
                                        <!-- Produksi Tahunan -->
<!-- ========================================================================================== -->

         <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                         <div class="col-12">
                            <h3><strong>Produksi Tahunan</strong></h3>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <h4 class="card-title" style="color: blue; margin-left: 30px"><strong id="TotalTahunan">600KWh</strong></h4>
                                <h6 class="card-subtitle" style="margin-left: 30px">Total Produksi</h6>
                            </div>
                        </div>
                        <!-- tahunan -->
                        <div class="pt-3">
                            <div class="row">
                                <!-- column -->
                               <div class="col-md-12 col-lg-12">
                                  <div class="campaign" style="position: relative; height:250px;" id="produksiTahunan"></div>
                                    <div class="row mb-0 mt-3 text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
          </div>
        <!-- ============================================================== -->
        <!-- END PRODUKSI TAHUNAN -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- Daya baterai, performa hari ini -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-sm-12 col-lg-4">
                <div class="card bg-white">
                <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <img src="<?php echo base_url(); ?>assets/images/dayabaterai.png" alt="performa hari ini" height="115" width="110">
                            </div>
                            <div class="col-6">
                                <br>
                                <h3>80%</h3>
                                <h6 class="card-title text-black">Daya Baterai</h6>
                                <button type="button" class="btn waves-effect waves-light btn-info">Lihat Lebih</button>
                            </div>
                        </div>
                        </div>
                </div>
            </div>
            <!-- column -->
            <div class="col-sm-12 col-lg-4">
                <div class="card bg-white">
                <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <img src="<?php echo base_url(); ?>assets/images/penghematan.png" alt="performa hari ini" height="115" width="110">
                            </div>
                            <div class="col-6">
                                <br>
                                <h3>Rp 134.000</h3>
                                <h6 class="card-title text-black">Penghematan Hari Ini</h6>
                                <button type="button" class="btn waves-effect waves-light btn-info">Lihat Lebih</button>
                            </div>
                        </div>
                        </div>
                </div>
            </div>
            <!-- column -->
            <div class="col-sm-12 col-lg-4">
                <div class="card bg-white">
                <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <img src="<?php echo base_url(); ?>assets/images/performa.png" alt="performa hari ini" height="115" width="110">
                            </div>
                            <div class="col-6">
                                <br>
                                <h3>80%</h3>
                                <h6 class="card-title text-black">Performa Hari Ini</h6>
                                <button type="button" class="btn waves-effect waves-light btn-info">Lihat Lebih</button>
                            </div>
                        </div>
                        </div>
                </div>
            </div>
        </div>
