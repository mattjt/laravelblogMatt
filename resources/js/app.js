require('./bootstrap');

let zoomLevel = 1;
let isDragging = false;
let startX, startY, initialX, initialY;

document.addEventListener('DOMContentLoaded', () => {
    const image = document.getElementById('skillTreeImage');
    const container = image.parentElement;

    function zoomIn() {
        zoomLevel += 0.1;
        image.style.transform = `scale(${zoomLevel})`;
    }

    function zoomOut() {
        zoomLevel -= 0.1;
        image.style.transform = `scale(${zoomLevel})`;
    }

    function resetImage() {
        zoomLevel = 1;
        image.style.transform = `scale(${zoomLevel})`;
        image.style.left = '0px';
        image.style.top = '0px';
    }

    container.addEventListener('mousedown', (e) => {
        isDragging = true;
        startX = e.clientX;
        startY = e.clientY;
        initialX = image.offsetLeft;
        initialY = image.offsetTop;
        container.style.cursor = 'grabbing';
    });

    container.addEventListener('mousemove', (e) => {
        if (isDragging) {
            const dx = e.clientX - startX;
            const dy = e.clientY - startY;
            image.style.left = `${initialX + dx}px`;
            image.style.top = `${initialY + dy}px`;
        }
    });

    container.addEventListener('mouseup', () => {
        isDragging = false;
        container.style.cursor = 'grab';
    });

    container.addEventListener('mouseleave', () => {
        isDragging = false;
        container.style.cursor = 'grab';
    });

    document.querySelector('button[onclick="zoomIn()"]').addEventListener('click', zoomIn);
    document.querySelector('button[onclick="zoomOut()"]').addEventListener('click', zoomOut);
    document.querySelector('button[onclick="resetImage()"]').addEventListener('click', resetImage);
});
