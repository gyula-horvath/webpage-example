<?php  
	include('../config.php'); 
	include(ROOT_PATH . '/admin/includes/admin_functions.php');
	loggedInChecker($_SESSION['loggedin'], BASE_URL . '/admin/login.php');
	include(ROOT_PATH . '/admin/includes/post_functions.php'); include(ROOT_PATH . '/admin/includes/head_section.php'); 
	// Get all admin posts from DB
	$posts = getAllPosts(); 
?>
	<title>Admin | Manage Posts</title>
</head>
<body>
<div class="main">
	<!-- admin navbar -->
	<?php include(ROOT_PATH . '/admin/includes/navbar.php') ?>

	<div class="container content">
		<!-- Left side menu -->
		<?php include(ROOT_PATH . '/admin/includes/menu.php') ?>

		<!-- Display records from DB-->
		<div class="table-div"  style="width: 80%;">
			<!-- Display notification message -->
			<?php include(ROOT_PATH . '/includes/messages.php') ?>

			<?php if (empty($posts)): ?>
				<h1 style="text-align: center; margin-top: 20px;">No posts in the database.</h1>
			<?php else: ?>
				<table class="table">
						<thead>
						<th>N</th>
                        <th>Title</th>
                        <th>Body</th>
						<th><small>Edit</small></th>
						<th><small>Delete</small></th>
					</thead>
					<tbody>
					<?php foreach ($posts as $key => $post): ?>
						<tr>
							<td><?php echo $key + 1; ?></td>
							<td><?php echo $post['title']; ?></td>
							<td><?php echo html_entity_decode($post['body']); ?></td>

							<td>
								<a class="fa fa-pencil btn edit"
									href="create_post.php?edit-post=<?php echo $post['id'] ?>">
								</a>
							</td>
							<td>
								<a  class="fa fa-trash btn delete" 
									href="create_post.php?delete-post=<?php echo $post['id'] ?>">
								</a>
							</td>
						</tr>
					<?php endforeach ?>
					</tbody>
				</table>
			<?php endif ?>
		</div>
		<!-- // Display records from DB -->
	</div>
	</div>
    <?php include(ROOT_PATH . '/admin/includes/footer.php') ?>