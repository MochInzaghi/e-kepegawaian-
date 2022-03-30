<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Form Edit Data DUK </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('template')}}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{asset('template')}}/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{asset('template')}}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{asset('template')}}/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="{{asset('template')}}/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="{{asset('template')}}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('template')}}/vendors/select2/select2.min.css">
  <link rel="stylesheet" href="{{asset('template')}}/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('template')}}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('template')}}/images/kementrian.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="{{asset('template')}}/images/kemkominfo.png" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="{{asset('template')}}/images/kementrian.png" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Good Morning, <span class="text-black fw-bold">Admin</span></h1>
            <h3 class="welcome-sub-text">Silahkan Mengedit Data DUK </h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
          </li>
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="{{asset('template')}}/images/faces/face8.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="{{asset('template')}}/images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">Dita Kominfo</p>
                <p class="fw-light text-muted mb-0">lorepipsum@gmail.com</p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="mdi mdi-grid-large menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">Forms and Datas</li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                            <i class="menu-icon mdi mdi-card-text-outline"></i>
                            <span class="menu-title">Form</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="form-elements">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="{{route('create.pegawai')}}">Form Data Pegawai</a></li>
                            </ul>
                        </div>
                        <div class="collapse" id="form-elements">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="{{route('create.cuti')}}">Form Data Cuti</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                            <i class="menu-icon mdi mdi-table"></i>
                            <span class="menu-title">Tables</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="tables">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('admin.pegawai')}}">Data Pegawai</a></li>
                            </ul>
                        </div>
                        <div class="collapse" id="tables">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('admin.kgb')}}">Data KGB</a></li>
                            </ul>
                        </div>
                        <div class="collapse" id="tables">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('admin.kp')}}">Tabel Data KP</a></li>
                            </ul>
                        </div>
                        <div class="collapse" id="tables">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('admin.penghargaan')}}">Tabel Data Penghargaan</a></li>
                            </ul>
                        </div>
                        <div class="collapse" id="tables">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('admin.duk')}}">Tabel Data DUK</a></li>
                            </ul>
                        </div>
                        <div class="collapse" id="tables">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('admin.pensiun')}}">Tabel Data Pensiun</a></li>
                            </ul>
                        </div>
                        <div class="collapse" id="tables">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('admin.cuti')}}">Tabel Data Cuti</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Edit Data DUK</h4>
                  <p class="card-description">
                    Silhkan Edit Data DUK
                  </p>
                  @include('sweetalert::alert')
                  <form class="forms-sample" action="/admin/dataduk/update" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="data_pegawai_id" value="{{ $data_pegawai->id }}">
                    <div class="form-group">
                      <label for="nama">Nama Pegawai</label>
                      <input type="text" class="form-control" id="nama" name="namapegawai" value="{{ old('namapegawai') ?? $data_pegawai->namapegawai }}" disabled>
                    </div>
                    <div class="form-group">
                      <label for="NIP">NIP</label>
                      <input type="text" class="form-control" id="nip" name="nip" value="{{ old('nip') ?? $data_pegawai->nip }}" disabled>
                    </div>
                    <div class="form-group">
                      <label for="TTL">Tempat Tanggal Lahir</label>
                      <input type="text" class="form-control" id="ttl" name="ttl" value="{{ old('ttl') ??$data_pegawai->ttl }}" disabled>
                    </div>
                    <div class="form-group">
                      <label for="pangkat">Pangkat / Gol. Ruang</label>
                      <input type="text" class="form-control" id="pangkat" name="pangkat" value="{{ old('pangkat') ?? $data_pegawai->pangkat }}" disabled>
                    </div>
                    <div class="form-group">
                      <label for="tmt">TMT / Gol. Ruang</label>
                      <input type="text" class="form-control" id="tmt" name="tmt" value="{{ old('tmt') ??$data_pegawai->pegawaiDuk->tmt  ??''}}">
                    </div>
                    <div class="form-group">
                      <label for="jabatanterakhir">Jabatan Terakhir</label>
                      <input type="text" class="form-control" id="jabatanterakhir" name="jabatanterakhir" value="{{ old('jabatanterakhir') ?? $data_pegawai->pegawaiDuk->jabatanterakhir ?? ''}}">
                    </div>
                    <div class="form-group">
                      <label for="masakerjatahun">Masa Kerja (Tahun)</label>
                      <input type="text" class="form-control" id="masakerjatahun" name="mk_tahun" value="{{ old('mk_tahun') ?? $data_pegawai->pegawaiDuk->mk_tahun ?? ''}}">
                    </div>
                    <div class="form-group">
                      <label for="masakerjabulan">Masa Kerja (Bulan)</label>
                      <input type="text" class="form-control" id="masakerjabulan" name="mk_bulan" value="{{ old('mk_bulan') ?? $data_pegawai->pegawaiDuk->mk_bulan ?? ''}}">
                    </div>
                    <div class="form-group">
                      <label for="pendidikankepemimpinan">Pendidikan Kepemimpinan</label>
                      <input type="text" class="form-control" id="pendidikankepemimpinan" name="pendidikan_kepemimpinan" value="{{ old('pendidikan_kepemimpinan') ?? $data_pegawai->pegawaiDuk->pendidikan_kepemimpinan ?? ''}}">
                    </div>
                    <div class="form-group">
                      <label for="tahunlulus">Tahun Lulus</label>
                      <input type="text" class="form-control" id="tahunlulus" name="tahunlulus" value="{{ old('tahunlulus') ?? $data_pegawai->pegawaiDuk->tahunlulus ?? ''}}">
                    </div>
                    <div class="form-group">
                      <label for="pendidikanterakhir">Pendidikan Terakhir, Nama Sekolah</label>
                      <input type="text" class="form-control" id="pendidikanterakhir" name="pendidikan_terakhir" value="{{ old('pendidikan_terakhir') ?? $data_pegawai->pegawaiDuk->pendidikan_terakhir ?? ''}}">
                    </div>
                    <div class="form-group">
                      <label for="tahun_lulus">Tahun Lulus</label>
                      <input type="text" class="form-control" id="tahun_lulus" name="tahun_lulus" value="{{ old('tahun_lulus') ?? $data_pegawai->pegawaiDuk->tahun_lulus ?? ''}}">
                    </div>
                    <div class="form-group">
                        <label for="jeniskelamin">Jenis Kelamin</label>
                          <select id="jeniskelamin" class="form-control" name="jeniskelamin" value="{{ old('jeniskelamin') ?? $data_pegawai->pegawaiDuk->jeniskelamin ?? ''}}">
                            <option selected disabled>Silahkan Pilih :</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                    </div>
                    <div class="form-group">
                      <label for="agamatahun">Agama Tahun</label>
                      <input type="text" class="form-control" id="agamatahun" name="agama_tahun" value="{{ old('agama_tahun') ??$data_pegawai->pegawaiDuk->agama_tahun ?? ''}}">
                    </div>
                    <div class="form-group">
                        <label for="tahunpensiun">Tahun Pensiun</label>
                        <input type="text" class="form-control" id="tahunpensiun" name="tahunpensiun" value="{{ old('tahunpensiun') ?? $data_pegawai->pegawaiDuk->tahunpensiun ?? ''}}">
                      </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan</label>
                      <input type="text" class="form-control" id="keterangan" name="keterangan_duk" value="{{ old('keterangan_duk') ??$data_pegawai->pegawaiDuk->keterangan_duk ?? ''}}">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Dinas Komunikasi dan Informatika Kabupaten Malang</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('template')}}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('template')}}/vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="{{asset('template')}}/vendors/select2/select2.min.js"></script>
  <script src="{{asset('template')}}/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('template')}}/js/off-canvas.js"></script>
  <script src="{{asset('template')}}/js/hoverable-collapse.js"></script>
  <script src="{{asset('template')}}/js/template.js"></script>
  <script src="{{asset('template')}}/js/settings.js"></script>
  <script src="{{asset('template')}}/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('template')}}/js/file-upload.js"></script>
  <script src="{{asset('template')}}/js/typeahead.js"></script>
  <script src="{{asset('template')}}/js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
