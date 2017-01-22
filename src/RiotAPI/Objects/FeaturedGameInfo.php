<?php

/**
 * Copyright (C) 2016  Daniel Dolejška
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace RiotAPI\Objects;


/**
 *   Class FeaturedGameInfo
 *
 * @package RiotAPI\Objects
 */
class FeaturedGameInfo extends ApiObject
{
	/** @var BannedChampion[] $bannedChampions */
	public $bannedChampions;

	/** @var int $gameId */
	public $gameId;

	/** @var int $gameLength */
	public $gameLength;

	/** @var string $gameMode */
	public $gameMode;

	/** @var int $gameQueueConfigId */
	public $gameQueueConfigId;

	/** @var int $gameStartTime */
	public $gameStartTime;

	/** @var string $gameType */
	public $gameType;

	/** @var int $mapId */
	public $mapId;

	/** @var Observer $observers */
	public $observers;

	/** @var Participant[] $participants */
	public $participants;

	/** @var string $platformId */
	public $platformId;
}