<?php

defined('IN_MOBIQUO') or exit;

function mobi_parse_requrest()
{
    global $request_method, $request_params, $params_num;
    
    $ver = phpversion();
    if ($ver[0] >= 5) {
        $data = file_get_contents('php://input');
    } else {
        $data = isset($GLOBALS['HTTP_RAW_POST_DATA']) ? $GLOBALS['HTTP_RAW_POST_DATA'] : '';
    }
    
    if (count($_SERVER) == 0)
    {
        $r = new xmlrpcresp('', 15, 'XML-RPC: '.__METHOD__.': cannot parse request headers as $_SERVER is not populated');
        echo $r->serialize('UTF-8');
        exit;
    }
    
    if(isset($_SERVER['HTTP_CONTENT_ENCODING'])) {
        $content_encoding = str_replace('x-', '', $_SERVER['HTTP_CONTENT_ENCODING']);
    } else {
        $content_encoding = '';
    }
    
    if($content_encoding != '' && strlen($data)) {
        if($content_encoding == 'deflate' || $content_encoding == 'gzip') {
            // if decoding works, use it. else assume data wasn't gzencoded
            if(function_exists('gzinflate')) {
                if ($content_encoding == 'deflate' && $degzdata = @gzuncompress($data)) {
                    $data = $degzdata;
                } elseif ($degzdata = @gzinflate(substr($data, 10))) {
                    $data = $degzdata;
                }
            } else {
                $r = new xmlrpcresp('', 106, 'Received from client compressed HTTP request and cannot decompress');
                echo $r->serialize('UTF-8');
                exit;
            }
        }
    }
    
    $parsers = php_xmlrpc_decode_xml($data);
    $request_method = $parsers->methodname;
    $request_params = php_xmlrpc_decode(new xmlrpcval($parsers->params, 'array'));
    $params_num = count($request_params);
}

function unescape_htmlentitles($str) {
    preg_match_all("/(?:%u.{4})|.{4};|&#\d+;|.+|\\r|\\n/U",$str,$r);
    $ar = $r[0];
    
    foreach($ar as $k=>$v) {
        if(substr($v,0,2) == "&#") {
            $ar[$k] =@html_entity_decode($v,ENT_QUOTES, 'UTF-8');
        }
    }
    return join("",$ar);
}

function parameter_to_local(&$param)
{
    foreach($param as $key => $value) {
        if (is_array($value)) {
            parameter_to_local($param[$key]);
        } elseif (strpos($key, 'gp_') === 0) {
            to_local($param[$key]);
        }
    }
}

function to_local(&$str)
{
    if (function_exists('diconv'))
        $str = diconv($str, 'utf-8');
    elseif (function_exists('mb_convert_encoding'))
        $str = @mb_convert_encoding($str, CHARSET, 'UTF-8');
    else
        $str = iconv('utf-8', CHARSET, $str);
}

function to_utf8($str)
{
    if (function_exists('diconv'))
        $str = diconv($str, CHARSET, 'utf-8');
    elseif (function_exists('mb_convert_encoding'))
        $str = @mb_convert_encoding($str, 'UTF-8', CHARSET);
    else
        $str = iconv(CHARSET, 'utf-8', $str);
    
    return unescape_htmlentitles($str);
}

function mobiquo_iso8601_encode($timet)
{
    static $offset;
    if($offset === null) {
        $offset = getglobal('member/timeoffset');
    }
    
    $t = gmdate("Ymd\TH:i:s", $timet + $offset * 3600);      
    $t .= sprintf("%+03d:%02d", intval($offset), abs($offset - intval($offset)) * 60); 
    
    return $t;
}

function get_user_avatar($uid)
{
    return htmlspecialchars_decode(avatar($uid, 'small', true));
}

function process_page($start_num, $end)
{
    global $start, $limit;
    
    $start = intval($start_num);
    $end = intval($end);
    $start = empty($start) ? 0 : max($start, 0);
    $end = (empty($end) || $end < $start) ? ($start + 19) : max($end, $start);
    if ($end - $start >= 50) {
        $end = $start + 49;
    }
    $limit = $end - $start + 1;
}

