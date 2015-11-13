<?php

use Rocketeer\Services\Connections\ConnectionsHandler;

return [

    // The name of the application to deploy
    // This will create a folder of the same name in the root directory
    // configured above, so be careful about the characters used
    'application_name' => 'rocketeertest',

    // Plugins
    ////////////////////////////////////////////////////////////////////

    // The plugins to load
    'plugins'          => [// 'Rocketeer\Plugins\Slack\RocketeerSlack',
    ],

    // Logging
    ////////////////////////////////////////////////////////////////////

    // The schema to use to name log files
    'logs'             => function (ConnectionsHandler $connections) {
        return sprintf('%s-%s-%s.log', $connections->getConnection(), $connections->getStage(), date('Ymd'));
    },

    // Remote access
    //
    // You can either use a single connection or an array of connections
    ////////////////////////////////////////////////////////////////////

    // The default remote connection(s) to execute tasks on
    'default'          => ['production'],

    // The various connections you defined
    // You can leave all of this empty or remove it entirely if you don't want
    // to track files with credentials : Rocketeer will prompt you for your credentials
    // and store them locally
    'connections'      => [
        'production' => [
            'host'      => '',
            'username'  => '',
            'password'  => '',
            'key'       => '',
            'keyphrase' => '',
            'agent'     => '',
        ],
    ],


    // Contextual options
    //
    // In this section you can fine-tune the above configuration according
    // to the stage or connection currently in use.
    // Per example :
    // 'stages' => array(
    // 	'staging' => array(
    // 		'scm' => array('branch' => 'staging'),
    // 	),
    //  'production' => array(
    //    'scm' => array('branch' => 'master'),
    //  ),
    // ),
    ////////////////////////////////////////////////////////////////////

    'on'               => [

        // Stages configurations
        'stages'      => [],
        // Connections configuration
        'connections' => array(

			'production' => array(
				'scm' => array( 'branch' => 'master' ),
			),
		),

    ],

];
