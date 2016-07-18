
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

    <!-- Mighty Header Section -->
    <section class="mighty-header-status">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="row">
              <div class="col-sm-3">
                <label>Current Points 300</label>
              </div>
              <div class="col-sm-3">
                <label>Paid Out 500</label>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8">
                <div class="loading">
                  <div class="progress">
                    <div class="progress_bar"></div>
                    <div id="prog_status"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-2">
                <button class="mighty-header-status-btn btn">Cash Out</button>
              </div>
              <div class="col-sm-2">
                <button class="mighty-header-status-btn btn">View Rewards</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="mighty-lobby-filters">
      <div class="container">
        <div class="row">
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
                  <td><button class="mighty-surveys-btn btn">Start Survey</button></td>
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
