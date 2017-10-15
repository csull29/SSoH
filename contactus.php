<?php
session_start();
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
?>

<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Connect form</title>
<link rel="stylesheet" href="formstyle.css">
<link rel="stylesheet" href="another.css"/>
<style type="text/css">
@import url(http://weloveiconfonts.com/api/?family=fontawesome);
	body { width: 100%; height: 80% margin: 50px; padding: 500; font-family: 'Sue Ellen Francisco', cursive; font-size: 16px; text-align: center;}
	.text { margin-top: 30px; display: inline-block; vertical-align: center; line-height: 20px;}
	.visible {height:20px; overflow: hidden; text-align: left; display: inline-block; vertical-align: top;}
	.visible__list{list-style: none; margin:0; padding:0; -webkit-animation-name: change; -webkit-animation-duration: 12s; -webkit-animation-iteration-count: infinite; -o-animation-name: change; -o-animation-duration:12s; -o-animation-iteration-count: infinite; -moz-animation-name: change; -moz-animation-duration:12s; -moz-animation-iteration-count: infinite; animation-name: change; animation-duration:12s; animation-iteration-count: infinite;}
	.visible__list__item{ margin:0; line-height: 20px; color: orange; font-weight: bold;}
	
	.bounce p {
		width: 100%;
		height: 50px;
		display: inline-block;
		text-align: center;
		color: black;
		font: normal 30px 'Sue Ellen Francisco', cursive;
		text-rendering: auto;
		-webkit-font-smoothing: antialiased;
		}
	.bounce: before {content: "\f103";}
	 section h3 p {
		 font-size: 20px;
	 }
	.bounce p b {
	position: relative;
	font-family: 'Sue Ellen Francisco', cursive;
	font: bold;
	display: inline-block;
	text-align: center;
	color: orange;
	width: 2%;
	margin-right: .9%;
	height: 50px;
	border: transparent;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	-ms-border-radius: 50%;
	border-radius: 50%;
	animation: bounce 4s infinite;
	-webkit-animation: bounce 4s infinite;
	-o-animation:bounce 4s infinite;
	-moz-animation: bounce 4s infinite;
	}
	
	@-webkit-keyframes bounce {
	0%, 20%, 30%, 50%, 80%, 100% {-webkit-transform: translateY(0);}
	40% {-webkit-transform: translateY(-30px);}
	60% {-webkit-transform: translateY(-15px);}
	}
	@-moz-keyframes bounce {
	0%, 20%, 50%, 80%, 100% {-moz-transform: translateY(0);}
	40% {-moz-transform: translateY(-30px);}
	60% {-moz-transform: translateY(-15px);}
	}
	@-o-keyframes bounce {
	0%, 20%, 50%, 80%, 100% {-o-transform: translateY(0);}
	40% {-o-transform: translateY(-30px);}
	60% {-o-transform: translateY(-15px);}
	}
	@keyframes bounce {
	0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
	40% {transform: translateY(-30px);}
	60% {transform: translateY(-15px);}
	}

#nav {
text-align:left;
margin:0px;
}
#nav ul li {
padding:20px;
margin:0px;
}

form {
	margin: 50px;
	color:black;
	font-size: 25px;
	margin-top:0px;
}

header {
	margin-top:0px;
}

#donate{
	color:#CF000F;
	float:right;
	font-size:35px;
	margin-right:400px;
}

#donate li a{
	color:#CF000F;
	font-size:35px;
}
.wrapper{
	float:center;
	margin-right:17.5%;
	margin-bottom:0px;
	height:50px;
	margin-top:10px;
}
.wrapper h2{
	color:#000;
	font-size:35px;
	margin: 0px;
}
.second .third p{
	font-size:80%;
}
h3 .social {
	font-size:100%;
}
.slidingVertical{
	display: inline;
	text-indent: 8px;
	color:#000;
}

