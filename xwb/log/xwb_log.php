
<?php  die('access deny!'); ?> 

2011-02-13 11:05:46	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=714434df68daed35a1b660bbf13829ad&oauth_signature=WRhaobgWBKZeWJu2xEp8YI31xqo%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1297566346&oauth_token=7deed1c087925477ad2fa89444115ec3&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-02-13 21:12:15	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=f3ff8058ca86a3a591d042589996884a&oauth_signature=pSGQ8I0bPfpD9P1AQeY0i9GoHwc%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1297602695&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [HTTP/1.1 503 Service Unavailable
Server: Varnish
Retry-After: 0
Content-Type: text/html; charset] => utf-8
Content-Length: 486
Date: Sun, 13 Feb 2011 13:03:15 GMT
X-Varnish: 63720129
Age: 20
Via: 1.1 varnish


<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>503 Service Unavailable</title>
  </head>
  <body>
    <h1>Error 503 Service Unavailable</h1>
    <p>Service Unavailable</p>
    <h3>Guru Meditation:</h3>
    <p>XID: 63720129</p>
    <hr>
    <address>
       <a href="http://www.varnish-cache.org/">Varnish cache server</a>
    </address>
  </body>
</html>

)

2011-02-14 11:36:46	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=247a850d046450454ec396744ec176ad&oauth_signature=0z85Cr9InP5yrY9rZ1HJKSYi%2BMQ%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1297654606&oauth_token=46c976eef248dc40716dda020f25a49b&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-02-15 16:49:17	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=5c6e43dda95b749e1c4b1c5a1a967d95&oauth_signature=0C0koYAyTWZHpQKIvyhl4TZt1CA%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1297759715&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [HTTP/1.1 200 OK
Pragma: No-cache
Cache-Control: no-cache
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Content-Type: text/plain;charset] => UTF-8
Content-Length: 96
Server: weibo
Date: Tue, 15 Feb 2011 08:40:02 GMT
X-Varnish: 1868123651
Age: 0
Via: 1.1 varnish

oauth_token=d377d5b6a07c1b7c2b2089d00423fdca
    [oauth_token_secret] => bfa79cfcdfd9365c24867b81989dac15
)

2011-02-15 23:27:14	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=5230ca408738b5a9770def685709e4ef&oauth_signature=0DCATpeQA%2Fx6YwmwjUuVT3rA5Nk%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1297783634&oauth_token=d8c4f45bd410d71ad43f69d6624ebebe&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-02-16 09:14:03	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=81750d4690748042632e754e63c462e7&oauth_signature=R35qTHDTKOhCcUrIPUnGzgPk4Ws%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1297818843&oauth_token=3c102545784f9db775ff207cfca34f52&oauth_verifier=420254&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-02-16 09:14:14	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=23e410d4017ab74e785c98a4dbe391fa&oauth_signature=u8Vn7pujyVHNmlyu%2B05kNJto294%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1297818854&oauth_token=3c102545784f9db775ff207cfca34f52&oauth_verifier=420254&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-02-16 10:02:08	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=1a50ae374a14fdaeb9ce69be3f465136&oauth_signature=oTViB1c2PRFT9QOmjR%2FheAE344Y%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1297821728&oauth_token=7a0a431354d81a0b73094f8fbd6f9640&oauth_verifier=427780&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-02-16 14:48:28	[WEIBO CLASS]	[ERROR]	#1	错误:consumer_key不合法!	http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=b34d66437c80e61e999f65ed97651cd0&oauth_signature=oF3oC7Xw2uPM13SpsFDiZlH7at4%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1297838906&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/request_token
    [error_code] => 401
    [error] => 40109:Oauth Error: consumer_key_refused!
    [error_CN] => 错误:consumer_key不合法!
)

2011-02-16 16:06:01	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=75fae35ab82f3b7d9b3e86ad1bbf3117&oauth_signature=EttgvoEeCRypR5r5c%2FlTlX5dsUc%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1297843556&oauth_token=b13f32e1ec0cb345f297e2737ef4a9c9&oauth_verifier=550101&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40113:Oauth Error: token_rejected!
    [error_CN] => 错误:Token不合法!
)

2011-02-16 16:06:36	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=fc19d34bd733c2f242241401b833ebd4&oauth_signature=2tNZH2qcAbPdmAhA8%2F%2BIvi9anFI%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1297843596&oauth_verifier=550101&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40113:Oauth Error: token_rejected!
    [error_CN] => 错误:Token不合法!
)

2011-02-16 16:06:37	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=306a632745b0458706ce6c4d9bb35363&oauth_signature=PfyBlSO4L0Q%2FS3x3c1H1gKXyL7k%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1297843597&oauth_verifier=550101&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40113:Oauth Error: token_rejected!
    [error_CN] => 错误:Token不合法!
)

2011-02-17 18:10:07	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=4e267a5b21a39e8747255c1ad0ffa626&oauth_signature=bc5%2FqrUPYkH%2BPmkINHDqKdZNPaI%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1297937407&oauth_token=7157d440c515e37d63dfd30138fc8bd6&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-02-17 20:30:53	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=4087f864d9f518c53b03bd0cfb04fd9a&oauth_signature=89jioJQp8X7CuwDSROJvQ7tNGCM%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1297945853&oauth_token=0fd22f3ab85fd2fde938c6c2b7e05091&oauth_verifier=853692&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-02-17 20:31:58	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=3f8df6c9fc6871374166a7241f0cee44&oauth_signature=hDUcGOy1qkCE189dWj4Repurbt0%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1297945918&oauth_token=0fd22f3ab85fd2fde938c6c2b7e05091&oauth_verifier=853692&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-02-17 20:31:58	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=bb0dd55bb6459ef800756f59a471feda&oauth_signature=nzVBu6vK2ZFsOs5NMNaUR45EsMc%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1297945918&oauth_token=0fd22f3ab85fd2fde938c6c2b7e05091&oauth_verifier=853692&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-02-18 18:06:11	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=373c26577f97539a9a6e5f79a07e7afb&oauth_signature=kGp3md%2Boo8xskEYgXm91Gt%2F9OaI%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1298023571&oauth_token=d6a778ddc1fa91a250821c8e68f11fc2&oauth_verifier=450046&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-02-19 08:30:36	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=a0a5ae7ceca63dc9dea6f116659c24ce&oauth_signature=%2B24%2FFCIOzQZr9J%2Fef2wPAPfDb3w%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1298075436&oauth_token=40ecb6199f8415ccd2cdede8ec22d44e&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 400
    [error] => 40022:Error: source paramter(appkey) is missing
)

2011-02-20 17:00:57	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=625ef40d41f7d18be2611f8139147ebe&oauth_signature=4kqcZ08WCIZiQIZHTjakwGNPHHg%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1298192457&oauth_token=31a5d6cb4e5ebc15fb93fa75c1329e6f&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 400
    [error] => 40022:Error: source paramter(appkey) is missing
)

2011-02-20 17:01:52	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=0149903115ca2ed7e8eae610914641aa&oauth_signature=GXrLq75wIN9iTnlqLJ4er%2BEOLwg%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1298192512&oauth_token=31a5d6cb4e5ebc15fb93fa75c1329e6f&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 400
    [error] => 40022:Error: source paramter(appkey) is missing
)

2011-02-20 17:05:34	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=19acac8c531c60a71e3b80fbcbf4514e&oauth_signature=tEfeCpKUJ9uZpzgN9Gq9h%2BM2%2FKM%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1298192734&oauth_token=31a5d6cb4e5ebc15fb93fa75c1329e6f&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 400
    [error] => 40022:Error: source paramter(appkey) is missing
)

2011-02-20 17:22:08	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=10b0868332b32e3b639001454ff45858&oauth_signature=KkSHQCY7iMeiTLRit2Ebw5k%2BX4Q%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1298193728&oauth_token=444e7e9619733fadfa43f8668692b05a&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-02-20 21:30:58	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=28ec0af31884846c414df5f62d14d2e2&oauth_signature=EvNBj9GH%2B3XxHMaYzDcP9MJhGcI%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1298208658&oauth_token=464a7b67851d862ca9aa7ba40fe7f92d&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-02-21 17:13:56	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=2f2b258574274690fd825b990e01e904&oauth_signature=d6%2BSA1m81qkDSvBaHS%2BCbKV0UGM%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1298279636&oauth_version=1.0a	ERROR ARRAY:
Array
(
)

2011-02-21 23:28:07	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=574f629c8c55f98477b475f778d6a485&oauth_signature=hQRRbBPvyjG2HwYoAgotvDEyGs8%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1298302087&oauth_token=cb7b6a74648bc589fe3ef0ed6117a24f&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-02-22 12:40:32	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=084c682a68e716a6533578c34017c96a&oauth_signature=PbcjCmr0a%2FbE7A2BwEuCCQAWC9o%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1298349632&oauth_token=3e16c8b48fe20118a9a693a0e7cfa235&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-02-22 16:35:48	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=b518ab5d77514b0d2e0755e4d9a74f9b&oauth_signature=p%2BQJu4V2DAd1xMtW8k0EqsEq7%2Fc%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1298363702&oauth_token=a301c54d14688d171e73ecd14d69487a&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => HTTP/1.1 200 OK
Pragma: No-cache
Cache-Control: no-cache
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Content-Type: application/json;charset=UTF-8
Content-Length: 886
Server: weibo
Date: Tue, 22 Feb 2011 08:26:15 GMT
X-Varnish: 2150345952
Age: 0
Via: 1.1 varnish

{"id":1834255180,"screen_name":"手机用户1834255180","name":"手机用户1834255180","province":"14","city":"4","location":"山西 长治","description":"","url":"","profile_image_url":"http://tp1.sinaimg.cn/1834255180/50/1292919151/1","domain":"","gender":"m","followers_count":1,"friends_count":1,"statuses_count":13,"favourites_count":0,"created_at":"Wed Sep 29 00:00:00 +0800 2010","following":false,"allow_all_act_msg":false,"geo_enabled":true,"verified":false,"status":{"created_at":"Sun Feb 13 21:38:02 +0800 2011","id":6349205631,"text":"这是一个很有用的网站，推荐给大家 http://sinaurl.cn/GfeUS","source":"<a href=\"http://www.sina.com.cn\" rel=\"nofollow\">新浪网内容分享</a>","favorited":false,"truncated":false,"in_reply_to_status_id":"","in_reply_to_user_id":"","in_reply_to_screen_name":"","geo":null,"mid":"2311102132178871628","annotations":[]}}
    [error_code] => -1
)

2011-02-23 20:23:44	[WEIBO CLASS]	[ERROR]	#1	错误:consumer_key不合法!	http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=15889e84e7430158b139ba6ba4940385&oauth_signature=mFQkdg%2BprtiZy3j0Z1ytD%2BiKbic%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1298463822&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/request_token
    [error_code] => 401
    [error] => 40109:Oauth Error: consumer_key_refused!
    [error_CN] => 错误:consumer_key不合法!
)

2011-02-24 13:07:00	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=a679d35b43b4f3d597df2ed1c4409810&oauth_signature=LLVGe2yoGXZqcSQpMKol2slOxRQ%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1298524020&oauth_token=b05f08b9f5a85a4db194d303f1a2821e&oauth_verifier=684472&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-02-24 13:21:49	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=85f6b7d532595643549e97406e444268&oauth_signature=LKaWMc5Ef20U9cMJH27AbJJtOoM%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1298524909&oauth_token=c8b86eda6397afa974c4a9e0e1400028&oauth_verifier=836853&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-02-24 17:52:55	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=db5fb49dddda8b997cbf9338a2ab3618&oauth_signature=ACjOIdRbITVpNDszhuXkQ3JIXOo%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1298541175&oauth_token=b1bc11fd4edce1cab04dca240baa1b7e&oauth_verifier=860913&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-02-24 23:34:32	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=d4ffeec778a8ac8a3412d3d1ea75432c&oauth_signature=Z1qEU9C3kpWw9a2lyMT5Y717ZKE%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1298561672&oauth_token=f9f0af6542a251eed2011bb3ce7c93c9&oauth_verifier=575357&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-02-25 09:56:50	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=3fd0bfd20ad52d37e9b7677d116aea1a&oauth_signature=KVES0FerGVibWJ6LUHXPa0x8PSs%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1298598967&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [HTTP/1.1 503 Service Unavailable
Server: Varnish
Retry-After: 0
Content-Type: text/html; charset] => utf-8
Content-Length: 488
Date: Fri, 25 Feb 2011 01:47:30 GMT
X-Varnish: 1037216484
Age: 20
Via: 1.1 varnish


<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>503 Service Unavailable</title>
  </head>
  <body>
    <h1>Error 503 Service Unavailable</h1>
    <p>Service Unavailable</p>
    <h3>Guru Meditation:</h3>
    <p>XID: 1037216484</p>
    <hr>
    <address>
       <a href="http://www.varnish-cache.org/">Varnish cache server</a>
    </address>
  </body>
</html>

)

2011-02-25 17:37:19	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=48785e8a2df80d456396ffdf454883a6&oauth_signature=fPckuLNO0bQzqiFkTrPs72VM7hk%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1298626639&oauth_token=4d7ddc6b6c0417b25c33d8b4c583f757&oauth_verifier=158086&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [<html><body>
The server returned an invalid or incomplete response.<br>
please try again later.<br>
</body></html>

] => 
)

2011-02-25 17:37:26	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=e758a8ab8f82e65d0fa441206fe35156&oauth_signature=sX5wOzxk%2F3AeNrxJeIfY4dsz2Y0%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1298626646&oauth_token=4d7ddc6b6c0417b25c33d8b4c583f757&oauth_verifier=158086&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-02-26 22:20:19	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=fed05a6f7411050f9007f8f28146e8dc&oauth_signature=%2FHQxNob1WCNqwNME4FGd%2BpTV9Ug%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1298730019&oauth_token=595b441b2d5ef0c8298a80aeb0a26d2f&oauth_verifier=575962&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-02-28 13:53:32	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=6f3d9c4156a383aec96ae4a165b5c9e4&oauth_signature=%2BNgHRpsgDkHrL2D%2FHyCXB270vvc%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1298872412&oauth_token=2ba37abf543d8391090f8cbe3ee87e91&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-03-03 12:02:03	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=052e4f82c0d2d6b1b5c51beabb78f629&oauth_signature=NA0wQVaZ2ibxYLgNjE0LFRweK70%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1299124923&oauth_token=50bebc60806ac1c93b530cc51e92ea0d&oauth_verifier=342636&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-03-03 21:26:05	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=8e6fb4522de3fb5f15fc72ec017da2e1&oauth_signature=X9Jxy8oBZeZxb6O5xohT%2FV4hM38%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1299158765&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [<html><body>
The server returned an invalid or incomplete response.<br>
please try again later.<br>
</body></html>

] => 
)

2011-03-04 17:39:21	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=c46bf12c63cd7efbe17fabd64b6736cb&oauth_signature=0MddWsof8CdPTuLJUpo%2BysF7hmU%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1299231500&oauth_version=1.0a	ERROR ARRAY:
Array
(
)

