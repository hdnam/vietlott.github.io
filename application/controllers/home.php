<?php

if (!defined('BASEPATH'))
    exit('Woa...Not find system folder');

/* -----------------------------------------------
  # Rao_vat version 1.0
  # Home Controler
  # Extends CI_Controller
  # Author: Nguyen Duc Hung - http://tinagroup.net
  # Create date: 28/04/2011
  ------------------------------------------------ */
require_once APPPATH . 'third_party/public_controller' . EXT;

class Home extends Public_controller {

    function __construct() {

        parent:: __construct();
    }

    public function index() {
        $data = array();
        $giaidangquay = $this->category->get_category_where(array('trangthai' => 0), array('ngayquayint' => 'desc'), array('max' => 1, 'begin' => 0));
        $giaimoinhat = $this->category->get_category_where(array('trangthai' => 1), array('ngayquayint' => 'desc'), array('max' => 1, 'begin' => 0));
        $last5curent = $this->category->get_category_where(array('trangthai' => 1), array('ngayquayint' => 'desc'), array('max' => 5, 'begin' => 0));
        $top12in20 = $this->db->query("select b.so_trung,count(1) as solan from ( SELECT id FROM `soxo_mega` WHERE trangthai=1 order by ngayquayint desc limit 0,20 ) a, chitietso_mega b where a.id=b.id_soxo_mega and b.trangthai=1 group by so_trung order by solan desc limit 0,12");
        $best12in20 = $this->db->query("select b.so_trung,count(1) as solan from ( SELECT id FROM `soxo_mega` WHERE trangthai=1 order by ngayquayint desc limit 0,20 ) a, chitietso_mega b where a.id=b.id_soxo_mega  and b.trangthai=1 group by so_trung order by solan asc limit 0,12");
        $giaimoinhatsoxomax = $this->soxomax->get_soxomax_where(array('trangthai' => 1), array('ngayquayint' => 'desc'), array('max' => 1, 'begin' => 0));
        $giaisoxomax_dangquay = $this->soxomax->get_soxomax_where(array('trangthai' => 0), array('ngayquayint' => 'desc'), array('max' => 1, 'begin' => 0));
        $data['giaimoinhat'] = $giaimoinhat;
        $data['slide'] = $this->slide->get_slide_where(array('position' => 2, 'active' => 1), array('ord' => 'asc'), null)->result();
        $data['last5curent'] = $last5curent;
        $data['top12in20'] = $top12in20;
        $data['best12in20'] = $best12in20;
        $data['giaimoinhatsoxomax'] = $giaimoinhatsoxomax;
        $data['giaisoxomax_dangquay'] = $giaisoxomax_dangquay;
        $data['giaidangquay'] = $giaidangquay;
        $this->render($this->load->view('home', $data, TRUE), '3col');
    }

    public function view($date_select) {
        $data = array();
        $date_select = trim($date_select);
        $array_date_select = explode("-", $date_select);
        $ngay = intval(trim($array_date_select[0]));
        if ($ngay < 10)
            $ngay = "0" . $ngay;
        $data_date = trim($array_date_select[2]) . "-" . trim($array_date_select[1]) . "-" . $ngay;
        $ngayquayint = strtotime($data_date);
        $giaimoinhat = $this->category->get_category_where(array('ngayquayint' => $ngayquayint), array('ngayquayint' => 'desc'), array('max' => 1, 'begin' => 0));
        $data['giaimoinhat'] = $giaimoinhat;
        $this->render($this->load->view('ketquasoxo/view', $data, TRUE), '3col');
    }

    public function view_max($date_select) {
        $data = array();
        $date_select = trim($date_select);
        $array_date_select = explode("-", $date_select);
        $ngay = intval(trim($array_date_select[0]));
        if ($ngay < 10)
            $ngay = "0" . $ngay;
        $data_date = trim($array_date_select[2]) . "-" . trim($array_date_select[1]) . "-" . $ngay;
        $ngayquayint = strtotime($data_date);
        $giaimoinhat = $this->soxomax->get_soxomax_where(array('ngayquayint' => $ngayquayint), array('ngayquayint' => 'desc'), array('max' => 1, 'begin' => 0));
        $data['giaimoinhat'] = $giaimoinhat;
        $this->render($this->load->view('ketquasoxo/view_max', $data, TRUE), '3col');
    }

    public function get_mega_realtime() {
        $giaidangquay = $this->category->get_category_where(array('trangthai' => 0, 'realtime' => 1), array('ngayquayint' => 'desc'), array('max' => 1, 'begin' => 0));
        if ($giaidangquay->num_rows() > 0) {
            $chuoitrunggiai = trim($giaidangquay->row()->chuoitrunggiai);
            $array_sotrungthuong = explode("-", $chuoitrunggiai);
            $stt = 0;
            $array_sotrungthuong_json['so' . $stt] = 0;
            if (is_array($array_sotrungthuong)) {
                foreach ($array_sotrungthuong as $kqarray_sotrungthuong) {
                    if ($kqarray_sotrungthuong != "") {
                        $stt++;
                        $kqarray_sotrungthuong = trim($kqarray_sotrungthuong);
                        if ($kqarray_sotrungthuong != '' and $kqarray_sotrungthuong != 0)
                            $array_sotrungthuong_json['so' . $stt] = $kqarray_sotrungthuong;
                    }
                }
            }
        }
        echo json_encode($array_sotrungthuong_json);
    }

    public function get_max_realtime() {
        $max_dangquay = $this->soxomax->get_soxomax_where(array('trangthai' => 0, 'realtime' => 1), array('ngayquayint' => 'desc'), array('max' => 1, 'begin' => 0));
        if ($max_dangquay->num_rows() > 0) {
            //$giaidangquay->row();
            $giainhat = trim($max_dangquay->row()->giainhat);
            $giainhi1 = trim($max_dangquay->row()->giainhi1);
            $giainhi2 = trim($max_dangquay->row()->giainhi2);
            $giaiba1 = trim($max_dangquay->row()->giaiba1);
            $giaiba2 = trim($max_dangquay->row()->giaiba2);
            $giaiba3 = trim($max_dangquay->row()->giaiba3);
            $stt = 0;
            $array_sotrungthuong_json['so'] = 0;
            if ($giainhat != '' and $giainhat != 0) {
                $array_sotrungthuong_json['giainhat'] = $giainhat;
            }
            if ($giainhi1 != '' and $giainhi1 != 0) {
                $array_sotrungthuong_json['giainhi1'] = $giainhi1;
            }
            if ($giainhi2 != '' and $giainhi2 != 0) {
                $array_sotrungthuong_json['giainhi2'] = $giainhi2;
            }
            if ($giaiba1 != '' and $giaiba1 != 0) {
                $array_sotrungthuong_json['giaiba1'] = $giaiba1;
            }
            if ($giaiba2 != '' and $giaiba2 != 0) {
                $array_sotrungthuong_json['giaiba2'] = $giaiba2;
            }
            if ($giaiba3 != '' and $giaiba3 != 0) {
                $array_sotrungthuong_json['giaiba3'] = $giaiba3;
            }
        }
        echo json_encode($array_sotrungthuong_json);
    }

    public function trang404() {
        $data = array();
        $this->load->view('trang404', $data);
    }

}
