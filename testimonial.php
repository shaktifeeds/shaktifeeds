<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Comment Section</title>
<style>
		body{
			background-color: #f4511e;}
	.greetings{
		float:left;
		width:80%;
		margin-top:-75px;
		color:#CACACA;
		margin-left:5px;}		
	.jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .container-fluid {
      padding: 60px 50px;
  }
	label{font-size:18px;
	line-height:22px;
	padding:5px;
	margin:5px;
	text-transform:uppercase;
	display:inline-block;
	}
	.input_field, textarea{
		width:200px;
		padding:5px;
		margin:5px;
		border:1px solid black;
		border-radius:5px;
		margin-right:45px;
		box-sizing:border-box;}
	input[type=submit]{
		padding:5px;
		margin:5px;
		width:100px;
		border:1px solid black;
		border-radius:4px;
		font-size:18px;
		box-shadow:3px 3px 2px gray;
		cursor:pointer;}
	input[type=submit]:hover{
		opacity:0.8;
		box-shadow:2px 2px 1px black;
		transition:0.5s;}
	.comment_container{
		float:left;
		width:80%;
		margin-left:20px;
		height:800px;
		border:1px solid black;
		border-radius:5px;
		margin-bottom:10px;
		background:#ABABAB;
		color:#FFF;
		overflow:scroll;	
		}
	.clearfix{
		clear:both;}
	.comment_section{
		font-size:20px;
		padding:5px;
		margin-top: 10px;
		}
	.comment_section ul{
		padding:0;
		}
	.comment_section ul li{
		list-style:none;
		padding:5px;
		margin-bottom:15px;
		border:1px solid black;
		border-radius:4px;
		box-sizing:border-box;
		background:#fff;
		color:black;
		
		} 
	#comment_section_name{
		float:left;
		display:inline-block;
		width:15%;
		}
	.status{
		font-size:18px;
		margin:10px;}
	.error{
		color:white;}
	#recorded_msg{
		margin:5px;
		padding:5px;}
	.body_container{
		width:95%;
		margin:0 auto;}
