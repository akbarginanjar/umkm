@extends('layouts.member')

@section('konten')
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
<br>
<div class="container">
    <div class="card border-0"><br>
        <h3 class="text-center" style="font-family: 'Times New Roman', Times, serif; color: navy">PENGARUSUTAMAAN GENDER </h3>   
  <br>       <div class="container">
            <div class="card border-0" style="background: rgb(238, 235, 235)">
                <br>
               <div class="row container">
                <div class="col-md-4 mb-2">
                    <input type="text" placeholder="Pencarian judul" class="form-control mb-2">
                </div>
                <div class="col-md-4 mb-3">
                    <select name="" id="" class="form-select">
                      <option value="">-- pilih kategori --</option>
                      <option value="">Dasar Hukum</option>
                      <option value="">Kegiatan Dan Dokumentasi</option>
                      <option value="">Data Terpilah perserta Dan Penerima Program</option>
                      <option value="">Laporan Tahunan</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                  <button class="col-sm-12 btn btn-primary"> <i class="fi fi-br-search"></i> &nbsp; Cari </button>
                </div>
                <div class="col-md-2 mb-3">
                  <button class="col-sm-12 btn btn-danger"> <i class="fi fi-bs-rotate-right"></i> &nbsp; Reset  </button>
                </div>
               </div>
               <br>
            </div>
         </div>
         <br>
         
         <div class="container">

          <div class="table-responsive">
            <table class="table" style="width:1300px">
              <thead class="bg-primary text-white">
                <tr>
                  <th scope="col">NO</th>
                  <th scope="col">NAMA DATA FILE</th>
                  <th scope="col">KATEGORI</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td >DATA TERPILAH PENERIMA PROGRAM/KEGIATAN KEMENTERIAN KUKM TAHUN 2020</td>
                  <td>DATA TERPILAH PESERTA DAN PENERIMA PROGRAM</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>	LAPORAN PENGARUSUTAMAAN GENDER TAHUN 2019</td>
                  <td>LAPORAN TAHUNAN</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>DATA TERPILAH BANTUAN PEMERINTAH BAGIA WIRAUSAHA PEMULA TAHUN 2012019</td>
                  <td>	DATA TERPILAH PESERTA DAN PENERIMA PROGRAM </td>
                <tr>
                  <th scope="row">4</th>
                  <td>DATA TERPILAH PETUGAS PENYULUH KOPERASI LAPANGAN (PPKL) TAHUN 2015-2019</td>
                  <td>DATA TERPILAH PESERTA DAN PENERIMA PROGRAM</td>
                </tr>
              </tbody>
            </table>
          </div>
         </div>
    </div>
</div>
<br><br>
@endsection