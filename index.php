
<?php session_start();

if(!isset($_SESSION['valid_user'])){
    echo '<script>alert("请先登录再查看代码");</script>';
    echo '<script>window.location.href="http://www.chensihang.com/login.php"</script>';
    exit;
}
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<head lang="zh">
    <script charset="utf-8">
        function login(){
            window.location.href="./login.php"
        }
    </script>
  <meta charset="UTF-8">
  <title>沉思·航</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="alternate icon" type="image/png" href="assets/i/favicon.png">
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <style>
    @font-face{
        font-family: 'Source';
        src:url(./fonts/Fira.ttf)
    }
    .personal{
        font-family: 'Source';
        font-weight: bold;
        font-size:16px;
    }
    .get {
      background: url("./test.jpg");
      color: white;
      text-align: center;
      padding: 100px 0;
    }
    
    .whitetext{
        color:white;
    }

    .get-title {
      font-size: 200%;
      border: 2px solid #fff;
      padding: 20px;
      display: inline-block;
    }

    .get-btn {
      background: #fff;
    }

    .detail {
      font-size: 15px;
      background: #fff;
    }

    .detail-h2 {
      text-align: center;
      font-size: 150%;
      margin: 40px 0;
    }

    .detail-h3 {
      color: #1f8dd6;
    }

    .detail-p {
      color: #7f8c8d;
    }

    .detail-mb {
      margin-bottom: 30px;
    }

    .hope {
      background: #1E5B94;
      padding: 40px 0;
    }

    .hope-img {
      text-align: center;
    }

    .hope-hr {
      border-color: #149C88;
    }

    .footer p {
      color: #7f8c8d;
      margin: 0;
      padding: 15px 0;
      text-align: center;
      background: #2d3e50;
    }
  </style>
  <script charset="utf-8">
  function change()
  
{
    var lis=document.getElementsByTagName("li");
    for(var i=0; i<lis.length; i++)
    {
        
        lis[i].onclick=function()
        
    {
        for(var j=0; j<lis.length; j++)
        {
            lis[j].className="";
        }
        this.className="am-active";
    };
    }
}
  </script>
</head>
<body>
<header class="am-topbar am-topbar-fixed-top">
  <div class="am-container">
    <h1 class="am-topbar-brand">
      <div class="am-sans-serif"><a href="#">沉思·航</a></div>
    </h1>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-secondary am-show-sm-only"
            data-am-collapse="{target: '#collapse-head'}"><span class="am-sr-only">导航切换</span> <span
        class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse am-sans-serif" id="collapse-head">
      <ul class="am-nav am-nav-pills am-topbar-nav">
        <li class="am-active" onclick="change()"><a href="#">首页</a></li>
        <li onclick="change()"><a href="./blog">博客</a></li>
        <li class="am-dropdown" data-am-dropdown onclick="change()">
          <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
            其他
          </a>
          <ul class="am-dropdown-content">
            <li><a href="./codeshare.php">代码分享</a></li>
            <li><a href="./jwc">服务功能</a></li>
            <li><a href="./aboutDeveloper.php">关于站长</a></li>
            <li><a href="./feedback.php">问题反馈</a></li>
          </ul>
        </li>
      </ul>

      <div class="am-topbar-right">
          <?php
          if(!isset($_SESSION["valid_user"])){
              echo '<button class="am-btn am-btn-primary m am-topbar-btn am-btn-sm" onclick="login()"><span class="am-icon-user"></span>&nbsp;登录</button>';
          }
          else{
              echo '<div class="am-dropdown" data-am-dropdown>
              <button class="am-btn am-btn-success am-btn-sm am-topbar-btn am-dropdown-toggle" data-am-dropdown-toggle><span class="am-icon-user"></span>&nbsp;'.$_SESSION['valid_user'].'</button>
              <ul class="am-dropdown-content">
              <li class="am-dropdown-header"><a href="./signout.php">注销</a></li>
              </ul>
              </div>';
          }
          
          
          ?>
      </div>
    </div>
  </div>
</header>

<div class="get am-sans-serif" style="-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing: auto">
  <div class="am-g">
    <div class="am-u-lg-12">
      <h1 class="get-title">沉思·航 - 在线学术博客和代码分享</h1>

          <?php 
          if (!isset($_SESSION['valid_user'])){
              echo '<p>学术自由，代码开放，快来加入我们吧</p>';
              echo '<p><a href="./register.php" class="am-btn am-btn-sm get-btn">点击此处注册</a></p>';
          }?>
    </div>
  </div>
</div>

<div class="detail">
  <div class="am-g am-container">
    <div class="am-u-lg-12">
      <h2 class="detail-h2"></h2>

      <div class="am-g">
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">

          <h3 class="detail-h3">
            <i class="am-icon-share-alt am-icon"></i>
            <a href="./blog">学术分享博客</a>
          </h3>

          <p class="detail-p">
            开发者会分享一些程序代码或者算法思想上的先进博文供大家学习交流，共同提高。
          </p>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
          <h3 class="detail-h3">
            <i class="am-icon-code am-icon"></i>
            <a href="./codeshare.php">代码共享平台</a>
          </h3>

          <p class="detail-p">
            开发者会将自己和好友的程序源码放于此站点进行共享，充分体现开源的特点和优势。
          </p>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
          <h3 class="detail-h3">
            <i class="am-icon-gear am-icon"></i>
        </a href="./services">服务功能</a>
          </h3>

          <p class="detail-p">
            网站会提供诸如教务处成绩查询及加权平均分和绩点计算功能等其余服务功能，为大家的学习生活提供方便。
          </p>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
          <h3 class="detail-h3">
            <i class="am-icon-gavel am-icon"></i>
            <a href="./codeTestProgram.php">测试媒介</a>
          </h3>

          <p class="detail-p">
              和本站开发者进行沟通后，将可以免费提供服务器对其他开发者进行移动端或桌面端开发的服务器端平台。
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="hope personal">
  <div class="am-g am-container">
    <div class="am-u-lg-4 am-u-md-6 am-u-sm-12 hope-img">
      <img src="assets/i/examples/landing.png" alt="" data-am-scrollspy="{animation:'slide-left', repeat: false}">
      <hr class="am-article-divider am-show-sm-only hope-hr">
    </div>
    <div class="am-u-lg-6 am-u-md-6 am-u-sm-12 whitetext">
        <p>Do not go gentle into that good night,</p>
        <p>Old age should burn and rave at close of day;</p>
        <p>Rage, rage against the dying of the light.</p>
        <p>Though wise men at their end know dark is right,</p>
        <p>Because their words had forked no lightning they</p>
        <p>Do not go gentle into that good night.</p>
    </div>
  </div>
</div>


<footer class="footer">
  <p>CopyRight © 2015 沉思·航 All Rights Reserved</p>
  <p>备案号：蜀ICP备15000988号             <a href="./feedback.php">联系我们</a></p> 
</footer>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<!--<![endif]-->
</body>
</html>