2011-03-04 20:38:41	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=5388c0587f9f70c98e251526fdfb1a76&oauth_signature=%2BIWmMq6znSjD1rpliN04msIR4ak%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1299242321&oauth_token=449987d42af8ccf805be603220a3fefa&oauth_verifier=814070&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-03-06 15:51:07	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=c8a67ed980ac294f17555b496d2b98de&oauth_signature=KGifnBIbT%2FJ8OlMLvPqGDsrZTS0%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1299397867&oauth_token=132a79d500c1f9d6a2b8bc705aa55512&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-03-06 20:14:37	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=8d2199fb3f0af981ce7c6b99bb812b59&oauth_signature=%2BA4lwvRB2VPtzUtyk3YY6b5gzm8%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1299413677&oauth_token=3b003a9bbc1b9c3af2045f4ed42719a6&oauth_verifier=330837&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-03-06 20:56:15	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=82be4d7588edf5d7a4daef9ee7530770&oauth_signature=U6ieCQF1c%2FdKRuc%2FZyLMtTDs7bw%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1299416132&oauth_token=ccae3af80b64c70f8797a303c97dad61&oauth_verifier=701806&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [HTTP/1.1 200 OK
Pragma: No-cache
Cache-Control: no-cache
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Content-Type: text/plain;charset] => UTF-8
Content-Length: 115
Server: weibo
Date: Sun, 06 Mar 2011 12:46:35 GMT
X-Varnish: 2396238921
Age: 0
Via: 1.1 varnish

oauth_token=3dd0bd6e469eea80e441fb50f6ec1e04
    [oauth_token_secret] => 0604cd66258e0fe80487621c1202f07d
    [user_id] => 1911083895
)

2011-03-07 14:52:42	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=4e10f77083cb27d76f4b395eb4f69796&oauth_signature=FwVPdxUKhYYvdBVp0ej2gzHq2Xs%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1299480757&oauth_token=8f61cbeb453c4abf3e1cc2a36ed4310b&oauth_verifier=382372&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-03-08 15:58:09	[WEIBO CLASS]	[ERROR]	#1	错误:consumer_key不合法!	http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=8c1b2b834c201420f18b3c5d30a0d116&oauth_signature=DCNmk5OWVgl4wdofkPowd5w6Vzw%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1299571086&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/request_token
    [error_code] => 401
    [error] => 40109:Oauth Error: consumer_key_refused!
    [error_CN] => 错误:consumer_key不合法!
)

2011-03-10 21:54:52	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=fea26c037de2d5e1d2ae9b7523a53980&oauth_signature=93CjYzPrXwSNVgKpnU1ENRV6%2FzI%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1299765269&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [HTTP/1.0 503 
Cache-Control: no-cache
Connection: close
Content-Type: text/html

<html><body><h1>
No server is available to handle this request <br>
please try again later<br>
</body></html>

] => 
)

2011-03-11 16:40:15	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=233a7a646938bacd26bdbf3aaf1aaeb4&oauth_signature=Ra8KaXIJ4qjf8GaK05HzCVmQc%2B8%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1299832814&oauth_token=eca17cf484861e78dd102edc88874c32&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-03-12 17:23:30	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=07e8671d41ae4b18a5bdf2a5c567aadb&oauth_signature=c3XrTdh4mJXt%2FwTcWbYc5qhsyTg%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1299921810&oauth_token=8e6cb50aed91c602741ee0c2fe1b9b4a&oauth_verifier=760230&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-03-13 10:25:04	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=36be4d1ff32c66be5618b4454197d92c&oauth_signature=ZQxNpelXvrZ6%2F%2FSSa8XWfgj3YjA%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1299983104&oauth_token=dc5518fed589a73e979ed548af4c528c&oauth_verifier=552952&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-03-13 10:42:28	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=0d2a3308c46c878fc2f78aabe5426a3a&oauth_signature=F%2FWxhxKVjsdwLyLV6fmGBeKK%2B3E%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1299984148&oauth_token=c593ed9a0e7cd1b46c1e63dea1f2b355&oauth_verifier=446684&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-03-14 22:06:33	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=6a037e23a61eae89ebe4efabb37ec432&oauth_signature=3CUMZYEEXgbr87cRHLuCVh0WA4M%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300111593&oauth_token=66e783f5cdc1e80131f874e09ff9b191&oauth_verifier=295796&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [<html><body>
The server returned an invalid or incomplete response.<br>
please try again later.<br>
</body></html>

] => 
)

2011-03-15 18:33:29	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=b19111109838825bd5c62c5299a7bac5&oauth_signature=XW4RAQqE1oC9zJE7CD3Y9PKmG14%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300185209&oauth_token=a45adc62d7c3993730a4919dbd3fd517&oauth_verifier=247034&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-03-15 21:27:38	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=7ddc385737eec35a3566299f2a7f91b9&oauth_signature=OU1G1l2R65MJF8mOdZBSt5m92jc%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300195658&oauth_token=1cfd41174e33d4ab0c7863586e3b745d&oauth_verifier=157184&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-03-16 07:04:11	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=76e4621bee7d20f0875df3349d858bd0&oauth_signature=oSvOcqFyqrPAccXoFfE4ImW5ExU%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300230251&oauth_token=a50759db23eb9996decd4ef715958a0f&oauth_verifier=556874&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-03-16 10:42:26	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=6fcffd2086504fa7e85ffd062aa27db4&oauth_signature=FOp630N%2BBF5%2FZdlrxm5%2Bbg4FPEo%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300243346&oauth_token=a50759db23eb9996decd4ef715958a0f&oauth_verifier=184155&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-03-16 15:50:10	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=a5c1e4d5230f37a29d48c1e180dfa779&oauth_signature=3BNA2YalmfefyGexlGC2%2BbhqLrk%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300261810&oauth_token=43d9dc07455910e17c3c39c8789cfa85&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-03-17 12:01:52	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=52d66f39ec71fde205b1f6b9db79dadb&oauth_signature=ozlqh%2BEOwZlOe%2FD%2B%2FIhNt7PKSnQ%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300334512&oauth_token=f252cc0cb67e5878ee5619b8944fd26b&oauth_verifier=526969&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-03-17 12:01:57	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=94277bfbecdf98584869bbb93dec13cb&oauth_signature=o7rmrLEmRbz7002Rldbv%2BkbB0C0%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300334517&oauth_token=f252cc0cb67e5878ee5619b8944fd26b&oauth_verifier=858545&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-03-17 13:00:41	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=6ab580b9614a7a0a99bda2c45064f023&oauth_signature=5cWgLgD5FqxZWAOL73DoDgqiw8o%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300338041&oauth_token=124e5453768439378e2c1a85c609131a&oauth_verifier=544348&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-03-17 13:00:58	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=cbc86eb8c027688977592ca493f72670&oauth_signature=AXSdT8OaZ4sEzw1mLCKAm8V55rM%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300338058&oauth_token=124e5453768439378e2c1a85c609131a&oauth_verifier=269872&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-03-18 15:20:21	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=373656bd62de5aa182f32f628376cecb&oauth_signature=IqsmkqX2bbFkwt%2BYHRGWGn8TsCo%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300432821&oauth_token=a14ff971f07ca0a89d37259cdb59c7e6&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => <html><body>
The server returned an invalid or incomplete response.<br>
please try again later.<br>
</body></html>


    [error_code] => 502
)

2011-03-18 15:20:50	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=921d49ad1804229748e6e80fbee439c2&oauth_signature=aMbL37PH4OdztvswOJRV%2BR4xT9k%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300432850&oauth_token=a14ff971f07ca0a89d37259cdb59c7e6&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => <html><body>
The server returned an invalid or incomplete response.<br>
please try again later.<br>
</body></html>


    [error_code] => 502
)

2011-03-18 15:20:55	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=e7b1efbd95bbb6a63fc2f17855c2b3c9&oauth_signature=LAHRJ%2BKrbZpQ2qPcJh4KSkP3kFo%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300432855&oauth_token=a14ff971f07ca0a89d37259cdb59c7e6&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => <html><body>
The server returned an invalid or incomplete response.<br>
please try again later.<br>
</body></html>


    [error_code] => 502
)

2011-03-18 15:20:56	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=01d8d3705367942911676a9b81f31647&oauth_signature=MUzUsMVMk3UwTguBC2zVhnwfUOo%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300432811&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [HTTP/1.1 200 OK
Pragma: No-cache
Cache-Control: no-cache
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Content-Type: text/plain;charset] => UTF-8
Content-Length: 96
Server: weibo
Date: Fri, 18 Mar 2011 07:10:37 GMT
X-Varnish: 1482596572
Age: 0
Via: 1.1 varnish

oauth_token=62dc944357d1371faf008e53e0d77533
    [oauth_token_secret] => 4efbcd924ddbbb3be826e88309229867
)

2011-03-18 15:21:13	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=948864bc478ffa1b71d21bc71d7c8912&oauth_signature=cy71zOf%2BptY9xj2eZZiux9HN8NQ%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300432827&oauth_token=a14ff971f07ca0a89d37259cdb59c7e6&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => HTTP/1.1 200 OK
Pragma: No-cache
Cache-Control: no-cache
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Content-Type: application/json;charset=UTF-8
Content-Length: 883
Server: weibo
Date: Fri, 18 Mar 2011 07:10:53 GMT
X-Varnish: 2218720245
Age: 0
Via: 1.1 varnish

{"id":1970005065,"screen_name":"dingdaojiafei","name":"dingdaojiafei","province":"21","city":"2","location":"辽宁 大连","description":"","url":"","profile_image_url":"http://tp2.sinaimg.cn/1970005065/50/0/1","domain":"","gender":"m","followers_count":5,"friends_count":60,"statuses_count":1,"favourites_count":0,"created_at":"Wed Feb 16 00:00:00 +0800 2011","following":false,"allow_all_act_msg":false,"geo_enabled":true,"verified":false,"status":{"created_at":"Fri Mar 11 14:38:06 +0800 2011","id":7356895479,"text":"我刚刚在赶集网发布的信息：出租麦哈顿公寓，帮我多多转发吧！ http://sinaurl.cn/htu9zs","source":"<a href=\"http://www.ganji.com\" rel=\"nofollow\">赶集网</a>","favorited":false,"truncated":false,"in_reply_to_status_id":"","in_reply_to_user_id":"","in_reply_to_screen_name":"","geo":null,"mid":"20111031138173723","annotations":[]}}
    [error_code] => -1
)

2011-03-18 15:49:26	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=713500223ffd29e56c28b197920dab9a&oauth_signature=aQJ34kn%2FhNkdhWeVYDQi3Nb%2FFjA%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300434566&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [
<?xml version] => "1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>503 Service Unavailable</title>
  </head>
  <body>
    <h1>Error 503 Service Unavailable</h1>
    <p>Service Unavailable</p>
    <h3>Guru Meditation:</h3>
    <p>XID: 1044804241</p>
    <hr>
    <address>
       <a href="http://www.varnish-cache.org/">Varnish cache server</a>
    </address>
  </body>
</html>

)

2011-03-18 16:52:35	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=6a60a326cf0a67e9355f8496d20ee998&oauth_signature=npgCgnkxczMYjLwp%2BMsxwdzl6qE%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300438355&oauth_token=222b353dea427bba006b92fe04b054b2&oauth_verifier=337283&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-03-18 20:33:21	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=1ecd6223b96a721f45a05ad08e0c5df3&oauth_signature=Cv9osLDG0JZUboafbAEEmgUF4M8%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300451598&oauth_token=2f339c0c03c8b36c53f49e91f66594a1&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-03-18 21:05:58	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=ef438f2ee9fd8505237378a40bbd8f97&oauth_signature=ik%2BmXxH4vMeetbwHnb6XxaoYa%2BE%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300453558&oauth_token=690eb1b4931d7d977048be785e01c718&oauth_verifier=799825&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-03-20 14:47:14	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=b3a4f09691b40324aedd4fd053a83b56&oauth_signature=D3jATu8k6BYxp4FBiuW4q9CIV8g%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300603634&oauth_token=d40f43b7eac88c708b367b4098eecb67&oauth_verifier=505357&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-03-20 14:47:22	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=c27687169bf343083b51eb426be2279f&oauth_signature=f11xHsIEFuVxHfYs9eQq4RvCxvg%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300603642&oauth_token=d40f43b7eac88c708b367b4098eecb67&oauth_verifier=505357&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-03-21 16:03:31	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=c545992c54e1065fedfd2deef781e024&oauth_signature=H%2BL%2FkHTflDH7ISld9F05lbwUoP8%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300694611&oauth_token=406f7dd33cf3bbf5c941f4dd8e495830&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-03-21 16:07:31	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=be98fdb25424322ca9c0d0fc27d929b9&oauth_signature=RgjLxam%2F8FXfk%2FwOGwzsR6LHjE4%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300694851&oauth_token=406f7dd33cf3bbf5c941f4dd8e495830&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-03-21 20:52:49	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=597dfcc0eaef709afbee6ed53643c2bb&oauth_signature=zSZ17aD8%2BNMMWAXYpyAG5yXCaxc%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300711929&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [HTTP/1.1 200 OK
Pragma: No-cache
Cache-Control: no-cache
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Content-Type: text/plain;charset] => UTF-8
Content-Length: 96
Server: weibo
Date: Mon, 21 Mar 2011 12:42:21 GMT
X-Varnish: 428373337
Age: 0
Via: 1.1 varnish

oauth_token=4a54965c56325b5e15aa56405743495b
    [oauth_token_secret] => 1e15916de02c88a8d1f6677eaafae0d5
)

2011-03-22 10:26:39	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=100a0d1f84995d515d3c718fe1cd6739&oauth_signature=ztyRXoPJgAx4MZB071i3Dh9UURE%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300760799&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [<html><body>
The server returned an invalid or incomplete response.<br>
please try again later.<br>
</body></html>

] => 
)

2011-03-23 15:23:13	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=5eb4e245d2a97610e2fcc02efad84c73&oauth_signature=6yG3J6X7nUVsTiib9Shn%2F87w8cM%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300864993&oauth_token=4649f136b4279b52c69b0f5aa96915f2&oauth_verifier=217960&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-03-24 18:10:57	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=5aa93d955000bc374319e4dd9a2e0de3&oauth_signature=ZLGzu7LMEFVGpMPeJ6MUGgDqQdQ%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1300961451&oauth_token=8dd62b423efc2fd2caac8ce69a407f84&oauth_verifier=310902&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-03-25 19:07:26	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=bede52e3657b24a4a676a4a175a51d8c&oauth_signature=VfMigRifgoS%2FCBmh%2B36FTj%2Fl0yA%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301051246&oauth_token=e91af29561b101ed734324b1bac69f36&oauth_verifier=731735&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-03-25 22:52:43	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=e1836c07a77c8e89f6a49eab4a51d981&oauth_signature=weETQuV9%2Fah%2BR1w6J6jrRQlkalc%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301064763&oauth_token=766ab167618781f26f1c58ee89d66cf6&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-03-25 22:53:19	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=0f07603d7c6368c181de1596e36ce365&oauth_signature=c30zcgKkUi%2BKZ2GmNGDQJp4A4nw%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301064799&oauth_token=6dbee86fd80c1e609d73f4f8df6fbc09&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-03-26 11:05:11	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=50626c9774807b20de8cb2f8cefdd0a2&oauth_signature=cTjGRBg8Hdgo85TwmowMmQAtn4U%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301108711&oauth_token=b4c95c73fb3033e3470293fe19f7a24d&oauth_verifier=640556&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-03-26 19:46:58	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=cc767e44eb12cc3ff02fc66745cf50e7&oauth_signature=W%2F%2FQiY4UNjyLu6EntEh3WItewTQ%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301140018&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [<html><body>
The server returned an invalid or incomplete response.<br>
please try again later.<br>
</body></html>

] => 
)

