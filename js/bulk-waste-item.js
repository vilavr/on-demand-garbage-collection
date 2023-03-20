// Get the relevant elements
const addButton = document.querySelector(".add-btn");
const removeButtons = document.querySelectorAll(".remove-btn");
const selectors = document.querySelectorAll(".form-container select");

// Initialize variables
let optionCounter = 1;
let isOption3 = false;

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

    // Update the options in the select elements
    selectors.forEach((selector) => {
      const options = selector.querySelectorAll("option");
      options.forEach((option) => {
        if (option.value === "option2" && optionCounter < 2) {
          selector.removeChild(option);
        }

        if (option.value === "option3" && optionCounter < 3) {
          selector.removeChild(option);
        }

        if (option.value === "option3" && optionCounter === 3) {
          isOption3 = true;
        }
      });
    });
  });
});