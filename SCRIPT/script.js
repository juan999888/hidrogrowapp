document.querySelectorAll('.menu-item > .menu-link').forEach(link => {
  link.addEventListener('click', function(e) {
      e.preventDefault();
      const submenu = this.nextElementSibling;
      submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
  });
});
const myButton = document.getElementById("cerrar_s");

myButton.addEventListener("click", function() {
// Redirect to the desired URL
window.location.href = "index.html"; 
});