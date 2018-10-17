<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:87:"D:\Apache24\htdocs\DataBase\THINKPHP\public/../application/index\view\display\team.html";i:1539412144;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\base.html";i:1534298764;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\meta.html";i:1536997341;s:78:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\header.html";i:1538462894;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\foot.html";i:1536249134;}*/ ?>
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
        <div class="col-md-2 ">
            <a href="<?php echo url('index/Search/by_key'); ?>">
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
       <?php if($p==1): ?>
        <div class="col-md-11 col-md-offset-1" style="position: relative;top: 20px">

            <div class="container_1">
                <h2><a style="color: #009fcc" href="http://2014.igem.org/Team:Cambridge-JIC">2014_Cambridge-JIC</a></h2>
                <div class="row">
                    <div class="col-md-4"><span class="label label-info" style="font-size: 16px">Title:</span>m??sbi - the plant biosensor for everyone</div>
                    <div class="col-md-3 col-md-offset-1" class="medel" style="text-align: center">
                        <img src="http://localhost:12345/DataBase/THINKPHP/public/static/image/jin.png" width="30px">
                    </div>
                    
                    <div class="col-md-4" id="jug"><a href="http://igem.org/2014_Judging_Form?id=1484"><span class="label label-success" style="font-size: 16px">Judging_from</span></a><a href="http://localhost:12345/DataBase/THINKPHP/public/index/display/team_1/t/2014_Cambridge-JIC.html"><span class="label label-primary" style="font-size: 16px;position: relative;left: 10px">Bio-bricks</span></a></div>
                </div>
                <div class="row" style="position: relative;top: 10px">
                    <div class="col-md-11" id="des">
                        <span class="label label-warning" style="font-size: 16px;">
                            Description:
                        </span>
                        <p class='des_p' style="display: inline">The past few decades have seen detection technology change dramatically. The shift from analogue to digital came first. Now, a new change is happening: biosensors are allowing mankind to detect compounds and the environment using genetically-enhanced life forms. However the creation of such biosensors requires deep knowledge and dedicated facilities. What if it were possible to create customised biosensors in the comfort of one's home? m??sbi is a modular, open-source biosensing platform developed using a novel, user-friendly plant chassis: Marchantia polymorpha. The m??sbi biosensors consist of 3 modules: input, output and processing. The user is free to mix-and-match the modules to create custom biosensors simply by crossing the chosen modules’ pre-transformed plant lines and collecting the progeny. m??sbi’s open-source nature allows users to create and modify modules ensuring its continuous evolution. In farming, homes, education, and maybe even space - m??sbi will change the way we view biosensors.</p>
                    </div>
                </div>
            </div>
            <hr style="background-color: antiquewhite;height: 1px"> 

            <div class="container_1">
                <h2><a style="color: #009fcc" href="http://2011.igem.org/Team:Wisconsin-Madison">
