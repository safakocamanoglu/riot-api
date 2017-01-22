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
 *   Class TournamentCodeParameters
 *
 * @package RiotAPI\Objects
 */
class TournamentCodeParameters extends ApiObject
{
	/**
	 * Optional list of participants in order to validate the players eligible to join the lobby. NOTE: We currently do not
	 * enforce participants at the team level, but rather the aggregate of teamOne and teamTwo. We may add the ability to
	 * enforce at the team level in the future.
	 * @var SummonerIdParams $allowedSummonerIds
	 */
	public $allowedSummonerIds;

	/**
	 * The map type of the game. Valid values are SUMMONERS_RIFT, TWISTED_TREELINE, CRYSTAL_SCAR, and HOWLING_ABYSS.
	 * @var string $mapType
	 */
	public $mapType;

	/**
	 * Optional string that may contain any data in any format, if specified at all. Used to denote any custom information about the game.
	 * @var string $metadata
	 */
	public $metadata;

	/**
	 * The pick type of the game. Valid values are BLIND_PICK, DRAFT_MODE, ALL_RANDOM, TOURNAMENT_DRAFT.
	 * @var string $pickType
	 */
	public $pickType;

	/**
	 * The spectator type of the game. Valid values are NONE, LOBBYONLY, ALL.
	 * @var string $spectatorType
	 */
	public $spectatorType;

	/**
	 * The team size of the game. Valid values are 1-5.
	 * @var int $teamSize
	 */
	public $teamSize;
}