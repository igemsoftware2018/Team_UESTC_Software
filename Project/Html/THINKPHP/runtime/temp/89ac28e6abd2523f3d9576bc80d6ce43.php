<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:93:"D:\Apache24\htdocs\数据库\THINKPHP\public/../application/index\view\display\displayer.html";i:1534652241;s:77:"D:\Apache24\htdocs\数据库\THINKPHP\application\index\view\public\base.html";i:1534298764;s:77:"D:\Apache24\htdocs\数据库\THINKPHP\application\index\view\public\meta.html";i:1534058065;s:79:"D:\Apache24\htdocs\数据库\THINKPHP\application\index\view\public\header.html";i:1534066129;s:77:"D:\Apache24\htdocs\数据库\THINKPHP\application\index\view\public\foot.html";i:1534136683;}*/ ?>
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


<div class="mycontainer-1">
    <div class="container">
        <div class="row">
            <div id="clu">
                <ul class="nav">
                    <li class="active"><a href="#">Regulondb</a></li>
                    <li><a href="#Regulondb">Promec</a></li>
                    <li><a href="#Promec">Epd</a></li>
                    <li><a href="#Epd">Phage</a></li>

                </ul>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-9 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 con-r-1">

                <div class="title"><p>Regulondb</p></div>
                <div id="Regulondb" class="hz">
                    
                    <table class="table table-bordered" style="border: solid 2px #ffee99;box-shadow: inset 0 0 10px #CCC;">
                        <tbody>
                            <tr>
                                <th class="col-1">Regulondb_id</th>
                                <td class="col-2">...</td>
                            </tr>
                            <tr>
                                <th>Promoter_Name</th>
                                <td>...</td>
                            </tr>
                            <tr>
                                <th>Promoter_Strand</th>
                                <td>...</td>
                            </tr>
                            <tr>
                                <th>Sigma_Factor</th>
                                <td>...</td>
                            </tr>
                            <tr>
                                <th>Sequence</th>
                                <td>...</td>
                            </tr>
                            <tr>
                                <th>Note</th>
                                <td>...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div id="Promec" class="hz">
                   
                    <table class="table table-bordered" style="border: solid 2px #ffee99;box-shadow: inset 0 0 10px #CCC;">
                        <tbody>
                            <tr>
                                <th class="col-1">Promoter_Name</th>
                                <td class="col-2">...</td>
                            </tr>
                            <tr>
                                <th>Reference</th>
                                <td>...</td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>...</td>
                            </tr>
                            <tr>
                                <th>Keywords</th>
                                <td>...</td>
                            </tr>
                            <tr>
                                <th>Sequence</th>
                                <td>...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="Epd" class="hz">
                    <table class="table table-bordered" style="border: solid 2px #ffee99;box-shadow: inset 0 0 10px #CCC;">
                        <tbody>
                            <tr>
                                <th class="col-1">Epd_id</th>
                                <td class="col-2">...</td>
                            </tr>
                            <tr>
                                <th>Gene_Name</th>
                                <td>...</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>...</td>
                            </tr>
                            <tr>
                                <th>Species</th>
                                <td>...</td>
                            </tr>
                            <tr>
                                <th>Thich_Region</th>
                                <td>...</td>
                            </tr>
                            <tr>
                                <th>Sequence</th>
                                <td>...</td>
                            </tr>
                             <tr>
                                <th>Epd_Link</th>
                                <td>...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="Phage" class="hz">
                    <table class="table table-bordered" style="border: solid 2px #ffee99;box-shadow: inset 0 0 10px #CCC;">
                        <tbody>
                            <tr>
                                <th class="col-1">Phage_Name</th>
                                <td class="col-2">...</td>
                            </tr>
                            <tr>
                                <th>Promoter_Name</th>
                                <td>...</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>...</td>
                            </tr>
                            <tr>
                                <th>Gene_Locus</th>
                                <td>...</td>
                            </tr>
                            <tr>
                                <th>Complement</th>
                                <td>...</td>
                            </tr>
                            <tr>
                                <th>Sequence</th>
                                <td>...</td>
                            </tr>
                        </tbody>
                    </table>
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
        h = h - 1000;
        $('.foot-bg').css({
            'top': h
        }, {
            'position': 'absolute'
        });
        $('body').scrollspy({
            target: '#clu',
            offset: 0
        });
        $('#clu .nav ul li a').click(function() {
            $(this).closest('li').siblings().removeClass("active");
            $(this).closest('li').addClass("active");
            $('html, body').stop().animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 1000);
            return false;

        })
    })
    

</script>
    
</body>

</html>