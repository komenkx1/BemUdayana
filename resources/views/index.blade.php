@extends('layouts/master',['title'=>'BEM PM UDAYANA'])
@section('content')

<!-- Hero Start -->
<section class="position-relative d-block vh-100" id="home">
    <div class="slide-inner slide-bg-image d-flex align-items-center"
        style="background: center; height: 100%; background-color:#d7d3c1;">
        <div class="container bem">
            <div class="row mt-4">
                <div class="col-md-8">
                    <div class="title-heading">
                        <p class="heading animate__animated animate__fadeInLeft" style="margin-top:60px">Badan Eksekutif
                            Mahasiswa (BEM)</p>
                        <p class="heading animate__animated animate__fadeInLeft animate__slow">Pemerintahan Mahasiswa
                        </p>
                        <p class="heading animate__animated animate__fadeInLeft animate__slower">Universitas Udayana
                            2020</p>
                        <p class="para-desc" style="color:#be5e53; font-family:photograph_signature; font-size:25px">
                            "Bersama Ciptakan Karsa dalam Semangat Reparasi Cita untuk Udayana dan Indonesia"</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-easing="ease-in-sine" data-aos-delay="300"
                    data-aos-duration="1000">
                    <img src="/assets/bem_images/a1.png" width="100%" class="align-items-center">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero End -->

<!-- HOTLINE MAHASISWA -->
<div style="background-color: #d7d3c1;">
    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-4 animate__animated animate__fadeInUp" style="z-index: 1;">
                    <form action="{{Route('hotline.store')}}" method="POST" class="getaquote-form">
                        @csrf
                        <h3 style="font-family:museo700">Hotline Mahasiswa</h3>
                        <div class="wrap">
                            @if(session()->has('success'))
                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                <strong>Data disimpan!</strong> Aspirasi kawan-kawan akan dibahas pada sesi Hotline
                                mahasiswa setiap hari <strong>rabu</strong> dan <strong>kamis</strong>.
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                            </div>
                            @endif
                            <!--PHP Hotline Status-->
                            <!-- End of PHP Hotline Status-->

                            <div class="form-group">
                                <input required type="text" class="form-control" placeholder="Email, WA atau ID Line"
                                    name="email_ht">
                            </div>
                            <div class="form-group">
                                <input required type="text" class="form-control" placeholder="Nama" name="nama_ht">
                            </div>
                            <div class="form-group">
                                <textarea required cols="30" rows="7" class="form-control" placeholder="Pesan"
                                    name="pesan_ht"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary py-3 px-5">Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!--COUNTER START-->
                <div class="row col-md margincus animate__animated animate__fadeInLeft" style="margin-top:-20px">
                    <div class="col-1">
                    </div>
                    <div class="col-11 hotline">
                        <p style=" font-family:museo700; color:#be5e53; font-size:50px;">#KuyTanyeAje</p>
                        <p style="font-weight:bold;" class="hotline-desc">Hotline mahasiswa dibuka pada Hari Minggu dan
                            Rabu. Selain lewat website, kalian juga bisa curhat lewat DM Instagram dan Line akun BEM PM
                            Udayana dari pukul 17.00 sampai 19.00 WITA. Jangan lupa sertakan hastag #KuyTanyeAje ya!⁣⁣
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- END HOTLINE MAHASISWA -->

