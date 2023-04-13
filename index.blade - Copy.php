@extends('landing.layout.main')
@section('container')
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center my-5 py-5">
            <h1 class="text-white mt-2 mb-4">DUTA WAKAF<span>&reg</span> INSTITUTE</h1>
            <h2 class="text-white display-6 mb-3"><span style="color:rgb(37, 197, 72)">WAKAFPLANNING</span><span>&reg</span> <span style="color:rgb(37, 197, 72)">& WAKAFRAISING</span><span>&#x00AE</span> Specialist</h2>
            <h4 class="text-white display-12 mb-5">Mencetak Tenaga <b>Ahli Perwakafan</b> yang Professional, Berintegritas & Amanah</h4>
            <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Program</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Program 1</a>
                            <a class="dropdown-item" href="#">Program 2</a>
                            <a class="dropdown-item" href="#">Program 3</a>
                        </div>
                    </div>
                    <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="btn btn-success px-4 px-lg-5">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid py-4">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('landing/img/visitasi.png') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Goal</h6>
                        <h1 class="display-6">Educate About Waqf From Conventional Waqf Migration To Digital Waqf</h1>
                    </div>
                    <p>Menghasilkan 100.000 tenaga profesional perwakafan yang kompeten & tersertifikasi di seluruh Indonesia sehingga seluruh umat muslim di Indonesia berpartisipasi aktif sebagai wakif.</p>
                    <div class="row pt-3 mx-0">
                        <div class="col-sm-3 px-0">
                            <div class="bg-success text-center p-2">
                                <h4 class="text-white" data-toggle="counter-up">23893</h4>
                                <h6 class="text-uppercase text-white">Available<span class="d-block">Subjects</span></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 px-0">
                            <div class="bg-primary text-center p-2">
                                <h4 class="text-white" data-toggle="counter-up">43</h4>
                                <h6 class="text-uppercase text-white">Programs &<span class="d-block">Courses</span></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 px-0">
                            <div class="bg-secondary text-center p-2">
                                <h4 class="text-white" data-toggle="counter-up">83</h4>
                                <h6 class="text-uppercase text-white">Skilled<span class="d-block">Instructors</span></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 px-0">
                            <div class="bg-warning text-center p-2">
                                <h4 class="text-white" data-toggle="counter-up">4239</h4>
                                <h6 class="text-uppercase text-white">Data<span class="d-block">Students</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    <div class="container-fluid bg-image" style="margin: 90px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 my-5 pt-5 pb-lg-5">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Why Digital Waqf?</h6>
                        <h1 class="display-6">Why You Should Start Learning Digital Waqf with Us?</h1>
                    </div>
                    <p class="mb-4 pb-2">Rendahnya literasi wakaf yang secara langsung membuat rasio partisipasi masyarakat dalam berwakaf juga kecil. Untuk itu penting meningkatkan literasi wakaf masyarakat dengan melakukan proses edukasi & sosialisasi wakaf yang terus menerus oleh pihak yang kompeten. Tenaga profesional di bidang perwakafan yang mampu memberikan edukasi wakaf kepada masyarakat secara komprehensif sekaligus mengajak masyarakat berpartisipasi untuk berwakaf khususnya wakaf uang sangat dibutuhkan  baik oleh nazhir wakaf uang maupun industri keuangan syariah</p>
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-graduation-cap text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Skilled Instructors</h4>
                            <p>Dalam proses belajar perwakafan terjamin dengan didampingi oleh instruktur yang berpengalaman.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-secondary mr-4">
                            <i class="fa fa-2x fa-certificate text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Certified</h4>
                            <p>Selain esensial pada proses belajar dan pendampingan materi perwakafan, peserta juga akan mendapat sertifikat.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="btn-icon bg-warning mr-4">
                            <i class="fa fa-2x fa-book-reader text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Online Classes & Courses</h4>
                            <p class="m-0">Demi meluasnya literasi tentang perwakafan, kami membuka kesempatan selebar-lebarnya wadah ilmu baik secara langsung maupun daring.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('landing/img/visitasi2.png') }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->

    <!-- Courses Start -->
    <div class="container-fluid px-0 py-3 pb-5">
        <div class="row mx-0 justify-content-center pt-5">
            <div class="col-lg-6">
                <div class="section-title text-center position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Our Programs</h6>
                    <h1 class="display-6">Register New Releases Of Our Program</h1>
                </div>
            </div>
        </div>
        <div class="owl-carousel courses-carousel">
            <div class="courses-item position-relative">
                <img class="img-fluid" src="{{ asset('landing/img/courses-1.jpg') }}" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Functional Waqf</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Mr Bahdi Ahmad</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(200)</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="#">Program Detail</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="{{ asset('landing/img/courses-2.jpg') }}" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Waqf of sharia life insurance benefits</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Mrs. Suzi Sayuti</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>4.0 <small>(150)</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="#">Program Detail</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="{{ asset('landing/img/courses-3.jpg') }}" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Waqf professional competence</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Mr Bahdi Ahmad</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>5.0 <small>(20)</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="#">Program Detail</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="{{ asset('landing/img/courses-4.jpg') }}" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Professional certification</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Mrs. Endang Tri Sulastri</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(50)</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="#">Program Detail</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="{{ asset('landing/img/courses-5.jpg') }}" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Waqf bureau management certification</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Mr. Surya Malik</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(280)</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="#">Program Detail</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="{{ asset('landing/img/courses-6.jpg') }}" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Management certification of Swakarta</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Mrs. Endang Tri Sulastri</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="#">Program Detail</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row justify-content-center bg-image mx-0 mb-5">
            <div class="col-lg-6 py-5">
                <div class="bg-white p-5 my-5">
                    <h1 class="text-center mb-4">Get Scholarship </h1>
                    <form>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="padding: 30px 20px;">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="padding: 30px 20px;">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Address" style="padding: 30px 20px;">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="number" class="form-control bg-light border-0" placeholder="Your Phone Number" style="padding: 30px 20px;">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="custom-select bg-light border-0 px-3" style="height: 60px;">
                                        <option selected>Select Program</option>
                                        <option value="1">program 1</option>
                                        <option value="2">program 2</option>
                                        <option value="3">program 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-success btn-block" type="submit" style="height: 60px;">Register Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- Courses End -->

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-3">
            <div class="section-title text-center position-relative mb-5">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Instructors</h6>
                <h1 class="display-6">Meet Our Instructors</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{ asset('landing/img/team-1.jpg') }}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Mrs. Suzi Sayuti</h5>
                        <p class="mb-2">Waqf Fundamental</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{ asset('landing/img/team-2.jpg') }}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Mr. Bahdi Ahmad</h5>
                        <p class="mb-2">Digital Waqf</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{ asset('landing/img/team-3.jpg') }}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Mrs. Endang Tri Sulastri</h5>
                        <p class="mb-2">General Education</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{ asset('landing/img/team-4.jpg') }}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Mr. Surya Malik</h5>
                        <p class="mb-2">Muslimpreneur</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-fluid bg-image py-4" style="margin: 90px 0;">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Testimonial</h6>
                        <h1 class="display-6">What Say Our Students</h1>
                    </div>
                    <p class="m-0">Merancang silabus hingga konsep pelatihan terstruktur dan mengena kepada peserta memanglah penting, namun kami juga terbuka atas semua masukan dari peserta demi terciptanya proses transfer ilmu perwakafan yang sehat dan terdampak</p>
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>Sebuah kehormatan dapat belajar dan mengimplementasikan hasil belajar disini, perlu adanya penyebarluasan terhadap ilmu perwakafan baik komersial konvensional maupun memanfaatkan media sosial.</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="{{ asset('landing/img/testimonial-2.jpg') }}" alt="">
                                <div>
                                    <h5>Fajar</h5>
                                    <span>Muslimpreneur</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>Sadar akan kurangnya literasi tentang wakaf, belajar sembari praktik merupakan cara yang baik untuk mendapat ilmu, namun dengan megajarkan kembali ilmu tersebut, kemampuan otak untuk mengingat dan pemahaman akan meningkat</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="{{ asset('landing/img/testimonial-1.jpg') }}" alt="">
                                <div>
                                    <h5>Yuli</h5>
                                    <span>Boutiqemuslimah</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Start -->

    <!-- Contact Start -->
    {{-- <div class="container-fluid py-4">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px;">
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-primary mr-4">
                                <i class="fa fa-2x fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Our Location</h4>
                                <p class="m-0">Yogyakarta, Indonesia</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-secondary mr-4">
                                <i class="fa fa-2x fa-phone-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Call Us</h4>
                                <p class="m-0">08123456789</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="btn-icon bg-warning mr-4">
                                <i class="fa fa-2x fa-envelope text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Email Us</h4>
                                <p class="m-0">info@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Need Help?</h6>
                        <h1 class="display-6">Send Us A Message</h1>
                    </div>
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Name" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="email" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Email" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Subject" required="required">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control border-top-0 border-right-0 border-left-0 p-0" rows="5" placeholder="Message" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-success py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Contact End -->

@endsection
