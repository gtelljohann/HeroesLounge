<?php

Route::group(['prefix' => 'api/v1'], function () {
    Route::resource('seasons', 'Rikki\Heroeslounge\Http\Season');
    Route::get('seasonsAll','Rikki\Heroeslounge\Http\Season@indexAll');
    Route::get('seasons/{id}/divisions', 'Rikki\Heroeslounge\Http\Season@divisions');
    Route::get('seasons/{id}/playoffs', 'Rikki\Heroeslounge\Http\Season@playoffs');
    Route::resource('playoffs', 'Rikki\Heroeslounge\Http\Playoff');
    Route::get('playoffsAll','Rikki\Heroeslounge\Http\Playoff@indexAll');
    Route::get('playoffs/{id}/divisions', 'Rikki\Heroeslounge\Http\Playoff@divisions');
    Route::get('playoffs/{id}/matches', 'Rikki\Heroeslounge\Http\Playoff@matches');
    Route::get('seasons/{id}/teams', 'Rikki\Heroeslounge\Http\Season@teams');
    Route::get('divisions/{id}/teams', 'Rikki\Heroeslounge\Http\Division@teams');
    Route::resource('divisions', 'Rikki\Heroeslounge\Http\Division');
    Route::get('divisionsAll','Rikki\Heroeslounge\Http\Division@indexAll');
    Route::get('maps', 'Rikki\Heroeslounge\Http\Map@getEnabled');
    Route::get('logos', 'Rikki\Heroeslounge\Http\Team@logos');
    Route::get('teams/{team}/logo', 'Rikki\Heroeslounge\Http\Team@logo');
    Route::get('teams/{team}/sloths', 'Rikki\Heroeslounge\Http\Team@sloths');
    Route::get('teams/{team}/matches', 'Rikki\Heroeslounge\Http\Team@matches');
    Route::get('teams/{team}/timelines', 'Rikki\Heroeslounge\Http\Team@timelines');
    Route::get('teams/{team}/sloths/{sloth}', 'Rikki\Heroeslounge\Http\Team@sloth');
    Route::get('teams/{team}/sloths/{sloth}/timelines', 'Rikki\Heroeslounge\Http\Team@slothTimelines');
    Route::resource('teams','Rikki\Heroeslounge\Http\Team');
    Route::get('teamsAll','Rikki\Heroeslounge\Http\Team@indexAll');
    Route::resource('sloths','Rikki\Heroeslounge\Http\Sloth');
    Route::get('slothsAll','Rikki\Heroeslounge\Http\Sloth@indexAll');
    Route::get('slothDiscordId/{discord_id}', 'Rikki\Heroeslounge\Http\Sloth@byDiscordId');
    Route::get('matches/{id}/teams','Rikki\Heroeslounge\Http\Match@teams');
    Route::get('matches/{id}/caster','Rikki\Heroeslounge\Http\Match@caster');
    Route::get('matches/withApprovedCastBetween/{startdate}/{enddate}','Rikki\Heroeslounge\Http\Match@withApprovedCastBetween');
    Route::get('matches/{id}/games','Rikki\Heroeslounge\Http\Match@games');
    Route::get('matches/{id}/replays','Rikki\Heroeslounge\Http\Match@replays');
    Route::get('matches/today','Rikki\Heroeslounge\Http\Match@getTodaysMatches');
    
    
    Route::resource('matches', 'Rikki\Heroeslounge\Http\Match');
    Route::get('matchesAll','Rikki\Heroeslounge\Http\Match@indexAll');
    Route::resource('channel', 'Rikki\Heroeslounge\Http\Twitchchannel');
    Route::resource('timeline', 'Rikki\Heroeslounge\Http\Timeline');
    Route::resource('applications', 'Rikki\Heroeslounge\Http\Applications');
    Route::resource('bans','Rikki\Heroeslounge\Http\Bans');
    Route::get('bansAll','Rikki\Heroeslounge\Http\Bans@indexAll');
    Route::resource('heroes','Rikki\Heroeslounge\Http\Heroes');
    Route::get('heroesAll','Rikki\Heroeslounge\Http\Heroes@indexAll');
    Route::resource('talents','Rikki\Heroeslounge\Http\Talents');
    Route::get('talentsAll','Rikki\Heroeslounge\Http\Talents@indexAll');
    Route::resource('games', 'Rikki\Heroeslounge\Http\Game');
    Route::get('gamesAll','Rikki\Heroeslounge\Http\Game@indexAll');
    Route::get('gamesAllWithPlayers','Rikki\Heroeslounge\Http\Game@indexAllWithPlayers');
});
