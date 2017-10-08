<?php include("../resources/header.php") ?>

<h1>Network Login</h1>
<div class="w3-show-inline-block w3-col w3-padding-large" style="alignment: center">
  <form name="login" action="login.php" method="POST" class="w3-show-inline-block w3-cell" style="max-width: 500px">
      <?= !array_key_exists("redirect", $_REQUEST) ?
          "" :
          "<input type=\"hidden\" name=\"redirect\" value=\"" . $_REQUEST["redirect"] . "\">"
      ?>
    <table class="w3-table w3-border">
      <tr class="w3-cell-row">
        <td class="w3-cell w3-cell-middle w3-center">Username</td>
        <td class="w3-cell w3-cell-middle w3-center">
          <input class="w3-input w3-animate-input w3-show-inline-block" style="width: 95%;" name="username"
                 title="Username">
        </td>
      </tr>
      <tr class="w3-cell-row">
        <td class="w3-cell w3-cell-middle w3-center">Password</td>
        <td class="w3-cell w3-cell-middle w3-center">
          <input class="w3-input w3-animate-input w3-show-inline-block" style="width: 95%;" type="password"
                 name="password" title="Password">
        </td>
      </tr>
      <tr class="w3-cell-row">
        <td colspan="2" class="w3-cell w3-cell-middle w3-center">
          <button class="w3-button w3-block w3-animate-input">Login</button>
        </td>
      </tr>
        <?php
        if (isset($failed) && $failed) {
            echo "<tr class=\"w3-cell-row\">";

            echo "<td colspan=\"2\" class=\"w3-cell w3-cell-middle w3-center\">";
            echo "<span class=\"w3-text-red\">Username or password incorrect</span>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
    </table>
  </form>
</div>

<?php include("../resources/footer.php") ?>
