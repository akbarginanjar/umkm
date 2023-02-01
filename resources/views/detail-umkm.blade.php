@extends('layouts.member')
<style>
    body {
        width: 100%;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        min-height: 100vh;
        font-family: "Poppins", sans-serif;
    }

    /* ul {
                                                                                                                                                list-style-type: none;
                                                                                                                                                margin: 0;
                                                                                                                                                padding: 0;
                                                                                                                                                display: flex;
                                                                                                                                                align-items: center;
                                                                                                                                            } */

    a {
        text-decoration: none;
    }

    .header__wrapper header {
        width: 100%;
        /* background: url("../img/bg.jpeg") no-repeat 50% 20% / cover; */
        min-height: calc(100px + 15vw);
    }

    .header__wrapper .cols__container .left__col {
        padding: 25px 20px;
        text-align: center;
        max-width: 350px;
        position: relative;
        margin: 0 auto;
    }

    .header__wrapper .cols__container .left__col .img__container {
        position: absolute;
        top: -60px;
        left: 50%;
        transform: translatex(-50%);
    }

    .header__wrapper .cols__container .left__col .img__container img {
        width: 140px;
        height: 140px;
        margin-bottom: 20px;
        object-fit: cover;
        border-radius: 50%;
        display: block;
        box-shadow: 1px 3px 12px rgba(0, 0, 0, 0.18);
    }

    /* .header__wrapper .cols__container .left__col .img__container span {
                                                                                                                                        position: absolute;
                                                                                                                                        background: #2afa6a;
                                                                                                                                        width: 16px;
                                                                                                                                        height: 16px;
                                                                                                                                        border-radius: 50%;
                                                                                                                                        bottom: 3px;
                                                                                                                                        right: 11px;
                                                                                                                                        border: 2px solid #fff;
                                                                                                                                    } */

    .header__wrapper .cols__container .left__col h2 {
        margin-top: 60px;
        font-weight: 600;
        font-size: 22px;
        margin-bottom: 5px;
    }

    .header__wrapper .cols__container .left__col p {
        font-size: 0.9rem;
        color: #818181;
        margin: 0;
    }

    .header__wrapper .cols__container .left__col .about {
        justify-content: space-between;
        position: relative;
        margin: 35px 0;
    }

    .header__wrapper .cols__container .left__col .about li {
        display: flex;
        flex-direction: column;
        color: #818181;
        font-size: 0.9rem;
    }

    .header__wrapper .cols__container .left__col .about li span {
        color: #1d1d1d;
        font-weight: 600;
    }

    .header__wrapper .cols__container .left__col .about:after {
        position: absolute;
        content: "";
        bottom: -16px;
        display: block;
        background: #cccccc;
        height: 1px;
        width: 100%;
    }

    .header__wrapper .cols__container .content p {
        font-size: 1rem;
        color: #1d1d1d;
        line-height: 1.8em;
    }

    .header__wrapper .cols__container .content ul {
        gap: 30px;
        justify-content: center;
        align-items: center;
        margin-top: 25px;
    }

    .header__wrapper .cols__container .content ul li {
        display: flex;
    }

    .header__wrapper .cols__container .content ul i {
        font-size: 1.3rem;
    }

    .header__wrapper .cols__container .right__col nav {
        display: flex;
        align-items: center;
        padding: 30px 0;
        justify-content: space-between;
        flex-direction: column;
    }

    .header__wrapper .cols__container .right__col nav ul {
        display: flex;
        gap: 20px;
        flex-direction: column;
    }

    .header__wrapper .cols__container .right__col nav ul li a {
        text-transform: uppercase;
        color: #818181;
    }

    .header__wrapper .cols__container .right__col nav ul li:nth-child(1) a {
        color: #1d1d1d;
        font-weight: 600;
    }

    .header__wrapper .cols__container .right__col nav button {
        background: #0091ff;
        color: #fff;
        border: none;
        padding: 10px 25px;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 20px;
    }

    .header__wrapper .cols__container .right__col nav button:hover {
        opacity: 0.8;
    }

    .header__wrapper .cols__container .right__col .photos {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(190px, 1fr));
        gap: 20px;
    }

    .header__wrapper .cols__container .right__col .photos img {
        max-width: 100%;
        display: block;
        height: 100%;
        object-fit: cover;
    }

    /* Responsiveness */

    @media (min-width: 868px) {
        .header__wrapper .cols__container {
            max-width: 1200px;
            margin: 0 auto;
            width: 90%;
            justify-content: space-between;
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 50px;
        }

        .header__wrapper .cols__container .left__col {
            padding: 25px 0px;
        }

        .header__wrapper .cols__container .right__col nav ul {
            flex-direction: row;
            gap: 30px;
        }

        .header__wrapper .cols__container .right__col .photos {
            height: 365px;
            overflow: auto;
            padding: 0 0 30px;
        }
    }

    @media (min-width: 1017px) {
        .header__wrapper .cols__container .left__col {
            margin: 0;
            margin-right: auto;
        }

        .header__wrapper .cols__container .right__col nav {
            flex-direction: row;
        }

        .header__wrapper .cols__container .right__col nav button {
            margin-top: 0;
        }
    }
    
