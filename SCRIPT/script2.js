const playIconContainers = document.querySelectorAll('.play-icon');

playIconContainers.forEach((iconContainer) => {
    // Set the initial state
    iconContainer.dataset.state = 'play';

    iconContainer.addEventListener('click', (e) => {
        if (iconContainer.dataset.state === 'play') {
            playIconContainers.forEach((otherIcon) => {
                if (otherIcon !== iconContainer && otherIcon.dataset.state === 'pause') {
                    otherIcon.classList.remove('bi-pause-fill');
                    otherIcon.classList.add('bi-play-fill');
                    otherIcon.dataset.state = 'play';
                    document.querySelectorAll('.audio').forEach((a) => a.pause());
                }
            });
            iconContainer.classList.remove('bi-play-fill');
            iconContainer.classList.add('bi-pause-fill');
            iconContainer.dataset.state = 'pause';


            const song = e.target.closest('.song');
            let audio = song.querySelector('.audio');
            audio.play();
        } else {

            iconContainer.classList.remove('bi-pause-fill');
            iconContainer.classList.add('bi-play-fill');
            iconContainer.dataset.state = 'play';


            const song = e.target.closest('.song');
            let audio = song.querySelector('.audio');
            audio.pause();
            audio.classList.add('last-song');
        }

        // Update the cover information
        const song = e.target.closest('.song');
        const innerText = song.querySelector('.song-name').innerHTML;
        const innerArtist = song.querySelector('.song-artist').innerHTML;
        const innerImage = song.querySelector('.song-img').src;
        const TitleName = document.getElementById('cover-song-name');
        const ArtistName = document.getElementById('cover-song-artist');
        const CoverImage = document.getElementById('cover-song-image');
        const backgroundImg = document.getElementById('bg-image');
        TitleName.innerHTML = innerText;
        ArtistName.innerHTML = innerArtist;
        CoverImage.src = innerImage;
        backgroundImg.style.background = `linear-gradient(transparent, black 100%), url( ${innerImage}) center / cover no-repeat`;
        backgroundImg.style.backgroundBlendMode = 'overlay';
    });
});
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
