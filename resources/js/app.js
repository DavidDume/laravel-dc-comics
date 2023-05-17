import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

const deleteBtns = document.querySelectorAll("#delete_btn");

deleteBtns.forEach((b) => {
    b.addEventListener("click", (e) => {
        if (!confirm("Sei sicuro di voler eliminare")) {
            e.preventDefault();
        }
    });
});
