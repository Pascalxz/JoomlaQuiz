<?php
defined('_JEXEC') or die;

class com_quizInstallerScript {
    function install($parent) {
        // $parent is the class calling this method
        echo '<p>The installation script has been processed.</p>';
    }

    function update($parent) {
        // $parent is the class calling this method
        echo '<p>The update script has been processed.</p>';
    }

    function uninstall($parent) {
        // $parent is the class calling this method
        echo '<p>The uninstall script has been processed.</p>';
    }

    function preflight($type, $parent) {
        // $type is the type of change (install, update, discover_install)
        // $parent is the class calling this method
        echo '<p>The preflight script has been processed.</p>';
    }

    function postflight($type, $parent) {
        // $type is the type of change (install, update, discover_install)
        // $parent is the class calling this method
        echo '<p>The postflight script has been processed.</p>';
    }
}
