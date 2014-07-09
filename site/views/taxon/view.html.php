<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * HTML View class for the HelloWorld Component
 */
class ClicnatViewTaxon extends JViewLegacy {
        // Overwriting JView display method
        function display($tpl = null) {
                // Assign data to the view
		$input = JFactory::getApplication()->input;
		$id = $input->getCmd('id');
		$url = "https://ssl.picardie-nature.org/api-clicnat/";
		$data = file_get_contents($url.sprintf("?action=taxon&id=%d",$id));
		$obj = json_decode($data);
		$this->taxon = $obj->taxon;
 
                // Display the view
                parent::display($tpl);
        }
}
