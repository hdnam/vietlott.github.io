<?php if(!defined('BASEPATH')) exit('Woa...Not find system folder');

/*-----------------------------------------------
# Rao_vat version 1.0
# Pertner admin controller
# Extends CI_Controller
# Author: Nguyen Duc Hung - http://tinagroup.net
# Create date: 02/05/2011
------------------------------------------------*/
require_once APPPATH.'third_party/admin_controller'.EXT;

class Partner extends Admin_controller {

	public function __construct() {
	
		parent:: __construct();
		
		// Check login
		$this->check_login();
	
	}
	
	function index() {
		
		$this->permission_edit_del();
		
		$_id = $this->uri->segment(4);
		$data['render_path'] = array('Admin' => $this->index_url.'admin', 'Đối tác' => '');
		$data['heading_title'] = 'Đối tác';
		$data['action'] = $this->index_url.'admin/partner/';
		
		$this->valid->set_rules('info', 'Content', 'required');
						
		$data['content'] = $this->input->post('info');	
		if($this->form_validation->run() == TRUE) {
				$this->db->set('content', $data['content']);
				if($this->db->update('partner')) {
					$this->session->set_flashdata('warning', 'Cập nhật nội dung thành công');
					redirect('admin/partner/');
				} else {
					$this->session->set_flashdata('warning', 'Có lỗi rồi');
					redirect('admin/partner');
				}
		}
		
		$ok = $this->db->get('partner')->row();
		$data['nd'] = $ok->content;
		$this->tinyMCE = 'info';
		
		$this->render($this->load->view('admin/other/page_form', $data, TRUE));
		
	}

}
/* End file */
/* Local application/controllers/admin/introduction.php */