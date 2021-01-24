var overlay = document.getElementById("overlay");
var msgTimeout = null;

window.addEventListener('load',function() {
    msgTimeout = setTimeout(function() {
        overlay.style.display = 'none';
    }, 800);
})
