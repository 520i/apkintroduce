<?php
	//  《App下载页》
	//  Created by 杰哥哥 on 2019-04-19.
	//	QQ ： 1615958039.
	
	
	error_reporting(0);
	header("Content-Type: text/html;charset=utf-8");
	$c = json_decode(file_get_contents("config.json"),TRUE);
?>
<html>
<head>
    <link rel="shortcut icon" href="<?=$c['icon']?>"/>
    <title><?=$c['title']?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; minimum-scale=1.0; maximum-scale=1.0">	
    <meta name="keywords" content="<?$c['keywords']?>">
    <meta name="description" content="<?$c['description']?>">
        <style type="text/css">
        a {text-decoration: none}
        body {margin: 0 auto;max-width: 880px;box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);min-width: 320px;padding-bottom: 0.1px}
        html { background: #eee}
        * {letter-spacing: 1px;font-family: 'Helvetica', 'Droidsansfallback', 'Heiti SC';box-sizing: border-box;outline: none;margin: 0;padding: 0;text-decoration: none;-webkit-tap-highlight-color: rgba(0, 0, 0, 0);color: #333;}
        .icon {width: 60px;height: 60px;margin-top: 15px;}
        .title {font-size: 15px; margin-top: 10px;}
        p {font-size: 12pt;color: #448AFF;margin-top: 5px;}
        .content {margin-top: 10px;font-size: 14px;color: #757575;margin-bottom: 15px;}
        .picture{overflow-x:scroll;width:100%;white-space:nowrap;margin-bottom: 25px;}
        .child {display: inline-block;margin-left: 10px; }
        .p {font-size: 12px;color: #939393;margin-top: 4px;}
        .show {background: #fff;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.2);border-radius: 2px;font-size: 14px;color: #616161;word-wrap: break-word;padding-top: 10px;}
        .down {border-top-left-radius: 0.5em;border-top-right-radius: 0.5em;border-bottom-left-radius: 0.5em;border-bottom-right-radius: 0.5em;border-top-width: 0px;border-right-width: 0px;border-bottom-width: 0px;border-left-width: 0px;margin-top: 10px;color: #ffffff;background: #448AFF;width: 100px;height: 30px;margin-bottom: 20px;}
        .review{margin: 15px;font-size: 14px;color: #424242}
        .user{margin-left: 15px;margin-top: 10px;}
        .title2{color:#455A64 ;margin-top: 5px;margin-left: 30px;font-size: 14px;}
   </style>
</head>


<body>
<div class="show" align="center">
    <img class="icon" src="<?=$c['appicon']?>">
    <div class="title"><b><?=$c['appname']?></b></div>
    <div class="p">
        版本：<?=$c['appv']?> 大小：<?=$c['appsize']?> MB </div>
    <button class="down" onclick="window.location.href ='<?=$c['apkurl']?>'">下载软件</button>
</div>


  
  <div class="show" style="margin-top: 15px;padding-left: 15px;padding-right: 5px;">
    <p>更新内容:</p>
    <div class="content"><?=$c['news']?></div>

    <p>软件介绍:</p>
    <div class="content"><?=$c['text']?></div>
  
  
  
  
  
  

    <p>软件截图（点击图片可以放大）</p>
    <div class="picture">
        <a href="<?=$c['img1']?>">
            <img src="<?=$c['img1']?>" width="45%" height="50%">
        </a>
        <a href="<?=$c['img2']?>">
            <img src="<?=$c['img2']?>" width="45%" height="50%">
        </a>
        <a href="<?=$c['img3']?>">
            <img src="<?=$c['img3']?>" width="45%" height="50%">
        </a>
        <a href="<?=$c['img4']?>">
            <img src="<?=$c['img4']?>" width="45%" height="50%">
        </a>
    </div>
</div>


<div style=";margin: 10px;padding-bottom: 20px;" class="show">
	<div align="center" style="font-size: 15px;margin-top: 10px;">用户评价</div>
    <div class="review">“以为是随着主流刨的坑，但自己仔细看了一下，感觉做得蛮细心的。”</div>
        
    <div class="user">
        <img class="child" src="https://q4.qlogo.cn/headimg_dl?dst_uin=1179075057&spec=100" width="40px" height="40px">
        <div class="child">
            <div style="font-size: 13px;margin-bottom: 8px;">叮当猫</div>
            <div style="font-size: 13px;">UI设计师</div>
        </div>
    </div>

    <div class="review">“ 因为专注 所以长久”
    </div>
    <div class="child">
        <img class="child" src="https://q4.qlogo.cn/headimg_dl?dst_uin=1179075057&spec=100" width="40px" height="40px">
        <div class="child">
            <div style="font-size: 13px;margin-bottom: 8px;">中二病</div>
            <div style="font-size: 13px;">开发者</div>
        </div>
    </div>

</div>

<div class="show" style="padding-top: 20px;padding-bottom: 20px;margin: 10px;">
    <div style="font-size: 15px;" align="center">云数据</div>
    <div class="title2">软件总用户量：2**</div>
    <div class="title2">软件总启动量：秘密</div>
    <div class="title2">平台稳定运营：不告诉你天</div>
</div>


<div style="width=100%;background: #333;padding: 5px;" align="center">
    <div style="font-size: 10pt;;margin-left: 10px;margin-top: 20px;">
        <a href="http://wpa.qq.com/msgrd?v=3&uin=<?=$c['qq']?>&site=qq&menu=yes" style="color: #E0E0E0">联系QQ<?=$c['qq']?></a>
    </div>
    <div style="text-align:center;font-size:12px;color:#BDBDBD;margin:25px;margin-bottom: 35px;">叮当猫版权所有</div>
</div>

<audio src="<?$c=['audio']?>" id="audio" hidden="true" autoplay loop></audio>
</body>
</html>