// JavaScript validation
document.addEventListener("DOMContentLoaded", function () {
    const paymentForm = document.getElementById('paymentForm');

    if (paymentForm) {
        paymentForm.addEventListener("submit", function (event) {
            // Get the values of the required fields
            var cardNumber = document.getElementById("cardNumber").value;
            var expiryDate = document.getElementById("expiryDate").value;
            var cvv = document.getElementById("cvv").value;
            var cardName = document.getElementById("cardName").value;

            // Check if any of the required fields are empty
            if (!cardNumber || !expiryDate || !cvv || !cardName) {
                // Display an error message
                alert("Please fill out all fields.");
                // Prevent form submission
                event.preventDefault();
            }
        });
    }
});
