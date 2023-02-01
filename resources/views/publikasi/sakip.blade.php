@extends('layouts.member')

@section('konten')
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
<br>
<div class="container">
    <div class="card border-0"><br>
        <h3 class="text-center" style="font-family: 'Times New Roman', Times, serif; color: navy">  SAKIP </h3>   
  <br>       <div class="container">
            <div class="card border-0" style="background: rgb(238, 235, 235)">
                <br>
             <center>
              <div class="row container">
                <div class="col-md-4 MB-2">
                    <input type="text" placeholder="Pencarian judul" class="form-control mb-2">
                </div>
                <div class="col-md-4 mb-2">
                    <select name="" id="" class="form-select">
                      <option value="">-- pilih kategori --</option>
                      <option value="">Dasar Hukum</option>
                      <option value="">RENSTRA</option>
                      <option value="">LAKIP</option>
                      <option value="">PK-IKU</option>
                      <option value="">Kegiatan Pendukung</option>
                    </select>
                </div>
                <div class="col-md-2 mb-2">
                  <button class="col-sm-12 btn btn-primary"> <i class="fi fi-br-search"></i> &nbsp; Cari </button>
                </div>
                <div class="col-md-2 mb-2">
                  <button class="col-sm-12 btn btn-danger"> <i class="fi fi-bs-rotate-right"></i> &nbsp; Reset  </button>
                </div>
               </div>
             </center>
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
                    <th>KATEGORI</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>PK-IKU DEPUTI BIDANG UKM TAHUN 2022</td>
                    <td>PK-IKU</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>PK-IKU INSPEKTUR KEMENTERIAN KUKM TAHUN 2022</td>
                    <td>PK-IKU </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>RENSTRA SEKRETARIAT KEMENTERIAN KUKM TAHUN 2021-2024</td>
                    <td>RENSTRA </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>PK-IKU DEPUTI BIDANG PERKOPERASIAN TAHUN 2022</td>
                    <td>PK-IKU </td>
                  </tr>
                </tbody>
              </table>
         </div>
    </div>
</div>
<br><br>
@endsection