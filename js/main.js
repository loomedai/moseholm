
    $(function ()
    {
    $.scrollify({
        section : '.scroll',
    });
});

function moveKasse(){
    let frKas=document.getElementById("frKas")
    let frKas2=document.getElementById("meanBoy")

    if (frKas.style.display=="none"){
        frKas.style.display="block"
    }

    else {
        frKas.style.display="none"

    }

    if (frKas2.style.display=="none"){
        frKas2.style.display="block"
    }

    else {
        frKas2.style.display="none"

    }

    // console.log("test")
    // let frKas=document.getElementById("frKas")
    // frKas.style.marginTop="80vh"
    //
    // let first=document.getElementById("first")
    // first.style.marginTop="20vh"

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


