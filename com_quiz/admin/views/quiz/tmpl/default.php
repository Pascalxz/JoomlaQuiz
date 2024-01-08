<?php
defined('_JEXEC') or die;

// Load the stylesheet
JHtml::_('stylesheet', 'com_quiz/admin.css', array(), true);

// Get the data from the model
$data = $this->get('Items');

// HTML for displaying quiz list
echo '<h1>Quizzes</h1>';

if (!empty($data)) {
    echo '<ul>';
    foreach ($data as $quiz) {
        echo '<li>' . htmlspecialchars($quiz->title) . '</li>';
    }
    echo '</ul>';
} else {
    echo '<p>No quizzes found.</p>';
}
