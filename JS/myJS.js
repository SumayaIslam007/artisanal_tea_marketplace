
        // Use PHP variable passed to JavaScript
        const username = htmlspecialchars(trim($_POST['username']));

        // Function to display the welcome message (redundant here, but can be extended)
        function displayWelcome() {
            const welcomeMessage = document.getElementById('welcomeMessage');
            welcomeMessage.textContent = `Welcome, ${username}`;
        }

        // Call the function when the page loads
        window.onload = displayWelcome;
    


function demoFunction() {
  // Get the button element by its ID
  const button = document.querySelector('#myButton');
  
  // Change the button's text content to "Hello World"
  button.textContent = 'Hello World';
}
