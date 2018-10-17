<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:92:"D:\Apache24\htdocs\DataBase\THINKPHP\public/../application/index\view\catalog\catalog_2.html";i:1539426682;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\base.html";i:1534298764;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\meta.html";i:1536997341;s:78:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\header.html";i:1539426028;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\foot.html";i:1536249134;}*/ ?>
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



<div class="container" style="position: relative;top: 50px">
    <div class="row">
        <div class="col-md-2  col-sm-3">
            <h2 style="color: #aa7700"><?php echo $type; ?></h2>
        </div>

        <div class="col-md-3 col-md-offset-2 col-sm-3" style="height: 50px;line-height: 50px;position: relative;top: 40px;">
            <form class="form-horizontal" role="form" method="post" action="<?php echo url('index/catalog/catalog_type'); ?>">
                <div class="form-group">
                   
                   <?php if($type=='promoter'): ?>
                       <select  name="type" style="z-index:10;height: 35px;overflow: scroll" value="<?php echo $type; ?>">

  <option value="promoter">Promoter</option>
  <option value="rbs">Rbs</option>
  <option value="protein_domains">Protein domains</option>
  <option value="protein_coding_sequences">Coding</option>
  <option value="terminators">Terminators</option>
  <option value="dna">DNA</option>
  <option value="reporters">Reporter</option>
  <option value="composite_parts">Composite parts</option>
  <option value="promoter_prediction">Promoter prediction</option>

</select>
                  <?php elseif($type=='Rbs'): ?>
                      <select  name="type" style="z-index:10;height: 35px;overflow: scroll" value="<?php echo $type; ?>">
  <option value="rbs">Rbs</option>
  <option value="promoter">Promoter</option>
  <option value="protein_domains">Protein domains</option>
  <option value="protein_coding_sequences">Coding</option>
  <option value="terminators">Terminators</option>
  <option value="dna">DNA</option>
  <option value="reporters">Reporter</option>
  <option value="composite_parts">Composite parts</option>
  <option value="promoter_prediction">Promoter prediction</option>

</select>
                  <?php elseif($type=='protein_domains'): ?>
                      <select  name="type" style="z-index:10;height: 35px;overflow: scroll" value="<?php echo $type; ?>">
  <option value="protein_domains">Protein domains</option>
  <option value="promoter">Promoter</option>
  <option value="rbs">Rbs</option>
  <option value="protein_coding_sequences">Coding</option>
  <option value="terminators">Terminators</option>
  <option value="dna">DNA</option>
  <option value="reporters">Reporter</option>
  <option value="composite_parts">Composite parts</option>
  <option value="promoter_prediction">Promoter prediction</option>

</select>
                  <?php elseif($type=='protein_coding_sequences'): ?>
                      <select  name="type" style="z-index:10;height: 35px;overflow: scroll" value="<?php echo $type; ?>">
  <option value="protein_coding_sequences">Coding</option>            
  <option value="promoter">Promoter</option>
  <option value="rbs">Rbs</option>
  <option value="protein_domains">Protein domains</option>
  <option value="terminators">Terminators</option>
  <option value="dna">DNA</option>
  <option value="reporters">Reporter</option>
  <option value="composite_parts">Composite parts</option>
  <option value="promoter_prediction">Promoter prediction</option>

</select>
                  <?php elseif($type=='terminators'): ?>
                      <select  name="type" style="z-index:10;height: 35px;overflow: scroll" value="<?php echo $type; ?>">
  <option value="terminators">Terminators</option>        
  <option value="promoter">Promoter</option>
  <option value="rbs">Rbs</option>
  <option value="protein_domains">Protein domains</option>
  <option value="protein_coding_sequences">Coding</option>    
  <option value="dna">DNA</option>
  <option value="reporters">Reporter</option>
  <option value="composite_parts">Composite parts</option>
  <option value="promoter_prediction">Promoter prediction</option>

</select>
                  <?php elseif($type=='dna'): ?>
                      <select  name="type" style="z-index:10;height: 35px;overflow: scroll" value="<?php echo $type; ?>">
  <option value="dna">DNA</option>
  <option value="promoter">Promoter</option>
  <option value="rbs">Rbs</option>
  <option value="protein_domains">Protein domains</option>
  <option value="protein_coding_sequences">Coding</option>  
  <option value="terminators">Terminators</option>          
  <option value="reporters">Reporter</option>
  <option value="composite_parts">Composite parts</option>
  <option value="promoter_prediction">Promoter prediction</option>

</select>
                  <?php elseif($type=='reporters'): ?>
                      <select  name="type" style="z-index:10;height: 35px;overflow: scroll" value="<?php echo $type; ?>">
  <option value="reporters">Reporter</option>
  <option value="promoter">Promoter</option>
  <option value="rbs">Rbs</option>
  <option value="protein_domains">Protein domains</option>
  <option value="protein_coding_sequences">Coding</option>  
  <option value="terminators">Terminators</option>      
  <option value="dna">DNA</option>    
  <option value="composite_parts">Composite parts</option>
  <option value="promoter_prediction">Promoter prediction</option>

</select>
                  <?php elseif($type=='composite_parts'): ?>
                      <select  name="type" style="z-index:10;height: 35px;overflow: scroll" value="<?php echo $type; ?>">
  <option value="composite_parts">Composite parts</option>
  <option value="promoter">Promoter</option>
  <option value="rbs">Rbs</option>
  <option value="protein_domains">Protein domains</option>
  <option value="protein_coding_sequences">Coding</option>  
  <option value="terminators">Terminators</option>      
  <option value="dna">DNA</option>    
   <option value="reporters">Reporter</option>
  <option value="promoter_prediction">Promoter prediction</option>

