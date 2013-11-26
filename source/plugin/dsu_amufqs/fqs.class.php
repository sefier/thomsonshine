<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class plugin_dsu_amufqs {
}

class plugin_dsu_amufqs_forum extends plugin_dsu_amufqs {

	function viewthread_amufqs(){
		global $_G;
		//��ȡ��������
		$this -> invalidfid = unserialize($_G['cache']['plugin']['dsu_amufqs']['fqs_invalidfid']);
		$this -> invalidgid = unserialize($_G['cache']['plugin']['dsu_amufqs']['fqs_invalidgid']);
		$this -> supergid = unserialize($_G['cache']['plugin']['dsu_amufqs']['fqs_supergid']);
		$this -> diving = $_G['cache']['plugin']['dsu_amufqs']['fqs_diving'];
		$this -> death = $_G['cache']['plugin']['dsu_amufqs']['fqs_death'];
		$this -> jump2tid = $_G['cache']['plugin']['dsu_amufqs']['fqs_jump2tid'];
		$this -> refurbish = $_G['cache']['plugin']['dsu_amufqs']['fqs_refurbish'];
		$this -> punish = $_G['cache']['plugin']['dsu_amufqs']['fqs_punish'];
		$this -> extc = $_G['cache']['plugin']['dsu_amufqs']['fqs_extc'];
		$this -> recover = $_G['cache']['plugin']['dsu_amufqs']['fqs_recover'];
		$this -> reward = $_G['cache']['plugin']['dsu_amufqs']['fqs_reward'];
		$this -> probability = $_G['cache']['plugin']['dsu_amufqs']['fqs_probability'];
		$this -> notice = $_G['cache']['plugin']['dsu_amufqs']['fqs_notice'];

		//�������ݵĴ���
		if($this -> refurbish < 0){$this -> refurbish = 0;}
		if($this -> punish < 0){$this -> punish = 1;}
		if($this -> diving < 10){$this -> diving = 10;}
		if($this -> death < $this -> diving){$this -> death = $this -> diving + 5;}

		//�����ж�
		//�Ƿ����UID��TID
		$this -> if2u8tid = 0;
		if( $_G['uid']&&$_G['tid']){$this -> if2u8tid = 1;}
		//�Ƿ�����Ч���
		$this -> if2invfid = 0;
		if(in_array($_G['fid'],$this -> invalidfid)){$this -> if2invfid = 1;}
		//�Ƿ�����Ч�û���
		$this -> if2invgid = 0;
		if(in_array($_G['groupid'],$this -> invalidgid)){$this -> if2invgid = 1;}
		//�Ƿ��ǳ������⼤��û���
		$this -> if2supergid = 0;
		if(in_array($_G['groupid'],$this -> supergid)){$this -> if2supergid = 1;}
		//�Ƿ�����ЧFID��GID
		$this -> if2f8gid = 0;
		if( in_array($_G['fid'],$this -> invalidfid) && in_array($_G['groupid'],$this -> invalidgid) && $this -> if2supergid){$this -> if2f8gid = 1;}

		//COOKIE���ݵ�Ԥ����
		//print_R($_COOKIE);
		$this -> cookie_depth='fqs_depth'.$_G[uid];$this -> cookie_tid='fqs_tid';
		//COOKIE���ݴ���
		if( $_COOKIE[$this -> cookie_depth] ){$this -> depth =$_COOKIE[$this -> cookie_depth];}else{$this -> depth = 0;}
		if( $_COOKIE[$this -> cookie_tid] ){$this -> tid =$_COOKIE[$this -> cookie_tid];}else{$this -> tid = 0;}

		//����������ȵĴ���
		if( $this -> if2u8tid && !$this -> if2supergid && $this -> depth + 1 >= $this -> death && $_G['tid'] != $this -> jump2tid){
			showmessage('dsu_amufqs:4', 'forum.php?mod=viewthread&tid='.$this -> jump2tid );			
		}
	}

