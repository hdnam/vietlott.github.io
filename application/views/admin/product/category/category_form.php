
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
                    <a href="javascript:void(0);" onclick="location.href='<?=$this->index_url;?>admin/category';" class="button">Cancel</a>
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
                                    <td width="922">
                                    	<?php if(@$article->ngayquay !='') :?>
                                        <input name="ngayquay" type="text" id="ngayquay" value="<?php echo @$article->ngayquay;?>" size="100" />
                                        <?php else : ?>
                                        <input name="ngayquay" type="text" id="ngayquay" value="<?php echo set_value('ngayquay');?>" size="100" />
                                        <?php endif;?>
                                    	<?=form_error('ngayquay');?>
                                	</td>
                                </tr>
                                
                                
                                <tr>
                                  <td width="169" align="left"><label>Số trúng giải:</label><br /><span class="help">Là kết quả sổ xố, 6 cặp số cách nhau bằng dấu gạch ngang -.</span></td>
                                    <td width="922">
                                    	<?php if(@$article->chuoitrunggiai !='') :?>
                                        <input name="chuoitrunggiai" type="text" id="chuoitrunggiai" value="<?php echo @$article->chuoitrunggiai;?>" size="100" />
                                        <?php else : ?>
                                        <input name="chuoitrunggiai" type="text" id="chuoitrunggiai" value="<?php echo set_value('chuoitrunggiai');?>" size="100" />
                                        <?php endif;?>
                                    	<?=form_error('chuoitrunggiai');?>
                                	</td>
                                </tr>
                                
                                <tr>
                                  <td width="169" align="left"><label>Giá trị Jackport:</label><br /><span class="help"><br />Số tiền giải Jackport</span></td>
                                    <td width="922">
                                    	<?php if(@$article->giatrijackport !='') :?>
                                        <input name="giatrijackport" type="text" id="giatrijackport" value="<?php echo @$article->giatrijackport;?>" size="100" />
                                        <?php else : ?>
                                        <input name="giatrijackport" type="text" id="giatrijackport" value="<?php echo set_value('giatrijackport');?>" size="100" />
                                        <?php endif;?>
                                    	<?=form_error('giatrijackport');?>
                                	</td>
                                </tr>
                                
                                <tr>
                                  <td width="169" align="left"><label>Số Jackport:</label><br /><span class="help">Số người trúng giải Jackport</span></td>
                                    <td width="922">
                                    	<?php if(@$article->sojackport !='') :?>
                                        <input name="sojackport" type="text" id="sojackport" value="<?php echo @$article->sojackport;?>" size="100" />
                                        <?php else : ?>
                                        <input name="sojackport" type="text" id="sojackport" value="<?php echo set_value('sojackport');?>" size="100" />
                                        <?php endif;?>
                                    	<?=form_error('sojackport');?>
                                	</td>
                                </tr>
                                
                                <tr>
                                  <td width="169" align="left"><label>Số giải nhất:</label><br /><span class="help">Số người trúng giải nhất</span></td>
                                    <td width="922">
                                    	<?php if(@$article->sogiainhat !='') :?>
                                        <input name="sogiainhat" type="text" id="sogiainhat" value="<?php echo @$article->sogiainhat;?>" size="100" />
                                        <?php else : ?>
                                        <input name="sogiainhat" type="text" id="sogiainhat" value="<?php echo set_value('sogiainhat');?>" size="100" />
                                        <?php endif;?>
                                    	<?=form_error('sogiainhat');?>
                                	</td>
                                </tr>
                                
                               
                                
                                <tr>
                                  <td width="169" align="left"><label>Số giải nhì:</label><span class="help">Số người trúng giải nhì</span></td>
                                    <td width="922">
                                    	<?php if(@$article->sogiainhi !='') :?>
                                        <input name="sogiainhi" type="text" id="sogiainhi" value="<?php echo @$article->sogiainhi;?>" size="100" />
                                        <?php else : ?>
                                        <input name="sogiainhi" type="text" id="sogiainhi" value="<?php echo set_value('sogiainhi');?>" size="100" />
                                        <?php endif;?>
                                    	<?=form_error('sogiainhi');?>
                                	</td>
                                </tr>
                                
                               
                                
                                <tr>
                                  <td width="169" align="left"><label>Số giải ba:</label><span class="help">Số người trúng giải ba</span></td>
                                    <td width="922">
                                    	<?php if(@$article->sogiaiba !='') :?>
                                        <input name="sogiaiba" type="text" id="sogiaiba" value="<?php echo @$article->sogiaiba;?>" size="100" />
                                        <?php else : ?>
                                        <input name="sogiaiba" type="text" id="sogiaiba" value="<?php echo set_value('sogiaiba');?>" size="100" />
                                        <?php endif;?>
                                    	<?=form_error('sogiaiba');?>
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
                            <td width="922">
                            	<?php if(@$article->thoigianquay !='') :?>
                                <input name="thoigianquay" type="text" id="thoigianquay" value="<?php echo @$article->thoigianquay;?>" size="100" />
                                <?php else : ?>
                                <input name="thoigianquay" type="text" id="thoigianquay" value="18:00:00" size="100" />
                                <?php endif;?>
                            	<?=form_error('thoigianquay');?>
                        	</td>
                        </tr>
                         <tr>
                          <td width="169" align="left"><label>Giá trị giải nhất:</label><span class="help">Số tiền khi trúng giải nhất mặc định là 10.000.000</span></td>
                            <td width="922">
                            	<?php if(@$article->giatrigiainhat !='') :?>
                                <input name="giatrigiainhat" type="text" id="giatrigiainhat" value="<?php echo @$article->giatrigiainhat;?>" size="100" />
                                <?php else : ?>
                                <input name="giatrigiainhat" type="text" id="giatrigiainhat" value="10000000" size="100" />
                                <?php endif;?>
                            	<?=form_error('giatrigiainhat');?>
                        	</td>
                        </tr>
                         <tr>
                          <td width="169" align="left"><label>Giá trị giải nhì:</label><span class="help">Số tiền khi trúng giải nhì mặc định là 300.000</span></td>
                            <td width="922">
                            	<?php if(@$article->giatrigiainhi !='') :?>
                                <input name="giatrigiainhi" type="text" id="giatrigiainhi" value="<?php echo @$article->giatrigiainhi;?>" size="100" />
                                <?php else : ?>
                                <input name="giatrigiainhi" type="text" id="giatrigiainhi" value="300000" size="100" />
                                <?php endif;?>
                            	<?=form_error('giatrigiainhi');?>
                        	</td>
                        </tr>
                        
                         <tr>
                          <td width="169" align="left"><label>Giá trị giải ba:</label><span class="help">Số tiền khi trúng giải ba mặc định là 30.000</span></td>
                            <td width="922">
                            	<?php if(@$article->giatrigiaiba !='') :?>
                                <input name="giatrigiaiba" type="text" id="giatrigiaiba" value="<?php echo @$article->giatrigiaiba;?>" size="100" />
                                <?php else : ?>
                                <input name="giatrigiaiba" type="text" id="giatrigiaiba" value="30000" size="100" />
                                <?php endif;?>
                            	<?=form_error('giatrigiaiba');?>
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