
<!DOCTYPE html>
<html>
<head>
	<title>Latihan CI</title>
	<style>
	*{
		margin:0px;			
		padding:0px; 		
	}

	.color{
		color: #7bcff5;		
	}	

	#header{
		width: 100%;							
		height: 100px;							
		background-color: #262626;					

	}
	.logo {			
		color: white;
		word-spacing: 5px; 					
		font-family:monospace;		
		font-size: 30px;			
		float: left;				
		padding-top: 40px;			
		padding-right: 0px;			
		padding-bottom: 0px;		
		padding-left: 40px;			
	}

	.menubar{
		margin: 0;
		padding: 0;
		width: 100%;
		height: 32px;								
	}

	.menubar ul {
		margin: 0;
		padding: 0;					       
		line-height: 30px;		 		
	}

	.menubar li {
		margin: 0;
		padding: 0;					       
		list-style: none;				
		font-style: italic; 			
		float: right;
		position: relative;				
		border-right: 1px solid #fff;  	
		border-left: 1px solid #fff;	
		margin-top: 30px; 				
		margin-right: 10px;	   			
	}

	.menubar li li {
		border-right: 1px solid #fff;
		border-left: 1px solid #fff;
		margin-top: 0;
	}	

	.menubar ul li a{
		display: block;					
		width: 120px;
		font-weight: bold;				
		font-family: monospace;
		font-size: 15px;
		color: white;				
		text-align: center;				
		text-decoration: none;			
		text-transform: uppercase;		
		border-right: 1px solid #fff;
		border-bottom: 1px solid #fff;	
		border-top: 1px solid #fff;		
	}

	.menubar ul ul {
		position: absolute;
		visibility: hidden;				
		top: 32px;	
	}

	.menubar ul li:hover ul {
		visibility: visible;				
	}	

	.menubar ul li:hover {			
		background-color: #1b1b1b;
	}

	#content{
		width: 100%;
		height: auto;
	}

	#mainbar{
		width: 75%;
		height: 580px;
		background-image: url("Http://localhost/LatihanCI/assets/image/bg.png");	
		background-repeat: no-repeat;		
		background-size: cover; 			
		background-position: center;		
		float: left;				
	}

	#mainbar h1{
		background-color: #7bcff5;
		text-align: center;		
		font-family: monospace;			
		font-weight: bold;			
		letter-spacing: 5px;		
	}

	#mainbar p{
		text-indent: 0.5in;			
		font-family: monospace;
		text-align: justify;
		line-height: 25px;		
		padding-left: 20px;
		padding-right: 10px;
	}

	#mainbar table, th, td{
		border: 1px solid black;	
		border-collapse: collapse; 	
		border-spacing: 0;			
	}
	#mainbar table{
		width: 75%;
		caption-side: top;			
	}

	#sidebar{
		width: 25%;
		height: 580px;
		background-color: #262626;			
		float: right;
		border-top:1px;		
	}
	#sidebar h1{
		background-color: #7bcff5;
		text-align: center;		
		font-family: monospace;			
		font-weight: bold;			
		letter-spacing: 5px;
		border-left: 10px solid 	#262626;
		border-right: 10px solid 	#262626;
	}

	#sidebar img{
		width: 100px;
		height: 100px;
		padding-top: 50px;
		padding-left: 115px;
		opacity: 0.8;				
		pointer-events: none;		
	}

	#sidebar p{			
		padding-left: 40px;
		white-space: pre;			
		color: white;
		font-size: 18px;
	}


	#footer {
		background-color: #333333;
		padding: 10px;
		float: bottom;   
	}

	#footer .copy {
		color: #eaeaea;
		text-align: left;
		font-size: 15px;		
	}

</style>
</head>

<body>
	<div id="header">
		<div class="logo">R<span class="color">I</span>ZKY PROJECT</div>
		<div class="menubar">
			<ul>
				<li><a href="home/maintenance">Contact Us</a></li>
				<li><a href="home/maintenance">Tools</a></li>
				<li><a href="home/maintenance">Articles</a></li>
				<li><a href="home/maintenance">News</a></li>
				<li><a href="#">Home</a></li>
			</ul>
		</div>
	</div>

	<div id="content">
		<div id="mainbar">
			<h1>JUDUL</h1>
			<br>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<br>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<br>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<br>

		</div>
		<div id="sidebar">
		<h1>PROFILE</h1>			
			<a href="#"><img src="Http://localhost/LatihanCI/assets/image/ava.png"></a>
			<br>
			<br>
			<p>Nama 	: Rizky Kurnia Ramadhan</p>
			<p>Kelas	: TIF RP 17CID C</p>
			<br>
			<br>			
		</div>
	</div>

	<div id="footer">
		<p class="copy">&copy; Copyright 2019. By Rizky Kurnia Ramadhan</p>
	</div>

</body>
</html>