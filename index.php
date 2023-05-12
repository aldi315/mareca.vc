<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    @media only screen and (max-width: 425px) {
      body {
        background-size: contain;
      }
    }
  </style>

  <style>
    @charset "utf-8";
    /* CSS Document */
    @import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,500,400,300,800);
    /* @import url(http://fonts.googleapis.com/css?family=Ubuntu:300,400,700); */
    /* @import url(http://fonts.googleapis.com/css?family=Roboto:100,300,400); */

    body {
      background-color: #f0f3f6;
      overflow-x: hidden;

    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    div,
    input,
    p,
    a {
      font-family: "Open Sans";
      margin: 0px;
    }

    h3 {
      font-size: 22px;
    }

    /* .container-fluid, */
    .container {
      margin: auto;
      padding: 0px 15px;
      max-width: 1200px;
    }

    label {
      font-weight: 500;
    }

    .form-group {
      margin-bottom: 5px;
    }


    input,
    textarea,
    select,
    button {
      margin: 5px 0px;
      font-size: 13px !important;
      border-radius: 0px;
    }

    input[type=text],
    input[type=password],
    textarea,
    input[type=email],
    select,
    textarea {
      width: 100%;
      border: 1px solid #DADADA;
      padding: 5px 10px;
      height: 45px;
    }

    input[type=submit],
    input[type=button],
    input[type=reset],
    button {
      border: none;
      font-size: 11px;
      border-radius: 3px;
      height: 45px;
      color: #FFF;
    }

    .btn:hover,
    .btn:focus {
      cursor: pointer;
      color: #FFF;
    }

    input[type=radio] {
      margin: 0px;
      padding: 0px;
      height: auto;
    }

    .form-control {
      box-shadow: none !important;
      border-radius: 0px;
    }

    .form-control:focus {
      border: 1px solid #CCC;
    }

    .btn:focus {
      box-shadow: none !important;
    }

    textarea {
      width: 100%;
    }

    input[type=reset] {
      margin-left: 10px;
    }

    textarea {
      min-height: 100px;
    }

    a {
      color: inherit;
    }

    a:hover,
    a:focus {
      text-decoration: none !important;
      color: inherit !important;
    }

    ul {
      margin: 0px;
      padding: 0px;
      list-style: none;
    }

    .relative {
      position: relative;
    }

    .absolute {
      position: absolute;
    }

    .fixed {
      position: fixed;
    }

    .pricing-table-container {
      padding: 50px 0px;
    }

    .description {
      padding: 15px 0px;
    }

    .description a {
      padding: 10px;
      font-size: 13px;
      display: block;
      font-weight: bold;
      border-bottom: 1px solid #DDD;
    }

    .description a.active {
      background-color: #FFF;
      padding-left: 25px;
    }

    @charset "utf-8";

    /* DEMO 01 */
    .pricing-table-3 {
      background-color: #FFF;
      margin: 15px auto;
      box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
      max-width: 300px;
      border-radius: 0px 10px 0px 10px;
      overflow: hidden;
      position: relative;
      min-height: 250px;
      transition: all ease-in-out 0.25s;
    }

    .pricing-table-3:hover {
      transform: scale(1.1, 1.1);
      cursor: pointer;
    }

    .pricing-table-3.basic .price {
      background-color: #0eb913;
      color: #FFF;
    }

    .pricing-table-3.premium .price {
      background-color: #ff9f00;
      color: #FFF;
    }

    .pricing-table-3.business .price {
      background-color: #c3185c;
      color: #FFF;
    }

    .pricing-table-3 .pricing-table-header {
      background-color: #212121;
      color: #FFF;
      padding: 20px 0px 0px 20px;
      position: absolute;
      z-index: 5;
    }

    .pricing-table-3 .pricing-table-header p {
      font-size: 12px;
      opacity: 0.7;
    }

    .pricing-table-3 .pricing-table-header::before {
      content: "";
      position: absolute;
      left: -50px;
      right: -180px;
      height: 125px;
      top: -50px;
      background-color: #212121;
      z-index: -1;
      transform: rotate(-20deg)
    }

    .pricing-table-3 .price {
      position: absolute;
      top: 0px;
      text-align: right;
      padding: 110px 20px 0px 0px;
      right: 0px;
      left: 0px;
      font-size: 20px;
      z-index: 4;
    }

    .pricing-table-3 .price::before {
      content: "";
      position: absolute;
      left: 0px;
      right: 0px;
      height: 100px;
      bottom: -25px;
      background-color: inherit;
      transform: skewY(10deg);
      z-index: -1;
      box-shadow: 0px 5px 0px 5px rgba(0, 0, 0, 0.05);
    }


    .pricing-table-3 .pricing-body {
      padding: 20px;
      padding-top: 200px;
    }

    .pricing-table-3 .pricing-table-ul li {
      color: rgba(0, 0, 0, 0.7);
      font-size: 13px;
      padding: 10px;
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .pricing-table-3 .pricing-table-ul .fa {
      margin-right: 10px;
    }

    .pricing-table-3.basic .pricing-table-ul .fa {
      color: #0eb913;
    }

    .pricing-table-3.premium .pricing-table-ul .fa {
      color: #ff9f00;
    }

    .pricing-table-3.business .pricing-table-ul .fa {
      color: #c3185c;
    }

    .pricing-table-3 .view-more {
      margin: 10px 20px;
      display: block;
      text-align: center;
      background-color: #212121;
      padding: 10px 0px;
      color: #FFF;
    }
  </style>
  <title>Mareca Signage System</title>
</head>
<!-- HTML navbar dengan menu di sebelah kanan -->
<nav class="navbar navbar-expand-lg" style="background-color: #212529; color: white;">
  <a class="navbar-brand" href="#">Mareca</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="check-license.php">Subscription Status</a>
      </li>
  
      <li class="nav-item">
        <a class="nav-link" href="https://display.mareca.vc">CMS Login</a>
      </li>
    </ul>
  </div>
</nav>

<body style="background-size: 2560px; background-image:url('https://www.mareca.vc/assets/bg.png'); background-repeat: no-repeat;">

  <div class="container-fluid">
    <div class="row" style="padding: 3%">
      <div class="col-lg-6 col-12">

        <div class="row" style="margin-top: 40px;">
          <img style="padding-left: 1.25rem;" src="https://display.mareca.vc/theme/custom/mareca/img/xibologo.png" class="img-fluid" alt="Mareca Signage System" width="200rem">
          <br><br>
          <div class="card w-100" style="border: 0; font-size: 1.5rem;">

            <div class="card-body">

              <p style="line-height: 2.8rem;"><b style="font-size: larger;">Mareca Signage System</b> adalah sistem manajemen konten berbasis web yang dapat dijalankan pada berbagai perangkat player dengan basis Windows, Android, Linux, Tizen maupun WebOS.</p><br>
              <a href="https://www.mareca.vc/assets/mareca_signage_system_brochure.pdf" target="_blank" style="background-color: #0a4499; color:white" class="btn btn-lg">Download Brosur</a>
              
            </div>
          </div>

        </div>
        <br>
        <div class="row">
          <div class="col-lg-2 col-6">
            <div class="card text-center" style="padding: 0; border: 0px;">
              <img class="card-img-top mx-auto" style="width:70%" src="https://www.mareca.vc/assets/icon-players.png" alt="Card image cap">
              <div class="card-body" style="padding:0.2rem">
                <h5 class="card-title">PLAYERS</h5>
                <p class="card-text">Mendukung berbagai jenis perangkat player.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-6">
            <div class="card text-center" style="padding: 0; border: 0px;">
              <img class="card-img-top mx-auto" style="width:70%" src="https://www.mareca.vc/assets/icon-schedules.png" alt="Card image cap">
              <div class="card-body" style="padding:0.2rem">
                <h5 class="card-title">SCHEDULES</h5>
                <p class="card-text">Sistem penjadwalan konten yang sangat fleksibel.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-6">
            <div class="card text-center" style="padding: 0; border: 0px;">
              <img class="card-img-top mx-auto" style="width:70%" src="https://www.mareca.vc/assets/icon-controls.png" alt="Card image cap">
              <div class="card-body" style="padding:0.2rem">
                <h5 class="card-title">CONTROLS</h5>
                <p class="card-text">Kontrol terpusat memungkinkan kita mengontrol banyak perangkat sekaligus.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-6">
            <div class="card text-center" style="padding: 0; border: 0px;">
              <img class="card-img-top mx-auto" style="width:70%" src="https://www.mareca.vc/assets/icon-engage.png" alt="Card image cap">
              <div class="card-body" style="padding:0.2rem">
                <h5 class="card-title">ENGAGE</h5>
                <p class="card-text">Berbagai pilihan konten dinamis yang akan menarik perhatian.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-6">
            <div class="card text-center" style="padding: 0; border: 0px;">
              <img class="card-img-top mx-auto" style="width:70%" src="https://www.mareca.vc/assets/icon-support.png" alt="Card image cap">
              <div class="card-body" style="padding:0.2rem">
                <h5 class="card-title">SUPPORT</h5>
                <p class="card-text">Tim support lokal kami akan selalu membantu anda.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-6 col-12">
        <div class="row">
          <div class="col-lg-12 col-12">
            <img class="img-fluid" src="https://www.mareca.vc/assets/display-illustration.png" alt="">
          </div>

        </div>
        <div class="row">
          <!-- <div class="col-lg-12 align-self-center">
            <br>
            <div class="text-center" style="display:inline-block;">
              <img class="img-fluid" src="https://www.mareca.vc/assets/price100.png" width="350px" alt="" style="padding: 20px;">
              <img class="img-fluid" src="https://www.mareca.vc/assets/price400.png" width="350px" alt="" style="padding: 20px;">
            </div>

          </div> -->
          <div class="col-lg-12">
            <div class="row justify-content-md-center">
              <div class="col-md-6 col-sm-6">
                <div class="pricing-table-3 basic">
                  <div class="pricing-table-header">
                    <h4><strong>Mareca Lite</strong></h4>

                  </div>
                  <div class="price"><strong>Rp.100.000</strong> / bln</div>
                  <div class="pricing-body">
                    <ul class="pricing-table-ul">
                      <li><i class="fa fa-cloud"></i> 500 MB Disk Space</li>
                      <li><i class="fa fa-database"></i> Indonesia Server</li>
                    </ul><a href="#" class="view-more">Get Started</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="pricing-table-3 premium">
                  <div class="pricing-table-header">
                    <h4><strong>Mareca Pro</strong></h4>

                  </div>
                  <div class="price"><strong>Rp.400.000 </strong> / bln</div>
                  <div class="pricing-body">
                    <ul class="pricing-table-ul">
                      <li><i class="fa fa-cloud"></i> 10 GB Disk Space</li>
                      <li><i class="fa fa-database"></i> Indonesia Server</li>
                    </ul><a href="#" class="view-more">Get Started</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>

    </div>
  </div>


  <footer>
    <!-- <h5 class="text-center mx-auto"> <a class="nav-link" href="#">Supported by www.matahariled.co.id</a></h5> -->
  </footer>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>