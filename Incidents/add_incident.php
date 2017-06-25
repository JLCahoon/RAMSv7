<?php
//Session
session_start();
include_once '../Login2/dbconnect.php';

if (!isset($_SESSION['userSession'])) {
    header("Location: ../Login2/index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=" . $_SESSION['userSession']);
$userRow = $query->fetch_array();
$DBcon->close();
?>
<?php
if (count($_POST) > 0) {
    require_once("db.php");
    $sql = "INSERT INTO Incidents (IncidentName, IncidentDate, Owner, ReportedBy, Location, Description, Systems, Type, Impact, Department, Priority, RiskID, RiskName) VALUES ('" . $_POST["IncidentName"] . "','" . $_POST["IncidentDate"] . "','" . $_POST["Owner"] . "','" . $_POST["ReportedBy"] . "', '" . $_POST["Location"] . "','" . $_POST["Description"] . "', '" . $_POST["Systems"] . "','" . $_POST["Type"] . "','" . $_POST["Impact"] . "','" . $_POST["Department"] . "','" . $_POST["Priority"] . "','" . $_POST["RiskID"] . "','" . $_POST["RiskName"] . "')";
    mysqli_query($conn, $sql);
    $current_id = mysqli_insert_id($conn);
    if (!empty($current_id)) {
        $message = "New Incident Added Successfully";
    }
}
?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>RAMS</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/sb-admin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
                    <a class="navbar-brand" href="index.html">R.A.M.S</a>
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
                                            <h5 class="media-heading"><strong>Janine Cahoon</strong>
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
                                            <h5 class="media-heading"><strong>Janine Cahoon</strong>
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
                                            <h5 class="media-heading"><strong>Janine Cahoon</strong>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $userRow['username']; ?> <b class="caret"></b></a>
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
                                <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>  
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="../index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li class="active">
                            <a href="add_risk.php"><i class="fa fa-fw fa-bar-chart-o"></i> Add New Risk</a>
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-fw fa-table"></i> Risk Register</a>
                        </li>
                        <li>
                            <a href="../Incidents/index.php"><i class="glyphicon glyphicon-search"></i> Incidents</a>
                        </li>
                        <li>
                            <a href="../KnowledgeBase/list_files.php"><i class="fa fa-fw fa-desktop"></i> Knowledge Base</a>
                        </li>
                        <li>
                            <a href="../Analytics/index.php"><i class="fa fa-fw fa-wrench"></i> Analytics</a>
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
                                Incidents
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="../index.php">Dashboard</a>
                                </li>
                                <li>
                                    <i class="fa fa-database"></i> <a href="index.html">Incidents</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-edit"></i> Add Incident
                                </li>
                            </ol>
                        </div>
                    </div>

                    <script>
                        function isNumberKey(evt) {
                            var charCode = (evt.which) ? evt.which : event.keyCode
                            if (charCode > 31 && (charCode < 48 || charCode > 57))
                                return false;
                            return true;
                        }

                        function sum() {
                            var RiskImpact = document.getElementById('Impact').value;
                            var RiskProb = document.getElementById('Probability').value;
                            var result = parseInt(RiskImpact) * parseInt(RiskProb);
                            if (!isNaN(result)) {
                                document.getElementById('PIValue').value = result;
                            }
                        }
                    </script>

                    </head>
                    <body>
                        <form name="frmUser" method="post" action="">
                            <div style="width:90%;">
                                <div class="message"><?php if (isset($message)) {
    echo $message;
} ?></div>
                                <div align="right" style="padding-bottom:5px;"><a href="index.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List Risks</a></div>
                                <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
                                    <tr class="tableheader">
                                
                                    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Incident Overview</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <label>Incident Name</label>
                                    <input type="text" name="IncidentName" class="form-control" width="500px" value="<?php echo $row['IncidentName']; ?>">
                                    
                                    <label>Incident Date</label>
                                    <input type="text" name="IncidentDate" class="form-control" width="500px" value="<?php echo $row['IncidentDate']; ?>">

                                    <label>Reported By</label>
                                    <input type="text" name="ReportedBy" class="form-control" width="500px" value="<?php echo $row['ReportedBy']; ?>">
                                    
                                    <label>Location</label>
                                    <input type="text" name="Location" class="form-control" width="500px" value="<?php echo $row['Location']; ?>">
                                    
                                    <label>Description</label>
                                    <input type="text" name="Description" class="form-control" width="500px" value="<?php echo $row['Description']; ?>">
 
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Incident Details</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <label>Systems</label>
                                    <input type="text" name="Systems" class="form-control" value="<?php echo $row['Systems']; ?>">
                                    
                                    <label>Type</label></td>
                                    <input type="text" name="Type" class="form-control">

                                    <label>Impact</label>
                                    <input type="text" name="Impact" id="Impact" class="form-control" value="<?php echo $row['Impact']; ?>">

                                    <label>Department</label>
                                    <input type="text" name="Deparment" class="form-control">

                                    <label>Priority</label>
                                    <input type="text" name="Priority" id="PIValue" class="form-control">
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Associated Risk</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <label>Risk ID</label>
                                    <label>Risk ID</label>
                                    <input type="text" name="RiskID" class="form-control">

                                    <label>Risk Name</label>
                                    <input type="text" name="RiskName" class="form-control">
                </div>
            </div>
        </div>

                                    <td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit btn-primary"></td>
                                    
                                </table>
                            </div>
                        </form>
                    </body></html>