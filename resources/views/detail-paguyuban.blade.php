@extends('layouts/master',['title'=>$paguyuban->slug])
@section('content')
<!-- PAGUYUBAN -->
<section style="margin-top: 120px">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-12" style="align-items: center">
                <center>
                    <img src="{{$paguyuban->image}}" width="200px">
                </center>
            </div>
            <div class="col-lg-10 col-md-10 col-12">
                <p class="heading museo"
                    style="font-size: 30px; font-weight: bold; margin-top: 70px; margin-left: 30px">
                    {{$paguyuban->nama_paguyuban}}</p>
            </div>
        </div>

        <div class="col-lg-12 mt-4 pt-2">
            <div class="rounded shadow position-relative overflow-hidden">
                <div class="p-4 bg-light border-bottom"></div>
                <div class="p-4">
                    <ul class="nav nav-pills mb-3 rounded-pill justify-content-center d-inline-block border py-1 px-2"
                        id="pills-tab" role="tablist">
                        <li class="nav-item d-inline-block">
                            <a class="nav-link p-1 px-3 rounded-pill active" id="pills-cloud-tab" data-toggle="pill"
                                href="#pills-cloud" role="tab" aria-controls="pills-cloud"
                                aria-selected="false">Tentang</a>
                        </li>

                        <li class="nav-item d-inline-block">
                            <a class="nav-link p-1 px-3 rounded-pill" id="pills-smart-tab" data-toggle="pill"
                                href="#pills-smart" role="tab" aria-controls="pills-smart"
                                aria-selected="false">Kontak</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-cloud" role="tabpanel"
                            aria-labelledby="pills-cloud-tab">
                            <p class="mb-0">{!!$paguyuban->tentang!!}</p>
                        </div>

                        <div class="tab-pane fade" id="pills-smart" role="tabpanel" aria-labelledby="pills-smart-tab">
                            <ul>
                                <li> Ketua : {{$paguyuban->ketua}}</li>
                                <li> Instagram : {{$paguyuban->instagram}}</li>
                                <li> Line : {{$paguyuban->line}}</li>
                                <li> Facebook : {{$paguyuban->facebook}} </li>
                                <li> Alamat : {{$paguyuban->alamat}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- PAGUYUBAN END-->
@endsection