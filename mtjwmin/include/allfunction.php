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
	case "forgot_password":
		forgot_password();
		break;
	case "add_product":
		addproduct();
		break;	
	case "view_product":
		viewproduct();
		break;
	case "delete_product":
		deleteproduct();
		break;
	case "getprodname":
		getprodname();
		break;
	case "displayimage":
		displayimage();
		break;
	case "onchangeimage":
		onchangeimage();
		break;
	case "onchangeptypeimage":
		onchangeptypeimage();
		break;
	case "add_home_slider":
		add_home_slider();
		break;
	case "view_onhome_slider":
		view_onhome_slider();
		break;
	case "delete_onhome_slider":
		delete_onhome_slider();
		break;
	
}
function fun404()
{
//header('http://mitaljewels.com/ITficial/mj/mjmin/dashboard.php');
}
function login(){
	global $link;
	global $web;
	
	$escapedName = mysqli_real_escape_string($link,$_POST['username']);
	$escapedPW = md5(mysqli_real_escape_string($link,$_POST['password']));
	//query execute

	$query = mysqli_query($link,"select * from admin where email='".$escapedName."' and password='".$escapedPW."'");

	//check if data null or not

	if(mysqli_num_rows($query) > 0){
		
		$row = mysqli_fetch_assoc($query);
		// print_r($row);
		// exit();
		$_SESSION['mjwadmin_id']=$row['id'];
		$_SESSION['mjwadmin_name']=$row['name'];
		
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
function forgot_password(){
	$email=$_REQUEST['email'];
	$sql=mysqli_query($link,"select * from admin where email='".$email."'");
	$maildata=mysqli_fetch_array($mailsql);
        if($maildata){
			// $mailsql=mysqli_query($link,"select * from users where userid='".$id."'");
			// $maildata=mysqli_fetch_array($mailsql);
			
			$to = "parthkukadiya33@gmail.com";
			$subject = "Password Recovery";
			 
			$message = "Recover your Password";
			 
			$header = "From:dipaldonga28@gmail.com \r\n";
			$header .= "Cc:dipaldonga28@gmail.com \r\n";
			$header .= "MIME-Version: 1.0\r\n";
			$header .= "Content-type: text/html\r\n";
			 
			$retval = mail ($to,$subject,$message,$header);
         
				if( $retval == true ) {
					echo "Message sent successfully...";
				}else {
					echo "Message could not be sent...";
				}
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
	
	
	$schk=mysqli_query($link,"select * from products where pid='".$_REQUEST['pid']."'");
	$schkdata=mysqli_fetch_array($schk);
	/*print_r("select * from products where pid='".$_REQUEST['pid']."'");
	exit();*/
	if(mysqli_num_rows($schkdata)>0){
		$query1 = mysqli_query($link,"update `products` set `brandname`='".$brand."',`pname`='".$proname."',`price`='".$price."',`stype`='".$stype."',`description`='".$pdescription."',`weight`='".$weight."' where pid='".$_REQUEST['pid']."'");	
		
	}else{
		$query1 = mysqli_query($link,"INSERT INTO `products` (`brandname`,`pname`,`price`,`stype`,`description`,`weight`) VALUES ('".$brand."','".$proname."','".$price."','".$stype."','".$pdescription."','".$weight."')");
	}
	
	if($query1){
		$id=mysqli_insert_id($link);
		if(isset($_FILES['homeimage']['name']) && $_FILES['homeimage']['name'] != '')
		{
			$file_count = count($_FILES['homeimage']['tmp_name']);
			if($file_count > 0)
			{
				$errors= array();
				$number=rand();
				$file_name = $_FILES['homeimage']['name'];
				$file_size =$_FILES['homeimage']['size'];
				$file_tmp =$_FILES['homeimage']['tmp_name'];
				$file_type=$_FILES['homeimage']['type'];	
				$ext = pathinfo($file_name, PATHINFO_EXTENSION);
				$desired_dir="../../brand-photos/";
				$preg=array("'"," ",".");
				$file = str_replace($preg,"_",$file_name)."_".$number.".".strtolower($ext);
				// $file = $number.".".$ext;
				if(move_uploaded_file($file_tmp,$desired_dir.$file))
				{
					$bchk=mysqli_query($link,"select * from products where pid='".$_REQUEST['pid']."'");
					$bchkdata=mysqli_fetch_array($bchk);
					print_r("select * from products where pid='".$_REQUEST['pid']."'");

						
					if(mysqli_num_rows($bchk)>0){
						$query=mysqli_query($link,"update products set `path`='".$file."' where pid='".$_REQUEST['pid']."'");
						
					}else{
						$query=mysqli_query($link,"update products set `path`='".$file."' where pid='".$id."'");
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

function viewproduct(){
	global $link;
	global $web;
	
	$query = mysqli_query($link,"select * from products");

	$count=1;
	$data='';
	if(mysqli_num_rows($query) > 0){

	while($row=mysqli_fetch_array($query)){
		
		/*$getbrand = mysqli_query($link,"select * from products where brandid='".$row['brandname']."'");
		$getbdata=mysqli_fetch_array($getbrand);*/
		
		/*$getbelttype = mysqli_query($link,"select * from belttype where belttype_id='".$row['belttype']."'");
		$getbeltdata=mysqli_fetch_array($getbelttype);*/
		
		/*$getstype = mysqli_query($link,"select * from settingtype where stype_id='".$row['stype']."'");
		$getsdata=mysqli_fetch_array($getstype);*/

		if($row['path']!=''){
			$image = '<img src=../brand-photos/'.$row['path'].' width=100 height=100>';
		}else{
			$image = '';
		}

		if($row['stype']!=''){
			$stype ='<option value="' . $row['stype'] . '">' . $row['stype'] . '</option>';
		}else{
				
			$stype = '';
		}
			$data .='<tr class="odd gradeX">
						<td>'.$count.'</td>
						<td>'.$row['brandname'].'</td>
						<td>'.$row['stype'].'</td>
						<td>'.$row['pname'].'</td>
						<td>'.$row['price'].'</td>
						<td>'.$row['weight'].'</td>
						<td>'.$row['description'].'</td>
						<td>'.$image.'</td>
						<td><a href="#" onclick="editproduct('.$row['pid'].',\''.$row['brandname'].'\',\''.$row['stype'].'\',\''.$row['pname'].'\','.$row['price'].','.$row['weight'].',\''.$row['description'].'\')">Edit</a></td>
						<td><a href="#" onclick="deleteproduct('.$row['pid'].')">Delete</a></td>
						
					</tr>';

			$count++;		
		}
		echo $data;
	 }
	else{
		echo "0";
	}

}

function deleteproduct(){
	global $link;
	global $web;

	if(isset($_REQUEST['pid']))
	{
		
		$id=$_REQUEST['pid'];
		$sql=mysqli_query($link,"delete from products where pid='".$id."'");
		if($sql){
			echo "1";
		}
		else{
			echo "0";
		}
		
	}
}
function getprodname(){
	global $link;
	global $web;
	
	if(isset($_REQUEST['bid']))
	{
		$bid=$_REQUEST['bid'];

			$result='';
			// echo "select * from products where brandname='".$bid."'";
			$prodsql=mysqli_query($link,"select * from products where brandname='".$bid."'");
			while($getprod=mysqli_fetch_assoc($prodsql))
			{
				$getbrandname = mysqli_query($link,"select * from brand where brandname='".$getprod['brandname']."'");
				$getbranddate = mysqli_fetch_array($getbrandname);
				
				$result .='<option value="' . $getprod['pid'] . '">' . $getprod['pname'] . '</option>';
			}
			echo $result;
	}
}



function displayimage(){
	global $link;
	global $web;
	global $web1;
			
	$imgsql=mysqli_query($link,"select * from images where brandid='".$_REQUEST['bimage']."' and status='1'");
	while($imgresult=mysqli_fetch_array($imgsql)){
		
			if(mysqli_num_rows($imgsql) > 0){
				$img="<a href='' class='deleteswimage' data-id='".$imgresult['logoid']."' id='".$imgresult['logoid']."'>
				<img src=".$web1."watch_images/".$imgresult['name']." height=60px width=60px></a>";
			}else{
				$img="";
			}
			echo $img;
		}
}
 
function onchangeimage(){
	global $link;
	global $web;
	global $web1;
			
	$imgsql1=mysqli_query($link,"select * from images where brandid='".$_REQUEST['bimage']."' and status='1'");
	while($imgresult1=mysqli_fetch_array($imgsql1)){
		
			if(mysqli_num_rows($imgsql1) > 0){
				$simg .="<a href='' class='deleteswimage' data-id='".$imgresult1['logoid']."' id='".$imgresult1['logoid']."'>
				<img src=".$web1."watch_images/".$imgresult1['name']." height=60px width=60px></a>";
			}else{
				$simg="";
			}
	}
	
	echo $simg;
} 

function onchangeptypeimage(){
	global $link;
	global $web;
	global $web1;
	
	$sside=$_REQUEST['sside'];
		
	$imgsql1=mysqli_query($link,"select * from images where position_type='".$sside."' and brandid='".$_REQUEST['bimage']."' and status='1'");
	while($imgresult1=mysqli_fetch_array($imgsql1)){
		
			if(mysqli_num_rows($imgsql1) > 0){
				$simg .="<a href='' class='deleteswimage' data-id='".$imgresult1['logoid']."' id='".$imgresult1['logoid']."'>
				<img src=".$web1."watch_images/".$imgresult1['name']." height=60px width=60px></a>";
			}else{
				$simg="";
			}
	}
	
	echo $simg;
}


function add_home_slider(){
	global $link;
	global $web;
	global $web1;
	
	if(isset($_REQUEST['description'])){
		$description=$_REQUEST['description'];
	}else{
		$description='';
	}
	
	if(isset($_REQUEST['rank'])){
		$rank=$_REQUEST['rank'];
	}else{
		$rank='';
	}
	
	$schk=mysqli_query($link,"select * from slider where sid='".$_REQUEST['sid']."'");
	$schkdata=mysqli_fetch_array($schk);
	
	if(mysqli_num_rows($schk)>0){
		$query1 = mysqli_query($link,"update slider set content='".mysqli_real_escape_string($link,$description)."',rank='".$rank."' where sid='".$schkdata['sid']."'");
		
	
	}else{
		$query1 = mysqli_query($link,"INSERT into slider (content,rank) VALUES('".mysqli_real_escape_string($link,$description)."','".$rank."')");
	
	}
	
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
				$desired_dir="../../onhome-slider/";
				print_r($desired_dir);
				$ext = pathinfo($file_name, PATHINFO_EXTENSION);
				$preg=array("'"," ",".");
				$file = str_replace($preg,"_",$file_name)."_".$number.".".$ext;
				//$file = $number.".".$ext;
				if(move_uploaded_file($file_tmp,$desired_dir.$file))
					{
						$sichk=mysqli_query($link,"select * from slider where sid='".$_REQUEST['sid']."'");
						$sichkdata=mysqli_fetch_array($sichk);
						
						if(mysqli_num_rows($sichk)>0){
							$query = mysqli_query($link,"update slider set image='".$file."' where sid='".$_REQUEST['sid']."'");
						}else{
							$query=mysqli_query($link,"update slider set image='".$file."' where sid='".$id."'");
						}
					}
				
			}
		}
	}
	
	if($query && $query1){
		echo "1";
	}else{
		echo "0";
	}
}

function view_onhome_slider(){
	global $link;
	global $web;
	
	$query = mysqli_query($link,"select * from slider where type='1'");
 
	$count=1;
	$data='';
	if(mysqli_num_rows($query) > 0){

	while($row=mysqli_fetch_array($query)){
		
		if($row['image']!=''){
			$image = '<img src=../onhome-slider/'.$row['image'].' width=100 height=100>';
		}else{
			$image = '';
		}
		
			$data .='<tr class="odd gradeX">
						<td>'.$count.'</td>
						<td>'.$image.'</td>
						<td>'.$row['content'].'</td>
						<td>'.$row['rank'].'</td>
						<td><a href="#" onclick="editimage('.$row['sid'].',\''.$row['content'].'\','.$row['rank'].')">Edit</a></td>
						<td><a href="#" onclick="deleteimage('.$row['sid'].')">Delete</a></td>
						
					</tr>';

			$count++;		
		}
		echo $data;
	 }
	else{
		echo "0";
	}
}

function delete_onhome_slider(){
	global $link;
	global $web;

	if(isset($_REQUEST['hid']))
	{
		
		$id=$_REQUEST['hid'];
		$sql=mysqli_query($link,"delete from slider where sid='".$id."'");
		if($sql){
			echo "1";
		}
		else{
			echo "0";
		}
		
	}
}


?>
