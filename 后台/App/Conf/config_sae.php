<?php
return array(
   'TMPL_PARSE_STRING'=>array(
      // __PUBLIC__/upload  -->  /Public/upload -->http://appname-public.stor.sinaapp.com/upload
   '/Public/upload'=>sae_storage_root('Public').'/upload',
   'DB_TYPE'    =>  'mysql',
   'DB_HOST'    =>  'SAE_MYSQL_HOST_M',
   'DB_USER'    =>  'SAE_MYSQL_USER',
   'DB_PWD'     =>  'SAE_MYSQL_PASS',
   'DB_NAME'    =>  'SAE_MYSQL_DB',
   'DB_PREFIX'  =>  ''
    )
);