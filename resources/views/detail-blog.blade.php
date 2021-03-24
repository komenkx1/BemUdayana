@extends('layouts/master',['title'=>$blog->ptitle])
@section('content')


<!-- START BLOG -->
<!-- Hero Start -->
<section class="swiper-slider-hero position-relative d-block vh-100" id="home">
    <div class="slide-inner slide-bg-image d-flex align-items-center"
        style="background: center; background-size: cover ;height: 100%;"
        data-background="/assets/bem_images/stickyNotes.jpg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row pt-md-5 mt-lg-0">
                <div class="col-12">
                    <div class="title-heading">
                        <h1 class="heading text-white font-weight-bold mb-4">{{$blog->ptitle}}</h1>
                        <p class="para-desc text-white"><strong>Scroll ke bawah</strong> untuk membaca artikel</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </div><!-- end slide-inner -->
    </div> <!-- end swiper-slide -->

    <!--end container-->
</section>
<!--end section-->
<!-- Hero End -->
<!-- Blog Content -->

<!-- Page Content -->
<div class="container vertical-center">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4">{{$blog->ptitle}}</h1>

            <!-- Author -->
            <p class="lead">
                by BEM PM Udayana
            </p>

            <hr>

            <!-- Date/Time -->

            <div>{{$blog->ptime}}</div>

            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="{{$blog->image}}" alt="">

            <hr>

            <!-- Post Content -->
            {!!$blog->pbody!!}

        </div>

    </div>

    <!-- /.row -->

</div>
<!-- /.container -->

<!-- End Blog Content -->

@endsection