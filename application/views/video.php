<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<style type="text/css">
	#video_player {
	display: table;
	line-height: 0;
	font-size: 0;
	background: #000;
	padding: 0px;
}
#video_player video,
	#video_player figcaption {
		display: table-cell;
		vertical-align: top;
}
#video_player figcaption {
	width: 25%;
}
#video_player figcaption a {
	display: block;
	opacity: .5;
	transition: 1s opacity;
}
#video_player figcaption a img,
	figure video {
		width: 100%;
		height: 464px;

}
#video_player figcaption a:hover {
	opacity: 1;
}
#play{
	width: 786px;
	height: 455px;
	margin-left: 20px;
}
.row{
	width: 100%;
}
#playlist ul{
	list-style: none;
}
@media (max-width: 700px) {
	#video_player video,
		#video_player figcaption {
			display: table-row;
		}
#video_player figcaption a {
	display: inline-block;
	width: 33.33%;
}
}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<figure id="video_player">
	<video controls poster="http://localhost/me/index.php/../images/developer.jpg"preload="auto" >
		<source src="http://localhost/me/index.php/../videos/21 Savage - Bank Account.mp4" type="video/mp4">
		<source src="http://localhost/me/index.php/../videos/21 Savage - Special.mp4" type="video/mp4">
	</video>
	<figcaption>
		<a href="http://localhost/me/index.php/../videos/21 Savage - Special.mp4"><img src="http://localhost/me/index.php/../images/java_logo.png" alt="Nambia Timelapse 1"></a>
		<a href="http://localhost/me/index.php/../videos/Anne-Marie - Ciao Adios [Official Video].mp4"><img src="http://localhost/me/index.php/../images/javascript.png" alt="Nambia Timelapse 2"></a>
		<a href="http://localhost/me/index.php/../videos/Cassie - Me & U.mp4"><img src="http://localhost/me/index.php/../images/html_logo.png" alt="Nambia Timelapse 3"></a>
	</figcaption>
</figure> 
<div class="row">
	<div class="col-md-9 col-sm-12 col-xs-12">
		<video id="play"controls preload="auto" >
			<source src="http://localhost/me/index.php/../videos/Cassie - Me & U.mp4" type="video/mp4">
			<source src="http://localhost/me/index.php/../videos/21 Savage - Bank Account.mp4" type="video/mp4">
	</video>
	</div>
	<div id="playlist" class="col-md-3 col-sm-12 col-xs-12">
		<ul>
			<li>
				<a href="http://localhost/me/index.php/../videos/21 Savage - Special.mp4">21 Savage</a>
			</li>
			<li>
				<a href="http://localhost/me/index.php/../videos/Anne-Marie - Ciao Adios [Official Video].mp4">Anne-Marie - Ciao Adios</a>
			</li>
			<li>
				<a href="http://localhost/me/index.php/../videos/Cassie - Me & U.mp4">Cassie - Me & U</a>
			</li>
		</ul>
	</div>
</div>
<?php 

?>
</body>
</html>
<script type="text/javascript">
	var video_player = document.getElementById("video_player"),
links = video_player.getElementsByTagName('a');
for (var i=0; i<links.length; i++) {
	links[i].onclick = handler;
}
function handler(e) {
	e.preventDefault();
	videotarget = this.getAttribute("href");
	filename = videotarget.substr(0, videotarget.lastIndexOf('.')) || videotarget;
	video = document.querySelector("#video_player video");
	//video.removeAttribute("controls");
	video.removeAttribute("poster");
	source = document.querySelectorAll("#video_player video source");
	source[0].src = filename + ".mp4";
	source[1].src = filename + ".webm";
	video.load();
	video.play();    
}
</script>
<script type="text/javascript">
$(function(){
	var player=$('#playlist');
	var links=player.child('a');
	alert('links');
});	
</script>