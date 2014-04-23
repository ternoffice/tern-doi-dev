<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

require_once( dirname(__FILE__) .  '/../components/helper.php');

return CMap::mergeArray(
        array(
            'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
            'name'=>'TERN DOI Service',

            // preloading 'log' component
            'preload'=>array('log'),

            // autoloading model and component classes
            'import'=>array(
		'application.models.*',
		'application.components.*',
                'ext.giix-components.*', // giix components
                'ext.YiiMailer.YiiMailer',
            ),

            'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
                        'password'=>'password',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('192.168.214.167','::1'),
                        'generatorPaths' => array(
                            'ext.giix-core', // giix generators
                    ),
		),
		
            ),

            //application components
            'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		// uncomment the following to use a Postgres database
		
		'db'=>array(
			'connectionString' => 'pgsql:host=localhost;port=5432;dbname=tern-doi-dev',
			'emulatePrepare' => true,
			'username' => 'tern',
			'password' => '1ce1stern',
			'charset' => 'utf8',
		),
		'session' => array(
                        'autoStart' => true,
                ),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
                        'errorAction'=>'site/error',
                ), 
            'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				'stdlog' => array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
					'logPath'=>'/opt/tern-doi-dev/log',
				),
                                'citelog' => array(
                                       'class'=>'CFileLogRoute',
                                        'levels'=>'error,warning,info',
					'logPath'=>'/opt/tern-doi-dev/log',
                                        'logFile'=>'citeANDS.log',
                                        'categories' => 'system.components.CiteANDS',
                                ),

			),
		),
            'email'=>array(
                'class'=>'application.extensions.email.Email',
                'delivery'=>'php', //Will use the php mailing function.  
                //May also be set to 'debug' to instead dump the contents of the email into the view
                ),

	),

        //set theme to classic
        'theme'=>'classic',
   
      ),
 array_merge_recursive(local_config(),ands_config(),error_config())
);

// return an array of custom local configuration settings
function local_config()
{
  if (file_exists(dirname(__FILE__).'/local.php'))
  {
    return require_once(dirname(__FILE__).'/local.php');

  }
  return array();
}

function error_config()
{
  if (file_exists(dirname(__FILE__).'/error.php'))
  {
    return require_once(dirname(__FILE__).'/error.php');
  }
  return array();
}

function ands_config()
{
  if (file_exists(dirname(__FILE__).'/ands.php'))
  {
    return require_once(dirname(__FILE__).'/ands.php');
  }
  return array();
}

;
