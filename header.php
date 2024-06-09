<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Conference</title>

    <!-- css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-...">
   
    <style>
  body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    font-family: Arial, sans-serif;
  }

  .hero {
    position: relative;
    background-image: url('assets/images/porch (2).jpg');
    background-size: cover;
    background-position: center;
    height: 120vh;
    color: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Dark overlay for better text readability */
  }

  .hero-content {
    position: relative;
    left: 10%;
    text-align: left;
    max-width: 40%;
    background: rgba(255, 255, 255, 0.2); /* Semi-transparent background */
    padding: 20px;
    border: 2px solid #fff; /* White border */
    border-radius: 10px;
  }

  .hero-content h1,
  .hero-content h2,
  .hero-content h3 {
    margin: 0;
    padding: 5px 0;
  }

  .hero-content h3 {
    font-size: 35px;
  }

  .hero-content h3 b {
    color: green;
  }

  .hero-content .icon-text {
    font-size: 1.2rem;
    margin-top: 10px;
  }

  .hero-content .icon-text i {
    margin-right: 10px;
  }

  .buttons-container {
    position: relative;
    right: 10%;
    display: flex;
    flex-direction: column;
  }

  .buttons-container a {
    background-color: red;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    margin-bottom: 10px;
    font-size: 1rem;
    text-align: center;
  }

  .buttons-container a:hover {
    background-color: darkred;
  }
</style>
</style>
   
   <style>
        @media (min-width: 1200px) {
    .container {
        width: 100% !important;
    }
}
body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
    background-color:rgb(218 212 231);
    font-size:20px;
    font-width:200px;
}

    </style>
      <style>
        @media (min-width: 1200px) {
            .container {
                width: 100% !important;
            }
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
            animation: marquee 27s linear infinite;
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

        @media (min-width: 1200px) {
    .container {
        width: 100% !important;
    }
}

.white-box {
    background-color: rgb(254 226 226);
    width: 90%;
    max-width: 700px;
    padding: 20px;
    margin-top: 20px;
    border: 2px solid #ccc;
    border-radius: 10px;
    text-align: center;
    /* Center the box horizontally */
    margin-left: auto;
    margin-right: auto;
}

.white2-box {
    width: 100%;
    max-width: 1136px;
    padding: 20px;
    margin-top: 20px;
    border: 2px solid #ccc;
    border-radius: 10px;
    text-align: center;
    /* Center the box horizontally */
    margin-left: auto;
    margin-right: auto;
}


/* styles.css */
.footer {
            background-color: #f3f4f6;
            border-top: 2px solid #4a5568;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px 0;
        }
        .custom-hover:hover {
            border-radius: 26px;
background: rgb(218 212 231);
box-shadow:  21px 21px 52px #d4d0d0,
             -21px -21px 52px #ffffff;
             border:2px solid blue;
    }
        .footer-column {
            flex: 1 1 300px;
            margin: 0 20px;
        }

        .footer-column h2 {
            font-size: 1.5rem;
            font-weight: 500;
            margin-bottom: 1rem;
            border-bottom: 4px solid #3b82f6;
            padding-bottom: 0.5rem;
            border-radius: 5px;
        }

        .footer-column nav ul {
            list-style-type: none;
            padding: 0;
        }

        .footer-column nav ul li {
            margin-bottom: 0.5rem;
        }

        .footer-social {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .footer-social a {
            display: inline-block;
            margin: 0 10px;
            padding: 10px;
            background-color: #3b82f6;
            color: #fff;
            border-radius: 50%;
            transition: background-color 0.3s;
        }

        .footer-social a:hover {
            background-color: #fff;
            color: #3b82f6;
        }



        .navbar-nav li a:hover {
            color:rgb(234 88 12)!important;
    }

    hr {
    margin-top: 0px !important;
    margin-bottom: 0px !important;
    border: 0;
    border-top: 1px solid #eee;
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
            <li><a href="index.php" style="font-size:15px;">About</a></li>
            <li><a href="Committee.php" style="font-size:15px;">Committee</a></li>              
            <li><a href="keynote.php" style="font-size:15px;">Keynote</a></li>
            <li><a href="Tracks.php" style="font-size:15px;">Tracks</a></li>
            <li class="dropdown">
            <a href="authors.php" class="dropdown-toggle" data-toggle="dropdown" style="font-size:15px;">Authors <span class="caret"></span></a>
            <ul class="dropdown-menu" style="background-color: black; ">
                <li><a href="" style="color:white;">Paper Submission</a></li>
                <hr>
                <li><a href="#" style="color:white;">Important Dates</a></li><hr>
                <li><a href="#" style="color:white;">Call For Papers</a></li>
            </ul>
        </li>       
            <li><a href="sponsors.php" style="font-size:15px;">Sponsors</a></li>      
            <li><a href="registration.php" style="font-size:15px;">Registration</a></li>
            <li><a href="gallery.php" style="font-size:15px;">Gallery</a></li>
        </ul>
            </div>
            
        </div><!-- /.container -->
        
    </nav>