2011-03-27 00:11:20	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=d4e4a90318028832e148a04bb74bdf58&oauth_signature=xNWQTBAk%2F8%2F03hyRnaF%2Bq1JJBX4%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301155880&oauth_token=3a8d716f82f3ae1450036b9db50bc292&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-03-27 18:30:17	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=c9d3cb18493216dc53a993134e217289&oauth_signature=e7EyTrXKs52c5Mbf54UC0mh7bQM%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301221817&oauth_token=4c76969c3edc89e79bb33ca3364faace&oauth_verifier=259215&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-03-27 21:58:16	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=b322377ca74589c8eb39d74b20bc7a0e&oauth_signature=Wliu4DCPW6Y2oeHJ8fTB7inZjgE%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301234296&oauth_token=7658f267ae91e3c18475c3bdb3b99d88&oauth_verifier=401386&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-03-28 08:53:12	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=630c782cdbd485cd16ec30724aa721e2&oauth_signature=3EOzwQUozwK4L05FJAct448Jd7A%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301273592&oauth_token=6e747dbc57e8a574590682d2c1409802&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-03-28 21:28:00	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=d4088dac2e81130c25cb6f42fda00966&oauth_signature=5Kwq6xVTXRTACd9cWT2EHGlPy50%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301318880&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [<html><body>
The server returned an invalid or incomplete response.<br>
please try again later.<br>
</body></html>

] => 
)

2011-03-28 21:28:17	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=57112ecdacc3e9118aed1347d3aec775&oauth_signature=BGAp8O2GHifeF%2ByT8R6R2ylthng%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301318883&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [HTTP/1.0 502 
Cache-Control: no-cache
Connection: close
Content-Type: text/html

<html><body>
The server returned an invalid or incomplete response.<br>
please try again later.<br>
</body></html>

] => 
)

2011-03-29 17:54:39	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=709ccc217ed19a1a9d3fd730cb4db325&oauth_signature=KNyFu9wCW4lxdAe1%2B1Z8bDGpzJU%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301392479&oauth_token=309ebfc9935942cf07e77519b551d992&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-03-30 01:13:23	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=51c7ad003f7fae80a0ed47e8f7604971&oauth_signature=l01I20MEgikK43r5k%2FfZTaql%2F2I%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301418803&oauth_token=5c11d40bb48209f46c884fe16a4e17cd&oauth_verifier=380935&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-03-31 12:42:33	[WEIBO CLASS]	[ERROR]	#0		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=5536ba96b07cfdaebd301b7117dabb58&oauth_signature=agRqCKbEequBB5QLNYgTHg7789M%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301546553&oauth_version=1.0a	ERROR ARRAY:
Array
(
)

2011-03-31 12:47:00	[WEIBO CLASS]	[ERROR]	#0		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=b3ad65947d406ee1d9a4c6a62ed4c711&oauth_signature=WG1JG%2BAGnrjYait9UiXbJ0HwLfU%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301546819&oauth_version=1.0a	ERROR ARRAY:
Array
(
)

2011-03-31 12:48:03	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=f39069de6b3ef34961147347a5aec0f0&oauth_signature=6Hph3twveG%2BMWZ8G7C5PH0GhvXc%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301546838&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [HTTP/1.1 503 Service Unavailable
Server: Varnish
Retry-After: 0
Content-Type: text/html; charset] => utf-8
Content-Length: 488
Date: Thu, 31 Mar 2011 04:38:03 GMT
X-Varnish: 2000616476
Age: 20
Via: 1.1 varnish


<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>503 Service Unavailable</title>
  </head>
  <body>
    <h1>Error 503 Service Unavailable</h1>
    <p>Service Unavailable</p>
    <h3>Guru Meditation:</h3>
    <p>XID: 2000616476</p>
    <hr>
    <address>
       <a href="http://www.varnish-cache.org/">Varnish cache server</a>
    </address>
  </body>
</html>

)

2011-03-31 12:52:14	[WEIBO CLASS]	[ERROR]	#0		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=342fa7a5dba03fff229b1dbef1e6fffe&oauth_signature=OoGXRcZovEl38auQUcY8gh5u%2Flc%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301547134&oauth_version=1.0a	ERROR ARRAY:
Array
(
)

2011-03-31 12:52:39	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=df732972ef6417fa33f29ba6646cb42d&oauth_signature=ahFgrKw4iavTMFiVmhoX0PJ0Vak%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301547114&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [HTTP/1.1 503 Service Unavailable
Server: Varnish
Retry-After: 0
Content-Type: text/html; charset] => utf-8
Content-Length: 488
Date: Thu, 31 Mar 2011 04:42:39 GMT
X-Varnish: 1736544851
Age: 20
Via: 1.1 varnish


<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>503 Service Unavailable</title>
  </head>
  <body>
    <h1>Error 503 Service Unavailable</h1>
    <p>Service Unavailable</p>
    <h3>Guru Meditation:</h3>
    <p>XID: 1736544851</p>
    <hr>
    <address>
       <a href="http://www.varnish-cache.org/">Varnish cache server</a>
    </address>
  </body>
</html>

)

2011-04-01 17:05:31	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=ab654fbe70156b8ebeba791a873b48a2&oauth_signature=jI04%2FYTH95ezqNj%2F3lpsnb9QD48%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301648731&oauth_token=4279ae8d53c6cfb936f79bc8c2a1cda1&oauth_verifier=664562&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-03 17:29:11	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=3ecefd356d798fc51e02614262ad0fe7&oauth_signature=HkgE%2BwtDePDVuuYAFP1%2FrvXgGdg%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301822951&oauth_token=50a29e2e2d06004e83fd619307bbe2e6&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-03 20:37:38	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/users/show/1918061290.json?oauth_consumer_key=3931622974&oauth_nonce=e21385864dd816e254994259325c72e5&oauth_signature=2VmQT7BheJkYaRk8JvDIj51pZW8%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301834258&oauth_token=c177f666d11448fa7be6b01c32c082e7&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /users/show/1918061290.json
    [error_code] => 400
    [error] => 40072:Error: accessor was revoked!
)

2011-04-04 13:10:34	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=6ed55ee0e77dc5b02b1ecc12babd3149&oauth_signature=Sq45YKuD0xTt6IFa8l2Whw%2F4EU4%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301893834&oauth_token=107293d6848c0c1a5e5cc98356ff6cd7&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-04 14:58:00	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=b5357893b4e9522ffd4663685f6c74f7&oauth_signature=y5f1tYonV%2FdN08DuuKlCcwfBYHk%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301900280&oauth_token=bb6452180247c09fc43453be5d4f6007&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-04 14:58:13	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=af66d8d8632767bf676ca25964d9ec17&oauth_signature=YfZhiuF3LkNdETaqjCMul1RB2Ik%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301900293&oauth_token=bb6452180247c09fc43453be5d4f6007&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-05 17:36:31	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=5bae2f7f0548020f89c1faca92fdf341&oauth_signature=EKzPQ%2BnG3EWjIcNYEzO4yugXQDI%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1301996191&oauth_token=de7a430f7e3ca4521a887240e31c9bbf&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-05 23:44:07	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=7fc4066f49ba0e752fbde3a4cb20e88d&oauth_signature=NJHWQ99ZYtU%2BSV5eoKEdczgu4xo%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302018247&oauth_token=4e25b0b4f1cce1fc0a4d24eb8a696bbb&oauth_verifier=669616&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-04-05 23:47:51	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=16e4963eb0451c7563c6efca035ae4f6&oauth_signature=HMsTvPZ3GoeBl6fouCoomutX0pE%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302018471&oauth_token=4e25b0b4f1cce1fc0a4d24eb8a696bbb&oauth_verifier=669616&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-04-06 22:24:59	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=254fe792fc1fca96bba66c6f71f15dba&oauth_signature=R7CxdqyG1n6TLS%2BNUanE6L2i7OU%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302099854&oauth_token=e97d708f1d4e54c68b3f2610ae57939d&oauth_verifier=116630&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [HTTP/1.1 200 OK
Pragma: No-cache
Cache-Control: no-cache
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Content-Type: text/plain;charset] => UTF-8
Content-Length: 115
Server: weibo
Date: Wed, 06 Apr 2011 14:15:29 GMT
X-Varnish: 3820695004
Age: 0
Via: 1.1 varnish

oauth_token=5bb73cae9a336daffc26883f6c3ec7a3
    [oauth_token_secret] => 586027eacd7a51027171ae12bac62e51
    [user_id] => 1871757531
)

2011-04-07 15:06:24	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=d8e12e5c809a56fb88563987983b8500&oauth_signature=mkv6gB0ie1wZ5i8KLOFMsENc%2Fa4%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302159984&oauth_token=36559fbbe67c3da03a83eb9020481aa6&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-08 11:04:09	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=1891c32fb93239a103677bc0c1217e60&oauth_signature=MJF5XANIhxhYOBc1fMGa8zp73XE%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302231849&oauth_token=6dedbf86fbb85cbdc632ce553bbab1de&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-08 13:07:48	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=38024dceb4299e97324271b84a41d305&oauth_signature=X8cWWgHWxOvWaDf8xFekmSucH8Y%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302239268&oauth_token=9dd828785279eb03dc902d5106253558&oauth_verifier=629425&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-10 15:51:00	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=0c7352a11f9e52b06bea40484f094bd6&oauth_signature=hMTT5tmrBqJacDbnK10BYpJm3p0%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302421860&oauth_token=813d88a1ce9e477673d9f66f36234101&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-10 17:58:00	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=0c47a651b782cb0ba7aeda0f1fc95a7b&oauth_signature=kzBDtqdz%2FILwlrX%2B15%2FWIbQo8fE%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302429480&oauth_token=f922e2d85a8c8ce44721e2d4a6a96956&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-10 19:36:33	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=97742688a85e4907088fb40a3d564637&oauth_signature=xSafLyFt%2B%2F97jgbZePG6aSk5cew%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302435393&oauth_token=d8c2159c9cd211c88e5aa9cea1aad844&oauth_verifier=474290&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-10 19:36:36	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=7c0144d54a3eb767bb2cefe61c1b6c11&oauth_signature=sVdRxg6fUuqTODmWunXKyBYtxtg%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302435396&oauth_token=d8c2159c9cd211c88e5aa9cea1aad844&oauth_verifier=474290&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-10 20:04:39	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=5c1b0a82dccbba36416864a3bf6eabe2&oauth_signature=K3mn3dKXoqMo9zQZeOKcML1a9Cg%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302437079&oauth_token=550c0010f6a3d70b139b612a412637c9&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-10 21:02:20	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=f1b6af1d76fff0acb4bf0b1bce73d17d&oauth_signature=RVDuf4ufX%2BkfpO4A7CCqktGR8bw%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302440540&oauth_token=a77816e69d04bcaf2bb4c50e4d223a24&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-10 21:03:57	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=795b8f1ac1877a4e8023b819c9e5f84b&oauth_signature=zqfDKtLichFErGYqMKISvUb5fq8%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302440637&oauth_token=f9b997a6ad9c9925dbc3f25c07d05043&oauth_verifier=442759&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-04-10 21:04:29	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=5113f3f1109641c5a635931f70db1b2a&oauth_signature=7xguYHP2PbPS9X91Lw7QBSNBDNw%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302440669&oauth_token=f9b997a6ad9c9925dbc3f25c07d05043&oauth_verifier=161902&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-04-10 21:07:47	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=cce6a76314c1cefe5e7f79023dc9ea5d&oauth_signature=Tns796zkwdmXsbf5yyYz17u6vcM%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302440867&oauth_token=f9b997a6ad9c9925dbc3f25c07d05043&oauth_verifier=639510&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-04-10 23:06:03	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=5205e72c83957a462ae415175d17bacb&oauth_signature=ocZdPlmU%2BcMVSIKRkUj2xXdENcs%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302447963&oauth_token=6dd10dc58eceb47941997ad3e6dc266b&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-11 10:15:34	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=b359fd4021aa52a7305ef90365c393f2&oauth_signature=KhEPzoAQKk%2FX692TvhoNpuqUHzQ%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302488134&oauth_token=7b273cec366c8851139990234e4c5c54&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-11 16:24:21	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=f191e68ffff87b1f6bbdab9cc820fc54&oauth_signature=%2FOnf1L6Js6WV0dqAjl4Xrp%2BQ0p0%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302510261&oauth_token=addfb6da4f8165a87af6ceceeaceaadf&oauth_verifier=384298&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-11 16:34:33	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=0c5df8d366fb4c30cae2eb493b269c5e&oauth_signature=Y5Tpb0feb9BGI4KmyebG1vTeR2o%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302510873&oauth_token=d446677f2f7a8244a1ead3843e28dcc8&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-11 19:35:21	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=2e5b06414265213cda40f3310ace6406&oauth_signature=z0FSwc267huQ%2BWpiGfx0J0qIGng%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302521721&oauth_token=8515d14f1ad32a77f511f722d74b70eb&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-11 21:05:36	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=9b70b3a2032a85c33ff1539c35f39370&oauth_signature=Z4QZ8mUJpOjAz8UlRSPGNR%2B33o4%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302527136&oauth_token=c579af0f53e912e6860bd46747bac5c4&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 400
    [error] => 40022:Error: source paramter(appkey) is missing
)

2011-04-11 21:05:51	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=d9eb7e88100d64c56394059ba8a6fbd0&oauth_signature=0pC6wLCe7J2P8wpt0UgsZ5ax4Rk%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302527151&oauth_token=c579af0f53e912e6860bd46747bac5c4&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 400
    [error] => 40022:Error: source paramter(appkey) is missing
)

