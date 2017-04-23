<?php
require_once 'includes/login.php';
require_once 'includes/register.php';

if (isset($_SESSION['logged'])) {
    header("location: home.php");
}

if (isset($_SESSION['error'])) {
    $error =  $_SESSION['error'];
    unset($_SESSION['error']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Metropolitan Hotels & Resorts</title>
    <link rel="stylesheet/less" type="text/css" href="styles/style.less" />
    <link rel="stylesheet" href="styles/style.css">
    <script src="js/slideshow.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>
    <header>

        <div id="header-wrapper">
            <div id="logo">
                <a href="index.html">
                    <img src="images/logo2.png" alt="Hotel Metropolitan">
                </a>
            </div>
            <div id="header-top">
                <div class="social-top">
                    <a href="#">
                        <div class="social-icon">
                            <img src="images/facebook.png" alt="">
                        </div>
                    </a>
                    <a href="#">
                        <div class="social-icon">
                            <img src="images/twitter.png" alt="">
                        </div>
                    </a>
                    <a href="#">
                        <div class="social-icon">
                            <img src="images/linkedin.png" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div id="header-bot">
                <div id="nav">
                    <a href="#menuitem-1">
                        <div class="menuitem">
                            O hotelu
                        </div>
                    </a>
                    <a href="#menuitem-2">
                        <div class="menuitem">
                            Kongresni centar
                        </div>
                    </a>
                    <a href="#menuitem-3">
                        <div class="menuitem">
                            Wellness centar
                        </div>
                    </a>
                    <a href="#menuitem-4">
                        <div class="menuitem">
                            Cenovnik
                        </div>
                    </a>
                    <a href="#menuitem-5">
                        <div class="menuitem">
                            Galerija
                        </div>
                    </a>
                    <form class="login-form" action="" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="mail" placeholder="Mail">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="password" placeholder="Password">
                        </div>
                        <button type="submit" name="login" class="btn btn-default">Sign In</button>
                    </form>
                    <form class="login-form" action="" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="mail" placeholder="Mail">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="password" placeholder="Password">
                        </div>
                        <button type="submit" name="register" class="btn btn-default">Sign up</button>
                    </form>
                    <span><?php echo $error; ?></span>
                </div>
            </div>
        </div>

    </header>

    <article>
        <section>
            <div id="content-wrapper">
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
        </section>
    </article>
    <footer>
        <div id="geolocation">
            <img src="images/geo.png" alt="Geolocation">
        </div>
        <div id="footer-copyright">
            Hotel Metropolitan &copy 2017
        </div>
    </footer>

    </div>
</body>

</html>