	function viewthread_top_output(){
		global $_G;
		$return='';
		if($this -> if2u8tid){
			setcookie($this -> cookie_tid , $_G['tid'] , $_G['timestamp'] + $this -> refurbish);
		}
		//���ʷ��Լ�����
		if($this -> if2u8tid && $_G['uid'] != $_G['forum_thread']['authorid'] && !$this -> if2invfid && !$this -> if2invgid ){
			//����û�����Ϊ��
			if($_G['member']['credits']<0){setcookie($this -> cookie_depth,'0', $_G['timestamp'] + 3600 * $this -> recover );}
			//�ж��Ƿ���ͬһ����
			if($_G['tid'] != $_COOKIE[$this -> cookie_tid]){
				$this -> depth =$this -> depth + 1;
				//���Ǳˮ�����ʵ����ȵĲ��
				$this -> margin = $this -> diving - $this -> depth;

				if( 0 < $this -> margin && $this -> margin <= 5 && $_G['tid'] != $this -> jump2tid ){
					$return = '<script type="text/javascript">setTimeout(function () {showPrompt(null, null, "'.$_G['cache']['plugin']['dsu_amufqs']['fqsp_diving'].'( '.$this -> margin.' )", 5000);},1);</script>';
				}elseif( $this -> margin < 1 && $_G['tid'] != $this -> jump2tid ){
					$tys = diconv($_G['cache']['plugin']['dsu_amufqs']['fqsp_punish'] ,CHARSET, "UTF-8");
					updatemembercount($_G[uid], array("extcredits{$this -> extc}" => -$this -> punish ), true,'',0,$tys);
					//������������ʵ����ȵĲ��
					$this -> margin = $this -> death - $this -> depth;
					//echo $this -> margin ;
					if( 0 < $this -> margin && $this -> margin < 4 && !$this -> if2supergid ){
						$tsy = $_G['cache']['plugin']['dsu_amufqs']['fqsp_death'].'( '.$this -> margin.' )';
						$return = '<script type="text/javascript">setTimeout(function () {showDialog(\''.$tsy.'\', \'notice\', \''.lang("plugin/dsu_amufqs","1").'\', null, 0);},300);</script>';
					}
				}
			}
			setcookie($this -> cookie_depth , $this -> depth , $_G['timestamp'] + 3600 * $this -> recover );

		}
		//���Դ���
//		if($this -> if2u8tid && $_G['uid'] == $_G['forum_thread']['authorid']){
//			echo '<BR><BR><BLOCKQUOTE>�������á���ǰǱˮ��ȣ�'.$this -> depth.'(�����Լ����Ӳ������)|�ϴ����������tidΪ��'.$this -> tid.'</BLOCKQUOTE>';
//		}elseif($this -> if2u8tid && $this -> if2f8gid){
//			echo '<BR><BR><BLOCKQUOTE>�������á���ǰǱˮ��ȣ�'.$this -> depth.'(��������û������⣬�������)|�ϴ����������tidΪ��'.$this -> tid.'</BLOCKQUOTE>';
//		}else{
//			echo '<BR><BR><BLOCKQUOTE>�������á���ǰǱˮ��ȣ�'.$this -> depth.'|�ϴ����������tidΪ��'.$this -> tid.'</BLOCKQUOTE>';
//		}
		return $return;
	}

	function post_output(){
		global $_G,$pid,$extra,$page,$thread;

		$this -> extc = $_G['cache']['plugin']['dsu_amufqs']['fqs_extc'];
		$this -> recover = $_G['cache']['plugin']['dsu_amufqs']['fqs_recover'];
		$this -> reward = $_G['cache']['plugin']['dsu_amufqs']['fqs_reward'];
		$this -> probability = $_G['cache']['plugin']['dsu_amufqs']['fqs_probability'];
		$this -> notice = $_G['cache']['plugin']['dsu_amufqs']['fqs_notice'];
		//COOKIE���ݵ�Ԥ����
		//print_R($_COOKIE);
		$this -> cookie_depth='fqs_depth'.$_G[uid];$this -> cookie_tid='fqs_tid';
		//COOKIE���ݴ���
		if( $_COOKIE[$this -> cookie_depth] ){$this -> depth =$_COOKIE[$this -> cookie_depth];}else{$this -> depth = 0;}
		if( $_COOKIE[$this -> cookie_tid] ){$this -> tid =$_COOKIE[$this -> cookie_tid];}else{$this -> tid = 0;}

		$tid = $_G['tid'];
		$hsm = $_G['hookscriptmessage'];
		$url = "forum.php?mod=redirect&goto=findpost&ptid=$thread[tid]&pid={$pid}";
		if (strstr($hsm,'post_reply_succeed')){			
			setcookie($this -> cookie_depth , '0' , $_G['timestamp'] + 3600 * $this -> recover );
			$kkk = rand(0,100);
			$jjj = rand(1,$this -> reward);
			$url = $_G["siteurl"].$url;
			$url = '<A HREF="'.$url.'">'.$url.'</A>';
			if($kkk < $this -> probability && $this -> extc){
				 $tys = diconv($_G['cache']['plugin']['dsu_amufqs']['fqsp_reward'] ,CHARSET, "UTF-8");
				 updatemembercount($_G[uid], array("extcredits{$this -> extc}" => $jjj), true,'',0,$tys);
				 if($this -> notice){
					 $reward = $_G['setting']['extcredits'][$this -> extc]['title'].'+'.$jjj;
					 notification_add($_G['uid'], 'amufqs', lang('plugin/dsu_amufqs','5',array('reward' => $reward,'url' => $url)), '', 1);
				 }
			}
		}
	}

}