<!DOCTYPE html>
<html lang="en">

<head>
  <?php session_start();
  ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AHMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/AHMS/index.html">AHMS</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Arjun</strong>
                                    <span class="pull-right text-muted">
                                        <em>Leave</em>
                                    </span>
                                </div>
                                <div>Going Home</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">

                        <li><a href="#"><i class="fa fa-user fa-fw"></i>Welcome <?php  echo $_SESSION['name']?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Student Details<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="addstud.php">Add Student</a>
                                </li>
                                <li>
                                    <a href="updatestud.php">Update Student</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="leaveform.php"><i class="fa fa-wrench fa-fw"></i>Leave Form Submission</a>
                        </li>
                        <li>
                            <a href="complaint.php"><i class="fa fa-wrench fa-fw"></i>Complaint Registration</a>
                        </li>
                        <li>
                            <a href="maintview.php"><i class="fa fa-wrench fa-fw"></i>Complaints View</a>
                                              </li>



                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update Student Information</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Student Information Update
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="update.php" method="post">
                                      <div class="form-group">
                                          <label>Name </label>
                                          <input class="form-control" placeholder="Student Name" name="aname">
                                          <p class="help-block">Name whose information has to be changed</p>
                                      </div>
                                      <div class="form-group">
                                          <label>Roll Number</label>
                                          <input class="form-control" placeholder="Student Roll No." name="arno">

                                      </div>
                                      <div class="form-group">
                                          <label>Gender</label><br>
                                          <div class="radio-inline">
                                              <label>
                                                  <input type="radio" name="Gender" id="M" value="Male" checked>Male
                                              </label>
                                          </div>
                                          <div class="radio-inline">
                                              <label>
                                                  <input type="radio" name="Gender" id="F" value="Female">Female
                                              </label>
                                          </div>
                                          <div class="radio-inline">
                                              <label>
                                                  <input type="radio" name="Gender" id="O" value="Other">Other
                                              </label>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label>Contact No.</label>
                                          <input class="form-control" placeholder="Contact No." name="apno">
                                      </div>
                                      <div class="form-group">
                                          <label>Parent Name</label>
                                          <input class="form-control" placeholder="Parent Name" name="apname">
                                      </div>
                                      <div class="form-group">
                                          <label>Parent No.</label>
                                          <input class="form-control" placeholder="Parent No." name="aprno">
                                      </div>
                                      <div class="form-group">
                                          <label>Course</label>
                                          <select class="form-control" name="course" id="course_id" onchange="getSpecialisationList();">
                                          <option value="0">-Select-</option>
                                          <option value = "1">B Tech</option>
                                          <option value = "2">BBA</option>
                                          <option value = "3">BCA</option>
                                          <option value = "4">BCom</option>
                                          <option value = "5">Int MA</option>
                                          <option value = "6">PG</option>
                                          </select>
                                        </div>
                                        <button type="submit" class="btn btn-default" style="color:blue">  Submit  </button>

                                    </form>
                                </div>


                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>