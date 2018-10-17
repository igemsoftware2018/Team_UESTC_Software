<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:87:"D:\Apache24\htdocs\DataBase\THINKPHP\public/../application/index\view\search\by_id.html";i:1539400445;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\base.html";i:1534298764;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\meta.html";i:1536997341;s:78:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\header.html";i:1539426028;s:76:"D:\Apache24\htdocs\DataBase\THINKPHP\application\index\view\public\foot.html";i:1536249134;}*/ ?>
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


<div class="sc">
    <div id="body" class="container">
    <div class="row">
        <div id="body-l" class="col-md-3 col-md-offset-1">
            <ul>
                <a href="by_id">
                    <li><span style="font-size: 18px" class="label label-primary">ID</span>
                    <img src="/DataBase/THINKPHP/public/static/image/pic4.png">    <hr>
                    </li>
                </a>
                <a href="by_key">
                    <li>Team wiki<img src="/DataBase/THINKPHP/public/static/image/pic2.png"> 
                        <hr>
                    </li>
                </a>
                <a href="by_function">
                    <li>Keywodrs<img src="/DataBase/THINKPHP/public/static/image/pic1.png"> 
                        <hr>
                    </li>
                </a>

                <a href="by_seq">
                    <li>Blast<img src="/DataBase/THINKPHP/public/static/image/pic3.png"> 
                        <hr>
                    </li>
                </a>
            </ul>
            <div>|</div>
        </div>
        <div id="body-r" class='col-md-5 col-md-offset-1 col-sm-8 col-sm-offset-2'>
            <div id="body-r-con">
                <p style='color: black'>Search</p>

                <form method="post" action="<?php echo url('index/search/submitOne'); ?>">
                    <div id="bd">
                        <p>Bricks Name:</p>
                        <input id="x1" name="id" type="text" class="col-md-8 col-sm-8" style="height: 35px" required title='Please fill in this field' oninvalid="setCustomValidity('ID or name is requird');" oninput="setCustomValidity('');">
                    </div>
                    <div id="bd_1">
                        <p>Type of ID:</p>
                        <select id="x2" name="kind" class="col-md-8 col-sm-8" style="z-index:1;height: 35px;overflow: scroll">



  <option value="iGEM_ID">iGEM_ID</option>
  <option value="Epd_ID">Epd_ID</option>
  <option value="Regulondb_ID">Regulondb_ID</option>
  <option value="Uniprot_ID">Uniprot_ID</option>
  <option value="Gene_Name">Gene_Name</option>
  

</select>
                    </div>
                    <div id="bd_2">

                        <input type="submit" id="submit" class="col-md-6 col-sm-6 " style="height: 35px" value="Submit">
                    </div>
                </form>
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
        $('#submit1').on('click', function() {
            $.ajax({
                type: "POST",
                url: "<?php echo url('submitOne'); ?>",
                data: $("form").serialize(),
                dataType: 'json',
                success: function(data) {
                    //                    $("button").attr("disabled",true);
                    alert(JSON.stringify(data));
                }

            });
        })



    })

</script>
    
</body>

</html>