</select>
                  <?php elseif($type=='promoter_prediction'): ?>
                      <select  name="type" style="z-index:10;height: 35px;overflow: scroll" value="<?php echo $type; ?>">
  <option value="promoter_prediction">Promoter prediction</option>
  <option value="promoter">Promoter</option>
  <option value="rbs">Rbs</option>
  <option value="protein_domains">Protein domains</option>
  <option value="protein_coding_sequences">Coding</option>  
  <option value="terminators">Terminators</option>      
  <option value="dna">DNA</option>    
  <option value="reporters">Reporter</option>
  <option value="composite_parts">Composite parts</option>
  
</select>v
                   <?php endif; ?>
                    
               <button type="submit" class="btn btn-default">GO</button>
                </div>
            </form>

        </div>
        <div class="col-md-3  col-sm-3" style="height: 50px;line-height: 50px;position: relative;top: 40px;">
           <form method="post" action="<?php echo url('index/catalog/catalog_search'); ?>" style="position: relative;">
           
            <input name="name" class="col-md-8 col-sm-8" style="height: 35px;position: relative;top: 8px" required='requird' title='Please fill in this field' oninvalid="setCustomValidity('Keywords is required');" oninput="setCustomValidity('');">
            <input name="type" value="<?php echo $type; ?>" style="display: none">
            <button type="submit" class="btn btn-default col-md-3 col-sm-3" style="height: 35px;position: relative;top: 8px">Search</button>
            </form>
        </div>

        

        <div class="col-md-2 col-md-3 col-sm-3" style="height: 50px;line-height: 50px;position: relative;top: 40px;">
            <p><span style="color:burlywood"><?php echo $count; ?></span> items in all</p>
        </div>

        <div class="col-md-12  col-sm-12" style="position: relative;top: 30px;height: 30px">
            <hr style="height: 1px;background-color:antiquewhite;margin: 0">
        </div>

    </div>
    <?php if($type!='promoter_prediction'): ?>
    <div class="row">
        <div class="col-md-12 " style="position: relative;top: 20px">
            <table class="table table-striped table-bordered" style="border: solid 2px #ffee99;box-shadow: inset 0 0 10px #CCC;">
                <thead>
                    <th>iGEM_ID</th>
                    <th>Desciption</th>
                    <th>Nickname</th>
                    <th>Submit_team</th>
                    <th>Link</th>
                </thead>
                <tbody id="catalog_con">
                    <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $k = 0;$__LIST__ = is_array($res) ? array_slice($res,0,100, true) : $res->slice(0,100, true); if( count($__LIST__)==0 ) : echo "have no data" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                    <tr>
                        <td><a href="<?php echo url('index/display/displayer',array('id'=>$vo['iGEM_ID'])); ?>"><?php echo $vo['iGEM_ID']; ?></a></td>
                        <td><?php echo $vo['Description']; ?></td>
                        <td><?php echo $vo['Nickname']; ?></td>
                        <td><a style="color: #009fcc" href="http://<?php echo substr($vo['Submit_team'],0,4)?>.igem.org/Team:<?php echo substr($vo['Submit_team'],5)?>"><?php echo $vo['Submit_team']; ?></a></td>
                        <td><a target="_blank" href='<?php echo $vo['iGEM_Link']; ?>'>iGEM</a></td>
                    </tr>
                    <?php endforeach; endif; else: echo "have no data" ;endif; ?>
                </tbody>
            </table>

        </div>
    </div>
    <?php if($i!=1): ?>
    <div class="col-md-2 col-md-offset-10 col-sm-2 col-sm-offset-10" style="height: 50px;line-height: 50px;position: relative;top: 40px;"><a href="<?php echo url('index/catalog/CatalogAll',array('type'=>$type)); ?>"><button type="button" class="btn btn-success">Show All</button></a></div>
    <?php endif; else: ?>
    <div class="row">
        <div class="col-md-12 " style="position: relative;top: 20px">
            <table class="table table-striped table-bordered" style="border: solid 2px #ffee99;box-shadow: inset 0 0 10px #CCC;">
                <thead>
                    <th>Start</th>
                    <th>End</th>
                    <th>Strand</th>
                    <th>Gene</th>
                    <th>Sigma_Factor</th>
                    <th>Score</th>
                    <th>Sequence</th>
                </thead>
                <tbody id="catalog_con">
                    <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $k = 0;$__LIST__ = is_array($res) ? array_slice($res,0,100, true) : $res->slice(0,100, true); if( count($__LIST__)==0 ) : echo "have no data" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                    <tr>
                        <td><?php echo $vo['Start']; ?></td>
                        <td><?php echo $vo['End']; ?></td>
                        <td><?php echo $vo['Strand']; ?></td>
                        <td><?php echo $vo['Gene']; ?></td>
                        <td><?php echo $vo['Sigma_Factor']; ?></td>
                        <td><?php echo $vo['Score']; ?></td>
                        <td><?php echo $vo['Sequence']; ?></td>
                    </tr>
                    <?php endforeach; endif; else: echo "have no data" ;endif; ?>
                </tbody>
            </table>

        </div>
    </div>
    <?php if($i!=1): ?>
    <div class="col-md-2 col-md-offset-10 col-sm-2 col-sm-offset-10" style="height: 50px;line-height: 50px;position: relative;top: 40px;"><a href="<?php echo url('index/catalog/CatalogAll',array('type'=>$type)); ?>"><button type="button" class="btn btn-success">Show All</button></a></div>
    <?php endif; endif; ?>

</div>







<footer>
    <div class="foot-bg">
        
    </div>
</footer>



<script>


</script>
    
</body>

</html>