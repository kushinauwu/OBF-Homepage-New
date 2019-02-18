var j = jQuery.noConflict();

/* navbar overlaps content. This funcion adds top padding to body that is the height of the navbar + 10px */
j(document).ready(function () {
    j(document.body).css('padding-top', j('#navigation-bar').height() + 10);

    /* add the same pading on browser window resize*/
    j(window).resize(function () {
        j(document.body).css('padding-top', j('#navigation-bar').height() + 10);
    });
});

/* function to make the fixed navbar slightly transparent when scrolling */
window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    /* make navbar transparency 0.9 when scrolling past 180px */
    if (document.body.scrollTop > 180 || document.documentElement.scrollTop > 180) {
        document.getElementById("navigation-bar").style.backgroundColor = "rgba(245,245,245,0.9)";
        document.getElementById("navigation-bar").style.border = "transparent";
        document.getElementById("navigation-bar").style.transition = "all 0.3s ease";
    } else {
        document.getElementById("navigation-bar").style.backgroundColor = "whitesmoke";
        document.getElementById("navigation-bar").style.transition = "all 0.3s ease";
    }
}
