<?php
require_once("CRUD/db.php");
$sql = "SELECT * FROM RiskRegister2 ORDER BY RiskID DESC";
$result = mysqli_query($conn,$sql);

?>
<?php
session_start();
include_once 'Login2/dbconnect.php';

if (!isset($_SESSION['userSession'])) {
 header("Location: Login2/index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RAMS Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">R.A.M.S Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $userRow['username']; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $userRow['username']; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Welcome back, <?php echo $userRow['username']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="Login2/Logout.php?logout><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="CRUD/add_risk.php"><i class="glyphicon glyphicon-plus"></i> Add New Risk</a>
                    </li>
                    <li>
                        <a href="CRUD/index.php"><i class="fa fa-fw fa-table"></i> Risk Register</a>
                    </li>
                    <li>
                        <a href="Incidents/index.php"><i class="glyphicon glyphicon-search"></i> Incidents</a>
                    </li>
                    <li>
                        <a href="KnowledgeBase/list_files.php"><i class="glyphicon glyphicon-folder-open"></i> Knowledge Base</a>
                    </li>
                    <li>
                        <a href="Analytics/index.php"><i class="glyphicon glyphicon-search"></i> Analytics</a>
                    </li>
                    
 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php
$mysqli = new mysqli("localhost:3306", "root", "root", "RiskManagement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = $mysqli->query("SELECT Priority FROM RiskRegister2")) {

    /* determine number of rows result set */
    $row_cnt = $result->num_rows;

    printf("%d\n", $row_cnt);

    /* close result set */
    $result->close();
}

/* close connection */
$mysqli->close();
?></div>
                                        <div>Risks</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <!--<span class="pull-left">View Details</span>
                                    <!-- Trigger the modal with a button -->
<button type="button" style="border:0px; background:none;" class="span-left" data-toggle="modal" data-target="#myModal">View Details</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Top Risks</h4>
      </div>
      <div class="modal-body">
        <?php 
        if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT RiskID, RiskName, Owner, RiskStatus FROM RiskRegister2 LIMIT 10";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                echo "<table class='table table-responsive' style='color:black;' width='100%'><tr><th>Risk ID</th><th>Risk Name</th><th>Risk Owner</th><th>Risk Status</th>";
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["RiskID"] . "</td><td>" . $row["RiskName"] . "</td><td>" . $row["Owner"] . "</td><td>" . $row["RiskStatus"] . "</td>";
                                }
                                echo "</table>";
                            } else {
                                echo "0 results";
                            }
                            ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php
$mysqli = new mysqli("localhost:3306", "root", "root", "RiskManagement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = $mysqli->query("SELECT Priority FROM RiskRegister2 WHERE Priority='Low'")) {

    /* determine number of rows result set */
    $row_cnt = $result->num_rows;

    printf("%d\n", $row_cnt);

    /* close result set */
    $result->close();
}

/* close connection */
$mysqli->close();
?></div>
                                        <div>Low Priority Risks</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <!--<span class="pull-left">View Details</span>
                                    <!-- Trigger the modal with a button -->
<button type="button" style="border:0px; background:none;" class="span-left" data-toggle="modal" data-target="#myModal3">View Details</button>

<!-- Modal -->
<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Low Priority Risks</h4>
      </div>
      <div class="modal-body">
        <?php 
        if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT RiskID, RiskName, Owner, RiskStatus FROM RiskRegister2 WHERE Priority='Low' LIMIT 10";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                echo "<table class='table' style='color:black;' width='100%'><tr><th>Risk ID</th><th>Risk Name</th><th>Risk Owner</th><th>Risk Status</th>";
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["RiskID"] . "</td><td>" . $row["RiskName"] . "</td><td>" . $row["Owner"] . "</td><td>" . $row["RiskStatus"] . "</td>";
                                }
                                echo "</table>";
                            } else {
                                echo "0 results";
                            }
                            ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php
$mysqli = new mysqli("localhost:3306", "root", "root", "RiskManagement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = $mysqli->query("SELECT Priority FROM RiskRegister2 WHERE Priority='Medium'")) {

    /* determine number of rows result set */
    $row_cnt = $result->num_rows;

    printf("%d\n", $row_cnt);

    /* close result set */
    $result->close();
}

/* close connection */
$mysqli->close();
?></div>
                                        <div>Medium Priority Risks</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <!--<span class="pull-left">View Details</span>
                                    <!-- Trigger the modal with a button -->
<button type="button" style="border:0px; background:none;" class="span-left" data-toggle="modal" data-target="#myModal1">View Details</button>

<!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Medium Priority Risks</h4>
      </div>
      <div class="modal-body">
          <?php 
        if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT RiskID, RiskName, Owner, RiskStatus FROM RiskRegister2 WHERE Priority='Medium' LIMIT 10";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                echo "<table class='table' style='color:black;' width='100%'><tr><th>Risk ID</th><th>Risk Name</th><th>Risk Owner</th><th>Risk Status</th>";
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["RiskID"] . "</td><td>" . $row["RiskName"] . "</td><td>" . $row["Owner"] . "</td><td>" . $row["RiskStatus"] . "</td>";
                                }
                                echo "</table>";
                            } else {
                                echo "0 results";
                            }
                            ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php
