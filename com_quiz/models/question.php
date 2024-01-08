<?php

defined('_JEXEC') or die;

jimport('joomla.application.component.modellist');

class QuizModelQuestion extends JModelList {
    public function getListQuery() {
        // Create a new query object.
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);

        // Select the required fields from the table.
        $query->select('*')
              ->from($db->quoteName('#__questions'));

        return $query;
    }
}
