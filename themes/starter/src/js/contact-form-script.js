document.addEventListener('DOMContentLoaded', function() {
    let contactForm = document.getElementById('contacts-form');
    let submitBtn = document.querySelector("#submitBtn");
    if(contactForm){
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
    
            let formData = new FormData(contactForm);
    
            let xhr = new XMLHttpRequest();
            xhr.open('POST', contactForm.getAttribute('action'), true);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                     submitBtn.classList.add('_active');
                    setTimeout( () => {
                        contactForm.classList.add('_active');
                        let successMessage = document.getElementById('successMessage');
                    }, 2000);
                    setTimeout( () => {
                        successMessage.classList.add('show');
                        successMessage.style.display = 'flex';
                    }, 3000);
                }
            };
    
            xhr.send(formData);
        });
    }
});