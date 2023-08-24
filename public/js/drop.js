/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    drop = document.getElementById("myDropdown")
    drop.style.opacity = 0;
    drop.classList.toggle("show");
    setTimeout(() => {
          drop.style.opacity = 1;
      }, 10);
  }
