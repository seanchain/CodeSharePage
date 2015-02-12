<?php 
session_start();
/*
if(!isset($_SESSION['valid_user'])){
    echo '<script>alert("请先登录再查看代码");</script>';
    echo '<script>window.location.href="http://www.chensihang.com/login.php"</script>';
    exit;
}
*/
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
        <a href="#">PresentWeb</a>
      </h3>
      <h4 class="am-article-meta blog-meta">by <a href="www.github.com/seanchain">Chen Sihang</a> posted on 2015/02/12 </h4>

      <div class="am-g blog-content">
        <div class="am-u-lg-7">
          <p>在生活中，我们一定会遇到做Presentation的时候，而传统的Presentation软件例如微软的PPT，在现实方法上形式单一，灵活性不高。</p>

          <p>impress.js为我们提供了一种新的解决方案。</p>

          <p>通过对HTML代码的书写，我们可以写出优秀的Web界面用于Presentation，初次以外，通过Markdown和代码语法的功能加入，我们可以写出更有创意的Presentation。</p>
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
        <a href="#">身邊的字體: Arial (上)</a>
      </h3>
      <h4 class="am-article-meta blog-meta">by <a href="">ben</a> posted on 2014/06/17 under <a href="#">javascript</a>
      </h4>

      <div class="am-g blog-content">
        <div class="am-u-lg-7">
          <p><!--本demo文字来自 http://blog.justfont.com/--> 这次要介绍的是大家似乎都狠熟悉却又狠陌生的字体：Arial。不只是对 Typography
            特别有兴趣的人、碰过排版的人，就算毫无接触，只要打开过电脑的字型选单，应该都有看过这个字型吧。尤其它还是以 A 开头，总是会出现在选单最前面。</p>

          <p>Arial 常常跟 Helvetica 搞混，也常被当作是没有 Helvetica 时的替代字体使用。事实上 Arial 确实就是故意做得跟 Helvetica 狠相似，连每个字母的宽度都刻意做得一模一样。</p>
        </div>
        <div class="am-u-lg-5">
          <p><img src="Blog%20%7C%20Amaze%20UI%20Example_files/14186214720_5d0b8ca2e3_b.jpg"></p>
        </div>
      </div>
      <div class="am-g">
        <div class="am-u-sm-12">
          <p>在欧美的排版业界中，使用 Arial 的作品意即是「不使用 Helvetica 的作品」，会被认為是设计师对字体的使用没有概念或是太容易妥协，基本上我大致也是同意。</p>

          <p>因為 Helvetica 只有 Mac 上才有內建，Windows 用戶除非花錢買，不然是沒有 Helvetica 能用，所以使用 Arial 的設計師往往被看成是不願意對 Typography
            花錢，專業素養不到家的人。除了在確保網頁相容性等絕對必需的情況外，幾乎可以說是不應該使用的字體。</p>

          <p>但是，在此之前，我們對 Arial 又有多少認識呢？</p>
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
        <div class="am-panel-hd">关于我</div>
        <div class="am-panel-bd">
          <p>前所未有的中文云端字型服务，让您在 web 平台上自由使用高品质中文字体，跨平台、可搜寻，而且超美。云端字型是我们的事业，推广字型学知识是我们的志业。从字体出发，关心设计与我们的生活，justfont blog
            正是為此而生。</p>
          <a class="am-btn am-btn-success am-btn-sm" href="#">查看更多 →</a>
        </div>
      </section>
      <section class="am-panel am-panel-default">
        <div class="am-panel-hd">文章目录</div>
        <ul class="am-list blog-list">
          <li><a href="#">Google fonts 的字體（sans-serif 篇）</a></li>
          <li><a href="#">[but]服貿最前線？－再訪桃園機場</a></li>
          <li><a href="#">到日星鑄字行學字型</a></li>
          <li><a href="#">glyph font vs. 漢字（上）</a></li>
          <li><a href="#">浙江民間書刻體上線</a></li>
          <li><a href="#">[極短篇] Android v.s iOS，誰的字體好讀？</a></li>
        </ul>
      </section>

      <section class="am-panel am-panel-default">
        <div class="am-panel-hd">团队成员</div>
        <div class="am-panel-bd">
          <ul class="am-avg-sm-4 blog-team">
            <li><img class="am-thumbnail" src="Blog%20%7C%20Amaze%20UI%20Example_files/20140615230220_F5LiM.jpg" alt="">
            </li>
            <li><img class="am-thumbnail" src="Blog%20%7C%20Amaze%20UI%20Example_files/20140615230220_F5LiM.jpg" alt="">
            </li>
            <li><img class="am-thumbnail" src="Blog%20%7C%20Amaze%20UI%20Example_files/20140615230220_F5LiM.jpg" alt="">
            </li>
            <li><img class="am-thumbnail" src="Blog%20%7C%20Amaze%20UI%20Example_files/20140615230220_F5LiM.jpg" alt="">
            </li>
            <li><img class="am-thumbnail" src="Blog%20%7C%20Amaze%20UI%20Example_files/20140615230159_kjTmC.jpg" alt="">
            </li>
            <li><img class="am-thumbnail" src="Blog%20%7C%20Amaze%20UI%20Example_files/20140615230220_F5LiM.jpg" alt="">
            </li>
            <li><img class="am-thumbnail" src="Blog%20%7C%20Amaze%20UI%20Example_files/20140615230220_F5LiM.jpg" alt="">
            </li>
            <li><img class="am-thumbnail" src="Blog%20%7C%20Amaze%20UI%20Example_files/20140615230159_kjTmC.jpg" alt="">
            </li>
          </ul>
        </div>
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