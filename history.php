
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

            <div class="row" style="color:#fff;">
              <div class="text-left col-sm-4 col-xs-4"><label style="font-weight:300;">0</label></div>
              <div class="text-center col-sm-4 col-xs-4"><label style="font-weight:900;">Your Communa Points 650</label></div>
              <div class="text-right col-sm-4 col-xs-4"><label style="font-weight:300;">1000</label></div>
            </div>

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
              <div class="col-sm-3"></div>
              <div class="col-sm-3">
                <button class="mighty-header-status-btn btn" onclick="location.href = '/communa/rewards.php';">View Rewards</button>
              </div>
              <div class="col-sm-3">
                <button class="mighty-header-status-btn btn" onclick="location.href = '/communa/cashout.php';">Cash Out</button>
              </div>
              <div class="col-sm-3"></div>
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
              <li><a href="/communa/myPoints.php">Redeem Points</a></li>
              <li><a class="mighty-lobby-filters-active" href="/communa/history.php">History</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="mighty-points">
      <div class="container">

        <div class="row" style="padding-bottom:2em;">
          <div class="col-md-6 col-md-offset-3">
              <div class="row">
                <div class="collectable-amounts col-sm-6">
                  <h4>Current Points <span class="mighty-amount">500</span></h4>
                  <h4>Dollar Value <span class="mighty-amount">$5</span></h4>
                </div>
                <div class="collectable-overview col-sm-6">
                  <h4>Paid Out <span class="mighty-amount">0</span></h4>
                  <h4>Dollar Value <span class="mighty-amount">0</span></h4>
                </div>
              </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-10 col-md-offset-1">

            <div class="row">
              <div class="col-md-2">
                <p>Date Range</p>
              </div>
              <div class="col-md-3">
                <input type="text-field" class="form-control" placeholder="&#61447; Start"/>
              </div>
              <div class="col-md-3">
                <input type="text-field" class="form-control" placeholder="&#61447; End"/>
              </div>
              <div class="col-md-2">
                <button class="mighty-points-date-filter-btn btn">Apply</button>
              </div>
              <div class="col-md-2">
                <button class="mighty-points-date-filter-btn btn">Clear</button>
              </div>
            </div>

          </div>
        </div>

        <div class="row" style="padding-top:1em;">
          <div class="col-md-10 col-md-offset-1">
            <!-- Table -->
            <div class="table-responsive">
            <table id="mighty-surveys-table" class="table">
              <thead class="">
                <tr>
                  <th>Date</th>
                  <th>Event Log</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>6/3/16</td>
                  <td>Peanut Labs - General</td>
                  <td>25</td>
                </tr>
                <tr>
                  <td>6/2/16</td>
                  <td>General Profile Questions</td>
                  <td>25</td>
                </tr>
                <tr>
                  <td>6/2/16</td>
                  <td>Signup Bonus</td>
                  <td>8 min</td>
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
