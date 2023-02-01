  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
      <a href="mailto:contact@example.com" id="demo1" class="text-white"></a>
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter text-white" ></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook text-white"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram  text-white"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin  text-white"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center shadow">
    <div class="container d-flex align-items-center">

      <h1>  <img width="50%" src="{{asset('assets/frontend/assets/img/vector/umkm-logo.png')}}"></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/"><b>BERANDA</b></a></li> &nbsp;

          <li class="dropdown"><a href="#"><span><b>PROFIL</b></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/stuktur-organisasi"><b>Stuktur Organisasi</b></a></li>
              <li><a href="/sejarah"><b>Sejarah Kementrian</b></a></li>
              <li><a href="/visi"><b>Visi Dan Misi</b></a></li>
              <li><a href="/tugas"><b>Tugas Dan Fungsi</b></a></li>
              <li><a href="/regulasi"><b>Regulasi Dan Dasar Hukum</b></a></li>
              <li><a href="/profil-mentri"><b>Profil Mentri</b></a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span><b>BERITA</b></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/siaran_pers"><b>Siaran Pers</b></a></li>
              <li><a href="/warta_umkm"><b>Warta KUMKM</b></a></li>
              <li><a href="/galeri_poto"><b> Galeri Poto</b></a></li>
              <li><a href="/perngarusutamaan"><b>Perngarusutamaan  Gender</b></a></li>
              <li><a href="/gugus_covid"><b>GUGUS TUGAS COVID-19</b></a></li>
              <li><a href="/pemulihan"><b>PEMULIHAN EKONOMI NASIONAL  </b></a></li>
              <li><a href="/reformasi"><b>REFORMASI BIROKRASI              </b></a></li>
              <li><a href="/isu"><b>LAPORAN ISU HOAX  </b></a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span><b>REGULASI</b></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/produk_hukum"><b>PRODUK HUKUM</b></a></li>
              <li><a href="/paparan"><b>PAPARAN</b></a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span><b>PUBLIKASI</b></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/kumkm_rangka"><b>KUMKM DALAM ANGKA </b></a></li>
              <li><a href="/laporan_keuangan"><b>LAPORAN KEUANGAN</b></a></li>
              <li><a href="/data_koprasi"><b>DATA KOPERASI</b></a></li>
              <li><a href="/data_umkm"><b>DATA UMKM</b></a></li>
              <li><a href="/sakip"><b>SAKIP</b></a></li>
              <li><a href="/e-magazine"><b>E-MAGAZINE</b></a></li>
              <li><a href="/monitoring"><b>MONITORING MEDIA</b></a></li>
              <li><a href="/hari_koprasi"><b>HARI KOPERASI</b></a></li>
              <li><a href="/alamat"><b>AlAMAT DINAS</b></a></li>
              <li><a href="/rapat"><b>RAPAT KORDINASI</b></a></li>

            </ul>
          </li>

          <li class="dropdown"><a href="#"><span><b>PENGUMUMAN</b></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/kelembagaan"><b>KELEMBAGAAN</b></a></li>
              <li><a href="/kepegawaian"><b>KEPEGAWAIAN</b></a></li>
              <li><a href="/kegiatan"><b>KEGIATAN</b></a></li>
            </ul>
          </li>
          {{-- <li><a class="nav-link scrollto" href=""><b>WEB TERKAIT</b></a></li>  --}}
          <li><a class="nav-link scrollto" href="/umkm"><b>UMKM</b></a></li>  &nbsp;
          {{-- <li><a class="nav-link scrollto" href=""><b>PRODUK</b></a></li>  &nbsp; --}}
          {{-- <li><a class="getstarted scrollto" href="/register">Daftar</a></li>
          <li><a class="getstarted scrollto" href="/login">Login</a></li> --}}
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <script type='text/javascript'>
    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth();
    var thisDay = date.getDay(),
      thisDay = myDays[thisDay];
    var yy = date.getYear();
    var year = (yy < 1000) ? yy + 1900 : yy;
    document.getElementById('demo1').innerHTML = thisDay + ', ' + day + ' ' + months[month] + ' ' + year;

  </script>