<?php
defined('_JEXEC') or die;

class QuizHelper {
    public static function addSubmenu($vName) {
        JHtmlSidebar::addEntry(
            JText::_('COM_QUIZ_SUBMENU_QUIZZES'),
            'index.php?option=com_quiz&view=quizzes',
            $vName == 'quizzes'
        );
        JHtmlSidebar::addEntry(
            JText::_('COM_QUIZ_SUBMENU_CATEGORIES'),
            'index.php?option=com_quiz&view=categories',
            $vName == 'categories'
        );
    }
}
