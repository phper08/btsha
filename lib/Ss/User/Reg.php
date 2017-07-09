<?php


namespace Ss\User;


class Reg {

    private $db;

    private $table = "user";
    
    private $my_table = "user_def";

    function __construct(){
        global $db;
        $this->db = $db;
    }

    function GetLastPort(){
        $datas = $this->db->select($this->table,"*",[
            "ORDER" => "uid DESC",
            "LIMIT" => 1
        ]);
        return $datas['0']['port'];
    }
   function Reg($username,$email,$pass,$org_pass,$plan,$transfer,$invite_num,$ref_by){

       $sspass = \Ss\Etc\Comm::get_random_char(5);
      //$sspass="123456";

        $this->db->insert($this->table,[
           "user_name" => $username,
            "email" => $email,
            "pass" => $pass,
            "passwd" =>  $sspass,
            "t" => '0',
            "u" => '0',
            "d" => '0',
            "plan" => $plan,
            "transfer_enable" => $transfer,
            "port" => $this->GetLastPort()+rand(1,5),
            "invite_num" => $invite_num,
            "money" => '0',
            "#reg_date" =>  'NOW()',
            "ref_by" => $ref_by
        ]);
       
        $this->db->insert($this->my_table,[
           "user_name" => $username,
            "email" => $email,
            "passwd" =>  $org_pass
	]);
    }

}
