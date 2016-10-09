var myButton = document.getElementById('button');
var box = document.getElementById('newpost');
box.style.display = 'none';
myButton.onclick = function() {
    box = document.getElementById('newpost');
    if (box.style.display !== 'none') {
        box.style.display = 'none';
    }
    else {
        box.style.display = 'block';
    }
};