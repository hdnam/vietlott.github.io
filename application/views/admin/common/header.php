<div id="header">
    	<div class="div1">
        	<div class="div2"><h1 style="margin:0;">TRANG QUẢN TRỊ</h1></div>
            <div class="div3">
            	<img src="<?=base_url();?>admin_template/image/lock.png" />
                Bạn đăng nhập với tài khoản <span><?php echo $this->session->userdata('username');?> | <a href="<?=$this->index_url;?>admin/user/logout" style="color:#ffffff; text-decoration:none;">Thoát</a></span>
            </div>
        </div>
        <div id="menu">
        	<ul class="left">
            	<li id="dashboard"><a href="<?=$this->index_url;?>admin" class="top">Admin page</a></li>
                <li><a href="#" class="top">Hệ thống</a>
                	<ul>
                    	<li><a href="<?=$this->index_url;?>admin/setting">Cài đặt chung</a>
                        
                    	<li><a href="<?=$this->index_url;?>admin/user">Thành viên</a></li>
                        <li><a href="<?=$this->index_url;?>admin/user_group">Nhóm quyền</a></li>
                             
                        </li>
                    </ul>
                </li>
                <li><a href="#" class="top">Sổ xố</a>
                	<ul>
                    	
                        <li><a href="<?=$this->index_url;?>admin/soxomax">Sổ xố max 4d</a></li>
                        <li><a href="<?=$this->index_url;?>admin/category">Sổ xố mega 6/45</a></li>
                    </ul>
                </li>
                <li><a href="#" class="top">Tin tức </a>
                	<ul>
                    	<li><a href="<?=$this->index_url;?>admin/news">Tin tức</a></li>
                        <li><a href="<?=$this->index_url;?>admin/newsxoso">Tin tức xổ số</a></li>
                        <li><a href="<?=$this->index_url;?>admin/introduc">Giới thiệu</a></li>
                         <li><a href="<?=$this->index_url;?>admin/slide">Quảng cáo</a></li>
                    </ul>
                </li>
                
                <li><a href="<?=$this->index_url;?>admin/maillienhe" class="top">Liên hệ </a> 
                </li>
            </ul>
        </div><!--End menu-->
    </div><!--End header-->