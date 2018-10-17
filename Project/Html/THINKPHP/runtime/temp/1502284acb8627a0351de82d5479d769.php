<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:92:"D:\Apache24\htdocs\DataBase\THINKPHP\public/../application/index\view\catalog\catalog_1.html";i:1539706314;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\base.html";i:1534298764;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\meta.html";i:1536997341;s:78:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\header.html";i:1539678747;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\foot.html";i:1539739534;}*/ ?>
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





<div class="container" style="position: relative;top: 50px">

    <div class="row">
        <div class="col-md-4 col-md-offset-1 col-sm-7">
            <h2 style="color: #aa7700">Browse parts by type</h2>
        </div>
        <div class="col-md-11 col-md-offset-1 col-sm-12">
            <hr style="height: 1px;background-color:antiquewhite">
        </div>
    </div>

    <div class="row">
        <div class="col-md-11 col-md-offset-1" style="position: relative;top: 20px">
            <table>
                <thead>
                    <th style="width: 63.2px;text-align: center">Catalog</th>
                    <th style="width: 50px;text-align: center">List</th>
                    <th></th>
                </thead>
                <tbody>
                    <tr style="height: 80px">
                        <td><img src="/DataBase/THINKPHP/public/static/image/promoter3.png" height='50px' width="62.5px"></td>
                        <td><a href="<?php echo url('index/catalog/CatalogType',array('type'=>'promoter')); ?>"><img src="/DataBase/THINKPHP/public/static/image/list.PNG"
                        height='50px'></a></td>
                        <td>
                            <p > Promoters : A promoter is a DNA sequence that tends to recruit transcriptional machinery and lead to transcription of the downstream DNA sequence.</p>
                        </td>
                    </tr>
                    <tr style="height: 80px">
                        <td><img src="/DataBase/THINKPHP/public/static/image/rbs3.PNG" height='50px' width="62.5px"></td>
                        <td><a href="<?php echo url('index/catalog/CatalogType',array('type'=>'rbs')); ?>"><img src="/DataBase/THINKPHP/public/static/image/list.PNG"
                        height='50px'></a></td>
                        <td>
                            <p>	Ribosome Binding Site/about : A ribosome binding site (RBS) is an RNA sequence found in mRNA to which ribosomes can bind and initiate translation.</p>
                        </td>
                    </tr>
                    <tr style="height: 80px">
                        <td><img src="/DataBase/THINKPHP/public/static/image/pd3.PNG" height='50px' width="62.5px"></td>
                        <td><a href="<?php echo url('index/catalog/CatalogType',array('type'=>'protein_domains')); ?>"><img src="/DataBase/THINKPHP/public/static/image/list.PNG"
                        height='50px'></a></td>
                        <td>
                            <p>	Protein domains : Protein domains are portions of proteins cloned in frame with other proteins domains to make up a protein coding sequence. Some protein domains might change the protein's location, alter its degradation rate, target the protein for cleavage, or enable it to be readily purified.</p>
                        </td>
                    </tr>
                    <tr style="height: 80px">
                        <td><img src="/DataBase/THINKPHP/public/static/image/pcs3.PNG" height='50px' width="62.5px"></td>
                        <td><a href="<?php echo url('index/catalog/CatalogType',array('type'=>'protein_coding_sequences')); ?>"><img src="/DataBase/THINKPHP/public/static/image/list.PNG"
                        height='50px'></a></td>
                        <td>
                            <p style="position: relative;top: 15px">	Protein coding sequences : Protein coding sequences encode the amino acid sequence of a particular protein. Note that some protein coding sequences only encode a protein domain or half a protein. Others encode a full-length protein from start codon to stop codon. Coding sequences for gene expression reporters such as LacZ and GFP are also included here.</p>
                        </td>
                    </tr>
                    <tr style="height: 80px">
                        <td><img src="/DataBase/THINKPHP/public/static/image/terminator3.PNG" height='50px' width="62.5px"></td>
                        <td><a href="<?php echo url('index/catalog/CatalogType',array('type'=>'terminators')); ?>"><img src="/DataBase/THINKPHP/public/static/image/list.PNG"
                        height='50px'></a></td>
                        <td>
                            <p> Terminators : A terminator is an RNA sequence that usually occurs at the end of a gene or operon mRNA and causes transcription to stop.</p>
                        </td>
                    </tr>
                    <tr style="height: 80px">
                        <td><img src="/DataBase/THINKPHP/public/static/image/dna3.PNG" height='50px' width="62.5px"></td>
                        <td><a href="<?php echo url('index/catalog/CatalogType',array('type'=>'dna')); ?>"><img src="/DataBase/THINKPHP/public/static/image/list.PNG"
                        height='50px'></a></td>
                        <td>
                            <p>	DNA : DNA parts provide functionality to the DNA itself. DNA parts include cloning sites, scars, primer binding sites, spacers, recombination sites, conjugative tranfer elements, transposons, origami, and aptamers.</p>
                        </td>
                    </tr>
                    <tr style="height: 80px">
                        <td><img src="/DataBase/THINKPHP/public/static/image/reporter3.PNG" height='50px' width="62.5px"></td>
                        <td><a href="<?php echo url('index/catalog/CatalogType',array('type'=>'promoter')); ?>"><img src="/DataBase/THINKPHP/public/static/image/list.PNG"
                        height='50px'></a></td>
                        <td>
                            <p>Reporters</p>
                        </td>
                    </tr>
                    <tr style="height: 80px">
                        <td><img src="/DataBase/THINKPHP/public/static/image/component4.PNG" height='50px' width="62.5px"></td>
                        <td><a href="<?php echo url('index/catalog/CatalogType',array('type'=>'composite_parts')); ?>"><img src="/DataBase/THINKPHP/public/static/image/list.PNG" 
                        height='50px'></a></td>
                        <td>
                            <p>	Composite parts : Composite parts are combinations of of two or more BioBrick parts.</p>
                        </td>
                    </tr>
                    <tr style="height: 80px">
                        <td></td>
                        <td><a href="<?php echo url('index/catalog/CatalogType_pre',array('type'=>'promoter_prediction')); ?>"><img src="/DataBase/THINKPHP/public/static/image/list.PNG" 
                        height='50px'></a></td>
                        <td>
                            <p> promoter_prediction.</p>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

</div>







<footer>
    <div class="foot-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4" style="margin: 10px 20px">
                    <img src="/DataBase/THINKPHP/public/static/image/logo.png">
                </div>
                <div class="col-lg-7" style="margin: 10px 20px">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <img src="/DataBase/THINKPHP/public/static/image/logo.png">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <img src="/DataBase/THINKPHP/public/static/image/logo.png">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <img src="/DataBase/THINKPHP/public/static/image/logo.png">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <img src="/DataBase/THINKPHP/public/static/image/logo.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>



<script>
    $(function() {

    })

</script>
    
</body>

</html>