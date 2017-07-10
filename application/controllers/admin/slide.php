<?php  if(!defined('BASEPATH')) exit('Woa...Not find system folder');

/*-----------------------------------------------
# Rao_vat version 1.0
# slide controller
# Extends CI_Controller
# Author: Nguyen Duc Hung - http://tinagroup.net
# Create date: 02/05/2011
------------------------------------------------*/
require_once APPPATH.'third_party/admin_controller'.EXT;

class Slide extends Admin_controller {

	public function __construct() {
		
		parent:: __construct();
		
		// Check login
		$this->check_login();
		
		// Load model
		$this->load->model('slide/slide_model', 'slide');
		$this->load->library('ckeditor', array('instanceName' => 'CKEDITOR1','basePath' => base_url()."ckeditor/", 'outPut' => true)); 
	 
	}
	
	public function index() {
	
		$data = array();
		$data['render_path'] = array('Admin' => base_url().'admin/trangchu/home', 'Danh mục quảng cáo' => base_url().'admin/slide');
		$data['heading_title'] = 'Quản lý quảng cáo';
		$data['url_create'] = base_url().'admin/slide/add_edit';
		$data['action'] = base_url().'admin/slide/add_edit';
		
		$del = $this->input->post('selected');

		/*$page = $this->input->get('page') ? $this->input->get('page') : 1;
		$active = (int)$this->input->get('active');
		$show = (int)$this->input->get('show');
		//print_r($delete);
		*/
		if($this->input->post('act_del') == 'act_del') {
			
			if($del) {
			
				if(gettype($del) == 'array' && count($del) > 0) {
				
					foreach($del as $id) {
						
						if($this->slide->delete($id)) {
							$this->session->set_flashdata('warning', 'Xóa danh mục thành công');
							
						} else {
							$this->session->set_flashdata('warning', 'Có lỗi xảy ra rồi');
							redirect('admin/slide');
						}
						
					} //End foreach
				redirect('admin/slide');
				} // End if
			
			} else {
				$this->session->set_flashdata('warning', 'Cần chọn ít nhất 1 bản tin để xóa');
				redirect('admin/slide');
			}
			
		}
		
			
		
		$article = $this->slide->get_slide_where(null, array('id' => 'DESC'), null);
			foreach($article->result() as $result) {			
				$data['lists'][] = array(
					'id' 		=> $result->id,
					'name' 		=> $result->name,
					'contents'		=> $result->contents,
					'img'		=> $result->img,
					'url'		=> $result->url,
					'ord'		=> $result->ord,
					'active'		=> $result->active,
					'position'		=> $result->position,
					'url_edit'	=> base_url().'admin/slide/add_edit/'.$result->id,
					'url_del'	=> base_url().'admin/slide/delete/'.$result->id
				);
			}
		
		
		$this->render($this->load->view('admin/slide/index', $data, TRUE));
	
	}
	
	
	public function add_edit() {

		$_id = $this->uri->segment(4);
		$data['render_path'] = array('Admin' => base_url().'admin/trangchu/home', 'Danh sách quảng cáo' => base_url().'admin/slide');
		$data['heading_title'] = 'Tạo - Cập nhật quảng cáo';
		$data['action'] = base_url().'admin/slide/add_edit';
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$data['name'] = $this->input->post('name');
		$data['active'] = ($this->input->post('active') == 'on') ? 1 : 0;
		$data['ord'] = $this->input->post('ord');
		$data['url'] = $this->input->post('url');
		$data['position'] = $this->input->post('position');
		$data['img'] = $this->input->post('img');
		$data['contents'] = $this->input->post('detail');	
                $id = (int)$this->input->post('id');
		if($this->form_validation->run() == TRUE) {
			if($id && $id !='') {
				if($this->slide->update($id,$data)) {
					$this->session->set_flashdata('warning', 'Cập nhật Danh mục thành công');
					redirect('admin/slide/add_edit/'.$id);
				} else {
					$this->session->set_flashdata('warning', 'Có lỗi rồi');
					redirect('admin/slide/add_edit');
				}
			} else {
				
					if($this->slide->add($data)) {
						$this->session->set_flashdata('warning', 'Thêm mới Danh mục thành công');
						redirect('admin/slide');
					} else {
						$this->session->set_flashdata('warning', 'Có lỗi rồi');
						redirect('admin/slide/add_edit');
					}
				
			}
			
		}
		if($_id !='') $data['article'] = $this->slide->get_by_id($_id);
		$this->render($this->load->view('admin/slide/slide_form', $data, TRUE));
	}
	
	
	function delete(){
		
		//$this->permission_edit_del();
		
		$id = $this->uri->segment(4);
		/*if($this->slide->parent_exists($id)) {
			$this->session->set_flashdata('message', 'Bạn cần xóa danh mục con trước khi xóa!');
			redirect('admin/slide');
		} else {
		*/
			if($this->slide->delete($id)) {
				$this->session->set_flashdata('warning', 'Xóa danh mục thành công!');
				redirect('admin/slide');
			} else {
				$this->session->set_flashdata('warning', 'Xóa danh mục Thất bại!');
				redirect('admin/slide');
			}
		//}
	
	}
	

}
/* End file */
/* Local application/controllers/admin/slide.php */