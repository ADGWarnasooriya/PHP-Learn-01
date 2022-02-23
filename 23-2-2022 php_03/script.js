function m() {
    var s = document.getElementById("s");



    for (var i = 1980; i <= 2022; i++) {
        var o = document.createElement("option");
        o.innerHTML = i;
        s.appendChild(o);
    }
}