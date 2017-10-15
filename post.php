<!warning to Manuel: this page file is linked to a my SQL database (for visitor comment section) and so it can only be veiwed properly in the web using a FTP and domain that supports the code
and links to the database. it was working on Webhost000 but now that facility is expired. It allows a visitor to comment, to delete or edit comment. It gets the user comment 
into the database for storage and then pulls it from the database to display it on the website>
<?php
	date_default_timezone_set('Europe/Dublin'); //this php links to external files that have functions enabling visitor comments under the blog
	include 'bhk.ink.php';
	include 'functions.ink.php';
?>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Sarah</title>
	<link href= "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  rel="stylesheet" integrity = "sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVc0QVnN" crossorigin="anonymous">
	<link rel="stylesheets" href="blueberry.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
	<script src="jquery.blueberry.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Just+Another+Hand|Sue+Ellen+Francisco" rel="stylesheet">
	<script>
	$(window).load(function() {
		$('.blueberry').blueberry();
	});
	</script>
	
	<style type="text/css">
textarea {
	height: 150px;
	resize: none;
	border-color: #F7CA18;
	opacity:1;
	width: 100%;
	float:center; 
}
footer{
	background-color: #FF8F00;
	width:100%;
	display:inline-table;
	color: #fff;
	margin-top:5%;
}
.second {
	margin-top:0%;
}
footer p {
	font-size: 100%;
	text-align:center;
	margin: 0%;
	margin-top:0%;
}
.social {
	text-align:center;
	margin-left:-4%;
}
button {
	width: 100px;
	height: 50px;
	margin-left:46%;
	margin-top:5px;
	background-color: #282828;
	border: none;
	color: #fff;
	font-size:20px;
	text-align:center;
	font-family: 'Sue Ellen Francisco', cursive;
	cursor:pointer;
}
#nav ul {
	margin: 0px;
	padding: 0px;
	list-style: none;
	float:center;
	color:#d35400;
	vertical-align:middle;
}
ul li a:hover{
	text-decoration: underline;
}
h1{
	text-align: center;
	color:#CF000F;
	font-size:50px;
}
h3{
	text-align: center;
}
.donate li {
	font-size:120%;
	color:#c0392b;
	vertical-align:top;
	float:right;
}
.hero-image {
	background: linear-gradient(rgba(26, 26, 26, 0.9), rgba(26, 26, 26, 0.9)), url('sarah.jpg') no-repeat center center;
	height:400px;
	background-size: cover;
	background-position: center center;
	background-repeat: no-repeat;
	z-index: -10;
	opacity: .9;
}
body {
	font-family: 'Sue Ellen Francisco', cursive;
	border: 0;
	margin: 2;
	linear-gradient(rgba(26, 26, 26, 0.9), rgba(26, 26, 26, 0.9)), url('sarah.jpg') no-repeat center center;
}
header {
	width:100%;
	height:100px;
	z-index: 100;
}
#nav {
	margin:0px;
	width:100%;
	height:100px;
	float:center;
	vertical-align:middle;
	margin-top:80px;
}
#nav ul {
	list-style:none;
	display: inline-block;
	vertical-align:middle;
}
.comment-box {
	width:100%;
	padding: 20px;
	margin-bottom:4px;
	background-color: #d35400;
	opacity: .8;
	border-radius:4px;
	color: white;
	position:relative;
}
#nav ul li a{
	color: #FF8F00;				
	text-decoration: none;
	font-weight: bold;
	margin-left: 5px;
	background: #333;
	opacity: .7;
}
#nav ul li a:hover{
	background-color: #FF8F00;	
	text-decoration: underline;
	opacity: .6;
	color:#FFECB3;
}
.edit-btn {
	position: absolute;
	top:0px;
	right:110px;
}
.edit-btn button {
	width:40px;
	height:40px;
	color:#333;
	background-color:white;
	opacity: .6;
}
.delete-btn button:hover {
	opacity:1;
}
.delete-btn {
	position: absolute;
	top:0px;
	right:60px;
}
.delete-btn button {
	width:40px;
	height:40px;
	color:#333;
	background-color:white;
	opacity: .6;
}
.edit-btn button:hover {
	opacity:1;
}
ul li {
	display: inline-block;
	text-align:center;
	vertical-align: middle;
	font-size: 40px;
}
.comment-box p {
	font-size: 20px;
	line-height:14px;
	color: white;
	opacity:1;
	font-weight: normal;
}
#nav ul li:hover{
	transition:all .5s;
}
html, body {
	margin: 0;
	padding: 0;
	height: 100%;
	width: 100%;
}
.intro {
	height: 100%;
	width: 100%;
	margin: auto;
	background: linear-gradient(rgba(26, 26, 26, 0.9), rgba(26, 26, 26, 0.9)), url('sarah.jpg') no-repeat center center;
	display: table;
	top: 0;
	background-size:cover;
}
.intro .inner {
	display:table-cell;
	vertical-align: middle;
	width:100%;
	max-width: none;
}
.content {
	max-width: 100%;
	margin: 0 auto;
	text-align:center;
}
content h1 {
	font-family: 'Sue Ellen Francisco', cursive;
	color: #d35400;
	text-shadow: 0px 0px 300px #000;
	font-size: 500%;
}
.btn {
	border-radius: 9px;
	font-size: 110%;
	font-family: 'Sue Ellen Francisco', cursive;
	color: white;
	font-size: 135%;
	padding: 10px 20px;
	border: solid #d35400 3px;
	text-decoration:none;
	text-transform:uppercase;
}
.btn:hover{
	color: #fff;
	border: solid #fff 3px;
}
p {
	font-size: 20px;
	line-height: 210%;
	text-align:justify;
	margin: 10%;
	margin-top:3%;
	font-family: 'Sue Ellen Francisco', cursive;
}
h2 {
	font-size: 30px;
	font-weight:bold;
	line-height: 210%;
	text-align:justify;
	margin: 10%;
	margin-bottom:0%;
	margin-top:3%;
	font-family: 'Sue Ellen Francisco', cursive;
	white-space: nowrap;
	overflow: hidden;
	width: 35em;
	animation: keyframes 15s steps(500) infinite;
}
@keyframes keyframes{ 
  from{ width: 0px;} 
} 
}
@media screen and (max-width: 768px){
	.content h1 {
	font-size: 300%;
}

	</style>
	</head>
	<body>
	<section class="intro">
		<div class="inner">
			<div class="content">
				<h1>My Journey of Hope</h1>
				<a class = "btn" href = "https://www.gofundme.com/sarahreilly"><strong>DONATE</strong></a>
				<header>
					<div id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="post.php" class="current">Sarah's Journey</a></li>
							<li><a href="information.html">Multiple Sclerosis Resources</a></li>
							<li><a href="contactus.php">Connect</a></li>
						</ul>
					</div>
				</header>
			</div>
		</div>
	</section>
			<div class="main">
				<div class="mainblog">
				<h2>The costs are so high due to the nature of the treatment and the length of time I must spend away.</h2>
				<p>
				My story all began on the 20th May 2012 when I gave birth to a beautiful blued eyed baby boy named Josh.<br> I couldnt be any happier in my life at that moment in time... Nothing in the world could ruin this occasion for me as myself and my partner Fergal had just begun our lives into parenthood and the thought of what the future may hold for us and our family - we could not contain our excitement!!
Life was perfect! But unknowingly to me and my body, not for much longer... <br><br>

So, fast forward the clock to 9 months later, 16th February 2013. It was a Saturday afternoon, a lazy Saturday afternoon in fact with just me and my son whilst Fergal was at work. It consisted of watching cartoons, power-naps, changing nappies and bottle feeds, etc. When suddenly I began to feel ill. It just hit me like a tonne of bricks. I was just so overwhelmed with dizziness and nausea but I didnt want to panic and cause a stir as my mammy instincts still knew Josh was sleeping and I was doing my best not to disturb him. I just tried to maintain my breathing because I thought it would pass within a few seconds but it just got worse. I stood up to try and make it to the phone to call somebody who could help. But as I took my first steps, my vision went blurry as I stumbled and then BANG! I lost complete sight from my left eye... just complete darkness. I eventually made it to the phone and called for help, and within minutes I was in the back of an ambulance on my way to Our Lady of Lourdes Hospital, afraid and anxious over what had happened and what may be next to come.

That day I was transferred to the Mater Hospital in Dublin and after many tests and examination from the nurses and doctors, I was diagnosed with Optic Neuritis. I was then sent home with the hope that my eyesight would recover itself over the next 10 weeks.

<br><br>12 weeks passed by, but with only a slight improvement in my vision. So, I returned to the hospital and I was admitted, receiving a week of high dosage I.V. steroids. At this stage, I was physically and mentally drained, and still with no real answer as to what may be wrong with my body. During my stay, I had a chat with my doctor over probable causes and symptoms and although nothing could be determined for definite, he talked to me about the possibility of Multiple Sclerosis and mentioned further tests such as MRI scans and Lumbar Puncture. So, I agreed with him and after three more months of tests and scans, on 3rd September 2013, I heard the dreaded words from my doctors mouth. You have Multiple Sclerosis. But even then, I don't think I fully understood it all..

Since then, Ive gone from one medication to another but only to find out none were working for me. But I thought, hey no big deal! Because other than feeling tired I felt fine, I didnt feel like someone who had Multiple Sclerosis.
30th April 2015, I gave birth to a gorgeous girl, Emily. And life went on right up until June 2015. This is when the realisation of MS occurred to me as I relapsed post pregnancy. 

Up to now I have cried thousands of tears because of MS. It has isolated me. It has depressed me. <br><br>
So, after researching all about MS and what it may have in store for me in the future, I have decided on my next step, before it decides for me.  With the help of my family and friends, I have set up my charity as Stems of Hope. The aim for us is to raise funds and awareness of Multiple Sclerosis through various fundraising events, competitions and donations. Our current aim is to raise funds which would enable me to receive Stem Cell Transplant Treatment in Russia. The costs for this are so high due to the nature of the treatment and the length of time required to spend away.

It may not be a cure to my disease, but it sure is as close as it gets. Four weeks away from my family and kids is nothing if I can bring back a healthy mammy with lots of energy to enjoy them growing up for many more years to come. 

<br>If you have any questions please do not hesitate to ask or email us at ssully29@yahoo.ie<br><br>

Sarah Reilly
SSOH
				</p>
				</div>
			</div>
			<h3>Leave a Comment</h3>
			<?php
				echo "<form method='POST' action='".setComments($conn)."'>
			<input type='hidden' name= 'uid' value = 'Anonymous'>
			<textarea name='message'></textarea>
			<input type='hidden' name= 'date' value = '".date('Y-m-d H:i:s')."'>
			<button type='submit' name='commentSubmit'>Comment</button></form>";
			getComments($conn);
			?>
			<div class="clear"></div>
	<footer>
		<section>
			<h3>Sarah's Stems of Hope</h3>
			<p>042-93-66436</b><br>
			32 Dublin Street<br>
			Dublin City<br>
			sarahshope@hotmail.com</p>
		</section>
		<section>
			<h3>Connect With Us</h3>
				<ul class="social">
					<li><a href="#"><img src="http://www.w3newbie.com/wp-content/uploads/facebook1.png" width="40" height="40" /></a></li>
					<li><a href="#"><img src="http://www.w3newbie.com/wp-content/uploads/twitter1.png" width="40" height="40"/></a></li>
					<li><a href="#"><img src="http://www.w3newbie.com/wp-content/uploads/youtube1.png" width="40" height="40"/></a></li>
					<li><a href="#"><img src="http://www.w3newbie.com/wp-content/uploads/googleplus.png" width="40" height="40"/></a></li>
				</ul>
		</section>
	</footer>
	<footer class="second">
		<p>©Copyright - Sarah's Stems of Hope, 2017.</p>
	</footer>
	</body>
</html>