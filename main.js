window.addEventListener("scroll",function(){
    var header= document.querySelector(".menu");
    header.classList.toggle("sticky",window.scrollY > 0);
})

var myIndex1 = 0;
carousel1();

function carousel1() {
  var j;
  var y = document.getElementsByClassName("mySlides");
  for (j = 0; j < 3; j++) {
    y[j].style.display = "none";  
  }
  myIndex1++;
  if (myIndex1 > 3) {myIndex1 = 1}    
  y[myIndex1-1].style.display = "block";  
  setTimeout(carousel1, 5000);
}

var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides1");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 6000);
}

function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } 
  else {
    x.style.display = "block";
  }
  

}
function myFunction1() {
  var y = document.getElementById("myLinks");
  if (y.style.display="block"){
    y.style.display = "none";
  }
 
}

let slider = 1;
showSlides(slider);

// Next/previous controls
function plusSlides(n) {
  showSlides(slider += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slider = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slider = 1}
  if (n < 1) {slider = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slider-1].style.display = "block";
  dots[slider-1].className += " active";
}
// Get the button:
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
function openFormD() {
  document.getElementById("myForm1").style.display = "block";
}

function closeFormD() {
  document.getElementById("myForm1").style.display = "none";
}

const username = sessionStorage.getItem('username');

    // Update the 'username' element with the retrieved name
    const usernameElement = document.getElementById('username');
    usernameElement.textContent = `Welcome, ${username}`;

    // Function to clear the session storage and redirect to login.html
    function logout() {
      sessionStorage.removeItem('username');
      window.location.href = 'login.html';
    }

