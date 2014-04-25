<?php
/*
 * This file is part of lms.
 *
 * lms is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * lms is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
 */

class Settings_model extends CI_Model {

    /**
     * Default constructor
     */
    public function __construct() {

    }

    /**
     * You can use smtp4test for testing purpose
     * @return array e-mail configuration
     */
    public function get_mail_config() {
        //TODO : get configuration from DB
        $config['protocol'] = 'smtp';
        $config['useragent'] = 'CodeIgniter';
        //$config['mailpath'] = '/usr/sbin/sendmail';
        $config['smtp_host'] = 'localhost';
        $config['smtp_user'] = '';
        $config['smtp_pass'] = '';
        $config['_smtp_auth'] = TRUE;
        $config['smtp_port'] = '25';
        $config['smtp_timeout'] = '20';
        $config['charset'] = 'utf-8';   //'iso-8859-1'
        $config['mailtype'] = 'html';
        $config['wordwrap'] = TRUE;
        $config['wrapchars'] = 80;
        $config['validate'] = FALSE;
        $config['priority'] = 3;
        $config['newline'] = "\r\n";
        $config['crlf'] = "\r\n";
        return $config;
    }

    /**
     * Query a category from the configuration table (return a set of key/value)
     * @param string $category
     * @return type
     */
    public function get_config_category($category) {
        $this->db->from('settings');
        $this->db->where('category', $category);
        return $this->db->get();
    }

}