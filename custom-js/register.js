$(document).ready(function() {
    $('#registrationForm').submit(function(event) {
        event.preventDefault(); // Prevent default form submission

        // Show the "Please wait" message
        $('#waitMessage').show();

        var formData = {
            display_name: $('#display_name').val(),
            email: $('#email').val(),
            phone_number: $('#phone_number').val(),
            dob: $('#dob').val(),
            gender: $('#gender').val(),
            password: $('#password').val(),
            password_confirmation: $('#password').val()
        };

        $('#errorMessages').empty(); // Clear any previous error messages

        $.ajax({
            url: 'https://getbanny-backend.up.railway.app/api/V1/register', // Replace with your actual API endpoint
            type: 'POST',
            data: JSON.stringify(formData),
            contentType: 'application/json',
            success: function(response) {
                console.log('Registration successful:', response);
                // Handle successful registration (e.g., display a message, redirect)
                // Redirect to login page (adjust the URL as needed)
                window.location.href = 'login.php?registered=true'; // Redirect to login page with a query string parameter
            },
            error: function(error) {
                console.error('Registration error:', error);
                // Handle registration error (e.g., display an error message)
                // Handle API errors
                // Clear any previous error messages
                $('#errorMessages').empty(); 

                if (error.responseJSON && error.responseJSON.error && error.responseJSON.error.message) {
                    const errorMessage = error.responseJSON.error.message;
                    $('#errorMessages').text(errorMessage);
                } 
                
                else {
                    // Generic error message
                    $('#errorMessages').text('An error occurred during registration.'); 
                }

            },
            complete: function() { // Run this regardless of success/error
                // Hide the "Please wait" message
                $('#waitMessage').hide();
            }
        });
    });
});
