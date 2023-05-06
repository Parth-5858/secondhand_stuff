<?php
session_start();
include("connect.php");

date_default_timezone_set('Asia/Kolkata');

switch($_REQUEST['action'])
{
	case "signin":
		login();
		break;
	case "signout":
		logout();
		break;
	case "signup":
		signup();
		break;
	case "addproduct":
		addproduct();
		break;
	case "product_listing":
		product_listing();
		break;
	case "view_home_slider":
		view_home_slider();
		break;
	case "allbranddetail":
		allbranddetail();
		break;
	case "add_contact":
		addcontact();
		break;


	
}
function fun404()
{
header('http://mtj.world/wrong-galaxy-404.html');
}

function login(){
	global $link;
	global $web;
	global $web1;
	

	date_default_timezone_set('Europe/London');
	$sTime = date("d-m-Y H:i:s");  

	$escapedName = mysqli_real_escape_string($link,$_POST['username']);
	$escapedPW = md5(mysqli_real_escape_string($link,$_POST['password']));
	//query execute

	$query = mysqli_query($link,"select * from student_info where semail ='".$escapedName."' and password='".$escapedPW."'");
	
	//check if data null or not

	if(mysqli_num_rows($query) > 0){
		
		$row = mysqli_fetch_array($query);

		$_SESSION['mjwadmin_id']=$row['studid'];
		$_SESSION['mjwadmin_name']=$row['sname'];

		$query1 = mysqli_query($link,"update student_info set `semail`='".$escapedName."',`log_in`='".$sTime."' where studuni_id='".$row['studuni_id']."'");

		echo "1";
	}
	else{
		echo "0";
	}
}
function logout(){
	global $web;

	$id=$_SESSION['mjwadmin_id'];
	if(isset($_SESSION['mjwadmin_id']))
	{
		session_unset(); 
		session_destroy();
		header('location:'.$web);
	}
	else
		header('location:'.$web);

}

function signup(){
	global $link;
	global $web;
	global $web1;
		
	if(isset($_REQUEST['studid'])){
		$studid=$_REQUEST['studid'];
	}else{
		$studid='';
	}
	if(isset($_REQUEST['sname'])){
		$sname=$_REQUEST['sname'];
	}else{
		$sname='';
	}
	if(isset($_REQUEST['semail'])){
		$semail=$_REQUEST['semail'];
	}
	else{
		$semail='';
	}

	if(isset($_REQUEST['contact'])){
		$contact=$_REQUEST['contact'];
	}
	else{
		$contact='';
	}

	if(isset($_REQUEST['password'])){
		$password = md5(mysqli_real_escape_string($link,$_REQUEST['password']));
	}
	else{
		$password='';
	}

	if(isset($_REQUEST['cpassword'])){
		$cpassword=$_REQUEST['cpassword'];
	}
	else{
		$cpassword='';
	}
	if(isset($_REQUEST['address'])){
		$address=$_REQUEST['address'];
	}
	else{
		$address='';
	}

    $sql = mysqli_query($link,"select * from student_info where contact=".$contact);
	$result = mysqli_fetch_array($sql);
	
	if($result>0){

		echo "2";

	}else if($contact!=''){

		$query1 = mysqli_query($link,"INSERT INTO `student_info` (`studuni_id`,`sname`,`semail`,`contact`,`password`,`address`) VALUES ('".$studid."','".$sname."','".$semail."','".$contact."','".$password."','".$address."')");
		
		echo "1";
	}else{
		 echo "0";
	    	
	}
	
}
	