2011-04-11 21:07:41	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=a5f648c85fcab8e2227a53aa8b47d149&oauth_signature=Tcpi5dUBPTpDIwj6rgGtMjz1fsg%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302527261&oauth_token=c579af0f53e912e6860bd46747bac5c4&oauth_verifier=582177&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-11 22:05:42	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=89faffea455e2c173c6791caa09f46ab&oauth_signature=40QIAsFC14tH9CbCH6R0gtVoAlw%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302530742&oauth_token=e0bd4485e9b024f4a6660560e1b41af4&oauth_verifier=286619&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-04-11 22:12:27	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=1dde49f1dea932fa0b7c585acd80fc03&oauth_signature=5Usz5ZBR%2F6UXQ2ktdKuYVcmwC34%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302531107&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [HTTP/1.1 503 Service Unavailable
Server: Varnish
Retry-After: 0
Content-Type: text/html; charset] => utf-8
Content-Length: 488
Date: Mon, 11 Apr 2011 14:02:53 GMT
X-Varnish: 2489051170
Age: 20
Via: 1.1 varnish


<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>503 Service Unavailable</title>
  </head>
  <body>
    <h1>Error 503 Service Unavailable</h1>
    <p>Service Unavailable</p>
    <h3>Guru Meditation:</h3>
    <p>XID: 2489051170</p>
    <hr>
    <address>
       <a href="http://www.varnish-cache.org/">Varnish cache server</a>
    </address>
  </body>
</html>

)

2011-04-12 15:37:47	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=47469db8c3acb29a4ba7af92597a62fc&oauth_signature=DsLMnDrZ%2F6JM8GSWc8OA8fnq2Xo%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302593866&oauth_token=bf5c236419c83e493381c6384295e6a7&oauth_verifier=578197&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-12 20:30:31	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=3e1cb751c7970301bc462c0a4682e81e&oauth_signature=T%2F1ZAgRgWE21RCwFHwUERag%2FNMc%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302611431&oauth_token=c087886968457617de4a31fa78e91d44&oauth_verifier=144158&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-13 13:10:43	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=f2024b07877e86fd4c4ee174e3dcfe7a&oauth_signature=M8IT2zv7fJljLjDPSTDuKtuGnfg%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302671402&oauth_token=b3ef29c0125a167852eb09ed59191a6b&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => HTTP/1.1 200 OK
Pragma: No-cache
Cache-Control: no-cache
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Content-Type: application/json;charset=UTF-8
Content-Length: 928
Server: weibo
Date: Wed, 13 Apr 2011 05:01:09 GMT
X-Varnish: 401160287
Age: 0
Via: 1.1 varnish

{"id":1019838384,"screen_name":"哈哈曲艺社-田海龙","name":"哈哈曲艺社-田海龙","province":"51","city":"1","location":"四川 成都","description":"哈哈曲艺社","url":"http://blog.sina.com.cn/iquyi","profile_image_url":"http://tp1.sinaimg.cn/1019838384/50/1251721381/1","domain":"iquyi","gender":"m","followers_count":375,"friends_count":675,"statuses_count":397,"favourites_count":0,"created_at":"Mon Aug 31 00:00:00 +0800 2009","following":false,"allow_all_act_msg":false,"geo_enabled":true,"verified":false,"status":{"created_at":"Wed Apr 13 10:29:39 +0800 2011","id":9064953811,"text":"对@穆丰通讯 说：祝三十兄，生意兴隆！","source":"<a href=\"http://weibo.com\" rel=\"nofollow\">新浪微博</a>","favorited":false,"truncated":false,"in_reply_to_status_id":"","in_reply_to_user_id":"","in_reply_to_screen_name":"","geo":null,"mid":"201110413274943006","annotations":[{"cartoon":false}]}}
    [error_code] => -1
)

2011-04-13 19:26:49	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=c30d2ecee39c31319bb05b09d7dfe2ba&oauth_signature=kifbAyP9tq2T8hNn4DmR3QAyEPg%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302694009&oauth_token=e4833dda81257f99fc07d7201d58d65d&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-14 14:47:59	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=2caad2d1b9f99428590f77d63be961f6&oauth_signature=ejjHHWL1y8I%2FuMJ5xxj3Lt60ZYE%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302763679&oauth_token=e38c23cf251e6d46fedb48d319632345&oauth_verifier=898423&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-14 17:50:54	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=4a87f0d28ad780e7536943635e2caef1&oauth_signature=3vJixqW%2F4tBo25Ba4MrZqlsUNzI%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302774645&oauth_version=1.0a	ERROR ARRAY:
Array
(
)

2011-04-14 19:52:24	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=b3c087112f95df8265874a81f7bb150e&oauth_signature=gs043Ry4fKDBx9Yb5LNfIKzQAXY%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302781944&oauth_token=a584a50c4bd08b68b3d8815598a1866c&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-14 21:10:26	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=d02c5bbb586d3ac4590143beb65231ea&oauth_signature=wP8JCYVDqXXjWDJh%2FpdBg0u2Tcw%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302786626&oauth_token=6ec545fb127c9320be34c2b193771ef8&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-14 21:12:06	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=a057aa6b325c768c5a4f5a55ebe9351f&oauth_signature=Kqis3V%2FmI8iIwt3jzyuKtPHdHZY%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302786726&oauth_token=a7f694f9c3f906e525a7e1997885d13d&oauth_verifier=674804&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-14 21:12:10	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=4606112272cced3c6047fa3d91c9437b&oauth_signature=6B4rp0hjyGHPUDieOkbh4rUAHFA%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302786729&oauth_token=a7f694f9c3f906e525a7e1997885d13d&oauth_verifier=674804&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-15 12:34:09	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=e5118fa60f1aa25b43b2ed60b1cf73d4&oauth_signature=dcDQobRQ6qW34ciWwOChKzlOZrc%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302842049&oauth_token=4d120aa8adcdaf2af8309235262631ab&oauth_verifier=289507&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-15 12:34:13	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=5b11e6067329935afe2aa9c70bd89716&oauth_signature=2GCvKO%2BXxG551SGI4IJTRgKq9xU%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302842053&oauth_token=4d120aa8adcdaf2af8309235262631ab&oauth_verifier=289507&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-15 12:34:43	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=3d52e9938a6feab1b045ca52e4980c48&oauth_signature=XBIgMpWm0G5oIdlviZguqb0Mq3s%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302842083&oauth_token=4d120aa8adcdaf2af8309235262631ab&oauth_verifier=289507&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-15 15:13:59	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=c6c9bb7e6f000ac29f1409667cf9fdcc&oauth_signature=0xsRlcmQFifYKiX5q2ds27YtK74%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302851639&oauth_token=920cffe323e7cc683779e044e5df409c&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => <html><body>
The server returned an invalid or incomplete response.<br>
please try again later.<br>
</body></html>


    [error_code] => 502
)

2011-04-15 15:30:17	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=e69abb5e32f317087914c42b592aa12e&oauth_signature=L9abb8Xhc%2FscCy74DTLOk5%2BcneA%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302852617&oauth_token=d1381d622c97d9d74d233756bdfb7a75&oauth_verifier=392446&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-15 15:30:20	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=45ce91ba24a1d268e318e30b8cdd1e6f&oauth_signature=AE0ahKT%2B2nRtr9c32IIlNAwGFi0%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302852620&oauth_token=d1381d622c97d9d74d233756bdfb7a75&oauth_verifier=392446&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-15 18:20:25	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=7e954b2251678d2d5cf0793957731ba8&oauth_signature=9EwnJqkf72hBHg8MNin6OWf%2BjlY%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302862825&oauth_token=8272a6427e20187e75ff1795c2fca90e&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-15 20:26:18	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=31b09571c2b07cecf7bdff4ea9e279d3&oauth_signature=8GgZuXXNQ7ehZYefJzPtWdd5GAk%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302870378&oauth_token=adfd7444ca342a46589561d2dd513cdd&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 400
    [error] => 40022:Error: source paramter(appkey) is missing
)

2011-04-15 20:26:24	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=324c6559a27d7e1f87d9336f1736a13e&oauth_signature=sk6uG%2FWHJXIRpheTPZKy9A6P1BY%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302870384&oauth_token=adfd7444ca342a46589561d2dd513cdd&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 400
    [error] => 40022:Error: source paramter(appkey) is missing
)

2011-04-15 20:26:32	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=926557a666fd4b890bf34d77687ee8e5&oauth_signature=1VrPvDqiLj3mQA74cD6mvPpaPug%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302870392&oauth_token=adfd7444ca342a46589561d2dd513cdd&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 400
    [error] => 40022:Error: source paramter(appkey) is missing
)

2011-04-15 20:28:34	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=d8a204df4945bb639ba0c91d533cddc8&oauth_signature=JJtAZYN16ovg92Y0LM2KrZpdTEo%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302870514&oauth_token=adfd7444ca342a46589561d2dd513cdd&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 400
    [error] => 40022:Error: source paramter(appkey) is missing
)

2011-04-15 20:28:43	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=28f57d9b1d01bed15cd2f79ce858ec04&oauth_signature=eFLq7yGpK9mTYQQzMoQ91OSfHEA%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302870523&oauth_token=adfd7444ca342a46589561d2dd513cdd&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 400
    [error] => 40022:Error: source paramter(appkey) is missing
)

2011-04-15 22:46:06	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=8cd4151adc2ca4fc3cacf0a3ec0d5377&oauth_signature=P3ceqW0AOrEVq%2FTPWEngoXIRjgg%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302878766&oauth_token=56ec0dd08b28e1442c4142632c9bc1b1&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-15 23:31:40	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=0de617a17e0254083870ac058d463b51&oauth_signature=kbXRscjo5uZC1EcdEzXhXoxY2as%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302881500&oauth_token=0b25878e93943ccb49689bdf1326e3dd&oauth_verifier=526195&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-04-15 23:31:43	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=4970541f5363755fbb78b02ad079e30c&oauth_signature=NcvIDCsfeg9%2BuI%2FdTJeHgpJKGF4%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302881503&oauth_token=0b25878e93943ccb49689bdf1326e3dd&oauth_verifier=526195&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-04-16 08:37:54	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=4e42cab37991fad88760e8154fbf6b55&oauth_signature=hfQ%2FOXbDwoKtrfF49LRvM%2BSm1AE%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302914274&oauth_token=b0bcb6ee28ead5536c9462d232b536e4&oauth_verifier=552886&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-16 08:38:40	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=19d24e815014d4a5909016e5417062dd&oauth_signature=PmVAoNqLMMXO%2FE5dvTOtnHriGl0%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302914320&oauth_token=b0bcb6ee28ead5536c9462d232b536e4&oauth_verifier=552886&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-16 14:08:21	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=72070a7a853d70629ea63b7c08343003&oauth_signature=Hdy9%2B8OokR9I%2BzMCkxwnbvDVNXE%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302934101&oauth_token=0905e4d73a44904ecad17aaa6e1c55f7&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-16 15:27:16	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=0d427530406557219ffbfb2ffd78e753&oauth_signature=UP91tI4MHPiePQ1VnJ37IMO7Znk%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302938836&oauth_token=860516cbc5cb68705a42a366fc23f231&oauth_verifier=441999&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-16 18:41:24	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=59901b7a5d583557eb2dec970dbd91c4&oauth_signature=d3uMJbNn9yReHNmP%2FkjwVoiDeqM%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302950484&oauth_token=47c76ced76dfb70970f9fc7866f58a95&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-16 21:35:30	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=6693f6c88a8764240b5c14c1b8219422&oauth_signature=RK8JRfWU7RFNZ87ewgdm2gh2Asc%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1302960930&oauth_token=1557945ae6a168279d60aa168f3f2eea&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-17 08:58:37	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=f45fafbf1696143f35856411b507d255&oauth_signature=aNlKRcIqcSbJ4Sw23Dsmma8I95U%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303001917&oauth_token=e9d1dd1c4543935f1b4f4789b5278659&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-17 11:20:23	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=ef5e0244923848782f2e11c77c6ddd3b&oauth_signature=njkticGUW4vQ5bMc4mPtrepavVg%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303010423&oauth_token=80bcdfaea3e47ac56ec071c4666e1c9a&oauth_verifier=491750&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-17 22:38:57	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=515970e714e4080bd561d71541bc5ba9&oauth_signature=xl0IKAGBOA3LzHEiVb%2F9511nbec%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303051097&oauth_token=5633064f2eef6d35792b2cc882b0529e&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => HTTP/1.1 200 OK
Pragma: No-cache
Cache-Control: no-cache
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Content-Type: application/json;charset=UTF-8
Content-Length: 440
Server: weibo
Date: Sun, 17 Apr 2011 14:29:19 GMT
X-Varnish: 940790884
Age: 0
Via: 1.1 varnish

{"id":2092794975,"screen_name":"流星雨760","name":"流星雨760","province":"42","city":"8","location":"湖北 荆门","description":"","url":"","profile_image_url":"http://tp4.sinaimg.cn/2092794975/50/0/1","domain":"","gender":"m","followers_count":0,"friends_count":43,"statuses_count":0,"favourites_count":0,"created_at":"Sun Apr 17 00:00:00 +0800 2011","following":false,"allow_all_act_msg":false,"geo_enabled":true,"verified":false}
    [error_code] => -1
)

2011-04-17 22:40:48	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=ea4940620c35a7a0563811a646c41f4e&oauth_signature=2B70Oe0Jm%2BxILFe9x4L2NuHaZJQ%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303051208&oauth_token=be5622bba3da44934f5ea3c54becbc05&oauth_verifier=624710&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [HTTP/1.1 200 OK
Pragma: No-cache
Cache-Control: no-cache
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Content-Type: text/plain;charset] => UTF-8
Content-Length: 115
Server: weibo
Date: Sun, 17 Apr 2011 14:31:10 GMT
X-Varnish: 769963505
Age: 0
Via: 1.1 varnish

oauth_token=90d3c95440504cd7ac488cc034e0cd00
    [oauth_token_secret] => 550ab1a56af81ee7a6c0d30843e4b617
    [user_id] => 2092798621
)

2011-04-18 09:00:03	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=2d10cb68bd6799a01ecb4346338ee05a&oauth_signature=%2BFa3t%2FWUNFVXxy6kFTL%2FKBSkjRk%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303088403&oauth_token=05e7ac0d4d6ff237434a5e8162ddc709&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-18 10:06:52	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=4b65e3defb61c5b699863b06c9c020ab&oauth_signature=MejZ%2FVbNMyxXSVEz80%2Blb8ficok%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303092412&oauth_token=6cf361f6db87696af85ebfc9b3c5ffca&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-18 15:24:35	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=a114683e2c0da75a608cacc428862a22&oauth_signature=kriZ3a4zXqSYvMI0jxODBWtrAdg%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303111475&oauth_token=bb08cd3ac1b73eeed08f8a25e0cf133c&oauth_verifier=449998&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-04-18 15:54:11	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=6fd4c33074a3fd298e2119d79894a688&oauth_signature=uZGSOxHRrct5ZgTgfmeG8hkvIhc%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303113251&oauth_token=bb2582cebe683e6fbe41926cbbbaa5f0&oauth_verifier=764636&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-18 15:54:15	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=729073e3fd793713eb5d0b2e8dc61a38&oauth_signature=NQ4tQDJbAV5MPsQu5Dc6DXzzLDs%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303113255&oauth_token=bb2582cebe683e6fbe41926cbbbaa5f0&oauth_verifier=764636&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-18 23:02:29	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=1c6551b2f145787a136b47735b5402d4&oauth_signature=jT79O0fraRZwArIGFVuJTBJ5BaI%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303138949&oauth_token=82fb6df5579b2c5aff48b2c657f2cd5f&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-18 23:44:42	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=8e9f8d2a02175ceb424bd63ec324c689&oauth_signature=KJZwm979fBBN%2BDzBWMux3CEkJHs%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303141482&oauth_token=c1addb60dda55a456f282ca379b7e12b&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-19 00:12:34	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=ba805a69af2daa39315b27062d3353e2&oauth_signature=h7Z3Xz%2FijYZjWu43nUZ0sAYSwWg%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303143138&oauth_token=e8055ea70d4f13e18d1b217db1b4b342&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => 
    [error_code] => -1
)

