<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:101:"D:\Apache24\htdocs\DataBase\THINKPHP\public/../application/index\view\display\displayer_promoter.html";i:1538446336;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\base.html";i:1534298764;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\meta.html";i:1536997341;s:78:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\header.html";i:1539426028;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\foot.html";i:1536249134;}*/ ?>
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
                        <li><a href="#">Demostration</a></li>
                        <li><a href="#">Download</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


<div class="mycontainer-1">
    <div class="container">
        <div class="row">
            <nav id="clu">
                <ul class="nav">
                    <?php if(!empty($res_1_0)): ?>
                    <li class="active"><a href="#Promoter">Promoter</a></li>
                    <hr> <?php endif; if(!empty($res_1_1)): ?>
                    <li><a href="#Regulondb">Regulondb</a></li>
                    <hr> <?php endif; if(!empty($res_1_2)): ?>
                    <li><a href="#Promec">Promec</a></li>
                    <hr> <?php endif; if(!empty($res_1_3)): ?>
                    <li><a href="#Epd">Epd</a></li>
                    <hr> <?php endif; if(!empty($res_1_4)): ?>
                    <li><a href="#Phage">Phage</a></li>
                    <hr> <?php endif; if(!empty($res_1_5)): if(!(count($res_1_5)>10)): ?>
                    <li><a href="#Component">Component</a></li>
                    <hr> <?php endif; endif; ?>

                    <li><a href="#Download">Download</a></li>
                    <hr>

                </ul>
            </nav>
            <?php if(!empty($a)): ?>
            <div class="col-lg-10 col-md-10 col-sm-9 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 ">
                <div id="cy" style="z-index: 11;height: 600px;width: 100%;"></div>
            </div>
            <?php endif; ?>
            <div class="col-lg-10 col-md-10 col-sm-9 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 con-r-1">

                <div class="title_1">
                    <span><?php echo $res_1_0['iGEM_ID']; ?></span>
                    <p>Promoter</p>
                </div>

                <div id="Promoter" class="hz">

                    <table class="table table-bordered" style="border: solid 2px #ffee99;box-shadow: inset 0 0 10px #CCC;">
                        <tbody>

                            <tr>
                                <th class="col-1">Description</th>
                                <td class="col-2"><?php echo $res_1_0['Description']; ?></td>
                            </tr>
                            <tr>
                                <th>Direction</th>
                                <td><?php echo $res_1_0['direction']; ?></td>
                            </tr>
                            <tr>
                                <th>Control</th>
                                <td><?php echo $res_1_0['control']; ?></td>
                            </tr>
                            <tr>
                                <th>Submit_team</th>
                                <td><a href="http://<?php echo substr($res_1_0['Submit_team'],0,4)?>.igem.org/Team:<?php echo substr($res_1_0['Submit_team'],5)?>"><?php echo $res_1_0['Submit_team']; ?></a></td>
                            </tr>


                            <tr>
                                <th>Sample_Statu</th>
                                <td><?php echo $res_1_0['Sample_Statu']; ?></td>
                            </tr>
                            <tr>
                                <th>Uses</th>
                                <td><?php echo $res_1_0['Uses']; ?></td>
                            </tr>
                            <tr>
                                <th>Twin</th>
                                <td><?php echo $res_1_0['Twin']; ?></td>
                            </tr>
                            <tr>
                                <th>Nickname</th>
                                <td><?php echo $res_1_0['Nickname']; ?></td>
                            </tr>
                            <tr>
                                <th>Designer</th>
                                <td><?php echo $res_1_0['Designer']; ?></td>
                            </tr>
                            <tr>
                                <th>na</th>
                                <td><?php echo $res_1_0['na']; ?></td>
                            </tr>
                            <tr>
                                <th>Negative_regulators</th>
                                <td><?php echo $res_1_0['negative_regulators']; ?></td>
                            </tr>
                            <tr>
                                <th>Positive_regulators</th>
                                <td><?php echo $res_1_0['positive_regulators']; ?></td>
                            </tr>
                            <tr>
                                <th>Categories</th>
                                <td><?php echo $res_1_0['Categories']; ?></td>
                            </tr>
                            <tr>
                                <th>Assembly Compatibility</th>
                                <td><?php echo $res_1_0['Green']; ?></td>
                            </tr>
                            <tr>
                                <th>Sequence</th>
                                <?php if(strlen($res_1_0['sequence']) >300): ?>
                                <td title="<?php echo $res_1_0['sequence']; ?>">
                                    <?php echo substr($res_1_0['sequence'],0,300); ?>...<span style="font-size: 15px;color:#ffee99">(mouseover to show all)</span></td>
                                <?php else: ?>
                                <td><?php echo $res_1_0['sequence']; ?></td>
                                <?php endif; ?>
                            </tr>

                            <tr>
                                <th>iGEM_Link</th>
                                <td><a href="<?php echo $res_1_0['iGEM_Link']; ?>"><?php echo $res_1_0['iGEM_Link']; ?></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php if(!empty($res_1_1)): ?>
                <div class="title">
                    <p>Regulondb</p>
                </div>
                <div id="Regulondb" class="hz">

                    <table class="table table-bordered" style="border: solid 2px #ffee99;box-shadow: inset 0 0 10px #CCC;">
                        <tbody>
                            <?php if(is_array($res_1_1) || $res_1_1 instanceof \think\Collection || $res_1_1 instanceof \think\Paginator): $k = 0;$__LIST__ = is_array($res_1_1) ? array_slice($res_1_1,0,100, true) : $res_1_1->slice(0,100, true); if( count($__LIST__)==0 ) : echo "Have no data" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                            <tr>
                                <th class="col-1">Regulondb_id</th>
                                <td class="col-2"><?php echo $vo['Regulondb_id']; ?></td>
                            </tr>
                            <tr>
                                <th>Promoter_Name</th>
                                <td><?php echo $vo['Promoter_Name']; ?></td>
                            </tr>
                            <tr>
                                <th>Promoter_Strand</th>
                                <td><?php echo $vo['Promoter_Strand']; ?></td>
                            </tr>
                            <tr>
                                <th>Sigma_Factor</th>
                                <td><?php echo $vo['Sigma_Factor']; ?></td>
                            </tr>
                            <tr>
                                <th>Sequence</th>
                                <td><?php echo $vo['Sequence']; ?></td>
                            </tr>
                            <tr style="border-bottom: 3px solid #ccccff">
                                <th>Note</th>
                                <td><?php echo $vo['Note']; ?></td>
                            </tr>
                            <?php endforeach; endif; else: echo "Have no data" ;endif; ?>
                        </tbody>
                    </table>

                    <div id="sites" class="hz" style="height: 50px">

                        <div class="col-md-offset-1" style="background-color: antiquewhite;height: 17px;position: relative;top: 20px;border-radius: 10px;width: 800px;cursor: pointer" title="ID: <?php echo $res_1_0['iGEM_ID']; ?>&#10length:<?php echo $len; ?>">
                            <?php if(is_array($arr_2) || $arr_2 instanceof \think\Collection || $arr_2 instanceof \think\Paginator): $k = 0; $__LIST__ = $arr_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                            <a href="">
                                <div class="locu" style="position: absolute;margin-left: <?php echo $vo['1'][0]/$len*800; ?>px;width:<?php echo $vo['1'][1]/$len*800-$vo['1'][0]/$len*800; ?>px;height: 15px;background-color: <?php echo $color_4[$k]; ?>;text-align: center;border-radius: 10px;font-size: 13px;top: 1px;cursor: pointer;" title="Site: <?php echo $vo['1'][0]; ?>-<?php echo $vo['1'][1]; ?>">
                                <?php if(!empty($vo[2])): ?>
                                   <?php echo $vo['2']; else: ?><?php echo $vo['0']; endif; ?></div>
                            </a>
                            <?php endforeach; endif; else: echo "" ;endif; ?>

                        </div>
                    </div>
                </div>

                <?php endif; if(!empty($res_1_2)): ?>
                <div class="title">
                    <p>Promec</p>
                </div>
                <div id="Promec" class="hz">

                    <table class="table table-bordered" style="border: solid 2px #ffee99;box-shadow: inset 0 0 10px #CCC;">
                        <tbody>
                            <?php if(is_array($res_1_2) || $res_1_2 instanceof \think\Collection || $res_1_2 instanceof \think\Paginator): $k = 0;$__LIST__ = is_array($res_1_2) ? array_slice($res_1_2,0,100, true) : $res_1_2->slice(0,100, true); if( count($__LIST__)==0 ) : echo "Have no data" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                            <tr>
                                <th class="col-1">Promoter_Name</th>
                                <td class="col-2"><?php echo $vo['Promoter_Name']; ?></td>
                            </tr>
                            <tr>
                                <th>Reference</th>
                                <td>
                                    <?php echo str_ireplace('reference',$vo['Title'],$vo['reference']) ?>
                                </td>
                            </tr>

                            <tr>
                                <th>Keywords</th>
                                <td><?php echo $vo['Keywords']; ?></td>
                            </tr>
                            <tr style="border-bottom: 3px solid #ccccff">
                                <th>Sequence</th>
                                <?php if(strlen($vo['Sequence']) >500): ?>
                                <td title="<?php echo $vo['Sequence']; ?>">
                                    <?php echo substr($vo['Sequence'],0,500); ?>...<span style="font-size: 15px;color:#ffee99">(mouseover to show all)</span></td>
                                <?php else: ?>
                                <td><?php echo $vo['Sequence']; ?></td>
                                <?php endif; ?>
                            </tr>
                            <?php endforeach; endif; else: echo "Have no data" ;endif; ?>
                        </tbody>
                    </table>
                </div>
                <div id="sites" class="hz" style="height: 50px">

                    <div class="col-md-offset-1" style="background-color: antiquewhite;height: 17px;position: relative;top: 20px;border-radius: 10px;width: 800px;cursor: pointer" title="<?php echo $res_1_0['iGEM_ID']; ?>&#10length:<?php echo $len; ?>">
                        <?php if(is_array($arr_4) || $arr_4 instanceof \think\Collection || $arr_4 instanceof \think\Paginator): $k = 0; $__LIST__ = $arr_4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                        <a href="">
                            <div class="locu" style="position: absolute;margin-left: <?php echo $vo['1'][0]/$len*800; ?>px;width:<?php echo $vo['1'][1]/$len*800-$vo['1'][0]/$len*800; ?>px;height: 15px;background-color: <?php echo $color_4[$k]; ?>;text-align: center;border-radius: 10px;font-size: 13px;top: 1px;cursor: pointer;" title="<?php echo $vo['1'][0]; ?>-<?php echo $vo['1'][1]; ?>"><?php echo $vo['0']; ?></div>
                        </a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>

                    </div>
                </div>
                <?php endif; if(!empty($res_1_3)): ?>
                <div class="title">
                    <p>Epd</p>
                </div>
                <div id="Epd" class="hz">
                    <table class="table table-bordered" style="border: solid 2px #ffee99;box-shadow: inset 0 0 10px #CCC;">
                        <tbody>
                            <?php if(is_array($res_1_3) || $res_1_3 instanceof \think\Collection || $res_1_3 instanceof \think\Paginator): $k = 0;$__LIST__ = is_array($res_1_3) ? array_slice($res_1_3,0,100, true) : $res_1_3->slice(0,100, true); if( count($__LIST__)==0 ) : echo "Have no data" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                            <tr>
                                <th class="col-1">Epd_id</th>
                                <td class="col-2"><?php echo $vo['Epd_id']; ?></td>
                            </tr>
                            <tr>
                                <th>Gene_Name</th>
                                <td><?php echo $vo['Gene_Name']; ?></td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td><?php echo $vo['Description']; ?></td>
                            </tr>
                            <tr>
                                <th>Species</th>
                                <td><?php echo $vo['Species']; ?></td>
                            </tr>
                            <tr>
                                <th>Thich_Region</th>
                                <td><?php echo $vo['Thich_Region']; ?></td>
                            </tr>
                            <tr>
                                <th>Sequence</th>
                                <?php if(strlen($vo['Sequence']) >500): ?>
                                <td title="<?php echo $vo['Sequence']; ?>">
                                    <?php echo substr($vo['Sequence'],0,500); ?>...<span style="font-size: 15px;color:#ffee99">(mouseover to show all)</span></td>
                                <?php else: ?>
                                <td><?php echo $vo['Sequence']; ?></td>
                                <?php endif; ?>
                            </tr>
                            <tr>
                                <th>Epd_Link</th>
                                <td><a href="<?php echo $vo['Epd_Link']; ?>"><?php echo $vo['Epd_Link']; ?></a></td>
                            </tr>
                            <?php endforeach; endif; else: echo "Have no data" ;endif; ?>
                        </tbody>
                    </table>
                </div>
                <?php endif; if(!empty($res_1_4)): ?>
                <div class="title">
                    <p>Phage</p>
                </div>
                <div id="Phage" class="hz">
                    <table class="table table-bordered" style="border: solid 2px #ffee99;box-shadow: inset 0 0 10px #CCC;">
                        <tbody>
                            <?php if(is_array($res_1_4) || $res_1_4 instanceof \think\Collection || $res_1_4 instanceof \think\Paginator): $k = 0;$__LIST__ = is_array($res_1_4) ? array_slice($res_1_4,0,100, true) : $res_1_4->slice(0,100, true); if( count($__LIST__)==0 ) : echo "Have no data" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                            <tr>
                                <th class="col-1">Phage_Name</th>
                                <td class="col-2"><?php echo $vo['Phage_Name']; ?></td>
                            </tr>
                            <tr>
                                <th>Promoter_Number</th>
                                <td><?php echo $vo['Promoter_Number']; ?></td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td><?php echo $vo['Description']; ?></td>
                            </tr>
                            <tr>
                                <th>Gene_Sites</th>
                                <td><?php echo $vo['Gene_Locus']; ?></td>
                            </tr>
                            <tr>
                                <th>Complement</th>
                                <td><?php echo $vo['Complement']; ?></td>
                            </tr>
                            <tr>
                                <th>Sequence</th>
                                <?php if(strlen($vo['Sequence']) >500): ?>
                                <td title="<?php echo $vo['Sequence']; ?>">
                                    <?php echo substr($vo['Sequence'],0,500); ?>...<span style="font-size: 15px;color:#ffee99">(mouseover to show all)</span></td>
                                <?php else: ?>
                                <td><?php echo $vo['Sequence']; ?></td>
                                <?php endif; ?>
                            </tr>
                            <?php endforeach; endif; else: echo "Have no data" ;endif; ?>
                        </tbody>
                    </table>
                </div>
                <?php endif; if(!empty($res_1_5)): if(!(count($res_1_5)>10)): ?>
                <div class="title" style="margin-bottom: 50px">
                    <p>Component</p>
                </div>

                <div class="zhili" id="Component">
                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <plasmid sequencelength="<?php echo $len*1.02; ?>" plasmidheight="500" plasmidwidth="500">
                                <plasmidtrack trackstyle="fill:#ccc" width="5" radius="190"></plasmidtrack>
                                <plasmidtrack trackstyle="fill:rgba(225,225,225,0.5)" radius="180">

                                    <tracklabel text="<?php echo $res_1_0['iGEM_ID']; ?>" labelstyle='font-size:20px;font-weight:400'></tracklabel>

                                    <tracklabel text="<?php echo $len; ?> bp" labelstyle='font-size:10px' vadjust="20"></tracklabel>

                                    <!-- draw the main markers and labels -->
                                    <?php if(is_array($res_1_5) || $res_1_5 instanceof \think\Collection || $res_1_5 instanceof \think\Paginator): $k = 0; $__LIST__ = $res_1_5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                    <trackmarker start="<?php echo explode('--',$vo['Locus'])[0] ?>" end="<?php echo explode('--',$vo['Locus'])[1] ?>" markerstyle="<?php echo $color[$k-1]; ?>" arrowendlength="4" arrowstartlength="-4">
                                        <markerlabel type="path" class="mdlabel white" text="<?php echo $vo['composition']; ?>"></markerlabel>
                                    </trackmarker>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>

                                    <!-- draw the marker regions -->
                                    <?php if(is_array($res_1_5) || $res_1_5 instanceof \think\Collection || $res_1_5 instanceof \think\Paginator): $k = 0; $__LIST__ = $res_1_5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                    <trackmarker start="<?php echo explode('--',$vo['Locus'])[0] ?>" end="<?php echo explode('--',$vo['Locus'])[1] ?>" markerstyle="<?php echo $color_1[$k-1]; ?>" wadjust="-5" vadjust="25"></trackmarker>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>

                                    <!-- draw the region boundaries lines for each marker -->
                                    <!--
                                    <?php if(is_array($res_1_5) || $res_1_5 instanceof \think\Collection || $res_1_5 instanceof \think\Paginator): $k = 0; $__LIST__ = $res_1_5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                    <trackmarker start="<?php echo explode('--',$vo['Locus'])[0] ?>" markerstyle="<?php echo $color_2[$k-1]; ?>" class="boundary" wadjust="20">
                                        <markerlabel class="smlabel red" text="<?php echo explode('--',$vo['Locus'])[0] ?>" vadjust="30"></markerlabel>
                                    </trackmarker>
                                    <trackmarker start="<?php echo explode('--',$vo['Locus'])[1] ?>" markerstyle="<?php echo $color_2[$k-1]; ?>" class="boundary" wadjust="20">
                                        <markerlabel class="smlabel purple" text="<?php echo explode('--',$vo['Locus'])[1] ?>" vadjust="30"></markerlabel>
                                    </trackmarker>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