function addproduct(){
	global $link;
	global $web;
	global $web1;
	
	$date=date("d-m-Y h:m A");
	
	if(isset($_REQUEST['brand'])){
		$brand=$_REQUEST['brand'];
	}else{
		$brand='';
	}
	if(isset($_REQUEST['proname'])){
		$proname=$_REQUEST['proname'];
	}else{
		$proname='';
	}
	if(isset($_REQUEST['price'])){
		$price=$_REQUEST['price'];
	}else{
		$price='';
	}
	if(isset($_REQUEST['stype'])){
		$stype=$_REQUEST['stype'];
	}
	else{
		$stype='';
	}
	if(isset($_REQUEST['weight'])){
		$weight=$_REQUEST['weight'];
	}
	else{
		$weight='';
	}
	if(isset($_REQUEST['qty'])){
		$qty=$_REQUEST['qty'];
	}
	else{
		$qty='';
	}
	if(isset($_REQUEST['pdescription'])){
		$pdescription=$_REQUEST['pdescription'];
	}
	else{
		$pdescription='';
	}
	
	$stid = $_SESSION['mjwadmin_id'];
	//$stid = $_SESSION['mjwadmin_id'];

	if(isset($_SESSION['mjwadmin_id'])){
		$query1 = mysqli_query($link,"INSERT INTO `products` (`brandname`,`pname`,`price`,`stype`,`description`,`weight`,`qty`,`studid`) VALUES ('".$brand."','".$proname."','".$price."','".$stype."','".$pdescription."','".$weight."','".$qty."','".$stid."')");
	
	
	if($query1){
		$id=mysqli_insert_id($link);

		if(isset($_FILES['homeimage']['name']) && $_FILES['homeimage']['name'] != '')
		{
			$file_count = count((array)$_FILES['homeimage']['tmp_name']);
			if($file_count > 0)
			{
				$errors= array();
				$number=rand();
				$file_name = $_FILES['homeimage']['name'];
				$file_size =$_FILES['homeimage']['size'];
				$file_tmp =$_FILES['homeimage']['tmp_name'];
				$file_type=$_FILES['homeimage']['type'];	
				$desired_dir="../brand-photos/";
				$ext = pathinfo($file_name, PATHINFO_EXTENSION);
				$preg=array("'"," ",".");
				$file = str_replace($preg,"_",$file_name)."_".$number.".".$ext;
				//$file = $number.".".$ext;
				if(move_uploaded_file($file_tmp,$desired_dir.$file))
					{
						$$bchk=mysqli_query($link,"select * from products where pid='".$_REQUEST['pid']."'");
						$bchkdata=mysqli_fetch_array($bchk);

							
						if(mysqli_num_rows($bchk)>0){
							$query=mysqli_query($link,"update products set `path`='".$file."' where pid='".$_REQUEST['pid']."'");
							
						}else{
							$query=mysqli_query($link,"update products set `path`='".$file."' where pid='".$id."'");
						}
					}
				
			}
		}
	}
		
	}
	if($query1){
		echo "1";
	}else{
		echo "0";
	}
}

function product_listing(){
	global $link;
	global $web;
	
	$catid=$_REQUEST['cat'];
	$catname=$_REQUEST['catname'];
	
	$sql=mysqli_query($link,"select * from products where sub_category_id='".$catid."'");
	while($catdata=mysqli_fetch_array($sql)){
		//get product image
		$pimgsql=mysqli_query($link,"select * from product_images where itype='1' and pid='".$catdata['product_id']."'");
		$pimgdata=mysqli_fetch_assoc($pimgsql);
		if(mysqli_num_rows($pimgsql)>0){
			$proimg=$web.'product_images'.$pimgdata['name'];
		}
		else{
			$proimg=$web.'images/logo.png';
		}
		
		if($catdata['gold_price']!=''){
			$price='<i class="fa fa-rupee"></i> '.$catdata['gold_price'];
		}
		else{
			$price='<i class="fa fa-rupee"></i> 100';
		}
		
		$datas .='<li>
					<div class="product-div">
						<div class="product-img">
							<img src="'.$proimg.'">
							<div class="hover-img animate"><img  class="animate" src="'.$proimg.'"></div>
							<a href="javascript:void(0)" class="quick-view">
								<i class="fa fa-eye"></i>
								quick view
							</a>
							
						</div>
						<div class="product-info">
							<div class="product-name1">'.$catname.'</div>
							<div class="disc">'.$catdata['product_name'].'</div>
							<div class="prodcut-price">'.$price.'</div>
							<a href="'.$web.'product-detail.php/'.seo_friendly_url($catname).'/'.seo_friendly_url($catdata['product_name']).'/'.base64_encode($catdata['product_id']).'" class="option-btn animate">select option</a>
						</div>
					</div>
				</li>';
	}
	echo $datas;
}
function view_home_slider(){
	global $link;
	global $web;
	
	$sql=mysqli_query($link,"select * from images");
	while($row=mysqli_fetch_array($sql)){
		$data .='<div class="item">

						<div class="post-box">

							<img src="'.$row['name'].'" alt="Slider" />

							<div class="entry-content">

								<span class="post-category"><a href="#" title="Travel">Lifestyle</a></span>

								<h3><a href="#" title="Great Himalaya Trails, Trekking, Hiking and Walking in Nepal">Great Himalaya Trails, Trekking, Hiking and Walking in Nepal</a></h3>

								<a href="#" title="Read More">Read More</a>

							</div>

						</div>

					</div>'; 
	} 
	echo $data;
}

