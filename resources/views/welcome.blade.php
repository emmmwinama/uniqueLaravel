@extends('layouts.app')

@section('content')
<div class="home">
    <div class="text-white border-0 card bg-dark rounded-0" style="height: 600px; overflow-y: hidden;">
        <img class="card-img" src="{{ asset('images/mansion.jpg') }}" alt="Card image" style="width: 100%; height: 100%; object-fit: cover;">
        <div class="container px-0 card-img-overlay">
            <h5 class="card-title">Card title</h5>
        </div>
    </div>
    <div class="container pb-5">
        <section id="introduction" class="py-5">
            <div class="text-center introduction">
                <h2>WE ARE THE BEST</h2>
                <div class="mx-auto w-80 introduction-body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora quis amet enim magni velit architecto fugiat deserunt placeat consectetur error. Officiis consequuntur minus ab laboriosam reiciendis quam delectus tempore, molestias deserunt quibusdam veniam cumque fugit dolore quod id voluptates? Ullam odio non at sit quae aliquid delectus nihil eos? Nemo iusto beatae debitis ipsum porro tenetur totam animi sunt quam exercitationem, eum praesentium itaque consequatur nihil aliquam voluptas optio odio expedita deserunt saepe illo aliquid recusandae. Facere quam dolores praesentium repellendus fugit repellat! Deleniti sint aliquam maxime ratione voluptatum voluptates quaerat. Iure hic dolores laborum quasi, eius officia? Saepe, nobis!</p>
                    <a href="/about" class="btn btn-lg btn-primary" style="border-radius: 100px">SEE MORE</a>
                </div>
            </div>
        </section>
        <section id="services" class="py-5">
            <div class="services">
                <div class="row">
                    <div class="p-0 m-0 col-lg-4 services-head d-flex align-items-center" style="">
                        <div class="px-3 py-3 text-center text-white">
                            <h2>OUR SERVICES</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ex animi, dolorum culpa sint repudiandae labore veritatis tenetur ratione ullam recusandae architecto numquam exercitationem omnis soluta, quis, ad sunt quaerat?</p>
                            <a href="/services" class="btn btn-lg btn-primary" style="border-radius: 100px">SEE MORE</a>
                        </div>
                    </div>
                    <div class="py-3 shadow col-lg-8" style="">
                        <div class="row">
                            <div class="my-2 col-lg-6">
                                <div class="text-center border rounded-0 card h-100">
                                <div class="card-body">
                                    <img class="mx-auto my-3" src="{{ asset('images/sketch.png') }}" alt="" style="width: 150px;">
                                    <h2 class="card-text">ARCHITECTURAL DESIGNS</h2>                                </div>
                                </div>
                            </div>
                            <div class="my-2 col-lg-6">
                                <div class="text-center border rounded-0 card h-100">
                                <div class="card-body">
                                    <img class="mx-auto my-3" src="{{ asset('images/valuation.png') }}" alt="" style="width: 150px;">
                                    <h2 class="card-text">PROPERTY VALUATION</p>
                                </div>
                                </div>
                            </div>
                            <div class="my-2 col-lg-6">
                                <div class="text-center border rounded-0 card h-100">
                                <div class="card-body">
                                    <img class="mx-auto my-3" src="{{ asset('images/facility management.png') }}" alt="" style="width: 170px;">
                                    <h2 class="card-text">PROPERTY & FACILITY MANAGEMENT</p>
                                </div>
                                </div>
                            </div>
                            <div class="my-2 col-lg-6">
                                <div class="text-center border rounded-0 card h-100">
                                <div class="card-body">
                                    <img class="mx-auto my-3" src="{{ asset('images/billboard.png') }}" alt="" style="width: 170px;">
                                    <h2 class="card-text">ESTATE AGENCY AND MARKETING</p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="team" class="py-5">
            <div class="text-center">
                <h2 class="text-center">OUR TEAM</h2>
            </div>
            <div class="row">
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" >
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="text-center card-body">
                                        <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                        <h4 class="card-title">Sunlimetech</h4>
                                        <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="mt-4 text-center card-body">
                                        <h4 class="card-title">Sunlimetech</h4>
                                        <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="text-center card-body">
                                        <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_02.png" alt="card image"></p>
                                        <h4 class="card-title">Sunlimetech</h4>
                                        <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="mt-4 text-center card-body">
                                        <h4 class="card-title">Sunlimetech</h4>
                                        <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="text-center card-body">
                                        <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_03.png" alt="card image"></p>
                                        <h4 class="card-title">Sunlimetech</h4>
                                        <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="mt-4 text-center card-body">
                                        <h4 class="card-title">Sunlimetech</h4>
                                        <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
            </div>
        </section>
    </div>
    <div class="py-5 text-white contacts-section bg-light" id="contacts-section">
        <div class="container min-vh-100 d-flex flex-column">
            <div class="mx-auto border-0 shadow card w-100 card-default rounded-0 text-dark">
                <div class="card-body">
                    <div class="row d-flex justify-content-center align-items-center flex-column">
                        <h2 class="">CONTACT US</h2>
                        <p class="text-center text-dark w-50">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>
                    </div>
                    <div class="row d-flex justify-content-center">
                        @if ($errors->any())
                            <div class="w-1 text-center alert alert-danger w-75" id="error-container">
                                <ul style="list-style: none;">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{ Session('message') }}
                            </div>
                        @endif
                    </div>
                    <div class="py-3 row">
                        <div class="mx-auto mb-5 col-md-9 mb-md-0">
                            <form id="contact-form" name="contact-form" action="{{ route('email.submit') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="mb-0 md-form">
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Full name here">
                                            <label for="name" class="">Your name</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="mb-0 md-form">
                                            <input type="text" id="email" name="email" class="form-control" placeholder="Email address">
                                            <label for="email" class="">Your email</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-0 md-form">
                                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                                            <label for="subject" class="">Subject</label>
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">
                                        <div class="md-form">
                                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Type your message here ..."></textarea>
                                            <label for="message">Your message</label>
                                        </div>

                                    </div>
                                </div>
                                <!--Grid row-->

                            </form>

                            <div class="d-flex flex-column align-items-center">
                                <div class="py-3 mx-auto g-recaptcha brochure__form__captcha" data-sitekey="6LehxWYbAAAAAOZqAkMM8GS8xBJTMBnuj0iKZyzm"></div>
                                <a class="mx-auto btn btn-primary btn-lg" onclick="document.getElementById('contact-form').submit();" style="border-radius: 200px;">Send <i class="fas fa-paper-plane"></i></a>
                            </div>
                            <div class="status"></div>
                        </div>
                        <!--Grid column-->
                    </div>

                </div>
            </div>
            <div class="border-0 shadow card card-default rounded-0 bg-light text-dark">
                <div class="card-body">
                    <div class="text-center row">
                        <div class="py-4 col-lg-4">
                            <div class="pb-3 icon">
                                <i class="fas fa-map-marked-alt text-light" style="font-size: 4rem; background-color: #aaa; padding: 35px; border-radius: 1000px;"></i>
                            </div>
                            <div class="contact-text">
                                <p class="h5">Address: <span class="text-muted">Kasungu Dam, Kasungu</span></p>
                            </div>
                        </div>
                        <div class="py-4 col-lg-4">
                            <div class="pb-3 icon">
                                <i class="fas fa-envelope text-light" style="font-size: 4rem; background-color: #aaa; padding: 35px; border-radius: 100px;"></i>
                            </div>
                            <div class="contact-text">
                                <p class="h5">Email: <span class="text-muted">mwinamaemmanuel@gmail.com</span></p>
                            </div>
                        </div>
                        <div class="py-4 col-lg-4">
                            <div class="pb-3 icon">
                                <i class="fas fa-phone text-light" style="font-size: 4rem; background-color: #aaa; padding: 35px; border-radius: 100px;"></i>
                            </div>
                            <div class="contact-text">
                                <p class="h5">Phone: <span class="text-muted">+265 888 401 762 || +265 993 810 562</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });

    // $('#contact-form').on('submit', function(event){
    //     event.preventDefault();
    //     name = $('#name').val();
    //     email = $('#email').val();
    //     subject = $('#subject').val();
    //     message = $('#message').val();

    //     $.ajax({
    //         url: "email",
    //         type: "POST",
    //         data: {
    //             name:name,
    //             email:email,
    //             subject:subject,
    //             message:message
    //         },
    //         success:function(response){
    //             console.log(response);
    //             if(response){
    //                 $('#error-container').text(response.success);
    //                 $("#contact-form")[0].reset();
    //             }
    //         },
    //         error: function(response){
    //             $('#error-container').text(response)
    //         }
    //     })
    // });
</script>
@endsection
