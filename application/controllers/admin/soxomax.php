<?php if(!defined('BASEPATH')) exit('Woa...Not find system folder');

/*-----------------------------------------------
# Rao_vat version 1.0
# soxomax controller
# Extends CI_Controller
# Author: Nguyen Duc Hung - http://tinagroup.net
# Create date: 02/05/2011
------------------------------------------------*/
require_once APPPATH.'third_party/admin_controller'.EXT;

class Soxomax extends Admin_controller {

	public function __construct() {
		
		parent:: __construct();
		
		// Check login
		$this->check_login();
		
		// Load model
		$this->load->model('soxomax/soxomax_model', 'soxomax');
		
	}
	
	public function index() {
	
		$data = array();
		$data['render_path'] = array('Admin' => $this->index_url.'admin', 'Danh mục sổ xố max' => $this->index_url.'admin/soxomax');
		$data['heading_title'] = 'Quản lý danh sách sổ xố max';
		$data['url_create'] = $this->index_url.'admin/soxomax/add_edit';
		$data['action'] = $this->index_url.'admin/soxomax';
		
		$del = $this->input->post('delete');

		/*$page = $this->input->get('page') ? $this->input->get('page') : 1;
		$active = (int)$this->input->get('active');
		$show = (int)$this->input->get('show');
		//print_r($delete);
		*/
		if($this->input->post('act_del') == 'act_del') {
		  echo "Sfsf";exit;
			
			if($del) {
			
				if(gettype($del) == 'array' && count($del) > 0) {
				
					foreach($del as $id) {
						
						if($this->soxomax->delete($id)) {
							$this->session->set_flashdata('warning', 'Xóa danh mục thành công');
							//redirect('admin/article_type');
						} else {
							$this->session->set_flashdata('warning', 'Có lỗi xảy ra rồi');
							redirect('admin/soxomax');
						}
						
					} //End foreach
				
				} // End if
			
			} else {
				$this->session->set_flashdata('warning', 'Cần chọn ít nhất 1 bản tin để xóa');
				redirect('admin/soxomax');
			}
			
		}
		
		/// Config pagination
		$config['base_url'] = $this->index_url.'admin/soxomax/index';
		$config['total_rows'] = $this->soxomax->totals();
		$config['uri_segment'] = 4;
		//$config['page_query_string'] = TRUE;
		//$config['query_string_segment'] = 'page';
		$config['per_page'] = 20;
		$config['num_links'] = 8;
		$this->pagination->initialize($config);
		$data['page'] = $this->pagination->create_links();
		$data['total_record'] = $this->soxomax->totals();		
		
		$article = $this->soxomax->get_soxomax_where(null, array('ngayquayint' => 'DESC'), array('max' => $config['per_page'] , 'begin' => $this->uri->segment(4)));
			foreach($article->result() as $result) {			
				$data['lists'][] = array(
					'id' 		=> $result->id,
                    'thuquay'		=> $result->thuquay,
                    'ngayquay' 		=> $result->ngayquay,
                    'thoigianquay' 		=> $result->thoigianquay,
                    'ngayquayint' 		=> $result->ngayquayint,
                    'giainhat' 		=> $result->giainhat,
                    'giatrigiainhat' 		=> $result->giatrigiainhat,
                    'giatrigiainhi' 		=> $result->giatrigiainhi,
                    'giainhi1' 		=> $result->giainhi1,
                    'giainhi2' 		=> $result->giainhi2,
                    'giaiba1' 		=> $result->giaiba1,
                    'giaiba2' 		=> $result->giaiba2,
                    'giaiba3' 		=> $result->giaiba3,
                    'giatrigiaiba' 		=> $result->giatrigiaiba,
                    'giaikk1' 		=> $result->giaikk1,
                    'giatrigiaikk1' 		=> $result->giatrigiaikk1,
                    'giaikk2' 		=> $result->giaikk2,
                    'giatrigiaikk2' 		=> $result->giatrigiaikk2,
                    'trangthai' 		=> $result->trangthai,
                    'realtime' 		=> $result->realtime,
					'url_edit'	=> $this->index_url.'admin/soxomax/add_edit/'.$result->id,
					'url_del'	=> $this->index_url.'admin/soxomax/delete/'.$result->id
				);
			}
		
		
		$this->render($this->load->view('admin/soxomax/index', $data, TRUE));
	
	}
	
	
	public function add_edit() {
		
		$this->permission_edit_del();
		
		$_id = $this->uri->segment(4);
		$data['render_path'] = array('Admin' => $this->index_url.'admin', 'Danh mục sổ sỗ max' => $this->index_url.'admin/soxomax');
		$data['heading_title'] = 'Tạo - Cập nhật danh mục';
		$data['action'] = $this->index_url.'admin/soxomax/add_edit';
		
	 
		$this->form_validation->set_rules('ngayquay', 'ngayquay', 'required');
        //$this->form_validation->set_rules('giainhat', 'giainhat', 'required|numeric|exact_length[4]');
//        $this->form_validation->set_rules('giainhi1', 'giainhi1', 'required|numeric|exact_length[4]');
//        $this->form_validation->set_rules('giainhi2', 'giainhi2', 'required|numeric|exact_length[4]');
//        $this->form_validation->set_rules('giaiba1', 'giaiba1', 'required|numeric|exact_length[4]');
//        $this->form_validation->set_rules('giaiba2', 'giaiba2', 'required|numeric|exact_length[4]');
//        $this->form_validation->set_rules('giaiba3', 'giaiba3', 'required|numeric|exact_length[4]');   
        
        $this->form_validation->set_rules('thoigianquay', 'thoigianquay', 'required');
        $this->form_validation->set_rules('giatrigiainhat', 'giatrigiainhat', 'required');
        $this->form_validation->set_rules('giatrigiainhi', 'giatrigiainhi', 'required');
        $this->form_validation->set_rules('giatrigiaiba', 'giatrigiaiba', 'required');   
        $this->form_validation->set_rules('giatrigiaikk1', 'giatrigiaikk1', 'required');
        $this->form_validation->set_rules('giatrigiaikk2', 'giatrigiaikk2', 'required'); 
             
		$data['id'] = $this->input->post('id');
	//	$data['thuquay'] = $this->input->post('thuquay');
		$data['ngayquay'] = $this->input->post('ngayquay');
        $thuquay =  strtolower(date("l", strtotime($data['ngayquay'])));
        $data['thuquay']=$thuquay;
        $data['ngayquayint']= strtotime($data['ngayquay']);
        $data['thoigianquay'] = $this->input->post('thoigianquay');
		$data['giainhat'] = $this->input->post('giainhat');
        $data['giainhi1'] = $this->input->post('giainhi1');
		$data['giainhi2'] = $this->input->post('giainhi2');
        $data['giaiba1'] = $this->input->post('giaiba1');
		$data['giaiba2'] = $this->input->post('giaiba2');
        $data['giaiba3'] = $this->input->post('giaiba3');
		$data['giatrigiainhat'] = $this->input->post('giatrigiainhat');
        $data['giatrigiainhi'] = $this->input->post('giatrigiainhi');
		$data['giatrigiaiba'] = $this->input->post('giatrigiaiba');
        $data['giatrigiaikk1'] = $this->input->post('giatrigiaikk1');
		$data['giatrigiaikk2'] = $this->input->post('giatrigiaikk2');
		$data['trangthai'] = ($this->input->post('trangthai') == 'on') ? 1 : 0;		
        $data['realtime'] = ($this->input->post('realtime') == 'on') ? 1 : 0;
    	$id = (int)$this->input->post('id');
		
		if($this->form_validation->run() == TRUE) {
			if($id) {
			
				if($this->soxomax->update($id,$data)) {
				    
                    $ngayquayint=$data['ngayquayint'];
                    
                    $kiquay= $this->db->query("select count(1) as so from soxo_max where ngayquayint<= $ngayquayint ")->row()->so;
                    $this->db->query("update soxo_max set kiquay=$kiquay  where id= $id ");
                    
				   	$this->session->set_flashdata('warning', 'Cập nhật kết quả thành công');
					redirect('admin/soxomax/add_edit/'.$id);
				} else {
					$this->session->set_flashdata('warning', 'Có lỗi rồi');
					redirect('admin/soxomax/add_edit');
				}
			} else {
                    
                    $ngayquayint=$data['ngayquayint'];
                    $getdataday= $this->db->query("select id from `soxo_max` where ngayquayint='$ngayquayint'");
                    if($getdataday->num_rows()==0)
                    {
                            $last_id=$this->soxomax->add($data);
                           if($last_id!=false) {
                                $kiquay= $this->db->query("select count(1) as so from soxo_max where ngayquayint<= $ngayquayint ")->row()->so;
                                $this->db->query("update soxo_max set kiquay=$kiquay  where id= $last_id ");
        						$this->session->set_flashdata('warning', 'Thêm mới kết quả thành công');
        						redirect('admin/soxomax');
        					} else {
        						$this->session->set_flashdata('warning', 'Có lỗi rồi');
        						redirect('admin/soxomax/add_edit');
        					}
                        
                    } else {
						$this->session->set_flashdata('warning', 'Kết quả ngày này đã có lồi không thể thêm.');
						redirect('admin/soxomax/add_edit');
					}
				    
				
			}
			
		}
		
		if($_id !='') $data['article'] = $this->soxomax->get_by_id($_id);
		//$data['root'] = $this->soxomax->get_root_soxomax(0);
		
		$this->render($this->load->view('admin/soxomax/soxomax_form', $data, TRUE));
		
	}
	
	
	function delete(){
		
		$this->permission_edit_del();
		
		$id = $this->uri->segment(4);
		/*if($this->soxomax->parent_exists($id)) {
			$this->session->set_flashdata('message', 'Bạn cần xóa danh mục con trước khi xóa!');
			redirect('admin/soxomax');
		} else {
		*/
			if($this->soxomax->delete($id)) {
			    $this->session->set_flashdata('warning', 'Xóa danh mục thành công!');
				redirect('admin/soxomax');
			} else {
				$this->session->set_flashdata('warning', 'Xóa danh mục Thất bại!');
				redirect('admin/soxomax');
			}
		//}
	
	}
	

}
/* End file */
/* Local application/controllers/admin/soxomax.php */