document.getElementById("search").addEventListener("keyup", search);
 
function search() {
    
    var search = document.getElementById("search").value;
     
        var ajax = new XMLHttpRequest();
         
        ajax.onreadystatechange = function() {
            if(ajax.readyState == 4 && ajax.status == 200) {
                document.getElementById("result").innerHTML = ajax.responseText;
            }
        };
         
        ajax.open("GET", "./scripts/php/search.php?search="+search, true);
 
        ajax.send();
    
}