function get_message($message)
{
    $message = preg_replace('/\[\/?code\]|\[\/?b\]/', '', $message);
    $message = preg_replace('/\[img\].*?\/images\/smilies\/.*?\[\/img\]/', '', $message);

    return basic_clean($message);
}

function get_short_content($tid, $posttable, $length = 100)
{
    $message = DB::result_first("SELECT message FROM ".DB::table($posttable)." WHERE tid='$tid' AND first='1' AND invisible='0'");
    $message = preg_replace('/\[url.*?\].*?\[\/url\]/si', '###url###', $message);
    $message = preg_replace('/\[img.*?\].*?\[\/img\]/si', '###img###', $message);
    $message = preg_replace('/\[attach.*?\].*?\[\/attach\]/si', '###attach###', $message);
    $message = preg_replace('/\[(i|code|quote|free|media|audio|flash|hide|swf).*?\].*?\[\/\\1\]/si', '', $message);
    $message = preg_replace('/\[.*?\]/si', '', $message);
    $message = preg_replace('/###(url|img|attach)###/si', '[$1]', $message);
    $message = preg_replace('/^\s*|\s*$/', '', $message);
    $message = preg_replace('/[\n\r\t]+/', ' ', $message);
    $message = preg_replace('/\s+/', ' ', $message);
    $message = cutstr($message, $length);
    $message = basic_clean($message);

    return $message;
}

function get_error($err_key, $replace_array = array(), $need_login = false)
{
    global $_G;
    
    include(DISCUZ_ROOT.'/source/language/lang_message.php');
    
    header('Mobiquo_is_login:'.($_G['uid'] ? 'true' : 'false'));

    $err_id = (!$_G['uid'] && $need_login) ? 20 : 18;
    $err_str = isset($lang[$err_key]) ? $lang[$err_key] : $err_key;
    
    foreach($replace_array as $key => $value)
    {
        $err_str = str_replace('{'.$key.'}', $value, $err_str);
    }

    $r = new xmlrpcresp(
            new xmlrpcval(array(
                'result'        => new xmlrpcval(false, 'boolean'),
                'result_text'   => new xmlrpcval(basic_clean($err_str), 'base64'),
            ),'struct'));
    echo $r->serialize('UTF-8');
    exit;
}

function log_it($log_data)
{
    global $mobiquo_config;

    if(!$mobiquo_config['keep_log'] || !$log_data)
    {
        return;
    }

    $log_file = './log/'.date('Ymd_H').'.log';

    file_put_contents($log_file, print_r($log_data, true), FILE_APPEND);
}

function post_html_clean($str)
{
    $search = array(
        '/<a .*?href="(.*?)".*?>(.*?)<\/a>/sei',
        '/\[img\](.*?)\[\/img\]/sei',
        '/<img .*?src="(.*?)".*?\/?>/sei',
        '/<blockquote.*?>(.*?)<\/blockquote>/si',
        '/<br\s*\/?>|<\/cite>|<li>|<\/em>|<em.*?>|<\/(h|H)\d>/si',
        '/&nbsp;/si',
    );

    $replace = array(
        "url_check('$1', '$2')",
        "'[img]'.url_encode('$1').'[/img]'",
        "'[img]'.url_encode('$1').'[/img]'",
        '[quote]$1[/quote]',
        "\n",
        ' ',
    );

    $str = preg_replace('/\n|\r/si', '', $str);
    if (preg_match('/^(.*?<blockquote.*?>)(.*)(<\/blockquote>.*)$/si', $str, $match_first))
    {
        if (preg_match('/^(.*?)<blockquote.*?>.*<\/blockquote>(.*)$/si', $match_first[2], $match_second))
        {
            $str = $match_first[1].$match_second[1].$match_second[2].$match_first[3];
        }
    }
    $str = preg_replace('/<i class="pstatus".*?>.*?<\/i>(<br\s*\/>){0,2}/', '', $str);
    $str = preg_replace('/<script.*?>.*?<\/script>/', '', $str);
    $str = preg_replace($search, $replace, $str);

    // remove link on img
    $str = preg_replace('/\[url=.*?\](\[img\].*?\[\/img\])\[\/url\]/', '$1', $str);
    // remove reply link
    $str = preg_replace('/\[url=[^\]]*?redirect\.php\?goto=findpost.*?\](.*?)\[\/url\]/', '$1', $str);
    // Currently, we don't display smiles and system image
    $str = preg_replace('/\[img\]images\/(smilies|default)\/.*?\[\/img\]/si', '', $str);
    // Currently, we don't display back image
    $str = preg_replace('/\[img\].*?back\.gif\[\/img\]/si', '', $str);

    return basic_clean($str);
}

