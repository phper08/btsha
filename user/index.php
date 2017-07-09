<?php
require_once '_main.php';
$ssmin = new \Ss\Etc\Ana();

//获得流量信息
if($oo->get_transfer()<1000000)
{
    $transfers=0;}else{ $transfers = $oo->get_transfer();

}
//计算流量并保留2位小数
$all_transfer = $oo->get_transfer_enable()/$togb;
$unused_transfer =  $oo->unused_transfer()/$togb;
$used_100 = $oo->get_transfer()/$oo->get_transfer_enable();
$used_100 = round($used_100,2);
$used_100 = $used_100*100;
//计算流量并保留2位小数
$transfers = $transfers/$tomb;
$transfers = round($transfers,2);
$all_transfer = round($all_transfer,2);
$unused_transfer = round($unused_transfer,2);
//最后在线时间
$unix_time = $oo->get_last_unix_time();
?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                用户中心
                <small>User Center</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- START PROGRESS BARS -->
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">公告</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p>流量不会重置，可以通过签到增加流量。</p> 
                            <p>个人精力有限，写了个新手教程，方便完全不会用ss翻墙的，其他问题可以发邮件hust09liangpeng@qq.com,QQ联系方式已经注释(o(╯□╰)o)</p>
			    <a href="http://www.cnblogs.com/pigercc/p/6773697.html" target="_blank" class="label label-info" style="font-weight: bold;font-size:17px">新手翻墙教程</a> 
                       	    <!--<p>QQ 954977564</p>-->
			 </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (right) -->

                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">流量使用情况</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p> 已用流量：<?php echo $transfers."MB";?> </p>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $used_100; ?>%">
                                    <span class="sr-only">Transfer</span>
                                </div>
                            </div>
                            <p> 可用流量：<?php echo $all_transfer ."GB";?> </p>
                            <p> 剩余流量：<?php echo  $unused_transfer."GB";?> </p>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (left) -->



                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">签到获取流量</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p> 24小时内可以签到一次。</p>
                            <?php  if($oo->is_able_to_check_in())  { ?>
                                <p id="checkin-btn"> <button id="checkin" class="btn btn-success  btn-flat">签到</button></p>
                            <?php  }else{ ?>
                                <p><a class="btn btn-success btn-flat disabled" href="#">不能签到</a> </p>
                            <?php  } ?>
                            <p id="checkin-msg" ></p>
                            <p>上次签到时间：<code><?php echo date('Y-m-d H:i:s',$oo->get_last_check_in_time());?></code></p>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (right) -->

                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">连接信息</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p> 端口：<code><?php echo $oo->get_port();?></code> </p>
                            <p> 密码：<?php echo $oo->get_pass();?> </p>
                            <p> 套餐：<span class="label label-info"> <?php echo $oo->get_plan();?> </span> </p>
                            <p> 最后使用时间：<code><?php echo date('Y-m-d H:i:s',$unix_time);  ?></code> </p>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                 </div><!-- /.col (right) -->
               <div class="col-md-6">
                    <div class="box-header">
                            <h3 class="box-title"> 统计信息</h3>
                     </div><!-- /.box-header -->
                      <div class="box-body">
                            <p>当前时间：<?php  echo  date("Y-m-d H:i",time()); ?></p>
                            <p>当前版本：<code><?php echo $version; ?></code></p>
                            <p>注册用户：<code><?php echo $ssmin->allUserCount();?> </code></p>
                            <p>已经有<code><?php echo $ssmin->activedUserCount();?></code>个用户使用了<?php echo $site_name; ?>服务。</p>
                            <p>签到用户：<code><?php echo   $ssmin->checkinUser(time()); ?></code></p>
                            <p>24小时签到用户：<code><?php echo   $ssmin->CheckInUser(3600*24); ?></code></p>
                            <p>过去24小时在线人数：<code><?php echo $ssmin->onlineUserCount(3600*24);?></code>。</p>
                       </div><!-- /.box -->
               </div> 
               <div class="col-md-6">
                   <div class="box-head">
                         <h3 class="box-title">打赏支持</h3>
                    </div>
                    <div class="box-body">
                       <p>本站服务免费使用，如果您对本站服务满意，可以打赏下以表支持(*^__^*) 嘻嘻……，打赏请备注用户来源和用户名</p>
                       <div align="center">
			 <img style="border-width:0px;height:290px;width:221px;" src="http://btsha.com/images/zfb.png" />  
                    	</div>
 			</div>   
               </div> 
            </div><!-- /.row -->
            <!-- END PROGRESS BARS -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>

<script>
    $(document).ready(function(){
        $("#checkin").click(function(){
            $.ajax({
                type:"GET",
                url:"_checkin.php",
                dataType:"json",
                success:function(data){
                    $("#checkin-msg").html(data.msg);
                    $("#checkin-btn").hide();
                },
                error:function(jqXHR){
                    alert("发生错误："+jqXHR.status);
                }
            })
        })
    })
</script>

