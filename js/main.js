

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
})

$(function ()
    {
    $.scrollify({
        section : '.scroll',
    });
        $.scrollify.setOptions({
            scrollSpeed: 500,
        });
});


    let actionMenu = document.getElementById( "action-menu" );
    let isOpen = false;

    actionMenu.addEventListener( "click", function () {

        if ( isOpen ) {

            document.getElementById( "sub-menu" ).className = "slideShut";
            document.getElementById("action-menu").textContent = 'Læs mere';
            isOpen = false;

        }
        else {

            document.getElementById( "sub-menu" ).className = "slideOpen";
            document.getElementById("action-menu").textContent = 'læs mindre';
            isOpen = true;

        }

    })

    let actionMenu2 = document.getElementById( "action-menu2" );
    let isOpen2 = false;

        actionMenu2.addEventListener( "click", function () {

            if ( isOpen2 ) {

            document.getElementById( "sub-menu2" ).className = "slideShut";
            document.getElementById("action-menu2").textContent = 'Læs mere';

            isOpen2 = false;

        }
        else {

            document.getElementById( "sub-menu2" ).className = "slideOpen";
            document.getElementById("action-menu2").textContent = 'læs mindre';

            isOpen2 = true;

        }

    })
    let actionMenu3 = document.getElementById( "action-menu3" );
    let isOpen3 = false;

    actionMenu3.addEventListener( "click", function () {

        if ( isOpen3 ) {

            document.getElementById( "sub-menu3" ).className = "slideShut";
            document.getElementById("action-menu3").textContent = 'Læs mere';
            isOpen3 = false;

        }
        else {

            document.getElementById( "sub-menu3" ).className = "slideOpen";
            document.getElementById("action-menu3").textContent = 'læs mindre';
            isOpen3 = true;

        }

    })
    let actionMenu4 = document.getElementById( "action-menu4" );
    let isOpen4 = false;

    actionMenu4.addEventListener( "click", function () {

        if ( isOpen4 ) {

            document.getElementById( "sub-menu4" ).className = "slideShut";
            document.getElementById("action-menu4").textContent = 'Læs mere';

            isOpen4 = false;

        }
        else {

            document.getElementById( "sub-menu4" ).className = "slideOpen";
            document.getElementById("action-menu4").textContent = 'læs mindre';
            isOpen4 = true;

        }

    })

    let burger = document.querySelector(".navbar-toggler");

    burger.addEventListener("click", function(){
        document.getElementById("sub-menu").className ="slideShut";
        document.getElementById("SBWrapper").classList.add("vh-100");
        document.getElementById( "sub-menu2" ).className = "slideShut";
        document.getElementById("LBWrapper").classList.add("vh-100");
        document.getElementById( "sub-menu3" ).className = "slideShut";
        document.getElementById("LBWrapper").classList.add("vh-100");
        document.getElementById( "sub-menu4" ).className = "slideShut";
        document.getElementById("LBWrapper").classList.add("vh-100");
        isOpen = false;
    })



$('.navbar a').on('click', function (e)
  {
    if(this.hash !==''){
    e.preventDefault();
    const hash = this.hash;
    $('html, body').animate({
    scrollTop: $(hash).offset().top
},500);
}
})



function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}