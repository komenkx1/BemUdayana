@extends('layouts/master',['title'=>'Tentang Kami'])
@section('content')

<!-- Hero Start -->
<section class="position-relative d-block vh-100" id="home">
    <div class="slide-inner slide-bg-image d-flex align-items-center"
        style="background: center; height: 100%; background-image: url('/assets/bem_images/slider/yellow-bg.png');">
        <div class="container bem">
            <div class="row mt-4">
                <div class="col-md-8">
                    <div class="title-heading">
                        <p class="heading animate__animated animate__fadeInLeft" style="margin-top:60px">Tentang Kami
                        </p>
                        <p class="heading animate__animated animate__fadeInLeft animate__slow">BEM PM Udayana 2020</p>
                        <p class="heading animate__animated animate__fadeInLeft animate__slower para-desc"
                            style="color:#be5e53; font-family:photograph_signature; font-size:25px !important">"Bersama
                            Ciptakan Karsa dalam Semangat Reparasi Cita untuk Udayana dan Indonesia"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero End -->

<!-- GAMBAR TENTANG -->
<section class="section" style="background-color: white;">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0" data-aos="fade-left">
                        <div class="rounded text-center shadow-large position-relative overflow-hidden">
                            <img src="/assets/bem_images/tentang/1.jpg" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 mt-4 mt-lg-0 pt-2 pt-lg-0" data-aos="fade-down">
                                <div class="rounded text-center shadow-large position-relative overflow-hidden">
                                    <img src="/assets/bem_images/tentang/2.jpg" class="img-fluid" alt="">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 mt-4 pt-2 " data-aos="fade-up">
                                <div class="rounded text-center shadow-large position-relative overflow-hidden">
                                    <img src="/assets/bem_images/tentang/3.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-6 col-md-12 order-1 order-lg-2">
                <div class="section-title ml-lg-5">
                    <h6 data-aos="fade-up" class="museo">VISI DAN MISI BEM PM UNIVERSITAS UDAYANA 2020</h6>
                    <h2 data-aos="fade-up" class="mb-2 museo"><span class="font-weight-bold">Visi</span></h2>
                    <p data-aos="fade-up" class="mb-4">Bersama ciptakan Karsa dalam Semangat Reparasi Cita untuk Udayana
                        dan Indonesia</p>
                    <h2 data-aos="fade-up" class="mb-2 museo"><span class="font-weight-bold">Misi</span></h2>
                    <ul data-aos="fade-up" class="list-unstyled feature-list mb-0">
                        <li>Membangun semangat kekeluargaan dengan menciptakan harmoni di internal BEM PM Universitas
                            Udayana bersama dengan organisasi mahasiswa di lingkungan Universitas Udayana</li>
                        <br>
                        <li>Menggagas kembalinya semangat juang lembaga eksekutif yang berlandaskan Tri Dharma Perguruan
                            Tinggi</li>
                        <br>
                        <li>Optimalisasi wadah advokasi dan aspirasi kesejahteraan mahasiswa yang respnonsif serta
                            solutif</li>
                        <br>
                        <li>Progresif untuk senantiasa bergerak aktif memberikan solusi yang aktual dan inovatif di
                            tengah masyarakat</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- END GAMBAR TENTANG -->

<!--COUNTER START-->
<section class="ftco-section ftco-counter" style="background-color: #d7d3c1" id="section-counter">
    <div class="container">
        <div class="row d-md-flex align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="heading-section heading-section-white">
                    <div class="ftco-animate">
                        <span class="museo" style="font-size: 20px; font-weight: bold;">Jumlah</span>
                        <h2 class="museo">Fungsionaris Kami</h2>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="row justify-content-center" id="counter">
                    <div class="col-3 mt-0">
                        <div class="counter-box text-center">
                            <h2 class="counter-value mt-3" data-count="97">0</h2>
                            <h6 class="counter-head font-weight-normal">Staff</h6>
                        </div>
                        <!--end counter box-->
                    </div>
                    <!--end col-->

                    <div class="col-5 mt-0">
                        <div class="counter-box text-center">
                            <h2 class="counter-value mt-3" data-count="32">0</h2>
                            <h6 class="counter-head font-weight-normal">Menteri dan Wakil Menteri</h6>
                        </div>
                        <!--end counter box-->
                    </div>
                    <!--end col-->

                    <div class="col-4  mt-0">
                        <div class="counter-box text-center">
                            <h2 class="counter-value mt-3" data-count="3">0</h2>
                            <h6 class="counter-head font-weight-normal">Menteri Koordinator</h6>
                        </div>
                        <!--end counter box-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
