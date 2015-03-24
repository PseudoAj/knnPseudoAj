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
                        <h4>PseudoAj has applied kNN and following is the result </h4>
                        <ul>
                        <?php
						$finalSim=array();
						$testArr=array();
						$sortedKey=array();
						$sortedVal=array();
						$attVal=array();
						$wattVal=array();
						$att = unserialize($_POST['attArr']);
						$maxAtt=$_POST['maxAtt'];
						//print_r($att);
						$kVal=$_POST['kVal'];
						$uniAttCount = unserialize($_POST['uniAttCount']);
						$pred=$_POST['patt'];
						$rnum=$_POST['recNum'];
						//echo $rnum."j";
						
						//Get the values from the form
						$i=0;
						while($i<$maxAtt)
						{
							$get="att".$i;
							$attVal[$i]=$_POST[$get];
							$wget="watt".$i;
							$wattVal[$i]=$_POST[$wget];
							$i++;
						}
						//print_r($uniAttCount);
						//print_r($attVal);
						//print_r($wattVal);
						
						//echo sizeof($att);
						//comparing the values and storing in the array
						$j=0;
						while($j<$rnum)
						{
						$i=0;
						$totalSim=0;
						
						while($i<$maxAtt)
						{
							if($i==$pred)
							{
								//echo "This is to be predicted";
							}
							else
							{
								//echo "Camparing:".$att[$j][$i]."&nbsp;".$attVal[$i]."<br>";
							
								if($att[$j][$i]==$attVal[$i])
								{
									$sim=1;
								}
								else
								{
									$sim=0;
								}
								//echo "$totalSim=$wattVal[$i]*$sim+$totalSim"."<br>";
								$totalSim=$wattVal[$i]*$sim+$totalSim;
								
							
							
							}
								
							$i++;
						}
						$totalSim=$totalSim/4;
						$finalSim[$j]=$totalSim;
						
						//echo "Weight:&nbsp;".$totalSim."<br>";
						
							
						$j++;
					}
					//sort the array and count the majority
					$sortedVal=$finalSim;
					arsort($sortedVal);
					//print_r($finalSim);
					//print_r($sortedVal);
					$i=0;
					while($i<$kVal)
					{
						//echo key($sortedVal);
						$sortedKey[$i]=key($sortedVal);
						next($sortedVal);
						$i++;
					}
					//print_r($sortedKey);
					$i=0;
					while($i<$kVal)
					{
						//echo key($sortedVal);
						$testClass=$att[$sortedKey[$i]][$pred];
						if(array_key_exists($testClass,$testArr))
						{
							$testArr[$testClass]=$testArr[$testClass]+1;
							//echo "Already in array<br>";
						}
						else
						{
							$testArr[$testClass]=1;
						}
						//echo $testClass."<br>";
						
						$i++;
					}
					//print_r($testArr);
					$maxs = array_keys($testArr, max($testArr));
					echo "<h1>For the Attribute &nbsp;".($pred+1)."&nbsp;Value predicted is: &nbsp;".$maxs[0]."with&nbsp;".max($testArr)."&nbsp records implying majority</h1><br>";
						?>
                        <?php
						echo"<br>Summary: &nbsp;<br>";
						echo "<br>The Actual Dataset Matrix: &nbsp;<br>";
						print_r($att);
						echo "<br>The Test Case Dataset Matrix: &nbsp;<br>";
						print_r($attVal);
						echo "<br>The Calculated Weight Matrix: &nbsp;<br>";
						print_r($finalSim);
						echo "<br>The Sorted Weight Matrix: &nbsp;<br>";
						print_r($sortedVal);
						echo "<br>The Most Weighted Records Attribute Matrix: &nbsp;<br>";
						print_r($testArr);
						echo "<br>"
						?>


                        
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
