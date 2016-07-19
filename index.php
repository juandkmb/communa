
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Communa | Lorem Ipsum Dolor</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="libraries/font-awesome-4.6.3/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900|Oswald:400,300,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/mighty.css" rel="stylesheet">

  </head>

  <body>

    <?php include('modules/navigation.php'); ?>

    <!-- Mighty Header Section -->
    <section class="mighty-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mighty-msg">
            <!-- <img src="images/logo-bubbles.png" width="100"/> -->
            <h1>Give Your Opinion.</br> Earn Points.</br> Get Money.</h1>
          </div>
          <div class="col-md-4">
            <?php include('modules/home-registration-form.php'); ?>
          </div>
        </div>
      </div>
    </section>

    <section class="mighty-rewards">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <h3>Rewards</h3>
          </div>
          <div class="col-md-2">
            <img src="images/itunes-cards.png" width="90" />
          </div>
          <div class="col-md-2 col-xs-6">
            <img src="images/macys.png" width="90" />
          </div>
          <div class="col-md-2 col-xs-6">
            <img src="images/amazon-cards.png" width="90" />
          </div>
          <div class="col-md-2">
            <img src="images/visa.png" width="90" />
          </div>
          <div class="col-md-2">
            <button class="mighty-rewards-btn btn" onclick="location.href = '/communa/rewards.php';">Learn More</button>
          </div>
        </div>
      </div>
    </section>

    <section class="mighty-home-content-1">
      <div class="container">
        <div class="row mighty-home-content-beautifier">
          <div class="mobile-images text-center col-md-4">
            <img src="images/why.png" width="250"/>
          </div>
          <div class="col-md-8 mighty-home-content-p">
            <h2>Why Join Us?</h2>
            <p>Communa, is an online community where opinions matter! Members are able to voice their toughts and ideas,
            while also getting rewarded. Communa members also have the added benefit of working from home anytime during
            the day and anywhere they'd like.</p>
            <button class="mighty-home-content-1-btn btn" onclick="location.href = '/communa/about.php';">Learn More</button>
          </div>
        </div>
      </div>
    </section>

    <section class="mighty-home-content-2">
      <div class="container">
        <div class="row mighty-home-content-beautifier">
          <div class="col-md-8 mighty-home-content-p">
            <h2>How Do You Participate?</h2>
            <p>You can join by simply filling out our free registration form. Once your membership is confirmed by email,
            you can start earning cash and getting reward points by giving your opinions on online paid surveys. These
            surveys are available anytime and anywhere via PC, Laptop, or Cell Phone.</p>
            <button class="mighty-home-content-2-btn btn">Signup Today</button>
          </div>
          <div class="text-center col-md-4">
            <img src="images/free-sign-up.png" />
          </div>
        </div>
      </div>
    </section>

    <?php include('modules/footer.php'); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
