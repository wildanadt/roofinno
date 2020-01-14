
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
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-body">
                      <div>
                          <div class="col-12">
                              <h4 class="card-title"><Strong>Produksi Harian</Strong></h4>
                              <hr>
                          </div>
                          <div class="row">
                              <div class="col-lg-2">
                                  <h4 class="card-title" style="color: blue ; margin-left: 15px" ><strong>2KWh</strong></h4>
                                  <h6 class="card-subtitle" style="margin-left: 15px">Pada 12.00 PM</h6>
                              </div>
                              <div class="col-lg-2" style="text-align: left">
                                  <h4 class="card-title" style="color: blue ; margin-left: 15px"><strong>600KWh</strong></h4>
                                  <h6 class="card-subtitle" style="margin-left: 15px">Total Produksi</h6>
                              </div>
                              <div class="col-4 float-right">
                                  <h5 class="card-subtitle" style="margin-left:155px; margin-top:10px">29 November 2019</h5>
                              </div>
                              <div class="col-lg-1">
                                  <i class="fas fa-angle-left" style="margin-left:5px; margin-top:10px"></i>
                                  <i class="fas fa-angle-right" style="margin-left: 10px; margin-top:10px"></i>
                              </div>
                              <div class="col-3">
                                  <div class="input-group">
                                      <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy" style="width:10px;">
                                      <div class="input-group-append">
                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                      </div>
                                  </div>
                              </div>

                          </div>
                      </div>
                      <div class="row">
                          <!-- column -->
                          <div class="col-lg-12">
                              <div class="campaign ct-charts"></div>
                          </div>
                          <!-- column -->
                      </div>
                  </div>
              </div>
          </div>
      </div>
       <div class="row">
          <!-- column -->
          <div class="col-sm-12">
              <div class="card">
                  <div class="card-body">
                       <div class="col-12">
                          <h4 class="card-title"><Strong>Produksi Mingguan</Strong></h4>
                          <hr>
                      </div>
                      <div class="row">
                          <div class="col-lg-2">
                              <h4 class="card-title" style="color: blue; margin-left: 30px"><strong>600KWh</strong></h4>
                              <h6 class="card-subtitle" style="margin-left: 30px">Total Produksi</h6>
                          </div>
                          <div class="col-lg-9 float-right">
                               <h5 class="card-subtitle" style="margin-left:505px; margin-top:5px">24 November - 30 November</h5>
                          </div>
                          <div class="col-lg-1">
                                  <i class="fas fa-angle-left" style="margin-left:5px; margin-top:10px"></i>
                                  <i class="fas fa-angle-right" style="margin-left: 10px; margin-top:10px"></i>
                          </div>
                      </div>
                      <div class="row">
                              <div class="col-4"></div>
                                  <div class="col-2 float-right">
                                      <div class="dl">
                                          <select class="custom-select">
                                              <option value="0" selected>Bulan</option>
                                              <option value="1">Januari</option>
                                              <option value="2">Februari</option>
                                              <option value="3">Maret</option>
                                              <option value="4">April</option>
                                              <option value="5">Mei</option>
                                              <option value="6">Juni</option>
                                              <option value="7">Juli</option>
                                              <option value="8">Agustus</option>
                                              <option value="9">September</option>
                                              <option value="10">Oktober</option>
                                              <option value="11">November</option>
                                              <option value="12">Desember</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-2 float-right">
                                      <div class="dl">
                                          <select class="custom-select dropdown-toggle">
                                              <option value="0" selected>Tahun</option>
                                              <option value="1">2018</option>
                                              <option value="2">2019</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-2 float-right">
                                      <div class="dl">
                                          <select class="custom-select">
                                              <option value="0" selected>Minggu</option>
                                              <option value="1">Minggu 1</option>
                                              <option value="2">Minggu 2</option>
                                              <option value="3">Minggu 3</option>
                                              <option value="4">Minggu 4</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-2 float-right">
                                      <button type="button" class="btn btn-block btn-info">Terapkan</button>
                                  </div>
                      </div>
                      <!-- Bulanan -->
                      <div class="pt-3">
                          <div class="row">
                              <!-- column -->
                             <div class="col-md-12 col-lg-12">
                                <div class="ct-sm-line-chart" style="position: relative; height:250px;width:1050px;"></div>
                                  <div class="row mb-0 mt-3 text-center">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
       <div class="row">
          <!-- column -->
          <div class="col-sm-12">
              <div class="card">
                  <div class="card-body">
                       <div class="col-12">
                          <h4 class="card-title"><Strong>Produksi Bulanan</Strong></h4>
                          <hr>
                      </div>
                      <div class="row">
                          <div class="col-lg-2">
                              <h4 class="card-title" style="color: blue; margin-left: 30px"><strong>600KWh</strong></h4>
                              <h6 class="card-subtitle" style="margin-left: 30px">Total Produksi</h6>
                          </div>
                          <div class="col-lg-9 float-right">
                               <h5 class="card-subtitle" style="margin-left:570px; margin-top:5px">November 2019</h5>
                          </div>
                          <div class="col-lg-1">
                                  <i class="fas fa-angle-left" style="margin-left:5px; margin-top:10px"></i>
                                  <i class="fas fa-angle-right" style="margin-left: 10px; margin-top:10px"></i>
                          </div>
                      </div>
                      <div class="row">
                              <div class="col-6"></div>
                                  <div class="col-2 float-right">
                                      <div class="dl">
                                          <select class="custom-select">
                                              <option value="0" selected>Bulan</option>
                                              <option value="1">Januari</option>
                                              <option value="2">Februari</option>
                                              <option value="3">Maret</option>
                                              <option value="4">April</option>
                                              <option value="5">Mei</option>
                                              <option value="6">Juni</option>
                                              <option value="7">Juli</option>
                                              <option value="8">Agustus</option>
                                              <option value="9">September</option>
                                              <option value="10">Oktober</option>
                                              <option value="11">November</option>
                                              <option value="12">Desember</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-2 float-right">
                                      <div class="dl">
                                          <select class="custom-select dropdown-toggle">
                                              <option value="0" selected>Tahun</option>
                                              <option value="1">2018</option>
                                              <option value="2">2019</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-2 float-right">
                                      <button type="button" class="btn btn-block btn-info">Terapkan</button>
                                  </div>
                      </div>
                      <!-- Bulanan -->
                      <div class="pt-3">
                          <div class="row">
                              <!-- column -->
                             <div class="col-md-12 col-lg-12">
                                <div id="stacked-column-produksi-bulanan" style="position: relative; height:250px;"></div>
                                  <div class="row mb-0 mt-3 text-center">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
       <div class="row">
          <!-- column -->
          <div class="col-sm-12">
              <div class="card">
                  <div class="card-body">
                       <div class="col-12">
                          <h4 class="card-title"><Strong>Produksi Tahunan</Strong></h4>
                          <hr>
                      </div>
                      <div class="row">
                          <div class="col-lg-2">
                              <h4 class="card-title" style="color: blue; margin-left: 30px"><strong>600KWh</strong></h4>
                              <h6 class="card-subtitle" style="margin-left: 30px">Total Produksi</h6>
                          </div>
                          <div class="col-lg-9 float-right">
                               <h5 class="card-subtitle" style="margin-left:630px; margin-top:5px">2019</h5>
                          </div>
                          <div class="col-lg-1">
                                  <i class="fas fa-angle-left" style="margin-left:5px; margin-top:10px"></i>
                                  <i class="fas fa-angle-right" style="margin-left: 10px; margin-top:10px"></i>
                          </div>
                      </div>
                      <div class="row">
                              <div class="col-8"></div>
                                  <div class="col-2 float-right">
                                      <div class="dl">
                                          <select class="custom-select dropdown-toggle">
                                              <option value="0" selected>Tahun</option>
                                              <option value="1">2018</option>
                                              <option value="2">2019</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-2 float-right">
                                      <button type="button" class="btn btn-block btn-info">Terapkan</button>
                                  </div>
                      </div>
                      <!-- tahunan -->
                      <div class="pt-3">
                          <div class="row">
                              <!-- column -->
                             <div class="col-md-12 col-lg-12">
                                <div id="stacked-column-produksi-tahunan" style="position: relative; height:250px;"></div>
                                  <div class="row mb-0 mt-3 text-center">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>

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
