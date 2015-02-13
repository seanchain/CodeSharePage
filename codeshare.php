<?php 
session_start();

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
        <li onclick="change()"><a href="#">首页</a></li>
        <li onclick="change()"><a href="./blog">博客</a></li>
        <li class="am-active" onclick="change()"><a href="#">代码分享</a></li>
        <li class="am-dropdown" data-am-dropdown onclick="change()">
           <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
            其他
          </a>
          <ul class="am-dropdown-content">
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


<br><br><br>
<div class="am-g am-g-fixed blog-g-fixed am-sans-serif">
  <div class="am-u-md-8">
    <article class="blog-main">
      <h3 class="am-article-title blog-title">
        <a href="https://coding.net/u/seanchain/p/PresentWeb/git">PresentWeb:HTML5展示工具</a>
      </h3>
      <h4 class="am-article-meta blog-meta">by <a href="http://www.github.com/seanchain">Chen Sihang</a> posted on 2015/02/12 </h4>

      <div class="am-g blog-content">
        <div class="am-u-lg-7">
          <p>在生活中，我们一定会遇到做Presentation的时候，而传统的Presentation软件例如微软的PPT，在现实方法上形式单一，灵活性不高。</p>

          <p>impress.js为我们提供了一种新的解决方案。</p>

          <p>通过对HTML代码的书写，利用HTML5和JavaScript，我们可以写出优秀的Web界面用于Presentation，初次以外，通过Markdown和代码语法的功能加入，我们可以写出更有创意的Presentation。</p>
        </div>
        <div class="am-u-lg-5">
          <p><img src="assets/codepic/a.png"></p>
        </div>
      </div>
      <div class="am-g">
      </div>
    </article>

    <hr class="am-article-divider blog-hr">

    <article class="blog-main">
      <h3 class="am-article-title">
        <a href="https://coding.net/u/seanchain/p/SCU_ScoreCounter/git">SCU_ScoreCounter:四川大学在线成绩查询</a>
      </h3>
      <h4 class="am-article-meta blog-meta">by <a href="">Chen Sihang</a> posted on 2015/02/13
      </h4>

      <div class="am-g blog-content">
        <div class="am-u-lg-7">
            <p>大家可能遇到过这样的情况：每学期考试结束之后，等待趁机揭晓似乎成了一件让人心烦的事情，一是学校的教务处系统成绩查询起来相当不变，并且并没有针对性的显示出成绩的绩点和加权平均，大家无法知道自己这一学期的成绩水平，除此以外，成绩单不能直接保存也给大家带来了些许不变。</p>
          <p>而这个项目的出发点就是通过大家输入的学号和密码去一键查找自己的成绩，并且计算出大家的加权平均分和绩点，显示出来,并提供成绩的PDF转换和下载功能，只要服务器端部署了wkhtmltopdf环境，即可轻松将原网页转化为PDF，供用户下载。</p>
        </div>
        <div class="am-u-lg-5">
          <p><img src="assets/codepic/b.png"></p>
        </div>
      </div>
      <div class="am-g">
        <div class="am-u-sm-12">
          <p>项目采用了PHP、simple_html_dom和wkhtmltopdf等开发工具，并使用了Amazeui的前端开发框架，功能在线演示<a href="www.chensihang.com/jwc">点此</a></p>
        </div>
      </div>
    </article>

    <hr class="am-article-divider blog-hr">
    <ul class="am-pagination blog-pagination">
      <li class="am-pagination-prev"><a href="">« 上一页</a></li>
      <li class="am-pagination-next"><a href="">下一页 »</a></li>
    </ul>
  </div>
  

  <div class="am-u-md-4 blog-sidebar">
    <div class="am-panel-group">
      <section class="am-panel am-panel-default">
        <div class="am-panel-hd">关于开发者</div>
        <div class="am-panel-bd">
          <p>开发者为四川大学软件学院2013级的学生，在当代，越来越多的开源项目正在让计算机或者说软件行业逐步发展进步，而网站设立的初衷正是于此，我会把我自己写的和觉得写得比较好的开源项目分享出来，供大家一起学习、探讨、进步。</p>
            <p>联系方式：见我的 <a href="./aboutDeveloper.php">Profile</a></p>
            <p>或直接在站内给我反馈 <a href="./feedback.php">Feedback</a></p>
          <a class="am-btn am-btn-success am-btn-sm" href="./index.php">查看更多 →</a>
        </div>
      </section>
      <section class="am-panel am-panel-default">
        <div class="am-panel-hd">项目目录</div>
        <ul class="am-list blog-list">
          <li><a href="https://coding.net/u/seanchain/p/PresentWeb/git">PresentWeb:HTML5展示工具</a></li>
          <li><a href="https://coding.net/u/seanchain/p/SCU_ScoreCounter/git">SCU_ScoreCounter:四川大学在线成绩查询</a></li>
        </ul>
      </section>
    </div>
  </div>

</div>

<footer class="footer">
  <p>CopyRight © 2015 沉思·航 All Rights Reserved</p>
  <p>备案号：蜀ICP备15000988号             <a href="./feedback.php">联系我们</a></p> 
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/js/polyfill/rem.min.js"></script>
<script src="/js/polyfill/respond.min.js"></script>
<script src="/js/amazeui.legacy.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<!--<![endif]-->


</body></html>