function testAllConnections() {
    var tests = [
        "local",
        "firewall",
        "gateway",
        "dns",
        "facebook",
        "google",
        "durham"
    ];

    tests.forEach(function (test) {
        testConnection(test);
    });
}

function displayResult(name, result) {
    document.getElementById("test_result_" + name).outerHTML = result;
}

function testConnection(name) {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4) {
            var resultCode = this.status === 200 ? this.responseText : "error";
            displayResult(name, formatResult(resultCode));
        }
    };

    xhttp.open("GET", "test_connection.php?test=" + name, true);
    xhttp.send();
}

function formatResult($result) {
    switch ($result) {
        case "up" :
            return "<span class=\"w3-text-green\">Up</span>";
        case "down" :
            return "<span class=\"w3-text-red\">Down</span>";
        case "error" :
            return "<span class=\"w3-text-black\">Error</span>";
    }
}