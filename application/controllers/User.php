<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
  public function __construct()
	{
		parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
		$this->load->library('Template');
		$this->load->model('All_model');
		$this->load->helper('roof');
		// $this->load->helper('url');
		// if ($this->session->userdata('locked')== TRUE) {
		// 		redirect(base_url().'Auth/locked');
		// }elseif ($this->session->userdata('logged')!= TRUE) {
		// 	redirect(base_url().'Auth');
		// }
	}
	public function index()
	{
    $data = array('js' =>'' );
		$this->template->user('user/dashboard/index',$data);
	}

  public function realtime_grafik_dahboard2()
  {
    $Now = date("Y-m-d H:i:s");
    $sekarang = strtotime($Now);
    $dateNow = date("Y-m-d");
    $awal = strtotime($dateNow.' 00:00:00');
    $value1 =array();
    $value2 =array();
    $value3 =array();
    $value4 =array();
    $sum1=0;
    $sum2=0;
    for ($i=0; $i <287 ; $i++) {
      $akhir = $awal+(5*60);
      $tgl_awal = $dateNow." ".date("H:i:s", $awal);
      $tgl_akhir =$dateNow." ".date("H:i:s", $akhir);

      $jumlah1 = $this->db->select_sum('POWER')->where('FLAG','pln')->where('ONINSERT >=',$tgl_awal)->where('ONINSERT <=',$tgl_akhir)->get('data_inout')->row();
      $banyak1 = $this->db->where('FLAG','pln')->where('ONINSERT >=',$tgl_awal)->where('ONINSERT <=',$tgl_akhir)->get('data_inout')->num_rows();

      $jumlah2 = $this->db->select_sum('POWER')->where('FLAG','pv')->where('ONINSERT >=',$tgl_awal)->where('ONINSERT <=',$tgl_akhir)->get('data_inout')->row();
      $banyak2 = $this->db->where('FLAG','pv')->where('ONINSERT >=',$tgl_awal)->where('ONINSERT <=',$tgl_akhir)->get('data_inout')->num_rows();

      $jumlah3 = $this->db->select_sum('POWER')->where('IDSENSOR','3')->where('ONINSERT >=',$tgl_awal)->where('ONINSERT <=',$tgl_akhir)->get('data_inout')->row();
      $banyak3 = $this->db->where('IDSENSOR','3')->where('ONINSERT >=',$tgl_awal)->where('ONINSERT <=',$tgl_akhir)->get('data_inout')->num_rows();

      $jumlah4 = $this->db->select_sum('POWER')->where('IDSENSOR','4')->where('ONINSERT >=',$tgl_awal)->where('ONINSERT <=',$tgl_akhir)->get('data_inout')->row();
      $banyak4 = $this->db->where('IDSENSOR','4')->where('ONINSERT >=',$tgl_awal)->where('ONINSERT <=',$tgl_akhir)->get('data_inout')->num_rows();

      if ($banyak1=='0' ) {
        $rata1=0;
      }else {
        $rata1 = $jumlah1->POWER/$banyak1;
      }

      if ($banyak2=='0' ) {
        $rata2=0;
      }else {
        $rata2 = $jumlah2->POWER/$banyak2;
      }

      if ($banyak3=='0' ) {
        $rata3=0;
      }else {
        $rata3 = $jumlah3->POWER/$banyak3;
      }

      if ($banyak4=='0' ) {
        $rata4=0;
      }else {
        $rata4 = $jumlah4->POWER/$banyak4;
      }

      $awal= $akhir;

      $t1['x'] = strtotime($tgl_akhir);
      $t1['y'] = $rata1;

      $t2['x'] = strtotime($tgl_akhir);
      $t2['y'] = $rata2;

      $t3['x'] = strtotime($tgl_akhir);
      $t3['y'] = $rata3;
      $t4['x'] = strtotime($tgl_akhir);
      $t4['y'] = $rata4;

      $sum1=$sum1+$rata1;
      $sum2=$sum2+$rata2;

      $mirip[$i] = abs(strtotime($tgl_akhir) - $sekarang);
      array_push($value1, $t1);
      array_push($value2, $t2);

      array_push($value3, $t3);
      array_push($value4, $t4);

    }
    $keyNow =array_keys($mirip, min($mirip));
    $realNow1 = $value1[$keyNow[0]]['y'];
    $realNow2 = $value2[$keyNow[0]]['y'];

   echo json_encode(array($value1,$value2,$realNow1,$realNow2,$sum1,$sum2,$value3,$value4));
  }
  // public function realtime_konsProd()
  // {
  //   $cari= 3;
  //   $data = array(0, 5, 3, 10, 11, 12, 20);
  //   foreach ($data as $i) {
  //    $mirip[$i] = abs($i - $cari);
  //   }
  //   asort($mirip);
  //
  //  echo json_encode($mirip);
  //  $keys = array_keys( $mirip);
  //  echo $keys[0];
  // }

  // public function realtime_grafik_dahboard()
  // {
  //   $awal = strtotime('00:00:00');
	// 	$value =array();
	// 	$label =array();
	// 	for ($i=0; $i <287 ; $i++) {
	// 		$akhir = $awal+(5*60);
	// 		$dateNow = date("Y-m-d");
	// 		$tgl_awal = $dateNow." ".date("H:i:s", $awal);
	// 		$tgl_akhir =$dateNow." ".date("H:i:s", $akhir);
  //
	// 		$jumlah = $this->db->select_sum('POWER')->where('ONINSERT >=',$tgl_awal)->where('ONINSERT <=',$tgl_akhir)->get('data_inout')->row();
	// 		$banyak = $this->db->where('ONINSERT >=',$tgl_awal)->where('ONINSERT <=',$tgl_akhir)->get('data_inout')->num_rows();
  //
	// 		if ($banyak=='0' ) {
	// 			$rata=0;
	// 		}else {
	// 			$rata = $jumlah->POWER/$banyak;
	// 		}
	// 		$awal= $akhir;
	// 		array_push($value, $rata);
	// 		array_push($label, '');
	// 	}
  //
	// 	echo json_encode(array($value,$label));
  // }

  public function realtime_grafik_produksi_harian()
  {
    $Now = date("Y-m-d H:i:s");
    $sekarang = strtotime($Now);
    $dateNow = date("Y-m-d");
    $awal = strtotime('01:00:00');
  	$value =array();
  	$label =array();
    $sum=0;
    $value1 =array();
    array_push($value, 0);
  	for ($i=0; $i <12 ; $i++) {
  		$akhir = $awal+(120*60);
  		$dateNow = date("Y-m-d");
  		$tgl_awal = $dateNow." ".date('H:i:s', $awal);
  		$tgl_akhir =$dateNow." ".date('H:i:s', $akhir);

  		$jumlah = $this->db->select_sum('POWER')->where('FLAG','pv')->where('ONINSERT >=',$tgl_awal)->where('ONINSERT <=',$tgl_akhir)->get('data_inout')->row();
  		// $banyak = $this->db->where('ONINSERT >=',$tgl_awal)->where('ONINSERT <=',$tgl_akhir)->get('data_inout')->num_rows();

  		// if ($banyak=='0' ) {
  		// 	$rata=0;
  		// }else {
  		// 	$rata = $jumlah->POWER/$banyak;
  		// }
  		$awal= $akhir;
      $power = 0;
      if (!empty($jumlah->POWER)) {
        $power =$jumlah->POWER;
      }

      $sum=$sum+$power;

      $mirip[$i] = abs(strtotime($tgl_akhir) - $sekarang);
  		array_push($value, $power);
  		array_push($label, '');

      $t1['x'] = strtotime($tgl_akhir);
      $t1['y'] = $power;
      array_push($value1, $t1);
  	}

    $keyNow =array_keys($mirip, min($mirip));
    $realNow = $value1[$keyNow[0]]['y'];

  	echo json_encode(array($value,$label,$realNow,$sum));
  }

  public function realtime_grafik_produksi_mingguan()
  {
    $date = date("Y-m-d");
  	$value =array();
  	$label =array();
    $sum=0;
  	for ($i=1; $i < 8 ; $i++) {
      $dayofweek = date('w', strtotime($date));
      $tgl    = date('Y-m-d', strtotime(($i - $dayofweek).' day', strtotime($date)));
  		$jumlah = $this->db->select_sum('POWER')->where('FLAG','pv')->like('ONINSERT',$tgl)->get('data_inout')->row();

      $power = 0;
      if (!empty($jumlah->POWER)) {
        $power =$jumlah->POWER;
      }

      $sum=$sum+$power;

  		array_push($value, $power);
  		array_push($label, tanggal_indo($tgl));

  	}
  	echo json_encode(array($value,$label,$sum));
  }

  public function realtime_grafik_produksi_bulanan()
  {
    $endDate = date('t');

  	$value =array();
  	$label =array();
    $sum=0;

    $insWeek=0;
    for ($i=1; $i <= $endDate; $i++) {
      $date = strtotime(date('Y-m').'-'.$i);
      $week = weekOfMonth($date);
      if ($week != $insWeek) {
        $powerInWeek = 0;
        for ($ii=1; $ii < 8 ; $ii++) {
          $dayofweek = date('w', $date);
          $tgl    = date('Y-m-d', strtotime(($ii - $dayofweek).' day', $date));
          $jumlah = $this->db->select_sum('POWER')->where('FLAG','pv')->like('ONINSERT',$tgl)->get('data_inout')->row();

          $power = 0;
          if (!empty($jumlah->POWER)) {
            $power =$jumlah->POWER;
          }

          $powerInWeek=$powerInWeek+$power;
        }

        $sum=$sum+$powerInWeek;

    		array_push($value, $powerInWeek);
    		array_push($label, 'Minggu '.$week);
        $insWeek = $week;
      }
    }
  	echo json_encode(array($value,$label,$sum));
  }

  public function realtime_grafik_produksi_tahunan()
  {
    $Y= date("Y");
    $value =array();
    $label =array();
    $sum=0;
    for ($i=1; $i <= 12 ; $i++) {
      if ($i<= 9) {
					$s='-0';
				}else {
					$s='-';
				}
      $jumlah = $this->db->select_sum('POWER')->where('FLAG','pv')->like('ONINSERT',$Y.$s.$i)->get('data_inout')->row();

      $power = 0;
      if (!empty($jumlah->POWER)) {
        $power =$jumlah->POWER;
      }

      $sum=$sum+$power;

      array_push($value, $power);
      array_push($label, nama_bulan($i));

    }
    echo json_encode(array($value,$label,$sum));
  }

  public function coba($value='')
  {
    $date = '2019-10-28';
    $dayofweek = date('w', strtotime($date));
    $tgl    = date('Y-m-d', strtotime((5 - $dayofweek).' day', strtotime($date)));
    echo $tgl;
    echo $this->weekOfMonth(strtotime($date));

  }





  public function produksi()
  {
    $data = array('js' =>'produksi' );
    $this->template->user('user/produksi/index',$data);
  }

  public function konsumsi()
  {
    $data = array('js' =>'konsumsi' );
    $this->template->user('user/konsumsi/index',$data);
  }

  public function realtime_grafik_konsumsi_harian()
  {
    $Now = date("Y-m-d H:i:s");
    $sekarang = strtotime($Now);
    $dateNow = date("Y-m-d");
    $awal = strtotime('01:00:00');
    $value =array();
    $label =array();
    $sum=0;
    $value1 =array();
    array_push($value, 0);
    for ($i=0; $i <12 ; $i++) {
      $akhir = $awal+(120*60);
      $dateNow = date("Y-m-d");
      $tgl_awal = $dateNow." ".date('H:i:s', $awal);
      $tgl_akhir =$dateNow." ".date('H:i:s', $akhir);

      $jumlah = $this->db->select_sum('POWER')->where('FLAG','pln')->where('ONINSERT >=',$tgl_awal)->where('ONINSERT <=',$tgl_akhir)->get('data_inout')->row();
      // $banyak = $this->db->where('ONINSERT >=',$tgl_awal)->where('ONINSERT <=',$tgl_akhir)->get('data_inout')->num_rows();

      // if ($banyak=='0' ) {
      // 	$rata=0;
      // }else {
      // 	$rata = $jumlah->POWER/$banyak;
      // }
      $awal= $akhir;
      $power = 0;
      if (!empty($jumlah->POWER)) {
        $power =$jumlah->POWER;
      }

      $sum=$sum+$power;

      $mirip[$i] = abs(strtotime($tgl_akhir) - $sekarang);
      array_push($value, $power);
      array_push($label, '');

      $t1['x'] = strtotime($tgl_akhir);
      $t1['y'] = $power;
      array_push($value1, $t1);
    }

    $keyNow =array_keys($mirip, min($mirip));
    $realNow = $value1[$keyNow[0]]['y'];

    echo json_encode(array($value,$label,$realNow,$sum));
  }

  public function performa()
  {
    $data = array('js' =>'' );
    $this->template->user('user/performa/index',$data);
  }

  public function penghematan()
  {
    $data = array('js' =>'' );
    $this->template->user('user/penghematan/index',$data);
  }

  public function baterai()
  {
    $data = array('js' =>'' );
    $this->template->user('user/baterai/index',$data);
  }

  public function laporan()
  {
    $data = array('js' =>'' );
    $this->template->user('user/laporan/index',$data);
  }

  public function penjadwalan()
  {
    $where = array('ISACTIVE' =>'1','FLAG' =>'tools', );
    $data = array('data' => $this->All_model->ambil('sensor',$where),'js'=>'' );
    $this->template->user('user/penjadwalan/index',$data);
  }

  public function controlSensor($id='',$val='')
  {
    $data = array('CONTROL' => $val);
    $update = $this->All_model->update_data('sensor',$data, array('IDSENSOR'=>$id));
    if ($update) {
      echo "1";
     }else {
      echo "0";
      }
  }

  public function newTools()
  {
    $data = array(
      'KODE' => $this->input->post('KODE') ,
      'NAME' => $this->input->post('NAME') ,
      'DAYA' => $this->input->post('DAYA') ,
      'CONTROL' => $this->input->post('CONTROL') ,
   );
   $insert = $this->All_model->insert_data('sensor',$data);
   if ($insert) {
     $this->session->set_flashdata('message','toastr.success("Success insert data.", "Success!");');
     redirect(base_url('User/penjadwalan'));
    }else {
      $this->session->set_flashdata('message','toastr.error("Failed insert data.", "Failed!");');
      redirect(base_url('User/penjadwalan'));
    }
  }

  public function editTools($id='')
  {
    $dt = $this->db->where('IDSENSOR',$id)->get('sensor')->row();
   echo json_encode($dt);
  }

  public function updateTools()
  {
    $data = array(
      'KODE' => $this->input->post('KODE') ,
      'NAME' => $this->input->post('NAME') ,
      'DAYA' => $this->input->post('DAYA') ,
      'CONTROL' => $this->input->post('CONTROL') ,
   );
   $update = $this->All_model->update_data('sensor',$data,array('IDSENSOR'=> $this->input->post('IDSENSOR')));
   if ($update) {
     $this->session->set_flashdata('message','toastr.success("Success update data.", "Success!");');
     redirect(base_url('User/penjadwalan'));
    }else {
      $this->session->set_flashdata('message','toastr.error("Failed update data.", "Failed!");');
      redirect(base_url('User/penjadwalan'));
    }
  }

  public function hapusTools($id='')
  {
    $data = array('ISACTIVE' => '0');
    $update = $this->All_model->update_data('sensor',$data, array('IDSENSOR'=>$id));
    if ($update) {
      $this->session->set_flashdata('message','toastr.success("Success delete data.", "Success!");');
      redirect(base_url('User/penjadwalan'));
     }else {
       $this->session->set_flashdata('message','toastr.error("Failed delete data.", "Failed!");');
       redirect(base_url('User/penjadwalan'));
      }
  }

  public function pengaturan()
  {
    $this->template->user('user/pengaturan/index');
  }

  public function upload_img($value)
  {
    $kode = round(microtime(true) * 1000);
    $config['upload_path'] = './assets/upload/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size']	= '8000';
    $config['file_name'] = 'IMG_'.$kode;
    $this->upload->initialize($config);
    if (!$this->upload->do_upload($value))
        {
          return array( false, '' );
        }
    else
          {
            $fn = $this->upload->data();
            $nama = $fn['file_name'];
            return array( true, $nama );
          }
  }
}
