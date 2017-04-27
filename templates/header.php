<header>
    <!--<div class="container-fluid">-->
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-default crimson" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <img src="images/logo2.png" alt="Hotel Metropolitan">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="menuitem"><a href="#about">About</a></li>
                            <li class="menuitem"><a href="#congress">Congress center</a></li>
                            <li class="menuitem"><a href="#wellness">Wellness center</a></li>
                            <li class="menuitem"><a href="#pricing">Pricing</a></li>
                            <li class="menuitem"><a href="#gallery">Gallery</a></li>
                            <?php if (isset($_SESSION['logged'])) { ?>
                            <li class="menuitem"><a href="#reservations">Reservations</a></li>
                            <?php } ?>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <?php if (isset($_SESSION['logged'])) { ?>
                            <li>
                                <p class="navbar-text">Signed in as:&nbsp;&nbsp;&nbsp;
                                    <a href="account.php" class="navbar-link">
                                        <?php echo $_SESSION['logged'];?>
                                    </a>
                                </p>
                            </li>
                            <form class="logout-form" action="includes/logout.php" method="post">
                                <li>
                                    <button class="btn btn-default center menuitem" type="submit" name="submit">Log out</button>
                                </li>
                            </form>
                            <?php } else { ?>
                            <li class="menuitem"><a href="registration.php">Sign Up</a></li>
                            <li class="dropdown menuitem">
                                <a class="dropdown-toggle" href="" data-toggle="dropdown">Sign in <b class="caret"></b></a>
                                <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                                    <li>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav">
                                                    <div class="form-group">
                                                        <label class="sr-only">Email address</label>
                                                        <input type="mail" name="mail" class="form-control" id="exampleInputEmail" placeholder="Email address" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="sr-only">Password</label>
                                                        <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" name="login" class="btn btn-success btn-block">Sign in</button>
                                                    </div>
                                                    <?php if (!empty($error)) { ?>
                                                    <div class="alert alert-danger">
                                                        <?php echo $error; ?>
                                                    </div>
                                                    <?php } ?>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </nav>
            </div>
        <!--</div>-->
</header>