-->

                                    <!-- draw the scales -->
                                    <trackscale interval="5" style='stroke:#999' direction="in" ticksize="3"></trackscale>
                                    <trackscale interval="5" style='stroke:#999' ticksize="3"></trackscale>
                                    <trackscale interval="30" style="stroke:#f00" direction="in" showlabels="1" labelstyle="fill:#999;stroke:none;text-anchor:middle;alignment-baseline:middle;font-size:10px"></trackscale>
                                </plasmidtrack>
                            </plasmid>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <table class="table table-bordered" style="border: solid 2px #ffee99;box-shadow: inset 0 0 10px #CCC;">
                                <tbody>
                                    <thead>
                                        <th>Composition</th>
                                        <th>Sites</th>
                                        <th>Type</th>
                                    </thead>
                                    <?php if(is_array($res_1_5) || $res_1_5 instanceof \think\Collection || $res_1_5 instanceof \think\Paginator): $k = 0;$__LIST__ = is_array($res_1_5) ? array_slice($res_1_5,0,10, true) : $res_1_5->slice(0,10, true); if( count($__LIST__)==0 ) : echo "Have no data" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                    <tr>
                                        <?php if($vo['Type']=='brick'): ?>
                                        <td style="background-color: <?php echo $color_3[$k-1]; ?>; "><a href="<?php echo url('index/display/displayer',array('id'=>$vo['composition'])); ?>" style="color: white"><?php echo $vo['composition']; ?></a></td><?php else: ?>
                                        <td style="background-color: <?php echo $color_3[$k-1]; ?>; "><?php echo $vo['composition']; ?></td>
                                        <?php endif; ?>
                                        <td style="background-color: <?php echo $color_3[$k-1]; ?>"><?php echo $vo['Locus']; ?></td>
                                        <td style="background-color: <?php echo $color_3[$k-1]; ?>"><?php echo $vo['Type']; ?></td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "Have no data" ;endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <?php endif; endif; ?>
                <div class="title">
                    <p>DownLoad</p>
                </div>
                <div id="Download" class="hz" style="height: 200px">

                    <table class="table table-bordered" style="border: solid 2px #ffee99;box-shadow: inset 0 0 10px #CCC;">
                        <tbody>
                            <tr>
                                <!--                                <td><a href="#">SBOL</a></td>-->
                            </tr>
                            <tr>
                                <td><a href="http://localhost:12345/DataBase/THINKPHP/public/testfile/<?php echo $filename_1; ?>">FASTA</a></td>
                            </tr>
                            <tr>
                                <!--                                <td><a href="#">GENEBANK</a></td>-->
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

        $(window).scroll(function() {
            if ($(window).scrollTop() > 50) {
                $('#clu').stop().animate({
                    'top': '50px'
                }, 100);
            }
            if ($(window).scrollTop() < 50) {
                $('#clu').stop().animate({
                    'top': '190px'
                }, 0);
            };
        })

        $('#clu  ul li a').click(function() {
            $(this).closest('li').siblings().removeClass("active");
            $(this).closest('li').addClass("active");
            $('html, body').stop().animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 1000);
            return false;

        });
        $('body').scrollspy({
            target: '#clu',
            offset: 200
        })

        $('#clu ul li a').click(function() {

            $('html, body').stop().animate({
                scrollTop: $($(this).attr('href')).offset().top - 120
            }, 1000);
            return false;

        });

        cytoscape({
            container: document.getElementById('cy'),
            style: [{
                    selector: 'node[label = "Start"]',
                    css: {
                        'content': 'data(name)',
                        "font-size": "12px",
                        "text-valign": "center",
                        "text-halign": "center",
                        "background-color": "#00FA9A",
                        "text-outline-color": "#00CED1",
                        "text-outline-width": "2px",
                        "color": "#fff",
                        "overlay-padding": "6px",
                        "z-index": "10",
                        "border-width": "4px",
                        "border-color": "#98FB98",
                        "border-opacity": "0.6",
                    }
                },
                {
                    selector: 'node[label = "End"]',
                    css: {
                        'content': 'data(name)',
                        "font-size": "6px",
                        "text-valign": "center",
                        "text-halign": "center",
                        "background-color": "#DDA0DD",
                        "text-outline-color": "#5599ff",
                        "text-outline-width": "1px",
                        "color": "#fff",
                        "overlay-padding": "3px",
                        "z-index": "10",
                    }
                },
                {
                    selector: 'edge',
                    css: {
                        'content': 'data(point)',
                        "curve-style": "haystack",
                        "haystack-radius": "0.3",
                        "opacity": "0.4",
                        "line-color": "yellow",
                        "width": "mapData(weight, 0, 1, 1, 8)",
                        "overlay-padding": "3px",
                    }
                }
            ],
            elements: {
                nodes: [
                    <?php 
                    $i=2;
                    echo '{ data:{id:"1",name:\''.$id.'\',lable:"Start"}},';
                    foreach ($a as $value1) {
                      echo '{ data: { id: \''.$i.'\', name: \''.$value1.'\', label: "End"} },' ;
                      $i=$i+1;
                    }
                ?>
                ],

                edges: [
                    <?php
                $i=2;
                foreach ($b as $value2) {
                  echo '{ data: {source: "1", target: \''.$i.'\', point: \''.$value2.'\'} },' ;
                  $i=$i+1;
                }
                ?>
                ]
            },
            layout: {
                name: 'cose'
            }
        });
    })

</script>
    
</body>

</html>