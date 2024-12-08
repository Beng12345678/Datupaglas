function calculateTax() {
    // Get values from the input fields
    const assessmentLevel = parseFloat(document.getElementById("assessmentLevel").value);
    const marketValue = parseFloat(document.getElementById("marketValue").value);
    const taxRate = parseFloat(document.getElementById("taxRate").value);

    // Validate input values
    if (isNaN(assessmentLevel) || isNaN(marketValue) || isNaN(taxRate)) {
        alert("Please enter valid numbers for all fields.");
        return;
    }

    // Calculate assessed value
    const assessedValue = marketValue * (assessmentLevel / 100);

    // Calculate tax amount
    const taxAmount = assessedValue * (taxRate / 100);

    // Display the results
    document.getElementById("assessedValue").textContent = assessedValue.toFixed(2);
    document.getElementById("taxAmount").textContent = taxAmount.toFixed(2);
}