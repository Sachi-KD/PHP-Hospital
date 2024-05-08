function validateForm() {
    // Retrieve form inputs
    var fullName = document.getElementById('fullName').value.trim();
    var emailAddress = document.getElementById('emailAddress').value.trim();
    var subject = document.getElementById('subject').value.trim();
    var message = document.getElementById('message').value.trim();

    // Check if any field is empty
    if (fullName === '' || emailAddress === '' || subject === '' || message === '') {
      // Display SweetAlert for empty fields
      swal('Error', 'Please fill out all fields', 'error');
      return false; // Prevent form submission
    }

    // Validate email format
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(emailAddress)) {
      // Display SweetAlert for invalid email format
      swal('Error', 'Please enter a valid email address', 'error');
      return false; // Prevent form submission
    }

    // Submit the form via AJAX
    var formData = new FormData(document.getElementById('contact'));
    fetch('mail.php', {
        method: 'POST',
        body: formData
      })
      .then(response => {
        // Check if the response indicates success
        if (response.ok) {
          return response.json(); // Parse JSON response
        } else {
          throw new Error('Failed to send message. Please try again later.');
        }
      })
      .then(data => {
        // Check if the email was sent successfully
        if (data.success) {
          // Display success SweetAlert
          swal('Success', 'Your message has been sent successfully!', 'success');
          // Reset form fields after successful submission if needed
          document.getElementById('contact').reset();
        } else {
          // Display error SweetAlert if email sending failed
          swal('Error', 'Failed to send message. Please try again later.', 'error');
        }
      })
      .catch(error => {
        // Display error SweetAlert if an error occurs during submission
        swal('Error', error.message, 'error');
        console.error('Error:', error);
      });

    return false; // Prevent default form submission
  }