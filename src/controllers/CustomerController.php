<?php

class CustomerController {
    public function showView($viewName) {
        $viewPath = __DIR__ . "/../views/$viewName.php";

        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            echo "View not found: $viewName";
        }
    }
}

?>