.slidingVertical span{
	animation: push 25s linear infinite 0s;
	-ms-animation: push 25s linear infinite 0s;
	-webkit-animation: push 25s linear infinite 0s;
	color: #F7CA18;
	opacity: 0;
	overflow: hidden;
	position: absolute;
}
.slidingVertical span:nth-child(2){
	animation-delay: 4.5s;
	-ms-animation-delay: 4.5s;
	-webkit-animation-delay: 4.5s;
}
.slidingVertical span:nth-child(3){
	animation-delay: 9s;
	-ms-animation-delay: 9s;
	-webkit-animation-delay: 9s;
}
.slidingVertical span:nth-child(4){
	animation-delay: 13.5s;
	-ms-animation-delay: 13.5s;
	-webkit-animation-delay: 13.5s;
}
.slidingVertical span:nth-child(5){
	animation-delay: 18;
	-ms-animation-delay: 18s;
	-webkit-animation-delay: 18s;
}
footer #foot p{
font-size: 100%;
}
/*Push Effect Animation*/
@-moz-keyframes push{
	0% { opacity: 0; }
	5% { opacity: 0; -moz-transform: rotate(0deg) scale(2) skew(0deg) translate(0px); }
	10% { opacity: 1; -moz-transform: translateX(0px); }
	25% { opacity: 1; -moz-transform: translateX(0px); }
	30% { opacity: 0; -moz-transform: translateX(0px); }
	80% { opacity: 0; }
	100% { opacity: 0;}
}
@-webkit-keyframes push{
	0% { opacity: 0; }
	5% { opacity: 0; -webkit-transform:rotate(0deg) scale(2) skew(0deg) translate(0px);}
	10% { opacity: 1; -webkit-transform: translateX(0px); }
	25% { opacity: 1; -webkit-transform: translateX(0px); }
	30% { opacity: 0; -webkit-transform: translateX(0px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}
@-ms-keyframes push{
	0% { opacity: 0; }
	5% { opacity: 0; -ms-transform: rotate(0deg) scale(2) skew(0deg) translate(0px); }
	10% { opacity: 1; -ms-transform: translateX(0px); }
	25% { opacity: 1; -ms-transform: translateX(0px); }
	30% { opacity: 0; -ms-transform: translateX(0px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}
.slidingVertical span strong {
color:#CF000F;
}
body .logo {
width:400px;
height:400px;
}
#link li a{
margin-left:10px;
opacity:1;
}
#don li a{
background:#000;
opacity:1;
}
footer {
	margin:0;
}
#logo {
	margin-left:30px;
}
}
</style>
</head>
	<body>
	<a href="#" id="logo"></a>
        <section class="wrapper">
        <h2 class="sentence">Sarah is
           <div class="slidingVertical">
             <span>A Mum.</span>
             <span>A Sister.</span>
             <span>A Daughter.</span>
            <span>A Patient.</span>
            <span><strong>Counting on You.</strong></span>
           </div>
         </h2>
		 </section>
		<div class="clear"></div>
		<div id="main"/>
			<div class="bounce"><i class="fa fa-angle-double-down"></i>
				<p>Sarah's Ste<strong><b>ms</strong></b> of Hope. </p>
		<div id="nav">
			<ul id="link">
				<li><a href="index.html">Home</a></li>
				<li><a href="post.php">Sarah's Journey</a></li>
				<li><a href="information.html">Multiple Sclerosis Resources</a></li>
				<li><a href="contactus.php" class ="current">Connect</a></li>
			</ul>
			<form id="search">
				<input id="theSearch" name="searchterm" type="search" placeholder="Search"/>
			</form>
			<ul id="don">
				<li><a href="https://www.gofundme.com/sarahreilly">DONATE</a></li>
			</ul>
		</div>
		
			<div class="panel">
			<?php if(!empty($errors)): ?>
			<div class="panel">
				<ul>
					<li><?php echo implode('</li> <li>', $errors); ?></li>
				</ul> 
			</div>
			<?php endif; ?>
			<form action="contactapp.php" method="post">
				<label for="name">Your Name *</label>
					<input type="text" name="name" autocomplete="off" class="form-control" placeholder="Enter Name" <?php echo isset($fields['name'])? 'value="'.$fields['name'].'"':''?><br>
				
				<label for="email">Your Email Address *</label>
					<input type="text" name="email" autocomplete="off" class="form-control" placeholder="Enter Email" <?php echo isset($fields['email'])? 'value="'.$fields['email'].'"':''?><br>
				
				<label for ="message">Your message *</label>
					<textarea name="message" rows="8" class="form-control"></textarea>
		
				<input type="radio" value="male" name="sex">Male<br>
				
				<input type="radio" value="female" name="sex">Female<br>
				
				<input type="checkbox" name="">Subscribe to Newsletter<br>

				<input type="submit" value="Send" class="form-control" class="btn btn-primary">
				<p class="muted">*means a required field </p>
			</form>
		</div>
		<footer>
		<section id= "foot">
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
		<div class="third">
			<p>©Copyright - Sarah's Stems of Hope, 2017.</p>
		</div>
	</footer>
</body>
</html>

<?php
unset($_SESSION['errors']);
unset($_SESSION['fields']);
?>