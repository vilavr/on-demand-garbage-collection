// Get the relevant elements from the DOM
const serviceSelector = document.querySelector('.service-selector');
const formContainerElem = document.querySelector('.form-container');
const addBtn = document.querySelector('.add-btn');
const totalPrice = document.querySelector('.total-price p:last-of-type');

// Calculate the total price based on the selected service and item weights
function calculateTotalPrice() {
  let total = 0;

  if (document.querySelector('#regular').checked) {
    total = 10;
  } else if (document.querySelector('#recycling').checked) {
    total = 15;
  } else if (document.querySelector('#bulk').checked) {
    const itemWeightSelects = formContainerElem.querySelectorAll('select');
    itemWeightSelects.forEach((select) => {
      const weight = select.value;
      if (weight === 'option1') {
        total += 45;
      } else if (weight === 'option2') {
        total += 90;
      } else if (weight === 'option3') {
        total += 200;
      } else if (weight === 'option4') {
        total += 420;
      } else if (weight === 'option5') {
        total += 750;
      }
    });
  }

  totalPrice.textContent = `${total.toFixed(2)} EUR`;
}

// Add event listeners to the relevant elements
serviceSelector.addEventListener('change', calculateTotalPrice);
addBtn.addEventListener('click', calculateTotalPrice);
formContainerElem.addEventListener('change', (event) => {
  if (event.target.tagName === 'SELECT') {
    calculateTotalPrice();
  }
});
formContainerElem.addEventListener('click', (event) => {
  if (event.target.classList.contains('remove-btn')) {
    calculateTotalPrice();
  }
});

// Initial calculation of the total price based on the default values
calculateTotalPrice();
