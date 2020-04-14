<?php 
// Post variables
date_default_timezone_set('Europe/Budapest');
$post_id = 0;
$isEditingPost = false;
$published = 0;
$title = "";
$post_slug = "";
$body = "";
/* - - - - - - - - - - 
-  Post actions
- - - - - - - - - - -*/
// if user clicks the create post button
if (isset($_POST['create_post'])) { createPost($_POST); }
// if user clicks the Edit post button
if (isset($_GET['edit-post'])) {
	$isEditingPost = true;
	$post_id = $_GET['edit-post'];
	editPost($post_id);
}
// if user clicks the update post button
if (isset($_POST['update_post'])) {
	updatePost($_POST);
}
// if user clicks the Delete post button
if (isset($_GET['delete-post'])) {
	$post_id = $_GET['delete-post'];
	deletePost($post_id);
}
/* - - - - - - - - - - 
-  Post functions
- - - - - - - - - - -*/
function createPost($request_values)
	{
		global $conn, $errors, $title, $body;
		$title = esc($request_values['title']);
		$body = htmlentities(esc($request_values['body']));
		$user_id = $_SESSION['user']['id'];
		// create slug: if title is "The Storm Is Over", return "the-storm-is-over" as slug
		$date = date('Y-m-d H:i:s');
		// validate form
		if (empty($title)) { array_push($errors, "A cím kötelező"); }
		if (empty($body)) { array_push($errors, "A Hírtest kötelező"); }
		// create post if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO news (user_id, title, body, date) VALUES('$user_id', '$title', '$body', '$date')";
			if(mysqli_query($conn, $query)){ // if post created successfully
				$_SESSION['message'] = "Új hír létrehozva";
				header('location: posts.php');
				exit(0);
			}
		}
	}

	/* * * * * * * * * * * * * * * * * * * * *
	* - Takes post id as parameter
	* - Fetches the post from database
	* - sets post fields on form for editing
	* * * * * * * * * * * * * * * * * * * * * */
	function editPost($role_id)
	{
		global $conn, $title,  $body, $isEditingPost, $post_id;
		$sql = "SELECT * FROM news WHERE id=$role_id LIMIT 1";
		$result = mysqli_query($conn, $sql);
		$post = mysqli_fetch_assoc($result);
		// set form values on the form to be updated
		$title = $post['title'];
		$body = $post['body'];
	}

	function updatePost($request_values)
	{
		global $conn, $errors, $post_id, $title, $body;

		$title = esc($request_values['title']);
		$body = esc($request_values['body']);
		$post_id = esc($request_values['post_id']);
		$date = date('Y-m-d H:i:s');

		if (empty($title)) { array_push($errors, "Post title is required"); }
		if (empty($body)) { array_push($errors, "Post body is required"); }

		if (count($errors) == 0) {
			$query = "UPDATE news SET title='$title', body='<p>Frissítve: $date</p>$body', date='$date' WHERE id='$post_id'";
			if(mysqli_query($conn, $query)){ // if post created successfully
				$_SESSION['message'] = "Hír frissítve";
				header('location: posts.php');
				exit(0);
			}
		}

	}
	// delete blog post
	function deletePost($post_id)
	{
		global $conn;
		$sql = "DELETE FROM news WHERE id=$post_id";
		if (mysqli_query($conn, $sql)) {
			$_SESSION['message'] = "Post successfully deleted";
			header("location: posts.php");
			exit(0);
		}
	}
// get all posts from DB
function getAllPosts()
{
	global $conn;
	
	// Admin can view all posts
	// Author can only view their posts
	if ($_SESSION['user']['role'] == "Admin") {
		$sql = "SELECT * FROM news";
	} elseif ($_SESSION['user']['role'] == "Author") {
		$user_id = $_SESSION['user']['id'];
		$sql = "SELECT * FROM news WHERE user_id=$user_id";
	}
	$result = mysqli_query($conn, $sql);
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($posts as $post) {
		$post['author'] = getPostAuthorById($post['user_id']);
		array_push($final_posts, $post);
	}
	return $final_posts;
}
// get the author/username of a post
function getPostAuthorById($user_id)
{
	global $conn;
	$sql = "SELECT username FROM users WHERE id=$user_id";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		// return username
		return mysqli_fetch_assoc($result)['username'];
	} else {
		return null;
	}
}
?>