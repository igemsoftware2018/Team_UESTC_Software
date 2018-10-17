<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:90:"D:\Apache24\htdocs\数据库\THINKPHP\public/../application/index\view\search\by_func.html";i:1535165901;s:77:"D:\Apache24\htdocs\数据库\THINKPHP\application\index\view\public\base.html";i:1534298764;s:77:"D:\Apache24\htdocs\数据库\THINKPHP\application\index\view\public\meta.html";i:1534727951;s:79:"D:\Apache24\htdocs\数据库\THINKPHP\application\index\view\public\header.html";i:1534917482;s:77:"D:\Apache24\htdocs\数据库\THINKPHP\application\index\view\public\foot.html";i:1534136683;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />

<link rel="stylesheet" type="text/css" href="/数据库/THINKPHP/public/static/style.css" />
<link rel="stylesheet" type="text/css" href="/数据库/THINKPHP/public/static/style_2.css" />
<link rel="stylesheet" type="text/css" href="/数据库/THINKPHP/public/static/bootstrap-3.3.7-dist/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="/数据库/THINKPHP/public/static/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/数据库/THINKPHP/public/static/bootstrap-3.3.7-dist/js/bootstrap.js"></script> 
<script type="text/javascript" src="/数据库/THINKPHP/public/static/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/数据库/THINKPHP/public/static/js/jquery-3.3.1.js"></script> 
<script type="text/javascript" src="/数据库/THINKPHP/public/static/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/数据库/THINKPHP/public/static/js/cytoscape.js"></script>
<script type="text/javascript" src="/数据库/THINKPHP/public/static/js/cytoscape.min.js"></script>

<!--/_footer /作为公共模版分离出去-->
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="mynavbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
         <span class="sr-only">切换导航</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
        
      </button>

                <a class="navbar-brand" href="#">Version:1.0</a>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">LOGIN</a></li>

                    <li><a href="#">REGISTER</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="mymenu">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-3">
                    <span><a href="<?php echo url('index/index/index'); ?>">Bio-Master</a></span>
                </div>
                <div class="col-lg-4 col-lg-offset-5 col-md-5 col-md-offset-5 col-sm-7 col-sm-offset-1" id="menu-r">
                    <ul>
                        <li><a href="<?php echo url('index/search/by_id'); ?>">Search</a></li>
                        <li><a href="#">Download</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Preview</a></li>
                        <li><a href="#">My Data</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<div id="line">
    <hr style="height: 1px;background-color:antiquewhite">
</div>
<div id="body" class="container">
    <div class="row">
        <div id="body-l" class="col-md-3 col-md-offset-1">
            <ul>
                <li><a href="by_func">Search by KeyWords</a>
                    <hr>
                </li>
                <li><a href="by_seq">Blast</a>
                    <hr>
                </li>
                <li><a href="by_id">Search by name</a>
                    <hr>
                </li>


            </ul>
        </div>
        <div id="body-r" class='col-md-5 col-md-offset-1 col-sm-8 col-sm-offset-2'>
            <div id="body-r-con">
                <p style='color: white;'>Search</p>
                
                <form method="post" action="<?php echo url('index/search/submitTwo'); ?>" style="position: relative;top: 30px;">
                   
                    <div id="bd-2">
                        <p>keyWords :</p>
                        <textarea id="x1" name="func" clos=",50" rows="5" warp="virtual" class="col-md-9 col-sm-9" style="height: 80px"></textarea>


                    </div>

                    <div id="bd_2-2">

                        <input type="submit" id="submit" class="col-md-6 col-sm-6" style="height: 35px" value="Submit">
                    </div>
                </form>


            </div>
        </div>
    </div>

</div>

<footer>
    <div class="foot-bg">

    </div>
</footer>



<script>
    $(function() {
        $('#submit').on('click', function() {
            $.ajax({
                type: "POST",
                url: "<?php echo url('submitTwo'); ?>",
                data: $("form").serialize(),
                dataType: 'json',
                success: function(data) {
                    $('#body').empty();
                    $("#body").append(data);
                    var h=$(document).height();
                    $('.foot-bg').css('top',h);
                    //        
//                    $("button").attr("disabled",true);
//                    alert(JSON.stringify(data.code));
//                    window.location.href="<?php echo url('index/search/submitTwo'); ?>"
//                    $('#body').empty();
//                    $('#body').append(data);
                    console.log(data);
                   
                }

            });
        });


    })

</script>
    
</body>

</html>