var image = [];
for (let i = 0; i < 3; i++) {
    image[i] = new Image();
    image[i].src = "../slide show image/" + i + ".jpg";
}
var index = 0;

function next() {
    index++;
    if (index >= image.length) {
        index = 0;
    }
    var anh = document.getElementById("anh");
    anh.src = image[index].src;
}
function prev() {
    index--;
    if (index < 0) {
        index = image.length - 1;
    }
    var anh = document.getElementById("anh");
    anh.src = image[index].src;
}