$mysqli = new mysqli("localhost:3306", "root", "root", "RiskManagement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = $mysqli->query("SELECT Priority FROM RiskRegister2 WHERE Priority='High'")) {

    /* determine number of rows result set */
    $row_cnt = $result->num_rows;

    printf("%d\n", $row_cnt);

    /* close result set */
    $result->close();
}

/* close connection */
$mysqli->close();
?></div>
                                        <div>High Priority Risks</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <!--<span class="pull-left">View Details</span>
                                    <!-- Trigger the modal with a button -->
<button type="button" style="border:0px; background:none;" class="span-left" data-toggle="modal" data-target="#myModal2">View Details</button>

<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">High Priority Risks</h4>
      </div>
      <div class="modal-body">
        <?php 
        if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT RiskID, RiskName, Owner, RiskStatus FROM RiskRegister2 WHERE Priority='High' LIMIT 10";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                echo "<table class='table' style='color:black;' width='100%'><tr><th>Risk ID</th><th>Risk Name</th><th>Risk Owner</th><th>Risk Status</th>";
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["RiskID"] . "</td><td>" . $row["RiskName"] . "</td><td>" . $row["Owner"] . "</td><td>" . $row["RiskStatus"] . "</td>";
                                }
                                echo "</table>";
                            } else {
                                echo "0 results";
                            }
                            ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-map-marker fa-fw"></i> Heat Map</h3>
                            </div>
                            <div class="panel-body">
                              
                                        <div>
<table class="table-responsive">
  
  <tr height="50px">
      <td width="100px" align="center">Almost Certain</td>
    <td bgcolor="yellow" width="100px" style="border:1px solid #000;"></td>
    <td bgcolor="yellow" width="100px" style="border:1px solid #000;"></td>
    <td bgcolor="red" width="100px" style="border:1px solid #000;"></td>
    <td bgcolor="red" width="100px" style="border:1px solid #000;"></td>
    <td bgcolor="red" width="100px" style="border:1px solid #000;"></td>
  </tr>
  <tr height="50px">
      <td width="100px" align="center">Likely</td>
    <td bgcolor="yellow" width="100px" style="border:1px solid #000;"></td>
    <td bgcolor="yellow" width="100px" style="border:1px solid #000;"></td>
    <td bgcolor="yellow" width="100px" style="border:1px solid #000;"></td>
    <td bgcolor="red" width="100px" style="border:1px solid #000;"></td>
    <td bgcolor="red" width="100px" style="border:1px solid #000;"></td>
  </tr>
  <tr height="50px">
      <td width="100px" align="center">Possible</td>
    <td bgcolor="green" width="100px" style="border:1px solid #000;"></td>
    <td bgcolor="yellow" width="100px" style="border:1px solid #000;"></td>
    <td bgcolor="yellow" width="100px" style="border:1px solid #000;"></td>
    <td bgcolor="yellow" width="100px" style="border:1px solid #000;"></td>
    <td bgcolor="red" width="100px" style="border:1px solid #000;"></td>
  </tr>
  <tr height="50px">
      <td width="100px" align="center">Unlikely</td>
    <td bgcolor="green" width="100px" style="border:1px solid #000;"></td>
    <td bgcolor="green" width="100px" style="border:1px solid #000;"></td>
    <td bgcolor="yellow" width="100px" style="border:1px solid #000;"></td>
    <td bgcolor="yellow" width="100px" style="border:1px solid #000;"></td>
    <td bgcolor="yellow" width="100px" style="border:1px solid #000;"></td>
  </tr>
  <tr height="50px">
      <td width="100px" align="center">Rare</td>
    <td bgcolor="green" width="100px" style="border:1px solid #000;"></td>
    <td bgcolor="green" width="100px" style="border:1px solid #000;"></td>
    <td bgcolor="green" width="100px" style="border:1px solid #000;"></td>
    <td bgcolor="yellow" width="100px" style="border:1px solid #000;"></td>
    <td bgcolor="yellow" width="100px" style="border:1px solid #000;"></td>
  </tr>
  <tr height="50px">
      <td width="100px" align="center"></td>
    <td height="90px" width="100px" align="center" >Insignificant</td>
    <td width="100px" align="center">Minor</td>
    <td width="100px" align="center">Moderate</td>
    <td width="100px" align="center">Major</td>
    <td width="100px" align="center">Catastrophic</td>
  </tr>
  
</table>
        </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Risk Register</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                                                           
            <?php
                            $servername = "localhost:3306";
                            $username = "root";
                            $password = "root";
                            $dbname = "RiskManagement";

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT RiskID, RiskName, Owner, RiskStatus FROM RiskRegister2 Owner=$_SESSION LIMIT 10";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                echo "<table class='table' width='100%'><tr><th>Risk ID</th><th>Risk Name</th><th>Risk Owner</th><th>Risk Status</th>";
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["RiskID"] . "</td><td>" . $row["RiskName"] . "</td><td>" . $row["Owner"] . "</td><td>" . $row["RiskStatus"] . "</td>";
                                }
                                echo "</table>";
                            } else {
                                echo "0 results";
                            }

                            $conn->close();
                            ?> 

                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="CRUD/index.php">View All Risks <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
