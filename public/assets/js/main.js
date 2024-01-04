var alb = document.querySelectorAll('.alb');

alb.forEach(function(btn) {
    btn.addEventListener('click' , function () {
        let albumName = this.querySelector('.albumname').textContent;
        let artistName = this.querySelector('.artistname').textContent;
        let albumImageSrc = this.querySelector('img').getAttribute('src');


        console.log('Album Name:', albumName);
                console.log('Artist Name:', artistName);
                console.log('Album Image Source:', albumImageSrc);

        document.querySelector('#exampleModalLabel').textContent = albumName;
        document.querySelector('#exampleModalImage').setAttribute('src',albumImageSrc);
    })
})