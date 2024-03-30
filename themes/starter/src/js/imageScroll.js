document.addEventListener('DOMContentLoaded', () => {
    const image = document.getElementsByClassName('thumbnail');
      new simpleParallax(image, {
        overflow: true,
        scale: 1.5,
    });

    const image2 = document.getElementsByClassName('thumbnail-2');
      new simpleParallax(image2, {
        overflow: true,
        scale: 1.8,
    });
});
