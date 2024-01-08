<?php

defined('_JEXEC') or die;

class QuizController extends JControllerLegacy {
    public function display($cachable = false, $urlparams = array()) {
        // Display the view
        return parent::display($cachable, $urlparams);
    }
}
