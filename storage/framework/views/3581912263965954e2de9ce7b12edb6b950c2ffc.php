<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Dashboard</title>

	<!-- Custom fonts for this template-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
	integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" 
	crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo e(asset('css/sb-admin.min.css')); ?>" rel="stylesheet">

    <script type="text/ecmascript">
        window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token()]); ?>;
    </script>

    <?php if(auth()->user()): ?>
        <script>
            window.Laravel.userId = <?php echo e(auth()->user()->id); ?>;
         </script>
    <?php else: ?>
        <script>
            window.location = '/login';
        </script>
    <?php endif; ?>
    
</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link" href="<?php echo e(route('home')); ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Nav Item - Employee Management -->
			<li class="nav-item">
				<a class="nav-link" href="/employees">
					<span>Employee Management</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSystem"
					aria-expanded="true" aria-controls="collapseSystem">
					<i class="fas fa-fw fa-cog"></i>
					<span>System Management</span>
				</a>
				<div id="collapseSystem" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="<?php echo e(route('countries.index')); ?>">Country</a>
						<a class="collapse-item" href="<?php echo e(route('states.index')); ?>">State</a>
						<a class="collapse-item" href="<?php echo e(route('cities.index')); ?>">City</a>
						<a class="collapse-item" href="<?php echo e(route('departments.index')); ?>">Department</a>
					</div>
				</div>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">
			
			<!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
					aria-expanded="true" aria-controls="collapseUser">
					<i class="fas fa-fw fa-cog"></i>
					<span>User Management</span>
				</a>
				<div id="collapseUser" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="<?php echo e(route('users.index')); ?>">User</a>
						<a class="collapse-item" href="cards.html">Role</a>
						<a class="collapse-item" href="cards.html">Permission</a>
					</div>
				</div>
			</li>

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

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo e(Auth::user() ? Auth::user()->username : ''); ?></span>
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
								aria-labelledby="userDropdown">
								<a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
									   onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">
													 <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
										<?php echo e(__('Logout')); ?>

									</a>

									<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
										<?php echo csrf_field(); ?>
									</form>
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">
					<?php echo $__env->yieldContent('content'); ?>
				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; Self Learning Laravel/Vue 2022</span>
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

	<!-- Bootstrap core JavaScript-->
	<script src="<?php echo e(mix('js/app.js')); ?>"></script>
	

	<!-- Custom scripts for all pages-->
	<script src="<?php echo e(asset('js/sb-admin.min.js')); ?>"></script>

</body>

</html><?php /**PATH F:\laravel learning\employees\resources\views/layouts/main.blade.php ENDPATH**/ ?>