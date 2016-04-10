<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Customers</h1>
<div id="id01"></div>
<script>
    var xmlhttp = new XMLHttpRequest();
    var url = "{!! url('test') !!}";
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            myFunction(xmlhttp.responseText);
        }
    }
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
    function myFunction(response){
        var arr = JSON.parse(response);
        var i;
        var out = "<table>";
        for(i = 0; i < arr.length; i++){
            out += "<tr><td>" +
                    arr[i].name
                    + "</td><td>"
                    + arr[i].price
                    + "</td></tr>";
        }
        out += "</table>";
        document.getElementById("id01").innerHTML = out;
    }
</script>
</body>
</html>
