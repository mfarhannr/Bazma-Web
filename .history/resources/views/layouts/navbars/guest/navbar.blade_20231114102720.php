{{-- <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <!-- Navbar -->
            <nav
                class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
                <div class="container-fluid">
                    <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{ route('home') }}">
                        Bazma Web
                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mt-2">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav mx-auto ">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                                    href="{{ route('home') }}">
                                    <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2" href="{{ route('register') }}">
                                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                                    Sign Up
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2" href="{{ route('login') }}">
                                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                                    Sign In
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav d-lg-block d-none">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/product/argon-dashboard-laravel" target="_blank"
                                    class="btn btn-sm mb-0 me-1 btn-primary">Free Download</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>
    </div>
</div> --}}

    <!-- Navbar White -->
    <div class="container position-sticky z-index-sticky top-0">
      <div class="row">
        <div class="col-12">
          <nav
            class="navbar navbar-expand-lg card border-radius-xl mt-4 top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
            <div class="container-fluid px-0 phenomena-bold">
              <a class="navbar-brand text-white ms-sm-3" href="/beranda" rel="tooltip"><img
                  src="./pages/assets/img/smktibazma-1.png" alt="" style="width: 130px" />
              </a>
              <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </span>
              </button>
              <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                <ul class="navbar-nav navbar-nav-hover ms-auto">
                  <li class="nav-item dropdown dropdown-hover mx-2">
                    <a href="/"
                      class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                      style="font-size: 18px">Beranda</a>
                  </li>
                  <li class="nav-item dropdown dropdown-hover mx-2">
                    <a href="/profile"
                      class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                      style="font-size: 18px">Profil</a>
                  </li>
                  <li class="nav-item dropdown dropdown-hover mx-2">
                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                      id="dropdownMenuPages8" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 18px">
                      Kesiswaan
                      <img src="./pages/assets/img/down-arrow-dark.svg" alt="down-arrow"
                        class="arrow ms-2 d-lg-block d-none" />
                      <img src="./pages/assets/img/down-arrow-dark.svg" alt="down-arrow"
                        class="arrow ms-2 d-lg-none d-block" />
                    </a>
                    <div
                      class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-lg mt-0 mt-lg-3"
                      aria-labelledby="dropdownMenuPages8">
                      <div class="d-none d-lg-block" style="font-size: 18px">
                        <a href="/kegiatan" class="dropdown-item border-radius-md">
                          <span>Kegiatan</span>
                        </a>
                        <a href="/prestasi" class="dropdown-item border-radius-md">
                          <span>Prestasi</span>
                        </a>
                        <a href="/talent" class="dropdown-item border-radius-md">
                          <span>Katalog Talent</span>
                        </a>
                        <a href="/galeri" class="dropdown-item border-radius-md">
                          <span>Galeri Foto</span>
                        </a>
                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3"
                          style="font-size: 18px">
                          Account
                        </h6>
                        <a href="/team" class="dropdown-item border-radius-md">
                          <span>Tentang Pengembang</span>
                        </a>
                      </div>
                      <!-- Start Mobile Menu -->
                      <div class="d-lg-none" style="font-size: 18px">
                        <a href="/kegiatan" class="dropdown-item border-radius-md">
                          <span>Kegiatan</span>
                        </a>
                        <a href="/prestasi" class="dropdown-item border-radius-md">
                          <span>Prestasi</span>
                        </a>
                        <a href="/talent" class="dropdown-item border-radius-md">
                          <span>Katalog Talent</span>
                        </a>
                        <a href="/galeri" class="dropdown-item border-radius-md">
                          <span>Galeri Foto</span>
                        </a>
                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3"
                          style="font-size: 18px">
                          Account
                        </h6>
                        <a href="/team" class="dropdown-item border-radius-md">
                          <span>Tentang Pengembang</span>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item dropdown dropdown-hover mx-2">
                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                      id="dropdownMenuPages8" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 18px">
                      Informasi
                      <img src="./pages/assets/img/down-arrow-dark.svg" alt="down-arrow"
                        class="arrow ms-2 d-lg-block d-none" />
                      <img src="./pages/assets/img/down-arrow-dark.svg" alt="down-arrow"
                        class="arrow ms-2 d-lg-none d-block" />
                    </a>
                    <div
                      class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-lg mt-0 mt-lg-3"
                      aria-labelledby="dropdownMenuPages8" style="font-size: 18px">
                      <div class="d-none d-lg-block">

                        <a href="/mitra" class="dropdown-item border-radius-md">
                          <span>Mitra</span>
                        </a>
                        <a href="/donasi" class="dropdown-item border-radius-md">
                          <span>Donasi</span>
                        </a>
                        <a href="/ppdb" class="dropdown-item border-radius-md">
                          <span>PPDB</span>
                        </a>
                        <a href="./pages/author.html" class="dropdown-item border-radius-md">
                          <span>Berita</span>
                        </a>
                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3"
                          style="font-size: 18px">
                          Account
                        </h6>
                      </div>
                      <!-- Start Mobile Menu -->
                      <div class="d-lg-none" style="font-size: 18px">
                        <a href="../pages/about-us.html" class="dropdown-item border-radius-md">
                          <span>Mitra</span>
                        </a>
                        <a href="../pages/contact-us.html" class="dropdown-item border-radius-md">
                          <span>Donasi</span>
                        </a>
                        <a href="../pages/PPDB.html" class="dropdown-item border-radius-md">
                          <span>PPDB</span>
                        </a>
                        <a href="./pages/author.html" class="dropdown-item border-radius-md">
                          <span>Berita</span>
                        </a>
                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3"
                          style="font-size: 18px">
                          Account
                        </h6>
                      </div>
                      <!-- End Mobile Menu -->
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!-- End Navbar White -->