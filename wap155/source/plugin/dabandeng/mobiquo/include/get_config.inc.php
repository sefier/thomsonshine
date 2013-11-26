<?php

defined('IN_MOBIQUO') or exit;

loadcache('plugin');
$home_data = unserialize($_G['cache']['plugin']['dabandeng']['home_data']);

if (!empty($home_data)) {
    $show_home_data = true;
    $home_data = implode(',', $home_data);
} else {
    $show_home_data = false;
    $home_data = '';
}

lang('member/template');
$mlang = $_G['lang']['member_template'];

$question_list = array(
    new xmlrpcval(array(
        'id'        => new xmlrpcval('0', 'string'),
        'question'  => new xmlrpcval(basic_clean($mlang['security_question']), 'base64'),
    ), 'struct'),
    new xmlrpcval(array(
        'id'        => new xmlrpcval('1', 'string'),
        'question'  => new xmlrpcval(basic_clean($mlang['security_question_1']), 'base64'),
    ), 'struct'),
    new xmlrpcval(array(
        'id'        => new xmlrpcval('2', 'string'),
        'question'  => new xmlrpcval(basic_clean($mlang['security_question_2']), 'base64'),
    ), 'struct'),
    new xmlrpcval(array(
        'id'        => new xmlrpcval('3', 'string'),
        'question'  => new xmlrpcval(basic_clean($mlang['security_question_3']), 'base64'),
    ), 'struct'),
    new xmlrpcval(array(
        'id'        => new xmlrpcval('4', 'string'),
        'question'  => new xmlrpcval(basic_clean($mlang['security_question_4']), 'base64'),
    ), 'struct'),
    new xmlrpcval(array(
        'id'        => new xmlrpcval('5', 'string'),
        'question'  => new xmlrpcval(basic_clean($mlang['security_question_5']), 'base64'),
    ), 'struct'),
    new xmlrpcval(array(
        'id'        => new xmlrpcval('6', 'string'),
        'question'  => new xmlrpcval(basic_clean($mlang['security_question_6']), 'base64'),
    ), 'struct'),
    new xmlrpcval(array(
        'id'        => new xmlrpcval('7', 'string'),
        'question'  => new xmlrpcval(basic_clean($mlang['security_question_7']), 'base64'),
    ), 'struct'),
);