function allbranddetail(){
	global $link;
	global $web;
	
	$bid = $_REQUEST['bid'];
	$bname = $_REQUEST['bname'];
	$datas ='';
	$getbranddata = mysqli_query($link,"select * from images where brandid='".$bid."' order by rank");
	while($getbrandresult = mysqli_fetch_array($getbranddata)){
		
		if($getbrandresult['position_type']=='1'){
			
			$leftimage=$getbrandresult['left_image'];
			$centerimage=$getbrandresult['center_image'];
			$rgttopimage=$getbrandresult['rgttop_image'];
			$rgtbtmimage=$getbrandresult['rgtbottom_image'];
			
			$datas.='
						<div class="col-sm-3 col-xs-12 slidshow-item">
							<img src="http://mtjworld.com/watch_images/'.$leftimage.'" alt="">
						</div>
						<div class="col-sm-6 col-xs-12 slidshow-item">
									<img src="http://mtjworld.com/watch_images/'.$centerimage.'" alt="" style="display: block;width: 100%">
						</div>
						<div class="col-sm-3 col-xs-6 slidshow-item">
							<img src="http://mtjworld.com/watch_images/'.$rgttopimage.'" alt="">
						</div>
						<div class="col-sm-3 col-xs-6 slidshow-item">
							<img src="http://mtjworld.com/watch_images/'.$rgtbtmimage.'" alt="">
						</div>
					</br>';
		}else if($getbrandresult['position_type']=='2'){
			
			$slider1='<div class="item"><img src="http://mtjworld.com/watch_images/'.$getbrandresult['name'].'" alt=""></div>';
			$description1=$getbrandresult['description'];
			
			$datas.='<div class="row blog-slidshow">
						<div class="col-sm-6 col-xs-12 slidshow-item">
							<div class="bl-slider owl-carousel">
								'.$slider1.'
							</div>
						</div>
						<div class="col-sm-6 about-text">
						'.$description1.'
						</div>
					</div>';
		}else{
			$slider2='<div class="item"><img src="http://mtjworld.com/watch_images/'.$getbrandresult['name'].'" alt=""></div>';
			$description2=$getbrandresult['description'];
			
			$datas.='<div class="row blog-slidshow">
						<div class="col-sm-6 about-text">
						'.$description2.'
						</div>
						<div class="col-sm-6 col-xs-12 slidshow-item">
							<div class="bl-slider owl-carousel">
								'.$slider2.'
							</div>
						</div>
					</div>';
		}
		
	}
	echo '<div class="blog_details_content">
			<div class="sec-title blog-title">
				<h6><span>in</span> Fashin News</h6>
				<h2>Taking pictures is savoring life intensely, every hundredth of a second.</h2>
				<a href="#">Apr 2, 2017</a>
				<a href="#">2 Comments</a>
				<a href="#">Adrian Cusnir</a>
			</div>
		</div>'.$datas.'';
		
}

function addcontact(){
	global $link;
	global $web;
		
	if(isset($_REQUEST['name'])){
		$name=$_REQUEST['name'];
	}else{
		$name='';
	}
	if(isset($_REQUEST['email'])){
		$email=$_REQUEST['email'];
	}
	else{
		$email='';
	}

	if(isset($_REQUEST['contact'])){
		$contact=$_REQUEST['contact'];
	}
	else{
		$contact='';
	}
	if(isset($_REQUEST['message'])){
		$message=$_REQUEST['message'];
	}
	else{
		$message='';
	}
	
    $sql = mysqli_query($link,"select * from contact where contact=".$contact);
	$result = mysqli_fetch_array($sql);
	
	if($result>0){

		echo "2";

	}else if($contact!=''){

		$query1 = mysqli_query($link,"INSERT INTO `contact` (`name`,`email`,`contact`,`message`) VALUES ('".$name."','".$email."','".$contact."','".$message."')");

		echo "1";
	}else{
		 echo "0";
	    	
	}
	
	
}

?>