<?php

include 'master.php';

if (isset($_POST['button1'])){
  $user = $_POST['textbox1'];
  $pass = $_POST['textbox2'];
  $login_check = new myclass();
  $login_check -> login($user, $pass);
}

?>

<form method = 'POST' action = 'index.php'>
  <br><br>
  <div class="container" align = 'center'>
    <table class = 'table table-bordered' align = 'center'>
      <tr>
        <td>
          <label>Username : </label>
          <input class = 'form-control' name = 'textbox1' id = 'p1' type = 'text' autofocus required/>
          <label>Password : </label>
          <input class = 'form-control' name = 'textbox2' id = 'p1' type = 'password' required/>
          <input class = 'btn btn-primary' name = 'button1' id = 'p1' type = 'submit' value = 'Login'/>
        </td>
      </tr>
    </table>
  </div>
</form>
