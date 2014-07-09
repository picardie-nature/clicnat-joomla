<?php
// No direct access to this file
defined('_JEXEC') or die;

// Import of the necessary classes
jimport('joomla.application.component.controller');

// Get an instance of the controller prefixed by CocoateRealEstate
$controller = JControllerLegacy::getInstance('Clicnat');

// Perform the Request task
$controller->execute(JRequest::getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
?>
