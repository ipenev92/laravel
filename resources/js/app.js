import './bootstrap';

function autoResize() {
    console.log('test');
    const textarea = document.getElementById("textarea");
    textarea.style.height = "auto";
    textarea.style.height = textarea.scrollHeight + "px";
}