<?php
defined('_JEXEC') or die;

jimport('joomla.application.component.view');

class QuizViewQuiz extends JViewLegacy {
    function display($tpl = null) {
        // Get data from the model
        $this->items = $this->get('Items');

        // Check for errors.
        if (count($errors = $this->get('Errors'))) {
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }

        // Display the template
        parent::display($tpl);
    }
}
