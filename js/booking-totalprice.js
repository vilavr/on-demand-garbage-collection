// keep track of the weights for each option
const optionWeights = {
    option1: null,
    option2: null,
    option3: null
  };
  
  document.querySelector('.order-details').addEventListener('change', function() {
    const selectedService = document.querySelector('input[name="time"]:checked').value;
    let totalPrice = 0;
  
    if (selectedService === 'bulk') {
      const bulkItems = document.querySelectorAll('.form-container input[name="field[]"]');
      bulkItems.forEach(function(item) {
        const itemWeight = parseInt(item.value);
        if (!isNaN(itemWeight)) {
          totalPrice += itemWeight * 3;
        }
      });
    } else if (selectedService === 'regular') {
      totalPrice = 10;
    } else if (selectedService === 'recycling') {
      totalPrice = 15;
    }
  
    document.querySelector('.total-price p:last-of-type').textContent = totalPrice.toFixed(2) + ' EUR';
  });
  
  // add event listeners to the weight inputs for each option
  const optionInputs = document.querySelectorAll('.form-container input[name="field[]"]');
  optionInputs.forEach(function(input) {
    const select = input.nextElementSibling;
    const optionValue = select.value;
  
    // update the weight and price when the input value changes
    input.addEventListener('change', function() {
      const weight = parseInt(input.value);
      if (!isNaN(weight)) {
        optionWeights[optionValue] = weight;
        updateTotalPrice();
      }
    });
  
    // remove the weight and price when the input is deleted
    input.addEventListener('input', function() {
      if (input.value === '') {
        optionWeights[optionValue] = null;
        updateTotalPrice();
      }
    });
  
    // update the weight and price when the option is changed
    select.addEventListener('change', function() {
      const newOptionValue = select.value;
      if (optionWeights[newOptionValue] !== null) {
        input.value = optionWeights[newOptionValue];
        optionWeights[optionValue] = null;
        optionValue = newOptionValue;
        updateTotalPrice();
      } else {
        optionWeights[newOptionValue] = optionWeights[optionValue];
        optionWeights[optionValue] = null;
        optionValue = newOptionValue;
        input.value = '';
        updateTotalPrice();
      }
    });
    
    // remove the weight and price when the remove button is clicked
    input.parentElement.querySelector('.remove-btn').addEventListener('click', function() {
      optionWeights[optionValue] = null;
      input.value = '';
      updateTotalPrice();
    });
  });
  // function to update the total price based on the current weights
  function updateTotalPrice() {
    let totalPrice = 0;
    for (const optionValue in optionWeights) {
      const weight = optionWeights[optionValue];
      if (weight !== null) {
        totalPrice += weight * 3;
      }
    }
    document.querySelector('.total-price p:last-of-type').textContent = totalPrice.toFixed(2) + ' EUR';
  }