// btn-up
window.addEventListener('scroll', btnUp)

function btnUp() {
    const nav = document.getElementById('nav')
if(window.scrollY > nav.offsetHeight + 2100) {
    this.document.getElementById('up').style.display = 'block';
} else {
    document.getElementById('up').style.display = 'none';
}
}

// navbar
const nav = document.querySelector('nav')
window.addEventListener('scroll', fixNav)

function fixNav() {
if(window.scrollY > nav.offsetHeight + 150) {
    nav.classList.add('active')
} else {
    nav.classList.remove('active')
}
}