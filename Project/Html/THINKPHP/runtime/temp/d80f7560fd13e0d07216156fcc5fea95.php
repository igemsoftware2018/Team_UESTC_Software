<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:88:"D:\Apache24\htdocs\DataBase\THINKPHP\public/../application/index\view\search\by_seq.html";i:1538212208;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\base.html";i:1534298764;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\meta.html";i:1536997341;s:78:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\header.html";i:1538462894;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\foot.html";i:1536249134;}*/ ?>
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
<div id="body" class="container">
    <div class="row">
        <div id="body-l" class="col-md-3 col-md-offset-1">
            <ul>
               <a href="by_id"><li>ID
                    <hr>
                </li></a>
                <a href="by_key"><li>Team wiki
                    <hr>
                </li></a>
                <a href="by_function">
                    <li>Keywords
                        <hr>
                    </li>
                </a>
                
                <a href="by_seq"><li><span style="font-size: 20px" class="label label-primary">Blast</span>
                    <hr>
                </li></a>



            </ul>
        </div>
        <div id="body-r" class='col-md-5 col-md-offset-1 col-sm-8 col-sm-offset-2'>
            <div id="body-r-con">
                <p style='color: white'>Search</p>

                <form method="post" action="<?php echo url('index/display/blast'); ?>" >
                    <div id="bd-2">
                        <p>Sequence :</p>
                        <textarea id="x1" clos=",50" name="seq" rows="6" warp="virtual" class="col-md-9 col-sm-9" style="height: 80px" required 
                        title='Please fill in this field'
                        oninvalid="setCustomValidity('sequence is required');" oninput="setCustomValidity('');"></textarea>

                    </div>
                    <div id="bd_1-2">
                        <p>e-value:</p>
                        <input type='text' name='evalue' value='1e-5' class="col-md-6 col-sm-6" style="height: 35px" required 
                        title='Please fill in this field'
                        oninvalid="setCustomValidity('e-value is required');" oninput="setCustomValidity('');">
                    </div>
                    <div id="bd_2-2">

                        <input type="submit" id="submit" class="col-md-6 col-sm-6" style="height: 35px" value="Blast">
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


     
</body>

</html>