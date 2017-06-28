<?php

$jsonDataGames = @json_decode(file_get_contents('http://www.cartoonnetwork.com/test/backend-quiz/games.json'), true);
$jsonDataShows = @json_decode(file_get_contents('http://www.cartoonnetwork.com/test/backend-quiz/shows.json'), true);

if (isset($jsonDataGames['games']) && isset($jsonDataShows['shows'])) {
	$userData = [];
	foreach($jsonDataGames['games'] as $game) {
		$userData[$game['id']] = $game;
	}
	foreach($jsonDataShows['shows'] as $show) {
		$userData[$show['id']] = array_merge($userData[$show['id']], $show);
	}

	foreach($userData as $user) {
		echo sprintf("<div>%s<br>%s<br>%s</div>", $user['id'], $user['show'], $user['game']);
	}
} else {
	die('Source Data Error!');
}