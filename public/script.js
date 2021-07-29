getIMGUrl();
$("#myCarousel").on('slid.bs.carousel', function () {
    $('.carousel-item').removeClass('element'); //Remove every class no check necessary
    $('.carousel-item.active').addClass('element')
    getIMGUrl();
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
    console.log(backgroundImage2.join(''));
    document.querySelector(".output").src = backgroundImage2.join('');
}
