<?php 
    require_once('../config.php'); 
    include('includes/registration_login.php');
    require_once( ROOT_PATH . '/admin/includes/head_section.php'); 
?>
	<title>KAT | Bejelentkezés</title>
</head>
<body>
    <div class="main">
    <div class="row">
        <div class="col-md-12">
        <?php include(ROOT_PATH . '/admin/includes/navbar.php') ?>
            <div class="row d-md-flex justify-content-around mt-5">
                <div class="col-md-2"></div>
                <div class="col-md-8">
	        	    <h2>Bejelentkezés</h2>
                    <form method="post" action="login.php" >
	        	    	<?php include(ROOT_PATH . '/admin/includes/errors.php') ?>
	        	    	<input type="text" name="username" value="<?php echo $username; ?>" value="" placeholder="Username">
	        	    	<input type="password" name="password" placeholder="Password">
	        	    	<button type="submit" class="btn" name="login_btn">Login</button>
	        	    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include(ROOT_PATH . '/admin/includes/footer.php') ?>
<!-- // container adminDir: admin-->