2011-04-19 11:35:45	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=bf85ecb8683b2a127cd4f7e14a145bbd&oauth_signature=5l%2BYwI99gAF0RGxkrt%2F8JllWtF0%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303184095&oauth_token=c47ed9db34eee0923e1a71810348e6df&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => HTTP/1.1 200 OK
Pragma: No-cache
Cache-Control: no-cache
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Content-Type: application/json;charset=UTF-8
Content-Length: 817
Server: weibo
Date: Tue, 19 Apr 2011 03:26:02 GMT
X-Varnish: 2064327634
Age: 0
Via: 1.1 varnish

{"id":1787497870,"screen_name":"huangshanshan_ozil","name":"huangshanshan_ozil","province":"42","city":"12","location":"湖北 咸宁","description":"","url":"","profile_image_url":"http://tp3.sinaimg.cn/1787497870/50/0/0","domain":"","gender":"f","followers_count":2,"friends_count":22,"statuses_count":5,"favourites_count":2,"created_at":"Tue Sep 28 00:00:00 +0800 2010","following":false,"allow_all_act_msg":false,"geo_enabled":true,"verified":false,"status":{"created_at":"Tue Apr 19 10:49:04 +0800 2011","id":9338527176,"text":"http://t.cn/hdhEjr","source":"<a href=\"http://weibo.com\" rel=\"nofollow\">新浪微博</a>","favorited":false,"truncated":false,"in_reply_to_status_id":"","in_reply_to_user_id":"","in_reply_to_screen_name":"","geo":null,"mid":"221110419417923979","annotations":[{"cartoon":false}]}}
    [error_code] => -1
)

2011-04-19 11:35:47	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=7909db209fc43a3eafd080f7116fd8ea&oauth_signature=PabxW7CjI6hfX8%2FfVOt3xbeAQFk%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303184147&oauth_token=c47ed9db34eee0923e1a71810348e6df&oauth_verifier=425351&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-04-19 11:54:14	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=f0024b9f3b002c195c17b23fd4746778&oauth_signature=2zQ0Qox19ZhxgESB9TRRhnUMHhA%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303185254&oauth_token=e4b7ec39f5eaa38f660d5b05eb66fcbf&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-19 12:07:22	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/users/show/1304876420.json?oauth_consumer_key=3931622974&oauth_nonce=ebc1c00c58d3ac0ed6f3efd6f751e7e6&oauth_signature=5jQOC0gp2MEZIs2JhRJbL7OAWIk%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303186002&oauth_token=178906cce8838480e739e7a1494c6ddb&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => HTTP/1.1 200 OK
Pragma: No-cache
Cache-Control: no-cache
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Content-Type: application/json;charset=UTF-8
Content-Length: 854
Server: weibo
Date: Tue, 19 Apr 2011 03:57:49 GMT
X-Varnish: 434920976
Age: 0
Via: 1.1 varnish

{"id":1304876420,"screen_name":"MATA5562","name":"MATA5562","province":"35","city":"1000","location":"福建","description":"","url":"http://blog.sina.com.cn/wapba","profile_image_url":"http://tp1.sinaimg.cn/1304876420/50/1278515713/1","domain":"liufeng88","gender":"m","followers_count":1,"friends_count":5,"statuses_count":3,"favourites_count":0,"created_at":"Mon Jan 18 00:00:00 +0800 2010","following":false,"allow_all_act_msg":false,"geo_enabled":true,"verified":false,"status":{"created_at":"Mon Mar 28 08:30:53 +0800 2011","id":8194798861,"text":"安卓手机确实好用","source":"<a href=\"http://t.sina.com.cn/mobile/android.php\" rel=\"nofollow\">Android客户端</a>","favorited":false,"truncated":false,"in_reply_to_status_id":"","in_reply_to_user_id":"","in_reply_to_screen_name":"","geo":null,"mid":"201110328399308747","annotations":[]}}
    [error_code] => -1
)

2011-04-19 12:47:44	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=8583554df85063c6a398dd5d4d459983&oauth_signature=9Vop1%2BayvlYqTkpNLPqnpIyg8dQ%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303188464&oauth_token=2e7048188e7a66b7b09f5383690d0e49&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-19 13:16:10	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=ff574b4900a8666eade1a290302c8c69&oauth_signature=QJKODC4h3UweQMnLxFdJc2lDJxw%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303190130&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [HTTP/1.1 200 OK
Pragma: No-cache
Cache-Control: no-cache
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Content-Type: text/plain;charset] => UTF-8
Content-Length: 96
Server: weibo
Date: Tue, 19 Apr 2011 05:06:28 GMT
X-Varnish: 2085786016
Age: 0
Via: 1.1 varnish

oauth_token=44fec29fa306746a9013e6c824ff959d
    [oauth_token_secret] => a2ded9987bbb5542edd1d9897cdd9022
)

2011-04-19 18:30:17	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=714320ea825e3b2b580d7f3836d4f079&oauth_signature=I8uWtKIN3aPlaubNK6AlOU%2FsI%2Bg%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303209017&oauth_token=bb420adb8b0e5fb5c217c780ec49f869&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-19 19:07:16	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=92be4ab71ee6ce235e25295b041eca47&oauth_signature=03IJnofjPXSQSkCRL2ULaPJkhPU%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303211236&oauth_token=a72b5bf1311d90305aeb467fd4eafde0&oauth_verifier=851630&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-20 10:55:24	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=46cb5bfbf0b68228b7378a60326ef793&oauth_signature=d%2BPtJWx5yu75UCy8UttFJ85j6fs%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303268124&oauth_token=955b3dbc5bd8985252e9b666d10a6717&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-20 10:55:29	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=06ecf3c78b26480578d05fd8cf45e3db&oauth_signature=UoU7biTpEjyOxZd2S36MX%2FFiZrs%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303268129&oauth_token=955b3dbc5bd8985252e9b666d10a6717&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-20 11:52:07	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=d9f89c6dd393340f70f70c74458fef5e&oauth_signature=V0j89Uda3xsT127TlPI6vmB0QiM%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303271527&oauth_token=2a4a69f94666b36a1fda8d9fb92dee4b&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-20 21:47:19	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=a91b39084945aeca2d449a98459c1be9&oauth_signature=%2BUAZzscSY0TegDRWC9mf6Oks0GY%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303307239&oauth_token=08e3e0b2e26f84588235df38d9b8e6e5&oauth_verifier=873788&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-20 23:19:29	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=d659a5eb946102c939ade7ed1fe0a677&oauth_signature=Cj27QIW9uVdGFK9Ar9XSMSMByZA%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303312729&oauth_token=84a0ca0ee94f9a4a026335777a549594&oauth_verifier=769771&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [HTTP/1.1 200 OK
Pragma: No-cache
Cache-Control: no-cache
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Content-Type: text/plain;charset] => UTF-8
Content-Length: 115
Server: weibo
Date: Wed, 20 Apr 2011 15:09:50 GMT
X-Varnish: 2438570536
Age: 0
Via: 1.1 varnish

oauth_token=5b61d7fd9681d0f64dfcc1c3bce941bd
    [oauth_token_secret] => a6f358d3aaa69f3835d13edafda54e93
    [user_id] => 1609168864
)

2011-04-21 02:51:40	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=6d54873fa6b388071f1a4eeaf7c86601&oauth_signature=OnG8p3Yr2vFplyHlmAyypxq17kY%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303325500&oauth_token=e6a5bebc5aee9f3272962354500e5d2b&oauth_verifier=276787&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-21 02:51:46	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=93ecae027c508ebed0b96959ad8ec78f&oauth_signature=wDNTwgX%2BXUYnU66ulcvmxXWJ%2FWY%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303325506&oauth_token=e6a5bebc5aee9f3272962354500e5d2b&oauth_verifier=276787&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-21 06:42:47	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=0a4f9896e3240c906f5dcd5827571c8a&oauth_signature=kfvaVtv5oU8q1Y%2F5cy%2F2lOeoY98%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303339367&oauth_token=06639dfc38a1c825e93e8ad42e3239c1&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-21 12:04:52	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=94bfb2e7d834290d4ad10dcbe8a2d984&oauth_signature=J23VYWhEAf09Nh33lazQSwLBmBo%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303358692&oauth_version=1.0a	ERROR ARRAY:
Array
(
)

2011-04-21 12:06:06	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=bdf2b870e69cf10f95f3590a256077f3&oauth_signature=mxMQL5IBcZtwB7ApT8qPSBpSAzU%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303358723&oauth_token=cf68b5787e7ad6760d7976123a6e5fcc&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => HTTP/1.1 200 OK
Pragma: No-cache
Cache-Control: no-cache
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Content-Type: application/json;charset=UTF-8
Content-Length: 2587
Server: weibo
Date: Thu, 21 Apr 2011 03:56:25 GMT
X-Varnish: 1712529611
Age: 0
Via: 1.1 varnish

{"id":1153054557,"screen_name":"Aeyang","name":"Aeyang","province":"53","city":"1","location":"云南 昆明","description":"我就是我 独一无二","url":"http://blog.sina.com.cn/aeyang","profile_image_url":"http://tp2.sinaimg.cn/1153054557/50/1288023278/1","domain":"aeyang","gender":"m","followers_count":20,"friends_count":83,"statuses_count":42,"favourites_count":0,"created_at":"Wed Feb 24 00:00:00 +0800 2010","following":false,"allow_all_act_msg":false,"geo_enabled":true,"verified":false,"status":{"created_at":"Sat Feb 12 01:19:06 +0800 2011","id":6286012865,"text":"呵呵 说的很好！","source":"<a href=\"http://wap.uc.cn/ucpack/dlmobile/control/index.php?oper=ptrn_sina_sns&page=web\" rel=\"nofollow\">UC浏览器</a>","favorited":false,"truncated":false,"in_reply_to_status_id":"","in_reply_to_user_id":"","in_reply_to_screen_name":"","geo":null,"mid":"2011102122138905779","retweeted_status":{"created_at":"Sat Feb 12 01:00:46 +0800 2011","id":6285639675,"text":"【感叹男人】：有才华的长的丑，长的帅的挣钱少，挣钱多的不顾家，顾了家的没出息，有出息的不浪漫，会浪漫的靠不住，靠的住的又窝囊。【感叹女人】：漂亮的不下厨房，下厨房的不温柔，温柔的没主见，有主见的没女人味，有女人味的乱花钱，不乱花钱的不时尚，时尚的不放心，放心的没法看。","source":"<a href=\"http://3520.sinaapp.com/ontime/\" rel=\"nofollow\">定时V</a>","favorited":false,"truncated":false,"in_reply_to_status_id":"","in_reply_to_user_id":"","in_reply_to_screen_name":"","thumbnail_pic":"http://ww2.sinaimg.cn/thumbnail/67bf1bb2jw6de8uhtmepsj.jpg","bmiddle_pic":"http://ww2.sinaimg.cn/bmiddle/67bf1bb2jw6de8uhtmepsj.jpg","original_pic":"http://ww2.sinaimg.cn/large/67bf1bb2jw6de8uhtmepsj.jpg","geo":null,"mid":"211110212134259","user":{"id":1740577714,"screen_name":"微博经典段子","name":"微博经典段子","province":"11","city":"5","location":"北京 朝阳区","description":"新浪微博内容最多的猛料集聚地，24小时为您放送精彩博文，实在是您居家旅行的必备猛药!!!....请关注我，消除寂寞!!!。投稿请私信，合作QQ:450338265","url":"http://q.t.sina.com.cn/244893","profile_image_url":"http://tp3.sinaimg.cn/1740577714/50/1290230009/0","domain":"zhang3250152wei","gender":"f","followers_count":645141,"friends_count":1988,"statuses_count":7062,"favourites_count":17,"created_at":"Wed May 12 00:00:00 +0800 2010","following":false,"allow_all_act_msg":true,"geo_enabled":true,"verified":false}},"annotations":[]}}
    [error_code] => -1
)

2011-04-21 15:21:05	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=d20b13e69331ce283ed26ca1cfd56212&oauth_signature=comqAcOJ9xU%2BDyBQSa1eG1yEGVw%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303370465&oauth_token=13dbe46f15fed10ed752635ff1194ad6&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-21 15:23:03	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=98f00ec49804a16284d8ef5ea8b6c664&oauth_signature=egZJMCVhz6oZIzGxJw%2BglVZ0Dzc%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303370535&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [HTTP/1.1 200 OK
Pragma: No-cache
Cache-Control: no-cache
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Content-Type: text/plain;charset] => UTF-8
Content-Length: 96
Server: weibo
Date: Thu, 21 Apr 2011 07:13:21 GMT
X-Varnish: 1314375613
Age: 0
Via: 1.1 varnish

oauth_token=82129707cc2a2124447dc133279150d2
    [oauth_token_secret] => 86167a21c2c34e6c34829620a9207380
)

2011-04-21 19:44:35	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=ee666c80ca343503209c53ccaa3dadd0&oauth_signature=sAnUrwgpanxRRr4tjJ82w1o8vOA%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303386275&oauth_token=5a85d2b27cdb20e9066247ba515be8b0&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-21 20:45:08	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=772cfc47234c9af342c94c0069fac893&oauth_signature=IN3HMGvbb%2FLKT0iVXpSnb7Uj%2Bxw%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303389865&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [HTTP/1.1 200 OK
Pragma: No-cache
Cache-Control: no-cache
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Content-Type: text/plain;charset] => UTF-8
Content-Length: 96
Server: weibo
Date: Thu, 21 Apr 2011 12:35:26 GMT
X-Varnish: 1827773740
Age: 0
Via: 1.1 varnish

oauth_token=f4deb75bfe3f455275790aa9335aef64
    [oauth_token_secret] => 8aa6d1d38905e00d268be2c5ad124a7f
)

