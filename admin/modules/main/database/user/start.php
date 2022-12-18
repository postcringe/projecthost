<?php
    //классы для работы с пользователями(авторизован или нет)
    session_start();
    class USER {
        protected $id;
        protected $email;
        protected $password;
        protected $first_name;
        protected $sur_name;
        protected $remember;
        protected $father;
        protected $avatar;
        protected $role;
        protected $phone;
        protected $address;

        public function constructLogin(string $email, string $password, bool $remember = false) { 
            $password = md5($password);
            global $DB_LINK;
            $resulter = $DB_LINK->query("SELECT * FROM `users` WHERE `mail` = '$email' AND `password` = '$password'");
            if ($users = $resulter->fetch_assoc()) {
                return (new USER($users["ID"], $remember));
            }
            else return (new USER(0, $remember));
        }
        public function __construct(int $id, int $remember = 0) { 
            global $DB_LINK;
            $resulter = $DB_LINK->query("SELECT * FROM `users` WHERE `ID` = '$id'");
            if ($users = $resulter->fetch_assoc()) {
                $this->id = $users["ID"];
                $this->email = $users["mail"];
                $this->password = $users["password"];
                $this->first_name = $users["first_name"];
                $this->sur_name = $users["sur_name"];
                $this->remember = $remember;
                $this->father = $users["father"];
                $this->avatar = $users["avatar_url"];
                $this->role = $users["role"];
                $this->address = $users["address"];
                $this->phone = $users["phone"];
            }
            else {
                $this->id = "NULL";
                $this->email = "NULL";
                $this->password = "NULL";
                $this->first_name = "NULL";
                $this->sur_name = "NULL";
                $this->remember = $remember;
                $this->father = "NULL";
                $this->avatar = "NULL";
                $this->role = "unlogined";
                $this->address = "NULL";
                $this->phone = "NULL";
            }
        }
        public function SetFirstName($first_name){
            $this->first_name = $first_name;
            return true;
        }
        public function SetSurName($sur_name){
            $this->sur_name = $sur_name;
            return true;
        }
        public function SetFather($father){
            $this->father = $father;
            return true;
        }
        public function SetRole($role){
            $this->role = $role;
            return true;
        }
        public function SetPhone($phone){
            $this->phone = $phone;
            return true;
        }
        public function SetAddress($address){
            $this->address = $address;
            return true;
        }

        public function GetEmail(){
            return $this->email;
        }
        public function GetFirstName(){
            return $this->first_name;
        }
        public function GetSurName(){
            return $this->sur_name;
        }
        public function GetFather(){
            return $this->father;
        }
        public function GetAvatar(){
            return $this->avatar;
        }
        public function GetRole(){
            return $this->role;
        }
        public function GetPhone(){
            return $this->phone;
        }
        public function GetAddress(){
            return $this->address;
        }
        public function HashPassword(){
            return md5($this -> password);
        }
        public function GetRemember(){
            return $this->remember;
        }
        public function GetId(){
            return $this->id;
        }
        public function FindInBase(string $email){
            global $DB_LINK;
            $resulter = $DB_LINK->query("SELECT * FROM `users` WHERE `mail` = '$email'");
            $users = $resulter->fetch_assoc();
            if ($users != NULL)
            {   
                return true;
            }
            else{
                return false;
            }
        }

        function IsAuthorized() {
            if(isset($_SESSION['auth']) && $_SESSION['auth'] == true)
                return true;
            else
                return false;
        }

        function IsAdmin() {
            if ($this->role == "admin") return true;
            else return false;
        }
        
    }
    //
    //методы 

?>