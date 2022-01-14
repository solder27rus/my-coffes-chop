var i=0;
var image=document.getElementById("gif");
// Добавьте свои картинки в массив через запятую
var imgs=new Array('Rectangle12.png','coffee_01.gif');
function imgsrc() {
    i++;
    i=imgs.length;
    image.src = imgs[i];
}
