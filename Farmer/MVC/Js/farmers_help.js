function loadProblems() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("problemsArea").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "../CONTROL/fetch_problems.php", true);
    xhttp.send();
}
