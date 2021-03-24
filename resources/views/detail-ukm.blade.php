@extends('layouts/master',['title'=>$ukm->nama_ukm])
@section('content')
<!-- PAGUYUBAN -->
<section style="margin-top: 120px" class="mb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-12" style="align-items: center">
                <center>
                    <img src="{{$ukm->image}}" width="200px">
                </center>
            </div>
            <div class="col-lg-10 col-md-10 col-12">
                <p class="heading museo nama-ukm"
                    style="font-size: 30px; font-weight: bold; margin-top: 70px; margin-left: 30px">{{$ukm->nama_ukm}}
                </p>
            </div>
        </div>

        <div class="col-lg-12 mt-4 pt-2">
            <div class="rounded shadow position-relative overflow-hidden">
                <div class="p-4 bg-light border-bottom"></div>
                <div class="p-4">
                    <ul class="nav nav-pills mb-3 rounded-pill justify-content-center d-inline-block border py-1 px-2"
                        id="pills-tab" role="tablist">
                        <li class="nav-item d-inline-block">
                            <a class="nav-link p-1 px-3 rounded-pill active" id="ukm1" data-toggle="pill"
                                href="#pills-1" role="tab" aria-controls="pills-cloud" aria-selected="false">Tentang</a>
                        </li>

                        <li class="nav-item d-inline-block">
                            <a class="nav-link p-1 px-3 rounded-pill" id="ukm2" data-toggle="pill" href="#pills-2"
                                role="tab" aria-controls="pills-smart" aria-selected="false">Sejarah</a>
                        </li>

                        <li class="nav-item d-inline-block">
                            <a class="nav-link p-1 px-3 rounded-pill" id="ukm3" data-toggle="pill" href="#pills-3"
                                role="tab" aria-controls="pills-smart" aria-selected="false">Fungsionaris</a>
                        </li>

                        <li class="nav-item d-inline-block">
                            <a class="nav-link p-1 px-3 rounded-pill" id="ukm4" data-toggle="pill" href="#pills-4"
                                role="tab" aria-controls="pills-smart" aria-selected="false">Kegiatan</a>
                        </li>

                        <li class="nav-item d-inline-block">
                            <a class="nav-link p-1 px-3 rounded-pill" id="ukm5" data-toggle="pill" href="#pills-5"
                                role="tab" aria-controls="pills-smart" aria-selected="false">Prestasi</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="ukm1">
                            <p class="mb-0">{!!$ukm->tentang!!}</p>
                        </div>

                        <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="ukm2">
                            <p class="mb-0">{!!$ukm->sejarah!!}
                            </p>
                        </div>

                        <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="ukm3">
                            <p class="mb-0">{!!$ukm->fungsionaris!!}</p>
                        </div>

                        <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="ukm3">
                            <p class="mb-0">{!!$ukm->kegiatan!!}</p>
                        </div>

                        <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="ukm3">
                            <p class="mb-0">{!!$ukm->prestasi!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- PAGUYUBAN END-->
@endsection