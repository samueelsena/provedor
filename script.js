window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.querySelector(".whatsapp-float").style.display = "block";
    } else {
        document.querySelector(".whatsapp-float").style.display = "none";
    }
}
