import "./bootstrap";
import 'bootstrap';
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

const deleteBtn = document.querySelectorAll(".ms_form button");
// console.log(deleteBtn);



if(deleteBtn.length > 0) {
  deleteBtn.forEach((btn) => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      // const modal = new bootstrap.Modal(document.getElementById('delete-modal'));
      
      const comicTitle = btn.dataset.comicTitle;

      document.getElementById('modal-title').innerHTML = `Stai per eliminare il Fumetto: ${comicTitle}`

      document.getElementById('btn-modal-delete').addEventListener('click', function() {
        btn.parentElement.submit();
      })
      // modal.show;
    })
  })
}

