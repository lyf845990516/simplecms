<?php
return array(

	// 如果你的环境不支持PATHINFO 请设置为3
	'URL_MODEL'                 =>  2,		
    //DB 配置
    'DB_TYPE'                   =>  'mysqli',
	'DB_HOST'                   =>  '127.0.0.1',
	'DB_NAME'                   =>  'simplecms',	 
	'DB_USER'                   =>  'root',	 
	'DB_PWD'                    =>  '',
    'DB_PORT'                   =>  '3306',
    'DB_PREFIX'                 =>  'simplecms_',

    //路由不区分大小写
    'URL_CASE_INSENSITIVE'  	=>  true,  
    // 'TMPL_PARSE_STRING'  =>array(     
    // 	'__JS__'     => '/Public/JS/', // 增加新的JS类库路径替换规则     
    // 	'__UPLOAD__' => '/Uploads', // 增加新的上传路径替换规则
    // ),
);