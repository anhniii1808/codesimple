<?php
    require_once("config.php");
    $conn = new mysqli(servername,username,password,dbname);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Code - Admin</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Datatable CSS -->
		<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="index.html" class="logo">
						<img src="assets/img/logo.png" width="40" height="40" alt="">
					</a>
                </div>
				<!-- /Logo -->
				
				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				
				<!-- Header Title -->
                <div class="page-title-box">
					<h3>EmiCoDo's Store</h3>
                </div>
				<!-- /Header Title -->
				
				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
				
				<!-- Header Menu -->
				<ul class="nav user-menu">
				
					<!-- Search -->
					<li class="nav-item">
						<div class="top-nav-search">
							<a href="javascript:void(0);" class="responsive-search">
								<i class="fa fa-search"></i>
						   </a>
							<form action="search.html">
								<input class="form-control" type="text" placeholder="Search here">
								<button class="btn" type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</li>
					<!-- /Search -->
				

					<!-- /Flag -->
				
					<!-- Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="assets/img/logo.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="assets/img/logo.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="assets/img/logo.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
													<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="assets/img/logo.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="assets/img/logo.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
													<p class="noti-time"><span class="notification-time">2 days ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities.html">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->
					
					<!-- Message Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Messages</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets/img/logo.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Richard Miles </span>
													<span class="message-time">12:28 AM</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets/img/logo.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">John Doe</span>
													<span class="message-time">6 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets/img/logo.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Tarah Shropshire </span>
													<span class="message-time">5 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets/img/logo.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Mike Litorus</span>
													<span class="message-time">3 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets/img/logo.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Catherine Manseau </span>
													<span class="message-time">27 Feb</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="chat.html">View all Messages</a>
							</div>
						</div>
					</li>
					<!-- /Message Notifications -->
	
					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="assets/img/logo.jpg" alt="">
							<span class="status online"></span></span>
							<span>Admin</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="profile.html">My Profile</a>
							<a class="dropdown-item" href="settings.html">Settings</a>
							<a class="dropdown-item" href="login.html">Logout</a>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->
				
				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="profile.html">My Profile</a>
						<a class="dropdown-item" href="settings.html">Settings</a>
						<a class="dropdown-item" href="login.html">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							
							<li class="active"> 
								<a href="index.php"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
							</li>
							<li> 
								<a href="code.php"><i class="la la-ticket"></i> <span>Code</span></a>
							</li>
							
							<li class="menu-title"> 
								<span>UI Interface</span>
							</li>
							<li> 
								<a href="components.html"><i class="la la-puzzle-piece"></i> <span>Components</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-object-group"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
									<li><a href="form-input-groups.html">Input Groups </a></li>
									<li><a href="form-horizontal.html">Horizontal Form </a></li>
									<li><a href="form-vertical.html"> Vertical Form </a></li>
									<li><a href="form-mask.html"> Form Mask </a></li>
									<li><a href="form-validation.html"> Form Validation </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="tables-basic.html">Basic Tables </a></li>
									<li><a href="data-tables.html">Data Table </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Extras</span>
							</li>
							<li> 
								<a href="#"><i class="la la-file-text"></i> <span>Documentation</span></a>
							</li>
							<li> 
								<a href="javascript:void(0);"><i class="la la-info"></i> <span>Change Log</span> <span class="badge badge-primary ml-auto">v3.4</span></a>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><i class="la la-share-alt"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li class="submenu">
										<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
											<li class="submenu">
												<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
												<ul style="display: none;">
													<li><a href="javascript:void(0);">Level 3</a></li>
													<li><a href="javascript:void(0);">Level 3</a></li>
												</ul>
											</li>
											<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
										</ul>
									</li>
									<li>
										<a href="javascript:void(0);"> <span>Level 1</span></a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome Admin!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<?php
						$re_ak = 0;
						$re_tv = 0;
						$re_tl = 0;
						$re_hp = 0;
						$re_ny = 0;
						$re_dp = 0;
						$re_dq = 0;
						$re_mm = 0;
						$re_sk = 0;
						$re_sv = 0;

						$all_ak = 0;
						$all_tv = 0;
						$all_tl = 0;
						$all_hp = 0;
						$all_ny = 0;
						$all_dp = 0;
						$all_dq = 0;
						$all_mm = 0;
						$all_sk = 0;
						$all_sv = 0;
						$conn = new mysqli(servername,username,password,dbname);

						$count_ak = "SELECT COUNT(*) FROM code WHERE loaicode='An Khang' AND tinhtrang=0";
						$result_ak = $conn->query($count_ak);
						while ($row_ak = $result_ak->fetch_assoc()){
							$re_ak = $row_ak['COUNT(*)'];
						}
						$count_all_ak = "SELECT COUNT(*) FROM code WHERE loaicode='An Khang'";
						$result_all_ak = $conn->query($count_all_ak);
						while ($row_all_ak = $result_all_ak->fetch_assoc()){
							$all_ak = $row_all_ak['COUNT(*)'];
						}

						$count_tv = "SELECT COUNT(*) FROM code WHERE loaicode='Thịnh Vượng' AND tinhtrang=0";
						$result_tv = $conn->query($count_tv);
						while ($row_tv = $result_tv->fetch_assoc()){
							$re_tv = $row_tv['COUNT(*)'];
						}
						$count_all_tv = "SELECT COUNT(*) FROM code WHERE loaicode='Thịnh Vượng'";
						$result_all_tv = $conn->query($count_all_tv);
						while ($row_all_tv = $result_all_tv->fetch_assoc()){
							$all_tv = $row_all_tv['COUNT(*)'];
						}

						$count_tl = "SELECT COUNT(*) FROM code WHERE loaicode='Tài Lộc' AND tinhtrang=0";
						$result_tl = $conn->query($count_tl);
						while ($row_tl = $result_tl->fetch_assoc()){
							$re_tl = $row_tl['COUNT(*)'];
						}
						$count_all_tl = "SELECT COUNT(*) FROM code WHERE loaicode='Tài Lộc'";
						$result_all_tl = $conn->query($count_all_tl);
						while ($row_all_tl = $result_all_tl->fetch_assoc()){
							$all_tl = $row_all_tl['COUNT(*)'];
						}

						$count_hp = "SELECT COUNT(*) FROM code WHERE loaicode='Hạnh Phúc' AND tinhtrang=0";
						$result_hp = $conn->query($count_hp);
						while ($row_hp = $result_hp->fetch_assoc()){
							$re_hp = $row_hp['COUNT(*)'];
						}
						$count_all_hp = "SELECT COUNT(*) FROM code WHERE loaicode='Hạnh Phúc'";
						$result_all_hp = $conn->query($count_all_hp);
						while ($row_all_hp = $result_all_hp->fetch_assoc()){
							$all_hp = $row_all_hp['COUNT(*)'];
						}

						$count_ny = "SELECT COUNT(*) FROM code WHERE loaicode='Như Ý' AND tinhtrang=0";
						$result_ny = $conn->query($count_ny);
						while ($row_ny = $result_ny->fetch_assoc()){
							$re_ny = $row_ny['COUNT(*)'];
						}
						$count_all_ny = "SELECT COUNT(*) FROM code WHERE loaicode='Như Ý'";
						$result_all_ny = $conn->query($count_all_ny);
						while ($row_all_ny = $result_all_ny->fetch_assoc()){
							$all_ny = $row_all_ny['COUNT(*)'];
						}

						$count_dp = "SELECT COUNT(*) FROM code WHERE loaicode='Đại Phú' AND tinhtrang=0";
						$result_dp = $conn->query($count_dp);
						while ($row_dp = $result_dp->fetch_assoc()){
							$re_dp = $row_dp['COUNT(*)'];
						}
						$count_all_dp = "SELECT COUNT(*) FROM code WHERE loaicode='Đại Phú'";
						$result_all_dp = $conn->query($count_all_dp);
						while ($row_all_dp = $result_all_dp->fetch_assoc()){
							$all_dp = $row_all_dp['COUNT(*)'];
						}

						$count_dp = "SELECT COUNT(*) FROM code WHERE loaicode='Đại Phú' AND tinhtrang=0";
						$result_dp = $conn->query($count_dp);
						while ($row_dp = $result_dp->fetch_assoc()){
							$re_dp = $row_dp['COUNT(*)'];
						}
						$count_all_dp = "SELECT COUNT(*) FROM code WHERE loaicode='Đại Phú'";
						$result_all_dp = $conn->query($count_all_dp);
						while ($row_all_dp = $result_all_dp->fetch_assoc()){
							$all_dp = $row_all_dp['COUNT(*)'];
						}

						$count_dq = "SELECT COUNT(*) FROM code WHERE loaicode='Đại Quý' AND tinhtrang=0";
						$result_dq = $conn->query($count_dq);
						while ($row_dq = $result_dq->fetch_assoc()){
							$re_dq = $row_dq['COUNT(*)'];
						}
						$count_all_dq = "SELECT COUNT(*) FROM code WHERE loaicode='Đại Quý'";
						$result_all_dq = $conn->query($count_all_dq);
						while ($row_all_dq = $result_all_dq->fetch_assoc()){
							$all_dq = $row_all_dq['COUNT(*)'];
						}

						$count_mm = "SELECT COUNT(*) FROM code WHERE loaicode='May Mắn' AND tinhtrang=0";
						$result_mm = $conn->query($count_mm);
						while ($row_mm = $result_mm->fetch_assoc()){
							$re_mm = $row_mm['COUNT(*)'];
						}
						$count_all_mm = "SELECT COUNT(*) FROM code WHERE loaicode='May Mắn'";
						$result_all_mm = $conn->query($count_all_mm);
						while ($row_all_mm = $result_all_mm->fetch_assoc()){
							$all_mm = $row_all_mm['COUNT(*)'];
						}

						$count_sk = "SELECT COUNT(*) FROM code WHERE loaicode='Sức Khỏe' AND tinhtrang=0";
						$result_sk = $conn->query($count_sk);
						while ($row_sk = $result_sk->fetch_assoc()){
							$re_sk = $row_sk['COUNT(*)'];
						}
						$count_all_sk = "SELECT COUNT(*) FROM code WHERE loaicode='Sức Khỏe'";
						$result_all_sk = $conn->query($count_all_sk);
						while ($row_all_sk = $result_all_sk->fetch_assoc()){
							$all_sk = $row_all_sk['COUNT(*)'];
						}

						$count_sv = "SELECT COUNT(*) FROM code WHERE loaicode='Sum Vầy' AND tinhtrang=0";
						$result_sv = $conn->query($count_sv);
						while ($row_sv = $result_sv->fetch_assoc()){
							$re_sv = $row_sv['COUNT(*)'];
						}
						$count_all_sv = "SELECT COUNT(*) FROM code WHERE loaicode='Sum Vầy'";
						$result_all_sv = $conn->query($count_all_sv);
						while ($row_all_sv = $result_all_sv->fetch_assoc()){
							$all_sv = $row_all_sv['COUNT(*)'];
						}

						$conn->close();

						$kq_ak = 0;
						if ($all_ak!=0){
							$kq_ak = $re_ak/$all_ak*100;
						}
						
						$kq_tv = 0;
						if ($all_tv!=0){
							$kq_tv = $re_tv/$all_tv*100;
						}

						$kq_tl = 0;
						if ($all_tl!=0){
							$kq_tl = $re_tl/$all_tl*100;
						}

						$kq_hp = 0;
						if ($all_hp!=0){
							$kq_hp = $re_hp/$all_hp*100;
						}

						$kq_ny = 0;
						if ($all_ny!=0){
							$kq_ny = $re_ny/$all_ny*100;
						}

						$kq_dp = 0;
						if ($all_dp!=0){
							$kq_dp = $re_dp/$all_dp*100;
						}

						$kq_dq = 0;
						if ($all_dq!=0){
							$kq_dq = $re_dq/$all_dq*100;
						}

						$kq_mm = 0;
						if ($all_mm!=0){
							$kq_mm = $re_mm/$all_mm*100;
						}

						$kq_sk = 0;
						if ($all_sk!=0){
							$kq_sk = $re_sk/$all_sk*100;
						}

						$kq_sv = 0;
						if ($all_sv!=0){
							$kq_sv = $re_sv/$all_sv*100;
						}
					?>
					
					<!-- Statistics Widget -->
					<div class="row">
						<div class="col-md-12 col-lg-12 col-xl-6 d-flex">
							<div class="card flex-fill dash-statistics">
								<div class="card-body">
									<h5 class="card-title">Statistics</h5>
									
									<div class="stats-list" >
										<div class="stats-info">
											<p>An Khang <strong><?php echo $re_ak?> <small>/ <?php echo $all_ak?></small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $kq_ak;?>%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="stats-info">
											<p>Thịnh vượng <strong><?php echo $re_tv?> <small>/ <?php echo $all_tv?></small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $kq_tv;?>%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="stats-info">
											<p>Tài lộc <strong><?php echo $re_tl?> <small>/ <?php echo $all_tl?></small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $kq_tl;?>%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="stats-info">
											<p>Hạnh Phúc <strong><?php echo $re_hp?> <small>/ <?php echo $all_hp?></small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $kq_hp;?>%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="stats-info">
											<p>Như Ý <strong><?php echo $re_ny?> <small>/ <?php echo $all_ny?></small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $kq_ny;?>%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="stats-info">
											<p>Đại Phú <strong><?php echo $re_dp?> <small>/ <?php echo $all_dp?></small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-color1" role="progressbar" style="width: <?php echo $kq_dp;?>%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="stats-info">
											<p>Đại Quý <strong><?php echo $re_dq?> <small>/ <?php echo $all_dq?></small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-color2" role="progressbar" style="width: <?php echo $kq_dq;?>%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="stats-info">
											<p>May Mắn <strong><?php echo $re_mm?> <small>/ <?php echo $all_mm?></small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-color3" role="progressbar" style="width: <?php echo $kq_mm;?>%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="stats-info">
											<p>Sức Khỏe <strong><?php echo $re_sk?> <small>/ <?php echo $all_sk?></small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-color4" role="progressbar" style="width: <?php echo $kq_sk;?>%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="stats-info">
											<p>Sum Vầy <strong><?php echo $re_sv?> <small>/ <?php echo $all_sv?></small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-color5" role="progressbar" style="width: <?php echo $kq_sv;?>%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-12 col-lg-6 col-xl-6 d-flex">
							<div class="card flex-fill">
								<div class="card-body">
									<h4 class="card-title">Cost</h4>
									<div style="font-size:25px">
										<p><i class="fa fa-dot-circle-o text-purple mr-2"></i>An Khang <span class="float-right">----</span></p>
										<p><i class="fa fa-dot-circle-o text-warning mr-2"></i>Thịnh Vượng <span class="float-right">10K/ 1 CODE</span></p>
										<p><i class="fa fa-dot-circle-o text-success mr-2"></i>Tài Lộc <span class="float-right">5K/ 1 CODE</span></p>
										<p><i class="fa fa-dot-circle-o text-danger mr-2"></i>Hạnh Phúc <span class="float-right">30K/ 1 CODE</span></p>
										<p><i class="fa fa-dot-circle-o text-info mr-2"></i>Như Ý <span class="float-right">5K/ 1 CODE</span></p>
										<p><i class="fa fa-dot-circle-o text-color1 mr-2"></i>Đại Phú <span class="float-right">5K/ 2 CODE</span></p>
										<p><i class="fa fa-dot-circle-o text-color2 mr-2"></i>Đại Quý <span class="float-right">5K/ 2 CODE</span></p>
										<p><i class="fa fa-dot-circle-o text-color3 mr-2"></i>May Mắn <span class="float-right">5K/ 2 CODE</span></p>
										<p><i class="fa fa-dot-circle-o text-color4 mr-2"></i>Sức Khỏe <span class="float-right">5K/ 2 CODE</span></p>
										<p class="mb-0"><i class="fa fa-dot-circle-o text-color5 mr-2"></i>Sum Vầy <span class="float-right">5K/ 1 CODE</span></p>
										
									</div>
								</div>
							</div>
						</div>
						
						
					</div>
					<!-- /Statistics Widget -->

				
				</div>
				<!-- /Page Content -->

            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.5.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Chart JS -->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael.min.js"></script>
		<script src="assets/js/chart.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>