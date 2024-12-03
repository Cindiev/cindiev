<?php
    require_once('./config/config.php');
    require_once('mysql.php');
    class User {
        //SQL statements 
        private static $select = 'select user_name, user_full_name, user_photo from users order by user_full_name';
        private static $select_one = 'select user_name, user_full_name, user_photo from users where user_name = ?';
        private static $login = '
        select nombre 
        from usuario 
        where correo = ? and contrasena = ?;
        ';

        private $name;
        private $full_name;
        private $photo;

        public function get_name(){ return $this->name; }
        public function set_name($name){ $this->name = $name; }

        public function get_full_name(){ return $this->full_name; }
        public function set_full_name($full_name){ $this->full_name = $full_name; }

        public function get_photo(){ return Config::$server_url.'/photos/users/'.$this->photo; }
        public function set_photo($photo){ $this->photo = $photo; }

        public function __construct(){
            //No arguments received
            if(func_num_args() == 0){
                $this->name = '';
                $this->full_name = '';
                $this->photo = '';
            }

            //Arguments received
            if (func_num_args() == 3) {
                $args = func_get_args();
                $this->name = $args[0];
                $this->full_name = $args[1];
                $this->photo = $args[2];
            }

            //Arguments received
            if (func_num_args() == 1) {
                $args = func_get_args();
                $this->name = $args[0];
            }
        }
        public static function get(){
            $connection = MySqlConnection::get_connection();
            $returnValue = null;
            //get all
            if(func_num_args() == 0){
                $list = array();
                $command = $connection->prepare(self::$select);
                $command->execute();
                $command->bind_result($name, $full_name, $photo);
                while ($command->fetch()){
                    array_push($list, new User($name, $full_name, $photo));
                }
                $returnValue = $list;
            }
            //get one
            if(func_num_args() == 1){
                $name = func_get_arg(0);
                $command = $connection->prepare(self::$select_one);
                $command->bind_param('s', $name);
                $command->execute();
                $command->bind_result($name, $full_name, $photo);
                if ($command->fetch()){
                    $returnValue = new User($name, $full_name, $photo);
                }
            }
            mysqli_stmt_close($command);
            $connection->close();

            return $returnValue;
        }

        public static function authenticate($user_name, $password){
            $returnValue = null;
            $connection = MySqlConnection::get_connection();
            $command = $connection->prepare(self::$login);
            $command->bind_param('ss', $user_name, $password);
            $command->execute();
            $command->bind_result($name);
            if ($command->fetch()){
                $returnValue = new User($name);
            }
            mysqli_stmt_close($command);
            $connection->close();

            return $returnValue;
        }
    }
?>