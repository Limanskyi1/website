

const advantagesItems = document.querySelectorAll('.advantages__item');
const companyItems = document.querySelectorAll('.company__item');

const hoverAnim = (items) => {
    items.forEach(item => {
        item.addEventListener('mouseenter' , () => {
            items.forEach(block => block.classList.remove('active'));
            item.classList.add('active');
        })
    })
}

hoverAnim(advantagesItems);
hoverAnim(companyItems);



