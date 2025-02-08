@extends('layouts.main')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(/images/background/5.jpg)">
        <div class="auto-container">
            <h2>Contact Us</h2>
            <ul class="page-breadcrumb">
                <li><a href="/">home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- contact Form Section -->
    <section class="contact-form-section" style="background-image:url(/images/background/contact.png)">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <h2>Get In Touch</h2>
                <div class="text">Do you have anything in your mind to let us know?  Kindly don't delay to connect to us by means of our contact form.</div>
            </div>

            <div class="row clearfix">

                <!-- Form Column -->
                <div class="form-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!-- contact Form -->
                        <div class="contact-form">

                            <!--contact Form-->
                            <form id="contactForm">
                                @csrf
                                <div class="row clearfix">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" id="name" name="username" placeholder="Your name" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" id="email" name="email" placeholder="Email address" required>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" id="phone" name="phone" placeholder="Phone" required>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <textarea name="message" id="message" placeholder="Message"></textarea>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button class="theme-btn btn-style-one" id="submitContact" type="submit" name="submit-form"><span class="txt">Submit now</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script>
                            $(document).ready(function () {
                                $("#submitContact").click(function (e) {
                                    e.preventDefault();

                                    var _name = $("#name").val();
                                    var _email = $("#email").val();
                                    var _phone = $("#phone").val();
                                    var _message = $("#message").val();

                                    $.ajax({
                                        url: "{{ route('contact.create') }}",
                                        type: "POST",
                                        data: {
                                            _token: "{{ csrf_token() }}",
                                            name: _name,
                                            email: _email,
                                            phone: _phone,
                                            message: _message
                                        },
                                        success: function (response) {
                                            if (response.status) {
                                                toastr.success("Gửi liên hệ thành công!");
                                                $("#contactForm")[0].reset();
                                            } else {
                                                toastr.error("Gửi liên hệ thất bại");
                                            }
                                        },
                                        error: function () {
                                            toastr.error("Lỗi khi gửi! Vui lòng thử lại.");
                                        }
                                    });
                                    return false;
                                });
                            });
                        </script>

                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!-- contact Info List -->
                        <ul class="contact-info-list">
                            <li><strong>Address :</strong><br>256, Stella Orr'e,, New York 24</li>
                        </ul>
                        <!-- contact Info List -->
                        <ul class="contact-info-list">
                            <li><strong>Phone : </strong><a href="tel:1800-456-7890">1800 456 7890</a></li>
                            <li><strong>Email : </strong><a href="mailto:info@stellaorre.com">info@stellaorre.com</a></li>
                        </ul>
                        <!-- contact Info List -->
                        <ul class="contact-info-list">
                            <li><strong>Opening Hours :</strong><br>8:00 AM – 10:00 PM <br> Monday – Sunday</li>
                        </ul>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End contact Form Section -->

    <!-- Map Section -->
    <section class="map-section">
        <div class="outer-container">
            <div class="map-outer">
                <div class="map-canvas"
                     data-zoom="12"
                     data-lat="-37.817085"
                     data-lng="144.955631"
                     data-type="roadmap"
                     data-hue="#ffc400"
                     data-title="Melbourne Australia"
                     data-icon-path="/images/icons/map-marker.png"
                     data-content="(1800) 456 7890 <br> Mon-Sat: 7.00an - 9.00pm">
                </div>
            </div>
        </div>
    </section>
    <!-- End Map Section -->
@endsection
