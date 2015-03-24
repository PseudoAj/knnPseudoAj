<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="KNN implementation in php">
    <meta name="Ajay Krishna Teja Kavuri" content="KNN implementation in php">

    <title>knnPseudoAJ</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
		

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">



    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name">k-Nearest Neighbors Predictor</span>
                        <hr class="star-light">
                        <h4>PseudoAJ has Detected: </h4>
  <!-- PHP code to upload the file -->
  <?php
  $att=array();
  $uniqAttCount=array();
  $uniqAtt=array();
  $target = "tmp/";  
  $target = $target . basename( $_FILES['file']['name']) ;  
  $ok=1;
  $rnum=0;
  $ftype = $_FILES['file']['type']; 
  if($ftype=="text/plain")
  {
  	$ok=1;
  }
  else {
  	
  	$ok=0;
      
  }
  
  if ($ok==0)  
  {
  	  Echo "Sorry your file was not uploaded";  
  }   
  //If everything is ok we try to upload it  
  else  
  {
  	  if(move_uploaded_file($_FILES['file']['tmp_name'], $target))  
  	  {
  	  	  //echo "The file ". basename( $_FILES['file']['name']). " has been uploaded";  
	  }  
  	  else  
  	  {
  	  	  echo "Sorry, there was a problem uploading your file.";  
	  }
	}
	$fileLoc=$target;
  	$myfile = fopen($fileLoc, "r") or die("Unable to open file!");
	$token=",";
	if($myfile)
	{
		while(!feof($myfile))
		{
			$records[]=fgets($myfile,4089);
			$rnum++;
			}
			fclose($myfile);
	}
	
	
	$i=0;
	while($i<$rnum)
	{
		//echo $records[$i]."<br>";
		$curDivLine=explode($token, $records[$i]);
		$maxAtt=count($curDivLine);
		$j=0;
		while($j<$maxAtt)
		{
			$att[$i][$j]=$curDivLine[$j];
			$j++;
			
		}
		$i++;
	}
	echo "----Number of Atrributes: \t".$maxAtt."----<br>";
	echo "----Number of Records: \t".$rnum."----<br>";
	
	//print_r($att);
	?>
    <hr class="star-light">
    <ul>
    <li>Select the test sample</li>
    <li>Select the attribute to be predicted</li>
    <li>Choose the weights carefully since they will be multiplied with the similarity measure</li>
    </ul>
   
    <?php
	
	
	
	//$i=0;
	$j=0;
	
while($j<$maxAtt)
{
	$i=0;
	$k=0;
		
	
		while($i<$rnum)
	{
		$tempAtt=$att[$i][$j];
		$tempAtt=trim($tempAtt);
		if(in_array($tempAtt,$uniqAtt[$j]))
		{	
		/*
			if($j==4)
			{
				echo "----Found already exists:".$i."----<br>";
				
			}
		*/
			//echo "----Found already exists----<br>";
			//continue;
		}
		else
		{
			$uniqAtt[$j][$k]=$tempAtt;
			//echo "----Found Unique: ".$tempAtt."----<br>";
			$k++;
		}
		$i++;		
	
	}
	$uniqAttCount[$j]=$k;

	$j++;
	//echo "----Found:".$j."----<br>";

}


	
//print_r($uniqAtt);
//print_r($uniqAttCount);
$i=0;
//echo "<table>";

?>
                        <hr class="star-light">

          <form action="res.php" method="post" class="col-lg-12">
            <div class="input-group" style="width:600px;text-align:center;margin:0 auto;">
  
<?php
while($i<$maxAtt)
{
	echo "<label>Select Value for Attribute &nbsp;".($i+1).":</label><br>";
		
	echo "<select class='form-control' name='att".$i."'>";
	//echo "<td>";
	$j=0;
	while($j<$uniqAttCount[$i])
	{
		//echo "----Unique Value:".$uniqAtt[$i][$j]."----<br>";
		//echo "<tr>".$uniqAtt[$i][$j]."</tr>";
		echo "<option value='".$uniqAtt[$i][$j]."'>".$uniqAtt[$i][$j]."</option>";
		$j++;
	}
	echo "</select>";

	//echo "</td>";
	$i++;
}

$i=0;
while($i<$maxAtt)
{
	echo "<label>Enter Weight for Attribute &nbsp;".($i+1).":</label><br>";
		
	echo "<input class='form-control' name='watt".$i."' type='text'>";
	$i++;
}
echo "<label>Select Attribute to be predicted:</label><br>";
		
echo "<select class='form-control' name='patt'>";
$i=0;
while($i<$maxAtt)
{
	echo "<option value='".$i."'>".($i+1)."</option>";
	
	$i++;
}
	echo "</select>";

//echo "</table>";
?>
<!--
            <input class="form-control input-lg" name="file" type="file">
              <span class="input-group-btn"
-->
			<label>Enter K Value:</label>
			<input class='form-control' name='kVal' type='text'><br>
			<input type='hidden' name='attArr' value="<?php echo htmlentities(serialize($att)); ?>" />
            <input type='hidden' name='uniAttCount' value="<?php echo htmlentities(serialize($uniqAttCount)); ?>" />
            <input type='hidden' name='recNum' value="<?php echo $rnum; ?>" />
            
            <input type='hidden' name='maxAtt' value="<?php echo $maxAtt; ?>" />


              <button  class="btn btn-lg btn-primary" type="submit" name="submit" >Predict</button></span>

            </div>
          </form>


                        
                        <span class="skills">Developed by PseudoAJ</span>
                        
                        
              

                    </div>
                    
                </div>
            </div>
        </div>
    </header>
     <div class="row">
       
        <div class="col-lg-12 text-center v-center" style="font-size:39pt;">
          <a href="https://plus.google.com/+ajaykrishnatejakavuri"><i class="icon-google-plus"></i></a> <a href="https://www.facebook.com/ajaykrishnateja"><i class="icon-facebook"></i></a>  <a href="https://twitter.com/PseudoAj"><i class="icon-twitter"></i></a> <a href="https://github.com/PseudoAj"><i class="icon-github"></i></a> 
        </div>
      
      </div>


    <!-- Footer -->
    
    
    <footer class="text-center">
        
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Ajay Krishna Teja Kavuri &copy; <a href="http://www.pseudoaj.com">www.pseudoaj.com</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
     <!--<div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>-->

    <!-- jQuery -->
 
</body>

</html>
