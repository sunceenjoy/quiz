<!DOCTYPE html>
<!--[if lt ie 7]><html class="ie6"><![endif]-->
<!--[if  ie 7]>  <html class="ie7"><![endif]-->
<!--[if  ie 8]>  <html class="ie8"><![endif]-->
<!--[if  ie 9]>  <html class="ie9"><![endif]-->
<!--[if (gt ie 9)| !(ie)]><!--><html class=""><!--<![endif]-->
 <head>
  <title> New Document </title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <style>

.main {
	border:1px solid green;
	overflow:hidden;
	margin: 0 auto;
	width: 70%;
}
.left {
	float:left;
	width:40%;
	box-sizing: border-box;
}
.left span{
	display:block;
	height: 40px;
	font-size:150%;
}
.right {
	border-left: 1px solid red;
	box-sizing: border-box;
	float:right;
	width:60%;
	height:160px;
}

.right ul::after {
	visibility: hidden;
	display: block;
	font-size: 0;
	content: " ";
	clear: both;
	height: 0;
}

.right ul li {
	float:left; 
	width:50%;
}
.none {
	display: none;
}
.focused {
	background:#faaabb;
}
 </style>
 <script  src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>
 </head>
<?php
$badgeArray = [
	[
		"game" => "Royal	Ruckus",
		"badges" => ["Approximate	Beatdown",	"Huge	Money",	"Taste	the	Rainbow",	"Done	&	Dungeon",	"Let's Rage"]
	],
	[
		"game" => "Cake's	Tough	Break",
		"badges" => ["Nip	It!",	"Yay	BMO!",	"One	Fast	Cat",	"Hang	In	There,	Baby",	"Piece	of	Cake",	"Super	Amadeus"]
	],
	[
		"game" => "Lemon	Break",
		"badges" => ["Lemon	Aid",	"Sweet	Kicks",	"BMO	Hope",	"Elephant	Prowess",	"Unacceptable	Escape"]
	],
	[
		"game" => "Finn	&	Bones",
		"badges" => ["Rock	Family	Tree",	"Clash	of	Bones",	"Chemistry	101",	"Mix	Master",	"Kiss	of	Death"]
	]
];
?>
 <body>
  <div class="main">
	<div class="left">
		<?php
		foreach($badgeArray as $index => $badgeInfo) {
			// Show Background for the first one only
			$style = $index == 0 ? 'class="focused"': '';
			echo "<span ".$style.">".$badgeInfo['game']."</span>";	
		}
		?>
	</div>
	<div class="right">
		<?php
		foreach($badgeArray as $index => $badgeInfo) {
			// Display the first only
			$noneStyle = $index != 0 ? 'none': '';

			echo '<div class="badge-info '.$noneStyle.'">';
			echo '  <h1>'.$badgeInfo['game'].'</h1>';
			echo '  <ul>';
			foreach($badgeInfo['badges'] as $badge) {
				echo '<li>'.$badge.'</li>';
			}
			echo '  </ul>';
			echo '</div>';
		}
		?>
	</div>
  </div>
 </body>
</html>
<script>
var leftSpans = $('.left span');
leftSpans.click(function () {
	/* Add background style */
	leftSpans.removeClass('focused');
	$(this).addClass('focused');
	var index = leftSpans.index(this) + 1;

	/* Display the corresponding list */
	$( ".right .badge-info").addClass('none');
	$( ".right .badge-info:nth-child("+ index +")").removeClass('none');

});

</script>
