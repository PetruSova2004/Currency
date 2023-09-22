document.getElementById('fileInput').addEventListener('change', function() {
    var fileInput = this;
    var submitButton = fileInput.form.querySelector('input[type="submit"]');

    if (fileInput.files.length > 0) {
        submitButton.removeAttribute('disabled');
    } else {
        submitButton.setAttribute('disabled', 'disabled');
    }
});

