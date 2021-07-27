var nav = document.querySelector('nav');

window.addEventListener('scroll', function() {
    if(this.window.pageYOffset > 100){
        nav.classList.add('bg-darker');
    }else{
        nav.classList.remove('bg-darker');
    }
});