2011-04-21 20:46:47	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=61b28ea890d81da01faa2fda3b272741&oauth_signature=RmCRtjNYrrBaNWpjYeOw4DC2yAQ%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303390003&oauth_token=88b9500a6d9bc8c1d36e0d254896dbae&oauth_verifier=829615&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-04-21 22:18:45	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=2c972c6472e66aa7943c713da48eee62&oauth_signature=fpczTRSHt1RzYKHz7tte1WVpvlo%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303395524&oauth_token=5794e34928e866c008fd0b2c068b876f&oauth_verifier=724350&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-04-22 00:36:32	[WEIBO CLASS]	[ERROR]	#1	你可能已经取消该应用站点的授权。请先解除当前绑定，然后重新绑定，以便自动重新建立授权	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=4f353eb43a33c1724b95a9e5ad7dcc0a&oauth_signature=Iofg5mHblk7C4z7VPnMCZIkD%2FN4%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303403792&oauth_token=661f3ac0d176df1f5a98f67975903e6c&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 401
    [error] => 40113:Oauth Error: token_rejected!
)

2011-04-22 09:01:34	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=f5f309d5e6f434a2ed6096a432c91e85&oauth_signature=8YPldHUpiR6onGCAnB1pdNd9C9k%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303434054&oauth_token=ed5ccc54c9cdbef110ad0308a72a4d42&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => HTTP/1.1 503 Service Unavailable
Server: Varnish
Retry-After: 0
Content-Type: text/html; charset=utf-8
Content-Length: 488
Date: Fri, 22 Apr 2011 00:52:00 GMT
X-Varnish: 1114817237
Age: 20
Via: 1.1 varnish
SINA-LB:amExNDYuaGEuamFncm91cDEuYmoubG9hZGJhbGFuYw==


<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>503 Service Unavailable</title>
  </head>
  <body>
    <h1>Error 503 Service Unavailable</h1>
    <p>Service Unavailable</p>
    <h3>Guru Meditation:</h3>
    <p>XID: 1114817237</p>
    <hr>
    <address>
       <a href="http://www.varnish-cache.org/">Varnish cache server</a>
    </address>
  </body>
</html>

    [error_code] => -1
)

2011-04-22 09:04:34	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=107501791e02edcb6ed5fdd5ab10cc28&oauth_signature=ja0vjcg7my6ulsHkTQVkuDCbP44%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303434274&oauth_token=62823fe6e60f9ca60e4b72bd27759876&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-22 19:28:11	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=2dfb669c35b57e3f31340344f8e95d92&oauth_signature=gfBguFb3GXimaFXVDEJK1VbzLss%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303471690&oauth_token=05c2505193d221f7c44be35cf1acd67d&oauth_verifier=846287&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-04-22 21:09:28	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=db61775a7498c78fbfabc03aaf6d607b&oauth_signature=pU%2FfftVA%2FAcM8CoR0qxxHKFZAio%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303477728&oauth_token=ee46d26a750f8d3c7b92c85ec995d5ad&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => HTTP/1.1 503 Service Unavailable
Server: Varnish
Retry-After: 0
Content-Type: text/html; charset=utf-8
Content-Length: 488
Date: Fri, 22 Apr 2011 12:59:54 GMT
X-Varnish: 1533402085
Age: 20
Via: 1.1 varnish
SINA-LB:amExNDcuaGEuamFncm91cDEuYmoubG9hZGJhbGFuYw==


<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>503 Service Unavailable</title>
  </head>
  <body>
    <h1>Error 503 Service Unavailable</h1>
    <p>Service Unavailable</p>
    <h3>Guru Meditation:</h3>
    <p>XID: 1533402085</p>
    <hr>
    <address>
       <a href="http://www.varnish-cache.org/">Varnish cache server</a>
    </address>
  </body>
</html>

    [error_code] => -1
)

2011-04-22 22:32:49	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=93094aac1bc2f8ca0213ac903b0c6cb3&oauth_signature=wPV8gshFgM06Vb7wVj4tDnQSzRc%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303482769&oauth_token=8322ac1a71562ecedbd4fc0a182f2422&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-24 11:11:36	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=609a2bfd262f02dbdf1091e8d21f0478&oauth_signature=g1AWsJwfGAXdCG%2BgmGS4R8%2FPy%2BU%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303614696&oauth_token=e6f1a3c1a95315ed31ce4c3ca85cf8c6&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-24 15:09:59	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=f9ebe9d6a17e96be5d5c115b01c209ce&oauth_signature=2FCjF%2BFCUh4cMPg4v%2Fni3Nw2RBw%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303628999&oauth_token=20e3cc3131770f627b1ec361301e27aa&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-24 17:58:24	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=8d9db4340c8a5d5d2f36a9a56b63bb32&oauth_signature=K5XOvs%2FSm8%2B%2BenrbUa8ymrVh4pE%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303639104&oauth_token=1a1319d5fbcf89d55580e67493fdb4d1&oauth_verifier=461544&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40113:Oauth Error: token_rejected!
    [error_CN] => 错误:Token不合法!
)

2011-04-25 09:59:26	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=ad6dd309e5591ee9c65ac72f873c7698&oauth_signature=kc4bSaOmeSBfvY6cbs8BIG6bvSM%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303696766&oauth_token=fe771cea2336966e761f7300e66a26d6&oauth_verifier=844472&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-04-26 12:41:24	[WEIBO CLASS]	[ERROR]	#1	你可能已经取消该应用站点的授权。请先解除当前绑定，然后重新绑定，以便自动重新建立授权	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=d54133839de2fa52ff791ead5c00b56f&oauth_signature=4zxrAfYLdSFSOozyHAUP%2B4FVeLk%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303792884&oauth_token=9573c37cdad207c570da4fe8b05cc4f1&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 401
    [error] => 40113:Oauth Error: token_rejected!
)

2011-04-27 11:20:30	[WEIBO CLASS]	[ERROR]	#1	错误:consumer_key不合法!	http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=33aaf1beaeef211eb3605a1c29986d47&oauth_signature=JkDUCPcgriKpGHNYN9rfli0Wmdw%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303874428&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/request_token
    [error_code] => 401
    [error] => 40109:Oauth Error: consumer_key_refused!
    [error_CN] => 错误:consumer_key不合法!
)

2011-04-28 18:43:34	[WEIBO CLASS]	[ERROR]	#1	你可能已经取消该应用站点的授权。请先解除当前绑定，然后重新绑定，以便自动重新建立授权	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=20474016d309ed6f233d26804317f013&oauth_signature=rA6t6XLNIT6fOIqAiwoHpWQhuBo%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1303987414&oauth_token=110c5a8f5468f4f170f3ae484bea9adb&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 401
    [error] => 40113:Oauth Error: token_rejected!
)

2011-04-29 18:24:13	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=550311ebf9ca3abaf242f05efaf892e9&oauth_signature=sq%2BkGzBVtRor4BbpkIaVmXcPW74%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304072608&oauth_token=1ea644ade0028cddec87470e983064e3&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => HTTP/1.1 503 Service Unavailable
Server: Varnish
Retry-After: 0
Content-Type: text/html; charset=utf-8
Content-Length: 488
Date: Fri, 29 Apr 2011 10:14:43 GMT
X-Varnish: 2237776636
Age: 20
Via: 1.1 varnish
SINA-LB:amExNDcuaGEuamFncm91cDEuYmoubG9hZGJhbGFuYw==


<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>503 Service Unavailable</title>
  </head>
  <body>
    <h1>Error 503 Service Unavailable</h1>
    <p>Service Unavailable</p>
    <h3>Guru Meditation:</h3>
    <p>XID: 2237776636</p>
    <hr>
    <address>
       <a href="http://www.varnish-cache.org/">Varnish cache server</a>
    </address>
  </body>
</html>

    [error_code] => -1
)

2011-04-29 18:35:01	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=23834b891043dd9232172681c59457a0&oauth_signature=GswlpYY21MF8h7Z8YYmKG%2FzxAsw%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304073261&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [HTTP/1.1 503 Service Unavailable
Server: Varnish
Retry-After: 0
Content-Type: text/html; charset] => utf-8
Content-Length: 488
Date: Fri, 29 Apr 2011 10:25:31 GMT
X-Varnish: 2353443498
Age: 20
Via: 1.1 varnish
SINA-LB:amExNDIuaGEuamFncm91cDEuYmoubG9hZGJhbGFuYw==


<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>503 Service Unavailable</title>
  </head>
  <body>
    <h1>Error 503 Service Unavailable</h1>
    <p>Service Unavailable</p>
    <h3>Guru Meditation:</h3>
    <p>XID: 2353443498</p>
    <hr>
    <address>
       <a href="http://www.varnish-cache.org/">Varnish cache server</a>
    </address>
  </body>
</html>

)

2011-04-29 22:51:48	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=180400f69bdb3ba8a105936a385023e8&oauth_signature=IMuxMTRDlJnjEMpKqTqwLhVgO3U%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304088708&oauth_token=03ce64979cb08a0d7d409ce4e919b0b4&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-04-29 22:51:52	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=8e9d399181c400a9e06dbed4f4a831fc&oauth_signature=Tpu00310K%2F6UX9J2fcW8ldZsTBc%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304088712&oauth_token=03ce64979cb08a0d7d409ce4e919b0b4&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-05-01 22:33:46	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=63440f5e35ae0943c073b47c081f0558&oauth_signature=RN68zzls%2Bxm69M9XS74%2BwkggpzE%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304260426&oauth_token=1a6128e39ded535195843c7a0856de9d&oauth_verifier=211239&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-05-01 22:35:08	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=af7426cf49d34439b018f3f483551188&oauth_signature=uE9ZiSNjnU8JQ2hL2oM3H2gNp1Q%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304260508&oauth_token=fbfc23ef522a7168c91e4d259b789390&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-05-01 22:35:14	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=231eb9cff575cdb94be7cbf3a86e9ca2&oauth_signature=7i4xoGVUAGw%2FoL1cVGMH7DUzQ6Y%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304260514&oauth_token=fbfc23ef522a7168c91e4d259b789390&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-05-02 09:32:17	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=28adf1eb48ae8dda64f6f24d9ac2967d&oauth_signature=l5CSNw60tKYvXKSiKtm8vxJ3b2M%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304299937&oauth_token=c32c15cc17f2cc21739f9f233993449c&oauth_verifier=209506&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-05-02 13:05:05	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=56b50281aa72fe10b2bc5bb9f627b28e&oauth_signature=4kuZa8vTLjX3AUzss1IDOcXP8Mk%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304312705&oauth_token=6a62ce3f38df8e554cf8272e5a193e2c&oauth_verifier=274171&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-05-02 13:05:25	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=c29fad106b58d8d6fd54c8399a4a586b&oauth_signature=N8MStKUmjMC%2F39zks4Tpip3aED8%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304312725&oauth_token=6a62ce3f38df8e554cf8272e5a193e2c&oauth_verifier=883192&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-05-02 13:05:30	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=a0c90d7280ae303f2332dfacb974b250&oauth_signature=lc233qgx7UxugsygY00X5HhLsoA%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304312730&oauth_token=6a62ce3f38df8e554cf8272e5a193e2c&oauth_verifier=883192&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-05-02 13:07:07	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=9ffa0c04c1ddaecfbb5de2a0a3bf0b96&oauth_signature=9mHpQfagxhml5YE7W58LOaRhl%2FY%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304312827&oauth_token=6a62ce3f38df8e554cf8272e5a193e2c&oauth_verifier=546463&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-05-02 13:07:09	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=5a75efc923f3a36a89e7bb8a39c3eb5e&oauth_signature=8KQoB7Y7c8GvClidZ33bY%2BfzPmE%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304312829&oauth_token=6a62ce3f38df8e554cf8272e5a193e2c&oauth_verifier=546463&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-05-02 13:07:30	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=191c2ca3e6ab055fe696464b348ff913&oauth_signature=wt9fY1Kh2%2Bu4l%2FckDx5kb8dpaf0%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304312849&oauth_token=6a62ce3f38df8e554cf8272e5a193e2c&oauth_verifier=843326&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-05-02 13:07:59	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=ef64a402000ff40f38eb0689b9b6e357&oauth_signature=yrR9ywrL5ssh25ji%2Fuuf3Sj12OA%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304312879&oauth_token=6a62ce3f38df8e554cf8272e5a193e2c&oauth_verifier=662433&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-05-02 14:39:21	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=eead84e5f70f56043f7609c91e570de9&oauth_signature=bmzGLVDIOUBISo4B3aX2%2Ff07nQc%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304318361&oauth_token=6a62ce3f38df8e554cf8272e5a193e2c&oauth_verifier=878682&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-05-02 14:39:24	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=de9bbc33c5616f5a3aa6147e86ab4f65&oauth_signature=KCfSWQD19pVrC%2FuFcxkP6e49%2Fc0%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304318364&oauth_token=6a62ce3f38df8e554cf8272e5a193e2c&oauth_verifier=878682&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-05-02 14:39:26	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=01dae164c93469e693239e232648d8cc&oauth_signature=2mGKEE5WPt1Z3EBzG78m3j6mc3A%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304318366&oauth_token=6a62ce3f38df8e554cf8272e5a193e2c&oauth_verifier=878682&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-05-02 14:47:58	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=43bca7f4ead2937b45c8bf74f628fc26&oauth_signature=AJ%2B1AESgTAnrLnmMtP6ZzP2MW3g%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304318878&oauth_token=6a62ce3f38df8e554cf8272e5a193e2c&oauth_verifier=325919&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-05-02 17:48:04	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=5403234132ee1eb00d62851cda7b734f&oauth_signature=d99BE%2BODyHEyp463CNVYPU9Hrlc%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304329683&oauth_token=19f9a30af46f356cba9a1cc9fee387e1&oauth_verifier=817090&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-05-03 00:17:07	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=004bfc61f5f327bb8232f22d19593efd&oauth_signature=1tZFVObCmKZ6LJaws3qVk47aDqY%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304353027&oauth_token=db2a518776bc1cded93bd7c6dd5e61a8&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-05-04 09:03:31	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=f659830b786f216e953968c919637dec&oauth_signature=i7DKIIJ31WKUwHl057sQgHfm%2BEc%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304471011&oauth_token=a174367372cbeebcb9a46c1822d3accb&oauth_verifier=248648&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-05-06 11:13:04	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=4d719b7c94c08abc8aaf848ff91984ce&oauth_signature=C%2FmzuJ5PQbZhmmy5mlzwQrfyUos%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304651584&oauth_token=c6c6f77457a2a1de6098a837d6738e55&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-05-06 11:13:07	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=209f7871cef39b4ddad066b1fa68210c&oauth_signature=BurwkQj4U7a1Craw3aAegJBOFMY%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304651587&oauth_token=c6c6f77457a2a1de6098a837d6738e55&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-05-06 15:36:08	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=b458b9a5cb4e9ed4bec7adee4211990b&oauth_signature=hgMHTu1Q2k8Lo%2Ba%2FWzEFIL7AKsg%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304667368&oauth_token=d984c2663c539616a8cd902ce390c9d1&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-05-07 00:10:18	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=2c54bfb9f8621d79de3d54ff1ed7d370&oauth_signature=lXy3AXqoYSyfebw3ktZ1dUetroQ%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304698218&oauth_token=d17e5596aeb6d5a1183be1c187530b12&oauth_verifier=717209&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-05-08 10:59:58	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=f1f91a8752e993399fae474e0f454687&oauth_signature=%2FE%2FbOT08XnOXv0pt16u1LT4xQo8%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304823598&oauth_token=e72252617b8c838c5c72934d64c89321&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-05-08 14:54:13	[WEIBO CLASS]	[ERROR]	#1	你可能已经取消该应用站点的授权。请先解除当前绑定，然后重新绑定，以便自动重新建立授权	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=80d8983e85e63edda919502f7e8d41e4&oauth_signature=S%2FCFgqYBv8nNFRS0MZgrsDY1B0Q%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304837653&oauth_token=393d637e3b57bbaaca4c5c2c5b5e54c2&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 401
    [error] => 40113:Oauth Error: token_rejected!
)

