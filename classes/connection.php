<?php
class Connect {
    private $server="localhost:3306";
	private $user="homenetw_eg";
	private $password="123456789";
    private $db = "homenetw_contacts";
    
    public function connection() {
        $connection = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        return $connection;
    }
}
?>