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
            	<h1><img src="<?=base_url();?>admin_template/image/category.png" /><?=@$heading_title;?></h1>
                <div class="buttons">
                	<a href="javascript:void(0);" onclick="location.href='<?=$url_create;?>';" class="button">Insert</a>
                    <a href="javascript:void(0);" onclick="$('#form_list').submit();" class="button">Delete</a>
                </div>
            </div><!--End heading-->
            <div class="content">
            	<form id="form_list" method="post" action="<?=$this->index_url;?>admin/soxomax">
                <input type="hidden" id="act" name="act" value="act_del" />
                	<table class="list">
                    	<thead>
                        	<tr>
                            	<td width="1" style="text-align:center;"><input type="checkbox" onclick="$('input[name*=\'selected\']').attr('checked', this.checked);" /></td>
                                <td class="left"><a href="#">Ngày</a></td>
                                <td class="right"><a href="#">Giải nhất</a></td>
                                <td class="right"><a href="#">Giải nhì</a></td>
                                <td class="right"><a href="#">Giải ba</a></td>
                                <td class="right"><a href="#">Giải khuyến khích</a></td>
                                <td class="right"><a href="#">Trạng thái</a></td>
                                <td class="right"><a href="#">Quay realtime</a></td>
                                <td class="right">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php if(!empty($lists)) : ?>
							<?php foreach($lists as $user) : ?>
                            <tr>
                                <td style="text-align:center"><input type="checkbox" name="selected[]" /></td>
                                <td class="left"><?php //echo $user['thuquay'];
                                 echo $this->util->namedayendtovi($user['thuquay'])." ngày ".$this->util->ConvertDateTimeToView($user['ngayquay']); ?></td>
                                <td class="right"><?=@$user['giainhat'];?></td>
                                <td class="right"><?=@$user['giainhi1']."-".$user['giainhi2'];?></td>
                                <td class="right"><?=@$user['giaiba1']."-".$user['giaiba2']."-".$user['giaiba3'];?></td>
                                <td class="right"><?php  echo "x".substr($user['giainhat'],1,3)." - xx" .substr($user['giainhat'],2,2); ?></td>
                                <td class="right"><?php if($user['trangthai']==1) echo "Đã kết thúc"; else echo "Đang chờ"; ?></td>
                                <td class="right"><?php if($user['realtime']==1) echo "<b style='color: red;' >Quay realtime</b>"; else echo "Không"; ?></td>
                                <td class="right">
                                    <a href="<?=$user['url_edit'];?>">Edit</a> :: <a href="<?=$user['url_del'];?>" title="Xóa User này" id="action_del_<?=$user['id'];?>" onclick="do_del(<?=$user['id'];?>); return false;">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                            <?php endif;?>
                        </tbody>
                    </table>
                </form><!--End form-->
                
                <div class="pagination">
                	<div class="link">
                    	 <?php if(!empty($page)) :?>
                        <?php echo $page;?>
                        <?php endif;?>
                    </div>
                    <div class="result">Có <b><?=$total_record;?></b> bản tin được tìm thấy</div>
                </div><!--End pagination-->
                
            </div><!--End content-->
        </div><!--End box-->
        
    </div><!--End content-->

<script type="text/javascript">
	// Action delete record
	function do_del(id) {
		
			var ok = confirm('Bạn có chắc muốn xóa bản tin này hay không?');
			var url = $('#action_del_' + id).attr('href');
			if(ok) {
				window.location.href = url;
			}
		//});
	};
	
	// Function change group
	function doi_nhom(id) {
		var _group_id = $('#change_group_' + id).val();
		var _user_id = $('#user_id_' + id).val();
		var url = index_url + 'admin/user/change_group';
		//alert(_user_id);
		
		if(_group_id !='') {
			$.ajax({
				type: "POST",
				dataType: "json",
				url: url,
				data: "group_id=" + _group_id + "&user_id=" + _user_id,
				success: function(data) {
					if(data == 'ok') {
						alert('Cập nhật nhóm thành công');
						location.reload(true);
					} else {
						alert('Không thể cập nhật nhóm');
					}
				}
			}); 
		} 
	}
	
	// Function search
	function do_search() {
		var _status = $('#status').val();
		var _group = $('#group').val();
		var url = index_url + 'admin/user/index/';
		if(_status !='' && _group !='') {
			url = url + '?trangthai=' + _status + '&group=' + _group;
		} else if(_status =='' && _group !='') {
			url = url + '?group=' + _group;
		} else if(_status !='' && _group =='') {
			url = url + '?trangthai=' + _status;
		}
		
		window.location.href = url;
		
	}
	
</script>