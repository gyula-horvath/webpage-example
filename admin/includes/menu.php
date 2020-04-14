<div class="menu">
	<div class="card">
		<div class="card-header">
			<h2>Opciók</h2>
		</div>
		<div class="card-content">
			<a href="<?php echo BASE_URL . 'admin/create_post.php' ?>">Új hír</a>
			<a href="<?php echo BASE_URL . 'admin/posts.php' ?>">Hírek kezelése</a>
			<a href="<?php echo BASE_URL . 'admin/register.php' ?>">Adminok kezelése</a>
			<a href="<?php echo BASE_URL . 'admin/upload.php' ?>">Fájlok feltöltése</a>
		</div>
		<?php if (isset($_SESSION['user'])): ?>
			<div class="user-info">
				<span>Hello, <?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp; 
				<a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">logout</a>
			</div>
		<?php endif ?>
	</div>
</div>