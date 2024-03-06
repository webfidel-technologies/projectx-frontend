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
