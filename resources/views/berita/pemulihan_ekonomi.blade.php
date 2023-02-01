@extends('layouts.member')

@section('konten')
<br>
     <div class="container">
        <div class="row">
           <div class="col-md-8">
            <div class="card border-0"><br>
                <h3 class="text-center" style="font-family: 'Times New Roman', Times, serif; color: navy"> PEMULIHAN EKONOMI NASIONAL
                </h3>  
                <br> 
            </div>
               <br>
              <center>
                 <div class="row">
                     <div class="col-md-6 mb-3">
                        <div class="card border-0">
                         <a href="">  <img src="{{ asset('assets/frontend/assets/img/team/22.jpg') }}" width="100%" height="95%"></a>
                         </div>
                         <div class="card border-0"><br>
                             <b style="text-align: left" class="container">SUBSIDI BUNGA NON KUR</b>
                             <span style="text-align: left" class="container">2023-12-09</span>
                            <p style="text-align: left" class="container"> ...</p>
                         </div>
                     </div>
                     <div class="col-md-6 mb-3">
                         <div class="card border-0">
                             <a href="">  <img src="{{ asset('assets/frontend/assets/img/team/23.jpg') }}" width="100%" height="95%"></a>
                         </div>
                         <div class="card border-0"><br>
                             <b style="text-align: left" class="container">SUBSIDI BUNGA/MARGIN PROGRAM PEMULIHAN EKONOMI NASIONAL (PEN)</b>
                             <span style="text-align: left" class="container">2023-12-09</span>
                            <p style="text-align: left" class="container"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit sint, distinctio odio hic dolorem sit quia quisquam obcaecati corporis omnis?</p>
                         </div>
                     </div>
                    </div>
           </div>
           <div class="col">
            <div class="card bg-white border-0">
              <div class="card-body">
                  <h4 style="font-size: 15px; color: navy">GALERI POTO</h4>
                  <hr >

                 <div class="row">
                    <div class="col-md-4">
                        <a href="/galeri_poto">  <img src="{{ asset('assets/frontend/assets/img/team/6.jpg') }}" width="100%" height="95%"></a>
                    </div>
                    <div class="col">
                       <span ><a href="/galeri_poto" class="text-dark" >Menteri Koperasi Dan UKM (MenkopUKM) Teten Masduki...</a></span>
                    </div>
                 </div><hr>

                 <div class="row">
                    <div class="col-md-4">
                        <a href="/galeri_poto">  <img src="{{ asset('assets/frontend/assets/img/team/7.jpg') }}" width="100%" height="95%"></a>
                    </div>
                    <div class="col">
                       <span ><a href="/galeri_poto" class="text-dark">Menteri Koperasi Dan UKM (MenkopUKM) Teten Masduki Didampingi...</a></span>
                    </div>
                 </div><hr>

                 <div class="row">
                    <div class="col-md-4">
                        <a href="/galeri_poto">  <img src="{{ asset('assets/frontend/assets/img/team/8.jpg') }}" width="100%" height="95%"></a>
                    </div>
                    <div class="col">
                       <span ><a href="/galeri_poto" class="text-dark">Menteri Koperasi Dan UKM (MenkopUKM) Teten Masduki...</a></span>
                    </div>
                 </div><hr>

                 <div class="row">
                    <div class="col-md-4">
                        <a href="/galeri_poto">  <img src="{{ asset('assets/frontend/assets/img/team/9.jpg') }}" width="100%" height="95%"></a>
                    </div>
                    <div class="col">
                       <span ><a href="/galeri_poto" class="text-dark">Sekertaris  Kementerian Koperasi dan UKM Arif Rahma...</a></span>
                    </div>
                 </div><hr>

                 <div class="row">
                    <div class="col-md-4">
                        <a href="/galeri_poto">  <img src="{{ asset('assets/frontend/assets/img/team/10.jpg') }}" width="100%" height="95%"></a>
                    </div>
                    <div class="col">
                       <span ><a href="/galeri_poto" class="text-dark">Menteri Koperasi Dan UKM (MenkopUKM) Teten Masduki...</a></span>
                    </div>
                 </div><hr>

              </div>
          </div>
          </div>
        </div>

     </div>         
     <br><br>
     @endsection