<?php if(!defined('BASEPATH')) exit('Woa...Not find system folder');

/*-----------------------------------------------
# Rao_vat version 1.0
# Product Controler
# Extends CI_Controller
# Author: Nguyen Duc Hung - http://tinagroup.net
# Create date: 17/05/2011
------------------------------------------------*/
require_once APPPATH.'third_party/public_controller'.EXT;

class Thongke extends Public_controller {
        public $startdate_default = '';
	function __construct() {
		
		parent:: __construct();	
		$this->load->library('ajax_pagination');
                $this->startdate_default= $this->db->query("SELECT ngayquayint FROM `soxo_mega` ORDER by ngayquayint desc LIMIT 1 OFFSET 29 ")->result()[0]->ngayquayint;
                $this->startdate_default = date('d/m/Y', $this->startdate_default); 
                        
        }
	
	public function index() {
	
	}
	
	
	public function thong_ke_chi_tiet() 
	{
		$data = array();
        
        $data = array();
       // $this->output->enable_profiler(TRUE);
        $data['start_date']= $this->input->post('start_date');
        $data['end_date'] = $this->input->post('end_date');
        $data['number'] = $this->input->post('number');
	    $this->form_validation->set_rules('start_date', 'start_date', 'required');
        $this->form_validation->set_rules('end_date', 'end_date', 'required');
        $this->form_validation->set_rules('number', 'number', 'required');
        if($this->form_validation->run() == TRUE) 
        {
            //type =1S?p x?p theo t?n su?t 2S?p x?p theo th? t?
            
            $start_date=$this->util->ConvertDateXuoi($data['start_date']);
            $end_date=$this->util->ConvertDateXuoi($data['end_date']);
            $start_date_int= strtotime($start_date);
            $end_date_int= strtotime($end_date);
            $number=trim(mysql_real_escape_string($data['number'])); 
            $array_number = explode(",", $number);
            $array_result=array();
            for($i=0;$i<count($array_number);$i++)
            
            {
                $so_thongke=trim($array_number[$i]);
                $get_data_min= $this->db->query(" SELECT count(1) as solan, max(ngayquayint)as ngaymax, min(ngayquayint) as ngaymin from `chitietso_mega` WHERE so_trung='$so_thongke'  and trangthai=1")->result();
               // echo "SELECT count(1) as solan, max(ngayquayint)as ngaymax, min(ngayquayint) as ngaymin from `chitietso_mega` WHERE so_trung='$so_thongke'  and trangthai=1";exit;
                $array_result[$so_thongke]['number_thongke']=$so_thongke;
                $array_result[$so_thongke]['solanve']=$get_data_min[0]->solan;
                $array_result[$so_thongke]['ngaymax']=$get_data_min[0]->ngaymax;
                $array_result[$so_thongke]['ngaymin']=$get_data_min[0]->ngaymin;
                $ngaymaxint=0;
                $ngaymaxint=$get_data_min[0]->ngaymax;
                if($ngaymaxint<=0 or $ngaymaxint==Null)
                    $ngaymaxint=0;
                $songay_chuave= $this->db->query(" SELECT distinct ngayquayint FROM `chitietso_mega` where ngayquayint > $ngaymaxint and so_trung!='$so_thongke'  and trangthai=1")->num_rows();
                $array_result[$so_thongke]['songaychuave']=$songay_chuave;
                
            }
           
            
            $data['thongkechitiet'] = $array_result;
           }
        else
        {
           
            $start_date=$this->util->ConvertDateXuoi(date($this->startdate_default));
            $end_date=$this->util->ConvertDateXuoi(date("d/m/Y"));
            $data['start_date']=date($this->startdate_default);
            $data['end_date'] =date("d/m/Y");
    	    $data['thongkechitiet'] = $thongkedauso;
            
        }
         
         
		$this->render($this->load->view('thongke/thong_ke_chi_tiet',$data, TRUE),'3col');
				
	}
    public function thong_ke_dau_so() 
	{
		$data = array();
        
        $data = array();
       // $this->output->enable_profiler(TRUE);
        $data['start_date']= $this->input->post('start_date');
        $data['end_date'] = $this->input->post('end_date');
	    $this->form_validation->set_rules('start_date', 'start_date', 'required');
        $this->form_validation->set_rules('end_date', 'end_date', 'required');
          if($this->form_validation->run() == TRUE) 
        {
            //type =1S?p x?p theo t?n su?t 2S?p x?p theo th? t?
            
            $start_date=$this->util->ConvertDateXuoi($data['start_date']);
            $end_date=$this->util->ConvertDateXuoi($data['end_date']);
            $start_date_int= strtotime($start_date);
            $end_date_int= strtotime($end_date);
             
            $thongkedauso= $this->db->query(" SELECT dau0,dau1,dau2,dau3,dau4,ngayquay FROM `soxo_mega` WHERE trangthai=1 and ngayquayint>='$start_date_int' and ngayquayint<='$end_date_int' order by ngayquayint desc  ");
            $data['thongkedauso'] = $thongkedauso;
           }
        else
        {
           
            $start_date=$this->util->ConvertDateXuoi(date($this->startdate_default));
            $end_date=$this->util->ConvertDateXuoi(date("d/m/Y"));
            $data['start_date']=date($this->startdate_default);
            $data['end_date'] =date("d/m/Y");
    	 
            $start_date_int= strtotime($start_date);
            $end_date_int= strtotime($end_date);
            $sort="solan"; 
           
            
            $thongkedauso= $this->db->query(" SELECT dau0,dau1,dau2,dau3,dau4,ngayquay FROM `soxo_mega` WHERE trangthai=1 and ngayquayint>='$start_date_int' and ngayquayint<='$end_date_int' order by ngayquayint desc  ");
            $data['thongkedauso'] = $thongkedauso;
            
        }
         
        
		
		$this->render($this->load->view('thongke/thong_ke_dau_so',$data, TRUE),'3col');
				
	}
    public function thong_ke_duoi_so() 
	{
		$data = array();
        
        $data = array();
       // $this->output->enable_profiler(TRUE);
        $data['start_date']= $this->input->post('start_date');
        $data['end_date'] = $this->input->post('end_date');
	    $this->form_validation->set_rules('start_date', 'start_date', 'required');
        $this->form_validation->set_rules('end_date', 'end_date', 'required');
          if($this->form_validation->run() == TRUE) 
        {
            //type =1S?p x?p theo t?n su?t 2S?p x?p theo th? t?
            
            $start_date=$this->util->ConvertDateXuoi($data['start_date']);
            $end_date=$this->util->ConvertDateXuoi($data['end_date']);
            $start_date_int= strtotime($start_date);
            $end_date_int= strtotime($end_date);
             
            $thongkedauso= $this->db->query(" SELECT duoi0,duoi1,duoi2,duoi3,duoi4,duoi5,duoi6,duoi7,duoi8,duoi9,ngayquay FROM `soxo_mega` WHERE trangthai=1 and ngayquayint>='$start_date_int' and ngayquayint<='$end_date_int' order by ngayquayint desc  ");
            $data['thongkedauso'] = $thongkedauso;
           }
        else
        {
           
            $start_date=$this->util->ConvertDateXuoi(date($this->startdate_default));
            $end_date=$this->util->ConvertDateXuoi(date("d/m/Y"));
            $data['start_date']=date($this->startdate_default);
            $data['end_date'] =date("d/m/Y");
    	 
            $start_date_int= strtotime($start_date);
            $end_date_int= strtotime($end_date);
            $sort="solan"; 
           
            
            $thongkedauso= $this->db->query("  SELECT duoi0,duoi1,duoi2,duoi3,duoi4,duoi5,duoi6,duoi7,duoi8,duoi9,ngayquay  FROM `soxo_mega` WHERE trangthai=1 and ngayquayint>='$start_date_int' and ngayquayint<='$end_date_int' order by ngayquayint desc  ");
            $data['thongkedauso'] = $thongkedauso;
            
        }
         
        
		
		$this->render($this->load->view('thongke/thong_ke_duoi_so',$data, TRUE),'3col');
				
	}
    public function thong_ke_chan_le() 
	{
		$data = array();
        
        $data = array();
       // $this->output->enable_profiler(TRUE);
        $data['start_date']= $this->input->post('start_date');
        $data['end_date'] = $this->input->post('end_date');
	    $this->form_validation->set_rules('start_date', 'start_date', 'required');
        $this->form_validation->set_rules('end_date', 'end_date', 'required');
          if($this->form_validation->run() == TRUE) 
        {
            //type =1S?p x?p theo t?n su?t 2S?p x?p theo th? t?
            
            $start_date=$this->util->ConvertDateXuoi($data['start_date']);
            $end_date=$this->util->ConvertDateXuoi($data['end_date']);
            $start_date_int= strtotime($start_date);
            $end_date_int= strtotime($end_date);
             
            $thongkedauso= $this->db->query(" SELECT chan,le,ngayquay FROM `soxo_mega` WHERE trangthai=1 and ngayquayint>='$start_date_int' and ngayquayint<='$end_date_int' order by ngayquayint desc  ");
            $data['thongkedauso'] = $thongkedauso;
           }
        else
        {
           
            $start_date=$this->util->ConvertDateXuoi(date($this->startdate_default));
            $end_date=$this->util->ConvertDateXuoi(date("d/m/Y"));
            $data['start_date']=date($this->startdate_default);
            $data['end_date'] =date("d/m/Y");
    	 
            $start_date_int= strtotime($start_date);
            $end_date_int= strtotime($end_date);
           
           
            
            $thongkedauso= $this->db->query("  SELECT chan,le,ngayquay FROM `soxo_mega` WHERE trangthai=1 and ngayquayint>='$start_date_int' and ngayquayint<='$end_date_int' order by ngayquayint desc  ");
            $data['thongkedauso'] = $thongkedauso;
            
        }
         
        
		
		$this->render($this->load->view('thongke/thong_ke_chan_le',$data, TRUE),'3col');
				
	}
    public function thong_ke_jackpot() 
	{
		$data = array();
        $data = array();
        $data['start_date']= $this->input->post('start_date');
        $data['end_date'] = $this->input->post('end_date');
        $data['number'] = $this->input->post('number');
	    $this->form_validation->set_rules('start_date', 'start_date', 'required');
        $this->form_validation->set_rules('end_date', 'end_date', 'required');
		
		if($this->form_validation->run() == TRUE) 
        {
            //type =1S?p x?p theo t?n su?t 2S?p x?p theo th? t?
            
            $start_date=$this->util->ConvertDateXuoi($data['start_date']);
            $end_date=$this->util->ConvertDateXuoi($data['end_date']);
            $start_date_int= strtotime($start_date);
            $end_date_int= strtotime($end_date);
             
            $last40curent= $this->db->query(" SELECT `thuquay`, `ngayquayint`, `ngayquay`, `giatrijackport`, `chuoitrunggiai`,`sojackport`,`id` FROM `soxo_mega` WHERE  trangthai=1 and ngayquayint>='$start_date_int' and ngayquayint<='$end_date_int' order by ngayquayint desc");
            
        }
        else
        {
           
            $start_date=$this->util->ConvertDateXuoi(date($this->startdate_default));
            $end_date=$this->util->ConvertDateXuoi(date("d/m/Y"));
            $data['start_date']=date($this->startdate_default);
            $data['end_date'] =date("d/m/Y");
            $start_date_int= strtotime($start_date);
            $end_date_int= strtotime($end_date);
            
    	    $last40curent= $this->db->query(" SELECT `thuquay`, `ngayquayint`, `ngayquay`, `giatrijackport`, `chuoitrunggiai`,`sojackport`,`id` FROM `soxo_mega` WHERE  trangthai=1 and ngayquayint>='$start_date_int' and ngayquayint<='$end_date_int' order by ngayquayint desc");
            
            
        }
		
		
        //$last40curent = $this->category->get_category_where(array('trangthai'=>1), array('ngayquayint' => 'desc'), array('max'=> 40, 'begin' => 0));
        $data['last40curent'] = $last40curent;
        
		$this->render($this->load->view('thongke/thong_ke_jackpot',$data, TRUE),'3col');
				
	}
    public function thong_ke_tan_suat($tungay=null,$denngay=null,$sapxep=null) 
	{

		$data = array();
       // $this->output->enable_profiler(TRUE);
        $data['start_date']= $this->input->post('start_date');
        $data['end_date'] = $this->input->post('end_date');
		$data['type'] = $this->input->post('type');
           
          //echo "<pre>sdfsdf";
//           // print_r($thongketansuat->reult());
//           print_r($start_date);
//            echo "</pre>";
//            exit;
        $this->form_validation->set_rules('start_date', 'start_date', 'required');
        $this->form_validation->set_rules('end_date', 'end_date', 'required');
        $this->form_validation->set_rules('type', 'type', 'required');
        
        if($this->form_validation->run() == TRUE) 
        {
            //type =1S?p x?p theo t?n su?t 2S?p x?p theo th? t?
            
            $start_date=$this->util->ConvertDateXuoi($data['start_date']);
            $end_date=$this->util->ConvertDateXuoi($data['end_date']);
            $type=($data['type']);
           
            $start_date_int= strtotime($start_date);
            $end_date_int= strtotime($end_date);
            $sort="solan"; 
            if($type==1)
            {
                $sort="solan desc";
            }
            else
            {
                 $sort="so_trung asc";;
            }
            $thongketansuat= $this->db->query("select b.so_trung,count(1) as solan from ( SELECT id FROM `soxo_mega` WHERE trangthai=1 and ngayquayint>='$start_date_int' and ngayquayint<='$end_date_int' order by ngayquayint desc  ) a, chitietso_mega b where a.id=b.id_soxo_mega  and b.trangthai=1 group by so_trung order by $sort ");
            $data['thongketansuat'] = $thongketansuat;
           
            // echo "<pre>sss";
//              print_r($data);
//            print_r($thongketansuat->result());
//           print_r($start_date);
//            echo "</pre>";
//            exit;
        }
        else
        {
           
            $start_date=$this->util->ConvertDateXuoi(date($this->startdate_default));
            $end_date=$this->util->ConvertDateXuoi(date("d/m/Y"));
            $data['start_date']=date($this->startdate_default);
            $data['end_date'] =date("d/m/Y");
    		$data['type'] = 1;
            $type=1;
           
            $start_date_int= strtotime($start_date);
            $end_date_int= strtotime($end_date);
            $sort="solan"; 
            if($type==1)
            {
                $sort="solan desc";
            }
            else
            {
                 $sort="so_trung asc";;
            }
            
            $thongketansuat= $this->db->query("select b.so_trung,count(1) as solan from ( SELECT id FROM `soxo_mega` WHERE trangthai=1 and ngayquayint>='$start_date_int' and ngayquayint<='$end_date_int' order by ngayquayint desc  ) a, chitietso_mega b where a.id=b.id_soxo_mega  and b.trangthai=1 group by so_trung order by $sort ");
            $data['thongketansuat'] = $thongketansuat;
            
        }
         
        $this->render($this->load->view('thongke/thong_ke_tan_suat',$data, TRUE),'3col');
		
				
	}
    public function thong_ke() 
	{
		$data = array();
		$this->render($this->load->view('thongke/thong_ke',$data, TRUE),'3col');
				
	}
    public function thong_ke_ma_tran_mega() 
	{
		$data = array();
		$this->render($this->load->view('thongke/nangcap',$data, TRUE),'3col');
				
	}
    public function thong_ke_ban_tan_suat_chi_tiet() 
	{
		$data = array();
		$this->render($this->load->view('thongke/nangcap',$data, TRUE),'3col');
				
	}
    public function thong_ke_quay_thu_mega() 
	{
		$data = array();
        $giaimoinhat = $this->category->get_category_where(array('trangthai'=>1), array('ngayquayint' => 'desc'), array('max'=> 1, 'begin' => 0));
       	$data['giaimoinhat'] = $giaimoinhat;
		$this->render($this->load->view('thongke/quaythumega',$data, TRUE),'3col');
				
	}
    public function thong_ke_max4d_thong_ke_tan_suat() 
	{
		$data = array();
		$this->render($this->load->view('thongke/nangcap',$data, TRUE),'3col');
				
	}
	public function thong_ke_quay_thu_max4d() 
	{
		$data = array();
		$this->render($this->load->view('thongke/quaythumax',$data, TRUE),'3col');
				
	}
 
}
// End file
// Local applocation/controllers/product.php