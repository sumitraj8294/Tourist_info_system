// Get the form and back button elements
const feedbackForm = document.getElementById('feedbackForm');
const backButton = document.getElementById('backButton');

// Add event listener for form submission
feedbackForm.addEventListener('submit', function (event) {
  event.preventDefault(); // Prevent default form submission
  // You can handle the form data submission here or with AJAX to your server
  alert('Thank you for your feedback!');
  feedbackForm.reset(); // Clear the form after submission
});

// Add event listener for back button click
backButton.addEventListener('click', function () {
  window.location.href = 'index.html'; // Replace 'home.html' with your actual home page URL
});
