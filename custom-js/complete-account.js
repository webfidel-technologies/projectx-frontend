// Function to fetch user data
function fetchUserData() {
    const userToken = localStorage.getItem('userToken');

    if (userToken) {
        $.ajax({
            url: 'https://getbanny-backend.up.railway.app/api/V1/dashboard',
            type: 'GET',
            headers: {
                'Authorization': 'Bearer ' + userToken
            },
            success: function(response) {
                console.log('User data:', response);
                displayUserData(response); 
            },
            error: function(error) {
                console.error('Error fetching user data:', error);
                // Handle error (e.g., display error message, redirect if unauthorized)
            }
        });
    } else {
        // Handle case where the user is not logged in
    }
}

// Function to display fetched user data
function displayUserData(data) {
    // Example - Display name and email
    $('#displayName').text(data.user.display_name);
    $('#userEmail').text(data.user.email);

    // Customize to display the desired pieces of user information
}

// Call the function to fetch data when the page is ready
$(document).ready(function() {
    fetchUserData();
});



$(document).ready(function() {
    $('#updateProfileForm').submit(function(event) {
        event.preventDefault();

        const userToken = localStorage.getItem('userToken');
        if (!userToken) {
            // Handle the case where the user is not logged in 
            return;
        }

        // Clear previous messages
        $('#updateMessage').empty(); 

        const formData = {
            country: $('#country').val(),
            state: $('#state').val(),
            city: $('#city').val(),
            zip_code: $('#zip_code').val(),
            address: $('#address').val(),
            // ... add other fields as needed
        };

        $.ajax({
            url: 'https://getbanny-backend.up.railway.app/api/V1/dashboard/bios/create', // Replace with your API endpoint
            type: 'POST', // Use the appropriate HTTP method (PUT or PATCH)
            headers: {
                'Authorization': 'Bearer ' + userToken
            },
            data: JSON.stringify(formData),
            contentType: 'application/json',
            success: function(response) {
                console.log('Profile updated:', response);
                $('#updateMessage').text('Profile updated successfully!');
                window.location.href = 'dashboard.php'; // Redirect to the user's profile page
            },
            error: function(error) {
                console.error('Profile update error:', error);
                // Handle errors from the API
                if (error.responseJSON && error.responseJSON.errors) {
                    // Example: Display specific error messages
                    for (const errorKey in error.responseJSON.errors) {
                        $('#updateMessage').append(`<p>${error.responseJSON.errors[errorKey]}</p>`);
                    }
                } else {
                    $('#updateMessage').text('An error occurred while updating your profile.');
                }
            }
        });
    });
});
