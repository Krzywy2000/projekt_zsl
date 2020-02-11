document.getElementById("option").addEventListener("click", option);
 
function option() {
    
    var option = document.getElementById("option").value;
     
        var ajax = new XMLHttpRequest();
         
        ajax.onreadystatechange = function() {
            if(ajax.readyState == 4 && ajax.status == 200) {
                document.getElementById("result").innerHTML = ajax.responseText;
            }
        };
         
        ajax.open("GET", "./scripts/php/search_mess.php?search_mess="+option, true);
 
        ajax.send();
    
}