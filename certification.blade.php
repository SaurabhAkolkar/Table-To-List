<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <title>Certificate</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300;1,400;1,500&family=Titillium+Web:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">

    <style>
        *{
            box-sizing: border-box;
        }
        body,html{
            font-family:'Titillium Web', 'Roboto', sans-serif;
            font-size:16px;
            font-weight:400;
            background:#ffffff;
            color:#010101;
            line-height:1.4;
            padding:0;
            margin:0 auto;
            width:100%;
            height:100%;
        }
        .la-cert__section{
          width:100%;
          height:100vh;
          overflow: hidden;
          background-position: top !important;
          background-size: 100% auto !important;
          box-shadow: 0px 3px 50px #00000029;
        }
        .la-cert__info{
          height:100%;
          padding-top:50px;
          display: flex;
          flex-direction: column;
          justify-content: space-between;
        }
        .la-cert__logo img{
          width:120px;
          height:120px;
          margin-bottom: 15px;
        }
        .la-cert__content-title{
          font-size: 22px;
          font-weight: 700;
          line-height: 1.4;
          margin-bottom: 0;
          color:#1A2233;
        }
        .la-cert__content-tag{
          font-size: 16px;
          font-weight: 600;
          color:#718182;
        }
        .la-cert__content-person{
          font-size: 64px;
          font-weight: 600;
          line-height: 1;
          margin-top:30px;
          color:#1A2233;
        }
        .la-cert__content-para{
          font-family: 'Roboto';
          font-size: 16px;
          font-weight: 400;
          font-style:italic;
          color:#5A5A5C;
          letter-spacing: 0.5px;
          margin-bottom:60px;
        }
        .la-cert__sign{
          font-family: 'Roboto';
        }
    </style>
</head>


<body>
    <section  class="la-cert__section"  style="background:url('../images/learners/course-benefits/certificate-bg.png') no-repeat;" style="margin: 10%">
      <div class="container la-cert__container p-5">
        <div class="row">
          <div class="col-md-10">
            <div class="la-cert__info">
              <div class="la-cert__content">
                <div class="la-cert__logo">
                  <img src="./images/learners/logo2.svg" alt="logo" class="img-fluid mr-auto d-block" />
                </div>
                <h6 class="la-cert__content-title text-uppercase">
                  Cerificate of
                  <span style="color:#7400D7">Completion</span>
                </h6>
                <p class="la-cert__content-tag">Awarded to</p>

                <h1 class="la-cert__content-person text-uppercase">ANNA MARIA</h1>
                <p class="la-cert__content-para">
                  Certificate presented on successfully completing <br/>
                  <span style="color:#7400D7; font-weight:500">Advanced Tattoo Tutorials</span>
                </p>
              </div>

              <div class="la-cert__sign">
                <div class="la-cert__sign-name mb-2" style="font-weight:600;color:#000000;">Traviss Cott</div>
                <div class="la-cert__sign-designation" style="color:#ABABAB;font-size:14px;">Designation goes here</div>
                <div class="la-cert__sign-org" style="color:#ABABAB;font-size:14px;">LILA</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>