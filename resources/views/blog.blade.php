@extends('layouts/master',['title'=>'Blog'])
@section('content')
<!-- START BLOG -->

<!-- Hero Start -->
<section class="swiper-slider-hero position-relative d-block vh-100" id="home">
    <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
        <div class="swiper-slide d-flex align-items-center overflow-hidden">
            <div class="slide-inner slide-bg-image d-flex align-items-center"
                style="background: url(/assets/mainpage/blog_images/red-bg.png) center center / cover; height: 100%;"
                data-background="/assets/mainpage/blog_images/red-bg.png">
                <div class="container">
                    <div class="row pt-md-5 mt-lg-0">
                        <div class="col-12">
                            <div class="title-heading">
                                <h1 href="#" class="typewrite heading text-white font-weight-bold mb-4 text-center"
                                    data-period="2000"
                                    data-type="[ &quot;Portal Informasi Kegiatan Kemahasiswaan.&quot;, &quot;Portal Perekrutan Terbuka.&quot;, &quot;BEM PM Universitas Udayana.&quot;, &quot;Reparasi Cita Udayana.&quot; ]">
                                    <span class="wrap">Portal Perekrutan Terbuka.</span></h1>
                                <!-- <h1 class="heading text-white font-weight-bold mb-4">Portal Informasi Berita, <br>Pengumuman serta Kegiatan Kemahasiswaan di Lingkungan Universitas Udayana</h1>
                                        <p class="para-desc text-white-50">"Bersama Ciptakan Karsa dalam Semangat Reparasi Cita untuk Udayana dan Indonesia"</p> -->
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->

            </div> <!-- end swiper-slide -->
            <!--end container-->
        </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
</section>
<!-- Hero End -->
<!-- Blog Content -->
<!-- Page Content -->
<div class="container">
    <h1 class="my-4">Tulisan kami :</h1>
    <div class="row">
        @foreach ($posts as $post)

        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 mb-4">
            <a href="{{Route('blog.detail',['blog'=>$post->pslug])}}" class="text-dark read">
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
    <div class="text-center d-flex justify-content-center position-relative">
        {{ $posts->onEachSide(5)->links() }}
    </div>
</div>



<div class="clearfix">
    <div class="float-left">

    </div>
    <div class="float-right">

    </div>
</div>
@endsection
@section('footer')

<!-- Typewriter -->
<script>
    var TxtType = function(el, toRotate, period) {
         this.toRotate = toRotate;
         this.el = el;
         this.loopNum = 0;
         this.period = parseInt(period, 10) || 2000;
         this.txt = '';
         this.tick();
         this.isDeleting = false;
     };
 
     TxtType.prototype.tick = function() {
         var i = this.loopNum % this.toRotate.length;
         var fullTxt = this.toRotate[i];
 
         if (this.isDeleting) {
         this.txt = fullTxt.substring(0, this.txt.length - 1);
         } else {
         this.txt = fullTxt.substring(0, this.txt.length + 1);
         }
 
         this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';
 
         var that = this;
         var delta = 200 - Math.random() * 100;
 
         if (this.isDeleting) { delta /= 2; }
 
         if (!this.isDeleting && this.txt === fullTxt) {
         delta = this.period;
         this.isDeleting = true;
         } else if (this.isDeleting && this.txt === '') {
         this.isDeleting = false;
         this.loopNum++;
         delta = 500;
         }
 
         setTimeout(function() {
         that.tick();
         }, delta);
     };
 
     window.onload = function() {
         var elements = document.getElementsByClassName('typewrite');
         for (var i=0; i<elements.length; i++) {
             var toRotate = elements[i].getAttribute('data-type');
             var period = elements[i].getAttribute('data-period');
             if (toRotate) {
               new TxtType(elements[i], JSON.parse(toRotate), period);
             }
         }
         // INJECT CSS
         var css = document.createElement("style");
         css.type = "text/css";
         css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
         document.body.appendChild(css);
     };
</script>

<!--Read More -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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