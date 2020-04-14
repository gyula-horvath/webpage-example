<?php  
	include('../config.php');
	date_default_timezone_set('Europe/Budapest');
	include(ROOT_PATH . '/admin/includes/admin_functions.php'); 

	loggedInChecker($_SESSION['loggedin'], BASE_URL . '/admin/login.php');

	include(ROOT_PATH . '/admin/includes/post_functions.php');
	include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
	<title>Admin | Hír közzététele</title>
</head>
<body>
<div class="main">
	<!-- admin navbar -->
	<?php include(ROOT_PATH . '/admin/includes/navbar.php') ?>

	<div class="container content">
		<!-- Left side menu -->
		<?php include(ROOT_PATH . '/admin/includes/menu.php') ?>

		<!-- Middle form - to create and edit  -->
		<div class="action create-post-div">
			<h1 class="page-title">Új hír közzététele</h1>
			<form method="post" enctype="multipart/form-data" action="<?php echo BASE_URL . 'admin/create_post.php'; ?>" >
				<!-- validation errors for the form -->
				<?php include(ROOT_PATH . '/admin/includes/errors.php') ?>

				<!-- if editing post, the id is required to identify that post -->
				<?php if ($isEditingPost === true): ?>
					<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
				<?php endif ?>

				<input type="text" name="title" value="<?php echo $title; ?>" placeholder="Title">
				<textarea name="body" id="body" cols="30" rows="10"><?php echo $body; ?></textarea>
				
				
				
				<!-- if editing post, display the update button instead of create button -->
				<?php if ($isEditingPost === true): ?> 
					<button type="submit" class="btn btn-primary mb-2" name="update_post">UPDATE</button>
				<?php else: ?>
					<button type="submit" class="btn btn-primary mb-2" name="create_post">Hír mentése</button>
				<?php endif ?>

			</form>
		</div>
		<!-- // Middle form - to create and edit -->
	</div>
	</div>
	<?php include(ROOT_PATH . '/admin/includes/footer.php') ?>

<script>
	CKEDITOR.replace('body');
</script>