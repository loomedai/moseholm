

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
})

// $(function ()
//     {
//     $.scrollify({
//         section : '.scroll',
//     });
// });


    let actionMenu = document.getElementById( "action-menu" );
    let isOpen = false;

    actionMenu.addEventListener( "click", function () {

        if ( isOpen ) {

            document.getElementById( "sub-menu" ).className = "slideShut";
            document.getElementById("action-menu").textContent = 'Læs mere om vores store kasse';
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


// $('.navbar a').on('click', function (e)
//   {
//     if(this.hash !==''){
//     e.preventDefault();
//     const hash = this.hash;
//     $('html, body').animate({
//     scrollTop: $(hash).offset().top
// },500);
// }
// })



