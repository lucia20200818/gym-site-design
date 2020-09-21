<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8" />
        <title>FitBee.Add testimonial</title>

        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- jQuery -->
        <script src="plugins/jQuery/jquery.min.js"></script>
        <style>
            body {
                /* body background setting*/
                background-image: url(images/17.jpg);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;
                background-size: cover;
            }
        </style>

        <!-- ** Plugins Needed for the Project ** -->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css" />

        <!-- Main Stylesheet -->
        <link href="css/style.css" rel="stylesheet" />
    </head>

    <body style="background-color: black;">
        <!-- Header Start -->
        <header class="navigation bg-dark">
            <!-- set navigation bar background black to fit the body background -->
            <div class="topnav">
                <!-- set div for topnav-->
                <a href="contact_us.html">Contact</a>
                <!-- contact link-->
                <a href="addTestimonial.html">Add Testimonial</a>
                <!-- add testmonial link-->
                <a href="testimonial.html">Testimonial</a>
                <!-- view testmonial link-->
                <a href="classes.html">class</a>
                <!-- classes link-->
                <a href="registration.html">Register</a>
                <!-- registration link-->
                <a href="index.html">Index</a>
                <!-- index link-->
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo1.png" alt="" class="img-left" />
                </a>
                <!-- logo link to index-->
            </div>
            <!-- end div topnav-->
        </header>

        <!-- Header Close -->

        <!-- About start -->

        <div class="container">
            <!--container div-->

            <div class="row justify-content-center mb-5">
                <!--div for set align to the title-->
                <div class="section-title col-lg-8 text-center">
                    <!--title container-->
                    <h2 class="mt-3 mb-4 text-white">Add Testimonials</h2>
                    <div class="divider"></div>
                    <!--divider-->
                    <p>Show everyone your experience in FitBee!</p>
                    <!--description-->
                </div>
                <!--end div-->
            </div>
            <!--end div-->
        </div>
        <!--end div-->

        <form class="form-horizontal">
            <!--horizon forms-->
            <div class="form-group">
                <!--form group for name-->
                <label class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" />
                </div>
            </div>
            <!--end name group-->
            <div class="form-group">
                <!--group for email-->
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" />
                </div>
            </div>
            <!--end email group-->
        </form>
        <!--end horizon form tag-->
        <form>
            <div class="form-group">
                <!--form group for input textarea of testimonial-->
                <label>Testimonial</label>
                <textarea class="form-control" rows="20"></textarea>
                <!--textarea-->
            </div>
            <!--end testimonial group-->
        </form>
        <div class="card-footer">
            <button class="btn btn--radius-2 btn--blue-2" type="submit">Send Testimonial</button>
        </div>
        <!--button in the end-->
    </body>
</html>
