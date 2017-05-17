<?php
class Home extends CI_Controller
{
	
	  public function __construct()
       {
            parent::__construct();
            if(null !== $this->session->userdata('idlogin')){

            }else{
            	redirect('User/login');
            }
       }

       public function index($value='')
       {
            $this->load->model('Submission');
            $this->load->view('themepart/header');
            
                  $data['datasubmission'] = $this->Submission->getdrafsubmissionbycurrentuser();
                  $data['draf']=true;
                  $this->load->view('user/kps/home',$data);
            
            $this->load->view('themepart/footer');
       }
       public function createsubmission($value='')
       {
            $iduser = $this->session->userdata('iduser');
            $tahun = $this->input->post('tahun');
             $this->db->query("insert into submission (id_user,tahun) values ($iduser,$tahun)");
             redirect('home/index');
       }

       public function mysubmission(){
            $this->load->model('Submission');
            $this->load->view('themepart/header');
            
                  $data['datasubmission'] = $this->Submission->getsubmisstedsubmissionbycurrentuser();
                  $this->load->view('user/kps/home',$data);
            
            $this->load->view('themepart/footer');
       }

       public function allsubmission(){
            $this->load->model('Submission');
            $this->load->view('themepart/header');
            
                  $data['datasubmission'] = $this->Submission->getsubmisstedsubmissionbyothers();
                  $this->load->view('user/kps/home',$data);
            
            $this->load->view('themepart/footer');
       }

       public function viewsubmission($idsubmission){
            $this->load->view('themepart/header');

            
            $data['idsubmission']=$idsubmission;
            
            $this->load->model('submission');
          
                        $data['standar1'] = $this->submission->getdatastandar1($idsubmission);
                        $this->load->view('data/standar1',$data);
                
                        $data['standar2'] = $this->submission->getdatastandar2($idsubmission);
                        $this->load->view('data/standar2',$data);
                 
                        $this->load->view('data/standar3',$data);
                  
                        $this->load->view('data/standar4',$data);
                 
                        $this->load->view('data/standar5',$data);
                 
                        $this->load->view('data/standar6',$data);
                 
                        $this->load->view('data/standar7',$data);
                 
           
            $this->load->view('themepart/footer');
       }

       function search(){
            $this->load->view('themepart/header');
            $this->load->view('search/home');
            $this->load->view('themepart/footer');
       }

}
?>