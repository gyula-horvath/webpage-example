<?php 
    require_once('../config.php'); 
    include(ROOT_PATH . '/admin/includes/admin_functions.php'); 
	loggedInChecker($_SESSION['loggedin'], BASE_URL . '/admin/login.php');
    require_once( ROOT_PATH . '/admin/includes/head_section.php'); 
?>
        <title>Kolibri Akrobatikus Torna</title>
    </head>
    <body>
    <div class="main">
    <div class="row">
        <div class="col-md-12">
            <?php include( ROOT_PATH . '/admin/includes/navbar.php') ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                    <?php include(ROOT_PATH . '/admin/includes/menu.php') ?>
                        <div class="row">
                            <div class="col-md-12 m-5">
                                <form action="includes/upload_functions.php" method="post" enctype="multipart/form-data">
                                    <label> Select Files: </label>
                                    <input type="file" name="files[]" multiple > 
                                    <input type="submit" name="upload" value="Feltöltés" >
                                </form>
                                <?php
                                    if(isset($_GET['message'])){
                                        echo $_GET['message'];
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include( ROOT_PATH . '/admin/includes/footer.php'); ?>