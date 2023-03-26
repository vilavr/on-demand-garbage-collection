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
    if (index === 0) {
      label.textContent = 'Item 1';
      label.setAttribute('for', 'selector1');
      const select = formLine.querySelector('select');
      select.id = 'selector1';
    } else {
      const prevLabel = formLines[index - 1].querySelector('label');
      const prevNum = parseInt(prevLabel.textContent.match(/\d+/));
      const newNum = prevNum + 1;
      label.textContent = `Item ${newNum}`;
      label.setAttribute('for', `selector${newNum}`);
      const select = formLine.querySelector('select');
      select.id = `selector${newNum}`;
    }
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
