<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:88:"D:\Apache24\htdocs\数据库\THINKPHP\public/../application/index\view\display\team.html";i:1535163998;s:77:"D:\Apache24\htdocs\数据库\THINKPHP\application\index\view\public\base.html";i:1534298764;s:77:"D:\Apache24\htdocs\数据库\THINKPHP\application\index\view\public\meta.html";i:1534727951;s:79:"D:\Apache24\htdocs\数据库\THINKPHP\application\index\view\public\header.html";i:1534917482;s:77:"D:\Apache24\htdocs\数据库\THINKPHP\application\index\view\public\foot.html";i:1534136683;}*/ ?>
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
<div class="container" style="position: relative;top: 50px">
    <div class="row">
        <div class="col-md-2 ">
            <a href="<?php echo url('index/Search/by_func'); ?>">
                <div class="return">Edit and resubmit</div>
            </a>
        </div>
        <div class="col-md-10" style="height: 30px">
            <div class="line" style="position: relative;top: 8px;left: -30px">
                <hr style="height: 1px;background-color:#77ddff ">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-5">
            <h2 style="color: #aa7700">Job Information</h2>
        </div>
        <div class="col-md-2 col-md-offset-7 col-sm-2 col-sm-offset-5" style="position: relative;top:30px;height: 50px;line-height: 50px">
            <p><span style="color: antiquewhite"><?php echo $count; ?></span> items in all</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-11 col-md-offset-1" style="height: 300px;position: relative;top: 20px">
            <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $k = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>

            <div class="container_1">
                <h2><a style="color: #009fcc" href="<?php echo url('index/display/team_1',array('t'=>$vo['Submit_team'])); ?>"><?php echo $vo['Submit_team']; ?></a></h2>
                <div class="row">
                    <div class="col-md-6"><span class="label label-info" style="font-size: 16px">Title:</span><?php echo $vo['Title']; ?></div>
                    <div class="col-md-4 col-md-offset-2" id="jug"><a href="<?php echo $vo['judging_form']; ?>"><span class="label label-success" style="font-size: 16px">Judging_from</span></a><a href="<?php echo url('index/display/team_1',array('t'=>$vo['Submit_team'])); ?>"><span class="label label-primary" style="font-size: 16px;position: relative;left: 10px">Bio-bricks</span></a></div>
                </div>
                <div class="row" style="position: relative;top: 10px">
                    <div class="col-md-11" id="des">
                        <span class="label label-warning" style="font-size: 16px;">
                            Description:
                        </span> <?php echo $vo['Description']; ?>
                    </div>
                </div>
                <?php if($vo['Submit_team']=='2009_uOttawa'): ?>
                <div class="row" style="position: relative;top: 20px;left: 20px">

                    <div class="col-sm-6 col-md-3 thumbnail">
                        <img src='/数据库/THINKPHP/public/static/image/image/2009/uOttawa_01.png'>
                    </div>
                    <div class="col-sm-6 col-md-3 thumbnail">
                        <img src="/数据库/THINKPHP/public/static/image/image/2009/uOttawa_02.png">
                    </div>
                    <div class="col-sm-6 col-md-3 thumbnail">
                        <img src="/数据库/THINKPHP/public/static/image/image/2009/uOttawa_03.png">
                    </div>

                </div>
                <?php endif; if($vo['Submit_team']=='2010_Tokyo_Metropolitan'): ?>
                <div class="row" style="position: relative;top: 20px;left: 20px">

                    <div class="col-sm-6 col-md-3 thumbnail">
                        <img src='/数据库/THINKPHP/public/static/image/image/2010/Tokyo_Metropolitan_01.png'>
                    </div>
                    <div class="col-sm-6 col-md-3 thumbnail">
                        <img src="/数据库/THINKPHP/public/static/image/image/2010/Tokyo_Metropolitan_02.png">
                    </div>
                    

                </div>
                <?php endif; if($vo['Submit_team']=='2011_Alberta'): ?>
                <div class="row" style="position: relative;top: 20px;left: 20px">

                    <div class="col-sm-6 col-md-3 thumbnail">
                        <img src='/数据库/THINKPHP/public/static/image/image/2011/Alberta_01.png'>
                    </div>
                    <div class="col-sm-6 col-md-3 thumbnail">
                        <img src="/数据库/THINKPHP/public/static/image/image/2011/Alberta_02.png">
                    </div>
                    <div class="col-sm-6 col-md-3 thumbnail">
                        <img src="/数据库/THINKPHP/public/static/image/image/2011/Alberta_03.png">
                    </div>

                </div>
                <?php endif; if($vo['Submit_team']=='2011_Edinburgh'): ?>
                <div class="row" style="position: relative;top: 20px;left: 20px">

                    <div class="col-sm-6 col-md-3 thumbnail">
                        <img src='/数据库/THINKPHP/public/static/image/image/2011/Edinburgh_01.png'>
                    </div>
                    <div class="col-sm-6 col-md-3 thumbnail">
                        <img src="/数据库/THINKPHP/public/static/image/image/2011/Edinburgh_02.png">
                    </div>
                    <div class="col-sm-6 col-md-3 thumbnail">
                        <img src="/数据库/THINKPHP/public/static/image/image/2011/Edinburgh_03.png">
                    </div>

                </div>
                <?php endif; if($vo['Submit_team']=='2009_Aberdeen_Scotland'): ?>
                <div class="row" style="position: relative;top: 20px;left: 20px">

                    <div class="col-sm-6 col-md-3 thumbnail">
                        <img src='/数据库/THINKPHP/public/static/image/image/2010/Alberta_01.png'>
                    </div>
                    <div class="col-sm-6 col-md-3 thumbnail">
                        <img src="/数据库/THINKPHP/public/static/image/image/2010/Alberta_02.png">
                    </div>
                    <div class="col-sm-6 col-md-3 thumbnail">
                        <img src="/数据库/THINKPHP/public/static/image/image/2010/Alberta_03.png">
                    </div>

                </div>
                <?php endif; ?>
                
            </div>
            <hr style="background-color: antiquewhite;height: 1px"> <?php endforeach; endif; else: echo "没有数据" ;endif; ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-6" style="display: flex;justify-content: center"><?php echo $page; ?></div>
                    <div class="col-md-4"></div>
                </div>
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
        var h = $(document).height();
        h = h - 300;
        $('.foot-bg').css({
            'top': h
        }, {
            'position': 'absolute'
        });

    })

</script>
    
</body>

</html>