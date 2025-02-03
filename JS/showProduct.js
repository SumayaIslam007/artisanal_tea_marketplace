function search_product() {
    let searchBox = document.getElementById("search-box").value;
    
    if (searchBox.trim() === "") {
        document.getElementById("searchProduct").innerHTML = "";
        return;
    }

    let xhr = new XMLHttpRequest();
    xhr.open("GET", "../controllers/searchProduct_control.php?ProductID=" + searchBox, true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("searchProduct").innerHTML = xhr.responseText;
        }
    };

    xhr.send();
}
