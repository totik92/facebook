<?php  
$res = @mysqli_query($connection, "SELECT * FROM `botcamxuc` WHERE `idfb`= '".$_SESSION[idfb]."'");
$getcmt = @mysql_fetch_array($res);
if(@mysql_num_rows($res) > 0){
$key = 1;
}else{
$key = 0;
}
?>
<div class="col-md-12">
	<div class="box box-success">
		<div class="box-title box-header with-border">
			<h4><i class="fa fa-thumbs-up" aria-hidden="true"></i> Bot Reactions - Robot Tự Động Cảm Xúc</h4>
			
		</div>
		<div class="box-body">
			<div class="alert alert-info" style="font-size: 15px; background-color: rgba(157, 248, 89, 0.62); border-color: rgba(157, 248, 89, 0.62);">
                              		<?php echo ($key == 1) ? 'Chào Bạn<strong> '.$_SESSION[ten].'</strong>. Hiện Tại Bạn <strong style="color: red; font-size: 15px;"> Đã </strong> Cài Đặt Bot Trên Hệ Thống' : 'Chào Bạn <strong>'.$_SESSION[ten].'</strong>. Hiện Tại Bạn <strong style="color: red; font-size: 15px;"> Chưa </strong> Cài Đặt Bot Trên Hệ Thống'; ?>
                           	</div>
			<div class="alert alert-warning" style="background-color: rgba(245, 215, 66, 0.32); border-color: rgba(245, 215, 66, 0.32);">
				<span style="color: black; font-size: 15px;"><i class="fa fa-reddit-square"></i> Bot Cảm Xúc Status, Ảnh : <font color ="blue"><?php echo ($key == 1) ? "Hoạt Động" : "Không Sử Dụng";?> </font></span><br />
                    			<span style="color: black; font-size: 15px;"><i class="fa fa-reddit-square"></i> Bot Cảm Xúc Comment : <font color ="blue"><?php echo $getcmt[likecmt] == 1 ? "Hoạt Động " : "Không Sử Dụng"; ?></font></span><br />
                    			<span style="color: black; font-size: 15px;"><i class="fa fa-reddit-square"></i> Loại Cảm Xúc Sử Dụng : <font color ="blue"><?php echo $getcmt[camxuc] ? $getcmt[camxuc] : "Chưa Cài Đặt"; ?></font></span>
			</div>
			<div class="alert alert-info" id="star" style="display: none;">
				<div id="message"></div>
			</div>
			<hr> <center><h2><p class="text-danger"><strong>Thiết Lập BOT</strong></p></h2></center><hr>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-key"></i></span>
					<select id="yeucau" name="yeucau" style="color: black; font-size: 15px;" class="form-control">
					<?php if($key != 1){ ?>
						<option value="OK">ON - Bật Bot</option>
					<?php }else{ ?>
						<option value="UP">UP - Cập Nhật Bot</option>
						<option value="HUY">OFF - Tắt Bot</option>
					<?php } ?>
					</select>
				<span class="input-group-addon"><i class="fa fa-key"></i></span>
			</div><br />
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-key"></i></span>
					<select id="likecmt" name="likecmt" style="color: black; font-size: 15px;" class="form-control">
						<option value="1">ON - Bật Like Comment</option>	
						<option value="0">OFF - Tắt Like Comment</option>								
					</select>
				<span class="input-group-addon"><i class="fa fa-key"></i></span>
			</div><br />
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-paste"></i>
				</span>
                                      <select id="camxuc" class="form-control">	
                                              <option value="LOVE">LOVE</option> 
                                              <option value="WOW">WOW</option> 									
                                              <option value="HAHA">HAHA</option>
                                              <option value="SAD">SAD</option>
                                              <option value="ANGRY">ANGRY</option>
                                       </select> 
				<span class="input-group-addon"><i class="fa fa-paste"></i>
				</span>                               
			</div><br />
			<? $_SESSION['_SERVER'] = cap(30); ?>
			<input type="hidden" name="_SERVER" id="_SERVER" value="<? echo $_SESSION['_SERVER']; ?>">
			<input type="hidden" class="form-control" id="id" name="idfb" value="<?php echo $_SESSION[idfb]; ?>">
			<input type="hidden" class="form-control" id="token" name="token" value="<?php echo $_SESSION[matoken]; ?>" />
			<div class="form-group">
				<button class="btn btn-success btn-block" id="botcamxuc" onclick="post_BotCamXuc();">
					<i class="fa fa-exchange"></i> Thực Thi
				</button>
			</div>
		</div>
		<div class="box-footer">
		</div>
	</div>
</div>