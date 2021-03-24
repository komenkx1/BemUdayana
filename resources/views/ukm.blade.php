@extends('layouts/master',['title'=>'Ukm'])
@section('content')
<!-- Hero Start -->
<section class="position-relative d-block vh-100" id="home">
    <div class="slide-inner slide-bg-image d-flex align-items-center slider-lembaga"
        style="background: center; height: 100%; background-color:#d7d3c1;">
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="title-heading text-center">
                        <p class="heading animate__animated animate__fadeInLeft" style="margin-top:60px">Unit Kegiatan
                            Mahasiswa</p>
                        <p class="heading animate__animated animate__fadeInLeft animate__slow">Universitas Udayana</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero End -->

<!-- START LEMBAGA -->
<section class="section" style="background-color: #E0E0E0;">
    <div class="container">
        <div class="row card-lembaga" style="margin-top: -200px">


            @foreach ($ukms as $ukm)

            <div class="col-sm-3" data-aos="fade-up">
                <a href="{{Route('ukm.detail',['ukm'=>$ukm->slug])}}">
                    <div
                        class="mt-4 feature-transform text-center shadow position-relative d-block overflow-hidden bg-white rounded">
                        <img src="{{$ukm->image}}" class="img-fluid" alt="">
                        <div class="content py-3 text-center">
                            <p class="text-center text-dark" style="font-weight: bold;">{{$ukm->nama_ukm}}</p>
                            <p class="text-primary read-more">Selengkapnya <i class="mdi mdi-chevron-right"></i></p>
                        </div>
                    </div>
                </a>
            </div>
            <!--end col-->


            @endforeach


        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- END LEMBAGA -->
<!-- END LEMBAGA -->
@endsection