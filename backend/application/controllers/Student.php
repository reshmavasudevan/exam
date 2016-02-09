<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

        public function index()
        {
                print("Student Api");
        }

        public function login()
        {
                $sid = $this->input->post('sid');
                $sname = $this->input->post('sname');
                $result['status']=0;
                $result['message']="Login Failed";
                $row = $this->db->get_where('student',array('sid'=>$sid))->row_array();
                if ($row)
                {
                        $result['status']=1;
                        $result['message']=$row;
                }
                else
                {
                        $row['sid'] = $sid;
                        $row['sname'] = $sname;
                        $this->db->insert('student',$row);
                        $row = $this->db->get_where('student',array('sid'=>$sid))->row_array();
                        if ($row)
                        {
                                $result['status']=1;
                                $result['message']=$row;
                        }
                }
                print json_encode($result);
        }

}
