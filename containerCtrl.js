cache = 'hm';

function show (inp) {
    document.getElementById(cache).style.display = "none";
    document.getElementById(inp).style.display = "block";
    cache = inp;

}
