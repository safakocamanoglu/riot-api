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
 *   Class SummonerDto
 * Represents a summoner
 *
 * @package RiotAPI\Objects
 */
class SummonerDto extends ApiObject
{
	/**
	 * Summoner ID.
	 * @var int $id
	 */
	public $id;

	/**
	 * Summoner name.
	 * @var string $name
	 */
	public $name;

	/**
	 * ID of the summoner icon associated with the summoner.
	 * @var int $profileIconId
	 */
	public $profileIconId;

	/**
	 * Date summoner was last modified specified as epoch milliseconds. The following events will update this timestamp:
	 * profile icon change, playing the tutorial or advanced tutorial, finishing a game, summoner name change
	 * @var int $revisionDate
	 */
	public $revisionDate;

	/**
	 * Summoner level associated with the summoner.
	 * @var int $summonerLevel
	 */
	public $summonerLevel;
}