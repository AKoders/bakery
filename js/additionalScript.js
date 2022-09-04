//Progress Bar start

let fullHeight, innerHeight;
const progressBar = document.querySelector('.progressbarPage>.progressbarPageLine');

window.addEventListener('scroll', fillProgressLine);
window.addEventListener('resize', fillProgressLine);

function fillProgressLine(){
    fullHeight = document.body.scrollHeight;
    innerHeight = window.innerHeight;
    progressBar.style.width = (pageYOffset*100 / (fullHeight - innerHeight))+'%';
}