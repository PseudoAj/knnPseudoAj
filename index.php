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
                        <h4>How to use it: </h4>
                        <ul>
                        <li>Upload the data file with comma separated values below</li>
                        <li>Will automatically detect the attributes and values based on the data set, choose the testing sample</li>
                        <li>k-Nearest Neighbors algorithm will be applied and predictor gives the solution</li>
                        </ul>
                        <hr class="star-light">
                        
                        <h4>Note: </h4>
                        <ul>
                        <li>The algorithm uses a weighted similarity measure</li>
                        <li>Doesn't apply distance measure</li>
                        <li>Not recommending for continous, numerical values</li>
                        </ul>
                        <hr class="star-light">
          
            <form action="ask.php" method="post" enctype="multipart/form-data" class="col-lg-12">
            <div class="input-group" style="width:600px;text-align:center;margin:0 auto;">
            <input class="form-control input-lg" name="file" type="file">
              <span class="input-group-btn">
              <button  class="btn btn-lg btn-primary" type="submit" name="submit" >Upload</button></span>
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
