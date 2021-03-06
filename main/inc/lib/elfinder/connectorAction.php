<?php
/* For licensing terms, see /license.txt */

use Chamilo\CoreBundle\Component\Editor\Connector;
use Chamilo\CoreBundle\Component\Editor\Finder;

require_once __DIR__.'/../../global.inc.php';

error_reporting(-1);

/** @var Connector $connector */
$connector = new Connector();

// Check driver list in configuration
$driverList = api_get_configuration_value('editor_driver_list');
if (empty($driverList)) {
    $driverList = array(
        'PersonalDriver',
        'CourseDriver',
        //'CourseUserDriver',
        //'HomeDriver'
    );
}

$connector->setDriverList($driverList);
$operations = $connector->getOperations();

// Run elFinder
$finder = new Finder($operations);
$elFinderConnector = new \elFinderConnector($finder);
$elFinderConnector->run();
