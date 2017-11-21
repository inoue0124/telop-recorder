<?php
 $para_num = $_GET['p'];
 $sent_num = $_GET['s'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>JPN Recorder</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
	<link rel="stylesheet" href="mediaelement/mediaelementplayer.min.css" />
	<style>
		body {
			font-family: Meiryo;
		}

		h1 {
			font-size: 22px;
		}

		.telop {
			font-size: 20px;
			font-weight: bold;
			display: inline-block;
			position: relative;
			background: linear-gradient(to right, #000 0,#000 0px,#ffffff 0px,#ffffff 100%);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
			-webkit-text-fill-color: transparent;
		}

		.line {
			position: relative;
		}

		.shadow {
			font-size: 20px;
			font-weight: bold;
			text-shadow: -1px -1px #333, 1px -1px #333, -1px 1px #333, 1px 1px #333;
			color: transparent;
			left: 0;
			top: 0;
			position: absolute;
		}
	</style>
</head>
<body>
	<div class="container">
		<div style="margin:0 0 10px;">
			<!-- Video -->
			<!--<video id="player1" width="640" height="360">
				<source src="***.wmv" type="video/wmv" />
			</video>-->
			<!-- Audio -->
                        <?php
			echo ('<audio id="player1" src='.$para_num . $sent_num .'.mp3" type="audio/mp3"></audio>');
                        ?>
		</div>
		<button id="start" style="margin:10px 0;">Start</button>
		<div data-bind="foreach: lyrics">
			<div class="line">
				<div class="shadow" data-bind="foreach: words"><span data-bind="text: text"></span></div>
				<div class="telop" data-bind="foreach: words"><span data-bind="text: text"></span></div>
			</div>
		</div>
	</div>
	<div style="display:none;">
                <?php
                $lyric = file_get_contents("lyric/".$para_num."_".$sent_num.".txt");
		echo ($lyric);
                ?>
	</div>
	<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="//ajax.aspnetcdn.com/ajax/knockout/knockout-3.0.0.js"></script>
	<script src="mediaelement/mediaelement-and-player.min.js"></script>
	<script src="Scripts/lyrics.js"></script>
	<script src="Scripts/main.js"></script>
</body>
</html>

