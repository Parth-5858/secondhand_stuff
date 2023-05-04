<?php
    
?>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav menu">
        <li class="active"><a href="<?php echo $web; ?>index.php">Home</a></li>
        
        <li class="dropdown submenu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Products</a>
            <ul class="dropdown-menu">
                 <?php 
                            if(isset($_SESSION['mjwadmin_id'])){
                        $id = $_SESSION['mjwadmin_id'];

                                $electronic = '
                                    <li><a href='.$web.'electronic.php?id='.$id.'>Electronic Appliances</a></li>';
                            }else{
                                $electronic = '<li><a href='.$web.'electronic.php>Electronic Appliances</a></li>';
                            }
                            echo $electronic;
                        ?>
                <li><a href="#">Books & Novels</a></li>
                <li><a href="#">Stationery</a></li>
                <li><a href="#">Music, sports & gym</a></li>
                <li><a href="#">bags & Luggage</a></li>
            </ul>
        </li>
        <li><a href="<?php $web; ?>contact.php">Contact</a></li>
        <li>
                        <?php 
 
                            if(isset($_SESSION['mjwadmin_id'])){

                                $login = '<a href="#">'. $_SESSION['mjwadmin_name'].'</a>

                                    <li><a href='.$web.'add_student_product.php><i class="fa fa-product-hunt"></i></a></li>
                                    <li><a href="include/allfunction.php?action=signout"><i class="fa fa-sign-out">Logout</i></a></li>';
                            }else{
                                $login = '<a href='.$web.'login.php>Login</a>';
                            }
                            echo $login;
                        ?>
                        
                    </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li class="search_dropdown"><a href="#"><i class="fa fa-search"></i></a></li>
    </ul>
</div>
