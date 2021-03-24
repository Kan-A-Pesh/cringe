window.addEventListener("load", function(){
    document.getElementById("button").onclick = function(){

        document.getElementById("background").classList.add("active");
        var text = document.getElementById("input").value;
        document.getElementById("input").value = "";
        document.getElementById("result").classList.add("active");

        httpGetAsync("http://suisjeravage.ml/api/cringeometer.php?pseudo="+text, printText);
    };
    document.getElementById("exitbtn").onclick = function(){

        document.getElementById("titletext").classList.remove("visible");
        document.getElementById("desctext").classList.remove("visible");
        document.getElementById("scoretext").classList.remove("visible");
        document.getElementById("titletext").innerHTML = "";
        document.getElementById("desctext").innerHTML = "";
        document.getElementById("scoretext").innerHTML = "";
        document.getElementById("background").classList.remove("active");
        document.getElementById("result").classList.remove("active");
    };
});

function httpGetAsync(theUrl, callback)
{
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function() { 
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
            callback(xmlHttp.responseText);
    }
    xmlHttp.open("GET", theUrl, true);
    xmlHttp.send(null);
}

function printText(result)
{
    results = result.split("|");
    title = results[2];
    desc = results[1];
    score = parseInt(results[0]);

    document.getElementById("titletext").innerHTML = title;
    document.getElementById("titletext").classList.add("visible");
    document.getElementById("desctext").innerHTML = desc;
    document.getElementById("desctext").classList.add("visible");
    document.getElementById("scoretext").classList.add("visible");
    count(score);
}
  
async function count(count) {
    for (let i = -1; i < count+1; i++) {
        document.getElementById("scoretext").innerHTML = i + "%";
        await new Promise(r => setTimeout(r, 2000/count));
    }
}