<?php
include 'includes/login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Metropolitan Hotels & Resorts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/slideshow.js"></script>
    <script src="js/dropdown.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>
    <?php require 'templates/header.php' ?>

    <!--<article>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <ul id="slides">
                            <li class="slide active"><img src="images/slider1.jpg " alt="Background"></li>
                            <li class="slide"><img src="images/slider2.jpg" alt="Background"></li>
                            <li class="slide"><img src="images/slider3.jpg" alt="Background"></li>
                            <li class="slide"><img src="images/slider4.jpg" alt="Background"></li>
                        </ul>
                        <div class="content">
                            <a id="menuitem-1">
                                <div id="menuitem-1">
                                    <h2>O hotelu</h2>
                                    <div class="text-area">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis rem ad, deserunt in sapiente sunt nam exercitationem quae dolor quaerat molestias repudiandae, omnis autem aliquam asperiores soluta sequi nemo quis.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa eaque reprehenderit nisi animi nesciunt reiciendis fugiat cum enim, eveniet, fugit in! Fugit velit adipisci, recusandae reprehenderit modi harum, neque
                                            vitae?
                                        </p>
                                        <p>Qui harum dolorum nostrum sit ea autem laborum. Ea vitae ut occaecati. Quas ut et. Et magni quaerat similique deleniti vero incidunt officiis. Eum vel quo nesciunt ea distinctio.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum eveniet sit omnis, veritatis laboriosam excepturi ratione commodi ut saepe architecto voluptate, doloribus, laudantium ea eos in. Accusantium laboriosam
                                            distinctio, fuga.
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="content">
                            <a id="menuitem-2">
                                <div id="menuitem-2">
                                    <h2>Kongresni centar</h2>
                                    <div class="text-area-2">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis rem ad, deserunt in sapiente sunt nam exercitationem quae dolor quaerat molestias repudiandae, omnis autem aliquam asperiores soluta sequi nemo quis.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa eaque reprehenderit nisi animi nesciunt reiciendis fugiat cum enim, eveniet, fugit in! Fugit velit adipisci, recusandae reprehenderit modi harum, neque
                                            vitae?
                                        </p>
                                        <img src="images/congress.jpg " alt="Kongres centar ">
                                        <p>Qui harum dolorum nostrum sit ea autem laborum. Ea vitae ut occaecati. Quas ut et. Et magni quaerat similique deleniti vero incidunt officiis. Eum vel quo nesciunt ea distinctio.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum eveniet sit omnis, veritatis laboriosam excepturi ratione commodi ut saepe architecto voluptate, doloribus, laudantium ea eos in. Accusantium laboriosam
                                            distinctio, fuga.
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="content">
                            <a id="menuitem-3">
                                <div id="menuitem-3">
                                    <h2>Wellness centar</h2>
                                    <div class="text-area-2">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis rem ad, deserunt in sapiente sunt nam exercitationem quae dolor quaerat molestias repudiandae, omnis autem aliquam asperiores soluta sequi nemo quis.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa eaque reprehenderit nisi animi nesciunt reiciendis fugiat cum enim, eveniet, fugit in! Fugit velit adipisci, recusandae reprehenderit modi harum, neque
                                            vitae?
                                        </p>
                                        <img src="images/wellness.jpg " alt="Wellness centar">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum eveniet sit omnis, veritatis laboriosam excepturi ratione commodi ut saepe architecto voluptate, doloribus, laudantium ea eos in. Accusantium laboriosam
                                            distinctio, fuga.
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="content">
                            <a id="menuitem-4">
                                <div id="menuitem-4">
                                    <h2>Cenovnik</h2>
                                    <table class="tg ">
                                        <tr>
                                            <th class="tg-yw4l">Naziv</th>
                                            <th class="tg-yw4l">Dvokrevetna soba</th>
                                            <th class="tg-yw4l">Trokrevetna soba</th>
                                            <th class="tg-yw4l">Apartman</th>
                                        </tr>
                                        <tr>
                                            <td class="tg-yw4l">Ekonomska</td>
                                            <td class="tg-yw4l">150e</td>
                                            <td class="tg-yw4l">250e</td>
                                            <td class="tg-yw4l">300e</td>
                                        </tr>
                                        <tr>
                                            <td class="tg-yw4l">Deluks</td>
                                            <td class="tg-yw4l">250e</td>
                                            <td class="tg-yw4l">450e</td>
                                            <td class="tg-yw4l">800e</td>
                                        </tr>
                                        <tr>
                                            <td class="tg-yw4l">Predsednicki</td>
                                            <td class="tg-yw4l">/</td>
                                            <td class="tg-yw4l">/</td>
                                            <td class="tg-yw4l">2000e</td>
                                        </tr>
                                    </table>
                                </div>
                            </a>
                        </div>
                        <div class="content">
                            <a id="menuitem-5">
                                <div id="menuitem-5">
                                    <h2>Galerija</h2>
                                    <div class="text-area-2">
                                        <img src=" " alt=" ">
                                        <img src=" " alt=" ">
                                        <img src=" " alt=" ">
                                        <img src=" " alt=" ">
                                        <img src=" " alt=" ">
                                        <img src=" " alt=" ">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>-->

    <?php require 'templates/footer.php' ?>    

    </div>
</body>

</html>