<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
	<head>
		<title>Kushagra Pandey</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Kushagra Pandey - I develop. I design. I program. I code. I freak." />
		<meta name="keywords" content="kushagra,pandey" />
		<meta property="og:title" content="Kushagra Pandey" />
		<meta property="og:url" content="http://kushagra.xyz" />
		<meta property="og:image" content="http://kushagra.xyz/home.png" />
		
		<link  rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
		<link  rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css" />
		<link  rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
		<link  rel="stylesheet" type="text/css" href="assets/css/main.css" />
		
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="header">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 fhalf"><h1 id="fname">Kushagra</h1></div>
					<div class="col-sm-6 shalf"><h1 id="lname">Pandey</h1></div>
					<div class="clearfix"></div>
					<div class="col-sm-6 fhalf"><h2 id="iama"></h2></div>
					<div class="col-sm-6 shalf"><h2 class="things">web designer</h2></div>
				</div>
				<p>I've worked on various programming languages and on diverse projects. Web development, App development, and UI/UX is what I love. But where there is a code, there is a <span class="fa fa-heart"></span> !</p>
				<div class="header_arrow">
				   <a href="#arrow" class="scroll"><span> </span></a>
				</div>
			</div>
		</div>
		
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<h1 class="halfline">ABOUT ME</h1>
						
						<p>Hi! I'm Kushagra (कुशाग्र). Mathematics lover, and well, is there anything that is not mathematics? I'm passionate about technology, science &amp; philosophy (Wannabe Philomath).</p>
						
						<ul class="cv-table">
							<li>
								<div class="cv-table-left"><i class="cv-icon fa fa-user"></i>Date of birth</div>
								<div class="cv-table-right">Feb 4, 1996</div>
							</li>
							<li>
								<div class="cv-table-left"><i class="cv-icon fa fa-language"></i>Languages</div>
								<div class="cv-table-right">English, Hindi, French</div>
							</li>
							<li>
								<div class="cv-table-left"><i class="cv-icon fa fa-futbol-o"></i>Hobbies</div>
								<div class="cv-table-right">Tennis, Puzzles, Maths, Travelling</div>
							</li>
							<li>
								<div class="cv-table-left"><i class="cv-icon fa fa-external-link-square"></i>Website</div>
								<div class="cv-table-right"><a href="http://kushagra.xyz">kushagra.xyz</a>
								</div>
							</li>
						</ul>
						
						<p>I've a simple philosophy - this Universe is a mathematical equation; and for I-don't-know-which lemma, all the variables are important. We all contribute to the Universe, and the Universe gives us life.</p>
					</div>
					
					<div class="col-lg-6">
						<h1 class="halfline">TECH and things</h1>
						<h3 class="tech">
