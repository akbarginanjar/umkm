@extends('layouts.member')

@section('konten')

<br>

<div class="container">
    <input type="text" class="form-control col-sm-4" placeholder="Cari Toko Umkm">
</div>
<br>

<center>
  <div class="container">
    <div class="row">
        <div class="col-md-4">
            <a href="/detail_umkm">
              <div class="card mb-3 border-0 shadow" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="data:image/png;base64,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" class="img-fluid rounded-start" alt="..." width="100%" width="100%">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                     <b>Nama Toko : The Market</b><br>
                     <span>Alamat : Bandung Jawa Barat</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
        </div>
        <div class="col-md-4">
          <a href="/detail_umkm">
            <div class="card mb-3 border-0 shadow" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFaGP7di8m-ZkE5ykroJ-yST0bYV6EOl_dKQ&usqp=CAU" class="img-fluid rounded-start" alt="..." width="100%">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                   <b>Nama Toko : Digital Shop</b><br>
                   <span>Alamat : Jakarta Pusat </span>
                  </div>
                </div>
              </div>
            </div></a>
        </div>
        <div class="col-md-4">
           <a href="/detail_umkm">
            <div class="card mb-3 border-0 shadow" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEAeGXQ_cNn9TZffjuFj6i_qIepLDmSSSyyw&usqp=CAU" class="img-fluid rounded-start" alt="..." width="100%">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                   <b>Nama Toko :Salimah ShopeOn</b><br>
                   <span>Alamat : Palembang </span>
                  </div>
                </div>
              </div>
            </div></a>
        </div>
        <div class="col-md-4">
          <a href="/detail_umkm">
            <div class="card mb-3 border-0 shadow" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_nsgCD1kMpQZF05ti7wM2HbcDjIVgY1b6lg&usqp=CAU" class="img-fluid rounded-start" alt="..." width="100%">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                   <b>Nama Toko :SiherbalSHOP</b><br>
                   <span>Alamat : Surabaya </span>
                  </div>
                </div>
              </div>
            </div></a>
        </div>
        <div class="col-md-4">
            <a href="/detail_umkm">
              <div class="card mb-3 border-0 shadow" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRw7RubFDGuwNauY5-uKuFLgTQPo_zK5JqccQ&usqp=CAU" class="img-fluid rounded-start" alt="..." width="100%">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                     <b>Nama Toko : Jasmani</b><br>
                     <span>Alamat : Jakarta Timur  </span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
        </div>
        <div class="col-md-4">
           <a href="/detail_umkm">
            <div class="card mb-3 border-0 shadow" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQa8iTaOFnWmonxmF2XB_pWhSb78fpSJfTfCA&usqp=CAU" class="img-fluid rounded-start" alt="..." width="100%">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                   <b>Nama Toko : THRIF</b><br>
                   <span>Alamat : Aceh </span>
                  </div>
                </div>
              </div>
            </div></a>
        </div>
    </div>
  </div>
</center>
    <br><br>
@endsection