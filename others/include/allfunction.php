<?php
include("connect.php");

date_default_timezone_set('Asia/Kolkata');

switch($_REQUEST['action'])
{
	case "view_brand_logo":
		view_brand_logo();
		break;
	
	
}
function fun404()
{
	header('http://mitaljewels.com/ITficial/mj/mjmin/dashboard.php');
}

function view_brand_logo(){
	global $link;
	global $web;
	
	$brandimg = mysqli_query($link,"select * from brand where type='1'");
	while($getbrand = mysqli_fetch_array($brandimg)){

	if($getbrand['brandname']=='AP'){
	    $setimglink = '<a href="'.$web.'ap.php"><img src="http://mtj.world/brand-photos/'.$getbrand['path'].'" alt="Post" /></a>';
		$setlink = '<a href="'.$web.'ap.php">'.$getbrand['brandname'].'</a>';
	}else if($getbrand['brandname']=='Cartier'){
	    $setimglink = '<a href="'.$web.'cartier.php"><img src="http://mtj.world/brand-photos/'.$getbrand['path'].'" alt="Post" /></a>';
		$setlink = '<a href="'.$web.'cartier.php">'.$getbrand['brandname'].'</a>';
	}else{
	    $setimglink = '<a href="'.$web.'brand-details.php"><img src="http://mtj.world/brand-photos/'.$getbrand['path'].'" alt="Post" /></a>';
		$setlink = '<a href="'.$web.'brand-details.php">'.$getbrand['brandname'].'</a>';
	}
	
		$datas .='<div class="col-lg-6 col-md-6 col-sm-6 blog-masonry-box">
					<div class="type-post">
						<div class="entry-cover">
							'.$setimglink.'
						</div>
						<div class="entry-content">
							<div class="entry-header">	
								<h3 class="entry-title">'.$setlink.'</h3>
							</div>
							<p>'.$getbrand['description'].'</p>
						</div>
					</div>
				</div>';
	}
	echo $datas;
}




?>