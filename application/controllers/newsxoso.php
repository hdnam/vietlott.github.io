<?php if(!defined('BASEPATH')) exit('Woa...Not find system folder');
/*-----------------------------------------------
# Rao_vat version 1.0
# Home Controler
# Extends CI_Controller
# Author: Nguyen Duc Hung - http://tinagroup.net
# Create date: 28/04/2011
------------------------------------------------*/
require_once APPPATH.'third_party/public_controller'.EXT;

class Newsxoso extends Public_controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->library('ajax_pagination');
	}
	
	public function index()
	{
		$data = array();
		$data['render_path'] = array('Trang chủ' => site_url('trang-chu'), 'Tin tức xổ số' => site_url('tin-tuc-xo-so'));
		$this->site_title = 'Tin tức xổ số  ';
		 
		$data['url_view'] = 'xem-tin-xo-so/';
		 $config['base_url'] = $this->index.'tin-tuc-xo-so/';;
		$config['total_rows'] = $this->tinxoso->getList(array('id','title','create_date', 'modify_date', 'image', 'intro'), array('type'=>0), array('id' => 'DESC'), null)->num_rows();
		$config['uri_segment'] = 2;
		//$config['page_query_string'] = TRUE;
		//$config['query_string_segment'] = 'page';
		$config['per_page'] = 10;
		$config['num_links'] = 10;
		$this->pagination->initialize($config);
		$data['page'] = $this->pagination->create_links();
    	$data['news'] = $this->tinxoso->getList(array('id','title','create_date', 'modify_date', 'image', 'intro'), array('type'=>0), array('id' => 'DESC'), array('max' => $config['per_page'], 'begin' => $this->uri->segment(2)))->result();
	 
       	$this->render($this->load->view('tin_tuc/indexxoso', $data, TRUE),'3col');
	 
		
	}
	public function tag($tagname)
	{
		$data = array();
		$data['render_path'] = array('Trang chủ' => site_url('trang-chu'), 'Tin tức xổ số' => site_url('tin-tuc-xo-so'));
		$this->site_title = 'Tin tức xổ số  ';
		 
	     $data['url_view'] = 'xem-tin-xo-so/';
		 $config['base_url'] = $this->index.'tin-tuc-xo-so/';;
         $data['news'] = $this->db->query("select newsxoso.* from newsxoso inner join tag on newsxoso.id=tag.id_newsxoso where  tagname = \"".$tagname."\"")->result();
    	 $this->render($this->load->view('tin_tuc/indexxoso', $data, TRUE),'3col');
	 
		
	}
	public function detail()
	{
		$uri = $this->uri->segment(2);
		$uri = explode("-", $uri);
		$id = (int)$uri[0];
		
		$data['render_path'] = array('Trang chủ' => site_url('trang-chu'), 'Tin tức xổ số' => site_url('tin-tuc-xo-so'));
		
		$this->site_title = 'Tin tức xổ số | '. $this->tinxoso->get_title($id);
		$data['news'] = $this->tinxoso->read($id);
		$data['other_news'] = $this->tinxoso->getList(array('id','title','create_date'), array('id !=' => $id,'type'=>0), array('id' => 'DESC'), array('max' => 10, 'begin' => 0))->result();
		$data['url_view'] = 'xem-tin-xo-so/';
		
		$this->render($this->load->view('tin_tuc/page_viewxoso', $data, TRUE),'3col');
		
	}
     
}