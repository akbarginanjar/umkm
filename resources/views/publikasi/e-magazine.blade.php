@extends('layouts.member')

@section('konten')
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
<br>
<div class="container">
    <div class="card border-0"><br>
        <h3 class="text-center" style="font-family: 'Times New Roman', Times, serif; color: navy">  E-MAGAZINE </h3>   
  <br>       <div class="container">
            <div class="card border-0" style="background: rgb(238, 235, 235)">
                <br>
              <center>
                <div class="row container">
                  <div class="col-md-8 MB-2">
                      <input type="text" placeholder="Pencarian Kata Kunci" class="form-control mb-2">
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
                <thead class="bg-primary text-white text-center">
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA DATA FILE</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>E-MAGAZINE EDISI JUNI 2021, MENUTUP CELAH CROSS-BORDER, MELINDUNGI UMKM</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>E-MAGAZINE EDISI APRIL 2021, BELA NEGARA, BELI PRODUK LOKAL.</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>E-LEARNING</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>SIAP BERSAMA KUMKM LAWAN CORONA</td>
                  </tr>
                </tbody>
              </table>
         </div>
    </div>
</div>
<br><br>
@endsection