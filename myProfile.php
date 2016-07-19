
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

    <section class="">
      <div class="container">

      </div>
    </section>

    <section class="mighty-surveys">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>My Profile</h2>
            <p>Completing these personal profiles will increase your chance of qualifying for more surveys with higher rewards.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <!-- Table -->
            <div class="table-responsive">
            <table id="mighty-surveys-table" class="table">
              <thead class="">
                <tr>
                  <th>Topic</th>
                  <th>Type</th>
                  <th>Est Lenght</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>General Profile</td>
                  <td>10 pts</td>
                  <td>5 min</td>
                  <td><button type="button" class="mighty-surveys-btn btn" data-toggle="modal" data-target="#startSurvey">Start Survey</button></td>
                </tr>
                <tr>
                  <td>Technology Profile</td>
                  <td>5 pts</td>
                  <td>2 min</td>
                  <td><button class="mighty-surveys-btn btn">Start Survey</button></td>
                </tr>
                <tr>
                  <td>Shopping Profile</td>
                  <td>15 pts</td>
                  <td>8 min</td>
                  <td><button class="mighty-surveys-btn btn">In Progress</button></td>
                </tr>
                <tr>
                  <td>Household Profile</td>
                  <td>20 pts</td>
                  <td>10min</td>
                  <td><button class="mighty-surveys-btn btn">In Progress</button></td>
                </tr>
                <tr>
                  <td>Travel Profile</td>
                  <td>5 pts</td>
                  <td>2 min</td>
                  <td><button class="mighty-surveys-btn btn">Update</button></td>
                </tr>
              </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="startSurvey" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="mighty-modal modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Shopping Profile</h4>
          </div>
          <div class="modal-body">
            <!-- Progress Bar -->
            <div class="row">
              <div class="col-sm-12">
                <div class="mighty-progress progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                    <span class="sr-only">70% Complete</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <p>Which of these stores have you shopped at in the last 6 months? Select all that apply.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <ul>
                  <li><input type="radio" class=""> BestBuy</li>
                  <li><input type="radio" class=""> Bj's</li>
                  <li><input type="radio" class=""> Costco</li>
                  <li><input type="radio" class=""> CVS</li>
                  <li><input type="radio" class=""> Home Depot</li>
                  <li><input type="radio" class=""> Kmart</li>
                  <li><input type="radio" class=""> Kohl's</li>
                  <li><input type="radio" class=""> Macy's</li>
                  <li><input type="radio" class=""> Rite Aid</li>
                  <li><input type="radio" class=""> Sam's Club</li>
                </ul>
              </div>
              <div class="col-sm-6"></div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="mighty-modal-update-btn btn">Save &amp; Continue</button>
          </div>
        </div>
      </div>
    </div>



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
