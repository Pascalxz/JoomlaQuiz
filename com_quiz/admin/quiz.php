<?php
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_quiz')) {
    throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Require helper file
JLoader::register('QuizHelper', JPATH_COMPONENT . '/helpers/quiz.php');
QuizHelper::addSubmenu('quizzes');

// Set some global property
$document = JFactory::getDocument();
$document->addStyleDeclaration('.icon-48-quiz {background-image: url(../media/com_quiz/images/tux-48x48.png);}');

// Get an instance of the controller prefixed by Quiz
$controller = JControllerLegacy::getInstance('Quiz');

// Perform the request task
$controller->execute(JFactory::getApplication()->input->getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