<!-- Start Features -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title mb-4 pb-2">
                    <h6 data-aos="fade-up" class="text-muted" style="font-family:museo700">Spirit Utama</h6>
                    <p data-aos="fade-up" data-aos-delay="200" class="mb-2 reparasi"
                        style="font-family:museo700; font-size: 30px">Reparasi Cita Udayana</p>
                    <p data-aos="fade-up" data-aos-delay="400" class="mb-0"
                        style="font-family:segoe script; font-size:14px">Cita Karsa, Ruang, dan Karya,
                        Reparasi dari Udayana untuk Indonesia</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="400"
                class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="feature feature-transition p-4 py-5 shadow rounded text-center"
                    style="background-color: #f3c066">
                    <img src="/assets/bem_images/spirit/karsa.svg" class="avatar avatar-small" alt="">
                    <h5 class="title mt-3 museo">Cita Karsa</h5>
                    <p class="">BEM PM menjadi simbol adanya daya dan kekuatan jiwa yang mendorong elemen mahasiswa
                        untuk berkehendak dan bergerak</p>
                </div>
            </div>
            <!--end col-->

            <div data-aos="fade-down" data-aos-duration="600" data-aos-delay="400"
                class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="feature feature-transition p-4 py-5 shadow rounded text-center"
                    style="background-color: #f3c066">
                    <img src="/assets/bem_images/spirit/ruang.svg" class="avatar avatar-small" alt="">
                    <h5 class="title mt-3 museo">Cita Ruang</h5>
                    <p class="">BEM PM menjadi sebuah wadah untuk bertemu, saling betukar pikiran, dan memastikan ruang
                        itu cukup nyaman menampung banyak entitas dan spektrum</p>
                </div>
            </div>
            <!--end col-->

            <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="400"
                class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="feature feature-transition p-4 py-5 shadow rounded text-center"
                    style="background-color: #f3c066">
                    <img src="/assets/bem_images/spirit/karya.svg" class="avatar avatar-small" alt="">
                    <h5 class="title mt-3 museo">Cita Karya</h5>
                    <p class="">Menumbuhkan BEM PM sebagai<br> inisiator penciptaan hasil pemikiran<br>dalam bentuk
                        karya<br>yang berkontrbusi nyata</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end conatiner-->
</section>
<!--end section-->
<!-- End Features -->

<!-- VIDEO -->
<section class="bg-half-170 bg-digital-marketing border-bottom d-table w-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title-kenal" data-aos="fade-in">
                    <h2 class="kenal text-light mb-4 museo">Kenal Lebih Dekat.</h2>
                    <p class="text-white-50 para-desc mb-0">Yuk kenalan lebih dekat dengan BEM PM Universitas Udayana
                        Tahun 2020 di Kabinet Reparasi Cita, supaya bisa sama-sama menuju Udayana dan Indonesia yang
                        lebih maju.</p>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0" data-aos="fade-in">
                <div class="position-relative ml-lg-4">
                    <img src="/assets/bem_images/dekat.jpg" class="img-fluid digital-hero rounded-pill" alt="">
                    <div class="play-icon">
                        <a href="https://www.youtube.com/watch?v=H-rNI1nr5vI" class="play-btn video-play-icon">
                            <i class="mdi mdi-play mdi-24px text-primary rounded-circle bg-primary shadow"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- VIDEO End -->
