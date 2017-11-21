<?php
  if ($_GET['p'] == 11) {
     header("Location: https:finish.php");
     exit;
}

 $para_num = $_GET['t'];
 $sent_num = $_GET['n'];
 $version = $_GET['v'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Online Voice Recorder</title>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
  <link rel="stylesheet" href="telop/mediaelement/mediaelementplayer.min.css" />
  <link href="css/lib.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <style>
	  body {
	  	font-family: Meiryo;
	  }

  	.telop {
  		font-size: 32px;
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
  		font-size: 32px;
  		font-weight: bold;
  		text-shadow: -1px -1px #333, 1px -1px #333, -1px 1px #333, 1px 1px #333;
  		color: transparent;
  		left: 0;
  		top: 0;
  		position: absolute;
  	}
  </style>
<body>
  <h1>Online Voice Recorder</h1><hr class="style1">
  <div class="container">
    <?php
     $kanji = file_get_contents("telop/lyric/kanji/".$para_num."/".$para_num."_".$sent_num.".txt");
     echo ('<font size="5">'.$kanji.'</font>');
    ?>
    <div data-bind="foreach: lyrics">
      <div class="line">
        <div class="shadow" data-bind="foreach: words"><span data-bind="text: text"></span></div>
        <div class="telop" data-bind="foreach: words"><span data-bind="text: text"></span></div>
      </div>
    </div>
  </div>
  <div style="display:none;">
    <?php
      if ($version == 'slow') {
      $lyric = file_get_contents("telop/lyric/".$para_num."s/".$para_num."_".$sent_num.".txt");
      }else{
      $lyric = file_get_contents("telop/lyric/".$para_num."/".$para_num."_".$sent_num.".txt");
      }
      echo ($lyric);
      echo ('<audio id="player1" src='.$para_num . $sent_num .'.mp3" type="audio/mp3"></audio>');
    ?>
  </div>
  <hr width="80%" class="style2">
  <div id="wrap">
  <div id="contents">
      <div id="user-panel">
        <div id="controllers-wrap">
          <p id="controllers">
            <input id="start" type="button" value="Record"/>
            <input id="stop-button" type="submit" value="Stop" disabled="true" />
	    <input id="play-button" type="button" value="Play" disabled="true" />
            <span id="time">0:00 / 0:00</span>
	    <input id="submit-button" type="button" value="Next" disabled="true" />
          </p>
        </div><!--controllers-wrap-->

        <div id="waveform-container">
          <div id="waveform"></div>
          <span id="task-progress">Task: <span id="task-progress-now"></span> / <span id="task-progress-all"></span></span>
          <span id="progress">Progress: <span id="progress-now"></span> / <span id="progress-all"></span></span>
        </div><!-- waveform-container -->
      </div><!-- user-panel -->


    </div><!-- contents -->
    <footer id="footer">Copyright &copy; <span class="nowyear"></span> Minematsu & Saito Laboratory, The University of Tokyo.</footer>
  </div><!-- wrap -->

  <script src="js/recorder.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.0.57/wavesurfer.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
  <script src="main.js"></script>
  <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="//ajax.aspnetcdn.com/ajax/knockout/knockout-3.0.0.js"></script>
  <script src="telop/mediaelement/mediaelement-and-player.min.js"></script>
  <script src="telop/Scripts/lyrics.js"></script>
  <script src="telop/Scripts/main.js"></script>
  <script type="text/javascript" src="js/footerFixed.js"></script>
</body>
</html>
