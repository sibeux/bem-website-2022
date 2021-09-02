@extends('pages.landing.main')
@section('content')

<!-- Start Banner Hero -->
<div class="banner-wrapper bg-light">
    <div class="index-banner banner-vertical-center-index container-fluid pt-5">

        <!-- Start slider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">

                </div>
                <div class="carousel-item">

                </div>
                <div class="carousel-item">

                    </div>

                </div>
            </div>
{{--            <a class="carousel-control-prev text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">--}}
{{--            </a>--}}

{{--            <a class="carousel-control-next text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="next">--}}
{{--            </a>--}}
        </div>
        <!-- End slider -->
</div>

<!-- End Banner Hero -->



<!-- Start Service -->
<section class="service-wrapper py-3">
    <div class="container-fluid pb-3">
        <div class="row">
            <h2 class="h2 text-center col-12 py-5 semi-bold-600">VISI DAN MISI</h2>
        </div>
        <div class="service-heading col-10 col-lg-9 text-start float-end light-300">
            <h2 class="h3 pb-4 typo-space-line">VISI</h2>
        </div>
        <h5 class="service-footer col-10 offset-2 col-lg-9 offset-lg-3 text-start pb-3 text-muted px-2">
            Mewujudkan BEM FASILKOM UNEJ sebagai lembaga eksekutif yang dapat mengayomi dan merangkul seluruh elemen fakultas untuk menciptakan FASILKOM UNEJ yang lebih bersinergi
        </h5>
        <div class="service-heading col-10 col-lg-9 text-start float-end light-300">
            <h2 class="h3 pb-4 typo-space-line">MISI</h2>
        </div>
        <h5 class="service-footer col-10 offset-2 col-lg-9 offset-lg-3 text-start pb-3 text-muted px-2">
            Menjalin hubungan baik dengan menjunjung rasa kekeluargaan baik dalam internal BEM maupun dengan seluruh civitas akademika FASILKOM UNEJ
            <br><br>
            Memfasilitasi dan mendukung seluruh mahasiswa FASILKOM dalam rangka membawa nama baik FASILKOM
            <br><br>
            Menjalankan dan melanjutkan program kerja yang berkualitas dan tepat sasaran sesuai dengan tupoksi BEM FASILKOM
            <br><br>
            Membangun sumber daya yang berintegritas dan menjunjung tinggi profesionalisme dalam berorganisasi
            <br><br>
            Berkoordinasi dengan pihak eksternal di luar FASILKOM dalam rangka meningkatkan kualitas program kerja dan SDM
        </h5>
    </div>

{{--    <div class="service-tag py-5 bg-secondary">--}}
{{--        <div class="col-md-12">--}}
{{--            <ul class="nav d-flex justify-content-center">--}}
{{--                <li class="nav-item mx-lg-4">--}}
{{--                    <a class="filter-btn nav-link btn-outline-primary active shadow rounded-pill text-light px-4 light-300" href="#" data-filter=".project">All</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item mx-lg-4">--}}
{{--                    <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".graphic">Graphics</a>--}}
{{--                </li>--}}
{{--                <li class="filter-btn nav-item mx-lg-4">--}}
{{--                    <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".ui">UI/UX</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item mx-lg-4">--}}
{{--                    <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".branding">Branding</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}

</section>

{{--<section class="container overflow-hidden py-5">--}}
{{--    <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">--}}

{{--        <!-- Start Recent Work -->--}}
{{--        <div class="col-xl-3 col-md-4 col-sm-6 project ui branding">--}}
{{--            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">--}}
{{--                <img class="service card-img" src={{asset("template-assets/img/services-01.jpg")}} alt="Card image">--}}
{{--                <div class="service-work-vertical card-img-overlay d-flex align-items-end">--}}
{{--                    <div class="service-work-content text-left text-light">--}}
{{--                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">UI/UX design</span>--}}
{{--                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div><!-- End Recent Work -->--}}

{{--        <!-- Start Recent Work -->--}}
{{--        <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">--}}
{{--            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">--}}
{{--                <img class="card-img" src={{asset("template-assets/img/services-02.jpg")}} alt="Card image">--}}
{{--                <div class="service-work-vertical card-img-overlay d-flex align-items-end">--}}
{{--                    <div class="service-work-content text-left text-light">--}}
{{--                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Social Media</span>--}}
{{--                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div><!-- End Recent Work -->--}}

{{--        <!-- Start Recent Work -->--}}
{{--        <div class="col-xl-3 col-md-4 col-sm-6 project branding">--}}
{{--            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">--}}
{{--                <img class="card-img" src={{asset("template-assets/img/services-03.jpg")}} alt="Card image">--}}
{{--                <div class="service-work-vertical card-img-overlay d-flex align-items-end">--}}
{{--                    <div class="service-work-content text-left text-light">--}}
{{--                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Marketing</span>--}}
{{--                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div><!-- End Recent Work -->--}}

{{--        <!-- Start Recent Work -->--}}
{{--        <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">--}}
{{--            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">--}}
{{--                <img class="card-img" src={{asset("template-assets/img/services-04.jpg")}} alt="Card image">--}}
{{--                <div class="service-work-vertical card-img-overlay d-flex align-items-end">--}}
{{--                    <div class="service-work-content text-left text-light">--}}
{{--                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Graphic</span>--}}
{{--                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div><!-- End Recent Work -->--}}

{{--        <!-- Start Recent Work -->--}}
{{--        <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">--}}
{{--            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">--}}
{{--                <img class="card-img" src={{asset("template-assets/img/services-05.jpg")}} alt="Card image">--}}
{{--                <div class="service-work-vertical card-img-overlay d-flex align-items-end">--}}
{{--                    <div class="service-work-content text-left text-light">--}}
{{--                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Digtal Marketing</span>--}}
{{--                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div><!-- End Recent Work -->--}}

{{--        <!-- Start Recent Work -->--}}
{{--        <div class="col-xl-3 col-md-4 col-sm-6 project branding">--}}
{{--            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">--}}
{{--                <img class="card-img" src={{asset("template-assets/img/services-06.jpg")}} alt="Card image">--}}
{{--                <div class="service-work-vertical card-img-overlay d-flex align-items-end">--}}
{{--                    <div class="service-work-content text-left text-light">--}}
{{--                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Market Research</span>--}}
{{--                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div><!-- End Recent Work -->--}}

{{--        <!-- Start Recent Work -->--}}
{{--        <div class="col-xl-3 col-md-4 col-sm-6 project branding">--}}
{{--            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">--}}
{{--                <img class="card-img" src={{asset("template-assets/img/services-07.jpg")}} alt="Card image">--}}
{{--                <div class="service-work-vertical card-img-overlay d-flex align-items-end">--}}
{{--                    <div class="service-work-content text-left text-light">--}}
{{--                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Business</span>--}}
{{--                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div><!-- End Recent Work -->--}}

{{--        <!-- Start Recent Work -->--}}
{{--        <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic branding">--}}
{{--            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">--}}
{{--                <img class="card-img" src={{asset("template-assets/img/services-08.jpg")}} alt="Card image">--}}
{{--                <div class="service-work-vertical card-img-overlay d-flex align-items-end">--}}
{{--                    <div class="service-work-content text-left text-light">--}}
{{--                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Branding</span>--}}
{{--                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div><!-- End Recent Work -->--}}

{{--    </div>--}}
{{--</section>--}}
<!-- End Service -->


<!-- Start View Work -->
<section class="bg-secondary">
    <div class="container py-5">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-7 col-12 text-light pt-2">
                <h3 class="h4 light-300"><b>"Your time is limited, so don't waste it living someone else's life"</b></h3>
                <p class="light-300">Steve Jobs</p>
            </div>
        </div>
    </div>
</section>
<!-- End View Work -->

<!-- Start Recent Work -->
<section class="py-5 mb-5">
    <div class="container">
        <div class="recent-work-header row text-center pb-5">
            <h2 class="col-md-6 m-auto h2 semi-bold-600 py-5">Sosial Media Kami</h2>
        </div>
        <div class="row gy-5 g-lg-5 mb-4">
            <div class="col-md-4 mb-3">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CS-wvFwJaSq/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="13" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CS-wvFwJaSq/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CS-wvFwJaSq/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Fakultas Ilmu Komputer (@bemilkomunej)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
            </div>
            <div class="col-md-4 mb-3">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CS_ulj2JhSz/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="13" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CS_ulj2JhSz/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CS_ulj2JhSz/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Fakultas Ilmu Komputer (@bemilkomunej)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
            </div>
            <div class="col-md-4 mb-3">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CTBicOXJGYJ/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="13" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CTBicOXJGYJ/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CTBicOXJGYJ/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Fakultas Ilmu Komputer (@bemilkomunej)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
            </div>
        </div>
{{--        <div class="row gy-5 g-lg-5 mb-4">--}}

{{--            <!-- Start Recent Work -->--}}
{{--            <div class="col-md-4 mb-3">--}}
{{--                <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">--}}
{{--                    <img class="recent-work-img card-img" src={{asset("template-assets/img/recent-work-01.jpg")}} alt="Card image">--}}
{{--                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">--}}
{{--                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">--}}
{{--                            <h3 class="card-title light-300">Social Media</h3>--}}
{{--                            <p class="card-text">Ullamco laboris nisi ut aliquip ex</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div><!-- End Recent Work -->--}}

{{--            <!-- Start Recent Work -->--}}
{{--            <div class="col-md-4 mb-3">--}}
{{--                <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">--}}
{{--                    <img class="recent-work-img card-img" src={{asset("template-assets/img/recent-work-02.jpg")}} alt="Card image">--}}
{{--                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">--}}
{{--                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">--}}
{{--                            <h3 class="card-title light-300">Web Marketing</h3>--}}
{{--                            <p class="card-text">Psum officia anim id est laborum.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div><!-- End Recent Work -->--}}

{{--            <!-- Start Recent Work -->--}}
{{--            <div class="col-md-4 mb-3">--}}
{{--                <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">--}}
{{--                    <img class="recent-work-img card-img" src={{asset("template-assets/img/recent-work-03.jpg")}} alt="Card image">--}}
{{--                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">--}}
{{--                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">--}}
{{--                            <h3 class="card-title light-300">R & D</h3>--}}
{{--                            <p class="card-text">Sum dolor sit consencutur</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div><!-- End Recent Work -->--}}

{{--            <!-- Start Recent Work -->--}}
{{--            <div class="col-md-4 mb-3">--}}
{{--                <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">--}}
{{--                    <img class="recent-work-img card-img" src={{asset("template-assets/img/recent-work-04.jpg")}} alt="Card image">--}}
{{--                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">--}}
{{--                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">--}}
{{--                            <h3 class="card-title light-300">Public Relation</h3>--}}
{{--                            <p class="card-text">Lorem ipsum dolor sit amet</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div><!-- End Recent Work -->--}}

{{--            <!-- Start Recent Work -->--}}
{{--            <div class="col-md-4 mb-3">--}}
{{--                <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">--}}
{{--                    <img class="recent-work-img card-img" src={{asset("template-assets/img/recent-work-05.jpg")}} alt="Card image">--}}
{{--                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">--}}
{{--                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">--}}
{{--                            <h3 class="card-title light-300">Branding</h3>--}}
{{--                            <p class="card-text">Put enim ad minim veniam</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div><!-- End Recent Work -->--}}

{{--            <!-- Start Recent Work -->--}}
{{--            <div class="col-md-4 mb-3">--}}
{{--                <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">--}}
{{--                    <img class="recent-work-img card-img" src={{asset("template-assets/img/recent-work-06.jpg")}} alt="Card image">--}}
{{--                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">--}}
{{--                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">--}}
{{--                            <h3 class="card-title light-300">Creative Design</h3>--}}
{{--                            <p class="card-text">Mollit anim id est laborum.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div><!-- End Recent Work -->--}}

{{--        </div>--}}
    </div>
</section>
<!-- End Recent Work -->

@endsection
