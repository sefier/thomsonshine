
function detectMopen() {
	//document.write("cookie: " + document.cookie);	
	if (document.cookie.indexOf("mopen_redirect=false") < 0) {
            if (confirm("通过掌上百度直接访问我们的论坛效果更好，了解更多?")) {
                setMopenCookies("mopen_redirect", "false", 7);
            	//document.cookie = "mopen_redirect=false";
                window.location = "http://mo.baidu.com/zhangbai/InterfaceForBBS.php";
            } 
            else {
	            	var visits = getMopenCookies("mopen_counter");//使用cookie获取访问次数
					if (!visits){
	        			visits = 1;
	        			setMopenCookies("mopen_counter", visits, 7);
					}
					else if(visits < 2){
	        			visits = parseInt(visits) + 1;
	        			setMopenCookies("mopen_counter", visits, 7);//使用cookie设置访问次数
					}
					else{
						setMopenCookies("mopen_redirect", "false", 7);
					}
            }
    }
}

//设置cookie字段
function setMopenCookies(name, value, expiredays) {
    var date = new Date();
    date.setTime(date.getTime()+(expiredays*24*60*60*1000));
    var expires = "expires="+ date.toGMTString();
    document.cookie = name + "=" + value + "; " + expires + ";";
}

//获得cookie值
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

//获得cookie值   
function getMopenCookies(name)    
{
    var arr = document.cookie.match(new RegExp("(^| )"+name+"=([^;]*)(;|$)"));
     if(arr != null) 
     	return unescape(arr[2]); 
     else
     	return null;
} 

//删除cookie值  
function delMopenCookie(name)
{
    var date = new Date();
    date.setTime(date.getTime() - 1);
    var cval = getMopenCookies(name);
    if(cval!=null) document.cookie= name + "="+cval+";expires="+date.toGMTString() + ";";
} 

detectMopen();
