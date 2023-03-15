// Add and remove lines of bulk waste
// Get the form container
const formContainer = document.querySelector('.form-container');

// Get the add button
const addButton = document.querySelector('.add-btn');

// Add a click event listener to the add button
addButton.addEventListener('click', () => {
    // Create a new form line
    const newFormLine = document.createElement('div');
    newFormLine.classList.add('form-line');

    // Add the HTML for the new form line
    newFormLine.innerHTML = `
        <input type="text" name="field[]" placeholder="Field" />
        <select name="selector[]">
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
        </select>
        <button class="remove-btn">&minus;</button>
    `;

    // Add a click event listener to the remove button
    const removeButton = newFormLine.querySelector('.remove-btn');
    removeButton.addEventListener('click', () => {
        newFormLine.remove();
    });

    // Add the new form line to the form container
    formContainer.insertBefore(newFormLine, addButton.parentElement);
});


// Fields appear only when bulk waste removal is checked
// Hide the form container by default
formContainer.style.display = 'none';

// Get a reference to the radio buttons
const regularRadio = document.getElementById('regular');
const recyclingRadio = document.getElementById('recycling');
const bulkRadio = document.getElementById('bulk');

// Add an event listener to each radio button
regularRadio.addEventListener('change', () => {
  formContainer.style.display = 'none';
});

recyclingRadio.addEventListener('change', () => {
  formContainer.style.display = 'none';
});

bulkRadio.addEventListener('change', () => {
  formContainer.style.display = 'block';
});