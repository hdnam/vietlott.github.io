<?php if(!defined('BASEPATH')) exit('Woa...Not find system folder');

/*-----------------------------------------------
# Rao_vat version 1.0
# Category controller
# Extends CI_Controller
# Author: Nguyen Duc Hung - http://tinagroup.net
# Create date: 02/05/2011
------------------------------------------------*/
require_once APPPATH.'third_party/admin_controller'.EXT;

class Category extends Admin_controller {

	public function __construct() {
		
		parent:: __construct();
		
		// Check login
		$this->check_login();
		
		// Load model
		$this->load->model('product/category_model', 'category');
		
	}
	
	public function index() {
	
		$data = array();
		$data['render_path'] = array('Admin' => $this->index_url.'admin', 'Danh mục sản phẩm' => $this->index_url.'admin/category');
		$data['heading_title'] = 'Quản lý danh mục';
		$data['url_create'] = $this->index_url.'admin/category/add_edit';
		$data['action'] = $this->index_url.'admin/category';
		
		$del = $this->input->post('delete');

		/*$page = $this->input->get('page') ? $this->input->get('page') : 1;
		$active = (int)$this->input->get('active');
		$show = (int)$this->input->get('show');
		//print_r($delete);
		*/
		if($this->input->post('act_del') == 'act_del') {
		  
			
			if($del) {
			
				if(gettype($del) == 'array' && count($del) > 0) {
				
					foreach($del as $id) {
						
						if($this->category->delete($id)) {
							$this->session->set_flashdata('warning', 'Xóa danh mục thành công');
							//redirect('admin/article_type');
						} else {
							$this->session->set_flashdata('warning', 'Có lỗi xảy ra rồi');
							redirect('admin/category');
						}
						
					} //End foreach
				
				} // End if
			
			} else {
				$this->session->set_flashdata('warning', 'Cần chọn ít nhất 1 bản tin để xóa');
				redirect('admin/category');
			}
			
		}
		
		/// Config pagination
		$config['base_url'] = $this->index_url.'admin/category/index';
		$config['total_rows'] = $this->category->totals();
		$config['uri_segment'] = 4;
		//$config['page_query_string'] = TRUE;
		//$config['query_string_segment'] = 'page';
		$config['per_page'] = 20;
		$config['num_links'] = 8;
		$this->pagination->initialize($config);
		$data['page'] = $this->pagination->create_links();
		$data['total_record'] = $this->category->totals();		
		
		$article = $this->category->get_category_where(null, array('ngayquayint' => 'DESC'), array('max' => $config['per_page'] , 'begin' => $this->uri->segment(4)));
			foreach($article->result() as $result) {			
				$data['lists'][] = array(
					'id' 		=> $result->id,
                    'thuquay'		=> $result->thuquay,
                    'ngayquay' 		=> $result->ngayquay,
                    'thoigianquay' 		=> $result->thoigianquay,
                    'giatrijackport' 		=> $result->giatrijackport,
                    'sojackport' 		=> $result->sojackport,
                    'sogiainhat' 		=> $result->sogiainhat,
                    'giatrigiainhat' 		=> $result->giatrigiainhat,
                    'sogiainhi' 		=> $result->sogiainhi,
                    'giatrigiainhi' 		=> $result->giatrigiainhi,
                    'sogiaiba' 		=> $result->sogiaiba,
                    'giatrigiaiba' 		=> $result->giatrigiaiba,
                    'chuoitrunggiai' 		=> $result->chuoitrunggiai,
                    'trangthai' 		=> $result->trangthai,
                    'realtime' 		=> $result->realtime,
					'url_edit'	=> $this->index_url.'admin/category/add_edit/'.$result->id,
					'url_del'	=> $this->index_url.'admin/category/delete/'.$result->id
				);
			}
		
		
		$this->render($this->load->view('admin/product/category/index', $data, TRUE));
	
	}
	
	
	public function add_edit() {
		
		$this->permission_edit_del();
		
		$_id = $this->uri->segment(4);
		$data['render_path'] = array('Admin' => $this->index_url.'admin', 'Danh mục sản phẩm' => $this->index_url.'admin/category');
		$data['heading_title'] = 'Tạo - Cập nhật danh mục';
		$data['action'] = $this->index_url.'admin/category/add_edit';
		
	 
		$this->form_validation->set_rules('ngayquay', 'ngayquay', 'required');
       // $this->form_validation->set_rules('chuoitrunggiai', 'chuoitrunggiai', 'required');
        $this->form_validation->set_rules('giatrijackport', 'giatrijackport', 'required');
        $this->form_validation->set_rules('sojackport', 'sojackport', 'required');
        $this->form_validation->set_rules('sogiainhat', 'sogiainhat', 'required');
        $this->form_validation->set_rules('sogiainhi', 'sogiainhi', 'required');
        $this->form_validation->set_rules('sogiaiba', 'sogiaiba', 'required');        
		$data['id'] = $this->input->post('id');
	//	$data['thuquay'] = $this->input->post('thuquay');
		$data['ngayquay'] = $this->input->post('ngayquay');
        $thuquay =  strtolower(date("l", strtotime($data['ngayquay'])));
        $data['thuquay']=$thuquay;
        $data['ngayquayint']= strtotime($data['ngayquay']);
        $data['thoigianquay'] = $this->input->post('thoigianquay');
		$data['giatrijackport'] = $this->input->post('giatrijackport');
        $data['sojackport'] = $this->input->post('sojackport');
		$data['sogiainhat'] = $this->input->post('sogiainhat');
        $data['giatrigiainhat'] = $this->input->post('giatrigiainhat');
		$data['sogiainhi'] = $this->input->post('sogiainhi');
        $data['giatrigiainhi'] = $this->input->post('giatrigiainhi');
		$data['sogiaiba'] = $this->input->post('sogiaiba');
        $data['giatrigiaiba'] = $this->input->post('giatrigiaiba');
		$data['chuoitrunggiai'] = $this->input->post('chuoitrunggiai');
        //realtime
        $data['realtime'] = ($this->input->post('realtime') == 'on') ? 1 : 0;		
		$data['trangthai'] = ($this->input->post('trangthai') == 'on') ? 1 : 0;		
        $trangthai=$data['trangthai'];
        
      
		$id = (int)$this->input->post('id');
		
		if($this->form_validation->run() == TRUE) {
//		    echo "<pre>sd";
//        print_r($data);
//        echo "</pre>";
//        exit;;
//			
			if($id) {
			
				if($this->category->update($id,$data)) {
				    
                    $stt=0;
                    $this->db->query("delete from `chitietso_mega` where id_soxo_mega='$id'");
                    $array_sotrungthuong = explode("-", $data['chuoitrunggiai']);
                        if(is_array ($array_sotrungthuong))
                        {
                            $dauso0=$dauso1=$dauso2=$dauso3=$dauso4=0;
                            $duoiso0=$duoiso1=$duoiso2=$duoiso3=$duoiso4=$duoiso5=$duoiso6=$duoiso7=$duois8=$duoiso9=0;
                            $chan=$le=0;
            				foreach($array_sotrungthuong as $kqarray_sotrungthuong)
            				{
            					if($kqarray_sotrungthuong!="")
            					{
			                          $stt++;
            						$kqarray_sotrungthuong=(trim($kqarray_sotrungthuong));
                                    $ngayquayint=$data['ngayquayint'];
                                    $ngayquay=$data['ngayquay'];
                                    //echo $ngayquay;exit;
                                    if($kqarray_sotrungthuong==0)
                                    {
                                        $dauso=0;
                                        $duoiso=0;
                                        $dauso0++;
                                    }
                                    else
                                    {
                                        $duoiso=$kqarray_sotrungthuong%10;
                                        $dauso=($kqarray_sotrungthuong-$duoiso)/10;
                                        if($dauso==0)
                                        {
                                            $dauso0++;
                                            $chan++;
                                        }
                                        if($dauso==1)
                                        {
                                            $dauso1++;
                                            $le++;
                                        }
                                        if($dauso==2)
                                        {
                                            $dauso2++;
                                            $chan++;
                                        }
                                        if($dauso==3)
                                        {
                                            $dauso3++;
                                            $le++;
                                        }
                                        if($dauso==4)
                                        {
                                            $dauso4++;
                                            $chan++;
                                        }
                                        
                                         if($duoiso==0)
                                        {
                                            $duoiso0++;
                                        }
                                        if($duoiso==1)
                                        {
                                            $duoiso1++;
                                        }
                                        if($duoiso==2)
                                        {
                                            $duoiso2++;
                                        }
                                        if($duoiso==3)
                                        {
                                            $duoiso3++;
                                        }
                                        if($duoiso==4)
                                        {
                                            $duoiso4++;
                                        }
                                         if($duoiso==5)
                                        {
                                            $duoiso5++;
                                        }
                                        if($duoiso==6)
                                        {
                                            $duoiso6++;
                                        }
                                        if($duoiso==7)
                                        {
                                            $duoiso7++;
                                        }
                                        if($duoiso==8)
                                        {
                                            $duoiso8++;
                                        }
                                        if($duoiso==9)
                                        {
                                            $duoiso9++;
                                        }
                                        
                                    }
                                     $this->db->query("INSERT INTO `chitietso_mega`( `id_soxo_mega`, `so_trung`, `ngayquayint`, `ngayquay`, `thutuquay`, `dauso`, `duoiso`,trangthai) VALUES ($id,'$kqarray_sotrungthuong',$ngayquayint ,'$ngayquay',$stt,$dauso,$duoiso,$trangthai) ON DUPLICATE KEY UPDATE thutuquay=$stt; ");
                                 	}
            				}
                             
            			     $kiquay= $this->db->query("select count(1) as so from soxo_mega where ngayquayint<= $ngayquayint ")->row()->so;
                             $this->db->query("update `soxo_mega` set dau0='$dauso0', dau1='$dauso1', dau2='$dauso2', dau3='$dauso3', dau4='$dauso4',duoi0='$duoiso0',duoi1='$duoiso1',duoi2='$duoiso2',duoi3='$duoiso3',duoi4='$duoiso4',duoi5='$duoiso5',duoi6='$duoiso6',duoi7='$duoiso7',duoi8='$duoiso8',duoi9='$duoiso9',chan='$chan',le='$le',kiquay=$kiquay  where id='$id' ");
                        }
					$this->session->set_flashdata('warning', 'Cập nhật kết quả thành công');
					redirect('admin/category/add_edit/'.$id);
				} else {
					$this->session->set_flashdata('warning', 'Có lỗi rồi');
					redirect('admin/category/add_edit');
				}
			} else {
                    
                    $ngayquayint=$data['ngayquayint'];
                    $getdataday= $this->db->query("select id from `soxo_mega` where ngayquayint='$ngayquayint'");
                    if($getdataday->num_rows()==0)
                    {
                            $last_id=$this->category->add($data);
                            $dauso0=$dauso1=$dauso2=$dauso3=$dauso4=0;
                            $duoiso0=$duoiso1=$duoiso2=$duoiso3=$duoiso4=$duoiso5=$duoiso6=$duoiso7=$duois8=$duoiso9=0;
                            $chan=$le=0;
        					if($last_id!=false) {
        					   
                               
                               //$this->db->query("select id from soxo_mega where")->row()->id;
                             //  echo $last_id;exit;
                                $array_sotrungthuong = explode("-", $data['chuoitrunggiai']);
                                if(is_array ($array_sotrungthuong))
                                {
                                     $stt=0;
                    				foreach($array_sotrungthuong as $kqarray_sotrungthuong)
                    				{
            				             $stt++;
                    					if($kqarray_sotrungthuong!="")
                    					{
                    						$kqarray_sotrungthuong=(trim($kqarray_sotrungthuong));
                          
                                            $ngayquayint=$data['ngayquayint'];
                                            $ngayquay=$this->input->post('ngayquay');
                                            if($kqarray_sotrungthuong==0)
                                            {
                                                $dauso=0;
                                                $duoiso=0;
                                                $dauso0++;
                                            }
                                            else
                                            {
                                                 $duoiso=$kqarray_sotrungthuong%10;
                                                $dauso=($kqarray_sotrungthuong-$duoiso)/10;
                                                if($dauso==0)
                                                {
                                                    $dauso0++;
                                                    $chan++;
                                                }
                                                if($dauso==1)
                                                {
                                                    $dauso1++;
                                                    $le++;
                                                }
                                                if($dauso==2)
                                                {
                                                    $dauso2++;
                                                    $chan++;
                                                }
                                                if($dauso==3)
                                                {
                                                    $dauso3++;
                                                    $le++;
                                                }
                                                if($dauso==4)
                                                {
                                                    $dauso4++;
                                                    $chan++;
                                                }
                                                
                                                 if($duoiso==0)
                                                {
                                                    $duoiso0++;
                                                }
                                                if($duoiso==1)
                                                {
                                                    $duoiso1++;
                                                }
                                                if($duoiso==2)
                                                {
                                                    $duoiso2++;
                                                }
                                                if($duoiso==3)
                                                {
                                                    $duoiso3++;
                                                }
                                                if($duoiso==4)
                                                {
                                                    $duoiso4++;
                                                }
                                                 if($duoiso==5)
                                                {
                                                    $duoiso5++;
                                                }
                                                if($duoiso==6)
                                                {
                                                    $duoiso6++;
                                                }
                                                if($duoiso==7)
                                                {
                                                    $duoiso7++;
                                                }
                                                if($duoiso==8)
                                                {
                                                    $duoiso8++;
                                                }
                                                if($duoiso==9)
                                                {
                                                    $duoiso9++;
                                                }
                                            }
                                            $this->db->query("INSERT INTO `chitietso_mega`( `id_soxo_mega`, `so_trung`, `ngayquayint`, `ngayquay`, `thutuquay`, `dauso`, `duoiso`,trangthai) VALUES ($last_id,'$kqarray_sotrungthuong',$ngayquayint ,'$ngayquay',$stt,$dauso,$duoiso,$trangthai)  ON DUPLICATE KEY UPDATE thutuquay=$stt;");
              					          
            				
                                        }
                    				}
                                     $kiquay= $this->db->query("select count(1) as so from soxo_mega where ngayquayint<= $ngayquayint ")->row()->so;
                                     $this->db->query("update `soxo_mega` set dau0='$dauso0', dau1='$dauso1', dau2='$dauso2', dau3='$dauso3', dau4='$dauso4',duoi0='$duoiso0',duoi1='$duoiso1',duoi2='$duoiso2',duoi3='$duoiso3',duoi4='$duoiso4',duoi5='$duoiso5',duoi6='$duoiso6',duoi7='$duoiso7',duoi8='$duoiso8',duoi9='$duoiso9',chan='$chan',le='$le',kiquay=$kiquay  where id='$last_id' ");
                    			}
                                
                                
        						$this->session->set_flashdata('warning', 'Thêm mới kết quả thành công');
        						redirect('admin/category');
        					} else {
        						$this->session->set_flashdata('warning', 'Có lỗi rồi');
        						redirect('admin/category/add_edit');
        					}
                        
                    } else {
						$this->session->set_flashdata('warning', 'Kết quả ngày này đã có lồi không thể thêm.');
						redirect('admin/category/add_edit');
					}
				    
				
			}
			
		}
		
		if($_id !='') $data['article'] = $this->category->get_by_id($_id);
		//$data['root'] = $this->category->get_root_category(0);
		
		$this->render($this->load->view('admin/product/category/category_form', $data, TRUE));
		
	}
	
	
	function delete(){
		
		$this->permission_edit_del();
		
		$id = $this->uri->segment(4);
		/*if($this->category->parent_exists($id)) {
			$this->session->set_flashdata('message', 'Bạn cần xóa danh mục con trước khi xóa!');
			redirect('admin/category');
		} else {
		*/
			if($this->category->delete($id)) {
			     $this->db->query("delete from `chitietso_mega` where id_soxo_mega='$id' ");
				$this->session->set_flashdata('warning', 'Xóa danh mục thành công!');
				redirect('admin/category');
			} else {
				$this->session->set_flashdata('warning', 'Xóa danh mục Thất bại!');
				redirect('admin/category');
			}
		//}
	
	}
	

}
/* End file */
/* Local application/controllers/admin/category.php */