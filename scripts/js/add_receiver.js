document.getElementById("receiver").addEventListener("click", receiver);
 
function receiver() {
    
    var receiver = document.getElementById("receiver").value;
     
        var ajax = new XMLHttpRequest();
         
        ajax.onreadystatechange = function() {
            if(ajax.readyState == 4 && ajax.status == 200) {
                document.getElementById("add_receiver").innerHTML = ajax.responseText;
            }
        };
         
        ajax.open("GET", "./scripts/php/add_receiver.php?add_receiver="+receiver, true);
 
        ajax.send();
    
}