var controllerActive;
console.log(window.location.pathname.split('/')[1]);
if(window.location.pathname.split('/')[1] != ""){
    controllerActive = window.location.pathname.split('/');
}

window.onload = function() {
    if (window.jQuery) {  
        $(".navbar-nav").children().removeClass("active");
        $("#"+controllerActive).addClass("active");
    } 
}