<?php

namespace Plancke\HypixelPHP\responses\guild;

use Plancke\HypixelPHP\classes\APIObject;
use Plancke\HypixelPHP\HypixelPHP;

class GuildRanks extends APIObject {

    protected $ranks;
    protected $defaultRank;

    /**
     * @param HypixelPHP $HypixelPHP
     * @param $ranks
     */
    public function __construct(HypixelPHP $HypixelPHP, $ranks) {
        parent::__construct($HypixelPHP, $ranks);

        if (sizeof($ranks) == 0) {
            array_push($ranks, [
                'name' => 'MEMBER',
                'priority' => 1
            ]);
            array_push($ranks, [
                'name' => 'OFFICER',
                'priority' => 2
            ]);
        }
        array_push($ranks, [
            'name' => 'GUILDMASTER',
            'priority' => PHP_INT_MAX,
            'tag' => 'GM'
        ]);

        $this->ranks = [];
        foreach ($ranks as $rank) {
            $guildRank = new GuildRank($HypixelPHP, $rank);
            $this->ranks[strtolower($guildRank->getName())] = $guildRank;

            if ($guildRank->isDefault()) $this->defaultRank = $guildRank;
        }
    }

    /**
     * @return array[string]GuildRank
     */
    public function getRanks() {
        return $this->ranks;
    }

    /**
     * @param $rank
     * @return GuildRank
     */
    public function getRank($rank) {
        $lower = strtolower($rank);
        if (array_key_exists($lower, $this->ranks)) {
            return $this->ranks[$lower];
        }
        $lower = str_replace(" ", "", $lower);
        if (array_key_exists($lower, $this->ranks)) {
            return $this->ranks[$lower];
        }
        return null;
    }

    /**
     * @return GuildRank
     */
    public function getDefaultRank() {
        return $this->defaultRank;
    }
}