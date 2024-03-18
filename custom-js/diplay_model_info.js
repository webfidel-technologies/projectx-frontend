// Function to get the query parameter value from the URL
function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
  }
  
  // Function to fetch user data from the API
  function fetchUserData(userId) {
    const apiEndpoint = `https://your-api.com/users/${userId}`;
  
    return fetch(apiEndpoint)
      .then(response => response.json())
      .then(data => data)
      .catch(error => console.error('Error fetching user data:', error));
  }
  
  // Function to display user information on the page
  function displayUserInfo(userData) {
    const userInfoContainer = document.getElementById('userInfoContainer');
    userInfoContainer.innerHTML = `
      <h2>${userData.name}</h2>
      <p>Email: ${userData.email}</p>
      <p>Phone: ${userData.phone}</p>
      <!-- Add more user information fields as needed -->
    `;
  }
  
  // Get the id query parameter from the URL
  const userId = getQueryParam('id');
  
  // Fetch user data from the API using the id
  fetchUserData(userId)
    .then(userData => {
      // Display the user information on the page
      displayUserInfo(userData);
    })
    .catch(error => {
      console.error('Error fetching or displaying user data:', error);
    });