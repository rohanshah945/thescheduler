funtion makeRequestObject() {
    var xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject('Msxml2.XMLHTTP');
    } catch (e) {
        try {
            xmlhttp = ActiveXObject('Microsoft.XMLHTTP');
        } catch (E) {
            xmlhttp = false
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

function validatefield(user)
{
    var div=document.getElementsById("usrmsg");
    div.style.color="red";
    if(div.hasChildNodes()) {
        div.removeChild(div.firstChild);
    }
    var xmlhttp=makeRequestObject();
    xmlhttp.open('GET','ajaxchkusr.php?userid='+user,true);
    xmlhttp.onreadystatechange=function() {
        if(xmlhttp.readyState==4 && xmlhttp.status == 200) {
            var content = xmlhttp.responseText;
            if (content) {
                div.innerHTML = content;
            }
        }
    }
    xmlhttp.send(null);
}