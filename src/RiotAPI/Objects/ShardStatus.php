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
 *   Class ShardStatus
 *
 * Used in:
 *   lol-status (v1.0)
 *     @link https://developer.riotgames.com/api/methods#!/1085/3739
 *
 * @iterable $services
 *
 * @package RiotAPI\Objects
 */
class ShardStatus extends ApiObjectIterable
{
	/** @var string $hostname */
	public $hostname;

	/** @var string[] $locales */
	public $locales;

	/** @var string $name */
	public $name;

	/** @var string $region_tag */
	public $region_tag;

	/** @var Service[] $services */
	public $services;

	/** @var string $slug */
	public $slug;
}
