@extends('layouts/master',['title'=>'Program Kerja'])
@section('content')
<!-- Hero Start -->
<section class="position-relative d-block vh-100" id="home">
    <div class="slide-inner slide-bg-image d-flex align-items-center"
        style="background: center; height: 100%; background-image: url('/assets/bem_images/slider/yellow-bg.png');">
        <div class="container bem">
            <div class="row mt-4">
                <div class="col-md-8">
                    <div class="title-heading">
                        <p class="heading animate__animated animate__fadeInLeft" style="margin-top:60px">Program Kerja
                        </p>
                        <p class="heading animate__animated animate__fadeInLeft animate__slow">BEM PM Udayana 2020</p>
                        <p class="para-desc  animate__animated animate__fadeInLeft animate__slower"
                            style="color:#be5e53; font-family:photograph_signature; font-size:25px">"Bersama Ciptakan
                            Karsa dalam Semangat Reparasi Cita untuk Udayana dan Indonesia"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero End -->

<section class=" mb-5">
    <div class="container">
        <h2 class="text-center museo mb-2 mt-4">Program Kerja</h2>
        <div class="row">


            @foreach ($prokers as $proker)

            <div class="col-lg-12 col-md-6 mt-4 pt-2" data-aos="fade-up">
                <div class="job-listing p-4 rounded shadow position-relative overflow-hidden">
                    <div class="row align-items-center">

                        <div class="col-lg-2 col-12 ml-lg-3">
                            <div class="text-center text-lg-left">
                                <img src="{{$proker->image}}" class="avatar avatar-ex-large" alt="">
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-12 mt-4 mt-lg-0">
                            <div class="content text-center text-lg-left ml-lg-3">
                                <h4 class="title">{{$proker->nama_proker}}</h4>
                                <p class="text-justify">{{$proker->deskripsi_proker}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Catagories & Features Job End -->
@endsection