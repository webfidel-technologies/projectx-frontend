$(document).ready(function() {
    $('#loginForm').submit(function(event) {
        event.preventDefault();

        var formData = {
            email: $('#email').val(),
            password: $('#password').val()
        };

        $('#errorMessages').empty(); // Clear any previous error messages

        $.ajax({
            url: 'https://getbanny-backend.up.railway.app/api/V1/login', // Replace with your API login endpoint
            type: 'POST',
            data: JSON.stringify(formData),
            contentType: 'application/json',
            success: function(response) {
                console.log('Login successful:', response);

                // Assuming successful login returns a token or some identifier
                if (response.token) {
                    // Store the token for future requests
                    localStorage.setItem('userToken', response.token);

                    // Redirect to the user's profile page (or wherever makes sense)
                    window.location.href = 'myaccount.php'; 
                } 
            },
            error: function(error) {
                console.error('Login error:', error);
                // Handle login error (e.g., display an error message)
                if (error.responseJSON && error.responseJSON.message) {
                    $('#errorMessages').text(error.responseJSON.message);
                } else {
                    // Generic error message
                    $('#errorMessages').text('Invalid login credentials.'); 
                }
                
            },
            complete: function() { // Run this regardless of success/error
                // Hide the "Please wait" message
                $('#waitMessage').hide();
            }
        });
    });
});
