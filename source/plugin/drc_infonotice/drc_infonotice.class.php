<?php

class plugin_drc_infonotice {

    function global_footer() {
        global $_G;
        $var = $_G['cache']['plugin']['drc_infonotice'];
        $radio = $var['radio'];
        $guest = $var['guest'];
        $time = $var['time'] * 1000;
        $groups = unserialize($var['groups']);
        $info = explode("\n", str_replace("\r", '', $var['message']));
        $avatar = $var['avatar'];

        if (empty($_G['uid']) && $guest && $radio) {
            $msg = $_G['setting']['bbname'] . lang('plugin/drc_infonotice', 'guest');
            ;
            $js = <<<EOF
                      <script type="text/javascript">showPrompt(null, null, '$msg', '$time');</script>
EOF;
            return $js;
        }

        if (in_array($_G['groupid'], $groups) && $radio && $_G['uid']) {

            loadcache('profilesetting');
            $profile = $_G['cache']['profilesetting'];
            if ($_G['member']['avatarstatus'] == 0 && $avatar) {
                $msg = $_G['setting']['bbname'] . lang('plugin/drc_infonotice', 'avatar');
                $js = <<<EOF
                      <script type="text/javascript">showPrompt(null, null, '$msg', '$time');</script>
EOF;
                return $js;
            }

            $member = DB::fetch_first("SELECT * FROM " . DB::table('common_member') . " m LEFT JOIN " . DB::table('common_member_profile') . " mp ON m.uid=mp.uid WHERE m.uid='$_G[uid]'");

            foreach ($info as $i) {
                switch ($i) {

                    case 'realname':
                        $name = $profile['realname']['title'];
                        break;
                    
                    case 'gender':
                        $name = $profile['gender']['title'];
                        break;

                    case 'birthyear':
                        $name = $profile['birthyear']['title'];
                        break;

                    case 'birthmonth':
                        $name = $profile['birthmonth']['title'];
                        break;

                    case 'birthday':
                        $name = $profile['birthday']['title'];
                        break;

                    case 'birthprovince':
                        $name = $profile['birthprovince']['title'];
                        break;

                    case 'birthcity':
                        $name = $profile['birthcity']['title'];
                        break;

                    case 'resideprovince':
                        $name = $profile['resideprovince']['title'];
                        break;

                    case 'residecity':
                        $name = $profile['residecity']['title'];
                        break;

                    case 'residedist':
                        $name = $profile['residedist']['title'];
                        break;

                    case 'residecommunity':
                        $name = $profile['residecommunity']['title'];
                        break;

                    case 'taobao':
                        $name = $profile['taobao']['title'];
                        break;

                    case 'site':
                        $name = $profile['site']['title'];
                        break;

                    case 'alipay':
                        $name = $profile['alipay']['title'];
                        break;

                    case 'qq':
                        $name = $profile['qq']['title'];
                        break;

                    case 'field1':
                        $name = $profile['field1']['title'];
                        break;

                    case 'field2':
                        $name = $profile['field2']['title'];
                        break;

                    case 'field3':
                        $name = $profile['field3']['title'];
                        break;

                    case 'field4':
                        $name = $profile['field4']['title'];
                        break;

                    case 'field5':
                        $name = $profile['field5']['title'];
                        break;

                    case 'field6':
                        $name = $profile['field6']['title'];
                        break;

                    case 'field7':
                        $name = $profile['field7']['title'];
                        break;

                    case 'field8':
                        $name = $profile['field8']['title'];
                        break;

                    default:
                        $name = lang('plugin/drc_infonotice', 'err');
                }
                $msg1 = $_G['setting']['bbname'] . lang('plugin/drc_infonotice', 'msg') . '<b>' . $name . '</b> !';
                trim($member[$i]);
                if (empty($member[$i])) {
                    $js = <<<EOF
                      <script type="text/javascript">showPrompt(null, null, '$msg1', '$time');</script>
EOF;
                    return $js;

                    break;
                }
            }
        }
    }

}

?>