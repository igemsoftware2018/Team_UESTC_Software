<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"D:\Apache24\htdocs\数据库\THINKPHP\public/../application/index\view\display\mytable.html";i:1534257561;}*/ ?>
<div class="container" style="position: relative;top: 150px" id="myTable">
    <div class="row">
        <div class="col-md-2 col-md-offset-1 ">
            <a href="index_1.html">
                <div class="return">Edit and resubmit</div>
            </a>
        </div>
        <div class="col-md-9" style="height: 30px">
            <div class="line" style="position: relative;top: 8px;left: -30px">
                <hr style="height: 1px;background-color:#77ddff ">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-md-offset-1">
            <h2 style="color: #aa7700">Job Information</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-11 col-md-offset-1" style="height: 300px;position: relative;top: 20px">
            <table class="table table-bordered" style="border: solid 2px #ffee99;box-shadow: inset 0 0 10px #CCC;" id="myTable">
                <thead>
                    <tr>
                        <th class="col-1">TEAM</th>
                        <th class="col-2">Title</th>
                        <th class="col-3">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(is_array($teamList) || $teamList instanceof \think\Collection || $teamList instanceof \think\Paginator): $k = 0;$__LIST__ = is_array($teamList) ? array_slice($teamList,0,5, true) : $teamList->slice(0,5, true); if( count($__LIST__)==0 ) : echo "没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                    <tr>
                        <td><?php echo $vo['Submit_team']; ?></td>
                        <td><?php echo $vo['Description']; ?></td>
                        <td><?php echo $vo['Title']; ?></td>
                    </tr>
                    <?php endforeach; endif; else: echo "没有数据" ;endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10"><?php echo $page; ?></div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.11.0.min.js" ;></script>
<script type="text/javascript">
    $(".pagination a").click(function() {
        var url = $(this).attr('href');
        $.ajax({
            'type': 'get',
            'url': url,
            succes: function(data) {
                $('#test').html(data);
            }
        })
        return false;
    });

</script>
