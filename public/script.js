getIMGUrl();
var activeText = $('.active #types').text();
if(activeText == "TTT")
{
    var activeText2 = "Trouble in Terrorist Town";
}
else if(activeText == "Slender"){
    var activeText2 = "Stop it, Slender!";
}else{
    var activeText2 = activeText;
}
document.getElementById("gamemode-title").innerHTML = activeText2;
getIMGGallery();

$("#myCarousel").on('slid.bs.carousel', function () {
    $('.carousel-item').removeClass('element'); //Remove every class no check necessary
    $('.carousel-item.active').addClass('element')
    getIMGUrl();
    activeText = $('.active #types').text();
    if(activeText == "TTT")
    {
        var activeText2 = "Trouble in Terrorist Town";
    }
    else if(activeText == "Slender"){
        var activeText2 = "Stop it, Slender!";
    }else{
        var activeText2 = activeText;
    }
    document.getElementById("gamemode-title").innerHTML = activeText2;
    getIMGGallery();
    var carousel = document.getElementById("container-carousel");
    fadein(carousel);
});

function getIMGUrl(){
    const backgroundImage2 = [];
    const element = document.querySelector('.element');
    const backgroundImage = element.style.backgroundImage;
    var size = backgroundImage.length;
    for(let i = 0;i < size;i++)
    {
        backgroundImage2[i]=backgroundImage[i];
    }
    for(let i = 0;i < 5;i++)
    {
        backgroundImage2.shift();
    }
    backgroundImage2.pop();
    backgroundImage2.pop();
    document.querySelector(".output").src = backgroundImage2.join('');
}

function getIMGGallery(){
    var resultIMG = [];
    resultIMG = $('.picts1').text();
    var resultIP = [];
    resultIP = gettingIP();
    resultLink = gettingContent();
    var arr = resultIMG.split(" ");
    arr.pop();
    var result = [];
    var j = 0;
    for(var i = 0;i < arr.length; i++)
    {
        if(arr[i].includes(activeText) == true)
        {
            result[j] = arr[i];
            j++;
        }
    }
    document.querySelector("#minigallery1").src = result[0];
    document.querySelector("#minigallery2").src = result[1];
    document.querySelector("#minigallery3").src = result[2];
    document.querySelector("#minigallery4").src = result[3];
    resultIP = "steam://connect/" + resultIP;
    document.querySelector("#link").href = resultIP;
    if(resultLink == undefined){
        resultLink = "https://steamcommunity.com/sharedfiles/filedetails/?id=2559246351";
    }
    document.querySelector("#content").href = resultLink;
}

function gettingIP(){
    var getIP = [];
    getIP = $('.ip').text();
    var newIP = getIP.split(" ");
    newIP.pop();
    var resultIP;
    for(var i = 0;i < newIP.length; i++){

        if(newIP[i].includes(activeText) == true && newIP[i].includes("ServerIP") == true)
        {
            resultIP = newIP[i];
            resultIP = resultIP.replace("ServerIP","");
            resultIP = resultIP.replace(activeText,"");
        }
    }
    return resultIP;
}

function gettingContent(){
    var getLink = [];
    getLink = $('.ip').text();
    var newLink = getLink.split(" ");
    newLink.pop();
    var resultLink;
    for(var i = 0;i < newLink.length; i++){

        if(newLink[i].includes(activeText) == true)
        {
            resultLink = newLink[i];
            resultLink = resultLink.replace("Content","");
            resultLink = resultLink.replace(activeText,"");
        }
    }
    return resultLink;
}

function fadein(element) {
    var op = 0.1;  // initial opacity
    element.style.display = 'block';
    var timer = setInterval(function () {
        if (op >= 1){
            clearInterval(timer);
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op += op * 0.1;
    }, 10);
}

function getGalleryID() {

    var gamemode = activeText;
    if(gamemode == "TTT"){
        window.location.href = "gallery/1" ;
    }else if(gamemode == "Surf"){
        window.location.href = "gallery/2" ;
    }else if(gamemode == "Deathrun"){
        window.location.href = "gallery/3" ;
    }else if(gamemode == "Prop Hunt"){
        window.location.href = "gallery/4" ;
    }else if(gamemode == "Slender"){
        window.location.href = "gallery/5" ;
    }else if(gamemode == "Sandbox"){
        window.location.href = "gallery/6" ;
    }
    
}