function url_check($url, $data)
{
    if (preg_match('/^\s*http/', $url))
        return "[url=$url]${data}[/url]";
    else
        return $data;
}

function url_encode($url)
{
    global $_G;
    $url = rawurlencode($url);
    
    $from = array('/%3A/', '/%2F/', '/%3F/', '/%2C/', '/%3D/', '/%26/', '/%25/', '/%23/', '/%2B/', '/%3B/');
    $to   = array(':',     '/',     '?',     ',',     '=',     '&',     '%',     '#',     '+',     ';');
    $url = preg_replace($from, $to, $url);
    $url = preg_replace('/http:.*?http:/', 'http:', $url);
    
    if (!preg_match('/http:/', $url))
    {
        $url = $_G['setting']['discuzurl'].'/'.$url;
    }
    
    return htmlspecialchars_decode($url);
}

function basic_clean($str)
{
    $str = strip_tags($str);
    $str = to_utf8($str);
    return html_entity_decode($str, ENT_QUOTES, 'UTF-8');
}

function get_user_id_by_name($username)
{
    if (!$username)
    {
        return false;
    }

    $var = "my_get_name_$username";
    if(!isset($GLOBALS[$var])) {
        if($username == $GLOBALS['member']['username']) {
            $GLOBALS[$var] = $GLOBALS['member']['uid'];
        } else {
            global $db, $tablepre;
            $GLOBALS[$var] = $db->result_first("SELECT uid FROM {$tablepre}members WHERE username='$username'");
        }
    }
    return $GLOBALS[$var];
}

function get_user_name_by_id($uid)
{
    if (!$uid)
    {
        return false;
    }

    $var = "my_get_name_$uid";
    if(!isset($GLOBALS[$var])) {
        if($uid == $GLOBALS['member']['uid']) {
            $GLOBALS[$var] = $GLOBALS['member']['username'];
        } else {
            global $db, $tablepre;
            $GLOBALS[$var] = $db->result_first("SELECT username FROM {$tablepre}members WHERE uid='$uid'");
        }
    }
    return $GLOBALS[$var];
}

function get_language()
{
    switch (CHARSET) {
        case 'utf-8':
            include('./lang/lang_utf8.php');
            break;
        case 'big5':
            include('./lang/lang_big5.php');
            break;
        default:
            include('./lang/lang_gbk.php');
    }
}

function is_subscribed($tid, $idtype = 'tid')
{
    global $_G;
    
    if ($_G['uid']) {
        return (DB::result_first('SELECT * FROM '.DB::table('home_favorite')." WHERE uid='$_G[uid]' AND idtype='$idtype' AND id='$tid'")) ? true : false;
    }
    
    return false;
}

function set_fid_tid()
{
    global $_G;
    
    $pid = (isset($_G['gp_pid']) && $_G['gp_pid']) ? $_G['gp_pid'] : ((isset($_G['gp_repquote']) && $_G['gp_repquote']) ? $_G['gp_repquote'] : '');
    
    if($pid)
    {
        $query = DB::query("SELECT fid, tid FROM ".DB::table('forum_post')." WHERE pid='$pid'");
        $result = DB::fetch($query);
        $_G['gp_fid'] = $_GET['fid'] = $result['fid'];
        $_G['gp_tid'] = $_GET['tid'] = $result['tid'];
    }
}