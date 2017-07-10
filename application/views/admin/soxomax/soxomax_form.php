
  <script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery.timepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/jquery.timepicker.css" />
  <script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>asset/css/jquery-ui.min.css" >

  <div id="content">
    	<div class="breadcrumb">
        	<?php if($render_path) : ?>
            <?php foreach($render_path as $key => $val) :?>
            <a href="<?=$val;?>"><?=$key;?></a> ::
            <?php endforeach;?>
            <?php endif;?>
        </div><!--End breadcrumb-->
        <div class="warning" style="display:none;"><?php if($this->session->flashdata('warning')) echo $this->session->flashdata('warning');?></div>
        <div class="box">
        	<div class="heading">
            	<h1><img src="<?=base_url();?>admin_template/image/category.png" /><?=$heading_title;?></h1>
                <div class="buttons">
                	<a href="javascript:void(0);" onclick="$('#frm_add').submit();" class="button">Save</a>
                    <a href="javascript:void(0);" onclick="location.href='<?=$this->index_url;?>admin/soxomax';" class="button">Cancel</a>
                </div>
            </div><!--End heading-->
            <div class="content">
            	<div id="tabs" class="htabs">
                	<a href="#tab_1" class="selected">Thông tin kết quả</a>
                    <a href="#tab_2">Thông tin cấu hình</a>
                     
                </div><!--End tabs-->
                
                <form action="<?=$action;?>" method="post" enctype="multipart/form-data" id="frm_add">
               	  <div id="tab_1" style="display:block;">
                   	  <table width="100%" class="form">
						<tbody>
                           	  
                                
                                <tr>
                                  <td width="169" align="left"><label>Ngày quay:</label><br /><span class="help">Là ngày tổ chức quay sổ xố</span></td>
                                    <td width="200">
                                    	<?php if(@$article->ngayquay !='') :?>
                                        <input name="ngayquay" type="text" id="ngayquay" value="<?php echo @$article->ngayquay;?>" size="100" />
                                        <?php else : ?>
                                        <input name="ngayquay" type="text" id="ngayquay" value="<?php echo set_value('ngayquay');?>" size="100" />
                                        <?php endif;?>
                                    	<?=form_error('ngayquay');?>
                                	</td>
                                </tr>
                                
                                <tr>
                                  <td width="169" align="left"><label>Giải nhất</label><span class="help">Kết quả sổ xố giải nhất</span></td>
                                    <td width="200">
                                    	<?php if(@$article->giainhat !='') :?>
                                        <input name="giainhat" type="text" id="giainhat" value="<?php echo @$article->giainhat;?>" size="100" />
                                        <?php else : ?>
                                        <input name="giainhat" type="text" id="giainhat" value="<?php echo set_value('giainhat');?>" size="100" placeholder="Số trúng giải nhất" />
                                        <?php endif;?>
                                    	<?=form_error('giainhat');?>
                                	</td>
                                </tr>
                                <tr>
                                  <td width="169" align="left"><label>Giải nhì:</label><br /><span class="help">Kết quả sổ xố giải nhì.</span></td>
                                    <td width="200">
                                    	<?php if(@$article->giainhi1 !='') :?>
                                        <input name="giainhi1" type="text" id="giainhi1" value="<?php echo @$article->giainhi1;?>" size="30" />
                                        <?php else : ?>
                                        <input name="giainhi1" type="text" id="giainhi1" value="<?php echo set_value('giainhi1');?>" size="30" placeholder="Số trúng giải nhì thứ nhất" />
                                        <?php endif;?>
                                    	<?=form_error('giainhi1');?>
                                       </td>
                                       <td width="200"> 
                                        <?php if(@$article->giainhi2 !='') :?>
                                        <input name="giainhi2" type="text" id="giainhi2" value="<?php echo @$article->giainhi2;?>" size="30" />
                                        <?php else : ?>
                                        <input name="giainhi2" type="text" id="giainhi2" value="<?php echo set_value('giainhi2');?>" size="30" placeholder="Số trúng giải nhì thứ hai" />
                                        <?php endif;?>
                                    	<?=form_error('giainhi2');?>
                                	</td>
                                </tr>
                                
                                <tr>
                                  <td width="169" align="left"><label>Giải ba:</label><br /><span class="help"><br />Kết quả sổ xố giải ba.</span></td>
                                    <td width="200">
                                    	<?php if(@$article->giaiba1 !='') :?>
                                        <input name="giaiba1" type="text" id="giaiba1" value="<?php echo @$article->giaiba1;?>" size="30" />
                                        <?php else : ?>
                                        <input name="giaiba1" type="text" id="giaiba1" value="<?php echo set_value('giaiba1');?>" size="30" placeholder="Số trúng giải ba thứ nhất" />
                                        <?php endif;?>
                                    	<?=form_error('giaiba1');?>
                                        </td>
                                        <td>
                                        <?php if(@$article->giaiba2 !='') :?>
                                        <input name="giaiba2" type="text" id="giaiba2" value="<?php echo @$article->giaiba2;?>" size="30" />
                                        <?php else : ?>
                                        <input name="giaiba2" type="text" id="giaiba2" value="<?php echo set_value('giaiba2');?>" size="30" placeholder="Số trúng giải ba thứ hai" />
                                        <?php endif;?>
                                    	<?=form_error('giaiba2');?>
                                        </td>
                                        <td>
                                        <?php if(@$article->giaiba3 !='') :?>
                                        <input name="giaiba3" type="text" id="giaiba3" value="<?php echo @$article->giaiba3;?>" size="30" />
                                        <?php else : ?>
                                        <input name="giaiba3" type="text" id="giaiba3" value="<?php echo set_value('giaiba3');?>" size="30"  placeholder="Số trúng giải ba thứ ba" />
                                        <?php endif;?>
                                    	<?=form_error('giaiba3');?>
                                	</td>
                                </tr>
                                
                                <tr>
                                  <td align="left"><label>Trạng thái:</label><br /><span class="help">Nếu kết quả sổ xố đã có thì click vào nếu không có thì không click hệ thống sẽ hiển thì các con số ramdom</span></td>
                                    <td>
                                    <input type="checkbox" name="trangthai" <?php if(@$article->trangthai == 1) echo "checked=checked"; else "";?>/>
                                    <?=form_error('trangthai');?>
                                </td>
                                </tr>
                                  <tr>
                                  <td align="left"><label>Quay realtime:</label><br /><span class="help">Hành đồng này rất tốn băng thông</span></td>
                                    <td>
                                    <input type="checkbox" name="realtime" <?php if(@$article->realtime == 1) echo "checked=checked"; else "";?>/>
                                    <?=form_error('realtime');?>
                                </td>
                                </tr>
            		     </tbody>
                        </table>
                  </div>
                   <div id="tab_2" style="display:none;"> 
                    <table width="100%" class="form">
						<tbody>
                        
                        <tr>
                          <td width="169" align="left"><label>Thời gian quay:</label><span class="help">Là thời gian có kết quả, hệ thống sẽ dừng ramdom số và ngừng đếm coutdown mặc đinh là 18:00:00</span></td>
                            <td width="200">
                            	<?php if(@$article->thoigianquay !='') :?>
                                <input name="thoigianquay" type="text" id="thoigianquay" value="<?php echo @$article->thoigianquay;?>" size="100" />
                                <?php else : ?>
                                <input name="thoigianquay" type="text" id="thoigianquay" value="18:00:00" size="100" />
                                <?php endif;?>
                            	<?=form_error('thoigianquay');?>
                        	</td>
                        </tr>
                         <tr>
                          <td width="169" align="left"><label>Giá trị giải nhất:</label><span class="help">Số tiền khi trúng giải nhất mặc định là 15.000.000</span></td>
                            <td width="200">
                            	<?php if(@$article->giatrigiainhat !='') :?>
                                <input name="giatrigiainhat" type="text" id="giatrigiainhat" value="<?php echo @$article->giatrigiainhat;?>" size="100" />
                                <?php else : ?>
                                <input name="giatrigiainhat" type="text" id="giatrigiainhat" value="15000000" size="100" />
                                <?php endif;?>
                            	<?=form_error('giatrigiainhat');?>
                        	</td>
                        </tr>
                         <tr>
                          <td width="169" align="left"><label>Giá trị giải nhì:</label><span class="help">Số tiền khi trúng giải nhì mặc định là 6.500.000</span></td>
                            <td width="200">
                            	<?php if(@$article->giatrigiainhi !='') :?>
                                <input name="giatrigiainhi" type="text" id="giatrigiainhi" value="<?php echo @$article->giatrigiainhi;?>" size="100" />
                                <?php else : ?>
                                <input name="giatrigiainhi" type="text" id="giatrigiainhi" value="6500000" size="100" />
                                <?php endif;?>
                            	<?=form_error('giatrigiainhi');?>
                        	</td>
                        </tr>
                        
                         <tr>
                          <td width="169" align="left"><label>Giá trị giải ba:</label><span class="help">Số tiền khi trúng giải ba mặc định là 3.000.000</span></td>
                            <td width="200">
                            	<?php if(@$article->giatrigiaiba !='') :?>
                                <input name="giatrigiaiba" type="text" id="giatrigiaiba" value="<?php echo @$article->giatrigiaiba;?>" size="100" />
                                <?php else : ?>
                                <input name="giatrigiaiba" type="text" id="giatrigiaiba" value="3000000" size="100" />
                                <?php endif;?>
                            	<?=form_error('giatrigiaiba');?>
                        	</td>
                        </tr>
                           <tr>
                          <td width="169" align="left"><label>Giá trị giải khuyến khích một:</label><span class="help">Số tiền khi trúng giải ba mặc định là 1.000.000</span></td>
                            <td width="200">
                            	<?php if(@$article->giatrigiaikk1 !='') :?>
                                <input name="giatrigiaikk1" type="text" id="giatrigiaikk1" value="<?php echo @$article->giatrigiaikk1;?>" size="100" />
                                <?php else : ?>
                                <input name="giatrigiaikk1" type="text" id="giatrigiaikk1" value="1000000" size="100" />
                                <?php endif;?>
                            	<?=form_error('giatrigiaikk1');?>
                        	</td>
                        </tr>
                           <tr>
                          <td width="169" align="left"><label>Giá trị khuyến khích hai:</label><span class="help">Số tiền khi trúng giải ba mặc định là 100.000</span></td>
                            <td width="200">
                            	<?php if(@$article->giatrigiaikk2 !='') :?>
                                <input name="giatrigiaikk2" type="text" id="giatrigiaikk2" value="<?php echo @$article->giatrigiaikk2;?>" size="100" />
                                <?php else : ?>
                                <input name="giatrigiaikk2" type="text" id="giatrigiaikk2" value="100000" size="100" />
                                <?php endif;?>
                            	<?=form_error('giatrigiaikk2');?>
                        	</td>
                        </tr>
                         </tbody>
                        </table>
                        
                    </div>
                   
                    <input type="hidden" id="id" name="id" value="<?=@$article->id;?>">
                </form>
                
            </div><!--End content-->
        </div><!--End box-->
        
    </div><!--End content-->
      <script type="text/javascript">
        
  </script>
  <script>
  $( function() {
     $('#thoigianquay').timepicker({ 'timeFormat': 'H:i:s' });
    $( "#ngayquay" ).datepicker({
      dateFormat: 'yy-mm-dd'
});
  } );
  </script>