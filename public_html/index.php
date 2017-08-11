<?php include("../resources/header.php") ?>

<h1>Network Status</h1>
<div class="w3-left-align w3-padding-large">
    <table class="w3-table-all">
        <col width="67%">
        <col width="33%">
        <tr class="w3-border-black">
            <td>Service</td>
            <td class="w3-center">Status</td>
        </tr>
        <?php
        $tests = array(
            "local" => "Local web server",
            "firewall" => "Firewall",
            "gateway" => "Gateway",
            "dns" => "DNS Server",
            "google" => "Google",
            "facebook" => "Facebook",
            "durham" => "Durham homepage",
        );

        foreach ($tests as $test => $description) {
            echo "<tr class=\"w3-hover-grey\">";
            echo "<td>$description</td>";
            echo "<td class=\"w3-center\"><span id=\"test_result_$test\">Testing...</span></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

<?php include("../resources/footer.php") ?>