2011_Wisconsin-Madison</a></h2>
                <div class="row">
                    <div class="col-md-6"><span class="label label-info" style="font-size: 16px">Title:</span>Optimizing biosensors through a two-phase directed evolution</div>
                    <div class="col-md-1 " class="medel" style="text-align: center">
                        <img src="http://localhost:12345/DataBase/THINKPHP/public/static/image/jin.png" width="30px">
                    </div>
                    <div class="col-md-4 col-md-offset-1" id="jug"><a href="http://igem.org/2011_Judging_Form?id=634"><span class="label label-success" style="font-size: 16px">Judging_from</span></a><a href="http://localhost:12345/DataBase/THINKPHP/public/index/display/team_1/t/2011_Wisconsin-Madison.html"><span class="label label-primary" style="font-size: 16px;position: relative;left: 10px">Bio-bricks</span></a></div>
                </div>
                <div class="row" style="position: relative;top: 10px">
                    <div class="col-md-11" id="des">
                        <span class="label label-warning" style="font-size: 16px;">
                            Description:
                        </span>
                        <p class='des_p' style="display: inline">"The University of Wisconsin - Madison 2011 iGEM team sought to create fluorescent E. coli biosensors for ethanol and alkanes, two molecules with significance for sustainable fuel production. Through expression of heterologous genes, E. coli strains which appear to have a response to a specific biofuel were generated. However, these biosensors did not produce the low uninduced and high induced levels of expression desired. This situation appears to be common among biosensor-based iGEM projects. In order to improve the biofuel sensors, as well as provide a framework for other teams to do the same, a universal biosensor directed evolution construct was assembled. The device can be used to both select for high expression in the presence of an analyte, as well as select for no expression in its absence. In conjunction with mutagenesis of key genes, this device could be used to significantly improve existing and novel biosensors. "</p>
                    </div>
                </div>
                <div class="row" style="position: relative;top: 20px;left: 20px">
                    <div class="col-sm-6 col-md-3 thumbnail">
                        <img height=100px src="http://localhost:12345/DataBase/THINKPHP/public/static/image/image/2011/Wisconsin-Madison_01.png" onerror="this.style.display='none'" />
                    </div>
                    <div class="col-sm-6 col-md-3 thumbnail">
                        <img height=100px src="http://localhost:12345/DataBase/THINKPHP/public/static/image/image/2011/Wisconsin-Madison_02.png" onerror="this.style.display='none'" />
                    </div>
                    <div class="col-sm-6 col-md-3 thumbnail">
                        <img height=100px src="http://localhost:12345/DataBase/THINKPHP/public/static/image/image/2011/Wisconsin-Madison_03.png" onerror="this.style.display='none'" />

                    </div>
                </div>
            </div>
            <hr style="background-color: antiquewhite;height: 1px"> 

            <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $k = 0;$__LIST__ = is_array($res) ? array_slice($res,2,null, true) : $res->slice(2,null, true); if( count($__LIST__)==0 ) : echo "Have no data" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>

            <div class="container_1">
                <h2><a style="color: #009fcc" href="http://<?php echo substr($vo['Submit_team'],0,4)?>.igem.org/Team:<?php echo substr($vo['Submit_team'],5)?>"><?php echo $vo['Submit_team']; ?></a></h2>
                <div class="row">
                    <div class="col-md-6"><span class="label label-info" style="font-size: 16px">Title:</span><?php echo $vo['Title']; ?></div>
                    <div class="col-md-4 col-md-offset-2" id="jug"><a href="<?php echo $vo['judging_form']; ?>"><span class="label label-success" style="font-size: 16px">Judging_from</span></a><a href="<?php echo url('index/display/team_1',array('t'=>$vo['Submit_team'])); ?>"><span class="label label-primary" style="font-size: 16px;position: relative;left: 10px">Bio-bricks</span></a></div>
                </div>
                <div class="row" style="position: relative;top: 10px">
                    <div class="col-md-11" id="des">
                        <span class="label label-warning" style="font-size: 16px;">
                            Description:
                        </span>
                        <p class='des_p' style="display: inline"><?php echo $vo['Description']; ?></p>
                    </div>
                </div>
                <div class="row" style="position: relative;top: 20px;left: 20px">

                    <?php if(is_array($a[$k+1]) || $a[$k+1] instanceof \think\Collection || $a[$k+1] instanceof \think\Paginator): $ki = 0;$__LIST__ = is_array($a[$k+1]) ? array_slice($a[$k+1],0,3, true) : $a[$k+1]->slice(0,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($ki % 2 );++$ki;if(!empty($vi['image_url'])): ?>

                    <div class="col-sm-6 col-md-3 thumbnail">
                        <img height=100px src="http://localhost:12345/DataBase/THINKPHP/public/<?php echo $vi['image_url']; ?>" onerror="this.style.display='none'" />

                    </div>

                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <hr style="background-color: antiquewhite;height: 1px"> <?php endforeach; endif; else: echo "Have no data" ;endif; ?>


        </div>
        <?php else: ?>
        <div class="col-md-11 col-md-offset-1" style="position: relative;top: 20px">
            <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $k = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "Have no data" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>

            <div class="container_1">
                <h2><a style="color: #009fcc" href="http://<?php echo substr($vo['Submit_team'],0,4)?>.igem.org/Team:<?php echo substr($vo['Submit_team'],5)?>"><?php echo $vo['Submit_team']; ?></a></h2>
                <div class="row">
                    <div class="col-md-6"><span class="label label-info" style="font-size: 16px">Title:</span><?php echo $vo['Title']; ?></div>
                    <div class="col-md-4 col-md-offset-2" id="jug"><a href="<?php echo $vo['judging_form']; ?>"><span class="label label-success" style="font-size: 16px">Judging_from</span></a><a href="<?php echo url('index/display/team_1',array('t'=>$vo['Submit_team'])); ?>"><span class="label label-primary" style="font-size: 16px;position: relative;left: 10px">Bio-bricks</span></a></div>
                </div>
                <div class="row" style="position: relative;top: 10px">
                    <div class="col-md-11" id="des">
                        <span class="label label-warning" style="font-size: 16px;">
                            Description:
                        </span>
                        <p class='des_p' style="display: inline"><?php echo $vo['Description']; ?></p>
                    </div>
                </div>
                <div class="row" style="position: relative;top: 20px;left: 20px">

                    <?php if(is_array($a[$k-1]) || $a[$k-1] instanceof \think\Collection || $a[$k-1] instanceof \think\Paginator): $ki = 0;$__LIST__ = is_array($a[$k-1]) ? array_slice($a[$k-1],0,3, true) : $a[$k-1]->slice(0,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($ki % 2 );++$ki;if(!empty($vi['image_url'])): ?>

                    <div class="col-sm-6 col-md-3 thumbnail">
                        <img height=100px src="http://localhost:12345/DataBase/THINKPHP/public/<?php echo $vi['image_url']; ?>" onerror="this.style.display='none'" />

                    </div>

                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <hr style="background-color: antiquewhite;height: 1px"> <?php endforeach; endif; else: echo "Have no data" ;endif; endif; ?>
    </div>


</div>

<footer>
    <div class="foot-bg">
        
    </div>
</footer>



<script>
    $(function() {

        var count = <?php echo $count?>;

        for (i = 0; i < count; i++) {
            var p = String(document.getElementsByClassName("des_p")[i].innerHTML);
            newstr0 = p;
            <?php foreach($js as $j){
                echo $j;
            } ?>
        }
        $('.award_con').niceScroll({
            cursorcolor: "#aaffee", //滚动条的颜色   
            cursoropacitymax: 1, //滚动条的透明度，从0-1   
            touchbehavior: false, //使光标拖动滚动像在台式电脑触摸设备   
            cursorwidth: "8px", //滚动条的宽度   
            cursorborder: "0", // 游标边框css定义    
            cursorborderradius: "5px", //以像素为光标边界半径  圆角   
            autohidemode: false, //是否隐藏滚动条  true的时候默认不显示滚动条，当鼠标经过的时候显示滚动条   
            zindex: "auto", //给滚动条设置z-index值    
            railpadding: {
                top: 0,
                right: -4,
                left: 0,
                bottom: 0
            }, //滚动条的位置
        });
        var i = 0;

    })

</script>
    
</body>

</html>