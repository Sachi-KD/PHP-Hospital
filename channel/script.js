// Function to validate the login form
function validateForm() {
    var emailAddress = document.getElementById('useremail').value.trim();
    var password = document.getElementById('userpassword').value.trim();

    // Check if any field is empty
    if (emailAddress === '' || password === '') {
        // Display SweetAlert for empty fields
        swal('Error', 'Please fill out all fields', 'error');
        return false; // Prevent form submission
    }

    // Form validation passed
    return true;
}

// Function to handle form submission
function handleFormSubmit(event) {
    // Prevent the default form submission
    event.preventDefault();

    // Validate the form
    if (!validateForm()) {
        return; // Exit the function if validation fails
    }

    // Retrieve form inputs
    var form = event.target; // Get the form element
    var formData = new FormData(form);

    // Submit the form via AJAX
    fetch('login_op.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        // Check if the response indicates success
        if (response.ok) {
            return response.json(); // Parse JSON response
        } else {
            throw new Error('Failed to log in. Please try again later.');
        }
    })
    .then(data => {
        // Check if the login was successful
        if (data.success) {
            // Display success SweetAlert
            
            if(data.utype=="Doctor"){
                swal('Success', 'Welcome Back Doctor', 'success');
            }
            else{
                swal('Success', 'Login successful!', 'success');
            }
            // Redirect to the appropriate page
             setTimeout(function() {
                // Redirect to the appropriate page
                window.location.href = data.redirect;
            }, 2000);
          
            

        } else {
            // Display error SweetAlert if login failed
            swal('Error', 'Failed to log in. Please check your credentials.', 'error');
        }
    })
    .catch(error => {
        // Display error SweetAlert if an error occurs during submission
        swal('Error', error.message, 'error');
        console.error('Error:', error);
    });
}

// Add an event listener to the form for form submission
document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('login'); // Assuming your form has id="login"
    if (form) {
        form.addEventListener('submit', handleFormSubmit);
    }
});
