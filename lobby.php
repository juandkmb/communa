
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

    <?php include('modules/navigation-login.php'); ?>

    <!-- Mighty Header Status Section -->
    <section class="mighty-header-status">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">

            <div class="row">
              <div class="col-sm-12">
                <div class="mighty-progress progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                    <span class="sr-only">70% Complete</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-3">
                <h4>Current Points <span class="mighty-amount">300</span></h4>
              </div>
              <div class="col-sm-3">
                <h4>Paid Out <span class="mighty-amount">500</span></h4>
              </div>
              <div class="col-sm-3">
                <button class="mighty-header-status-btn btn" onclick="location.href = '/communa/cashout.php';">Cash Out</button>
              </div>
              <div class="col-sm-3">
                <button class="mighty-header-status-btn btn" onclick="location.href = '/communa/rewards.php';">View Rewards</button>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="mighty-lobby-filters">
      <div class="container">
        <div class="row">
          <div class="mighty-lobby-filters-scroll">
            <ul>
              <li><a class="mighty-lobby-filters-active" href="#">Featured</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Entertainment</a></li>
              <li><a href="#">LifeStyle</a></li>
              <li><a href="#">Automotive</a></li>
              <li><a href="#">World</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="mighty-surveys">
      <div class="container">
        <div class="mighty-search-bar row">
          <div class="col-md-10 col-md-offset-1">
            <form class="search-bar">
  						<div class="input-group">
  							<span class="input-group-btn">
  								<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
  							</span>
  							<input type="text" class="form-control" placeholder="Search Survey">
  						</div>
  					</form>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <!-- Table -->
            <div class="table-responsive">
            <table id="mighty-surveys-table" class="table">
              <thead class="">
                <tr>
                  <th>Title</th>
                  <th>Type</th>
                  <th>Category</th>
                  <th>Points</th>
                  <th>Est Lenght</th>
                  <th>Close</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="survey-title">Fightful would like to gain insight on UFC &amp; WWE</td>
                  <td>Type</td>
                  <td><span class="survey-category">Sports</span></td>
                  <td class="survey-pts">2000</td>
                  <td class="survey-est">20min</td>
                  <td>2 Days</td>
                  <td><button class="mighty-surveys-btn btn">Take Survey</button></td>
                </tr>
                <tr>
                  <td class="survey-title">Walwart Organic Products at best price</td>
                  <td>Type</td>
                  <td><span class="survey-category">Sports</span></td>
                  <td class="survey-pts">500</td>
                  <td class="survey-est">20min</td>
                  <td>2 Days</td>
                  <td><button class="mighty-surveys-btn btn">Take Survey</button></td>
                </tr>
                <tr>
                  <td class="survey-title">Target Opening doors in Canada</td>
                  <td>Type</td>
                  <td><span class="survey-category">Sports</span></td>
                  <td class="survey-pts">1200</td>
                  <td class="survey-est">20min</td>
                  <td>2 Days</td>
                  <td><button class="mighty-surveys-btn btn">Take Survey</button></td>
                </tr>
                <tr>
                  <td class="survey-title">Fightful would like to gain insight on UFC &amp; WWE</td>
                  <td>Type</td>
                  <td><span class="survey-category">Sports</span></td>
                  <td class="survey-pts">2000</td>
                  <td class="survey-est">20min</td>
                  <td>2 Days</td>
                  <td><button class="mighty-surveys-btn btn">Take Survey</button></td>
                </tr>
                <tr>
                  <td class="survey-title">Walwart Organic Products at best price</td>
                  <td>Type</td>
                  <td><span class="survey-category">Sports</span></td>
                  <td class="survey-pts">500</td>
                  <td class="survey-est">20min</td>
                  <td>2 Days</td>
                  <td><button class="mighty-surveys-btn btn">Take Survey</button></td>
                </tr>
                <tr>
                  <td class="survey-title">Fightful would like to gain insight on UFC &amp; WWE</td>
                  <td>Type</td>
                  <td><span class="survey-category">Sports</span></td>
                  <td class="survey-pts">2000</td>
                  <td class="survey-est">20min</td>
                  <td>2 Days</td>
                  <td><button class="mighty-surveys-btn btn">Take Survey</button></td>
                </tr>
                <tr>
                  <td class="survey-title">Walwart Organic Products at best price</td>
                  <td>Type</td>
                  <td><span class="survey-category">Sports</span></td>
                  <td class="survey-pts">500</td>
                  <td class="survey-est">20min</td>
                  <td>2 Days</td>
                  <td><button class="mighty-surveys-btn btn">Take Survey</button></td>
                </tr>
                <tr>
                  <td class="survey-title">Fightful would like to gain insight on UFC &amp; WWE</td>
                  <td>Type</td>
                  <td><span class="survey-category">Sports</span></td>
                  <td class="survey-pts">2000</td>
                  <td class="survey-est">20min</td>
                  <td>2 Days</td>
                  <td><button class="mighty-surveys-btn btn">Take Survey</button></td>
                </tr>
                <tr>
                  <td class="survey-title">Walwart Organic Products at best price</td>
                  <td>Type</td>
                  <td><span class="survey-category">Sports</span></td>
                  <td class="survey-pts">500</td>
                  <td class="survey-est">20min</td>
                  <td>2 Days</td>
                  <td><button class="mighty-surveys-btn btn">Take Survey</button></td>
                </tr>
              </tbody>
            </table>
            </div>
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
    <script src="js/mighty.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
