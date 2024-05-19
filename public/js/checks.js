function toggleCheckbox(checkboxButton) {
    const checkbox = checkboxButton.querySelector('input[type="checkbox"]');
    checkbox.checked = !checkbox.checked;

    calculateTotal();
}

function calculateTotal() {
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    let total = 0;
    checkboxes.forEach(checkbox => {
        if (checkbox.checked) {
            total += parseInt(checkbox.value);
        }
    });
    document.getElementById('total-amount').textContent = total;
}