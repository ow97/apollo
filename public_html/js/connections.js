function displayResult(name, result) {
    console.log(1);
    console.log(document.getElementById("test_result_" + name).outerHTML);
    console.log(2);
    document.getElementById("test_result_" + name).outerHTML = result;
}

function testConnection(name) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            displayResult(name, this.responseText)
        }
    };
    xhttp.open("GET", "test_connection.php?test=" + name, true);
    xhttp.send();
}

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
