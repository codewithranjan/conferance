<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Conference</title>

    <!-- css -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
        @media (min-width: 1200px) {
    .container {
        width: 100% !important;
    }
}
body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
    background-color:rgb(218 212 231);
}

    </style>
      <style>
        @media (min-width: 1200px) {
            .container {
                width: 100% !important;
            }
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
            background-color: rgb(218, 212, 231);
        }
        .marquee-container {
            margin-top: 70px;
            overflow: hidden;
            white-space: nowrap;
            box-sizing: border-box;
            background-color: white;
            padding: 10px 0;
        }
        .marquee-content {
            display: inline-block;
            white-space: nowrap;
            animation: marquee 15s linear infinite;
        }
        .marquee-content img {
            display: inline-block;
            margin-right: 20px;
            height: 50px;
            vertical-align: middle;
        }
        @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
    </style>
</head>
<body data-spy="scroll" data-target="#site-nav">
    <nav id="site-nav" class="navbar navbar-fixed-top navbar-custom">
        <div class="">
            <div class="navbar-header">

                <!-- logo -->
                <div class="site-branding" style="padding-left:10px;">
                    <a class="logo" href="index.php" style="    letter-spacing: 0px;">
                        <h3 style=" font-size:35px;"><b style="color:rgb(234 88 12);">MAC</b>2025</h3>
                    </a>
                </div>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div><!-- /.navbar-header -->



            <div class="collapse navbar-collapse" id="navbar-items" style="background-color:black;    padding-right: 64px;">
               <ul class="nav navbar-nav navbar-right" style="padding: 17px;">
            <!-- navigation menu -->
            <li><a href="index.php" style="font-size:20px;">About</a></li>
            <li><a href="Committee.php" style="font-size:20px;">Committee</a></li>              
            <li><a href="Tracks.php" style="font-size:20px;">Tracks</a></li>                  
            <li><a href="Authors.html" style="font-size:20px;">Authors</a></li>         
            <li><a href="Sponsors.html" style="font-size:20px;">Sponsors</a></li>      
            <li><a href="Registration.html" style="font-size:20px;">Registration</a></li>
            <li><a href="Gallery.html" style="font-size:20px;">Gallery</a></li>
        </ul>
            </div>
            
        </div><!-- /.container -->
        
    </nav>

    <section id="speakers" class="section speakers ">
        <div class="container mt-5">

            <div class="row">
                <div class="col-md-12">
                    <div class="speaker">
                        <h2>Patron</h2>
                        <figure>
                            <img alt="" class="img-responsive center-block" src="assets/images/Director Sir.jpeg" style="height:150px;">
                        </figure>

                        <h4>Dr. Karunesh Kumar Shukla</h4>

                        <p>Director MANIT Bhopal</p>

                        <ul class="social-block">
                            <li><a href=""><i class="ion-social-twitter"></i></a></li>
                            <li><a href=""><i class="ion-social-facebook"></i></a></li>
                            <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                            <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                        </ul>

                    </div><!-- /.speaker -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="speaker">
                        <h2>General Chair: 
                        </h2>
                        <figure>
                            <img alt="" class="img-responsive center-block" src="assets/images/Director Sir.jpeg" style="height:150px;">
                        </figure>

                        <h4>Dr. Karunesh Kumar Shukla</h4>

                        <p>Director MANIT Bhopal</p>

                        <ul class="social-block">
                            <li><a href=""><i class="ion-social-twitter"></i></a></li>
                            <li><a href=""><i class="ion-social-facebook"></i></a></li>
                            <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                            <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                        </ul>

                    </div><!-- /.speaker -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
         
        </div>
    </section>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="site-info">Designed and <br> Developed by <a href="http://technextit.com">Technext Limited</a></p>
                    <ul class="social-block">
                        <li><a href=""><i class="ion-social-twitter"></i></a></li>
                        <li><a href=""><i class="ion-social-facebook"></i></a></li>
                        <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                        <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- script -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>