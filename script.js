function toggleMenu() {
  const menu = document.querySelector(".menu-links");
  const icon = document.querySelector(".hamburger-icon");
  menu.classList.toggle("open");
  icon.classList.toggle("open");
}


document.addEventListener('DOMContentLoaded', function() {
  const form = document.querySelector('.form-control');
  form.addEventListener('submit', function(event) {
      event.preventDefault();
      
      const name = document.querySelector('input[name="name"]').value.trim();
      const email = document.querySelector('input[name="email"]').value.trim();
      const message = document.querySelector('textarea[name="message"]').value.trim();
      
      if (!name || !email || !message) {
          alert('All fields are required.');
          return;
      }

      if (!validateEmail(email)) {
          alert('Invalid email format.');
          return;
      }

      // Create form data
      const formData = new FormData();
      formData.append('name', name);
      formData.append('email', email);
      formData.append('message', message);

      // Send data to PHP script
      fetch('form-handler.php', {
          method: 'POST',
          body: formData
      })
      .then(response => response.text())
      .then(result => {
          alert(result);
      })
      .catch(error => {
          console.error('Error:', error);
      });
  });

  function validateEmail(email) {
      const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return re.test(email);
  }
});