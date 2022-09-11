<?php
    Class User
    {

        private $error="";

        public function signup($POST)
        {
            $data = array();

            $data['username'] = trim($_POST['username']);
            $data['email']    = trim($_POST['email']);
            $data['password'] = trim($_POST['password']);
            $cpassword        = trim($_POST['cpassword']);

            if (empty($data['email']) || !preg_match("/^[a-zA-Z_-]+@[a-zA-Z]+.[a-zA-Z]+$/",$data['email'])) 
            {
                $this->error .="Please Enter a valid email <br>";
            }

            if (empty($data['username']) || !preg_match("/^[a-zA-Z]+$/",$data['username'])) 
            {
                $this->error .="Please Enter a valid User Name <br>";
            }

            if ($data['password'] !== $cpassword) 
            {
                $this->error .="Password doesn't match <br>";
            }

            if (strlen($data['password']) < 4) 
            {
                $this->error .="Password must be atleast 4 characters long <br>";
            }

            if ($this->error == "") 
            {
                $data['rank'] = "customer";
                $data['url_address'] = $this->get_random_string(60);
                $data['date'] = date("Y-m-d H:i:s");

                $query = "INSERT INTO users(url_address,name,email,password,date,rank) VALUES(:url_address,:username,:email,:password,:date,:rank)";
                $db= Database::getInstance();
                $result=$db->write($query,$data);

                if ($result) {
                    header("Location: ".ROOT."login");
                    die;
                }
            }
        }

        public function Login($POST)
        {

        }

        public function get_user($url)
        {

        }

        private function get_random_string($length)
        {
            $array = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
            $text = "";

            $length = rand(4,$length);

            for ($i=0; $i < $length; $i++) { 
                
                $random = rand(0,61);

                $text .= $array[$random];
            }

            return $text;
        }
    }
?>