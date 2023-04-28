<?php
// Create connection
$link=mysqli_connect("localhost","itficlgm_loop","ITF@@204","itficlgm_iwb");
// Check connection// Check connectionif (mysqli_connect_errno()){	echo "Failed to connect to MySQL: " . mysqli_connect_error();}

include 'Classes/PHPExcel/IOFactory.php';
date_default_timezone_set('Asia/Kolkata');


$failedcount=0;
$successcount=0;
$success='';
//excel file uploded
$file_name = $_FILES['excelfile']['name'];
$file_size =$_FILES['excelfile']['size'];
$file_tmp =$_FILES['excelfile']['tmp_name'];
$file_type=$_FILES['excelfile']['type'];
$desired_dir="excel/";
move_uploaded_file($file_tmp,"$desired_dir".$file_name); 
$inputFileName =$desired_dir.'/'.$file_name;
//  Read your Excel workbook
try {
    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($inputFileName);
} catch(Exception $e) {
    die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}
$dataArr = array();
//  Get worksheet dimensions
$sheet = $objPHPExcel->getSheet(0); 
$highestRow = $sheet->getHighestRow(); 
$highestColumn = $sheet->getHighestColumn();

//  Loop through each row of the worksheet in turn

foreach($sheet->getRowIterator() as $row) {
	 $rowIndex = $row->getRowIndex();
    $cellIterator = $row->getCellIterator();
    $cellIterator->setIterateOnlyExistingCells(true);
    // Iterate over the individual cells in the row
    foreach ($cellIterator as $cell) {
        $colIndex = PHPExcel_Cell::columnIndexFromString($cell->getColumn());
        $position = $cell->getCoordinate();
        $value=$cell->getCalculatedValue();
		$dataArr[$rowIndex][$colIndex] = $value;
    }
}
$checkdata=array();
$checkdatahead=array();
array_push($checkdatahead,$dataArr[1]);
array_push($checkdata,$dataArr[2]);


//print_r($checkdata);
$error="";
foreach($checkdata as $head)
{
	foreach($checkdatahead as $h)
	{
		$a2=$h['2'];
		$a3=$h['3'];
		$a4=$h['4'];
		$a5=$h['5'];
		$a6=$h['6'];
		$a7=$h['7'];
		$a8=$h['8'];
		$a9=$h['9'];
		$a10=$h['10'];
		$a11=$h['11'];
		$a12=$h['12'];
		$a13=$h['13'];
		$a14=$h['14'];
		$a20=$h['15'];
		$a21=$h['16'];
		$a22=$h['17'];
		$a23=$h['18'];
		$a24=$h['19'];
		$a25=$h['20'];
	
			
		if($a2=='SKU' && $a3=='Product Name' && $a4=='Category Name' && $a5=='Parent-Child' && $a6=='Parent SKU' && $a7=='Stock' && $a8=='MRP' && $a9=='saleprice' && $a10=='Color' && $a11=='Product Weight' && $a12=='height' && $a13=='width' && $a14=='Shipping Price' && $a20=='Bullet Points' && $a21=='Description' && $a22=='Relation Ship Type' && $a23=='Variation Theme' && $a24=='Delivery Handling Time' && $a25=='Legal Disclaimer')
		{
			//echo "Yes";
			unset($dataArr[1]); 
			
			foreach($dataArr as $val)
			{
				if($val['2']!="" || $val['3']!="" ) 	
					{
					$sql="select proname,mrp from iwb_product where proname= '".$val['3']."' and sku='".$val['2']."' limit 1";
					$sqlquery=mysqli_query($link,$sql);
					$record=mysqli_fetch_array($sqlquery);
					if(mysqli_num_rows($sqlquery)>0)
					{
						$error.=$record['proname']." Already Exists In Database,Ignoring It<br>";
						$failedcount++;
						
					}
					else
					{
						if($val['7']!="") 
						{
							if(!is_numeric($val['7'])) 
							{
								$error.="MRP can Only Have Numbers in it. Check Product - '".$val['3']."'<br>";
								$failedcount++;	
								
							}
						}
						else
						{
							$error.="MRP is Missing For Product - '".$val['3']."'<br>";
							$failedcount++;
							
						}
							$query = mysqli_query($link,"INSERT INTO `iwb_product` (`sku`, `proname`,`procat`, `porc`, `parentsku`, `stock`,`mrp`, `saleprice`, `color`, `proweight`, `height`, `width`, `shipprice`,`bp`,`description`,`reltype`,`vartheme`,`handling_time`,`legaldis`) VALUES ('".$val['2']."','".$val['3']."','".$val['4']."','".$val['5']."','".$val['6']."','".$val['7']."','".$val['8']."','".$val['9']."','".$val['10']."','".$val['11']."','".$val['12']."','".$val['13']."','".$val['14']."','".$val['15']."','".$val['16']."','".$val['17']."','".$val['18']."','".$val['19']."','".$val['20']."')");
							//echo "INSERT INTO `iwb_product` (`sku`, `proname`,`procat`, `porc`, `parentsku`, `stock`,`mrp`, `saleprice`, `color`, `proweight`, `height`, `width`, `shipprice`,`bp`,`description`,`reltype`,`vartheme`,`handling_time`,`legaldis`) VALUES ('".$val['2']."','".$val['3']."','".$val['4']."','".$val['5']."','".$val['6']."','".$val['7']."','".$val['8']."','".$val['9']."','".$val['10']."','".$val['11']."','".$val['12']."','".$val['13']."','".$val['14']."','".$val['15']."','".$val['16']."','".$val['17']."','".$val['18']."','".$val['19']."','".$val['20']."')";
							if($query){
								$success= " Added";
							}
							$successcount++;
							 $added++;
						
					}

				}
				else
				{
					$error.="Product Name Missing For Row A".$added."<br>";
					
					$failedcount++;
				}

			}
		}
		else{
			$error.="Field Mismatch!";
			$failedcount++;	
			
			
		}
		
	} 
}
/* echo "Success:".$success."</br>";
echo "Error:".$error."</br>";
echo "Failed count:".$failedcount."</br>";
echo "Success Count:".$successcount."</br>"; */
$response=array();

	$response['success']=$success;
	$response['error']=$error;
	$response['failedcount']=$failedcount;
	$response['successcount']=$successcount;
	/* if($successcount!='0'){
		echo $successcount;
	}
	else{
		echo $successcount;
	} */
	
	echo json_encode($response);
?>