2011-05-09 09:44:35	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=70fb84618f307a3b1bafae35b1357b44&oauth_signature=2lxPQ1uzZ7ieoSZt5PYsOU6jX4g%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304905475&oauth_token=5ea55a53b77cbf408003668409883aa2&oauth_verifier=507838&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40113:Oauth Error: token_rejected!
    [error_CN] => 错误:Token不合法!
)

2011-05-09 23:29:29	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=5ae0c326e164d8c2250a39f141dc3aa7&oauth_signature=xRXlUsyEjEpkms64YxDh42BedzQ%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304954969&oauth_token=760a47e6d548ac417c245e96c8783f3a&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-05-10 05:45:19	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=b9c9df2f4e840f7be7282ac9f325da72&oauth_signature=Q4kGjfHkXaQXMZfawiCkas7%2FwEQ%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1304977519&oauth_token=2eeeaa0b59f7de59c5b3c20e1c7deb55&oauth_verifier=622322&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-05-10 16:18:00	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=568911fbab99bad76893c79df3c7b1da&oauth_signature=iyoRwOK3Xh0XlWLEWeORzsBTeUQ%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305015435&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [HTTP/1.1 200 OK
Pragma: No-cache
Cache-Control: no-cache
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Content-Type: text/plain;charset] => UTF-8
Content-Length: 96
Server: weibo
Date: Tue, 10 May 2011 08:08:20 GMT
X-Varnish: 3091026408
Age: 0
Via: 1.1 varnish
SINA-LB:amExNDQuaGEuamFncm91cDEuYmoubG9hZGJhbGFuYw==

oauth_token=5181415b50e44da6886e0f0a0b487db7
    [oauth_token_secret] => ce771ab751c9a4a32805e38a139611d8
)

2011-05-10 17:12:33	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=eb15166850db6846ce95383e824fe2cd&oauth_signature=XlbW5gtJ8%2BKoZzmL2J66iHDaNBM%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305018712&oauth_token=aeb81d27bedd8197e1bf5c313ec8ecb6&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => HTTP/1.1 200 OK
Pragma: No-cache
Cache-Control: no-cache
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Content-Type: application/json;charset=UTF-8
Content-Length: 900
Server: weibo
Date: Tue, 10 May 2011 09:03:02 GMT
X-Varnish: 3105822901
Age: 0
Via: 1.1 varnish
SINA-LB:amExNDYuaGEuamFncm91cDEuYmoubG9hZGJhbGFuYw==

{"id":2120289440,"screen_name":"活力开心果小屋","name":"活力开心果小屋","province":"44","city":"3","location":"广东 深圳","description":"","url":"","profile_image_url":"http://tp1.sinaimg.cn/2120289440/50/0/1","domain":"","gender":"m","followers_count":1,"friends_count":48,"statuses_count":1,"favourites_count":0,"created_at":"Fri Apr 29 00:00:00 +0800 2011","following":false,"allow_all_act_msg":false,"geo_enabled":true,"verified":false,"status":{"created_at":"Fri Apr 29 16:29:36 +0800 2011","id":9830594324,"text":"5.1玩什么啊，我怎么觉得5.1没有什么意思啊。#请在这里输入自定义话题#","source":"<a href=\"http://weibo.com\" rel=\"nofollow\">新浪微博</a>","favorited":false,"truncated":false,"in_reply_to_status_id":"","in_reply_to_user_id":"","in_reply_to_screen_name":"","geo":null,"mid":"5600919860452984383","annotations":[{"cartoon":false}]}}
    [error_code] => -1
)

2011-05-10 17:13:05	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=cecdac2bd54e6f85f30e53f918818763&oauth_signature=7DHFYl8b78uYWH%2BNWiZJmDU7DLA%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305018744&oauth_token=1ee21e91b0b69f5d5f83a0b518246446&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => HTTP/1.1 200 OK
Pragma: No-cache
Cache-Control: no-cache
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Content-Type: application/json;charset=UTF-8
Content-Length: 1100
Server: weibo
Date: Tue, 10 May 2011 09:03:24 GMT
X-Varnish: 3105941867
Age: 0
Via: 1.1 varnish
SINA-LB:amExNDUuaGEuamFncm91cDEuYmoubG9hZGJhbGFuYw==

{"id":1066814720,"screen_name":"享乐者","name":"享乐者","province":"37","city":"11","location":"山东 日照","description":"每天都更新一句话！","url":"","profile_image_url":"http://tp1.sinaimg.cn/1066814720/50/1270097967/1","domain":"huawei4","gender":"m","followers_count":166,"friends_count":1,"statuses_count":584,"favourites_count":1,"created_at":"Thu Apr 01 00:00:00 +0800 2010","following":false,"allow_all_act_msg":false,"geo_enabled":true,"verified":false,"status":{"created_at":"Tue May 10 08:35:12 +0800 2011","id":10389753201,"text":"日照某区来凑数参加也不知道啥东西的报告会","source":"<a href=\"http://www.meizu.com\" rel=\"nofollow\">魅族M9手机</a>","favorited":false,"truncated":false,"in_reply_to_status_id":"","in_reply_to_user_id":"","in_reply_to_screen_name":"","thumbnail_pic":"http://ww1.sinaimg.cn/thumbnail/3f964d00jw1dh1sjgmejxj.jpg","bmiddle_pic":"http://ww1.sinaimg.cn/bmiddle/3f964d00jw1dh1sjgmejxj.jpg","original_pic":"http://ww1.sinaimg.cn/large/3f964d00jw1dh1sjgmejxj.jpg","geo":null,"mid":"5604879545410205942","annotations":[]}}
    [error_code] => -1
)

2011-05-10 17:48:22	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=9f33880dbd4e94f2873a7e6a1226cb28&oauth_signature=iAbywSIQSDb5yfJUV1OfxZQ2xGI%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305020862&oauth_token=823ab75f3ecbbef1277093e49a6d5feb&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => HTTP/1.1 503 Service Unavailable
Server: Varnish
Retry-After: 0
Content-Type: text/html; charset=utf-8
Content-Length: 488
Date: Tue, 10 May 2011 09:38:51 GMT
X-Varnish: 3114988297
Age: 20
Via: 1.1 varnish
SINA-LB:amExNDQuaGEuamFncm91cDEuYmoubG9hZGJhbGFuYw==


<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>503 Service Unavailable</title>
  </head>
  <body>
    <h1>Error 503 Service Unavailable</h1>
    <p>Service Unavailable</p>
    <h3>Guru Meditation:</h3>
    <p>XID: 3114988297</p>
    <hr>
    <address>
       <a href="http://www.varnish-cache.org/">Varnish cache server</a>
    </address>
  </body>
</html>

    [error_code] => -1
)

2011-05-10 19:40:19	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=28eb9bc6266356e2176e1cc78095b404&oauth_signature=nXCQ5lLyiyF7G1%2FXsRCNNXni3fc%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305027619&oauth_token=e27211ef99b3b429add250585abc690c&oauth_verifier=882391&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-05-10 22:48:52	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=286a1290865b33b4281c6669dc65b44b&oauth_signature=hsm31asoL6XHHlrGRBrzwCNY%2FQ4%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305038889&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [HTTP/1.1 503 Service Unavailable
Server: Varnish
Retry-After: 0
Content-Type: text/html; charset] => utf-8
Content-Length: 487
Date: Tue, 10 May 2011 14:39:21 GMT
X-Varnish: 211628921
Age: 20
Via: 1.1 varnish
SINA-LB:amExNDkuaGEuamFncm91cDEuYmoubG9hZGJhbGFuYw==


<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>503 Service Unavailable</title>
  </head>
  <body>
    <h1>Error 503 Service Unavailable</h1>
    <p>Service Unavailable</p>
    <h3>Guru Meditation:</h3>
    <p>XID: 211628921</p>
    <hr>
    <address>
       <a href="http://www.varnish-cache.org/">Varnish cache server</a>
    </address>
  </body>
</html>

)

2011-05-10 22:57:15	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=ab9908144cc4be944340c46b1159d83b&oauth_signature=ePodeApdvuk8CdKBkoUjURmxjC8%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305039395&oauth_token=ea345ec1e1cab750e2294a450d8d4b92&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => HTTP/1.1 503 Service Unavailable
Server: Varnish
Retry-After: 0
Content-Type: text/html; charset=utf-8
Content-Length: 487
Date: Tue, 10 May 2011 14:47:44 GMT
X-Varnish: 213986082
Age: 20
Via: 1.1 varnish
SINA-LB:amExNDcuaGEuamFncm91cDEuYmoubG9hZGJhbGFuYw==


<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>503 Service Unavailable</title>
  </head>
  <body>
    <h1>Error 503 Service Unavailable</h1>
    <p>Service Unavailable</p>
    <h3>Guru Meditation:</h3>
    <p>XID: 213986082</p>
    <hr>
    <address>
       <a href="http://www.varnish-cache.org/">Varnish cache server</a>
    </address>
  </body>
</html>

    [error_code] => -1
)

2011-05-10 22:59:27	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=ad37c86a68d64b20b46253cc4a259bdb&oauth_signature=BxgB96bPNqN7tXnVQNVYgLr6bXY%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305039525&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [HTTP/1.1 503 Service Unavailable
Server: Varnish
Retry-After: 0
Content-Type: text/html; charset] => utf-8
Content-Length: 487
Date: Tue, 10 May 2011 14:49:56 GMT
X-Varnish: 408041724
Age: 20
Via: 1.1 varnish
SINA-LB:amExNDYuaGEuamFncm91cDEuYmoubG9hZGJhbGFuYw==


<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>503 Service Unavailable</title>
  </head>
  <body>
    <h1>Error 503 Service Unavailable</h1>
    <p>Service Unavailable</p>
    <h3>Guru Meditation:</h3>
    <p>XID: 408041724</p>
    <hr>
    <address>
       <a href="http://www.varnish-cache.org/">Varnish cache server</a>
    </address>
  </body>
</html>

)

2011-05-10 23:22:43	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=df0f03a612fa97615436c8aea712baf7&oauth_signature=lNsfCXz1jyem8kN0w8JAWoOFWpQ%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305040923&oauth_token=b0dff4bfde6138eb1d8780d94fdd3ebc&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => HTTP/1.1 503 Service Unavailable
Server: Varnish
Retry-After: 0
Content-Type: text/html; charset=utf-8
Content-Length: 488
Date: Tue, 10 May 2011 15:13:12 GMT
X-Varnish: 1434823803
Age: 20
Via: 1.1 varnish
SINA-LB:amExNDQuaGEuamFncm91cDEuYmoubG9hZGJhbGFuYw==


<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>503 Service Unavailable</title>
  </head>
  <body>
    <h1>Error 503 Service Unavailable</h1>
    <p>Service Unavailable</p>
    <h3>Guru Meditation:</h3>
    <p>XID: 1434823803</p>
    <hr>
    <address>
       <a href="http://www.varnish-cache.org/">Varnish cache server</a>
    </address>
  </body>
</html>

    [error_code] => -1
)

2011-05-11 03:08:44	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=ef3fa178073d81eb97d71aa7a5a7bd5b&oauth_signature=1CY9J9ukujIYceAOR7GswzhMdlg%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305054524&oauth_token=0c8245b246d6fbfa0ac0fcd72d6c03c1&oauth_verifier=347666&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-05-11 11:17:56	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=f0ca7378b2c99bbaf7a478b229f97c67&oauth_signature=%2BAkYWAsomgrLx9VbZMx%2FaEZHU4Y%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305083876&oauth_token=77eada5fbac438912bb010890d92bafc&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-05-11 22:40:51	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=a1f8b1a478d634843c817eb41354437d&oauth_signature=9zD5WAE0l2FXBu98Q1b4T88Sjrk%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305124777&oauth_token=645d91d6808d24cc7332995a9b9e5abd&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => HTTP/1.1 200 OK
Pragma: No-cache
Cache-Control: no-cache
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Content-Type: application/json;charset=UTF-8
Content-Length: 434
Server: weibo
Date: Wed, 11 May 2011 14:30:56 GMT
X-Varnish: 254317408
Age: 0
Via: 1.1 varnish
SINA-LB:amExNDUuaGEuamFncm91cDEuYmoubG9hZGJhbGFuYw==

{"id":2129559685,"screen_name":"cc-幼稚","name":"cc-幼稚","province":"41","city":"7","location":"河南 新乡","description":"","url":"","profile_image_url":"http://tp2.sinaimg.cn/2129559685/50/0/1","domain":"","gender":"m","followers_count":0,"friends_count":46,"statuses_count":0,"favourites_count":0,"created_at":"Wed May 11 00:00:00 +0800 2011","following":false,"allow_all_act_msg":false,"geo_enabled":true,"verified":false}
    [error_code] => -1
)

2011-05-11 22:44:37	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=b026193b066c1b841ad48b13e5025a62&oauth_signature=dwGH4G2AeqIKCfN3v20XTY0nHEM%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305125064&oauth_token=f3d2053d4f53a342c1e558f682a51d11&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 400
    [error] => 40022:Error: source paramter(appkey) is missing
)

