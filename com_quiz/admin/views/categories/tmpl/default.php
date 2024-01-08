<?php
defined('_JEXEC') or die;

// Load the stylesheet
JHtml::_('stylesheet', 'com_quiz/admin.css', array(), true);

// Get the data from the model
$data = $this->get('Items');

// HTML for displaying category list
echo '<h1>Categories</h1>';

if (!empty($data)) {
    echo '<ul>';
    foreach ($data as $category) {
        echo '<li>' . htmlspecialchars($category->name) . '</li>';
    }
    echo '</ul>';
} else {
    echo '<p>No categories found.</p>';
}