<?php 
	$tech = array("Java","C++","C","Python","Perl","Android SDK","NDK","J2ME","VB","Visual C++","TCL","Windows App","HTML","CSS","JavaScript","AJAX","PHP","JSP","SQL","XML","AngularJS","jQuery","MATLAB","Simulink","Photoshop","Robokits","Unity","JADE","GIT","Perforce","Asterisk","VoIP","Eclipse","Android Studio","IntelliJ","Netbeans","Visual Studio","Codeblocks","Bootstrap","Joomla","Wordpress","Django","Laravel","Phonegap","Titanium","Magento","OpenCV","SimpleCV","JSON","BSON","SOAP","BCrypt","libXML","OpenSSL","cURL","WinHTTP","Windows","Linux"); 
	
	for($i = count($tech) - 1; $i > 0; $i--) {
		$j = mt_rand(0,$i);
		$temp = $tech[$j];
		$tech[$j] = $tech[$i];
		$tech[$i] = $temp;
	}
	//var_dump($tech);
	for($i = count($tech) - 1; $i > 0; $i--) {
?>
							<span class="label label-default"><?php echo $tech[$i]; ?></span>
<?php } ?>							
						</h3>
					</div>
				</div>
			</div>
		</section>
	
		<section id="cd-timeline" class="cd-container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="halfline">The LIFE Till Now</h1>
					</div>
				</div>
			</div>
			
			<div class="cd-timeline-block cssanimations">
				<div class="cd-timeline-img cd-picture">
					<span class="fa fa-code"></span>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Engineer, Associate, Qualcomm India</h2>
					<p>Working as Engineer, Associate, in Location Technology team. Working on Distance Based Tracking & Continuous Tracking for Windows Phone & PC Drivers. Developed an Application to route the correct path of approximate GPS path coordinates for Automotive</p>
					<span class="cd-date">Jun'15 - Present</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block cssanimations">
				<div class="cd-timeline-img cd-location">
					<span class="fa fa-android"></span>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Free Calling Without Internet over WiFi</h2>
					<p>Developed an Android application to call without internet over a WiFi network. An internal server on the WiFi network was built using Asterisk VoIP server for routing the calls. </p>
					<span class="cd-date">Summer 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block cssanimations">
				<div class="cd-timeline-img cd-movie">
					<span class="fa fa-cogs"></span>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Various projects / freelance</h2>
					<p>Developed various websites, worked as Freelance for 
						<a href="http://couponzclub.com" target="_blank">Couponzclub</a>, 
						<a href="http://flipshope.com" target="_blank">Flipshope</a>, 
						<a href="http://ecommercejobs.in" target="_blank">EcommerceJobs</a>, 
						<a href="http://magnimopus.com">Magnimopus</a> etc. 
						Also developed chrome and mozilla plugins, many apps, and so on.
						<a href="https://chrome.google.com/webstore/detail/couponzclub/mdpmgfijlfcfagbpemkiljmleabjgapd?hl=en" target="_blank">Couponzclub Chrome Plugin</a>, 
						<a href="https://addons.mozilla.org/en-US/firefox/addon/couponzclub/?src=cb-dl-created" target="_blank">Couponzclub Mozilla Add-on</a>, 
						<a href="http://fasketoutlets.com" target="_blank">Fasket Outlets</a>, 
						<a href="http://programofreaks.com" target="_blank">Programofreaks</a>, 
						<a href="http://kesherguesthouse.com" target="_blank">Kesher Guest House</a>, 
						<a href="http://iitianopedia.com">IITianopedia</a>, A Game of Life, Online Examination Project, HTML5 Whiteboard etc.
						<br> Also contributed to open-source projects like <a href="https://github.com/phpmyadmin/" target="_blank">PhpMyAdmin</a>, won a few hackathons and built a few robots! 
					</p>
					<span class="cd-date">2012 - 2015</span>
					<a href="http://programofreaks.com" class="cd-read-more btn btn-danger" target="_blank">Visit Programofreaks for Freelance</a>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block cssanimations">
				<div class="cd-timeline-img cd-location">
					<span class="fa fa-book"></span>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Teaching Assistant, IIT (BHU), Varanasi</h2>
					<p>Taught C/C++ programming</p>
					<span class="cd-date">Jan'15 - Apr'15</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block cssanimations">
				<div class="cd-timeline-img cd-movie">
					<span class="fa fa-university"></span>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>An Integrated Intelligent Grid Control with Hybrid Multi-Agent System Information Processing</h2>
					<p>Submitted in partial fulfilment of the requirements for the award of the degree of Bachelor of Technology. Developed an Integrated Intelligent Grid Control using MACSimJX and JADE to ensure stability of the power network. </p>
					<span class="cd-date">Jul'14 - Apr'15</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block cssanimations">
				<div class="cd-timeline-img cd-location">
					<span class="fa fa-code"></span>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Internship at Qualcomm India</h2>
					<p>Worked as Intern in Location Technology team. Developed mobile driver module for Indoor Positioning System as GPS assistant for Windows Phone 8 and worked on Mobile Service Advertisement Protocol by CISCO. Used Visual Studio as IDE and worked on various encryption algorithms like AES, SHA256, MD5 etc, BSON, SOAP, TLS Server Certificates, Milenage algorithms, MSAP etc in Visual C++ using Win APIs. </p>
					<span class="cd-date">Summer 2014</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block cssanimations">
				<div class="cd-timeline-img cd-movie">
					<span class="fa fa-eye"></span>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>SmartPhone for Eye Examination</h2>
					<p>Developed an Android Application and companion hardware to detect Glaucoma, Cataract etc by Bruckners Test and other screening tests using Anterior and Posterior images of the eyes taken by a normal phone camera. Device authenticated for safety by various ophthalmologists.</p>
					<span class="cd-date">Summer 2014</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block cssanimations">
				<div class="cd-timeline-img cd-location">
					<span class="fa fa-euro"></span>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Learnt French</h2>
					<p>Bonjour messieurs et mesdemoiselles !</p>
					<span class="cd-date">Jul'12 - May'14</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block cssanimations">
				<div class="cd-timeline-img cd-location">
					<span class="fa fa-cutlery"></span>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Cofounder of Fasket</h2>
					<p>Worked as the web developer of Fasket, a company providing home delivery of the restaurant food. Have made its website, which has everything for an online order of food, complete database of restaurants etc. </p>
					<span class="cd-date">Sep'13 - Jul'14</span>
					<a href="http://fasket.com" class="cd-read-more btn btn-danger" target="_blank">Visit Fasket</a>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block cssanimations">
				<div class="cd-timeline-img cd-movie">
					<span class="fa fa-sun-o"></span>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Surya Siddhant</h2>
					<p>Developed a software in Java which calculates the planetary positions using Surya Siddhant of Indian Astrology. Extended to develop complete Panchang, Kundli and much more things using the Surya Siddhant. </p>
					<span class="cd-date">Aug'13 - May'14</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block cssanimations">
				<div class="cd-timeline-img cd-location">
					<span class="fa fa-group"></span>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Manager of AIESEC, Varanasi</h2>
					<p>Worked as the manager of CIM team of AIESEC, Varanasi chapter of AIESEC.</p>
					<span class="cd-date">Feb'13 - Sep'14</span>
					<a href="javascript:void(0)" class="cd-read-more btn btn-danger" target="_blank">Visit AIESEC Varanasi</a>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block cssanimations">
				<div class="cd-timeline-img cd-movie">
					<span class="fa fa-cutlery"></span>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Internship at Health and Nutrition Analytics Pvt. Ltd.</h2>
					<p>Made the Calendar app and secured first prize in the competition, followed by the internship. Developed web application which suggests the users their balanced diet on the basis of current diet, and companies may compare the fitness of its employees. </p>
					<span class="cd-date">Summer 2013</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block cssanimations">
				<div class="cd-timeline-img cd-location">
					<span class="fa fa-code"></span>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Ascensor.js Development</h2>
					<p>Contributed to Ascensor.js, a jquery plug-in, which aims to train and adapt content according to an elevator system. It is used by many websites across the web and forked by more than a thousand web developers. </p>
					<span class="cd-date">Spring 2013</span>
					<a href="https://github.com/kirkas/Ascensor.js/" class="cd-read-more btn btn-danger" target="_blank">View Ascensor.js <span class="fa fa-github"></span></a>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block cssanimations">
				<div class="cd-timeline-img cd-movie">
					<span class="fa fa-android"></span>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Internship at Knaptus Ltd, London</h2>
					<p>Worked as the Android App developer and developed an application for Knaptus Ltd., a London based company. The application is used as a handy to capture and save the scores of several games. </p>
					<span class="cd-date">Jan'13 - April'13</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block cssanimations">
				<div class="cd-timeline-img cd-location">
					<span class="fa fa-university"></span>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Undergrad starts</h2>
					<p>#3476 in IIT JEE. Started Engineering at <strong>Indian Institute of Technology (BHU), Varanasi</strong>. Probably the youngest to crack JEE in 2011.</p>
					<span class="cd-date">July 2011</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block cssanimations">
				<div class="cd-timeline-img cd-movie">
					<span class="fa fa-gamepad"></span>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>First Game</h2>
					<p>Developed first game in C graphics & Java Swing, followed by several games and various mathematical theorem implementation over the next three years. </p>
					<a href="javascript:void(0)" class="cd-read-more btn btn-danger">Demo & Codes</a>
					<span class="cd-date">2009</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block cssanimations">
				<div class="cd-timeline-img cd-location">
					<span class="fa fa-code"></span>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>First Code</h2>
					<p>Started Java at the age of 11</p>
					<span class="cd-date">2007</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block cssanimations">
				<div class="cd-timeline-img cd-location">
					<span class="fa fa-heart"></span>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>First Love</h2>
					<p>Fall in love with Mathematics <3</p>
					<span class="cd-date">1999</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block cssanimations">
				<div class="cd-timeline-img cd-movie">
					<span class="fa fa-heartbeat"></span>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Born</h2>
					<p>Yeah, obviously.</p>
					<span class="cd-date">Feb 04, 1996</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->
		</section> <!-- cd-timeline -->
	
	
		<section id="contact">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-xs-12 hidden-xs">
						<div class="google-map-container">
							<div id="google-map"></div>
						</div>  
					</div>
					
					<div class="col-lg-6 col-xs-12">
						<h1 class="halfline">CONTACT</h1>
						
						<p>Hi again! Want to talk? Contact me, and I'll be happily there ;)</p>
						
						<ul class="cv-table">
							<li>
								<div class="cv-table-left"><i class="cv-icon fa fa-phone-square"></i>Phone</div>
								<div class="cv-table-right"><a href="tel:+919611791177">+91 9611 791 177</a></div>
							</li>
							<li>
								<div class="cv-table-left"><i class="cv-icon fa fa-phone-square"></i>Phone</div>
								<div class="cv-table-right"><a href="tel:+919616079370">+91 9616 079 370</a></div>
							</li>
							<li>
								<div class="cv-table-left"><i class="cv-icon fa fa-envelope"></i>E-mail</div>
								<div class="cv-table-right"><a href="mailto:kushagra4296@gmail.com">kushagra4296@gmail.com</a>
								</div>
							</li>
							<li>
								<div class="cv-table-left"><i class="cv-icon fa fa-map"></i>Address</div>
								<div class="cv-table-right">A 1009 Knightsbridge, Graphite Road</div>
							</li>
							<li>
								<div class="cv-table-left"><i class="cv-icon fa fa-"></i></div>
								<div class="cv-table-right">Whitefield, Bangalore 560037</div>
							</li>
							<li>
								<div class="cv-table-left"><i class="cv-icon fa fa-comment"></i>Contact</div>
								<div class="cv-table-right">
									<a target="_blank" href="http://facebook.com/kushagra.pandey"><span class="fa fa-facebook"></span></a> 
									<a target="_blank" href="http://twitter.com/kushpf"><span class="fa fa-twitter"></span></a> 
									<a target="_blank" href="https://in.linkedin.com/pub/kushagra-pandey/4b/279/472"><span class="fa fa-linkedin"></span></a> 
									<a target="_blank" href="https://plus.google.com/u/0/+KushagraPandey4296/"><span class="fa fa-google-plus"></span></a> 
									<a target="_blank" href="http://kushagra.xyz"><span class="fa fa-globe"></span></a> 
									<a target="_blank" href="http://programofreaks.com"><span class="fa fa-globe"></span></a> 
									<a target="_blank" href="http://alkeste.com"><span class="fa fa-globe"></span></a> 
									<a target="_blank" href="http://programofreaks.com/blog"><span class="fa fa-book"></span></a> 
									<a target="_blank" href="http://github.com/kppf"><span class="fa fa-github"></span></a> 
									<a target="_blank" href="http://github.com/kppf"><span class="fa fa-bitbucket"></span></a> 
									<a target="_blank" href="http://stackoverflow.com/users/1473844/kushpf"><span class="fa fa-stackoverflow"></span></a> 
								</div>
							</li>
						</ul>
						
						<p>And making the Universe more beautiful, more creative, more technological and eventually more happy is my long term aim.</p>
					</div>
				</div>
			</div>
		</section>
	
	
		<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js" ></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js" ></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="assets/js/googlemap.js" ></script>
		<script type="text/javascript" src="assets/js/main.js" ></script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-68130450-1', 'auto');
		  ga('send', 'pageview');

		</script>
	</body>
</html>