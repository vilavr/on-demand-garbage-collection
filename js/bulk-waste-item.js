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

  // Determine the number of existing form lines
  const numFormLines = formContainer.querySelectorAll('.form-line').length;

  if (numFormLines >= 10) {
    addButton.style.display = 'none';
    return;
  }

  // Add the HTML for the new form line
  newFormLine.innerHTML = `
    <label for="selector${numFormLines + 1}" class="item">Item ${numFormLines + 1}</label>
    <select name="selector[]" id="selector${numFormLines + 1}">
      <option value="option1">less than 5kg</option>
      <option value="option2">5 - 10 kg</option>
      <option value="option3">10 - 50 kg</option>
      <option value="option3">50 - 100 kg</option>
      <option value="option3">100 - 500 kg</option>
    </select>
    <button class="remove-btn">&minus;</button>
  `;

  // Add a click event listener to the remove button
  const removeButton = newFormLine.querySelector('.remove-btn');
  removeButton.addEventListener('click', () => {
    newFormLine.remove();
    addButton.style.display = 'inline-block';
    updateFormLineLabels();
  });

  // Add the new form line to the form container
  formContainer.insertBefore(newFormLine, addButton.parentElement);

  // Update the labels for all form lines
  updateFormLineLabels();
});

// Update the labels for all form lines
function updateFormLineLabels() {
  const formLines = formContainer.querySelectorAll('.form-line');
  formLines.forEach((formLine, index) => {
    const label = formLine.querySelector('label');
    label.textContent = `Item ${index + 1}`;
    const select = formLine.querySelector('select');
    select.id = `selector${index + 1}`;
    label.setAttribute('for', `selector${index + 1}`);
  });
}

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
