@extends('layouts.member')

@section('konten')
    <br>
    <div class="container">
        <div class="card">
            <br>
            <h3 class="text-center" style="font-family: 'Times New Roman', Times, serif; color: navy">  MONITORING MEDIA </h3>   
       <br>
       
            <div class="card border-0">
                <div id="carouselExampleFade" class="carousel slide carousel-fade container">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{asset('assets/frontend/assets/img/slide/dokumen1.png')}}"  class="d-block w-100"  alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('assets/frontend/assets/img/slide/dokumen2.png')}}"  class="d-block w-100"  alt="...">
                      </div>  
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                      <span class="" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

            </div>

        </div>
    </div>
    <br><br>
@endsection