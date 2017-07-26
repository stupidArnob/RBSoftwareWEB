<?php
include 'DBInfo.php';

$sql = 'SELECT * FROM newdataentry';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">



    <script src="jquery-1.9.1.js"></script>

    <script src="Workprocess.js"></script>

    <title>AdminLTE 2 | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="../../../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <a href="../../../index2.html" class="logo"><b>Admin</b>LTE</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
         
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          
         
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../../index.html"><i class="fa fa-circle-o"></i> Dashboard</a></li>
               
              </ul>
            </li>
            
         
          
            
            <li class="treeview active">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="../PrintReq/NewDataEntry.html"><i class="fa fa-circle-o"></i>New Data Entry</a></li>
                 </ul>
            </li>

            <li class="treeview active">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Search Data</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Display All Data</a></li>
                <li ><a href="Due.php"><i class="fa fa-circle-o"></i>Display Due</a></li>
              </ul>
            </li>


          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            New Data Entry
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../index.html"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li >New Data Entry</li>
          </ol>
          
        </section>





        <!--  My Working Section   -->












        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            

            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Print List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered" id="orderedProductsTbl">
                    <tbody><tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Phone No</th>
                      <th>Print Type</th>
                      <th>SFT</th>
                      <th>Price</th>
                      <th>Advance</th>
                      <th>Due</th>
                      <th>Total Cost</th>
                      <th>Date</th>
                      <th>Time</th>
                     
                    </tr>
                    </tbody>
                     
                    <tbody>
                      <?php
		                    $no 	= 1;
		                      
		                  while ($row = mysqli_fetch_array($query))
		                  {
			
			                echo 
                      '<tr>
				                	<td>'.$no.'</td>
				                	<td>'.$row['BillNo'].'</td>
					                <td>'.$row['ClientName'].'</td>
					                <td>'.$row['ClientAddress'].'</td>
					                <td>'.$row['ClientPhn'].'</td>
                          <td>'.$row['PrintType'].'</td>
                          <td>'.$row['sft'].'</td>
                          <td>'.$row['PrintPrice'].'</td>
                          <td>'.$row['advance'].'</td>
                          <td>'.$row['due'].'</td>
                          <td>'.$row['intotal'].'</td>
                          <td>'.$row['Todaydate'].'</td>
                          <td>'.$row['Todaytime'].'</td>

				              </tr>';
			
			                $no++;
		}?>
                    </tbody>
                    
                    <tfoot>
                       <tr>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td colspan="3" id="cart_total" style="text-align:right"></td>
                      </tr>
                    </tfoot>

                  </table>
                  
                </div><!-- /.box-body -->
               
              </div>
            </div>   <!-- /.row -->
                  



        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="#">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="../../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../../../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../../../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../../dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>
