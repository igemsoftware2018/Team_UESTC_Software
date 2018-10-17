<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:89:"D:\Apache24\htdocs\DataBase\THINKPHP\public/../application/index\view\display\team_1.html";i:1538027366;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\base.html";i:1534298764;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\meta.html";i:1536997341;s:78:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\header.html";i:1538462894;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\foot.html";i:1536249134;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />

<link rel="stylesheet" type="text/css" href="/DataBase/THINKPHP/public/static/style.css" />
<link rel="stylesheet" type="text/css" href="/DataBase/THINKPHP/public/static/style_2.css" />
<link rel="stylesheet" type="text/css" href="/DataBase/THINKPHP/public/static/font-awesome-4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="/DataBase/THINKPHP/public/static/bootstrap-3.3.7-dist/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="/DataBase/THINKPHP/public/static/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/DataBase/THINKPHP/public/static/js/jquery.js"></script> 
<script type="text/javascript" src="/DataBase/THINKPHP/public/static/js/jquery-3.3.1.js"></script> 
<script type="text/javascript" src="/DataBase/THINKPHP/public/static/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/DataBase/THINKPHP/public/static/bootstrap-3.3.7-dist/js/bootstrap.js"></script> 
<script type="text/javascript" src="/DataBase/THINKPHP/public/static/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/DataBase/THINKPHP/public/static/js/cytoscape.js"></script>
<script type="text/javascript" src="/DataBase/THINKPHP/public/static/js/cytoscape.min.js"></script>
<script type="text/javascript" src="/DataBase/THINKPHP/public/static/js/angularplasmid.complete.min.js"></script>
<script type="text/javascript" src="/DataBase/THINKPHP/public/static/js/jquery.nicescroll.min.js"></script>



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
                    <span><a href="<?php echo url('index/index/index'); ?>">BioMaster</a></span>
                </div>
                <div class="col-lg-4 col-lg-offset-5 col-md-5 col-md-offset-5 col-sm-7 col-sm-offset-1" id="menu-r">
                    <ul>
                        <li><a href="<?php echo url('index/search/by_key'); ?>">Search</a></li>
                        <li><a href="#">Download</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Predict</a></li>
                        <li><a href="<?php echo url('index/catalog/catalog_1'); ?>">Catalog</a></li>
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
        <div class="col-md-2 col-md-offset-1 ">
            <a href="<?php echo url('index/Search/by_key'); ?>">
                <div class="return">Edit and resubmit</div>
            </a>
        </div>
        <div class="col-md-9" style="height: 30px">
            <div class="line" style="position: relative;top: 8px;left: -30px">
                <hr style="height: 1px;background-color:#77ddff ">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-md-offset-1 col-sm-5">
            <h2 style="color: #aa7700">Job Information</h2>
        </div>
        <div class="col-md-3 col-md-offset-5 col-sm-3 col-sm-offset-4" style="height: 50px;line-height: 50px;position: relative;top: 30px">
            <p><span style="color:burlywood"><?php echo $count; ?></span> items in all</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-11 col-md-offset-1" style="position: relative;top: 20px">
            <table class="table table-bordered table-striped" style="border: solid 2px #ffee99;box-shadow: inset 0 0 10px #CCC;">
                <thead>
                    <tr>
                        <th class="col-1">TEAM</th>
                        <th class="col-2">iGEM_ID</th>
                       <th class="col-2">Type</th>
                    </tr>
                </thead>
                <tbody>
                   <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $k = 0;$__LIST__ = is_array($res) ? array_slice($res,0,100, true) : $res->slice(0,100, true); if( count($__LIST__)==0 ) : echo "没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                    <tr>
                        <td><?php echo $vo['Submit_team']; ?></td>
                        <td><a href="<?php echo url('index/display/displayer',array('id'=>$vo['iGEM_ID'])); ?>"><?php echo $vo['iGEM_ID']; ?></a></td>
                        <td><span class="label label-success" style="font-size: 15px"><?php echo $vo['type']; ?></span></td>
                    </tr>
                    <?php endforeach; endif; else: echo "没有数据" ;endif; ?>
                </tbody>
            </table>
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
    
    

</script>
    
</body>

</html>