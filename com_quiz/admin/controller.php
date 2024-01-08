<?php
defined('_JEXEC') or die;

// Import the base controller
jimport('joomla.application.component.controller');

// Get an instance of the controller prefixed by Quiz
$controller = JControllerLegacy::getInstance('Quiz');

// Perform the request task
$controller->execute(JFactory::getApplication()->input->getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
