'use strict';

const thumbs = document.querySelectorAll('.thumb');
thumbs.forEach(function(item, index) {
    item.onclick = function() {
        document.getElementById('bigimg').src = this.dataset.image;
    }
});

const images = ['images/thumb-img-base.png', 'images/thumb-img26.png', 'images/thumb-img25.png', 'images/thumb-img24.png', 'images/thumb-img23.png', 'images/thumb-img22.png', 'images/thumb-img21.png', 'images/thumb-img20.png', 'images/thumb-img19.png', 'images/thumb-img18.png', 'images/thumb-img17.png', 'images/thumb-img16.png', 'images/thumb-img15.png', 'images/thumb-img14.png', 'images/thumb-img13.png', 'images/thumb-img12.png', 'images/thumb-img11.png', 'images/thumb-img10.png', 'images/thumb-img9.png', 'images/thumb-img8.png', 'images/thumb-img7.png', 'images/thumb-img6.png', 'images/thumb-img5.png', 'images/thumb-img4.png', 'images/thumb-img3.png', 'images/thumb-img2.png', 'images/thumb-img1.png'];

images.forEach(function(item, index) {
    preloadImage(item);
});

const bigimages = ['images/img-base.png', 'images/img26.png', 'images/img25.png', 'images/img24.png', 'images/img23.png', 'images/img22.png', 'images/img21.png', 'images/img20.png', 'images/img19.png', 'images/img18.png', 'images/img17.png', 'images/img16.png', 'images/img15.png', 'images/img14.png', 'images/img13.png', 'images/img12.png', 'images/img11.png', 'images/img10.png', 'images/img9.png', 'images/img8.png', 'images/img7.png', 'images/img6.png', 'images/img5.png', 'images/img4.png', 'images/img3.png', 'images/img2.png', 'images/img1.png'];

bigimages.forEach(function(item, index) {
    preloadImage2(item);
});

let current = 0;

function changeImage(num) {
    if(current + num >= 0 && current + num + 3 < images.length) {
        current += num;
        document.getElementById('main_image1').src = images[current];
        document.getElementById('main_image1').dataset.image = bigimages[current];

        document.getElementById('main_image2').src = images[current + 1];
        document.getElementById('main_image2').dataset.image = bigimages[current + 1];

        document.getElementById('main_image3').src = images[current + 2];
        document.getElementById('main_image3').dataset.image = bigimages[current + 2];

        document.getElementById('main_image4').src = images[current + 3];
        document.getElementById('main_image4').dataset.image = bigimages[current + 3];
    }
};

function preloadImage(path) {
    let imgTag = document.createElement('img');
    imgTag.src = path;
};

function preloadImage2(path) {
    let imgTag = document.createElement('img');
    imgTag.src = path;
};

document.getElementById('prev').onclick = function() {
    changeImage(-1);
};
document.getElementById('next').onclick = function() {
    changeImage(1);
};