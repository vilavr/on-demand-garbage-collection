// Get the relevant elements
const addButton = document.querySelector(".add-btn");
const removeButtons = document.querySelectorAll(".remove-btn");
const selectors = document.querySelectorAll(".form-container select");

// Initialize variables
let optionCounter = 1;
let isOption3 = false;

// Set the default value of the select element to "Option 1"
selectors.forEach((selector) => {
  selector.value = "option1";
});

// Add event listener to the Add button
addButton.addEventListener("click", () => {
  // Create a new form line element
  const formLine = document.createElement("div");
  formLine.classList.add("form-line");

  // Create the input element
  const input = document.createElement("input");
  input.type = "text";
  input.name = "field[]";
  input.placeholder = "Field";

  // Create the select element
  const select = document.createElement("select");
  select.name = "selector[]";
  select.disabled = true;

  // Create the options for the select element
  const option1 = document.createElement("option");
  option1.value = "option1";
  option1.textContent = "Option 1";

  const option2 = document.createElement("option");
  option2.value = "option2";
  option2.textContent = "Option 2";

  const option3 = document.createElement("option");
  option3.value = "option3";
  option3.textContent = "Option 3";

  // Add the options to the select element
  select.appendChild(option1);

  if (optionCounter >= 2) {
    select.appendChild(option2);
  }

  if (optionCounter === 3) {
    isOption3 = true;
  }

  if (!isOption3) {
    select.appendChild(option3);
  }

  // Create the remove button
  const removeButton = document.createElement("button");
  removeButton.type = "button";
  removeButton.classList.add("remove-btn");
  removeButton.textContent = "−";

  // Add the elements to the form line
  formLine.appendChild(input);
  formLine.appendChild(select);
  formLine.appendChild(removeButton);

  // Add the form line to the form container
  const formContainer = document.querySelector(".form-container");
  formContainer.insertBefore(formLine, formContainer.lastElementChild);

  // Increment the option counter
  optionCounter++;

  // Disable the Add button if option 3 has been added
  if (isOption3) {
    addButton.disabled = true;
  }

  // Add event listener to the new remove button
  removeButton.addEventListener("click", () => {
    // Remove the form line from the form container
    formContainer.removeChild(formLine);

    // Decrement the option counter
    optionCounter--;

    // Enable the Add button
    addButton.disabled = false;

    // Reset the isOption3 flag
    isOption3 = false;

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