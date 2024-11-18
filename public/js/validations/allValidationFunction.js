function validateCategoryForm(event) {
    let nameField = event.target.querySelector('#name');
    let nameError = event.target.querySelector('.name_error');
    let isValid = true;

    // Reset error state
    nameError.classList.add('hidden');

    // Validate name field (basic validation)
    if (nameField.value.trim() === '') {
        isValid = false;
        nameError.textContent = "You should enter a name";
        nameError.classList.remove('hidden');

    } else if (nameField.value.length > 255) {
        isValid = false;
        nameError.textContent = "Name should not exceed 255 characters.";
        nameError.classList.remove('hidden');
    }

    if(!isValid)
    {
        event.preventDefault();
    }

    // If validation fails, prevent form submission
    return isValid;
}


