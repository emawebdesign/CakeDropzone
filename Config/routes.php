<?php

Router::connect('/dropzone/upload', array(
	'plugin'=>'CakeDropzone', 
	'controller' => 'dropzones', 
	'action' => 'upload'
));