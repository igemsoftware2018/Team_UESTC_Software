<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:88:"D:\Apache24\htdocs\DataBase\THINKPHP\public/../application/index\view\display\blast.html";i:1538135001;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\base.html";i:1534298764;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\meta.html";i:1536997341;s:78:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\header.html";i:1537498204;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\foot.html";i:1536249134;}*/ ?>
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
                        <li><a href="#">My Data</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>




<div id="line">
    <hr style="height: 1px;background-color:antiquewhite">
</div>
<div class="container" style="position: relative;top: 100px">
    <div class="row">
        <div class="col-md-2 col-md-offset-1 ">
            <a href="<?php echo url('index/Search/by_seq'); ?>">
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
        <div class="col-md-3 col-md-offset-1">
            <h2 style="color: #aa7700">Job Information</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-11 col-md-offset-1" style="border: 2px solid #bbffee;margin: : 0;font-family: cursive,serif">
            <?php if(is_array($lines) || $lines instanceof \think\Collection || $lines instanceof \think\Paginator): $k = 0; $__LIST__ = $lines;if( count($__LIST__)==0 ) : echo "have no data" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
            <?php echo $vo; ?><br>
            <?php endforeach; endif; else: echo "have no data" ;endif; ?>
        </div>
    </div>
    <?php if(!empty($arr)): ?>
    <div class="row">
        <div class="col-md-11 col-md-offset-1" style="position: relative;top: 20px">
            <table class="table table-bordered table-striped" style="border: solid 2px #ffee99;box-shadow: inset 0 0 10px #CCC;">
                <thead>
                    <tr>
                        <th>Part_id</th>
                        <th>Identity</th>
                        <th>Align_length</th>
                        <th>Site</th>
                        <th>Evalue</th>
                        <th>Bitscore</th>
                        <th>Type</th>
                        <th>Information</th>
                       
                    </tr>
                </thead>
                <tbody>
                  
                   <?php if(is_array($arr) || $arr instanceof \think\Collection || $arr instanceof \think\Paginator): $k = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                    <tr>
                        <td style="width: 150px"><a target='_blank' href="<?php echo url('index/display/displayer',array('id'=>$vo['0'])); ?>"><?php echo $vo['0']; ?></a></td>
                        <td><?php echo $vo['1']; ?></td>
                        <td><?php echo $vo['2']; ?></td>
                        <td><?php echo $vo['5']; ?>--<?php echo $vo['6']; ?></td>
                        <td><?php echo $vo['3']; ?></td>
                        <td><?php echo $vo['4']; ?></td>
                        <td><span style="font-size: 14px" class="label label-success"><?php echo $vo['7']; ?></span></td>
                        <td><a href='http://parts.igem.org/Part:<?php echo $vo['0']; ?>'>iGEM</a></td>
                    </tr>
                   <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            
        </div>
    </div>
    
    <?php else: ?>
    <div class="row">
        <div class="col-md-11 col-md-offset-1" style="position: relative;top: 20px">No result</div>
    </div>
    <?php endif; ?>
</div>







<footer>
    <div class="foot-bg">
        
    </div>
</footer>


 
<script>
   

</script>
    
</body>

</html>