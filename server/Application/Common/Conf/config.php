<?php
return array(
	//'配置项'=>'配置值'
	'URL_MODEL'          => '1',
	'DEFAULT_CONTROLLER'    =>  'Home', // 默认控制器名称
	'CONTROLLER_LEVEL'      =>  2,	// 搜索2级控制器
	
	'TMPL_PARSE_STRING'  =>array(
     '../../../../Public' => __ROOT__ . '/Public',
	 '../../../Public' => __ROOT__ . '/Public',
	)
);