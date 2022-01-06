
    $(function ()
    {
    $.scrollify({
        section : '.scroll',
    });
});

function moveKasse(){
    console.log("test")
    let frKas=document.getElementById("frKas")
    frKas.style.marginTop="80vh"

    let first=document.getElementById("first")
    first.style.marginTop="20vh"

}


    $('.navbar a').on('click', function (e)
    {
    if(this.hash !==''){
    e.preventDefault();
    const hash = this.hash;
    $('html, body').animate({
    scrollTop: $(hash).offset().top
},800);
}
})


