<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin administration pages are defined here.
 *
 * @package     tiny_ai
 * @category    admin
 * @copyright   2023 Matt Porritt <matt.porritt@moodle.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $settings = new admin_settingpage('tiny_ai_settings', new lang_string('pluginname', 'tiny_ai'));

    if ($ADMIN->fulltree) {
        // Setting to store OpenAI API key.
        $settings->add(new admin_setting_configpasswordunmask('tiny_ai/apikey',
            new lang_string('apikey', 'tiny_ai'),
            new lang_string('apikey_desc', 'tiny_ai'),
            ''));

        // Setting to store OpenAI organization ID.
        $settings->add(new admin_setting_configtext('tiny_ai/orgid',
            new lang_string('orgid', 'tiny_ai'),
            new lang_string('orgid_desc', 'tiny_ai'),
            '',
            PARAM_TEXT));
    }
}
