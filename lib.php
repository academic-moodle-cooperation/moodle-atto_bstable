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
 * Atto text editor integration version file.
 *
 * @package    atto_bstable
 * @copyright  2015 Alexander Bias <alexander.bias@uni-ulm.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Initialise the js strings required for this module.
 */
function atto_bstable_strings_for_js() {
    global $PAGE;

    $PAGE->requires->strings_for_js(array('createtable',
                                          'updatetable',
                                          'headers',
                                          'caption',
                                          'columns',
                                          'rows',
                                          'numberofcolumns',
                                          'numberofrows',
                                          'both',
                                          'edittable',
                                          'addcolumnafter',
                                          'addrowafter',
                                          'movecolumnright',
                                          'movecolumnleft',
                                          'moverowdown',
                                          'moverowup',
                                          'deleterow',
                                          'deletecolumn'),
                                    'atto_bstable');
}



/**
 * Sends the parameters to JS module.
 *
 * @return array
 */
function atto_bstable_params_for_js($elementid, $options, $fpoptions) {
    // Get config
    $config = get_config('atto_bstable', 'styles');

    // Explode settings csv values
    $attributes = explode(',', $config);

    // Implode them for usage in class attribute
    $table_attributes = implode(' ', $attributes);

    // Return css classes
    return array(
        'styles' => $table_attributes
    );
}
