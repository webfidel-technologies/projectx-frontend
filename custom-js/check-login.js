function checkLoggedIn() {
    const userToken = localStorage.getItem('userToken');

    if (userToken) { 
        // Assuming an API call for token validation and user info 
        $.ajax({
            url: 'https://getbanny-backend.up.railway.app/api/V1/dashboard', 
            type: 'GET',
            headers: {
                'Authorization': 'Bearer ' + userToken
            },
            success: function(response) {
                // Update element only if the token is valid
                $('#loginStatus1').html(`<a href="dashboard.php">Account</a>`);
                $('#loginStatus2').html(`<a href="#" id="logoutButton">Logout</a>`);
                // $('#loginStatus2').hide();
            },
            error: function() {
                // Handle error if token is invalid
                console.error('Error fetching user info. Token may be invalid.');
            }
        });
    } 
    // No else block needed - the element remains unchanged if the if condition fails
}

// Check login status on page load
$(document).ready(function() {
    checkLoggedIn();
});



$(document).ready(function() {
    $('#logoutButton').click(function(event) {
        event.preventDefault();

        // 1. Clear the userToken
        localStorage.removeItem('userToken');

        // 2. Update UI (optional)
        $('#loginStatus1').html(`<a href="register.php">Signup</a>`);
        $('#loginStatus2').html(`<a href="login.php" ">Login</a>`);

        // 3. Redirect to login page (or the desired location)
        window.location.href = 'login.php'; 
    });
});
