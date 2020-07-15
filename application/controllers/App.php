<?php 
class App extends CI_Controller {

 public function __construct()
 {
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->model('data_model');

 }

 public function index()
 {
      $this->form_validation->set_rules('nrp','nrp','required|trim');
      $this->form_validation->set_rules('pass','kata sandi','required|trim|min_length[3]');
      $data['title']= 'Masuk GA-APP';
      if($this->form_validation->run() == false){
         $this->load->view('awal/awal_header', $data);
         $this->load->view('awal/masuk');
         $this->load->view('awal/awal_footer');
         // redirect('App');
      }else{
         
         // var_dump("test");die();
         $nrp      = $this->input->post('nrp');
         $password = md5($this->input->post('password'));
         // var_dump($password);
         $where = array(
            'nrp' => $nrp,
            'password' => $password
         );

         $cek = $this->data_model->login('staff', $where)->result();
         // var_dump($cek[0]->id_level);die();
         if(count($cek) > 0){
            $data_session = array(
               'nama'   => $nrp,
               'status' => "login",
               'level' => $cek[0]->id_level
            );
            
            $this->session->set_userdata($data_session);
            // var_dump($data_session['level']);die();
            if($data_session['level'] == 2){
               redirect('App/staff_list');
            } elseif($data_session['level'] == 3){
               redirect('App/a1_approval');
            } elseif($data_session['level'] == 4){
               redirect('App/a2_approval');
            }elseif($data_session['level'] == 5){
               redirect('App/k_konfirm');
            }elseif($data_session['level'] == 6){
               redirect('App/s_ga');
            }
            
    
         }else{
            echo "Username dan password salah !";
         }
      }
      
      

 }

 public function daftar()
 {   
    $this->form_validation->set_rules('username','nama','required|trim');
    $this->form_validation->set_rules('nrp','nrp','required|trim|unique');
    $this->form_validation->set_rules('pass','password','required|trim|min_length[3]|matches[pass2]');
    $this->form_validation->set_rules('pass2','password2','required|trim|matches[pass]');
    var_dump($this->form_validation->run());
    if($this->form_validation->run() == false){
      $data['title']= 'Daftar GA-APP';
      $data['bagian'] = $this->data_model->get_bagian();
      $data['level'] = $this->data_model->get_level();
      $this->load->view('awal/awal_header', $data);
      $this->load->view('awal/daftar');
      $this->load->view('awal/awal_footer');
    }else{
       $data = [
          'nama_staff' => $this->input->post('username'),
          'nrp' => $this->input->post('nrp'),
          'id_bagian' => $this->input->post('id_bagian'),
          'id_level' => $this->input->post('id_level'),
          'password' => md5($this->input->post('password')),
          'image' => 'default.jpg'
       ];

       $this->data_model->input_data('staff', $data); 
       redirect('App');
    } 
      

 }

  public function staff_list()
  {
   $data['aku']= 'User';
     $this->load->view('staff/staff-header');
     $this->load->view('staff/staff-nav');
     $this->load->view('staff/staff-list');
     $this->load->view('staff/staff-footer');

 }

 public function staff_histori()
  {
     $this->load->view('staff/staff-header');
     $this->load->view('staff/staff-nav');
     $this->load->view('staff/staff-histori');
     $this->load->view('staff/staff-footer');

 }

 public function staff_profil()
  {
     $this->load->view('staff/staff-header');
     $this->load->view('staff/staff-nav');
     $this->load->view('staff/profil-staff');
     $this->load->view('staff/staff-footer');

 }

 public function a1_approval()
 {
    $this->load->view('atasan1/atasan1-header');
    $this->load->view('atasan1/atasan1-nav');
    $this->load->view('atasan1/atasan1-approval');
    $this->load->view('atasan1/atasan1-footer');

}

public function a1_form()
{
   $this->load->view('atasan1/atasan1-header');
   $this->load->view('atasan1/atasan1-nav');
   $this->load->view('atasan1/atasan1-form');
   $this->load->view('atasan1/atasan1-footer');

}

public function a1_profil()
{
   $this->load->view('atasan1/atasan1-header');
   $this->load->view('atasan1/atasan1-nav');
   $this->load->view('atasan1/atasan1-profil');
   $this->load->view('atasan1/atasan1-footer');

}

public function a2_approval()
 {
    $this->load->view('atasan2/atasan2-header');
    $this->load->view('atasan2/atasan2-nav');
    $this->load->view('atasan2/atasan2-approval');
    $this->load->view('atasan2/atasan2-footer');

}

public function a2_form()
{
   $this->load->view('atasan2/atasan2-header');
   $this->load->view('atasan2/atasan2-nav');
   $this->load->view('atasan2/atasan2-form');
   $this->load->view('atasan2/atasan2-footer');

}

public function a2_profil()
{
   $this->load->view('atasan2/atasan2-header');
   $this->load->view('atasan2/atasan2-nav');
   $this->load->view('atasan2/atasan2-profil');
   $this->load->view('atasan2/atasan2-footer');

}

public function k_profil()
{
   $this->load->view('koordinator-ga/k-header');
   $this->load->view('koordinator-ga/k-nav');
   $this->load->view('koordinator-ga/k-profil');
   $this->load->view('koordinator-ga/k-footer');

}

public function k_konfirm()
{
   $this->load->view('koordinator-ga/k-header');
   $this->load->view('koordinator-ga/k-nav');
   $this->load->view('koordinator-ga/k-konfirm');
   $this->load->view('koordinator-ga/k-footer');

}

public function s_ga()
{
   $this->load->view('staff-ga/s-header');
   $this->load->view('staff-ga/s-nav');
   $this->load->view('staff-ga/s-orke');
   $this->load->view('staff-ga/s-footer');

}

}
?>