document.addEventListener("DOMContentLoaded", function() {
    var bookAppointmentButton = document.getElementById("book-appointment");
    var appointmentForm = document.getElementById("appointment-form");

    bookAppointmentButton.addEventListener("click", function() {
        if (appointmentForm.style.display === "none") {
            appointmentForm.style.display = "block";
        } else {
            appointmentForm.style.display = "none";
        }
    });
});