</section>
<!--END COUNTER-->

<!--FUNGSIONARIS -->
<div class="container pt-5" style="margin-top: 30px">
    <div class="row align-items-center">
        <div class="col-12">
            <div class="section-title">
                <h4 class="title mb-4 text-center">FUNGSIONARIS BEM PM UDAYANA 2020</h4>
            </div>
            <div class="mt-4 pt-2">
                <div class="faq-content">
                    <div class="accordion" id="accordionExample2">

                        <div class="card border rounded-pill mb-2">
                            <a data-toggle="collapse" href="#collapse1" class="faq faq-2 position-relative"
                                aria-expanded="true" aria-controls="collapse1">
                                <div class="card-header border-0 p-3 pr-5" id="heading1"
                                    style="background-color: #1dd1a1">
                                    <h6 class="title mb-0 text-center">PRESIDEN DAN WAKIL PRESIDEN</h6>
                                </div>
                            </a>
                            <div id="collapse1" class="collapse show" aria-labelledby="heading1"
                                data-parent="#accordionExample2">
                                <div class="card-body" style="background-color: #d7d3c1">
                                    <div class="row">
                                        <div class="col-2"></div>
                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/satyanara.png">
                                            <p class="nama">Dewa Gede Satya Ranasika Kusuma</p>
                                            <p class="jabatan">Presiden Mahasiswa</p>
                                        </div>

                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/nata.png">
                                            <p class="nama">I Wayan Nata Manik Kusuma</p>
                                            <p class="jabatan">Wakil Presiden Mahasiswa</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border rounded-pill mb-2">
                            <a data-toggle="collapse" href="#collapse2" class="faq faq-2 position-relative collapsed"
                                aria-expanded="false" aria-controls="collapse2">
                                <div class="card-header border-0 p-3 pr-5" id="heading2"
                                    style="background-color: #00d2d3">
                                    <h6 class="title mb-0 text-center">BADAN PENGURUS HARIAN</h6>
                                </div>
                            </a>
                            <div id="collapse2" class="collapse" aria-labelledby="heading2"
                                data-parent="#accordionExample2">
                                <div class="card-body" style="background-color: #d7d3c1">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/sulfa.png">
                                            <p class="nama">Sulfa Ilmiyah</p>
                                            <p class="jabatan">Menteri Kementerian Sekretaris Kabinet</p>
                                        </div>

                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/dayu.png">
                                            <p class="nama">Ida Ayu Made Sinta Widiari</p>
                                            <p class="jabatan">Menteri Kementerian Keuangan</p>
                                        </div>

                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/ersanti.png">
                                            <p class="nama">Putu Ersanti Nurwita Devi</p>
                                            <p class="jabatan">Menteri Kementerian Kesektariatan dan<br>Manajemen
                                                Kabinet</p>
                                        </div>

                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/puspaa.png">
                                            <p class="nama">Ni Made Puspasari</p>
                                            <p class="jabatan">Wakil Menteri Kementerian Sekretaris Kabinet</p>
                                        </div>

                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/dian.png">
                                            <p class="nama">Ni Putu Dian Pradnyani</p>
                                            <p class="jabatan">Wakil Menteri Kementerian Keuangan</p>
                                        </div>

                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/deva.png">
                                            <p class="nama">Putu Deva Arya Astina Para</p>
                                            <p class="jabatan">Wakil Menteri Kementerian Kesektariatan dan<br>Manajemen
                                                Kabinet</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border rounded-pill mb-2">
                            <a data-toggle="collapse" href="#collapse4" class="faq faq-2 position-relative collapsed"
                                aria-expanded="false" aria-controls="collapse4">
                                <div class="card-header border-0 p-3 pr-5" id="heading4"
                                    style="background-color:#34ace0">
                                    <h6 class="title mb-0 text-center">KEMENKOAN KEMAHASISWAAN</h6>
                                </div>
                            </a>
                            <div id="collapse4" class="collapse" aria-labelledby="heading4"
                                data-parent="#accordionExample2">
                                <div class="card-body" style="background-color: #d7d3c1">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <img class="foto" src="bem_images/fungsionaris/satya.png">
                                            <p class="nama">I Putu Satya Ariwinata</p>
                                            <p class="jabatan">Menteri Koordinator Kemahasiswaan</p>
                                        </div>
                                        <div class="col-2"></div>
                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/novri.png">
                                            <p class="nama">Muhammad Novriansyah Kusumapratama</p>
                                            <p class="jabatan">Menteri Kementerian Pengembangan<br>Sumber Daya Mahasiswa
                                            </p>
                                        </div>

                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/salsa.png">
                                            <p class="nama">Desak Putu Salshabila Ardiantari Putri</p>
                                            <p class="jabatan">Wakil Menteri Kementerian Pengembangan<br>Sumber Daya
                                                Mahasiswa</p>
                                        </div>
                                        <div class="col-2"></div>

                                        <div class="col-2"></div>
                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/philip.png">
                                            <p class="nama">Philip Emmanuel Gunawan</p>
                                            <p class="jabatan">Menteri Kementerian Minat<br>Dan Bakat</p>
                                        </div>

                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/nova.png">
                                            <p class="nama">Nova Widya Ningsih</p>
                                            <p class="jabatan">Wakil Menteri Kementerian Minat<br>Dan Bakat</p>
                                        </div>
                                        <div class="col-2"></div>

                                        <div class="col-2"></div>
                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/santi.png">
                                            <p class="nama">Ni Made Rai Nirmala Santhi</p>
                                            <p class="jabatan">Menteri Kementerian Riset<br>Dan Pendidikan</p>
                                        </div>

                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/mawar.png">
                                            <p class="nama">Ni Kadek Mawar Ariestuti</p>
                                            <p class="jabatan">Wakil Menteri Kementerian Riset<br>Dan Pendidikan</p>
                                        </div>
                                        <div class="col-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border rounded-pill mb-2">
                            <a data-toggle="collapse" href="#collapse7" class="faq faq-2 position-relative collapsed"
                                aria-expanded="false" aria-controls="collapse7">
                                <div class="card-header border-0 p-3 pr-5" id="heading7"
                                    style="background-color: #f5c266">
                                    <h6 class="title mb-0 text-center">KEMENKOAN RELASI DAN HARMONISASI HUBUNGAN</h6>
                                </div>
                            </a>
                            <div id="collapse7" class="collapse" aria-labelledby="heading7"
                                data-parent="#accordionExample2">
                                <div class="card-body" style="background-color: #d7d3c1">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <img class="foto" src="bem_images/fungsionaris/teguh.png">
                                            <p class="nama">I Gede Teguh Satya Dharma</p>
                                            <p class="jabatan">Menteri Koordinator Relasi Harmonisasi<br>dan Hubungan
                                            </p>
                                        </div>

                                        <div class="col-2"></div>
                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/agus.png">
                                            <p class="nama">Kadek Agus Kusumanadi</p>
                                            <p class="jabatan">Menteri Kementerian Dalam Negeri</p>
                                        </div>

                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/beatrice.png">
                                            <p class="nama">Beatrice Batti Lebang</p>
                                            <p class="jabatan">Wakil Menteri Kementerian Dalam Negeri</p>
                                        </div>
                                        <div class="col-2"></div>

                                        <div class="col-2"></div>
                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/feb.png">
                                            <p class="nama">Aditya Nur Febriansyah</p>
                                            <p class="jabatan">Menteri Kementerian Luar Negeri</p>
                                        </div>

                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/wahyuni.png">
                                            <p class="nama">Ni Nyoman Wahyuni</p>
                                            <p class="jabatan">Wakil Menteri Kementerian Luar Negeri</p>
                                        </div>
                                        <div class="col-2"></div>

                                        <div class="col-2"></div>
                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/egy.png">
                                            <p class="nama">Made Egy Satria Danendra </p>
                                            <p class="jabatan">Menteri Kementerian Komunikasi, Media, <br> Dan Informasi
                                            </p>
                                        </div>

                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/visto.png">
                                            <p class="nama">Visto Richardo</p>
                                            <p class="jabatan">Wakil Menteri Kementerian Komunikasi,<br> Media, Dan
                                                Informasi</p>
                                        </div>
                                        <div class="col-2"></div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border rounded-pill mb-2">
                            <a data-toggle="collapse" href="#collapse10" class="faq faq-2 position-relative collapsed"
                                aria-expanded="false" aria-controls="collapse10">
                                <div class="card-header border-0 p-3 pr-5" id="heading10"
                                    style="background-color:#20bf6b">
                                    <h6 class="title mb-0 text-center">KEMENKOAN KEMASYARAKATAN</h6>
                                </div>
                            </a>
                            <div id="collapse10" class="collapse" aria-labelledby="heading10"
                                data-parent="#accordionExample2">
                                <div class="card-body" style="background-color: #d7d3c1">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <img class="foto" src="bem_images/fungsionaris/ozora.png">
                                            <p class="nama">Michael Ozora Orvin </p>
                                            <p class="jabatan">Menteri Koordinator Kemasyarakatan</p>
                                        </div>

                                        <div class="col-2"></div>
                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/caca.png">
                                            <p class="nama">Azizah Septiyani Irawan </p>
                                            <p class="jabatan">Menteri Kementerian Kewirausahaan</p>
                                        </div>

                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/el.png">
                                            <p class="nama">Lidia Ayu Karuniasari</p>
                                            <p class="jabatan">Wakil Menteri Kementerian Kewirausahaan</p>
                                        </div>
                                        <div class="col-2"></div>

                                        <div class="col-2"></div>
                                        <div class="col-lg-4">
                                            <img class="foto" src="bem_images/fungsionaris/nataa.png">
                                            <p class="nama">I Gusti Ayu Nata Dewi Utari</p>
                                            <p class="jabatan">Menteri Kementerian Kebudayaan</p>
                                        </div>

                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/tara.png">
                                            <p class="nama">Ida Bagus Tara Jwalita Bhayu</p>
                                            <p class="jabatan">Wakil Menteri Kementerian Kebudayaan</p>
                                        </div>
                                        <div class="col-2"></div>

                                        <div class="col-2"></div>
                                        <div class="col-lg-4">
                                            <img class="foto" src="bem_images/fungsionaris/popy.png">
                                            <p class="nama">Kadek Popy Wulandari</p>
                                            <p class="jabatan">Menteri Kementerian Pemberdayaan Desa</p>
                                        </div>

                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/mik.png">
                                            <p class="nama">Mikha Layasisa Tarigan</p>
                                            <p class="jabatan">Wakil Menteri Kementerian Pemberdayaan Desa</p>
                                        </div>
                                        <div class="col-2"></div>

                                        <div class="col-2"></div>
                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/iin.png">
                                            <p class="nama">Ni Putu Intariani</p>
                                            <p class="jabatan">Menteri Kementerian Sosial <br>Dan Lingkungan Hidup</p>
                                        </div>

                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/muson.png">
                                            <p class="nama">Munson Pandiangan</p>
                                            <p class="jabatan">Wakil Menteri Kementerian Sosial <br>Dan Lingkungan Hidup
                                            </p>
                                        </div>
                                        <div class="col-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border rounded-pill mb-2">
                            <a data-toggle="collapse" href="#collapse14" class="faq faq-2 position-relative collapsed"
                                aria-expanded="false" aria-controls="collapse14">
                                <div class="card-header border-0 p-3 pr-5" id="heading14"
                                    style="background-color: #FD7272">
                                    <h6 class="title mb-0 text-center">KEMENKOAN PERGERAKAN</h6>
                                </div>
                            </a>
                            <div id="collapse14" class="collapse" aria-labelledby="heading14"
                                data-parent="#accordionExample2">
                                <div class="card-body" style="background-color: #d7d3c1">
                                    <div class="row">
                                        <div class="col-2"></div>
                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/arif.png">
                                            <p class="nama">Arif Paharu Rozik</p>
                                            <p class="jabatan">Menteri Kementerian Advokasi Kesejahteraan <br>Mahasiswa
                                                Dan Kebijakan Kampus</p>
                                        </div>

                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/widya.png">
                                            <p class="nama"> Ni Putu Widya Swari</p>
                                            <p class="jabatan"> Wakil Menteri Kementerian Advokasi Kesejahteraan
                                                <br>Mahasiswa Dan Kebijakan Kampus</p>
                                        </div>
                                        <div class="col-2"></div>

                                        <div class="col-2"></div>
                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/nia.png">
                                            <p class="nama">Ni Made Nia Widiani</p>
                                            <p class="jabatan">Menteri Kementerian Kebijakan Daerah</p>
                                        </div>

                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/bastian.png">
                                            <p class="nama">Komang Bastian Wirawan Hadi</p>
                                            <p class="jabatan">Wakil Menteri Kementerian Kebijakan Daerah</p>
                                        </div>
                                        <div class="col-2"></div>

                                        <div class="col-2"></div>
                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/haganta.png">
                                            <p class="nama">Michael Haganta Ginting</p>
                                            <p class="jabatan">Menteri Kementerian Kebijakan Nasional</p>
                                        </div>

                                        <div class="col-sm-4">
                                            <img class="foto" src="bem_images/fungsionaris/bapa.png">
                                            <p class="nama">Petrus W Revylianus Bapa</p>
                                            <p class="jabatan">Wakil Menteri Kementerian Kebijakan Nasional</p>
                                        </div>
                                        <div class="col-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END FUNGSIONARIS -->
@endsection
@section('footer')
<!--Counter-->
<script src="/assets/bem_js/counter.init.js"></script>
@endsection