<?php  
	include('../config.php');   
	include(ROOT_PATH . '/admin/includes/admin_functions.php'); 
	loggedInChecker($_SESSION['loggedin'], BASE_URL . '/admin/login.php');
	// Get all admin users from DB
	$admins = getAdminUsers();
	$roles = ['Admin', 'Author'];				
	require_once( ROOT_PATH . '/admin/includes/head_section.php'); 
?>
	<title>Admin | Manage users</title>
</head>
<body>
<div class="main">
<?php include(ROOT_PATH . '/admin/includes/navbar.php') ?>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
		<?php include(ROOT_PATH . '/admin/includes/menu.php') ?>
            <h1 class="text-center">Admin regisztráció</h1>

            <form method="post" action="<?php echo BASE_URL . 'admin/register.php'; ?>" >

                <!-- validation errors for the form -->
                <?php include(ROOT_PATH . '/admin/includes/errors.php') ?>

                <!-- if editing user, the id is required to identify that user -->
                <?php if ($isEditingUser === true): ?>
                <input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>">
                <?php endif ?>

                <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
                <input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="passwordConfirmation" placeholder="Password confirmation">
                <select name="role">
                <option value="" selected disabled>Assign role</option>
                    <?php foreach ($roles as $key => $role): ?>
                    <option value="<?php echo $role; ?>"><?php echo $role; ?></option>
                    <?php endforeach ?>
                 </select>

                <!-- if editing user, display the update button instead of create button -->
                <?php if ($isEditingUser === true): ?> 
                    <button type="submit" class="btn" name="update_admin">UPDATE</button>
                <?php else: ?>
                    <button type="submit" class="btn" name="create_admin">Save User</button>
                <?php endif ?>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="table-div">
			<!-- Display notification message -->
			<?php include(ROOT_PATH . '/includes/messages.php') ?>

			<?php if (empty($admins)): ?>
				<h1>No admins in the database.</h1>
			<?php else: ?>
				<table class="table">
					<thead>
						<th>Név</th>
						<th>Admin</th>
						<th>Szerep</th>
						<th colspan="2">Akció</th>
					</thead>
					<tbody>
					<?php foreach ($admins as $key => $admin): ?>
						<tr>
							<td><?php echo $key + 1; ?></td>
							<td>
								<?php echo $admin['username']; ?>, &nbsp;
								<?php echo $admin['email']; ?>	
							</td>
							<td><?php echo $admin['role']; ?></td>
							<td>
								<a class="fa fa-pencil btn edit"
									href="register.php?edit-admin=<?php echo $admin['id'] ?>">
								</a>
							</td>
							<td>
								<a class="fa fa-trash btn delete" 
								    href="register.php?delete-admin=<?php echo $admin['id'] ?>">
								</a>
							</td>
						</tr>
					<?php endforeach ?>
					</tbody>
				</table>
			<?php endif ?>
        </div>
    </div>
</div>
<!-- // container -->
<!-- Footer -->
</div>
	<?php include( ROOT_PATH . '/admin/includes/footer.php'); ?>
<!-- // Footer -->