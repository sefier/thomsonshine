<?php

if(!defined('IN_DISCUZ')) {
    exit('Access Denied');
}

$sql = <<<EOF

DROP TABLE pre_mopen;

EOF;

runquery($sql);

$finish = TRUE;