<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0034)http://ysxdn.kydev.net/kyadmin.php -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>登录</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/bayer.css">
</head>
<body>
<div class="f_dl">
    <div class="f_top">
        <p> </p>
        <div class="f_title"><span>赛诺菲问卷调查</span><br><span style="margin-left: 200px;">网站后台管理系统</span></div>
    </div>
    <div class="page_center">
        <div class="dl_box">
            <div class="input_dl">
                <form name="myform" method="post" action="" onsubmit="">
                    {{Form::token()}}
                    <h1 class="h3 mb-3 font-weight-normal center " >用户登录</h1>
                    <div class="dl_one"><label>用户名：</label>
                        <input type="text" id="username" name="username" placeholder="请输入用户名" value="" required autofocus></div>
                    <div class="dl_two"><label>密  码：</label>
                        <input type="password" name="password" value="" placeholder="请输入密码" required></div>
                    <div class="dl_btn">
                        <input type="hidden" name="cookietime" value="0">
                        <input type="hidden" name="forward" value="?">
                        <input name="dosubmit" type="submit" value="登录" class="btn_p">
                        <input type="reset" name="reset" class="btn_p" value="重置">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="page_footer">
        <div class="page_footer_bd"></div>
    </div>
</div>

</body></html>