<?php

class myclass{
  private $db_con = "mysql:host=localhost;dbname=test";
  private $user = 'root';
  private $pass = '';
  public function connect(){
    $result = new PDO($this -> db_con, $this -> user, $this -> pass);
    return $result;
  }

  public function login($user, $pass){
    $query = "select * from member where Username = ? and Password = ?";
    $result = $this -> connect() -> prepare($query);
    $result -> bindParam('1', $user);
    $result -> bindParam('2', $pass);
    if ($result -> execute()){
      if ($result -> rowCount() >= 1){
        echo "<script>swal('Login Success', '', 'success');</script>";
      }else{
        echo "<script>swal('Username or Password wrong', '', 'error');</script>";
      }
    }
  }
}


?>
