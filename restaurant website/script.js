document.addEventListener('DOMContentLoaded', () => {
    const bookingForm = document.getElementById('bookingForm');

    bookingForm.addEventListener('submit', (e) => {
        e.preventDefault();

        const formData = new FormData(bookingForm);
        const formObject = {};

        formData.forEach((value, key) => {
            formObject[key] = value;
        });

        alert(JSON.stringify(formObject, null, 2));
    });
});
