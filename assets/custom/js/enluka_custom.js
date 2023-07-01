// script.js
document.addEventListener('DOMContentLoaded', function () {
    // Get the form element
    const contactForm = document.getElementById('contactForm');

    // Add an event listener to the form submission
    contactForm.addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent default form submission behavior

        // Get the form data
        const formData = new FormData(contactForm);

        // Make an AJAX request
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'send_mailer.php'); // Replace 'mailer.php' with your actual PHP script URL
        xhr.onload = function () {
            if (xhr.status === 200) {
                // Request succeeded
                console.log(xhr.responseText); // Log the response (optional)
                // You can display a success message or perform any desired action on the main page here
            } else {
                // Request failed
                console.error('Request failed. Status:', xhr.status);
            }
        };
        xhr.send(formData);
    });
});
