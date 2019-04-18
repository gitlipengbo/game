<?php
$taskid = $argv[3];
$dk = $argv[4];
$db = array();
echo $dk;
$server = array();
ouput("读取配置");
$typelist = array();
$yslist = array();
$worker = new Worker('websocket://0.0.0.0:' . $dk);
Worker::$stdoutFile = '/auto/stdout.log';