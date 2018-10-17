<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:99:"D:\Apache24\htdocs\DataBase\THINKPHP\public/../application/index\view\display\displayer_coding.html";i:1539427139;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\base.html";i:1534298764;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\meta.html";i:1536997341;s:78:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\header.html";i:1539426028;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\foot.html";i:1536249134;}*/ ?>
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


<div class="mycontainer-1" data-spy="scroll" data-target="#clu">
    <div class="container">
        <div class="row">
            <div id="clu">
                <ul class="nav">
                    
                    <li><a href="#Coding">iGEM</a></li>
                    <hr> <?php if(!empty($res_3_1)): if(!empty($a)): ?>
                    <li><a href="#cy">Interaction</a></li>
                    <hr><?php endif; ?>
                    <li><a href="#sites">Site</a></li>
                    <hr>
                    <li><a href="#Uniprot">Uniprot</a></li>
                    <hr>
                    <?php if(!empty($res_3_2_0)): ?>
                    <li><a href="#go">GO</a></li>
                    <hr><?php endif; ?>
                    <li><a href="#key">Feature Key</a></li>
                    <hr> <?php endif; if(!empty($res_3_4)): if(!(count($res_3_4)>10)): ?>
                    <li><a href="#Component">Component</a></li>
                    <hr> <?php endif; endif; if(!empty($res_3_1)): if(!empty($res_3_6[0])): ?>
                    <li><a href="#reference">Reference</a></li>
                    <hr><?php endif; endif; ?>
                    <li><a href="#Download">Download</a></li>
                    <hr>
                </ul>
            </div>
            
            <div class="col-lg-10 col-md-10 col-sm-9 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 con-r-1">

                <div class="title_1">
                    <span style="font-size: 50px;position: relative;top: -10px;"><?php echo $res_3_0['iGEM_ID']; ?></span>

                </div>

                <div class="title">
                    <p>iGEM</p>
                </div>
                <div id="Coding" class="hz">

                    <table class="table table-bordered" style="border: solid 2px #ffee99;box-shadow: inset 0 0 10px #CCC;">
                        <tbody>

                            <tr>
                                <th class="col-1">Description</th>
                                <td class="col-2"><?php echo $res_3_0['Description']; ?></td>
                            </tr>
                            <tr>
                                <th>Direction</th>
                                <td><?php echo $res_3_0['Direction']; ?></td>
                            </tr>
                            <tr>
                                <th>Tag</th>
                                <td><?php echo $res_3_0['Tag']; ?></td>
                            </tr>

                            <tr>
                                <th>Submit_team</th>
                                <td>
                                    <a target="_blank" href="http://<?php echo substr($res_3_0['Submit_team'],0,4)?>.igem.org/Team:<?php echo substr($res_3_0['Submit_team'],5)?>"><?php echo $res_3_0['Submit_team']; ?></a></td>
                            </tr>

                            <tr>
                                <th>Sample_Statu</th>
                                <td><?php echo $res_3_0['Sample_Statu']; ?></td>
                            </tr>
                            <tr>
                                <th>Uses</th>
                                <td><?php echo $res_3_0['Uses']; ?></td>
                            </tr>
                            <tr>
                                <th>Twin</th>
                                <td><?php echo $res_3_0['Twin']; ?></td>
                            </tr>
                            <tr>
                                <th>Nickname</th>
                                <td><?php echo $res_3_0['Nickname']; ?></td>
                            </tr>
                            <tr>
                                <th>Kegg</th>
                                <td><?php echo $res_3_0['kegg']; ?></td>
                            </tr>
                            <tr>
                                <th>Function</th>
                                <td><?php echo $res_3_0['function']; ?></td>
                            </tr>
                            <tr>
                                <th>Designer</th>
                                <td><?php echo $res_3_0['Designer']; ?></td>
                            </tr>
                            <tr>
                                <th>Categories</th>
                                <td><?php echo $res_3_0['Categories']; ?></td>
                            </tr>

                            <tr>
                                <th>Assembly Compatibility</th>
                                <td><?php echo $res_3_0['Green']; ?></td>
                            </tr>

                            <tr>
                                <th>iGEM_Link</th>
                                <td><a target="_blank" href="<?php echo $res_3_0['iGEM_Link']; ?>"><?php echo $res_3_0['iGEM_Link']; ?></a></td>
                            </tr>
                            <tr>
                                <th>Sequence</th>
                                <?php if(strlen($res_3_0['sequence']) >300): ?>
                                <td title="<?php echo $res_3_0['sequence']; ?>">
                                    <?php echo substr($res_3_0['sequence'],0,300); ?>...<span style="font-size: 15px;color:#ffee99">(mouseover to show all)</span></td>
                                <?php else: ?>
                                <td><?php echo $res_3_0['sequence']; ?></td>
                                <?php endif; ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <?php if(!empty($a)): ?>
                <div class="title">
                    <p>Interaction</p>
                </div>
                    <div id="cy" style="z-index: 11;height: 600px;width: 100%;position: relative;top: 0px"></div>
                
                <?php endif; if(!empty($res_3_1)): ?>
                
                <div class="title">
                    <p>Site</p>
                </div>
                <div id="sites" class="hz" style="height: 50px">
