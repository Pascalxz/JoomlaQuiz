<?php

defined('_JEXEC') or die;

// Load the stylesheet
JHtml::_('stylesheet', 'com_quiz/question.css', array(), true);

// Get the data from the model
$data = $this->get('Items');

// HTML for displaying question list
echo '<h1>Questions</h1>';

if (!empty($data)) {
    echo '<ul>';
    foreach ($data as $question) {
        echo '<li>' . htmlspecialchars($question->question_text) . '</li>';
    }
    echo '</ul>';
} else {
    echo '<p>No questions found.</p>';
}
