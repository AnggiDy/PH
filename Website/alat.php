<?php
session_start();
include 'config/koneksi.php';
$user=$_SESSION['username'];
$nama=$_SESSION['nama'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="img/icon.png">

  <title>Monitoring PH </title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home3.php">
        <div class="sidebar-brand-icon rotate-n-15">

        </div>
        <div class="sidebar-brand-text mx-3"><?php echo $_SESSION['nama']?></div>
        <img class="img-profile rounded-circle" src="img/photo.jpg" style="width:50px">
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="home3.php">
          <i class="fas fa-fw fa-user-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-item dropdown-item">
		  <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-secondary text-white list-group-item list-group-item-action flex-column align-items-start">
          <i class="fas fa-fw fa-cog"></i>
		  <span class="menu-collapsed">Kolam</span></a>
		  </a>
		  <div id='submenu1' class="collapse sidebar-submenu">
                <a href="KolamA.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Kolam A</span>
                </a>
                <a href="KolamB.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Kolam B</span>
                </a>
                <a href="KolamC.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Kolam C</span>
                </a>
            </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="edit.php">
          <i class="fas fa-fw fa-cog"></i>
          <span>Edit Kolam</span>
        </a>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="harga.php">
          <i class="fas fa-fw fa-cog"></i>
          <span>Harga</span>
        </a>
      <li class="nav-item">
        <a class="nav-link collapsed" href="alat.php">
          <i class="fas fa-fw fa-cog"></i>
          <span>Peralatan</span>
        </a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="user.php?id=<?php echo $user; ?>">
          <i class="fas fa-fw fa-cog"></i>
          <span>User</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
             <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                        <a href="javascript:void(0);" class="bars"></a>
                        <a class="navbar-brand" href="home3.php" style="color:black; font:PT Serif;">
							<h2>MONITORING PH TAMBAK UDANG</h2>
						</a>
                    </div>
                </div>
            </nav>
           </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 ">User  : <?php echo $_SESSION['username'] ?></span>
                <img class="img-profile rounded-circle" src="img/photo.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
		
		<!-- Begin -->
		<div class="container-fluid">
		
		<h3>Peralatan</h3>

		<table class="table">
		  <thead class="thead-dark">
			<tr>
			  <th scope="col">No.</th>
			  <th scope="col">Nama Alat</th>
			  <th scope="col">Gambar</th>
			  <th scope="col">Fungsi</th>
			</tr>
		  </thead>
		  <tbody>
			<tr class="table-info">
			  <th scope="row">1</th>
			  <td>Sensor PH E-201-C</td>
			  <td><img src ='img\sensor.png' style='width:300px'></td>
			  <td>Mengambil data air</td>
			</tr>
			<tr class="table-info">
			  <th scope="row">2</th>
			  <td>Arduino UNO</td>
			  <td><img src ='img\arduino.png' style='width:300px'></td>
			  <td>Menerima data dari sensor dan menghitung</td>
			</tr>
			<tr class="table-info">
			  <th scope="row">3</th>
			  <td>Raspberry pi 3</td>
			  <td><img src ='img\rasp.png' style='width:300px'></td>
			  <td>Meneruskan data ke database melalui server</td>
			</tr>
		  </tbody>
		</table>
		
		</div>

		<!-- End of Main Content -->
          

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Tugas Akhir 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin ingin Keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Klik "Logout" jika ingin keluar</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="index.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

   <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  
	<!--<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>-->
	
		<script>
			var phtable=$('#phtable').DataTable({
				"ajax": 'PHapi.php'
			});
			
			setInterval( function () {
			phtable.ajax.reload();
			grapik();
		}, 60000 );
		
		
		
		var waktu=[];
		var ph=[];
		
	
	var ctx = $('#myChart');
	ctx.height=100;

		var config = {
		   type: 'line',
		   data: {
			  labels: waktu,
			  datasets: [{
				 label: 'Ph Air',
				 data: ph,
				 backgroundColor: 'rgba(0, 119, 204, 0.0)',
				 borderColor: '#4e73df',
			  }]
		   },
		   options: {
				responsive: false,
		   }
		   
		};

		var chart = new Chart(ctx, config);

		function grapik(){
			$.get('PHapi_grap.php',function(data){
				data=JSON.parse(data);
				waktu=data['time'];
				ph=data['ph'];
				console.log
				config.data.labels=waktu;
				config.data.datasets[0].data=ph;
				console.log(config);
				chart.update();
			});
		}
		
		grapik();

	
	</script>

</body>

</html>