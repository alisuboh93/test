       
       
function getinfo(str){
var xmlhttp;
xmlhttp = new XMLttpRequest();
xmlhttp.onreadystatechange = function()
{
    if(xmlhttp.readyState===4 & xmlhttp.status===200)
      document.getElementsById("d1").innerHTML=xmlhttp.responseText; 
};
xmlhttp.open("GET","indix.php?q="+str,true);
xmlhttp.send();
}
 