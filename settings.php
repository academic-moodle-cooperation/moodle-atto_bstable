<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package    atto_bstable
 * @copyright  2015 Alexander Bias <alexander.bias@uni-ulm.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    $settings->add(new admin_setting_configmulticheckbox(
        'atto_bstable/styles',
        get_string('settingstyles', 'atto_bstable'),
        get_string('settingstyles_desc', 'atto_bstable'),
        array(),
        array(
            'table-striped' =>
                get_string('settingstylestriped', 'atto_bstable').'<br />
                <div class="row">
                    <div class="span6">
                        <table class="table">
                            <caption>'.get_string('settingstylepreviewwithout', 'atto_bstable').'</caption>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                        </table>
                    </div>
                    <div class="span6">
                        <table class="table table-striped">
                            <caption>'.get_string('settingstylepreviewwith', 'atto_bstable').'</caption>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                        </table>
                    </div>
                </div>',
            'table-hover' =>
                get_string('settingstylehover', 'atto_bstable').'<br />
                <div class="row">
                    <div class="span6">
                        <table class="table">
                            <caption>'.get_string('settingstylepreviewwithout', 'atto_bstable').'</caption>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                        </table>
                    </div>
                    <div class="span6">
                        <table class="table table-hover">
                            <caption>'.get_string('settingstylepreviewwith', 'atto_bstable').'</caption>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                        </table>
                    </div>
                </div>',
            'table-bordered' =>
                get_string('settingstylebordered', 'atto_bstable').'<br />
                <div class="row">
                    <div class="span6">
                        <table class="table">
                            <caption>'.get_string('settingstylepreviewwithout', 'atto_bstable').'</caption>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                        </table>
                    </div>
                    <div class="span6">
                        <table class="table table-bordered">
                            <caption>'.get_string('settingstylepreviewwith', 'atto_bstable').'</caption>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                        </table>
                    </div>
                </div>',
            'table-condensed' =>
                get_string('settingstylecondensed', 'atto_bstable').'<br />
                <div class="row">
                    <div class="span6">
                        <table class="table">
                            <caption>'.get_string('settingstylepreviewwithout', 'atto_bstable').'</caption>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                        </table>
                    </div>
                    <div class="span6">
                        <table class="table table-condensed">
                            <caption>'.get_string('settingstylepreviewwith', 'atto_bstable').'</caption>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                            <tr><td>Cell</td><td>Cell</td></tr>
                        </table>
                    </div>
                </div>'
        )
    ));
}
