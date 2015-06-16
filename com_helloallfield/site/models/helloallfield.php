<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * HelloAllField Model
 * @since  0.0.1
 */
class HelloModelHelloAllField extends JModelItem {

    /**
     * @var array list of items
     */
    protected $list;

    /**
     * Method to get a table object, load it if necessary.
     *
     * @param   string  $type    The table name. Optional.
     * @param   string  $prefix  The class prefix. Optional.
     * @param   array   $config  Configuration array for model. Optional.
     *
     * @return  JTable  A JTable object
     *
     * @since   1.6
     */
    public function getTable($type = 'HelloAllField', $prefix = 'HelloTable', $config = array()) {
        return JTable::getInstance($type, $prefix, $config);
    }

    /**
     * Get the message
     *
     * @param   integer  $id  Greeting Id
     *
     * @return  string        Fetched String from Table for relevant Id
     */
    public function get($id = 1) {
        if (!$this->list[$id]) {
            // Request the selected id
            $jinput = JFactory::getApplication()->input;
            $id     = $jinput->get('id', 1, 'INT');

            // Get a TableHelloWorld instance
            $table = $this->getTable();

            // Load the message
            $table->load($id);

            $this->list[$id] = $table;
        }
        return $this->list[$id];
    }

}
