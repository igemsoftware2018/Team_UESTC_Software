<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:96:"D:\Apache24\htdocs\DataBase\THINKPHP\public/../application/index\view\display\displayer_dna.html";i:1538114304;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\base.html";i:1534298764;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\meta.html";i:1536997341;s:78:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\header.html";i:1537498204;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\foot.html";i:1536249134;}*/ ?>
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


<div class="mycontainer-1">
    <div class="container">
        <div class="row">
            <nav id="clu">
                <ul class="nav">
                 
                    <li class="active"><a href="#dna">DNA</a></li><hr>
                    
                    <li><a href="#Download">Download</a></li><hr>
                </ul>
            </nav>
            <?php if(!empty($a)): ?>
            <div class="col-lg-10 col-md-10 col-sm-9 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 ">
                <div id="cy" style="z-index: 11;height: 600px;width: 100%;"></div>
            </div>
            <?php endif; ?>
            <div class="col-lg-10 col-md-10 col-sm-9 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 con-r-1">

                <div class="title_1">
                <span><?php echo $res_6_0['iGEM_ID']; ?></span>
                <p>DNA</p></div>
                <div id="dna" class="hz">
                    
                    <table class="table table-bordered" style="border: solid 2px #ffee99;box-shadow: inset 0 0 10px #CCC;">
                        <tbody>
                            
                            <tr>
                                <th class="col-1">Description</th>
                                <td class="col-2"><?php echo $res_6_0['Description']; ?></td>
                            </tr>
                            
                            <tr>
                                <th>Submit_team</th>
                                <td><a href="http://<?php echo substr($res_6_0['Submit_team'],0,4)?>.igem.org/Team:<?php echo substr($res_6_0['Submit_team'],5)?>"><?php echo $res_6_0['Submit_team']; ?></a></td>
                            </tr>
                            
                            
                            <tr>
                                <th>Sample_Statu</th>
                                <td><?php echo $res_6_0['Sample_Statu']; ?></td>
                            </tr>
                            <tr>
                                <th>Uses</th>
                                <td><?php echo $res_6_0['Uses']; ?></td>
                            </tr>
                            <tr>
                                <th>Twin</th>
                                <td><?php echo $res_6_0['Twin']; ?></td>
                            </tr>
                            <tr>
                                <th>Nickname</th>
                                <td><?php echo $res_6_0['Nickname']; ?></td>
                            </tr>
                            <tr>
                                <th>Designer</th>
                                <td><?php echo $res_6_0['Designer']; ?></td>
                            </tr>
                            <tr>
                                <th>Categories</th>
                                <td><?php echo $res_6_0['Categories']; ?></td>
                            </tr>
                            <tr>
                                <th>Assembly Compatibility</th>
                                <td><?php echo $res_6_0['Green']; ?></td>
                            </tr>
                            <tr>
                                <th>Sequence</th>
                                <?php if(strlen($res_6_0['sequence']) >300): ?>
                                <td title="<?php echo $res_6_0['sequence']; ?>">
                                    <?php echo substr($res_6_0['sequence'],0,300); ?>...<span style="font-size: 15px;color:#ffee99">(mouseover to show all)</span></td>
                                <?php else: ?>
                                <td><?php echo $res_6_0['sequence']; ?></td>
                                <?php endif; ?>
                            </tr>
                            
                            <tr>
                                <th>iGEM_Link</th>
                                <td><a href="<?php echo $res_6_0['iGEM_Link']; ?>"><?php echo $res_6_0['iGEM_Link']; ?></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
               
                
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
                                <td><a href="http://localhost:12345/DataBase/THINKPHP/public/testfile/<?php echo $filename_6; ?>">FASTA</a></td>
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
            if ($(window).scrollTop()>50) {
                $('#clu').stop().animate({'top':'50px'},200);
            } 
            if($(window).scrollTop()<50){
                $('#clu').stop().animate({'top':'190px'},0);
            };
        })
        $('#clu ul li a').click(function() {
            
            $('html, body').stop().animate({
                scrollTop: $($(this).attr('href')).offset().top-110
            }, 1000);
            return false;

        });
        $('body').scrollspy({
            target: '#clu',
            offset: 200
        })

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
                        "text-outline-color": "#BC8F8F",
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