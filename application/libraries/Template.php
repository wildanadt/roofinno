<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Template {

    protected $_CI;

    function __construct() {
        $this->_CI = &get_instance();
    }

    function admin($template, $data = null) {
      $data['content'] = $this->_CI->load->view($template, $data, true);
      $data['header'] = $this->_CI->load->view('template/header_admin', $data, true);
      $data['sidemenu'] = $this->_CI->load->view('template/sidemenu_admin', $data, true);
      $this->_CI->load->view('template/template', $data);
    }

    function user($template, $data = null) {
      $data['content'] = $this->_CI->load->view($template, $data, true);
      $data['header'] = $this->_CI->load->view('template/header_user', $data, true);
      $data['sidemenu'] = $this->_CI->load->view('template/sidemenu_user', $data, true);
      $this->_CI->load->view('template/template', $data);
    }

}