</style>

@section('konten')
    <div class="header__wrapper">
        <header>
            <img src="https://1.bp.blogspot.com/-nF7fOQLBImw/YJ_Dro1vg7I/AAAAAAAALAA/NlqnsdEpqosnlYK9NcFkzmhGeWp4txXXACLcBGAsYHQ/s550/Apotek.png" style="object-fit: cover;" width="100%"
                height="300px">
        </header>
        <div class="cols__container">
            <div class="left__col">
                <div class="img__container">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQa8iTaOFnWmonxmF2XB_pWhSb78fpSJfTfCA&usqp=CAU" alt="Anna Smith" />
                    <span></span>
                </div><br>
                <h2>THRIFT</h2>
                <p>thrief@gmil.com</p><br>

                {{-- <ul class="about">
                    <li><span>4,073</span>Followers</li>
                    <li><span>322</span>Following</li>
                    <li><span>200,543</span>Attraction</li>
                </ul> --}}

                <div class="content">
                    <p>
                        Kami menjual berbagai produk anak, mulai dari Jogger, sweater anak, tunik anak, piyama anak, hooflakids
                    </p>

                </div>
            </div>
            <div class="right__col">
                <nav>
                    {{-- <ul>
                        <li><a href="">photos</a></li>
                        <li><a href="">galleries</a></li>
                        <li><a href="">groups</a></li>
                        <li><a href="">about</a></li>
                    </ul> 
                    <button>Follow</button> --}}

                </nav>

                <div class="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <span>
                                    Jenis Usaha : Pedagang Eceran
                                </span>
                                <hr>
                            </div>
                            <div class="col-sm">
                                <span>
                                    Bidang Usaha : Aneka Industri
                                </span>
                                <hr>
                            </div>
                            <div class="col-sm">
                                <span>
                                    Industri : Elektronik & Rumah Tangga
                                </span>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <span>
                                    Produk Utama : Kaos Greenlight
                                </span>
                                <hr>
                            </div>
                            <div class="col-sm">
                                <span>
                                   Alamat : Bandung Jawa Barat
                                </span>
                                <hr>
                            </div>
                            <div class="col-sm">
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <center>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                 <div class="card border-0 shadow  " style="width: 18rem;">
                     <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                     <div class="card-body">
                       <p class="card-text"><b>Sweater New </b> &nbsp;&nbsp;
                         <span>Harga 78000</span><br>
                      </p>
                     </div>
                   </div>  
               </div> 
               <div class="col-md-4 mb-3">
                 <div class="card border-0 shadow  " style="width: 18rem;">
                     <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBIVFRgWFRUVGBgYFREYGBgSGBIRGBESGBgZGRgYGBgcIS4lHB4rHxgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISHjEhJCQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIAOEA4AMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAEBQACAwYBB//EAEEQAAIBAgQDBQYEBAQEBwAAAAECAAMRBBIhMQVBURMiYYGRBjJScaHBQnKx0WKCkvAjorLhFUNT8QcUFyRjc9L/xAAYAQADAQEAAAAAAAAAAAAAAAAAAQIDBP/EACMRAAICAgMAAgIDAAAAAAAAAAABAhEhMQMSQRMyIlFCYXH/2gAMAwEAAhEDEQA/AG1Y00VnYKFVSzEgaKBcmIq/GHWgKnYpnJRspv3Udh2aba1WUg2Gg3PK5PtW9qAT/qVaNOw/EGa5XzCkecXcWQ4d6dR2WqAajimVK5GCM71bg6m6gDMNAQBa04oo6mdWKS/CvoJ4yINwg1A1Ci5OwiGjxDEIKaVGUvUdS5cJkoIEzvfLbWwIAubXUk66xuLdpVVGpdxXcpmYhq1SnlVQEtuHZjr7uS5taLqx2joOyX4V9BPezT4V9BOUTjOITM1TNcUS60CAGd6jnLckAoiWCjrmHM2heP4uwUUiFa6IK1UP2SUy7hCVOpA0fW+hW28OjC0dAqIdQFI6gA3nvZL8K+glMJbIuVci2AVbZcqDRdOWltOU2kZKKdkvwr6CTsl+FfQS8kLYqKdkvwr6CTsl+FfQS8kLYUU7JfhX0EnZL8K+gl5IWwop2S/CvoJOyX4V9BLyQthRTsl+FfQSdkvwr6CXkhbCinZL8K+gk7JfhX0EvJC2FFOyX4V9BJ2S/CvoJeSK2OinZL8K+gk7JfhX0EvJHbFRTsl+FfQSdkvwr6CXkithRTsl+FfQSdkvwr6CXkjtjoBxmGzqBcAqyspKq+VhswDaAjrB8PwikucuGqM65Xesc7Onw8gq+AAEPkhbFQp4niaVAKoo5yil0vk0csFFi5zM7MwGlzrruJ7gRiaVNEanT7o77NVcszsbu2VaZ3Yk7840emrEFlUlTdSQCVPUE7GaSu2AoCSoagKstNgR3g3aFSvjmUC0w4KWbPWyrlqOMljtRQZEsMvumzONfxxqQCLHUHQg6gieoALACwAsANAB0AivAFpJJVmAiGWm+Gwjv7o06nQCE8LwGfvtonIfH4/KPEQDRbC3TSXGF7JlKtCyjwlRYuS3h7oH3nmI4WhvkOXU6HvD94yY2/vnOc45wKu9T/zGExDUXIAdLZkrWACsy7ZgABcg6ATTrHRn2Zo/Dqg/Df8AKQZi2Hcbo39JgycX4tSNnwiV1t79F8hP8ozMT/IJdfbdVH+Lg8XTIUMQ6IOtwCzLci0XxXofyfs0FF/hb0M0TBVDsjefd/WCf+oOGYEpRxL25ItFjfpo8ie1eLqEijw+se6SGq5qYJ5L7ltfzQ+IfyDMcNYC7sB4DUwjhuDpuWut1A1JJuT8xObr0eN4khc1DCqQM2QCq69ebA8tiJ2vD8EtCktNSzWFszsXeo3N3Y7k7/QRqCsTk6F9fg17lG57Pz+REV1qLIbMCD4/brOrc2FphWVWWzrdf0PUHlFKC8HGTOXh2B4Y1VS2ZVUG1z18JTH4IoQRqh2b7HxlKLO1qQJsSLDlc6XmaSTpopttYNOIcPakRcgq2xG0DjTjFdQEoqbimLMerWtp8otpoWIVRckgAdSYSSUqQQbatlZJ0FD2bNu89j0UXt5neC4/gbUwWU51Gp0swHW3OU+KSV0C5It0KZJJJmWYSSSQEeiWlJYGAHsteZvUAgtSuTFYBFTEAQjhOEas+ZvcU6/xHp8otw1BqjhF57noOZnaYektJLDQASoxt29Ck6LValrKuwhVJNIuwwzNfxjZV0m8cmcsGVQTBSQZq+8raNiPCgOo0Mxxwc0nUC5KOBlO5KkCbBTNEhQM+d/+F3C8ThlrLUoVqeY0WHaAJmIVg1tflO+FF237o8NSf2hSiWtG1bsE6RnTphdAP3PzMu5t85LSrQEDVGmiC6HwmVSa4XW46xLYzCllcFG1U6fLxHjFHYmlWUMbWIIYC/d6gc4wVspseRhOKw4rJb8a6qft8jIq/wDUPRz2JtmazZhmY5iLZrne0tgMQKbqxF8pOnzBH3mLCxsf+xnkxunZpWKGvEONO7dwsqjkDYk9SR+kfcHrs9IM2p1BJ/EBznNcJ4eazdFW2Y/oB4xpxbiK017GluBlJGyDmB4zog2rlJmMknSic/VAzG212t8r6Sskk57NkYSTy8o9SAzQmYvW6TJ3JlIrA9ZryjGQmH8Gwmd7n3Vt5tyH3iSt0Gh1wHAZFzMO81ifAchCsfW5Qv3VipyWcDxm7/FUQsuxnw6npD3meGSyzR5pFUiG7Zg4nlpdpSMCSwgeIxaKQM6LrZtVdl6WW4O/zt06BF8Wt2LqQGNu5ZWF9NPeA8bwAdgy6wLAYoVEzDQ3IYXvlYbi/wDe8KBhYng0mbT3NKtAAdxLYc2MjkG+u30Mqsn0Znj6VmzfEL+Y0MmEq2MKxKZk+Wvlzi9DYxPDGsoz47g/+Yo0OjeB5HziaddSIdSragix+U5fGYY03KHlseo5GRyR/kioy8GXDuJLTosuocliul7kgAG/hE5Mb0eIURQNMr3rEbCxJ2a/hFEUnhKwisvBJJJJBYAzzImetN1QJ3mKk5bhLMdT7pbS3ja8QMGvPLzcYpvxBW6ZlGh6i1vTaZjFE6Pdl6G1x4qeR+kMAY6kgDUkgAdSZ2fCsIEQLz3J6sdzEvA8GrN2gDWFwua2rdRbpOnQWE0hH0mTMcW+kF4emZ7+U9x7wzhVKw1+fmZW5CeIjBRpKYhyFYqpchSQoKguQNFBOgJ21mhmGIpq6MjXsyspysyGxFjZlIIPiDebGZwvH/aDEu6IirQVX4e9sQHSoWfENTZWytlKAoL2vdTvGSe0GIelhWp0qTvXpVajZ6lSkiKgUnKQjE3DX1l+OezmFakiLRpDI1MISisUGcMEudcjOQG6qzT2nhaGJKK9GmaSI3ZoVsaZAQG1rZdWdMv/AMfjEPBx/DeIYOpiKdWphgGetXqFBhTUKU6lFGpG6J3+8He+p7xOk77ECo+LVLv2S4aqXAuFeo7oqAnYkKj/ACzeMW8K9nalGrSJamUp9o5dQyvWrunZ5cnupTRAFUXJso8+iSm2d2zuVKoAhCBEIuSykDMSbi9zbuiKwbEHtFjQlDFim+WrSwrMzU17MqXDFCXXTMMrHS3vX5iNv+LUQ9RHcI1FEd+07gFIrfOCd00IJGxBEz45wZcTSamXemH980sgNRSuUq+YHMLeYsOkPeip3UHTL3gGuvMG/LwjsMUcVjfaJsThMaQMqPhMU9Cws3Z081JmfW4ZnuQttABzM6Z+KqFcIlSq9E0ldKYXPd0VwVzsqsMrX35GIsb7KVytRaVamq1VxqMKlN2y08TVNXulXFmXMRc3HhGvCOG1kes9d6btVFJSKSPTUKisv4nYkkN15QCkc5wj2jZETLhsQ74rEYqubU75sOzMQyWbvEKaK9NZ2y8jttodxOc4N7N1sPXzrVU0lU0kpVA9VqOFGqqlQkFSWAJBBFgovpOntExujegeXWLKyZWI6GH0TrMuIps3XQ/P+/0ikrQls8wzzzi+E7RMyjvKL/mXmPvMqDRlQaEcqmDw7OMkh/GMJkfT3Wuw8Oo/vrAJztU6NU7RJJJIDFqAFgDsSL+AvrL4nPc5ly20AAsFA2F5iZenWtdWLZWFiBrbUEEDbQiL+gMGMooJIA3JAHiTtCewVrhHzNyDKEzeAJO/hGHBeHHPnYi6fhFjZjtcjQfLeCTbBsf4HDBEVB+EAaczzPreGO1hrKIJMS1lPynQsIy2LWGZwPH6CPsMlliXhyZmJ8v7+kfKNIuNejm/CGYuZq0wqGaMgXcUps+SkGyK5KsdQzKBmKIfwsVDm9j7tudx42EWi9IoTeo9RHAACuXFWu723U5wTvsxHQgvEUc62vY3BVhujg3Vh8jy56jnMXr51w7kAZnFxyVmpVAR/VpEMJqMeRG3n4mZ0tzY8jsb/I3mzDp4ekHxWKVTlsXZgcqJbMQN2JJAVdRqSBy3NpnJZtlJ4oKTbn56mA8RoVGdGT3QGzDMVuTtpzgtTi9RGyulFehfEWLaX17mhsDvp4wvCcTp1CU1VwLlGyklb2zKQSGXbUHS4va8pSTVJgm4u6ARg6v8X4fxk7EXG+xt9Z4mErA3Nzqv47XtvpyvvaOBPAwOxGl7+Ft4y1yv9AvDqdRVbPuWJGpawsNBfzhl4s4Xiaj52ZrqWGQEAZQe9a4GvdZN+YMY3gTJtvJom81xKZlI52uPmNZiphNMykQ8CjDvpGGH3gVSnlZgNr3HyOsJwx1kRw6G9HvGcPnpkjde8PEcx6fpOVnb3nJ8Tw3ZuVGx1X8p/bbyi5Y+hB+AkkkkxNRTKOZZjMmMljIZ2PCcLkpqvM95vzH9tB5TmuEYfPVUEaL3j8ht9bTtEE0416TJl1EF4k9lMLivHPmZV6kenP6TRvBEVkN4VSso9fMxrBMGukLlwVImTyeNBK7WhTbRNxinUZbIdCGDqMt3U2GhPMa6XG/hYuQRVsLoVQwBBBB2IsQR4GKKWF7VHDaKXxIDsAxRTUfvUhsvUObk9LWhvClIQXBF2drEEEBnZhcHbQie8O0V05pUdendJzpb+R0HzBl8CTeSOXCwa8Mrl0BY3YM6MdBmKOVzaaa2B84q4XX7ZGrNmRXZyxvZiiMwVbjVUVRsN2LeNyqVRKVd1AChqC1bKMoLozq7WGlyCmvPL4TkOBYrKEzOyo6oHsRlvYWdgRYjQA+BOuky54Oml4XxtbOxoYVCLsi66hCq2Qchl2zdT18BB8b3FJH/ACilVD0S5FRB4Zcw8A46CG/4o+Bv66f/AOoLjcNVqKwGRSaVVLXd7l8tuS2936zgjJqR0NYGYOsT400OwYtSAapmPaLZXUOS2rCzAqhvb+GFvVNSiXS4L0iyX3BdLrp11ih+zfIjqSXzB2pqcPUqYhAtPNkDg2yZjYg91T0nZKUo1RlFJ7GOCoGmtNVqFsyszo4BNNtC2VhY+834r3AOsZCAcMd3Uu/vE5PdCXCFhfLmawLFuZ0tDljTbVsl7NFMIpGDKZtSMtCZhxRbZW/lP6j7yYM6zfHpmpsOYGYfNdYJgH2ieJAtDGrtFfGKWennG6H/ACnQ/Y+sa1h3YHQIN1OzAg/IxyV4FH9nLSS9emVZlO6kj0lJzG4mcykjGe00LMFG7EAfMm0kZ0Xs3hsqFzu5sPyr/vf0EfJMKVMIoUbKAB5TZDN4qkZSyXc6RTR71Un4R9Tp+8Z4hrKTF3C1vmbq30H/AHMJbSHHTY6w7QhYEhhiTWLM2R4txWIRLZza+g3P6bDxjNli3HUFfusL63FiQVPUEag/vCQ41eTDhmKFVSwFtbaHNcEBlN/kw+sidzEOupFRO0Bse6yZKbC/SxQgfm8tcBhAgazMczZrta/uhbaAfDKcQ7j0n5BzTY9Fq2C/51pjzlcLqSFypNOgPjeFdwwQ2c03y21JAujqNRqVqta+mZVJ2nD8Lt2SDXuDJ3gVbuEocwOoPd1Bn04gen0nC8YYCvU/+y3mwW3+oes35orZlxSf1NsDxirTUL3XUbK9wVHQMOXgQfKbYr2rdFJFJBa1yXZ8o3JyhRmsNQLi5sLi8Tn3h+Vv1WBcTrZKVZtyoJA8ci2+s5HwxbujoUno+mUKCoiIpJCqqgm1yALXM2qUUYDMitbbMqtb1mGDX/Cp8/8ADp+fcELG0KJB26S6Sj7zRIij0S6GUWWEZIYsTYTusy/CzL5A6RvTMVYtctc/xKjefun/AE/WOXjCPqG76rFgazecZIbr5RZWGscgQBx2lZww2df8y6H6WiyPeJJmoX+FlPkdD+oiKc81+RrHQjMaez2HzVcx2RSf5joPv6RWZ0/s5Ry0i3N2P9K6D65pMVbHJ4GssplSZ4GmxB5j3shmXDlsi/K/rr95lxN+5aGUksoHQAekncg1E0VowpbRYDrGdLaaxIZKr2F4sZyTCcc+kDQ3ik8jisDKjtBOPUlbD1M22UE20IysDp46TVrgaSnbXBDAEEWIIBBHQiUnRLR5SLZRm96wzW+LnbznIe0/C2WoaiaitUo3vstVciBfAMEHnedoK69BLGohFiqkHkQDN3zRkqM4wcXZ80tdgf4T9SP2jX2f4WXq9o6nIFzLfZn79MDxHvN/T1nQ4ngOGdy/fUs12CNlDddCDa99SLGN6ZpqAqqoAAAAAsANABIjKKdstptUhdw9QuekBYU3soGlqbgOgA5KMxQfkjBlsJoqpe4AubAkAXIF7AnwufUz2otxIkrbaBayLWbWbINJR6RBhFASEslNmN5qolK9Oxvykp1IegF0oDxVbNTbxdfUAj/SYbTgnHB/hZvhdG8s2U/RjKl9WC2GUD3fKLcQ2sMw9QZL+BgeDp52LHYHTxMlu6Q0qtm2KT/273+G/oQZzE63iItRf8hnJTPl2ioPYjnYYA2o08ouMi7def1vOOnT+zle9IrzRiP5W1H1vM4bKkGjEXnvaTZ6aP7w16jQ+sGqYRh7hzeB0P8AvNHaFgwxLZmUdWX9Y1XaIKWIvWVCCGudD4KT9p0CDSKDTthJVRmN41Xbyik7xrTN18ptAzkA4k3EFpnWE14Iu8iWxrQ1tcCBVUsYZhzpPHWW1aEnQEJ4wM3anJkkUOwbOwnvambC0t2QPKFBYOMQRCaeLMGq0bTPLFbQ6TGnaIwmPbqIDrPGBj7MXUa0aytpKYjD21WLUciMsLib6GUpJ4Ymmj3DVJOJJmo1F6o/rYkTzJla4mWPxHdKjUsCAOpItG3+LsFsCwFRnpKo/Eoueg5x1QphQANAIDwnBdmipe5A1PU87eEYrDji6VhJ5dAvFzai/wAgPVgJyc6fjz2onxZB9/tOYmXN9i+PQiMZ+zmIy1Sp2dbfzDUfeKzKJUKkEGxBBB6EbTFOmWzv5aD4TEioiuPxD0PMes3Y6TZEAZRWqKxAuuax5i4IMZLtFVK4cef6GNgNIRCRk4h2FbSBGFUNppHDJejHFraAZ41qm+8V4hMrSZLI4jHBvCHEV4epYxopuJcXgUlkyImVRrTYwTENEwR5TOsLSCYdYaBCIMHxTWEBQ3muPqW0mWG1kN5KWjdUlaqwjLK1l0hQrBAJZdJJ6TEUENW0kw9Ek5m3P+UfvM6CX1PkPvGFFZcVZDwaostIJDNUQKPaN+4g6sT6D/ec7HXtI/eQdFY+pA+0STn5Psax0JGmRmjmZGYGh0HsvjACaTfi7yfmA7w9BfyM6JxPn1OoVYMpsQQQehE7rBYpaiB157j4WG4mkJWqFJFALMD4xoh0iiq+u20ZI00iyGRoVQMHm1PSWiWXqpA8SkOLgiYVhcbfpBrAIXLGOFqaWgRpmbUVI6SVhjlkOaLcS3eh2tt4FXpgnnHISNsMBCndQL3mGGQdJpjPdjWEDyxPiXzvflyhWFpwTJrD8OrW0MzWy3oIVNZTEmwmgLDmPSB4qoSNQPIy3hEJWzA1JakuY35D6mDLqbf2IyTKBYcpCyW8F0h1IaQJRD02m0TOR7aS0tJLIOX9oHvVt8KKP1P3iuE4+rnqO3Vjb5DQfQQe4nJJ22bpUhAZUy7CUMyLPIw4PxE0X19xrBh06MPEQCSGhnckA95TcEXBGoIm2GqaW6aft9JxOG4hVpiyPp0IDDyB2m2H4rUFRXZiQNwNAVO+g5y1MjqdsVN9IQgMwouCARrsfmIXRm8TNng0lXmOIxdNTYsPK5/SCvxel1+qj9TBySBRYTUlqRi9uLU/iXzdP3nicTp8mT+tZPZD6sauYM2pmH/EQdin9QMGfiCKdXQH5rByQKLHeHEz4g9rfKJ/+KL/ANZfJlEyfHUzqaiE+LgxOaqhqLsNQaxjSXSIFx1MbVE82WFUuNoNyh+TgQjJejkmxrWawi2o82PEVcbHXoQRBGMJST0KKaPC9teYh+SAU0zOB4/QRxkhFWOToH7QiEU8ZpaWSgJ7XwwKm00SaM7TPaDsTcnyluIYnJTZudrD8x0H9+EXUsUENm2va55RdxjiHaMFX3F2/iPWJzqIdci68l5WSYGomaUIl55aSWUkliJW0QEkktPbRgOeHceNNMhTMRopvYZeQMKxftLdLJmDEdAAvnznOWnkrsyeqPalRmN2JPzJMztLySKKK2nlpe0loUBS0tPbSWhQHkgEtaQLCgPLSS1pLQA1w2JdDdDbw3B+YjFuNMwsUHkSB6WivLJaFiobYPjLIfdG1gTdsvlH+G4ySASgYdUP2M4sS9Koym6sQfDn8+sqMmtCcUz6Bh+KUibFsp/iFvrtC8TiERCxItbS34jyAnBUsbUO4VvG2X9IY2JdlCHRVJIAudTNVyuskOCPK1UuxY7kk/L5TOSSZlkkkkgAolZJJBR4ZJJICIJ7JJGM8MrJJACSSSQAkkkkAPRJJJACwnonkkAJLCSSAHskkkAPJZZJICDsPtNpJI/BEEkkkYEkkkgB/9k=" class="card-img-top" alt="...">
                     <div class="card-body">
                        <p class="card-text"><b>Sweater New </b> &nbsp;&nbsp;
                            <span>Harga 78000</span><br>
                         </p>
                     </div>
                   </div>  
               </div> 
               <div class="col-md-4 mb-3">
                 <div class="card border-0 shadow  " style="width: 18rem;">
                     <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                     <div class="card-body">
                        <p class="card-text"><b>Sweater New </b> &nbsp;&nbsp;
                            <span>Harga 78000</span><br>
                         </p>
                     </div>
                   </div>  
               </div> 
            </div>   
         </div>
    </center>
    

    <br><br>
    
@endsection