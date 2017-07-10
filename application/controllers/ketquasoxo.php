<?php if(!defined('BASEPATH')) exit('Woa...Not find system folder');

/*-----------------------------------------------
# Rao_vat version 1.0
# Product Controler
# Extends CI_Controller
# Author: Nguyen Duc Hung - http://tinagroup.net
# Create date: 17/05/2011
------------------------------------------------*/
require_once APPPATH.'third_party/public_controller'.EXT;

class Ketquasoxo extends Public_controller {
        public $startdate_default = '';
	function __construct() {
		
		parent:: __construct();	
		$this->load->library('ajax_pagination');
                
	}
	
	public function index() {
	
	}
	
	
	public function soketqua_mega() 
	{
		$data = array();
        $data['start_date']= $this->input->post('start_date');
        $data['end_date'] = $this->input->post('end_date');
        $data['number'] = $this->input->post('number');
	    $this->form_validation->set_rules('start_date', 'start_date', 'required');
        $this->form_validation->set_rules('end_date', 'end_date', 'required');
        $this->startdate_default= $this->db->query("SELECT ngayquayint FROM `soxo_mega` ORDER by ngayquayint desc LIMIT 1 OFFSET 29 ")->result()[0]->ngayquayint;
        $this->startdate_default = date('d/m/Y', $this->startdate_default); 
        if($this->form_validation->run() == TRUE) 
        {
            //type =1S?p x?p theo t?n su?t 2S?p x?p theo th? t?
            
            $start_date=$this->util->ConvertDateXuoi($data['start_date']);
            $end_date=$this->util->ConvertDateXuoi($data['end_date']);
            $start_date_int= strtotime($start_date);
            $end_date_int= strtotime($end_date);
             
            $last40curent= $this->db->query(" SELECT `thuquay`, `ngayquayint`, `ngayquay`, `giatrijackport`, `chuoitrunggiai`,`sojackport`,`id`,kiquay FROM `soxo_mega` WHERE  trangthai=1 and ngayquayint>='$start_date_int' and ngayquayint<='$end_date_int' order by ngayquayint desc");
            
        }
        else
        {
           
            $start_date=$this->util->ConvertDateXuoi(date($this->startdate_default));
            $end_date=$this->util->ConvertDateXuoi(date("d/m/Y"));
            $data['start_date']=date($this->startdate_default);
            $data['end_date'] =date("d/m/Y");
            $start_date_int= strtotime($start_date);
            $end_date_int= strtotime($end_date);
            
    	    $last40curent= $this->db->query(" SELECT `thuquay`, `ngayquayint`, `ngayquay`, `giatrijackport`, `chuoitrunggiai`,`sojackport`,`id`,kiquay FROM `soxo_mega` WHERE  trangthai=1 and ngayquayint>='$start_date_int' and ngayquayint<='$end_date_int' order by ngayquayint desc");
            
            
        }
        
        
        $data['last40curent'] = $last40curent;
		$this->render($this->load->view('ketquasoxo/soketqua_mega',$data, TRUE),'3col');
				
	}
    public function soketqua_max4d() 
	{
		$data = array();
        
        $data['start_date']= $this->input->post('start_date');
        $data['end_date'] = $this->input->post('end_date');
        $data['number'] = $this->input->post('number');
	    $this->form_validation->set_rules('start_date', 'start_date', 'required');
        $this->form_validation->set_rules('end_date', 'end_date', 'required');
        $this->startdate_default= $this->db->query("SELECT ngayquayint FROM `soxo_max` ORDER by ngayquayint desc LIMIT 1 OFFSET 29 ")->result()[0]->ngayquayint;
        $this->startdate_default = date('d/m/Y', $this->startdate_default); 
        if($this->form_validation->run() == TRUE) 
        {
            //type =1S?p x?p theo t?n su?t 2S?p x?p theo th? t?
            
            $start_date=$this->util->ConvertDateXuoi($data['start_date']);
            $end_date=$this->util->ConvertDateXuoi($data['end_date']);
            $start_date_int= strtotime($start_date);
            $end_date_int= strtotime($end_date);
             
            $last40curent= $this->db->query("SELECT * FROM `soxo_max` WHERE  trangthai=1 and ngayquayint>='$start_date_int' and ngayquayint<='$end_date_int' order by ngayquayint desc");
            
        }
        else
        {
           
            $start_date=$this->util->ConvertDateXuoi(date($this->startdate_default));
            $end_date=$this->util->ConvertDateXuoi(date("d/m/Y"));
            $data['start_date']=date($this->startdate_default);
            $data['end_date'] =date("d/m/Y");
            $start_date_int= strtotime($start_date);
            $end_date_int= strtotime($end_date);
            
    	    $last40curent= $this->db->query(" SELECT * FROM `soxo_max` WHERE  trangthai=1 and ngayquayint>='$start_date_int' and ngayquayint<='$end_date_int' order by ngayquayint desc");
            
        }
        
        
        $data['last40curent'] = $last40curent;
		$this->render($this->load->view('ketquasoxo/soketqua_max4d',$data, TRUE),'3col');
				
	}
	
 
}
// End file
// Local applocation/controllers/product.php