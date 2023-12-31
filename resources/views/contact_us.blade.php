<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Hongdat Contact Us</title>

    <!-- Favicon -->
    <link rel="icon" href="assets/img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TVYTYM0REQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TVYTYM0REQ');
    </script>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- ##### Header Area Start ##### -->
    @include('partials.main_header')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax"
        style="background-image: url(assets/img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{URL::to('/').'/'}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <?php if (Session::has('message')) { ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col xs-12" style="padding: 30px;">
        <div class="alert alert-success alert-dismissible" style="text-align: center;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?= Session::get('message'); ?>
        </div>
    </div>
    <?php } ?>
    <?php if (Session::has('error')) { ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col xs-12" style="padding: 30px;">
        <div class="alert alert-danger alert-dismissible" style="text-align: center;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?= Session::get('error'); ?>
        </div>
    </div>
    <?php } ?>

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0">
        <div class="container">
            <div class="row c-form">
                <!-- Single Contact Area -->

                <div class="col-12 col-lg-8">
                    <!-- Contact Area -->
                    <div class="contact-form-area contact-page">
                        <h4 class="mb-50">Send a message</h4>

                        <form action="save_contact" method="post" id="contact-form" role="form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your E-mail" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject"
                                            placeholder="Your Subject" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" name="message" id="message"
                                            cols="30" rows="10" placeholder="Your Message" required></textarea>
                                    </div>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group top_bottom" style="padding-top: 10px;">
                                    <div id="g-recaptcha-response" class="g-recaptcha"
                                        data-sitekey="6LfvciAbAAAAAAYXsPLYGpMv2g2GMamnfljCUbrI"></div>
                                </div>
                                <div id="g-recpatcha-error" class="alert alert-danger alert-dismissible"
                                    style="text-align: center;display:none">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    Please click on the reCAPTCHA box.
                                </div>
                                <div class="col-12">
                                    <button class="btn credit-btn box-shadow btn-2" type="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>




                <!-- Single Contact Area -->
                <?php if (isset($response[0]) && !empty($response[0])) { ?>
                <div class="col-12 col-lg-4">
                    <div class="single-contact-area mb-100">
                        <div class="contact--area contact-page">
                            <!-- Contact Content -->
                            <div class="contact-content">
                                <h5>Get in touch</h5>

                                <!-- Single Contact Content -->
                                <span style="color: #e83b43;font-weight: 700;">Main:</span>
                                <div class="single-contact-content d-flex align-items-center"
                                    style="margin-bottom: 15px;">

                                    <div class="icon">
                                        <img src="assets/img/core-img/location.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>{{$response[0]['showroom_address']}}</p>
                                    </div>
                                </div>
                                <!-- Single Contact Content -->
                                <span style="color: #e83b43;font-weight: 700;">Factory:</span>
                                <div class="single-contact-content d-flex align-items-center">

                                    <div class="icon">
                                        <img src="assets/img/core-img/location.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>{{$response[0]['factory_address']}}</p>
                                    </div>
                                </div>

                                <div class="single-contact-content d-flex align-items-center">
                                    <div class="icon">
                                        <img src="assets/img/core-img/call.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>{{$response[0]['mobile']}}</p>
                                        <span>mon-fri , 09.am - 06.pm</span>
                                    </div>
                                </div>
                                <!-- Single Contact Content -->
                                <div class="single-contact-content d-flex align-items-center">
                                    <div class="icon">
                                        <img src="assets/img/core-img/message2.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>{{$response[0]['email']}}</p>
                                        <span>we reply in 24 hrs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } else { ?>
                <div class="col-12 col-lg-4">
                    <div class="single-contact-area mb-100">
                        <div class="contact--area contact-page">
                            <!-- Contact Content -->
                            <div class="contact-content">
                                <h5>Get in touch</h5>

                                <!-- Single Contact Content -->
                                <span style="color: #e83b43;font-weight: 700;">Main:</span>
                                <div class="single-contact-content d-flex align-items-center"
                                    style="margin-bottom: 15px;">

                                    <div class="icon">
                                        <img src="assets/img/core-img/location.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>Shop08, F03, China cluster,<br> international city Dubai,<br> United Arab
                                            Emirates</p>
                                    </div>
                                </div>
                                <!-- Single Contact Content -->
                                <span style="color: #e83b43;font-weight: 700;">Factory:</span>
                                <div class="single-contact-content d-flex align-items-center">

                                    <div class="icon">
                                        <img src="assets/img/core-img/location.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>Jebel Ali Industrial Area 1,<br> Dubai , U.A.E</p>
                                    </div>
                                </div>

                                <div class="single-contact-content d-flex align-items-center">
                                    <div class="icon">
                                        <img src="assets/img/core-img/call.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>+971 556031358</p>
                                        <span>mon-fri , 09.am - 06.pm</span>
                                    </div>
                                </div>
                                <!-- Single Contact Content -->
                                <div class="single-contact-content d-flex align-items-center">
                                    <div class="icon">
                                        <img src="assets/img/core-img/message2.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>sales.hongdat@gmail.com</p>
                                        <span>we reply in 24 hrs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>


        <!-- ##### Google Maps ##### -->
        <div class="map-area">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d71244.66662579183!2d55.37477902700429!3d25.16494928497654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f61de47e98d11%3A0xbda227caf7327b53!2sHongdat%20Furniture!5e1!3m2!1sen!2sbd!4v1694789136662!5m2!1sen!2sbd"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </section>
    <!-- ##### Contact Area End ##### -->




    <!-- ##### Footer Area Start ##### -->
    @include('partials.footer')
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="assets/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="assets/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="assets/js/active.js"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script>
        //Recaptcha Validation
            $(document).ready(function () {
           (function () {
        function checkRecaptcha() {
            var res = $('#g-recaptcha-response').val();

            if (res == "" || res == undefined || res.length == 0)
                return false;
            else
                return true;
        }


        $('form').submit(function (e) {
            if (!checkRecaptcha()) {
                $("#g-recpatcha-error").show();
                return false;
            }
        });
    }());
            });
    </script>
</body>

</html>