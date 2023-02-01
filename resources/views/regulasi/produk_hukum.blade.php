@extends('layouts.member')

@section('konten')
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
<br>
<div class="container">
    <div class="card border-0"><br>
        <h3 class="text-center" style="font-family: 'Times New Roman', Times, serif; color: navy"> PRODUK HUKUM </h3>   
  <br>       <div class="container">
            <div class="card border-0" style="background: rgb(238, 235, 235)">
                <br>
               <div class="row container">
                <div class="col-md-2">
                    <input type="text" placeholder="Pencarian judul" class="form-control mb-2">
                </div>
                <div class="col-md-2">
                    <input type="text" placeholder="Pencarian Tahun" class="form-control mb-2">
                </div>
                <div class="col-md-3 mb-2">
                    <select name="" id="" class="form-select">
                      <option value="">-- pilih kategori --</option>
                      <option value="">Undang - Undang</option>
                      <option value="">Rancangan UUD</option>
                      <option value="">Peraturan Pemerintah</option>
                      <option value="">Peraturan Presiden</option>
                      <option value="">Dll</option>
                    </select>
                </div>
                <div class="col-md-2 mb-2">
                  <button class="col-sm-12 btn btn-primary"> <i class="fi fi-br-search"></i> &nbsp; Cari </button>
                </div>
                <div class="col-md-2 mb-2">
                  <button class="col-sm-12 btn btn-danger"> <i class="fi fi-bs-rotate-right"></i> &nbsp; Reset  </button>
                </div>
               </div>
               <br>
            </div>
         </div>
         <br>
         
         <div class="container">
            <table class="table info table-bordered ">
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
                    <td>PERATURAN MENTERI KOPERASI DAN USAHA KECIL DAN MENENGAH RI NOMOR 2 TAHUN 2022 TENTANG PETUNJUK TEKNIS PENGGUNAAN DANA ALOKASI KHUSUS NONFSIK PENINGKATAN KAPASITAS KOPERASI, USAHA MIKRO, DAN KECIL</td>
                    <td>PERATURAN MENTERI</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>	SURAT EDARAN NO 10 TAHUN 2022 TENTANG SELEKSI PENDAMPING KOPERASI MODERN DEPUTI BIDANG PERKOPERASIAN</td>
                    <td>SURAT EDARAN</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>KEPUTUSAN MENTERI KOPERASI DAN USAHA KECIL DAN MENENGAH RI NOMOR 51 TAHUN 2021 TENTANG PEDOMAN PENERAPAN MANAJEMEN RISIKO DI LINGKUNGAN KEMENTERIAN KOPERASI DAN USAHA KECIL DAN MENENGAH</td>
                    <td>KEPUTUSAN MENTERI</td>
                  <tr>
                    <th scope="row">4</th>
                    <td>SURAT EDARAN NOMOR 57 TAHUN 2021 TENTANG PELAKSANAAN PERINGATAN HARI KOPERASI KE-74 TAHUN 2021</td>
                    <td>SURAT EDARAN</td>
                  </tr>
                </tbody>
              </table>
         </div>
    </div>
</div>
@endsection