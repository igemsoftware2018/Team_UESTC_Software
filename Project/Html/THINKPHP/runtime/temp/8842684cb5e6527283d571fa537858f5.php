<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:92:"D:\Apache24\htdocs\DataBase\THINKPHP\public/../application/index\view\demostration\demo.html";i:1539705807;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\base.html";i:1534298764;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\meta.html";i:1536997341;s:78:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\header.html";i:1539678747;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\foot.html";i:1536249134;}*/ ?>
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
                <div class="col-lg-5 col-lg-offset-4 col-md-5 col-md-offset-4 col-sm-7 col-sm-offset-1" id="menu-r">
                    <ul>
                        <li><a href="<?php echo url('index/search/by_key'); ?>">Search</a></li>
                        <li><a href="#">Prediction</a></li>
                        <li><a href="<?php echo url('index/catalog/catalog_1'); ?>">Catalog</a></li>
                        <li><a href="<?php echo url('index/demostration/demo'); ?>">Demostration</a></li>
                        <li><a href="#">Download</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


<div id="line" style="height: 150px">
    <hr style="height: 1px;background-color:antiquewhite">
</div>
<div class="container" style="position: relative;">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 ">
            <video src="/DataBase/THINKPHP/public/static/image/demo.mp4" controls="controls" width="100%">
                您的浏览器不支持 video 标签。
            </video>
        </div>
    </div>
</div>
<div class="container" style="position: relative;">

    <form id="form" method="post" action="process.php" enctype="multipart/form-data" autocomplete='off'>
        <div class="row" >
            <div class="col-lg-7 col-md-8 col-sm-9 col-xs-12 col-lg-offset-1 col-md-offset-1">
                <p style="text-align: center;font-size: 20px;margin:0">Sequence:</p><br/>
                <textarea cols="80" rows='20' name="input_sequence" id="inputseq" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></textarea><br/>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-sm-offset-0 col-xs-offset-0 col-lg-offset-0 col-md-offset-0" style="height: 300px;position: relative;top: 50px;border: solid 2px antiquewhite;padding-top: 10px">
                <label for="file" class="label label-info" style="font-size: 16px;margin-bottom: 10px">Filename:</label>
                <input style="margin: 30px 0;" type="file" name="file" id="file" /> <br />
                <p style="font-size: 16px;font-weight: 600" class="label label-warning">Species:</p>
                <select id='species' name="species" class="form-control" style="margin-top: 10px">
                        <option selected="yes"></option>
                        <option value='Human' >Human</option>
                        <option value='Mouse'>Mouse</option>
                        <option value='Arabis'>Arabidopsis</option>
                </select>
                <br/>
                <button type="submit" class="btn btn-default" style="margin-top: 20px">Submit</button>
            </div>
        </div>
    </form>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-sm-offset-9 col-xs-offset-0 col-lg-offset-8 col-md-offset-9" style="height: 100px;" id="k_res">
       
        <p class="label label-success" style="font-size: 16px;">Input your key to visit your result:</p>
        <form action="result.php" method="get">
            <div class="input-group" style="margin-top: 20px;">
                <input class="form-control" style="width: 80%" type="text" name="key" />
                <span class="input-group-btn">
                <button class="btn btn-default" type="submit" style="position: relative;top: -2px">
                     Go!
                </button>
            </span>
            </div>
        </form>
    </div>



</div>


<footer>
    <div class="foot-bg">
        
    </div>
</footer>



<script>
    $(function() {})

</script>
    
</body>

</html>