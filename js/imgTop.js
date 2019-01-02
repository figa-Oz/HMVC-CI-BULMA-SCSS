document.writeln('<div id="imgTop" style="cursor:pointer; z-index: 999; top: 0 !important;">
document.writeln('<img src="header1.jpg" alt="Konsultasi" />');
document.writeln('</div>');

$("#imgTop").click(function(){
  window.open('tel:082166660303');
});

window.onscroll = changePos;

function changePos() {
    var header = document.getElementById("imgTop");
    if (window.pageYOffset > 70) {
        header.style.position = "absolute";
        header.style.top = pageYOffset + "px";
    }
    else {
        header.style.position = "";
        header.style.top = "0px";
    }
}
