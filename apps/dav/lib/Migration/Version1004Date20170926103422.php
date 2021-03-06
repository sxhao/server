<?php
/**
 *
 *
 * @author Joas Schilling <coding@schilljs.com>
 * @author Morris Jobke <hey@morrisjobke.de>
 * @author Roeland Jago Douma <roeland@famdouma.nl>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\DAV\Migration;

use OCP\Migration\BigIntMigration;

/**
 * Auto-generated migration step: Please modify to your needs!
 */
class Version1004Date20170926103422 extends BigIntMigration {

	/**
	 * @return array Returns an array with the following structure
	 * ['table1' => ['column1', 'column2'], ...]
	 * @since 13.0.0
	 */
	protected function getColumnsByTable() {
		return [
			'addressbooks' => ['id'],
			'addressbookchanges' => ['id', 'addressbookid'],
			'calendars' => ['id'],
			'calendarchanges' => ['id', 'calendarid'],
			'calendarobjects' => ['id', 'calendarid'],
			'calendarobjects_props' => ['id', 'calendarid', 'objectid'],
			'calendarsubscriptions' => ['id'],
			'cards' => ['id', 'addressbookid'],
			'cards_properties' => ['id', 'addressbookid', 'cardid'],
			'dav_shares' => ['id', 'resourceid'],
			'schedulingobjects' => ['id'],
		];
	}
}
