<?php
include '/home/sendcloud_php/SendCloudLoader.php';
try {
    $sendCloud = new SendCloud('postmaster@test3g.sendcloud.org', 'WwwRzlX1');
    $message = new SendCloud\Message();
    $message->addRecipient('543029299@qq.com') 
            ->setSubject('SendCloud PHP SDK..')  // ....
            ->setBody("<strong>SendCloud PHP SDK</strong> <a href='http://sendcloud.sohu.com'>SendCloud</a>");    
    echo $sendCloud->send($message);
} catch (Exception $e) {
        print "....:";
        print $e->getMessage();
}