<section>
    <!-- START BLOG -->
    <div class="jumbotron jumbotron-fluid" style="background-color: white">
        <div class="container">
            <h1 data-aos="fade-up" class="display-4" style="font-family:museo700">Blog Kami</h1>
            <div class="row">
                <div class="row">
                    @foreach ($posts as $post)

                    <div data-aos="fade-up" class="col-lg-4 col-md-6 col-12 mt-4 pt-2 mb-4">
                        <a href="blogposts/single-pagefefb.html?slug=Info-KKN-PPM-Universitas-Udayana-Periode-XXII-Januari---Maret-2021"
                            class="text-dark read">
                            <div class="card h-100 blog-post shadow rounded position-relative overflow-hidden"
                                style="background-color:white;">
                                <div class="blog-img overflow-hidden position-relative">
                                    <img src="{{$post->image}}" class="img-fluid" alt="">
                                    <div class="overlay bg-dark"></div>
                                    <div class="d-flex author-desc align-items-center">
                                        <img src="/assets/bem_images/icon.png"
                                            class="img-fluid avatar avatar-md-sm rounded-pill mr-2 shadow" alt="">
                                        <div class="author">
                                            <p class="text-white h6 name m-0">BEM PM Udayana</p>
                                            <p class="text-white-50 small mb-0">{{$post->ptime}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative">
                                    <div class="shape overflow-hidden text-white">
                                        <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="blog-content p-4">
                                    <h5 class="title text-dark">{{$post->ptitle}}</h5>
                                    <p class="text-muted item">{!!$post->psumm!!}</p>

                                    <div class="post-meta d-flex justify-content-between pt-3 border-top">
                                        Baca Selanjutnya &rarr;
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end post-->
                    </div>
                    <!--end col-->


                    @endforeach


                </div>
                <!--end col-->
            </div>
            <center data-aos="fade-in">
                <a href="{{Route('blog')}}" class="btn btn-primary mt-4" style="text-align:center;">Lihat Blog
                    Lainnya</a>
            </center>
        </div>
    </div>
</section>
<!-- END BLOG -->
<section style="margin-bottom: 50px" data-aos="zoom-out-down">
    <div class="container card">
        <div id="calendar" class="col-centered p-5">
        </div>
    </div>
</section>
<!-- JURNAL -->
@if($jurnal)
<section>
    <div class="container" data-aos="zoom-out-down">
        <div class="row" style=" margin-bottom: 100px">
            <div class="col-lg-5 col-md-5 col-12">
                <img class="image-jurnal" src="/assets/bem_images/jurnal.png" width="400px">
            </div>
            <div class="col-lg-7 col-md-7 col-12" style="margin-top: 50px">
                <h2 class="display-4 museo">{{$jurnal->title}}</h2>
                <h4 class="museo">Volume {{$jurnal->volume}}</h4>
                <p>{{$jurnal->ringkasan}}</p>
                <a href="{{$jurnal->link}}"
                    class="video-play-icon watch text-light mb-2 btn btn-pills btn-light mb-2">Baca Disini</a>
            </div>
        </div>

    </div>
</section>
<!-- END JURNAL -->
@endif
<!-- PODCAST -->
<section style="margin-bottom: 50px">
    <div class="container" data-aos="fade-right">
        <div class="row">
            <div class="col-12">
                <h2 class="display-4 museo">Udayana Podcast</h2>
                <p style="margin-bottom: 30px">Sebuah persembahan dari BEM PM Udayana untuk kawan-kawan mahasiswa
                    Udayana. Di sini kita akan membawakan topik maupun isu yang sedang hangat diperbincangkan di seputar
                    dunia mahasiswa maupun yang sedang terjadi diantara kita secara santai. Selamat mendengarkan.</p>
            </div>
            <div class="col-12" style="margin-bottom: 50px">
                <iframe src="https://open.spotify.com/embed-podcast/episode/6eip9z7yL5Inhx8FwuNaUy" width="100%"
                    height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- END PODCAST -->

@endsection
@section('footer')
<script src="/assets/fullcalendar/dist/fullcalendar.min.js"></script>
<script>
    $(document).ready(function() {

$('#calendar').fullCalendar({
header: {
left: 'prev,next today',
center: 'title',
right: 'month,basicWeek,basicDay',
textColor: 'white'
},

 eventLimit: true, // allow "more" link when too many events
    selectable: true,
    selectHelper: true,

events: [

    @foreach($events as $event)
    @php
    $start = explode(" ", $event->start);
    $end = explode(" ", $event->start);
    if ($start[1] == '00:00:00') {
            $start = $start[0];
          } else {
            $start = $event['start'];
          }
          if ($end[1] == '00:00:00') {
            $end = $end[0];
          } else {
            $end = $event['end'];
          }
    @endphp
    {
    id: '{{$event->id}}',
    title: '{{$event->title}}',
    start: '{{$event->start}}',
    end: '{{$event->end}}',
    color: '{{$event->color}}',
  },
  @endforeach
      ]
});



});
</script>
<script>
    $(function() {
 
         $('.item').each(function(event) {
             var max_length = 100;
 
             if ($(this).html().length > max_length) {
 
                 var short_content = $(this).html().substr(0, max_length);
                 var long_content = $(this).html().substr(max_length);
 
                 $(this).html(short_content +
                     '<a href="#" class="read_more">...Read More</a>' +
                     '<span class="more_text" style="display:none;">' + long_content + '</span>');
 
                 $(this).find('a.read_more').click(function(event) {
 
                     event.preventDefault();
                     $(this).hide();
                     $(this).parents('.item').find('.more_text').show();
 
                 });
 
             }
 
         });
 
 
     });
</script>
@endsection