<!--
                    <div class="canvas-box">
                        <canvas id="canvas" style="display:block;margin: 0 ;">不支持canvas</canvas>
                    </div>
-->
                    <div class="col-md-offset-1" style="background-color: antiquewhite;height: 17px;position: relative;top: 20px;border-radius: 10px;width: 800px" title="ID: <?php echo $res_3_0['iGEM_ID']; ?>&#10length:<?php echo $len; ?>">
                       <?php if(is_array($arr5) || $arr5 instanceof \think\Collection || $arr5 instanceof \think\Paginator): $k = 0; $__LIST__ = $arr5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                           <a href="#<?php echo $vo['0']; ?>"><div class="locu" style="position: absolute;margin-left: <?php echo $vo['1'][0]/$len*800; ?>px;width:<?php echo $vo['1'][1]/$len*800-$vo['1'][0]/$len*800; ?>px;height: 15px;background-color: <?php echo $color_4[$k]; ?>;text-align: center;border-radius: 10px;font-size: 13px;top: 1px;cursor: pointer;" title="Site: <?php echo $vo['1'][0]; ?>-<?php echo $vo['1'][1]; ?>">
                           <?php if(!empty($vo[2])): ?>
                           <?php echo $vo['2']; else: ?><?php echo $vo['0']; endif; ?></div></a>
                       <?php endforeach; endif; else: echo "" ;endif; ?>
                        
                    </div>
                </div>
                


                <div class="title">
                    <p>Uniprot</p>
                </div>
                <div id="Uniprot" class="hz">

                    <table class="table table-bordered table-responsive" style="border: solid 2px #ffee99;box-shadow: inset 0 0 10px #CCC;">
                        <tbody>
                            <?php if(is_array($res_3_1) || $res_3_1 instanceof \think\Collection || $res_3_1 instanceof \think\Paginator): $k = 0;$__LIST__ = is_array($res_3_1) ? array_slice($res_3_1,0,100, true) : $res_3_1->slice(0,100, true); if( count($__LIST__)==0 ) : echo "Have no data" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                            <tr id="<?php echo $vo['Uniprot_id']; ?>">
                                <th class="col-1">Uniprot_id</th>
                                <td class="col-2"><?php echo $vo['Uniprot_id']; ?></td>
                            </tr>
                            <tr>
                                <th>Protein_Name</th>
                                <td><?php echo $vo['Protein_Name']; ?></td>
                            </tr>
                            <tr>
                                <th>Gene_Name</th>
                                <td><?php echo $vo['Gene_Name']; ?></td>
                            </tr>
                            <tr>
                                <th>Species</th>
                                <td><?php echo $vo['Species']; ?></td>
                            </tr>
                            <tr>
                                <th>Function</th>
                                <td><?php echo $vo['Function']; ?></td>
                            </tr>

                            <tr>
                                <th>Keywords</th>
                                <td><?php echo $vo['Keywords']; ?></td>
                            </tr>
                            <tr>
                                <th>Sequence</th>
                                <?php if(strlen($vo['Sequence']) >500): ?>
                                <td title="<?php echo $vo['Sequence']; ?>">
                                    <?php echo substr($vo['Sequence'],0,300); ?>...<span style="font-size: 15px;color:#ffee99">(mouseover to show all)</span></td>
                                <?php else: ?>
                                <td><?php echo $vo['Sequence']; ?></td>
                                <?php endif; ?>
                            </tr>
                            <tr>
                                <th>Interaction</th>
                                <td><a target="_blank" href="<?php echo $vo['Interaction']; ?>"><?php echo $vo['Interaction']; ?></a></td>
                            </tr>
                            <tr style="border-bottom: 3px solid #ccccff">
                                <th>Uniprot_Link</th>
                                <td><a target="_blank" href="<?php echo $vo['Uniprot_Link']; ?>"><?php echo $vo['Uniprot_Link']; ?></a></td>
                            </tr>

                            <?php endforeach; endif; else: echo "Have no data" ;endif; ?>
                        </tbody>
                    </table>
                </div>

                <?php if(!empty($res_3_2_0)): ?>
                <div class="title">
                    <p>GO</p>
                </div>
                <div id="go" class="hz" style="height: 350px;
    overflow-y: auto">

                    <table class="table table-bordered table-responsive" style="border: solid 2px #ffee99;box-shadow: inset 0 0 10px #CCC;">
                        <thead>
                            <tr>
                                <th style="width: 10%">Gene name</th>
                                <th style="width: 10%">Qualifier</th>
                                <th style="width: 30%">GO_Term</th>
                                <th style="width: 10%">Evidence</th>
                                <th style="width: 20%">Reference</th>
                                <th style="width: 20%">Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($res_3_2)): if(is_array($res_3_2) || $res_3_2 instanceof \think\Collection || $res_3_2 instanceof \think\Paginator): $k = 0;$__LIST__ = is_array($res_3_2) ? array_slice($res_3_2,0,2, true) : $res_3_2->slice(0,2, true); if( count($__LIST__)==0 ) : echo "Have no data" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if(!empty($vo)): if(is_array($vo) || $vo instanceof \think\Collection || $vo instanceof \think\Paginator): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <td><?php echo $vi['Gene_Name']; ?></td>
                                <td><?php echo $vi['Qualifier']; ?></td>
                                <td><a target="_blank" href="<?php echo substr($vi['GO_Term'],0,44) ?>"><?php echo substr($vi['GO_Term'],35) ?></a></td>
                                <td><a target="_blank" href="https://www.ebi.ac.uk/QuickGO/term/<?php echo $vi['Evidence']; ?>"><?php echo $vi['Evidence']; ?></a></td>
                                <?php if(strpos($vi['Reference'],'REF')): ?>
                                <td><a target="_blank" href="https://github.com/geneontology/go-site/blob/master/metadata/gorefs/goref-<?php echo substr($vi['Reference'],7) ?>.md"><?php echo $vi['Reference']; ?></a></td>
                                <?php elseif(strpos($vi['Reference'],'MID')): ?>
                                <td><a  target="_blank" href="http://europepmc.org/abstract/MED/<?php echo substr($vi['Reference'],5) ?>"><?php echo $vi['Reference']; ?></a></td>
                                <?php else: ?>
                                <td><?php echo $vi['Reference']; ?></td>
                                <?php endif; ?>
                                <td><?php echo $vi['Category']; ?></td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "Have no data" ;endif; endif; ?>

                        </tbody>
                    </table>
                </div><?php endif; if(!empty($res_3_5)): if(!empty($res_3_7)): ?>

                <div class="title">
                    <p>Feature Key</p>
                </div>
                <div id="key" class="hz">

                    <div style="margin-left: 10px;border: 2px solid #d29173;margin: 10px;">
                        <div id="key_con" style="height: 40px;line-height: 40px;border-bottom: 1px solid #ccc">
                            <span style="font-size: 16px;font-weight: 700;margin-right: 20px;border-right: 1px solid #ccc;padding:0 10px;width: 110px;display: inline-block">Uniprot_id:</span> <?php if(is_array($res_3_5) || $res_3_5 instanceof \think\Collection || $res_3_5 instanceof \think\Paginator): $k = 0;$__LIST__ = is_array($res_3_5) ? array_slice($res_3_5,0,10, true) : $res_3_5->slice(0,10, true); if( count($__LIST__)==0 ) : echo "Have no data" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if(!empty($vo['1'])): ?>
                            <a href="javascript:"><span style="font-size: 15px;" class="label label-success"><?php echo $vo['0']; ?></span> </a><?php endif; endforeach; endif; else: echo "Have no data" ;endif; ?>
                        </div>
                        <div>
                            <?php if(is_array($res_3_5) || $res_3_5 instanceof \think\Collection || $res_3_5 instanceof \think\Paginator): $k = 0;$__LIST__ = is_array($res_3_5) ? array_slice($res_3_5,0,10, true) : $res_3_5->slice(0,10, true); if( count($__LIST__)==0 ) : echo "Have no data" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if(!empty($vo['1'])): ?>
                            <div class="xl-con1" style="height:0;display: block;transition:all 0;position: relative;overflow-y: scroll;text-overflow: ellipsis;padding: 0 30px 0 5px">
                                <i class="fa fa-window-close" aria-hidden="true" style="position: absolute;right: 10px;top: 10px;color:#bbff66;cursor: pointer"></i>
                                <table class="table table-bordered table-responsive" style="border: solid 2px #ffee99;box-shadow: inset 0 0 10px #CCC;">
                                    <thead>
                                        <th>Feature Key</th>
                                        <th>Position</th>
                                        <th>Description</th>
                                    </thead>
                                    <tbody>
                                        <?php if(is_array($vo['1']) || $vo['1'] instanceof \think\Collection || $vo['1'] instanceof \think\Paginator): $k = 0; $__LIST__ = $vo['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($k % 2 );++$k;?>
                                        <tr>
                                            <td><?php echo $vi['feature_key']; ?></td>
                                            <td><?php echo $vi['position']; ?></td>
                                            <td>
                                                <?php if((strpos($vi['description'],'->'))and(strlen($vi['description'])==15)): ?>
                                                <a target="_blank" href="<?php  $sz=explode(' ',$vi['description']);$length=count($sz);if(in_array('->',$sz)) echo 'https://www.ebi.ac.uk/ena/data/view/'.$sz[$length-1]; ?>"><?php echo $vi['description']; ?></a> <?php endif; if((!strpos($vi['description'],'->')) OR (strlen($vi['description'])!=15)): ?> <?php echo $vi['description']; endif; ?>
                                            </td>
                                        </tr>

                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php endif; endforeach; endif; else: echo "Have no data" ;endif; ?>
                        </div>

                    </div>


                </div>
                <?php endif; endif; endif; if(!empty($res_3_4)): if(!(count($res_3_4)>10)): ?>
                <div class="title" style="margin-bottom: 50px;margin-top: 50px">
                    <p>Component</p>
                </div>

                <div class="zhili" id="Component">
                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <plasmid sequencelength="<?php echo $len*1.02; ?>" plasmidheight="500" plasmidwidth="500">
                                <plasmidtrack trackstyle="fill:#ccc" width="5" radius="190"></plasmidtrack>
                                <plasmidtrack trackstyle="fill:rgba(225,225,225,0.5)" radius="180">

                                    <tracklabel text="<?php echo $res_3_0['iGEM_ID']; ?>" labelstyle='font-size:20px;font-weight:400'></tracklabel>

                                    <tracklabel text="<?php echo $len; ?> bp" labelstyle='font-size:10px' vadjust="20"></tracklabel>

                                    <!-- draw the main markers and labels -->
                                    <?php if(is_array($res_3_4) || $res_3_4 instanceof \think\Collection || $res_3_4 instanceof \think\Paginator): $k = 0; $__LIST__ = $res_3_4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                    <trackmarker start="<?php echo explode('--',$vo['Locus'])[0] ?>" end="<?php echo explode('--',$vo['Locus'])[1] ?>" markerstyle="<?php echo $color[$k-1]; ?>" arrowendlength="4" arrowstartlength="-4">
                                        <markerlabel type="path" class="mdlabel white" text="<?php echo $vo['composition']; ?>"></markerlabel>
                                    </trackmarker>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>

                                    <!-- draw the marker regions -->
                                    <?php if(is_array($res_3_4) || $res_3_4 instanceof \think\Collection || $res_3_4 instanceof \think\Paginator): $k = 0; $__LIST__ = $res_3_4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                    <trackmarker start="<?php echo explode('--',$vo['Locus'])[0] ?>" end="<?php echo explode('--',$vo['Locus'])[1] ?>" markerstyle="<?php echo $color_1[$k-1]; ?>" wadjust="-5" vadjust="25"></trackmarker>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>

                                    <!-- draw the region boundaries lines for each marker -->
<!--
                                    <?php if(is_array($res_3_4) || $res_3_4 instanceof \think\Collection || $res_3_4 instanceof \think\Paginator): $k = 0; $__LIST__ = $res_3_4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
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
                                    <?php if(!(int)$len>2000): ?>
                                    <trackscale interval="30" style="stroke:#f00" direction="in" showlabels="1" labelstyle="fill:#999;stroke:none;text-anchor:middle;alignment-baseline:middle;font-size:10px"></trackscale>
                                    <?php endif; ?>
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
                                    <?php if(is_array($res_3_4) || $res_3_4 instanceof \think\Collection || $res_3_4 instanceof \think\Paginator): $k = 0;$__LIST__ = is_array($res_3_4) ? array_slice($res_3_4,0,10, true) : $res_3_4->slice(0,10, true); if( count($__LIST__)==0 ) : echo "Have no data" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
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
                <?php endif; endif; if(!empty($res_3_3)): if(!empty($res_3_6[0])): ?>
                <div class="title">
                    <p>Reference</p>
                </div>
                <div id="reference" class="hz">
                    <?php if(is_array($res_3_3) || $res_3_3 instanceof \think\Collection || $res_3_3 instanceof \think\Paginator): $k = 0;$__LIST__ = is_array($res_3_3) ? array_slice($res_3_3,0,10, true) : $res_3_3->slice(0,10, true); if( count($__LIST__)==0 ) : echo "Have no data" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if(!empty($vo['1'])): ?>
                    <div class="ref" style="margin-left: 10px;border: 2px solid #d29173;margin: 10px;">
                        <div style="height: 40px;line-height: 40px;border-bottom: 1px solid #ccc">
                            <span style="font-size: 16px;font-weight: 700;margin-right: 20px;border-right: 1px solid #ccc;padding:0 10px;width: 110px;display: inline-block">Uniprot_id:</span>
                            <p style="display: inline"><?php echo $vo['0']; ?></p>
                        </div>
                        <div class="xl" style="min-height:40px;line-height: 40px;border-bottom: 1px solid #ccc">
                            <span style="font-size: 16px;font-weight: 700;margin-right: 20px;padding:0 10px;width: 105px;display: inline-block">Reference:</span> <?php if(is_array($vo['1']) || $vo['1'] instanceof \think\Collection || $vo['1'] instanceof \think\Paginator): $k = 0; $__LIST__ = $vo['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($k % 2 );++$k;?>
                            <a href="javascript:">
                                <span class="label label-info" style="font-size: 14px"><?php echo substr($vi['reference'],36); ?></span>
                            </a> <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <div>
                            <?php if(is_array($vo['1']) || $vo['1'] instanceof \think\Collection || $vo['1'] instanceof \think\Paginator): $k = 0; $__LIST__ = $vo['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($k % 2 );++$k;?>
                            <div class="xl-con" style="height:0;display: block;transition:all 0;position: relative;overflow-y: scroll;text-overflow: ellipsis;padding: 0 30px 0 5px">
                                <i class="fa fa-window-close" aria-hidden="true" style="position: absolute;right: 10px;top: 10px;color:#bbff66;cursor: pointer"></i>
                                <span style="font-size: 16px;font-weight: 700;padding:0;">Title :</span>
                                <p style="display:inline;"><a target="_blank" href="<?php echo $vi['reference']; ?>"><?php echo $vi['title']; ?> </a></p>
                                <div>
                                    <span style="font-size: 16px;font-weight: 700;padding:0;">Abstract:</span>
                                    <p style="display:inline"><?php echo $vi['abstract']; ?></p>

                                </div>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>

                    </div>
                    <?php endif; endforeach; endif; else: echo "Have no data" ;endif; ?>


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
                                <td><a href="http://localhost:12345/DataBase/THINKPHP/public/testfile/<?php echo $filename_3; ?>">FASTA</a></td>
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

        $('.xl a').click(function() {

            i = $(this).index();

            $(this).parent().parent().children().eq(2).children().eq(i - 1).siblings('div').css({
                'height': '0'
            });
            $(this).parent().parent().children().eq(2).children().eq(i - 1).css({
                'height': '150px'
            });

        })
        $('.xl-con i').click(function() {

            $(this).parent().parent().children().eq(i - 1).css({
                'height': '0'
            })
        })

        $('#key_con a').click(function() {
            n = $(this).index();
            $(this).parent().parent().children().eq(1).children().eq(n - 1).siblings('div').css({
                'height': '0'
            });
            $(this).parent().parent().children().eq(1).children().eq(n - 1).css({
                'height': '200px'
            });
        })

        $('.xl-con1 i').click(function() {

            $(this).parent().parent().children().eq(n - 1).css({
                'height': '0'
            })
        })
        //        $('#xl a').on('click', function() {
        //            var i=$(this).index();
        //            var con=$('#xl a span')[i].innerHTML;
        //            $.ajax({
        //                type: "POST",
        //                url: "<?php echo url('index/search/xl'); ?>",
        //                data: "con",
        //                dataType: 'json',
        //                success: function(data) {
        //                    $('#xl-con').append(data);
        //                    console.log(data);                  
        //                }
        //            });
        //        });


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

        $('body').scrollspy({
            target: '#clu',
            offset: 200
        })

        $('#clu ul li a').click(function() {

            $('html, body').stop().animate({
                scrollTop: $($(this).attr('href')).offset().top - 100
            }, 1000);
            return false;

        });

        $('#sites a').click(function() {

            $('html, body').stop().animate({
                scrollTop: $($(this).attr('href')).offset().top - 50
            }, 700);
            return false;

        });


        $('#go').niceScroll({
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


        cytoscape({
            container: document.getElementById('cy'),
            style: [{
                    selector: 'node[label = "Start"]',
                    css: {
                        'content': 'data(name)',
                        "height": 55,
                        "width": 55,
                        "text-valign": "center",
                        "text-halign": "center",
                        "background-color": "#ff7073",
                        "text-outline-color": "#7c8489",
                        "text-outline-width": "2px",
                        "color": "#fff",
                        "overlay-padding": "6px",
                        "z-index": "10",
                        "border-width": "3px",
                        "border-color": "#fcc89a",
                        "border-opacity": "0.6",
                    }
                },
                {
                    selector: 'node[label = "End"]',
                    css: {
                        'content': 'data(name)',
                        "height": 55,
                        "width": 55,
                        "text-valign": "center",
                        "text-halign": "center",
                        "background-color": "#4fb3a4",
                        "text-outline-color": "#7c8489",
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
                        "haystack-radius": "0.1",
                    }
                }
            ],
            elements: {
                nodes: [
                    <?php 
                    $i=2;
                    echo '{ data:{id:"1",name:\''.$id.'\',label:"Start"}},';
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
            },
            minZoom: 0.9,
            maxZoom: 1,
            userZoomingEnabled: false,
            autounselectify: true,
        });
        
    })

</script>
    
</body>

</html>