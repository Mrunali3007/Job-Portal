// qualifications.js
document.getElementById("qualificationForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting

    // Get the form data
    const formData = new FormData(event.target);

    // You can now process the form data as needed (e.g., save to a database, perform validation, etc.)
    // For this example, we'll just log the form data to the console.

    const formDataObject = {};
    formData.forEach((value, key) => {
        formDataObject[key] = value;
    });

    console.log(formDataObject);
});
