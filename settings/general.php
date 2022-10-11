<?php
// This file is part of ReuseContent for Moodle - http://moodle.org/
//
// ReuseContent is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// ReuseContent is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Settings page for ReuseContent.
 *
 * @package    filter_reusecontent
 * @copyright  2017-2022
 * @author     George Avgeris
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
$settings = new admin_settingpage('local_reusecontent_ws', get_string('pluginname', 'local_reusecontent_ws'));
$ADMIN->add('localplugins', $settings);

$default = "";
$name = 'local_reusecontent_ws/item_remote_servers_extra_css';
$title = get_string('item_remote_servers_extra_css', 'local_reusecontent_ws');
$description = get_string('item_remote_servers_extra_css_desc', 'local_reusecontent_ws');
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$settings->add($setting);