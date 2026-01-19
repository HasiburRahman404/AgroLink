const images = [
    "../images/agriculture-background.jpg",
    "../images/ag1.jpg",
    "../images/ag2.jpg",
    "../images/ag3.jpg"
];

let index = 0;

setInterval(() => {
    index = (index + 1) % images.length;
    document.getElementById("slideshow").src = images[index];
}, 3000);
