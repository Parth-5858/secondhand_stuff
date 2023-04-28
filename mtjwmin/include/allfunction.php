<?php
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
	case "add_product":
		addproduct();
		break;	
	case "view_product":
		viewproduct();
		break;
	case "delete_product":
		deleteproduct();
		break;
	case "add_brand":
		addbrand();
		break;
	case "view_brand":
		viewbrand();
		break;
	case "delete_brand":
		deletebrand();
		break;
	case "getprodname":
		getprodname();
		break;
	case "add_bezel":
		add_bezel();
		break;
	case "view_bezel":
		view_bezel();
		break;
	case "delete_bezel":
		deletebezel();
		break;
	case "add_wimage":
		add_wimage();
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
	case "delete_watch_image":
		deletewatchimage();
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
	case "add_cat_slider":
		add_cat_slider();
		break;
	case "view_cat_slider":
		view_cat_slider();
		break;
	case "delete_cat_slider":
		delete_cat_slider();
		break;
	case "check_brand_rank":
		check_brand_rank();
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

	$query = mysqli_query($link,"select * from admin where name='".$escapedName."' and password='".$escapedPW."'");

	//check if data null or not

	if(mysqli_num_rows($query) > 0){
		
		$row = mysqli_fetch_assoc($query);
		
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

function addproduct(){
	global $link;
	global $web;
	
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
	if(isset($_REQUEST['collection'])){
		$collection=$_REQUEST['collection'];
	}
	else{
		$collection='';
	}
    if(isset($_REQUEST['dpieces'])){
		$dpieces=$_REQUEST['dpieces'];
	}
	else{
		$dpieces='';
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
	
	if($_REQUEST['pid']!=''){
		$query1 = mysqli_query($link,"update `products` set `brandname`='".$brand."',`pname`='".$proname."',`price`='".$price."',`collection`='".$collection."',`description`='".$pdescription."',`diamond_pieces`='".$dpieces."',`weight`='".$weight."',`qty`='".$qty."' where pid='".$_REQUEST['pid']."'");	
	}else{
		$query1 = mysqli_query($link,"INSERT INTO `products` (`brandname`,`pname`,`price`,`collection`,`description`,`diamond_pieces`,`weight`,`qty`) VALUES ('".$brand."','".$proname."','".$price."','".$collection."','".$pdescription."','".$dpieces."','".$weight."','".$qty."')");	
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
		
		$getbrand = mysqli_query($link,"select * from brand where brandid='".$row['brandname']."'");
		$getbdata=mysqli_fetch_array($getbrand);
		
		$getbelttype = mysqli_query($link,"select * from belttype where belttype_id='".$row['belttype']."'");
		$getbeltdata=mysqli_fetch_array($getbelttype);
		
		$getstype = mysqli_query($link,"select * from settingtype where stype_id='".$row['stype']."'");
		$getsdata=mysqli_fetch_array($getstype);
		
			$data .='<tr class="odd gradeX">
						<td>'.$count.'</td>
						<td>'.$getbdata['brandname'].'</td>
						<td>'.$row['pname'].'</td>
						<td>'.$row['price'].'</td>
						<td>'.$row['description'].'</td>
						<td><a href="#" onclick="editproduct('.$row['pid'].','.$row['brandname'].',\''.$row['pname'].'\','.$row['price'].',\''.$row['description'].'\')">Edit</a></td>
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

function addbrand(){
	global $link;
	global $web;
	
	if(isset($_REQUEST['brandname'])){
		$brandname=$_REQUEST['brandname'];
	}else{
		$brandname='';
	}
	
	if(isset($_REQUEST['bdesc'])){
		$bdesc=$_REQUEST['bdesc'];
	}else{
		$bdesc='';
	}
	
	if(isset($_REQUEST['btype'])){
		$type=$_REQUEST['btype'];
	}else{
		$type='';
	}
	if(isset($_REQUEST['rank'])){
		$rank=$_REQUEST['rank'];
	}else{
		$rank='';
	}
	
	$schk=mysqli_query($link,"select * from brand where brandid='".$_REQUEST['bid']."'");
	$schkdata=mysqli_fetch_array($schk);
	
	if(mysqli_num_rows($schk)>0){
		$query = mysqli_query($link,"update brand set brandname='".$brandname."',description='".mysqli_real_escape_string($link,$bdesc)."',rank='".$rank."',type='".$type."' where brandid='".$schkdata['brandid']."'");
		
	}else{
		$query = mysqli_query($link,"INSERT into brand (brandname,description,rank,type) VALUES('".$brandname."','".mysqli_real_escape_string($link,$bdesc)."','".$rank."','".$type."')");
	}
	
	if($query){
		$id=mysqli_insert_id($link);
		if(isset($_FILES['bimage']['name']) && $_FILES['bimage']['name'] != '')
		{
			$file_count = count($_FILES['bimage']['tmp_name']);
			if($file_count > 0)
			{
				$errors= array();
				$number=rand();
				$file_name = $_FILES['bimage']['name'];
				$file_size =$_FILES['bimage']['size'];
				$file_tmp =$_FILES['bimage']['tmp_name'];
				$file_type=$_FILES['bimage']['type'];	
				$ext = pathinfo($file_name, PATHINFO_EXTENSION);
				$desired_dir="../../brand-photos/";
				$preg=array("'"," ",".");
				$file = str_replace($preg,"_",$file_name)."_".$number.".".strtolower($ext);
				// $file = $number.".".$ext;
				if(move_uploaded_file($file_tmp,$desired_dir.$file))
					{
						$bchk=mysqli_query($link,"select * from brand where brandid='".$_REQUEST['bid']."'");
						$bchkdata=mysqli_fetch_array($bchk);
						
						if(mysqli_num_rows($bchk)>0){
							$query=mysqli_query($link,"update brand set `path`='".$file."' where brandid='".$_REQUEST['bid']."'");
							
						}else{
							$query=mysqli_query($link,"update brand set `path`='".$file."' where brandid='".$id."'");
						}
						
					}
				
			}
		}
	}
	
	if($query){
		echo "1";
	}else{
		echo "0";
	}
}

function viewbrand(){
	global $link;
	global $web;
	
	$query = mysqli_query($link,"select * from brand");
	$count=1;
	$data='';

	if(mysqli_num_rows($query) > 0){
	while($row=mysqli_fetch_array($query)){
		
		if($row['type']=='1'){
			$type = 'Logo';
		}else{
			$type = 'Slider';
		}
		
		if($row['path']!=''){
			$image = '<img src=../brand-photos/'.$row['path'].' width=100 height=100>';
		}else{
			$image = '';
		}

			$data .='<tr class="odd gradeX">
						<td>'.$count.'</td>
						<td>'.$row['brandname'].'</td>
						<td>'.$type.'</td>
						<td>'.$image.'</td>
						<td>'.$row['description'].'</td>
						<td>'.$row['rank'].'</td>
						<td><a href="#" onclick="editbrand('.$row['brandid'].',\''.$row['brandname'].'\',\''.$row['description'].'\','.$row['rank'].','.$row['type'].')">Edit</a></td>
						<td><a href="#" onclick="deletebrand('.$row['brandid'].')">Delete</a></td>
					</tr>';

			$count++;		
		}
		echo $data;
	 }
	else{
		echo "0";
	}
}

function deletebrand(){
	global $link;
	global $web;

	if(isset($_REQUEST['brandid']))
	{
		$id=$_REQUEST['brandid'];
		$sql=mysqli_query($link,"delete from brand where brandid='".$id."'");
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

function add_bezel(){
	global $link;
	global $web;
		
	if(isset($_REQUEST['brand'])){
		$brand=$_REQUEST['brand'];
	}else{
		$brand='';
	}
	if(isset($_REQUEST['proname'])){
		$pn=$_REQUEST['proname'];
		$proname=implode(",",$pn);
	}else{
		$proname='0';
	}
	if(isset($_REQUEST['price'])){
		$price=$_REQUEST['price'];
	}else{
		$price='';
	}
	if(isset($_REQUEST['color'])){
		$color=$_REQUEST['color'];
	}
	else{
		$color='';
	}
    if(isset($_REQUEST['description'])){
		$pdescription=$_REQUEST['description'];
	}
	else{
		$pdescription='';
	} 
	if(isset($_REQUEST['isactive'])){
		$isactive=$_REQUEST['isactive'];
	}
	else{
		$isactive='0';
	}
	
	if($_REQUEST['bezelid']!=''){
		$query1 = mysqli_query($link,"update `bezel` set `brandid`='".$brand."',`prodid`='".$proname."',`price`='".$price."',`color`='".$color."',`description`='".$pdescription."' where bezelid='".$_REQUEST['bezelid']."'");	
	}else{
		$query1 = mysqli_query($link,"INSERT INTO `bezel` (`brandid`,`prodid`,`price`,`color`,`description`,`is_active`) VALUES ('".$brand."','".$proname."','".$price."','".$color."','".$pdescription."','".$isactive."')");	
	}
	if($query1){
		echo "1";
	}else{
		echo "0";
	}
}

function view_bezel(){
	global $link;
	global $web;
	
	$query = mysqli_query($link,"select * from bezel");

	$count=1;
	$data='';
	if(mysqli_num_rows($query) > 0){
	$productname='';

	while($row=mysqli_fetch_array($query)){
		
		$gk=array();
		$getprod = mysqli_query($link,"select * from products where pid In (".$row['prodid'].")");
		while($getproddata=mysqli_fetch_array($getprod)){
			$gk[]=$getproddata['pname'];
		}
		$productname=implode(",",$gk);
		
		$getbrand = mysqli_query($link,"select * from brand where brandid='".$row['brandid']."'");
		$getbdata=mysqli_fetch_array($getbrand);
		echo $row['prodid'];
		
			$data .='<tr class="odd gradeX">
						<td>'.$count.'</td>
						<td>'.$getbdata['brandname'].'</td>
						<td>'.$productname.'</td>
						<td>'.$row['price'].'</td>
						<td>'.$row['color'].'</td>
						<td>'.$row['description'].'</td>
						<td><a href="#" onclick="editbezel('.$row['bezelid'].','.$row['brandid'].',\''.$row['prodid'].'\','.$row['price'].',\''.$row['color'].'\',\''.$row['description'].'\')">Edit</a></td>
						<td><a href="#" onclick="deletebezel('.$row['bezelid'].')">Delete</a></td>
						
					</tr>';

			$count++;		
		}
		echo $data;
	 }
	else{
		echo "0";
	}
}

function deletebezel(){
	global $link;
	global $web;

	if(isset($_REQUEST['bezelid']))
	{
		
		$id=$_REQUEST['bezelid'];
		$sql=mysqli_query($link,"delete from bezel where bezelid='".$id."'");
		if($sql){
			echo "1";
		}
		else{
			echo "0";
		}
		
	}
} 

function add_wimage(){
	global $link;
	global $web;
		

	$branddata=mysqli_query($link,"select * from brand where brandid='".$_REQUEST['bimage']."'");
	$brandresult = mysqli_fetch_array($branddata);
	
	if(isset($_REQUEST['sside'])){
		$sside=$_REQUEST['sside'];
	}else{
		$sside='0';
	}
	
	if($_REQUEST['sside']=='2'){
		$alignment = 'left';
	}else{
		$alignment = 'right';
	}
	
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
	
		if(isset($_FILES['left']['name']))
		{
			$number=rand();
			$file_name = $_FILES['left']['name'];
			$file_size =$_FILES['left']['size'];
			$file_tmp =$_FILES['left']['tmp_name'];
			$file_type=$_FILES['left']['type'];	
			$ext = pathinfo($file_name, PATHINFO_EXTENSION);				
			$desired_dir="../../watch_images/";
			$file = str_replace(" ","-",$brandresult['brandname'])."-".$number.".".strtolower($ext);
			if(move_uploaded_file($file_tmp,$desired_dir.$file))
			{
				$query=mysqli_query($link,"INSERT into images (brandid,position_type,description,rank,left_image) VALUES('".$_REQUEST['bimage']."','".$sside."','".$description."','".$rank."','".$file."')");
				$id=mysqli_insert_id($link);
			}
		}
				
		
		if(isset($_FILES['center']['name']))
		{
			$number=rand();
			$file_name = $_FILES['center']['name'];
			$file_size =$_FILES['center']['size'];
			$file_tmp =$_FILES['center']['tmp_name'];
			$file_type=$_FILES['center']['type'];	
			$ext = pathinfo($file_name, PATHINFO_EXTENSION);				
			$desired_dir="../../watch_images/";
			$file = str_replace(" ","-",$brandresult['brandname'])."-".$number.".".strtolower($ext);
			if(move_uploaded_file($file_tmp,$desired_dir.$file))
			{				
				$query=mysqli_query($link,"update images set brandid='".$_REQUEST['bimage']."',position_type='".$sside."',description='".$description."',rank='".$rank."',center_image='".$file."' where logoid='".$id."'");
			}
		}
		
		if(isset($_FILES['rgttop']['name']))
		{
			$number=rand();
			$file_name = $_FILES['rgttop']['name'];
			$file_size =$_FILES['rgttop']['size'];
			$file_tmp =$_FILES['rgttop']['tmp_name'];
			$file_type=$_FILES['rgttop']['type'];	
			$ext = pathinfo($file_name, PATHINFO_EXTENSION);				
			$desired_dir="../../watch_images/";
			$file = str_replace(" ","-",$brandresult['brandname'])."-".$number.".".strtolower($ext);
			if(move_uploaded_file($file_tmp,$desired_dir.$file))
			{
				$query=mysqli_query($link,"update images set brandid='".$_REQUEST['bimage']."',position_type='".$sside."',description='".$description."',rank='".$rank."',rgttop_image='".$file."' where logoid='".$id."'");
			}
		}
		
		if(isset($_FILES['rgtbottom']['name']))
		{
			$number=rand();
			$file_name = $_FILES['rgtbottom']['name'];
			$file_size =$_FILES['rgtbottom']['size'];
			$file_tmp =$_FILES['rgtbottom']['tmp_name'];
			$file_type=$_FILES['rgtbottom']['type'];	
			$ext = pathinfo($file_name, PATHINFO_EXTENSION);				
			$desired_dir="../../watch_images/";
			$file = str_replace(" ","-",$brandresult['brandname'])."-".$number.".".strtolower($ext);
			if(move_uploaded_file($file_tmp,$desired_dir.$file))
			{
				$query=mysqli_query($link,"update images set brandid='".$_REQUEST['bimage']."',position_type='".$sside."',description='".$description."',rank='".$rank."',rgtbottom_image='".$file."' where logoid='".$id."'");
			}
		}
		
		if(isset($_FILES['swimg']['name']))
		{
			$file_count = count($_FILES['swimg']['tmp_name']);
			if($file_count > 0)
			{
				foreach($_FILES['swimg']['tmp_name'] as $key => $tmp_name )
				{
					$number=rand();
					$file_name = $_FILES['swimg']['name'][$key];
					$file_size =$_FILES['swimg']['size'][$key];
					$file_tmp =$_FILES['swimg']['tmp_name'][$key];
					$file_type=$_FILES['swimg']['type'][$key];	
					$ext = pathinfo($file_name, PATHINFO_EXTENSION);				
					$desired_dir="../../watch_images/";
					$preg=array("'"," ",".");
					$file = str_replace($preg,"-",$brandresult['brandname'])."-".$number.".".strtolower($ext);
					if(move_uploaded_file($file_tmp,$desired_dir.$file))
					{
						
						$query=mysqli_query($link,"INSERT into images (brandid,position_type,description,rank,name,alignment) VALUES('".$_REQUEST['bimage']."','".$sside."','".$description."','".$rank."','".$file."','".$alignment."')");
					}
				}
			}
		}	
	
	if($query){
		echo "1";
	}else{
		echo "0";
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

function deletewatchimage(){
	global $link;
	global $web;
	
	if(isset($_REQUEST['id'])){
		
		$id=$_REQUEST['id'];
		$sql=mysqli_query($link,"update images set status='0' where logoid=".$id);
		if($sql){
			echo "1";
		}
		else{
			echo "0";
		}
	}
}

function add_home_slider(){
	global $link;
	global $web;
	
	
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
				$desired_dir="../../onhome-slider/";
				$preg=array("'"," ",".");
				$file = str_replace($preg,"_",$file_name)."_".$number.".".$ext;
				// $file = $number.".".$ext;
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

function add_cat_slider(){
	global $link;
	global $web;
	
	
	if(isset($_REQUEST['ccat'])){
		$ccat=$_REQUEST['ccat'];
	}else{
		$ccat='';
	}
	
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
	
	$schk=mysqli_query($link,"select * from slider where sid='".$_REQUEST['sid']."' and type='2'");
	$schkdata=mysqli_fetch_array($schk);
	
	if(mysqli_num_rows($schk)>0){
		$query = mysqli_query($link,"update slider set content='".mysqli_real_escape_string($link,$description)."',rank='".$rank."',cid='".$ccat."' where sid='".$schkdata['sid']."' and type='2'");
		
	}else{
		$query = mysqli_query($link,"INSERT into slider (cid,content,rank,type) VALUES('".$ccat."','".mysqli_real_escape_string($link,$description)."','".$rank."','2')");
	}
	
	if($query){
		$id=mysqli_insert_id($link);
		if(isset($_FILES['catimage']['name']) && $_FILES['catimage']['name'] != '')
		{
			$file_count = count($_FILES['catimage']['tmp_name']);
			if($file_count > 0)
			{
				$errors= array();
				$number=rand();
				$file_name = $_FILES['catimage']['name'];
				$file_size =$_FILES['catimage']['size'];
				$file_tmp =$_FILES['catimage']['tmp_name'];
				$file_type=$_FILES['catimage']['type'];	
				$ext = pathinfo($file_name, PATHINFO_EXTENSION);
				$desired_dir="../../cat-slider/";
				$preg=array("'"," ",".");
				$file = str_replace($preg,"_",$file_name)."_".$number.".".$ext;
				// $file = $number.".".$ext;
				if(move_uploaded_file($file_tmp,$desired_dir.$file))
					{
						$sichk=mysqli_query($link,"select * from slider where sid='".$_REQUEST['sid']."' and type='2'");
						$sichkdata=mysqli_fetch_array($sichk);
						
						if(mysqli_num_rows($sichk)>0){
							$query = mysqli_query($link,"update slider set image='".$file."' where sid='".$_REQUEST['sid']."' and type='2'");
						}else{
							$query=mysqli_query($link,"update slider set image='".$file."' where sid='".$id."' and type='2'");
						}
					}
				
			}
		}
	}
	
	if($query){
		echo "1";
	}else{
		echo "0";
	}
}

function view_cat_slider(){
	global $link;
	global $web;
	
	$query = mysqli_query($link,"select * from slider where type='2'");

	$count=1;
	$data='';
	if(mysqli_num_rows($query) > 0){

	while($row=mysqli_fetch_array($query)){
		
		$getcatname = mysqli_query($link,"select * from categories where cid='".$row['cid']."'");
		$getcatresult = mysqli_fetch_array($getcatname);
		
		if($row['image']!=''){
			$image = '<img src=../cat-slider/'.$row['image'].' width=100 height=100>';
		}else{
			$image = '';
		}
		
			$data .='<tr class="odd gradeX">
						<td>'.$count.'</td>
						<td>'.$getcatresult['cname'].'</td>
						<td>'.$image.'</td>
						<td>'.$row['content'].'</td>
						<td>'.$row['rank'].'</td>
						<td><a href="#" onclick="editcatimage('.$row['sid'].','.$row['cid'].',\''.mysqli_real_escape_string($link,$row['content']).'\','.$row['rank'].')">Edit</a></td>
						<td><a href="#" onclick="deletecatimage('.$row['sid'].')">Delete</a></td>
						
					</tr>';

			$count++;		
		}
		echo $data;
	 }
	else{
		echo "0";
	}
}

function delete_cat_slider(){
	global $link;
	global $web;

	if(isset($_REQUEST['hid']))
	{
		
		$id=$_REQUEST['hid'];
		$sql=mysqli_query($link,"delete from slider where sid='".$id."' and type='2'");
		if($sql){
			echo "1";
		}
		else{
			echo "0";
		}
		
	}
}

function check_brand_rank(){
	global $link;
	global $web;
	
		
	$chkrank=mysqli_query($link,"select * from images where rank='".$_REQUEST['rank']."'");
	$data=mysqli_fetch_assoc($chkrank);
	
	$brandname=mysqli_query($link,"select * from brand where brandid='".$data['brandid']."'");
	$brandresult = mysqli_fetch_array($brandname);
	
	if(mysqli_num_rows($chkrank)>0){
		echo $brandresult['brandname'];
	} 
	else{
		echo "error";
	}

}

?>