<?php
function get_last_daya_tools($id='')
{
  $ci =& get_instance();
  $ci->load->database();
  $result = $ci->db->order_by('IDINOUT','DESC')->limit(1)->get_where('data_inout',array('IDSENSOR' => $id ));
  foreach ($result->result() as $c) {
      return $c->POWER;
  }
}

function get_last_daya_oneday_tools($id='')
{
  $ci =& get_instance();
  $ci->load->database();
  $dateNow = date('Y-m-d');
  $hourNow =date('H');
  $result =$ci->db->select_sum('POWER')->like('ONINSERT',$dateNow)->where('IDSENSOR',$id)->get('data_inout')->row();
  return $result->POWER/$hourNow;
}

function find_max_harian()
{
  $data=array();
  $arrayId=array();
  $ci =& get_instance();
  $ci->load->database();
  $result = $ci->db->order_by('IDSENSOR','DESC')->get('sensor');
  foreach ($result->result() as $c) {
      array_push($data, get_last_daya_oneday_tools($c->IDSENSOR));
      array_push($arrayId, $c->IDSENSOR);
  }
  $max = max($data);
  $key = array_search($max, $data);

  $id = $arrayId[$key];

  return array(find_kode_tools($id),$max);
}

function find_kode_tools($id='')
{
  $ci =& get_instance();
  $ci->load->database();
  $result = $ci->db->where('IDSENSOR',$id)->order_by('IDSENSOR','DESC')->get('sensor');
  foreach ($result->result() as $c) {
      return $c->KODE;
  }
}
function find_max_daya_tools()
{
  $ci =& get_instance();
  $ci->load->database();
  $result = $ci->db->order_by('DAYA','DESC')->limit(1)->get('sensor');
  foreach ($result->result() as $c) {
      return array($c->KODE,$c->DAYA);
  }
}

function tanggal_indo($tanggal, $cetak_hari = false)
{
	$hari = array ( 1 =>    'Senin',
				'Selasa',
				'Rabu',
				'Kamis',
				'Jumat',
				'Sabtu',
				'Minggu'
			);

	$bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
	$split 	  = explode('-', $tanggal);
	$tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];

	if ($cetak_hari) {
		$num = date('N', strtotime($tanggal));
		return $hari[$num] . ', ' . $tgl_indo;
	}
	return $tgl_indo;
//  tanggal_indo ('2016-03-20', true); // Hasil: Minggu, 20 Maret 2016
}

function weeks_in_month($month, $year) {
 // Start of month
 $start = mktime(0, 0, 0, $month, 1, $year);
 // End of month
 $end = mktime(0, 0, 0, $month, date('t', $start), $year);
 // Start week
 $start_week = date('W', $start);
 // End week
 $end_week = date('W', $end);

 if ($end_week < $start_week) { // Month wraps
   return ((52 + $end_week) - $start_week) + 1;
 }

 return ($end_week - $start_week) + 1;
}

function weekOfMonth($date) {
  //Get the first day of the month.
  $firstOfMonth = strtotime(date("Y-m-01", $date));
  //Apply above formula.
  return intval(date("W", $date)) - intval(date("W", $firstOfMonth)) + 1;
}

function nama_bulan($i)
{
  if ($i=='1') {
    return "Januari";
  }elseif ($i=='2') {
    return 'Februari';
  }elseif ($i=='3') {
    return 'Maret';
  }elseif ($i=='4') {
    return 'April';
  }elseif ($i=='5') {
    return 'Mei';
  }elseif ($i=='6') {
    return 'Juni';
  }elseif ($i=='7') {
    return 'Juli';
  }elseif ($i=='8') {
    return 'Agustus';
  }elseif ($i=='9') {
    return 'September';
  }elseif ($i=='10') {
    return 'Oktober';
  }elseif ($i=='11') {
    return 'November';
  }else {
    return 'Desember';
  }
}

 ?>
