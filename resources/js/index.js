const hamburger = document.querySelector('#hamburger');
const title = document.querySelector('.title');

const changeBackground = (event) =>{
    console.log(event);
    title.style.backgroundColor = 'red';
}


hamburger.addEventListener('click', changeBackground)