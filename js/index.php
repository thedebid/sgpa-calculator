
<!--******************************************************** 
* Created By: Debid Magar                                *
* Email: linkwithdm[at]gmail.com                         * 
********************************************************-->
<!DOCTYPE HTML>
<html>
<head>
<title>Semester Grade Point Calculator :: Pokhara University</title>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/over-ride.css" type="text/css" media="all" />
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Semester Grade Point Calculator, SGPA Calculator, Pokhara University, Calclate SGPA, Convert GPA, Calculate SGPA, How to Convert SGPA, Sgpa Pokhara University, GPA Pokhara University, Pokhara University GPA, SGPA system" />
<!-- //for-mobile-apps -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 

<!-- //font-awesome icons -->
<!--Google Fonts-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<script src="js/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="wthree-dot">
	<h1>Semester Grade Point Calculator</h1>
	<div class="profile">
		<div class="wrap">
			<div class="wthree-grids">
				<div class="content-left">
					<div class="content-info">
						<h2>Brief About SGPA Calculator</h2>
						<div class="slider">
							<div class="callbacks_container">
								<ul class="rslides callbacks callbacks1" id="slider4">
									<li>
										<div class="w3layouts-banner-info">
											<h3>Pokhara University</h3>
											<p>This SGPA calculator is specially designed according to grading system of Pokhara University (PU), Nepal.</p>
										</div>
									</li>
									<li>
										<div class="w3layouts-banner-info">
											<h3>Pokhara University</h3>
											<p>To Calculate SGPA, you must know the credits of each subject. The credits are usually mentioned on the syllabus.</p>
										</div>
									</li>
								</ul>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="agileinfo-follow">
							<h4>Follow Me</h4>
						</div>
						<div class="agileinfo-social-grids">
							<ul>
								<a href="https://facebook.com/linkwithDM" target="_blank"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-vk"></i></a>
								<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
							</ul>
						</div>
						
					</div>
				</div>
				<div class="content-main">
					<div class="w3ls-subscribe">
					

				





<?php error_reporting(0);
	
	//Subject Enter Form
	if(!isset($_POST['semester']) AND !isset($_POST['credit']))
	{
		echo '	<div align="center" class="sub_container">
				<form action="'. $_SERVER["PHP_SELF"] .'" method="POST">
				<fieldset>
				<h4>Enter Details</h4>
				<h4>Enter Number of Subjects:</h3><input type="text" name="semester" />
				<br />
    			<input type="submit" value="Submit" />
				</fieldset>
				</form>
				</div>';
	}//Endif
	
	// Grade, Credit Form
	if(isset($_POST['semester']))
	{
		$no_of_sub = $_POST['semester'];
		echo '
				<form action="'. $_SERVER["PHP_SELF"] .'" method="POST" id="cgpa_form">
					<fieldset>
  						<h4>Enter Details</h4>
						<table border="1" width="300">
							<tr>
								<th width="50"><h4 align="left">Credits</h4></th>
        						<th width="50"><h4 align="right">Grade</h4></th>
							</tr>';
	
							for ($i = 0; $i < $no_of_sub; $i++) 
							{
    						echo ' <tr>
    							<td align="center"><select name="credit[]" form="cgpa_form" class="cgpa_form />

    							<option value="4">A</option>
											<option value="4">4</option>
											<option value="3" selected>3</option>
											<option value="2">2</option>
											<option value="1">1</option>
											</select>
											</td>
       								 <td> <select name="grade[]" form="cgpa_form" class="cgpa_form"> 

            								<option value="4">A</option>
											<option value="3.7">A-</option>
											<option value="3.3">B+</option>
											<option value="3">B</option>
											<option value="2.7">B-</option>
											<option value="2.3">C+</option>
											<option value="2">C</option>
											<option value="1.7">C-</option>
											<option value="1.3">D+</option>
											<option value="1">D</option>

        									</select>
        							</td>
       
    							</tr>';
  							}//Endfor
  					echo '</table>
							<input type="submit" value="Submit" />
					</fieldset>
				</form>
			</div>';
		}//Endif Grade, Credit Form
	
	
	//Report 
	if(isset($_POST['credit']))
	{
		//POSTting Credits from Form
		$credits = $_POST['credit'];
		//POSTting Grades from Form
		$grades = $_POST['grade'];
		//Variable Declaration
		$total = 0;
		$i = 0;
		$result = 0;
		//Display Credits
		echo '<br/>';
		foreach( $credits as $v ) 
		{
				
				$total = $total + $v;
		}
			
		//Display Grades	
		echo '<center>';
		
	
		
		//Calculating Total Points
		for( $i = 0; $i < count($credits) ; $i++ )
		{
			$result += $credits[$i] * $grades[$i];	
		}
		//Calculating CGPA
		$sgpa = $result / $total;
		
		
 		echo '<h2 style="color:#d2ead2;"><br/>Your Semester Grade Point Average : '. sprintf('%01.2f', $sgpa);
	}//Endif Results
	
	
	//End PHP
	?>

					</div>
				</div>
				<div class="clear"> </div>
			</div>
			<div class="wthree_footer_copy">
				<p>© 2018 SGPA Calculator. All rights reserved | Developed by <a href="http://davidmagar.com.np/" target="_blank">David Magar</a></p>
			</div>
		</div>
	</div>
</div>
<script src="js/responsiveslides.min.js"></script>
									<script>
										// You can also use "$(window).load(function() {"
										$(function () {
										  // Slideshow 4
										  $("#slider4").responsiveSlides({
											auto: true,
											pager:true,
											nav:false,
											speed: 400,
											namespace: "callbacks",
											before: function () {
											  $('.events').append("<li>before event fired.</li>");
											},
											after: function () {
											  $('.events').append("<li>after event fired.</li>");
											}
										  });
									
										});
									 </script>
									<!--banner Slider starts Here-->
</body>
</html>