const parallax = document.getElementById("kas1");

window.addEventListener(("scroll", fucntion (e)){
    let offset = window.pageYOffset;
    parallax.style.backgroundPositionY = offset * 0.7 + "px";
    console.log('Offset: ' + offset);
    console.log('Offset: * 0.7' + offset * 0.7);

});

