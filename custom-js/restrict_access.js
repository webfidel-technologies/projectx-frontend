function checkLoggedIn() {
    const userToken = localStorage.getItem('userToken');
    return !!userToken; // Return true if token exists, otherwise false
}

// Redirect if not logged in
if (!checkLoggedIn()) {
    window.location.href = 'login.php?message=unauthorized'; // Redirect to login page with a query string parameter 
}

// ... Rest of the code for your protected page
