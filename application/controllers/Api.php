<?php

require APPPATH . '/libraries/REST_Controller.php';
Class Api extends REST_Controller{
  function __construct($config = 'rest') {
  parent::__construct($config);
  date_default_timezone_set('Asia/Jakarta');
  if (isset($_SERVER['HTTP_ORIGIN']))
  {
     header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
     header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
  }

  if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS')
  {
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, PUT");

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
        exit(0);
  }
  }


    function kirim_data_get(){
    $stt = $this->db->where('KODE',$_GET['id'])->get('sensor');
    if ($stt->num_rows()>0) {
      $get = $stt->row();
      $data=array(
        "IDSENSOR"  => $get->IDSENSOR,
  			"POWER"  =>$_GET['p'],
        "VOLTAGE"  =>$_GET['v'],
        "CURRENT"  =>$_GET['i'],
        "FLAG"  =>$_GET['flag'],
        "ONINSERT"  =>date('Y-m-d H:i:s')
  		);
  		$insert = $this->db->insert('data_inout',$data);
      if($insert){
          $data = array ('status'=>'success insert');
          $this->response($data,200);
      }else{
          $data = array ('status'=>'failed insert');
          $this->response($data,502);
      }
    }else {
      $data = array ('status'=>'kode not found.');
      $this->response($data,502);
    }
    }

    function ambil_status_get(){
      $stt = $this->db->where('KODE',$_GET['kode'])->get('sensor');
      if ($stt->num_rows()>0) {
        $status = $stt->row();
        $data = array ('is_status'=>$status->ISACTIVE);
        $this->response($data,200);
      }else {
        $data = array ('status'=>'kode not found.');
        $this->response($data,502);
      }
    }

    function set_status_get(){
      $stt = $this->db->where('KODE',$_GET['kode'])->get('sensor');
      if ($stt->num_rows()>0) {
        $data=array(
          "ISACTIVE"  =>$_GET['status']
        );
        $update = $this->db->update('sensor',$data,array('KODE'=>$_GET['kode']));
        if($update){
            $data = array ('status'=>'success update');
            $this->response($data,200);
        }else{
            $data = array ('status'=>'failed update');
            $this->response($data,502);
        }
      }else {
        $data = array ('status'=>'kode not found.');
        $this->response($data,502);
      }
    }
}
?>
