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
               <center>
                <div class="row container">
                    <div class="col-md-4 mb-2">
                        <input type="text" placeholder="Pencarian judul" class="form-control mb-2">
                    </div>
                    <div class="col-md-4 mb-3">
                        <select name="" id="" class="form-select">
                          <option value="">-- pilih kategori --</option>
                          <option value="">Rapat Kordinasi Nasional</option>
                          <option value="">Rapat Kordinasi Regional</option>
                          <option value="">Rapat Kordinasi Terbatas</option>
                          <option value="">Rakor Tidak Lanjut</option>
                        </select>
                    </div>
                    <div class="col-md-2 mb-3">
                      <button class="col-sm-12 btn btn-primary"> <i class="fi fi-br-search"></i> &nbsp; Cari </button>
                    </div>
                    <div class="col-md-2 mb-3">
                      <button class="col-sm-12 btn btn-danger"> <i class="fi fi-bs-rotate-right"></i> &nbsp; Reset  </button>
                    </div>
                   </div>
               </center>
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
                  <td >RAPAT KOORDINASI NASIONAL TAHUN 2022</td>
                  <td>RAPAT KOORDINASI NASIONAL</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>RAPAT KONSLIDASI BIDANG PENGEMBANGAN KOPERASI DAN UKM ANTAR KEMENTERIAN LEMBAGA TOPIK PERLUASAN AKSES PASAR DAN PENINGKATAN DAYA SAING</td>
                  <td>RAPAT KOORDINASI TERBATAS</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>RAPAT KONSLIDASI BIDANG PENGEMBANGAN KOPERASI DAN UKM ANTAR KEMENTERIAN LEMBAGA TOPIK PENGEMBANGAN KOPERASI</td>
                  <td>	RAPAT KOORDINASI TERBATAS </td>
               
              </tbody>
            </table>
          </div>
         </div>
    </div>
</div>
<br><br>
@endsection