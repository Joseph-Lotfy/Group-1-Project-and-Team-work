

let searchWord = document.getElementById("search-word");
function clickSearchEvent(){
    searchWord.style.display = "inline";
}
function clickEvent(){
    searchWord.style.display = "hidden";
}



let rightNav = document.getElementById('right-nav');
let navbarToggler = document.getElementById('navbar-toggler');
let closeButton = document.getElementById('close-button');
let navBarState = 0;
navbarToggler.addEventListener('click',() => {
        rightNav.style.transform = 'translate(0px, 0px)';
        navBarState = 1;
        if(screen.width < 1000){
            rightNav.style.transform = 'translate(-50px, 0px)';
            navBarState = 1;
        }
})
closeButton.addEventListener('click',() => {

    rightNav.style.transform = 'translate(400px, 0px)';
    navBarState = 0;

})