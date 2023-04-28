    <div id="header">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="dashboard.php"><img src="<?php echo $web1;?>img/logo.png" style="background-color: gainsboro;width:160px;height:60px"></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon16 icomoon-icon-arrow-4"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">             
                <ul class="nav navbar-right usernav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                            <img src="<?php echo $web1;?>img/logo.png" alt="" class="image" /> 
                            <span class="txt"><?php echo $_SESSION['mjwadmin_name']; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="menu">
                                <ul>
                                    <li><a href="#" id="resetpwd"><span class="icon16 icomoon-icon-exit"></span><span class="txt">Reset Password</span></a></li>
									<li><a href="include/allfunction.php?action=signout"><span class="icon16 icomoon-icon-exit"></span><span class="txt"> Logout</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                   
                </ul>
            </div><!-- /.nav-collapse -->
        </nav><!-- /navbar --> 
    </div><!-- End #header -->