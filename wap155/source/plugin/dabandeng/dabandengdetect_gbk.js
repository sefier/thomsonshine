function detectDabandeng() {
    if (document.cookie.indexOf("dabandeng_redirect=false") < 0) {
        if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
            if (confirm("���ǵ���̳����ͨ�� iPhone ����Ӧ��ֱ�ӷ��ʣ��˽���ࣿ")) {
                document.cookie = "dabandeng_redirect=false";
                window.location = "http://www.dabandeng.com/files/wap/index.html";
            } else {
                setDabandengCookies();
            }
        } else if(navigator.userAgent.match(/android/i)) {
            if (confirm("���ǵ���̳����ͨ�� android ����Ӧ��ֱ�ӷ��ʣ��˽���ࣿ")) {
                document.cookie = "dabandeng_redirect=false";
                window.location = "http://www.dabandeng.com/files/wap/index.html";
            } else {
                setDabandengCookies();
            }
//        } else if((navigator.userAgent.match(/Symbian/i)) || (navigator.userAgent.match(/Nokia/i))) {
//            if (confirm("���ǵ���̳����ͨ�� Nokia ����Ӧ��ֱ�ӷ��ʣ��˽���ࣿ")) {
//                document.cookie = "dabandeng_redirect=false";
//                window.location = "http://store.ovi.com/content/22647?clickSource=browse&contentArea=applications";
//            } else {
//                setDabandengCookies();
//            }
        }
    }
}
function setDabandengCookies() {
    var date = new Date();
    var days = 30;
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+ date.toGMTString();
    document.cookie = "dabandeng_redirect=false" + expires;
}
detectDabandeng();
