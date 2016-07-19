<!-- Fixed navbar -->
<nav class="mighty-navbar navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="mighty-navbar-brand" href="/communa"><img src="images/logo.png" width="200" /></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <!-- User Login and Profile -->
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lindsay Pratile <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/communa/myProfile.php">My Profile</a></li>
            <li><a href="#">My Points</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Rewards</a></li>
            <li role="separator" class="divider"></li>
            <li><a data-toggle="modal" href="#mySettings">My Settings</a></li>
            <li><a href="#">Log Out</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      </ul>
      <!-- Default Navigation -->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/communa/lobby.php">Surveys</a></li>
        <li><a href="/communa/faq.php">FAQ</a></li>
        <li><a href="/communa/rewards.php">Rewards</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="mySettings" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="mighty-modal modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">My Settings</h4>
      </div>
      <div class="modal-body">

        <div class="row clearfix-form">
          <div class="col-md-4">
            <label>First Name</label>
          </div>
          <div class="col-md-8">
            <input type="text-field" class="form-control" placeholder="First Name"/>
          </div>
        </div>
        <div class="row clearfix-form">
          <div class="col-md-4">
            <label>Last Name</label>
          </div>
          <div class="col-md-8">
            <input type="text-field" class="form-control" placeholder="Last Name"/>
          </div>
        </div>
        <div class="row clearfix-form">
          <div class="col-md-4">
            <label>Email</label>
          </div>
          <div class="col-md-8">
            <input type="text-field" class="form-control" placeholder="Email"/>
          </div>
        </div>
        <div class="row clearfix-form">
          <div class="col-md-4">
            <label>PayPal Email</label>
          </div>
          <div class="col-md-8">
            <input type="text-field" class="form-control" placeholder="PayPal Email"/>
          </div>
        </div>
        <div class="row clearfix-form">
          <div class="col-md-4">
            <label>e-Giftcard Email</label>
          </div>
          <div class="col-md-8">
            <input type="text-field" class="form-control" placeholder="e-Giftcard Email"/>
          </div>
        </div>
        <div class="row clearfix-form">
          <div class="col-md-4">
            <label>Address 1</label>
          </div>
          <div class="col-md-8">
            <input type="text-field" class="form-control" placeholder="Address 1"/>
          </div>
        </div>
        <div class="row clearfix-form">
          <div class="col-md-4">
            <label>Address 2</label>
          </div>
          <div class="col-md-8">
            <input type="text-field" class="form-control" placeholder="Address 2"/>
          </div>
        </div>
        <div class="row clearfix-form">
          <div class="col-md-4">
            <label>Postal Code</label>
          </div>
          <div class="col-md-8">
            <input type="text-field" class="form-control" placeholder="Postal Code"/>
          </div>
        </div>
        <div class="row clearfix-form">
          <div class="col-md-4">
            <label>New Password</label>
          </div>
          <div class="col-md-8">
            <input type="text-field" class="form-control" placeholder="New Password"/>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <label>Confirm New Password</label>
          </div>
          <div class="col-md-8">
            <input type="text-field" class="form-control" placeholder="Confirm New Password"/>
          </div>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="mighty-modal-cancel-btn btn" data-dismiss="modal">Cancel</button>
        <button type="button" class="mighty-modal-update-btn btn">Update</button>
      </div>
    </div>
  </div>
</div>