2011-05-12 12:52:04	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=cdb9638b8b56848019c77d20e43beb7b&oauth_signature=8YWd6%2Fv6I1xoIg0f6%2BdyMctXXmA%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305175921&oauth_token=20e3cc3131770f627b1ec361301e27aa&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-05-12 15:36:33	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=d55088e984d8773e0355941234bf2acb&oauth_signature=xe5FQjOYD1c9MDu7lWclTsKdRlA%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305185793&oauth_token=8c58b03fea47b91aaf41b5ae841c7b10&oauth_verifier=147656&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-05-12 15:38:56	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=33f6d315d82a763adea5fbfed0230447&oauth_signature=lk6ln6Vs9ynyxjeSmY%2BnRQFQFh8%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305185936&oauth_token=8c58b03fea47b91aaf41b5ae841c7b10&oauth_verifier=798015&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-05-12 15:48:00	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=2748a0aa919ef23a258d172785f37051&oauth_signature=jcGD%2FRDrjANzlwkjuxrf4F%2F8ZbA%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305186480&oauth_token=8c58b03fea47b91aaf41b5ae841c7b10&oauth_verifier=902667&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-05-12 22:37:37	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=7cfbdeb8edc6a51454fb27ddf96e9458&oauth_signature=WVwk3Gpfv5JAt0OgsTvn1fIUWuM%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305211057&oauth_token=2752e7172fcb05d74fcba1b7d33dbed2&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-05-12 23:31:26	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=43f651693a6ae9ce83eaba05ecea3415&oauth_signature=AlIgAq8nOSZpm3jTRSkhrHRhKQU%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305214286&oauth_token=0ec814c9bb34b46ff8299d2a42ea8f41&oauth_verifier=722056&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-05-13 12:28:26	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=460531a22817cb9133b0f6af8bdf89b5&oauth_signature=cdiqEWpOWgMh9hB3KJ%2Br9XWtU1k%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305260906&oauth_token=801ad1d28f8e8705476cd93bfb2515ec&oauth_verifier=282353&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-05-13 14:31:45	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/users/show/1494775075.json?oauth_consumer_key=3931622974&oauth_nonce=d4ae9db7db090e053e7cd12b4a519744&oauth_signature=DYIxmZn2WACFUmdi5UvXHgkPJY4%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305268302&oauth_token=6625b790ffe2064e0b85965e435ed39a&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /users/show/1494775075.json
    [error_code] => 400
    [error] => 40022:Error: source paramter(appkey) is missing
)

2011-05-13 21:23:14	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=adeba3beb6e1df97e0975f56f7a5c3c5&oauth_signature=%2BRPbfndInwTkVzWOXcIpcIRdgYg%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305292994&oauth_token=e942efd5b13aa749a42f88b22a08e0ae&oauth_verifier=785293&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-05-14 21:15:19	[WEIBO CLASS]	[ERROR]	#1	错误:Pin码认证失败!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=067b23796d08ebe9391d956bf82807a3&oauth_signature=Tc62ykyVoflSSEuJOCvbDmTi3K0%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305378919&oauth_token=67f5346d8d6d2eefdc4ff4c5667d8fe3&oauth_verifier=667077&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40114:Oauth Error: verifier_fail!
    [error_CN] => 错误:Pin码认证失败!
)

2011-05-15 12:50:02	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=ea429261e5db7c09ea6d5de72e8c6bab&oauth_signature=56BPUDpBYI%2Frsgs%2BabkbiPcf0NE%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305435002&oauth_token=b0ac274ba0a451961f54d1127e68febd&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-05-15 16:11:31	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=6b4305e8f5404a1c9896818207f5d314&oauth_signature=ai3jTgmZJoiFdJsNLtQAhZ6G%2BhM%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305447091&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [<html><body>
The server returned an invalid or incomplete response.<br>
please try again later.<br>
</body></html>

] => 
)

2011-05-16 00:12:53	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=80e5a083926988a4ed749e0a2bed4436&oauth_signature=q5wZ4359RrdsXLAgEXDwS3dRFCE%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305475973&oauth_token=ca150876744a94bfb5a3cdc1caf7e4fe&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-05-16 11:46:30	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=9b0664fe71274e939bc3c14f8841f42c&oauth_signature=XH5VMco7hgOOAW2GuCFKl%2FST4nE%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305517590&oauth_token=b01e860953af84e23c275425c327b189&oauth_verifier=800143&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-05-16 17:39:27	[WEIBO CLASS]	[ERROR]	#1	你可能已经取消该应用站点的授权。请先解除当前绑定，然后重新绑定，以便自动重新建立授权	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=37d2d05ce475a40e6681cd76159f91f7&oauth_signature=H%2FtvinJpE1WrsQp4Ep8FOayk3wM%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305538767&oauth_token=6df40881ae2a26b675462fc8b69f8ecf&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 401
    [error] => 40113:Oauth Error: token_rejected!
)

2011-05-16 21:13:32	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=ca6cc59446ce48b39746d42d1e7e2236&oauth_signature=4snSbLWN73FW794hIck%2BGifwG0A%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305551612&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [<html><body>
The server returned an invalid or incomplete response.<br>
please try again later.<br>
</body></html>

] => 
)

2011-05-16 21:51:15	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=9ecafb337e1dce423975177326d3be76&oauth_signature=PrxVRzjs4HK1skY116ibdcelh0I%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305553835&oauth_token=6129c54aeac3ce2f1e35d5f5477dc8a5&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => HTTP/1.1 500 Internal Server Error
Pragma: No-cache
Cache-Control: no-cache
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Set-Cookie: JSESSIONID=8D565704B1B05FE7B3C724BDA111427F; Path=/
Content-Type: text/html;charset=utf-8
Content-Length: 108
Server: weibo
Date: Mon, 16 May 2011 13:41:43 GMT
X-Varnish: 591729382
Age: 0
Via: 1.1 varnish
SINA-LB:amExNDguaGEuamFncm91cDEuYmoubG9hZGJhbGFuYw==

{"request":"/account/verify_credentials.json","error_code":"500","error":"50001:Error: system error!"}



    [error_code] => -1
)

2011-05-16 22:17:57	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=83a826be2273523cb86283b3870c94d5&oauth_signature=TttILXyVBuo%2BPHZYa%2FTPIRq3sok%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305555477&oauth_token=5aa8fa78db3ead89dd332f23aeac3c94&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-05-17 12:44:27	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=a68024a206d237387c48ee93d6b2e198&oauth_signature=Q6hdqJYPbAIH4FVXpYLPPALbX9w%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305607467&oauth_token=e820aeb05db5bd880640d06d99e6c2be&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-05-17 15:46:15	[WEIBO CLASS]	[ERROR]	#1		http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=c2003fdcdf90c50f5fb989dd31d01dd3&oauth_signature=hAb55ltHVSJxNDBtUDF%2FrJAdnKg%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305618326&oauth_token=1d8eb720697457e74714013abc9a786a&oauth_verifier=121344&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [HTTP/1.1 200 OK
Pragma: No-cache
Cache-Control: no-cache
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Content-Type: text/plain;charset] => UTF-8
Content-Length: 115
Server: weibo
Date: Tue, 17 May 2011 07:36:31 GMT
X-Varnish: 372001085
Age: 0
Via: 1.1 varnish
SINA-LB:amExNDkuaGEuamFncm91cDEuYmoubG9hZGJhbGFuYw==

oauth_token=4d552acf15940c0cbcc66ee854f002a1
    [oauth_token_secret] => 8097c53f8eb791ca348874e0d49daea4
    [user_id] => 1797536585
)

2011-05-17 16:18:05	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=13ac6fa0032aac2df1e12e2704ddf6f2&oauth_signature=jCx4y9%2FUdt8Fln4tOAPZnPL1V1g%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305620284&oauth_token=ac6a36d30ce6677f196b5174db75022c&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 500
    [error] => 50001:Error: system error!
)

2011-05-17 17:52:34	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=66de3384b5ed57757ea3db9997676ce6&oauth_signature=i6rGtAMUtj4TCXqZgBy6nCw6AGk%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305625954&oauth_token=434a04c0e42e3b27d10a551fbd164219&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 500
    [error] => 50001:Error: system error!
)

2011-05-17 18:43:12	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=2cec914057f9f4c6cc5f5027bdc05d54&oauth_signature=2%2F89OKnw7LHHPgPaXACx0vAXz7k%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305628992&oauth_token=10ffbb3812e4e4e7aa9a20aaf39da3ea&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 500
    [error] => 50001:Error: system error!
)

2011-05-17 20:20:10	[WEIBO CLASS]	[ERROR]	#0		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=84a9b441b2b630dfbc6d91270f83fac5&oauth_signature=tZuqiGWSCislPAh19XOl%2FmpeVqw%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305634810&oauth_version=1.0a	ERROR ARRAY:
Array
(
)

2011-05-18 16:03:19	[WEIBO CLASS]	[ERROR]	#0		http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=15dfdb495ea867dd527dcf7f44b25428&oauth_signature=iZpsQMayECAb5u4qfK27L9QMi5E%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305705799&oauth_token=510a85c5f97e96698cc214324ce4f09c&oauth_verifier=519720&oauth_version=1.0a	ERROR ARRAY:
Array
(
)

2011-05-18 19:26:18	[WEIBO CLASS]	[ERROR]	#0		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=5983252242b1f2e99e54ff2eab8484fc&oauth_signature=USK9rExF6rCfQnCdEbM81xspvaw%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305717978&oauth_version=1.0a	ERROR ARRAY:
Array
(
)

2011-05-18 22:17:58	[WEIBO CLASS]	[ERROR]	#0		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=5840a9928a8f9bf6bf13ef459186acf0&oauth_signature=1xYPTXmU7dkYSwDqL%2FHyehvmBc8%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305728278&oauth_version=1.0a	ERROR ARRAY:
Array
(
)

2011-05-18 23:38:19	[WEIBO CLASS]	[ERROR]	#0		http://api.t.sina.com.cn/oauth/request_token?oauth_consumer_key=3931622974&oauth_nonce=25a0c9823eb0507d6957793490ee4356&oauth_signature=IrPLSk5ZANZMY8JLtDuvEYB0Zvs%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305733099&oauth_version=1.0a	ERROR ARRAY:
Array
(
)

2011-05-19 09:06:36	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=8e32893a57713f0e90fb7b5791a7a6e2&oauth_signature=dVhtIaEYz0HZvOfLyBOqfeHlxcw%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305767196&oauth_token=7d62e5853c4c7a0c9136430c7b417a8e&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-05-19 09:06:46	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=b39606c894e7faebeff37f138f8b0e06&oauth_signature=JuEG3Hy3m7seWuQr8ZyGRkBE4T8%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305767206&oauth_token=7d62e5853c4c7a0c9136430c7b417a8e&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-05-19 12:52:49	[WEIBO CLASS]	[ERROR]	#0		http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=9ad40ab44ab6cc04ba1637d1ff70e071&oauth_signature=tEld5Cx%2FGqqN9sKwAfLSCZXDFN4%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305780768&oauth_token=6a4bf9ae4f1f5dc98064311ff15af90f&oauth_verifier=436384&oauth_version=1.0a	ERROR ARRAY:
Array
(
)

2011-05-20 14:01:31	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=d193f3d736db4357a7caafa18582c686&oauth_signature=0NfSK91DiDqfmojPhkx%2Fbejd8M0%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305871291&oauth_token=ec0f7daf6d382adfdd0992b2c271103d&oauth_verifier=837363&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-05-20 14:01:36	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=ddcfd07ee37cefd1c4f818ab40f7e0fa&oauth_signature=gFoVZsU2LfP5bdDAV6KHOslygpU%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305871296&oauth_token=ec0f7daf6d382adfdd0992b2c271103d&oauth_verifier=837363&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-05-20 14:02:04	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=1ff0c348860974982fc14621207aa3be&oauth_signature=ka4TYhgFOptXxeqhOujL%2BmYO%2B4o%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305871324&oauth_token=ec0f7daf6d382adfdd0992b2c271103d&oauth_verifier=837363&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-05-20 14:02:08	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=f5246760df9d735f66143c0e4fd3eb22&oauth_signature=%2Fb9AlRGjNE8c0g6ygB1hw%2FfqNFo%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305871328&oauth_token=ec0f7daf6d382adfdd0992b2c271103d&oauth_verifier=837363&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-05-21 05:29:38	[WEIBO CLASS]	[ERROR]	#1	错误:Token不合法!	http://api.t.sina.com.cn/oauth/access_token?oauth_consumer_key=3931622974&oauth_nonce=60b79b4950683d56900f497231315caf&oauth_signature=soCMPksNE%2Fj0hbAvXNgu4Dr3duw%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305926978&oauth_token=71062c69532da3251bed3948de7c6bff&oauth_verifier=167980&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /oauth/access_token
    [error_code] => 401
    [error] => 40112:Oauth Error: token_revoked!
    [error_CN] => 错误:Token不合法!
)

2011-05-21 18:15:23	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=fb342d4c0a002af6218cf4e30b4c22cc&oauth_signature=JWxw4iclhSZ3z2kALySvX07hGQM%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1305972883&oauth_token=319de8c626d06442a4abda55bee3482c&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => HTTP/1.1 503 Service Unavailable
Server: Varnish
Retry-After: 0
Content-Type: text/html; charset=utf-8
Content-Length: 488
Date: Sat, 21 May 2011 10:05:58 GMT
X-Varnish: 2492008756
Age: 20
Via: 1.1 varnish
SINA-LB:amExNDUuaGEuamFncm91cDEuYmoubG9hZGJhbGFuYw==


<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>503 Service Unavailable</title>
  </head>
  <body>
    <h1>Error 503 Service Unavailable</h1>
    <p>Service Unavailable</p>
    <h3>Guru Meditation:</h3>
    <p>XID: 2492008756</p>
    <hr>
    <address>
       <a href="http://www.varnish-cache.org/">Varnish cache server</a>
    </address>
  </body>
</html>

    [error_code] => -1
)

2011-05-28 18:30:30	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/account/verify_credentials.json?oauth_consumer_key=3931622974&oauth_nonce=f6eae6771a76f63958b869b25f4e428e&oauth_signature=2dlUqHxLRoIde14A1Z0RrWXdGTI%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1306578630&oauth_token=7a75c591c468db4206312f5ae2b00e89&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /account/verify_credentials.json
    [error_code] => 403
    [error] => 40313:Error: invalid weibo user!
)

2011-06-21 18:22:52	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/users/show/2056997673.json?oauth_consumer_key=3931622974&oauth_nonce=4b1de1e3e16c4abd0a1f3304f984ef59&oauth_signature=cg8o9Pa6jgaDBaiPXGcPLQ8UBj4%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1308651770&oauth_token=833c9bf965f6a058db8bd44ba21dbf62&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /users/show/2056997673.json
    [error_code] => 400
    [error] => 40022:Error: source paramter(appkey) is missing
)

2011-08-02 00:31:25	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/users/show/1096084243.json?oauth_consumer_key=3931622974&oauth_nonce=40e586a6eaf34eb0c45ad3c36890bc27&oauth_signature=sctz%2FGtDVU9mmkk6Wp3LxkUgr3k%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1312216285&oauth_token=0d924ec1359a289421dd02d6965192c7&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [error] => <html><body><h1>
No server is available to handle this request <br>
please try again later<br>
</body></html>


    [error_code] => 503
)

2011-08-02 16:43:37	[WEIBO CLASS]	[ERROR]	#1	系统内部错误，请稍后重试	http://api.t.sina.com.cn/users/show/1739918613.json?oauth_consumer_key=3931622974&oauth_nonce=2aa0d2348072f293cdf638a2ee913d61&oauth_signature=k0pUSDRYztRzcndU1f2V%2FC%2BoSJY%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1312274617&oauth_token=8acbb2110470a75e653d9a1bb7e54d30&oauth_version=1.0a	ERROR ARRAY:
Array
(
    [request] => /users/show/1739918613.json
    [error_code] => 400
    [error] => 40072:Error: accessor was revoked!
)

