<?php
include_once 'database.php';
include_once 'header.php';
?>

<form action="register_do.php" method="POST" class="form-group">
  <table class="table table-hover" style="width: 500px; margin: auto; margin-top: 100px;">
    <tr>
      <td>Name</td>
      <td><input type="text" name="name" placeholder="First name" required="required"/></td>
    </tr>
    <tr>
      <td>Last name</td>
      <td><input class="input_login" type="text" name="surname" placeholder="Last name" required="required"/></td>
    </tr>
    <tr>
      <td>
        Country
      </td>
      <td>
        <?php
          echo "<select name='country_id'>";
          $query = "SELECT * FROM countries";
          $result = mysqli_query($link, $query);
          while($row = mysqli_fetch_array($result)){
            echo '<option value="' .$row['id'] . '">' . $row['country_name'] . '</option>';
          }
      ?>
    </select>
      </td>
    </tr>
    <tr>
      <td>
        Team
      </td>
      <td>
        <?php
          echo "<select name='team_id'>";
          $query = "SELECT * FROM teams";
          $result = mysqli_query($link, $query);
          while($row = mysqli_fetch_array($result)){
            echo '<option value="' .$row['id'] . '">' . $row['name'] . '</option>';
          }
      ?>
    </select>
      </td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="email" name="email" placeholder="Email" required="required"/></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="pass" placeholder="Password" required="required"/></td>
    </tr>
    <tr>
      <td>Confirm password</td>
      <td><input type="password" name="pass2" placeholder="Repeat password" required="required"/></td>
    </tr>
    <tr>
      	<td><div class="passErr"></div></td>
        <td><input type="submit" value="Registriraj" /></td>
    </tr>
  </table>
</form>
