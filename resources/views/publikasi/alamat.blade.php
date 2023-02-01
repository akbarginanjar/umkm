@extends('layouts.member')

@section('konten')
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
               <div class="card"><br>
                <h5 class="container" style="font-family: 'Times New Roman', Times, serif; color: navy">DINAS YANG MEMBIDANGI KOPERASI DAN UKM </h5>   
                 <hr>
                <div class="container">
                    <table class="table table-bordered">
                     <thead class="text-white bg-primary">
                      <tr>
                          <th>NO</th>
                          <th>NOMENKLATUR DINAS PROVINSI</th>
                          <th>KAB/KOTA</th>
                      </tr>
                     </thead>
                     <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <b style="font-size: 12px">DINAS KOPERASI, USAHA KECIL DAN MENENGAH ACEH</b><br>
                                <span>PROVINSI ACEH</span>
                                <hr>
                                <span> Ir.HELVIZAR, M.Si</span><br>
                                <span>Jl. Panglima Nyak Makam No.12, Banda Aceh</span>
                            </td>
                            <td class="text-center"><br><br>
                                5 KOTA  18 KABUPATEN
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <b style="font-size: 12px">DINAS KOPERASI DAN UKM</b><br>
                                <span>PROVINSI SUMATERA UTARA</span>
                                <hr>
                                <span>  Drs. Amran Utheh, MAP</span><br>
                                <span>Jln. Gatot Subroto Km. 5,5 No. 218 Medan</span>
                            </td>
                            <td class="text-center"><br><br>
                                8 KOTA  25 KABUPATEN
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <b style="font-size: 12px">DINAS KOPERASI, USAHA KECIL DAN MENENGAH</b><br>
                                <span>PROVINSI SUMATERA BARAT</span>
                                <hr>
                                <span> Naswir SH. M Hum</span><br>
                                <span>J Jln. Khatib Sulaiman No. 11</span>
                            </td>
                            <td class="text-center"><br><br>
                                7 KOTA  12 KABUPATEN
                            </td>
                        </tr>
                     </tbody>
                    </table>
                 </div>
               </div>
            </div>
            <div class="col">
                <img src="{{asset('assets/frontend/assets/img/team/1.jpg')}}" width="100%" height="95%">
       </div>
        </div>
    </div>
    <br><br>
@endsection