function unhide (it, box) {
var check = (box.checked) ? "block" : "none";
document.getElementById(it).style.display = check;
}