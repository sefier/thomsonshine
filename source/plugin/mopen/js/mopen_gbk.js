
function detectMopen() {
	//document.write("cookie: " + document.cookie);	
	if (document.cookie.indexOf("mopen_redirect=false") < 0) {
            if (confirm("ͨ�����ϰٶ�ֱ�ӷ������ǵ���̳Ч�����ã��˽����?")) {
                setMopenCookies("mopen_redirect", "false", 7);
            	//document.cookie = "mopen_redirect=false";
                window.location = "http://mo.baidu.com/zhangbai/InterfaceForBBS.php";
            } 
            else {
	            	var visits = getMopenCookies("mopen_counter");//ʹ��cookie��ȡ���ʴ���
					if (!visits){
	        			visits = 1;
	        			setMopenCookies("mopen_counter", visits, 7);
					}
					else if(visits < 2){
	        			visits = parseInt(visits) + 1;
	        			setMopenCookies("mopen_counter", visits, 7);//ʹ��cookie���÷��ʴ���
					}
					else{
						setMopenCookies("mopen_redirect", "false", 7);
					}
            }
    }
}

//����cookie�ֶ�
function setMopenCookies(name, value, expiredays) {
    var date = new Date();
    date.setTime(date.getTime()+(expiredays*24*60*60*1000));
    var expires = "expires="+ date.toGMTString();
    document.cookie = name + "=" + value + "; " + expires + ";";
}

//���cookieֵ
/*function getMopenCookies(name) {
        var prefix = name + "=";
        var cookieStartIndex = document.cookie.indexOf(prefix);
        if (cookieStartIndex == -1)
            return null;
        var cookieEndIndex = document.cookie.indexOf(";", cookieStartIndex + prefix.length);
        if (cookieEndIndex == -1)
           cookieEndIndex = document.cookie.length;
        return unescape(document.cookie.substring(cookieStartIndex + prefix.length, cookieEndIndex));
}*/

//���cookieֵ   
function getMopenCookies(name)    
{
    var arr = document.cookie.match(new RegExp("(^| )"+name+"=([^;]*)(;|$)"));
     if(arr != null) 
     	return unescape(arr[2]); 
     else
     	return null;
} 

//ɾ��cookieֵ  
function delMopenCookie(name)
{
    var date = new Date();
    date.setTime(date.getTime() - 1);
    var cval = getMopenCookies(name);
    if(cval!=null) document.cookie= name + "="+cval+";expires="+date.toGMTString() + ";";
} 

detectMopen();
