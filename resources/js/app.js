import "./bootstrap";
import Swal from "sweetalert2";
window.Swal = Swal;
import toastr from "toastr";
window.toastr = toastr;
import "toastr/build/toastr.min.css";

toastr.options = {
    closeButton: true,
    debug: false,
    newestOnTop: true,
    progressBar: true, // Aktifkan progress bar
    preventDuplicates: false,
    onclick: null,
    showDuration: 300,
    hideDuration: 1000,
    timeOut: 5000,
    extendedTimeOut: 1000,
    tapToDismiss: true,
};
