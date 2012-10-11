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
 * Prints navigation tabs
 *
 * @package    core_group
 * @copyright  2010 Petr Skoda (http://moodle.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
    $row = $tabs = array();
    
    if (has_capability('local/mass_enroll:enrol', $context)) {
        $row[] = new tabobject('mass_enroll',
                               $CFG->wwwroot.'/local/mass_enroll/mass_enroll.php?id='.$id,
                              get_string('mass_enroll','local_mass_enroll'));
    }
    
    if (has_capability('local/mass_enroll:unenrol', $context)) {
        $row[] = new tabobject('mass_unenroll',
                               $CFG->wwwroot.'/local/mass_enroll/mass_unenroll.php?id='.$id,
                               get_string('mass_unenroll', 'local_mass_enroll'));
    }
  
    $tabs[] = $row;
    echo '<div class="groupdisplay">';
    print_tabs($tabs, $currenttab);
    echo '</div>';
