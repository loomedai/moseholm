

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
            document.getElementById("SBWrapper").classList.add("vh-100");
            isOpen = false;

        }
        else {

            document.getElementById( "sub-menu" ).className = "slideOpen";
            document.getElementById("action-menu").textContent = 'læs mindre';
            document.getElementById("SBWrapper").classList.remove("vh-100");
            isOpen = true;

        }

    })

    let actionMenu2 = document.getElementById( "action-menu2" );


        actionMenu2.addEventListener( "click", function () {

            if ( isOpen ) {

            document.getElementById( "sub-menu2" ).className = "slideShut";
            document.getElementById("action-menu2").textContent = 'Læs mere';
            document.getElementById("LBWrapper").classList.add("vh-100");
            isOpen = false;

        }
        else {

            document.getElementById( "sub-menu2" ).className = "slideOpen";
            document.getElementById("action-menu2").textContent = 'læs mindre';
            document.getElementById("LBWrapper").classList.remove("vh-100");
            isOpen = true;

        }

    })

    let burger = document.getElementsByClassName("navbar-toggler");

    burger.onclick = function(){
        document.getElementById("sub-menu").className ="slideShut";
        isOpen = false;
    }

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



