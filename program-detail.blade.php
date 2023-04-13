@extends('landing.layout.main')
@section('container')
<!-- Detail Start -->
    <div class="container-fluid pb-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <div class="section-title position-relative mb-5">
                            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Program Detail</h6>
                            <h1 class="display-6">Diklat Wakaf Manfaat Asuransi Jiwa Syariah</h1>
                        </div>
                        <img class="img-fluid rounded w-100 mb-4" src="{{ asset('landing/img/visitasi2.png') }}" alt="Image">

                        {{-- better dibungkus menggunakan 1 body field(input use CKeditor or similiar tools) --}}
                        <p>Pendidikan & Pelatihan (Diklat) ini ditujukan bagi mereka yang ingin menambah pengetahuan dan ketrampilan terkait dasar wakaf kontemporer di Indonesia. Bobot Diklat adalah 30 Jam Pelajaran / Pelatihan (JP) yang berlangsung selama seminggu mulai hari Senin - Sabtu secara daring / online.</p>
                        <p>Diklat Perwakafan Kontemporer 30 JP akan membahas tentang Dasar Hukum Perwakafan yang ada di Indonesia yaitu :</p>
                        <ol>
                            <li>Pembahasan Aturan Dasar Perwakafan</li>
                            <ul>
                                <li>Undang Undang No. 41/2004</li>
                                <li>Peraturan Pemerintah No. 42/2006</li>
                            </ul>
                            <li>Pembahasan Aturan Dasar Wakaf Uang</li>
                            <ul>
                                <li>Peraturan Menteri Agama No. 4/2009</li>
                                <li>Keputusan Dirjen Bimas Islam DJ II/420 Tahun 2009</li>
                                <li>Peraturan Badan Wakaf Indonesia No. 1/2009 & No. 1/2020</li>
                            </ul>
                        </ol>
                        <p>Kegiatan peserta Diklat Perwakafan Kontemporer 30 JP selama seminggu adalah sebagai berikut </p>
                        <ol>
                            <li>Menghadiri Kelas Pembelajaran Perwakafan</li>
                            <li>Menghadiri Kelas Diskusi Perwakafan</li>
                            <li>Melakukan Belajar Mandiri melalui Platform eLearning</li>
                            <li>Menyusun Materi Pemaparan Perwakafan</li>
                            <li>Mengikuti Ujian Praktek Pemaparan Perwakafan</li>
                            <li>Melakukan Persiapan Ujian secara Mandiri</li>
                            <li>Mengikuti Ujian Teori Perwakafan</li>
                        </ol>
                    </div>

                    {{-- related program --}}
                    {{-- <h2 class="mb-3">Related Program</h2>
                    <div class="owl-carousel related-carousel position-relative" style="padding: 0 30px;">
                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.html">
                            <img class="img-fluid" src="{{ asset('landing/img/courses-1.jpg') }}" alt="">
                            <div class="courses-text">
                                <h4 class="text-center text-white px-3">Diklat Fungsional Perwakafan</h4>
                                <div class="border-top w-100 mt-3">
                                    <div class="d-flex justify-content-between p-4">
                                        <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                            <small>(250)</small></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.html">
                            <img class="img-fluid" src="{{ asset('landing/img/courses-2.jpg') }}" alt="">
                            <div class="courses-text">
                                <h4 class="text-center text-white px-3">Diklat Kompetensi Profesi Perwakafan</h4>
                                <div class="border-top w-100 mt-3">
                                    <div class="d-flex justify-content-between p-4">
                                        <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                            <small>(250)</small></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.html">
                            <img class="img-fluid" src="{{ asset('landing/img/courses-3.jpg') }}" alt="">
                            <div class="courses-text">
                                <h4 class="text-center text-white px-3">Sertifikasi Pengelola Biro Wakaf</h4>
                                <div class="border-top w-100 mt-3">
                                    <div class="d-flex justify-content-between p-4">
                                        <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                            <small>(250)</small></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div> --}}
               </div>

               <div class="col-lg-4 mt-5 mt-lg-6">
                    {{-- Program feature --}}
                    <div class="bg-primary mb-5 py-3">
                        <h3 class="text-white py-3 px-4 m-0">Program Features</h3>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Instructor</h6>
                            <h6 class="text-white my-3">John Doe</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Duration</h6>
                            <h6 class="text-white my-3">30 Jam Pelatihan</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Watch Profile</h6>
                            <h5 class="text-white my-3"><a href="" class="badge badge-pill badge-success"><i class="fa fa-user"></i></a></h5>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Watch Video</h6>
                            <h5 class="text-white my-3"><a href="" class="badge badge-pill badge-danger"><i class="fa fa-play-circle"></i></a></h5>
                        </div>
                        <h5 class="text-white py-3 px-4 m-0">Course Price: $199</h5>
                        <div class="py-3 px-4">
                            <a class="btn btn-block btn-success py-3 px-5" href="{{ url('program/uuid/register') }}">Enroll Now</a>
                        </div>
                    </div>

                    {{-- schedule program --}}
                    <div class="mb-5">
                        <h2 class="mb-3">Schedule</h2>
                        <ul class="list-group list-group-flush pb-4">
                            <h5>Batch 1</h5>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <p href="" class="text-decoration-none h6 m-0">Enrollment</p>
                                <span class="badge badge-primary badge-pill">15 Januari 2023</span> -
                                <span class="badge badge-primary badge-pill">20 Januari 2023</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <p href="" class="text-decoration-none h6 m-0">Learning day</p>
                                <span class="badge badge-primary badge-pill">20 Februari 2023</span> -
                                <span class="badge badge-primary badge-pill">26 Februari 2023</span>
                            </li>
                        </ul>
                        <ul class="list-group list-group-flush pb-4">
                            <h5>Batch 2</h5>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <p href="" class="text-decoration-none h6 m-0">Enrollment</p>
                                <span class="badge badge-primary badge-pill">27 Februari 2023</span> -
                                <span class="badge badge-primary badge-pill">3 Maret 2023</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <p href="" class="text-decoration-none h6 m-0">Learning day</p>
                                <span class="badge badge-primary badge-pill">8 Maret 2023</span> -
                                <span class="badge badge-primary badge-pill">14 Maret 2023</span>
                            </li>
                        </ul>
                    </div>

                    {{-- Other program --}}
                    <div class="mb-5 pt-5">
                        <h2 class="mb-4">Other Program</h2>
                        <a class="d-flex align-items-center text-decoration-none mb-4" href="">
                            <img class="img-fluid rounded" src="{{ asset('landing/img/header.jpg') }}" alt="" width="80">
                            <div class="pl-3">
                                <h6>Diklat Fungsional Perwakafan</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i>Jhon Doe</small>
                                    <small class="text-body"><i class="fa fa-star text-primary mr-2"></i>4.5 (250)</small>
                                </div>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none mb-4" href="">
                            <img class="img-fluid rounded" src="{{ asset('landing/img/courses-80x80.jpg') }}" alt="" width="80">
                            <div class="pl-3">
                                <h6>Diklat Manfaat Asuransi Jiwa Syariah</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i>Jhon Doe</small>
                                    <small class="text-body"><i class="fa fa-star text-primary mr-2"></i>4.5 (250)</small>
                                </div>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none mb-4" href="">
                            <img class="img-fluid rounded" src="{{ asset('landing/img/courses-80x80.jpg') }}" alt="" width="80">
                            <div class="pl-3">
                                <h6>Diklat Kompetensi Profesi Perwakafan</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i>Jhon Doe</small>
                                    <small class="text-body"><i class="fa fa-star text-primary mr-2"></i>4.5 (250)</small>
                                </div>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none" href="">
                            <img class="img-fluid rounded" src="{{ asset('landing/img/courses-80x80.jpg') }}" alt="" width="80">
                            <div class="pl-3">
                                <h6>Sertifikasi Profesi Perwakafan</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i>Jhon Doe</small>
                                    <small class="text-body"><i class="fa fa-star text-primary mr-2"></i>4.5 (250)</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Detail End -->
@endsection
