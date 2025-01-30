function addToCart(productId) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/artisanal_tea_marketplace/src/controllers/add_to_cart.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onload = function() {
        if (xhr.status == 200) {
            alert(xhr.responseText);
            window.location.href = "/artisanal_tea_marketplace/public/index.php?page=cart";
        } else {
            alert("Error: " + xhr.status);
        }
    };
    xhr.onerror = function() {
        alert("Request failed");
    };
    xhr.send("product_id=" + encodeURIComponent(productId));
}

function removeFromCart(productId) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/artisanal_tea_marketplace/src/controllers/remove_from_cart.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onload = function() {
        if (xhr.status == 200) {
            alert(xhr.responseText);
            location.reload();
        } else {
            alert("Error: " + xhr.status);
        }
    };
    xhr.onerror = function() {
        alert("Request failed");
    };
    xhr.send("product_id=" + encodeURIComponent(productId));
}

document.addEventListener("DOMContentLoaded", function() {
    document.body.addEventListener("click", function(event) {
        if (event.target.classList.contains("add-to-cart")) {
            var productId = event.target.getAttribute("data-product-id");
            console.log("Add to Cart button clicked, Product ID:", productId);
            addToCart(productId);
        } else if (event.target.classList.contains("remove-from-cart")) {
            var productId = event.target.getAttribute("data-product-id");
            console.log("Remove from Cart button clicked, Product ID:", productId);
            removeFromCart(productId);
        }
    });
});

function toggleNavbar() {
    var navbarDropdown = document.getElementById("navbarDropdown");
    if (navbarDropdown.style.display === "block") {
        navbarDropdown.style.display = "none";
    } else {
        navbarDropdown.style.display = "block";
    }
}