<?php 
    require_once('config.php');
    require_once( ROOT_PATH . '/includes/public_functions.php');
    $posts = getPublishedPosts(); 
    require_once( ROOT_PATH . '/includes/head_section.php');
    ?>
    <title>AkroArt</title>
</head>

<body>
    <div class="row">
        <div class="col-md-12">
        <?php include( ROOT_PATH . '/includes/navbar.php') ?>
            <header id="home" class="masthead">
                <div class="row h-100 align-items-center">
                    <div class="col-12 text-center">
                        <h1 class="font-weight-light" id="index_h1">AkroArt</h1>
                    </div>
                </div>
            </header>
            <div class="row">
                <div class="col-md-12">
                    <h3 id="about" class="text-center">Rólunk</h3>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="ml-3">
                            <h5>Sed dignissim finibus?</h5>
                            <p class="text-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pellentesque
                            maximus augue, eu condimentum felis pretium quis. Proin vestibulum erat vel
                            imperdiet congue. Ut molestie sapien quis nisl congue feugiat. Suspendisse
                            mollis, eros eu vulputate porttitor, risus sem varius nisi, consequat commodo
                            est mauris id ante. Morbi lobortis dui in nunc aliquet, ut bibendum elit 
                            pulvinar. Etiam a convallis nulla. Cras quis tellus hendrerit, dignissim 
                            arcu quis, euismod nisi. Ut ipsum lectus, condimentum ac eros eget, molestie
                            ultrices odio. Integer nec urna non dolor maximus viverra. Quisque eleifend
                            tortor in lobortis pellentesque.  
                            </p>
                            <h5>Ac ante ipsum </h5>
                            <p class="text-left">
                            Pellentesque luctus nibh pharetra, dictum turpis eget, volutpat ex. Fusce congue convallis hendrerit. Aliquam eget fermentum turpis. Curabitur sollicitudin quam sed venenatis dictum. Cras metus ante, tincidunt et leo et, iaculis auctor leo. Quisque pharetra, nibh in condimentum congue, elit tortor porta magna, sed porta sapien purus et tortor. Ut vitae sem nec enim lacinia finibus id eu sapien. Aenean a iaculis est, a vestibulum leo. Quisque ut suscipit urna. Nullam a lorem id nisi vestibulum tincidunt. 
                            </p>
                            <h5>Luctus nibh</h5>
                            <p  class="text-left">
                            Fusce sagittis tempor lectus tempus condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus luctus eros quis nibh mollis, eget egestas turpis pulvinar. Duis in lacus at lectus dapibus lobortis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce vulputate nisl a mi ornare laoreet. Nullam tempor a ante vel cursus. Suspendisse facilisis lorem non massa molestie finibus. Proin consequat lorem risus, quis fermentum neque efficitur non. Duis ut nulla nec leo varius finibus. Curabitur velit dui, pellentesque eget nunc sed, ultrices elementum neque. Mauris in efficitur orci. 
                            </p>
                            </div>
                        </div>
                        <div class="col-md-3 contacts-div flex-column">
                            <h6 class="font-weight-bold contact-head text-center mb-3">
                                Érdeklünk? Elérhetsz itt:
                            </h6>
                            <p class="contact-type">Email: <a class="text-lowercase contacts-link" href="mailto:pelda@pelda.com?subject=Pelda emil" target="_blank">pelda@pelda.com</a></p>
                            <p class="contact-type">Tel: <a class="contacts-link" href="tel:+0000-000-0000"> +00-00-000-00-00</a></p>
                            <div class="d-flex align-items-center justify-content-around mt-3">
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="https://mysocialmate.co/u/pelda" class="fa fa-instagram"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3 id="groups" class="text-center">Táblázat</h3>
                    <div class="row d-flex justify-content-around">
                        <div class="col-md-5">
                            <table class="table table-hover table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center font-weight-bold text-uppercase" colspan="2">
                                            head 1
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="text-center" colspan="2">
                                            head 2 <br> 
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Adat 1-1
                                        </td>
                                        <td>
                                            Adat 1-2           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Adat 2-1
                                        </td>
                                        <td>
                                            Adat 2-2
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Adat 3-1
                                        </td>
                                        <td>
                                            Adat 3-2
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center" colspan="2">Térkép:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d825.2562676827281!2d24.3028883170608!3d-78.06273488196089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNzjCsDAzJzQ1LjkiUyAyNMKwMTgnMTguMyJF!5e0!3m2!1shu!2shu!4v1586890086425!5m2!1shu!2shu" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-5">
                        <table class="table table-hover table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center font-weight-bold text-uppercase" colspan="2">
                                            head 1
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="text-center" colspan="2">
                                            Head 2
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Adta 1-1
                                        </td>
                                        <td>
                                            Adat 1-2
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Adat 2-1
                                        </td>
                                        <td>
                                            Adat 2-2
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"  colspan="2">Térkép:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d825.2562676827281!2d24.3028883170608!3d-78.06273488196089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNzjCsDAzJzQ1LjkiUyAyNMKwMTgnMTguMyJF!5e0!3m2!1shu!2shu!4v1586890086425!5m2!1shu!2shu" width="100%" height="135%" frameborder="0" style="border:0;" allowfullscreen=""></iframe></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3 id="news" class="text-center">
                        Hírek
                    </h3>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <?php foreach ($posts as $post): ?>
                                <div class="post mb-2">
                                    <h5 class="text-center"><?php echo $post['title'] ?></h5>
                                    <?php echo html_entity_decode($post['body']); ?>
                                    <span><?php echo date("Y F j ", strtotime($post["date"])); ?></span>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include( ROOT_PATH . '/includes/footer.php') ?>