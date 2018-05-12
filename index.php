<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shakti Feeds</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0 50px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }   
  }
.Cattle_Feed {
    background: url(https://pimg.tradeindia.com/02027982/b/1/Compound-Cattle-Feed.jpg);
      background-position: center;
          background-size: cover;
      background-repeat: no-repeat;
      height: 200px;}
.Pellets{
  background: url(https://sc02.alicdn.com/kf/HTB10_0wKXXXXXczXVXXq6xXFXXXh/Cattle-Feed-Pellets.jpg);
    background-position: center;
          background-size: cover;
    background-repeat: no-repeat;
      height: 200px;}
.cotton_seed{
  background: url(http://pramoda.co.in/wp-content/uploads/2016/07/cotton-seeds.jpg);
    background-position: center;
          background-size: cover;
    background-repeat: no-repeat;
     height: 200px; }
.oil_cake   {
  background: url(http://umiyaoilmill.com/images/event/single-5.jpg);
    background-position: center;
          background-size: cover;
    background-repeat: no-repeat;
      height: 200px;}
      .groundnut{
  background: url(https://4.imimg.com/data4/VB/WF/MY-36527925/groundnut-oil-cake-250x250.jpg);
    background-position: center;
          background-size: cover;
    background-repeat: no-repeat;
     height: 200px; }
      .coconut{
  background: url(https://sc02.alicdn.com/kf/HTB1WtFxKpXXXXXJXXXXq6xXFXXXT/coconut-oil-cake.jpg);
    background-position: center;
          background-size: cover;
    background-repeat: no-repeat;
      height: 200px;}
      .wheat{
  background: url(https://sc02.alicdn.com/kf/UT8U8ApXWXXXXagOFbXL/QUALITY-WHEAT-BRAN-FOR-ANIMAL-CONSUMPTION.jpg);
    background-position: center;
          background-size: cover;
    background-repeat: no-repeat;
      height: 200px;}
      .rice{
  background: url(https://d2azl42aua8mom.cloudfront.net/wp-content/uploads/2017/03/02171114/Quality-Rice-Bran.jpg);
    background-position: center;
          background-size: cover;
    background-repeat: no-repeat;
      height: 200px;}
      .maize{
          background: url(http://www.rawlingsbrokeragecompany.com/c0177c46-f080-42ee-b1b6-6d21e2954e0b.jpg);
          background-position: center;
    background-repeat: no-repeat;
      height: 200px;
          background-size: cover;
      }
      .chuni{
 background:url(https://fthmb.tqn.com/3moDQ0VgCITwqvgZxMElWJsJBKI=/1183x887/filters:no_upscale():fill(transparent,1)/about/460885687-56b8151a3df78c0b1364ee95.jpg);
          background-position: center;
    background-repeat: no-repeat;
          background-size: cover;
          height: 200px;
      }
      .grain{
          background: url(https://aos.iacpublishinglabs.com/question/aq/700px-394px/different-types-grains_4fdc5c692f79d253.jpg?domain=cx.aos.ask.com);
          background-position: center;
    background-repeat: no-repeat;
          background-size: cover;
            height: 200px;
      }
      .font{
          position: absolute;
          width: 100%;
          font-family: serif;
          font-size: 24px;
          font-weight: bold;
          color: red;
          top: 200px;
      }
	  .feedback{
		  content:"";
		  position:relative;
		  
		  }
		.feedback_button{
			position:fixed;
			transform:rotate(-90deg);
			right:-55px;
			top:288px;
			padding:5px 20px;
			border:1px solid #000;
			border-radius:5px;
			color:black;
			background-color:#fff;
			z-index:5;
			cursor:pointer;
			}
		.feedback_button:hover{
			background-color:#f4511e;
			color:black;
			border:1px solid #f4511e;}
		.feedback_button a{
			text-decoration:none;
			color:#000;
			}
		.feedback_button a p{
			font-size:16px;
			}
		.subscribe{
			z-index:6;}
<!--Footer start here=======================================================================-->			

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
<!--Footer ends here======================================================================= -->
<!--SLIDER STARTS HERE===================================================================== -->

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">	
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#product">PRODUCTS</a></li>
        <li><a href="#raw_material">RAW MATERIAL</a></li>       
        <!--<li><a href="#pricing">PRICING</a></li>-->
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="#Dealership">DEALERSHIP</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
	<div class="feedback">
        <div class="feedback_button">
            <a href="testimonial.php"><p>FEEDBACK</p></a>    	
        </div>
    </div>
  <h1>SHAKTI FEEDS</h1> 
  <p>We are specialized in Animal Feed</p> 
  <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn subscribe">
        <button type="submit" class="btn btn-danger" onClick="window.location.reload()">Subscribe</button>
      </div>
    </div>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      
      <h2>Benefits of feeding shakti feeds</h2><br>    
      <p>Traditional feeding has been past days now as many developed countries as well as India has benefited their dairy industries from research and scientifically formulated high quality concentrated cattle feed with organic ingredients hygienically processed under experienced experts in fully automated plants.<br>
Shakti feeds with the team of its experts has formulated the complete range of cattle feed matching international standards and quality timely tested to deliver best quality for price, maximizing benefits of our costumers with wide range of satisfied costumers.</p>
      <br><a href="#contact"><button class="btn btn-default btn-lg">Get in Touch</button></a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
   
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
    <h2>Our Mission</h2>
      <h4>To provide animals with best quality of nutritional feed and nurture health.
        </h4>
      <h2>About </h2><br>
     
      <p><strong>VISION:</strong> At Shakti Feeds, we all come to work everyday to solve the problems faced by many dairy farmers as well poultry farmers. With our fully automated and technologically updated plant (Nagpur- Maharashtra) with the team of experienced animal nutrition experts and research scholars in dairy farming industry we prepare high quality hygienic cattle feed according to the bureau of Indian standard (BIS) type 1, type 2, etc. Many don't know what to feed their animals or how much nutrition each type feeds contains. They are also in great dilemma as to where they should buy their animal feeds from, which will be better for their animals' health and performance. As population is increasing exponentially it has become important that quantity of dairy products should be increased to meet the requirements with no compromise to quality. This is where Shakti Feeds comes into role. We provide feeds full of good nutrition at economical rate. Our aim is make our consumer feel at ease, so they don't have to go to different suppliers for their animal feeds. We want to make our products available to wide variety of consumers.</p>
    </div>
  </div>
</div>



<!-- Container (Portfolio Section) -->
<div id="product" class="container-fluid text-center">
  <h2>Products</h2><br>
  <h4>What we Manufactures</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/dudh_ganga.jfif" alt="Product1" width="400" height="300">
        <p><strong>Proteina*</strong></p>
        <p>Proteina is one of the most popular brand and popular for its assured results.
Specialy formulated mesh with By pass protein, by pass fats, calcium, minerals, vitamins, and many more high-quality tested ingredients suitable for any breed of dairy animal with promising results at very economical price.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/proteina.jfif" alt="Product2" width="400" height="300">
        <p><strong>Dudh ganga</strong></p>
        <p>Dudh ganga is a perfectly blended mesh feed, formulated as per ISI standards with 20 - 22% crude protein, 3.5 - 4 % fats, 75 - 78 % TDN (total digestive nutrient) and many more tested quality ingredients to meet complete nutritional needs of any breed of dairy animal, is popular for its tested results with many satisfied costumers.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/milk plus.jpg" alt="Product3" width="400" height="300">
        <p><strong>Milk plus </strong></p>
        <p>Compound mixture of traditional feeds ingredents with rich source of protein, fats & energy. Economic price ideal for dairy animals upto 5 to 7 letters of milk, perfectly formulated mixture can also be used for routine feeding to cows,  buffalos and can be used with high grade feeds like proteina in proportion.</p>
      </div>
    </div>
  </div><br>
  
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the results!"<br><span>Anand Kumar, Nanded</span></h4>
      </div>
      <div class="item">
        <h4>"The quality and quantity of dairy product has vastly increased Thanxx to Shakti Feeds"<br><span>Mahesh Sharma,Jalgoan</span></h4>
      </div>
      <div class="item">
        <h4>"Animal Are more healtier and quantity of dairy product has been increased"<br><span>Suresh Agrawal, yavatmal</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- Container (Services Section) -->
<div id="raw_material" class="container-fluid text-center raw-material bg-grey">
  <h2>raw material</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim ">
    <div class="col-sm-4 Cattle_Feed">
      <p class="font">Compound Cattle Feed</p>
    </div>
    <div class="col-sm-4 Pellets">
      <p class="font">Cattle Feed Pellets</p>
    </div>
    <div class="col-sm-4 cotton_seed">
      <p class="font">Cotton Seeds</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4 oil_cake">
      <p class="font">Cotton Seeds Oilcake</p>
    </div>
    <div class="col-sm-4 groundnut">
      <p class="font">Groundnut Oilcake</p>
    </div>
    <div class="col-sm-4 coconut">
      <p class="font">Coconut oilcake</p>
    </div>
  </div>
    <br><br>
    <div class="row slideanim">
    <div class="col-sm-4 wheat">
      <p class="font">Wheat Bran</p>
    </div>
    <div class="col-sm-4 rice">
      <p class="font">Rice Bran</p>
    </div>
    <div class="col-sm-4 maize">
      <p class="font">Maize Grain</p>
    </div>
  </div>
    <br><br>
    <div class="row slideanim">
    <div class="col-sm-6 chuni">
      <p class="font">All Types of Chuni</p>
    </div>
    <div class="col-sm-6 grain">
      <p class="font">All Types of Grains</p>
    </div>
  </div>
</div>
<!-- Container (Pricing Section) -->
<!--<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Pricing</h2>
    <h4>Choose a payment plan that works for you</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basic</h1>
        </div>
        <div class="panel-body">
          <p><strong>20</strong> Product1</p>
          <p><strong>15</strong> Product2</p>
          <p><strong>5</strong> Product3</p>
          <p><strong>2</strong> Product4</p>
          
        </div>
        <div class="panel-footer">
          <h3>XRS</h3>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pro</h1>
        </div>
        <div class="panel-body">
          <p><strong>50</strong> Product1</p>
          <p><strong>25</strong> Product2</p>
          <p><strong>10</strong> Product3</p>
          <p><strong>5</strong> Product4</p>
          
        </div>
        <div class="panel-footer">
            <h3>XRS</h3> 
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
        </div>
        <div class="panel-body">
          <p><strong>100</strong> Product1</p>
          <p><strong>50</strong> Product2</p>
          <p><strong>25</strong> Product3</p>
          <p><strong>10</strong> Product4</p>
          
        </div>
        <div class="panel-footer">
          <h3>XRS</h3>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>    
  </div>
</div>-->

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center" id="contact_message">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you as soon as possible.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Amravati, Maharashtra</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 9422156300</p>
      <p><span class="glyphicon glyphicon-envelope"></span> info@shaktifeeds.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
    <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="mobile" name="mobile" placeholder="Contact No" type="tel" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="city" name="city" placeholder="City" type="text" >
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit" name="submit" onClick="contact()">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Add Google Maps -->
<div id="googleMap" style="height:400px;width:100%;">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3112.0224917258797!2d77.75688334182054!3d20.885868174713053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd6a5265baf0455%3A0x621b5ff8c2c0275f!2sShakti+Feeds!5e0!3m2!1sen!2sin!4v1499527969767" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
<div id="Dealership" class="container-fluid bg-grey" >
	<h2 class="text-center">Shakti Feeds also provides Dealership</h2>
    <h2 class="text-center" id="dealership_message"></h2>
    <div class="row">
    	<div class="col-sm-12 slideanim">
    
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="dname" name="dname" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="demail" name="demail" placeholder="Email" type="email" required>
        </div>
      </div>
    <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="dmobile" name="dmobile" placeholder="Contact No" type="tel" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="dcity" name="dcity" placeholder="City" type="text" >
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="dCompany" name="dcompany" placeholder="Company Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="dCompany_address" name="dcompany_address" placeholder="Company Address" type="text" >
        </div>
      </div>
      <textarea class="form-control" id="dcomments" name="dcomments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" name="submit" onClick="dealership_user()">Send</button>
        </div>
      </div>
    
    	</div>
    </div>
</div>
    
<footer>
    <div class="footer" id="footer">
        <div class="container">
        <div class="text-center container-fluid" >
        <a href="#myPage" title="To Top">
          <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        </div>
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

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
<script>
	// function for contact form==============================================================
	function contact(){
		 var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var contact = document.getElementById('mobile').value;
	//alert("hi1");
	var city = document.getElementById('city').value;
	//alert("hi2");
	var comment = document.getElementById('comments').value;
			if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); 
  }
			
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contact_message").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST", "contact.php", true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("name="+name+"&email="+email+"&contact="+contact+"&city="+city+"&comment="+comment+"");
    // Function for dealership form===========================================================
//	==========================================================================================
		}
	function dealership_user() {
		
	 var dname = document.getElementById('dname').value;
	var demail = document.getElementById('demail').value;
	var dcontact = document.getElementById('dmobile').value;
	//alert("hi1");
	var dcity = document.getElementById('dcity').value;
	//alert("hi2");
	var dcomment = document.getElementById('dcomments').value;
	//alert("hi3");
	var dcompany_name = document.getElementById('dCompany').value;
	var dcompany_address = document.getElementById('dCompany_address').value;
         if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); 
  }
			
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("dealership_message").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST", "action.php", true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("name="+dname+"&email="+demail+"&contact="+dcontact+"&city="+dcity+"&comment="+dcomment+"&dcompany_name="+dcompany_name+"&dcompany_address="+dcompany_address+"");
    
}


</script>
</body>
</html>
