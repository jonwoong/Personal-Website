<!----- INCLUDES ----->
<?php include('contact.php'); ?> 

<!----- HTML ----->
<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Jonathan Woong</title>
  <link href="style.css" type="text/css" rel="stylesheet">
  <meta name="description" content="Jonathan Woong">
  <meta name="author" content="Jonathan Woong">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>

<body>
  <div class="container">
  	<!----- HEADER ----->
  	<header>
  		<h1 id="name">Jonathan Woong</h1>
  	</header>

  	<!----- MAIN ----->
  	<main>
  		<!-- NAVIGATION BAR -->
  		<nav>
  			<ul>
  				<li class="nav-button"><a class="link" href="index.php?dc=about">ABOUT</a></li>
  				<li class="nav-button"><a class="link" href="index.php?dc=courses">COURSES</a></li>
  				<li class="nav-button"><a class="link" href="index.php?dc=projects">PROJECTS</a></li>
  				<li class="nav-button"><a class="link" href="index.php?dc=contact">CONTACT</a></li>
  			</ul>
  		</nav>

  		<!-- CONTENT -->
  		<section class="content">
  			<!-- DEFAULT -->
  			<div class="dynamic-content" id="default-content">DEFAULT</div>

  			<!-- ABOUT -->
  			<div class="dynamic-content" id="about">
  				<img src="me.jpg" id="floated" height="200" width="200"></img>
  				<ul>
  					<li><strong>Name:</strong> Jonathan Woong</li>
  					<li><strong>Location:</strong> Oakland, California</li>
  					<li><strong>Education:</strong> B.S. in Computer Science from UCLA</li>
  					<li><strong>Homepage:</strong> <a href="index.html">https://jonathanwoong.com</a></li>
  					<li><strong>Github:</strong> <a href="https://github.com/jonwoong">https://github.com/jonwoong</a></li> 
  				</ul>
  				<p> I created this website in order to further develop my programming skills and as proof of my participation in Twitter's <a href="https://twitter.com/_100DaysOfCode">#100DaysOfCode</a>.</p>
  			</div> <!-- about -->

  			<!-- COURSES -->
  			<div class="dynamic-content" id="courses">
  				<h2><a href="https://www.registrar.ucla.edu/Academics/Course-Descriptions/Course-Details?SA=COM+SCI&funsel=3#upper">Course Descriptions</a></h2>
  				<h3>Lower Division</h3>
  				<ul>
  					<li>CS 31 -  Introduction to Computer Science 1</li>
  					<li>CS 32 - Introduction to Computer Science 2</li>
  					<li>CS 33 - Introduction to Computer Organization</li>
  					<li>CS 35L - Software Construction Laboratory</li>
  					<li>CS M51A - Logic Design of Digital Systems</li>
  				</ul>
  				<h3>Upper Division</h3>
  				<ul>
  					<li>CS 111 - Operating Systems Principles</li>
  					<li>CS 112 - Modeling Uncertainty in Information Systems</li>
  					<li>CS M117 - Computer Networks - Physical Layer</li>
  					<li>CS 118 - Computer Network Fundamentals</li>
  					<li>CS CM121 - Introduction to Bioinformatics</li>
  					<li>CS CM122 - Algorithms in Bioinformatics and Systems Biology</li>
  					<li>CS CM124 - Computational Genetics</li>
  					<li>CS 130 - Software Engineering</li>
  					<li>CS 131 - Programming Languages</li>
  					<li>CS 143 - Database Systems</li>
  					<li>CS M151B - Computer Systems Architecture</li>
  					<li>CS M152A - Introductory Digital Design Laboratory</li>
  					<li>CS 152B - Digital Design Project Laboratory</li>
  					<li>CS 161 - Fundamentals of Artificial Intelligence</li>
  					<li>CS 174A - Introduction to Computer Graphics</li>
  					<li>CS 180 - Introduction to Algorithms and Complexity</li>
  					<li>CS 181 - Introduction to Formal Languages and Automata Theory</li>

  				</ul>
  			</div> <!-- courses -->

  			<!-- PROJECTS -->
  			<div class="dynamic-content" id="projects">
  				<div class="project-grid">
            <a class="link" href="https://github.com/jonwoong/Personal-Website" target="_blank">
  					 <div class="project">
    						<h3>Website</h3>
                <img src="website-image.png">
    						<p>Source code written (mostly) from scratch for the website you're currently viewing.</p>
              </div>
            </a>
            <a class="link" href="https://github.com/jonwoong/Web-Table-Scraper" target="_blank">
              <div class="project">
                <h3>Web Table Scraper using ScraPy</h3>
                <img src="scraper-image.png">
                <p>A simple HTML table scraping program for using ScraPy</p>
              </div>
            </a>
  				</div>
  			</div> <!-- projects -->

  			<!-- CONTACT -->
  			<div class="dynamic-content" id="contact">
  				<ul>
  					<li>Email: <a href="mailto:jonathanwoong@ucla.edu">jonathanwoong@ucla.edu</a></li>
  					<li>Phone: <a href="tel:+1-707-701-3886">(707) 701-3886</a></li>
  				</ul>
  				<form action="contact.php" method="POST">
  					<label for="first-name">First Name</label>
  					<input type="text" id="first-name" name="firstname" placeholder="Your first name..."><br>

  					<label for="last-name">Last Name</label>
  					<input type="text" id="last-name" name="lastname" placeholder="Your last name..."><br>

  					<label for="email">Email</label>
  					<input type="email" id="email" name="email" placeholder="Your email address..."><br>

  					<label for="subject">Subject</label>
  					<textarea id="subject" name="subject" placeholder="Say anything..." style="height:200px"></textarea><br>

  					<input type="submit" name="submit" value="Submit">
  				</form>
  			</div> 
  			<div class="dynamic-content" id="formsubmit">Your message was received!</div> <!-- contact -->
  		</section> <!-- content -->
  	</main>

  	<!----- FOOTER ----->
  	<footer>
  	</footer>
  </div> <!----- container ----->

  <!----- SCRIPTS ----->

  <!-- JQUERY -->
  <script src='https://code.jquery.com/jquery-3.1.0.min.js'></script> 
  <!-- JAVASCRIPT -->
  <script src="main.js"></script>

</body>
</html>