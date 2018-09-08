<?php
require (__DIR__."/vendor/autoload.php");
use Carbon\Carbon;
//設定語系
//Carbon::setLocale('zh-TW');
$day=Carbon::createFromFormat("Y-m-d H:i:s","2016-12-15 4:21:56");//以指定日期時間建立一個carbon實體
$now=Carbon::now();//以現在時間建立carbon實體
//設定時區
$now->setTimezone("Asia/Taipei");
$day->setTimezone("Asia/Taipei");
//取得該日期與現在時間的差距
$diff=$day->diffForHumans();
//輸出
echo "NOWTIME:" . $now . "<BR>";
echo "距離2016-12-15 4:21:56已經過了" .$diff ."<BR>";
//自動載入策略
$psr=new \App\TestClass();
echo "<BR>";
$classmap=new test();
echo "<BR>";
$files=new good();