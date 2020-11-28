//Make sure that the HTML DOM is loaded
$(document).ready(function ()
{
    activateMenu();
});

function activateMenu() {
    var current_page_URL = location.href;

    $(".navbar-nav a").each(function () {
        var target_URL = $(this).prop("href");
        if (target_URL === current_page_URL) {
            $('nav a').parents('li, ul').removeClass('active');
            $(this).parent('li').addClass('active');
            return false;
        }
    })
    // Get the container element
var btnContainer = document.getElementById("navbarSupportedContent");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("nav-link");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}  
}