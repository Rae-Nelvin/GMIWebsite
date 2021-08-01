getIMGUrl();
var activeText = $('.active #types').text();
if(activeText == "TTT")
{
    var activeText2 = "Trouble in Terrorist Town";
}
else{
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
    else{
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
    var arr = resultIMG.split(" ");
    arr.pop();
    var result = [];
    var j = 0;
    console.log(arr);
    for(var i = 0;i < arr.length; i++)
    {
        if(arr[i].includes(activeText) == true)
        {
            result[j] = arr[i];
            console.log(result[j]);
            j++;
        }
    }
    document.querySelector("#minigallery1").src = result[0];
    document.querySelector("#minigallery2").src = result[1];
    document.querySelector("#minigallery3").src = result[2];
    document.querySelector("#minigallery4").src = result[3];
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