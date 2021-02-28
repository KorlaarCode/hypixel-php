<?php

namespace Plancke\HypixelPHP\fetch;

/**
 * Class FetchTypes
 * @package Plancke\HypixelPHP\fetch
 */
abstract class FetchTypes {

    const RESOURCES = 'resources';

    const PLAYER = 'player';

    const GUILD = 'guild';
    const FIND_GUILD = 'findGuild';

    const FRIENDS = 'friends';
    const BOOSTERS = 'boosters';
    const LEADERBOARDS = 'leaderboards';
    const STATUS = 'status';
    const RECENT_GAMES = 'recentGames';
    const KEY = 'key';
    const PUNISHMENT_STATS = 'punishmentStats';
    const PLAYER_COUNT = 'playerCount';
    const GAME_COUNTS = 'gameCounts';

    const SKYBLOCK_PROFILE = 'skyblock/profile';

    public static function values() {
        return [
            self::RESOURCES,
            self::PLAYER,
            self::GUILD,
            self::FIND_GUILD,
            self::BOOSTERS,
            self::LEADERBOARDS,
            self::STATUS,
            self::RECENT_GAMES,
            self::KEY,
            self::PUNISHMENT_STATS,
            self::PLAYER_COUNT,
            self::GAME_COUNTS,
            self::SKYBLOCK_PROFILE
        ];
    }

}