.full {
    width: 100%;	
}
.gap {
	height: 30px;
	width: 100%;
	clear: both;
	display: block;
}
.footer {
	background: #EDEFF1;
	height: auto;
	padding-bottom: 30px;
	position: relative;
	width: 100%;
	border-bottom: 1px solid #CCCCCC;
	border-top: 1px solid #DDDDDD;
}
.footer p {
	margin: 0;
}
.footer img {
	max-width: 100%;
}
.footer h3 {
	border-bottom: 1px solid #BAC1C8;
	color: #54697E;
	font-size: 18px;
	font-weight: 600;
	line-height: 27px;
	padding: 40px 0 10px;
	text-transform: uppercase;
}
.footer ul {
	font-size: 13px;
	list-style-type: none;
	margin-left: 0;
	padding-left: 0;
	margin-top: 15px;
	color: #7F8C8D;
}
.footer ul li a {
	padding: 0 0 5px 0;
	display: block;
}
.footer a {
	color: #78828D
}
.supportLi h4 {
	font-size: 20px;
	font-weight: lighter;
	line-height: normal;
	margin-bottom: 0 !important;
	padding-bottom: 0;
}
.newsletter-box input#appendedInputButton {
	background: #FFFFFF;
	display: inline-block;
	float: left;
	height: 30px;
	clear: both;
	width: 100%;
}
.newsletter-box .btn {
	border: medium none;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-o-border-radius: 3px;
	-ms-border-radius: 3px;
	border-radius: 3px;
	display: inline-block;
	height: 40px;
	padding: 0;
	width: 100%;
	color: #fff;
}
.newsletter-box {
	overflow: hidden;
}
.bg-gray {
	background-image: -moz-linear-gradient(center bottom, #BBBBBB 0%, #F0F0F0 100%);
	box-shadow: 0 1px 0 #B4B3B3;
}
.social li {
	background: none repeat scroll 0 0 #B5B5B5;
	border: 2px solid #B5B5B5;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	-o-border-radius: 50%;
	-ms-border-radius: 50%;
	border-radius: 50%;
	float: left;
	height: 36px;
	line-height: 36px;
	margin: 0 8px 0 0;
	padding: 0;
	text-align: center;
	width: 36px;
	transition: all 0.5s ease 0s;
	-moz-transition: all 0.5s ease 0s;
	-webkit-transition: all 0.5s ease 0s;
	-ms-transition: all 0.5s ease 0s;
	-o-transition: all 0.5s ease 0s;
}
.social li:hover {
	transform: scale(1.15) rotate(360deg);
	-webkit-transform: scale(1.1) rotate(360deg);
	-moz-transform: scale(1.1) rotate(360deg);
	-ms-transform: scale(1.1) rotate(360deg);
	-o-transform: scale(1.1) rotate(360deg);
}
.social li a {
	color: #EDEFF1;
}
.social li:hover {
	border: 2px solid #2c3e50;
	background: #2c3e50;
}
.social li a i {
	font-size: 16px;
	margin: 0 0 0 5px;
	color: #EDEFF1 !important;
}
.footer-bottom {
	background: #E3E3E3;
	border-top: 1px solid #DDDDDD;
	padding-top: 10px;
	padding-bottom: 10px;
}
.footer-bottom p.pull-left {
	padding-top: 6px;
}
.payments {
	font-size: 1.5em;	
}
</style>
</head>

<body>
<div class="body_container">
	<div class="jumbotron text-center">
  <h1>Shakti Feeds</h1> 
  <p>We specialize in Animal Feed</p> 
  <form class="form-inline">
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
</div>
	<div class="greetings">
    	<h1>Your's Review/Suggestion is kindly appreciated</h1>
    </div>
	<div class="comment_container">
    	<div class="comment_section">
        	<?php
				$nameErr=$emailErr=$contactErr=" ";
			
			// Info of server
			$host_name = "db689283003.db.1and1.com";
		$database = "db689283003";
		$user_name = "dbo689283003";
		$password = "Shubham_56300";
		
		$conn = mysqli_connect($host_name, $user_name, $password, $database);
				
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
			
			$sql1= "SELECT name, Comment FROM users WHERE approved=1";
						
			$result1= mysqli_query($conn,$sql1);
			if(mysqli_num_rows($result1) > 0){
					while($row= mysqli_fetch_assoc($result1)){
						echo "<div class='media'>";
						echo "<div class='media-left'>";
						echo "<img src='https://inomics.com/sites/default/files/pictures/picture-95970-1460131169.png' class='media-object' style='width:60px'>";
						echo "</div>";
						echo "<div class='media-body'>";
						echo "<h4 class='media-heading'>".$row['name']."</h4>";
     					echo "<p>".$row['Comment']."</p>";
    					echo "</div>";
  						echo "</div>";
  						echo "<hr>";
						
						}
				}
				else{
					echo "Reloading";
					}
				echo "</ul>";
			 ?>
        </div>
    </div>
    <div class="clearfix"></div>
   	<div id="recorded_msg"></div>
    <div class="form" >
       <div class="row">
          <div class="col-sm-4 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          </div>
          <div class="col-sm-4 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
      
          <div class="col-sm-4 form-group">
            <input class="form-control" id="contact" name="contact" placeholder="Contact No" type="tel" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="submit" name="submit">Send</button>
          </div>
        </div>
	</div>
    
<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                    <h3> Shakti Feeds </h3>
                    <ul>
                        <li> <a href="index.php"> Home </a> </li>
                        <li> <a href="index.php#about"> About </a> </li>
                        <li> <a href="index.php#raw_material"> Raw Material </a> </li>
                        
                    </ul>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                    <h3> Shakti Feeds </h3>
                    <ul>
                        <li> <a href="index.php#product"> Product </a> </li>
                        <li> <a href="index.php#contact"> Contact </a> </li>
                        <li> <a href="index.php#Dealership"> Dealership </a> </li>
                    </ul>
                </div>
                
                <div class="col-lg-4  col-md-4 col-sm-12 col-xs-12 ">
                    <h3> Shakti Feeds </h3>
                    <ul>
                        <li>
                            <div class="input-append newsletter-box text-center">
                                <input type="text" class="full text-center" placeholder="Email ">
                                <button class="btn  bg-gray" type="submit"> Submit <i class="fa fa-long-arrow-right"> </i> </button>
                            </div>
                        </li>
                    </ul>
                    <ul class="social">
                        <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                    </ul>
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
    
    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> Site Designed By <a href="#myPage">Shakti Feeds</a>, Copyright © 2017. </p>
            <div class="pull-right">
                <ul class="nav nav-pills payments">
                	<li><i class="fa fa-cc-visa"></i></li>
                    <li><i class="fa fa-cc-mastercard"></i></li>
                    <li><i class="fa fa-cc-amex"></i></li>
                    <li><i class="fa fa-cc-paypal"></i></li>
                </ul> 
            </div>
        </div>
    </div>
    <!--/.footer-bottom--> 
</footer> 
</div>
<script>	
	function userData(){
		var name = document.getElementById("name").value;
		var email = document.getElementById("email").value;
		var contact = document.getElementById("contact").value;
		var comment = document.getElementById("comment").value;
		//document.getElementById("demo").innerHTML= x;
        if(window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("recorded_msg").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST", "userinfo_to_database.php", true);
		 xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("name="+name+"&email="+email+"&contact="+contact+"&comment="+comment+"");
    
		}
</script>
   
    
</body>
</html>