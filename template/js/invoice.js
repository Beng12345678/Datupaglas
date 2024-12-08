document.getElementById('taxForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const marketValue = parseFloat(document.getElementById('marketValue').value);
    const propertyType = document.getElementById('propertyType').value;

    let taxRate = 0;

    switch (propertyType) {
        case 'residential':
            taxRate = 0.01; // 1%
            break;
        case 'agricultural':
            taxRate = 0.01; // 1%
            break;
        case 'commercial':
            taxRate = 0.02; // 2%
            break;
        default:
            taxRate = 0;
    }

    const assessedValue = marketValue * 0.6; // Assuming a 60% assessment level
    const taxAmount = assessedValue * taxRate;

    document.getElementById('result').innerHTML = `
        <h2>Results:</h2>
        <p>Assessed Value: PHP ${assessedValue.toFixed(2)}</p>
        <p>Tax Amount: PHP ${taxAmount.toFixed(2)}</p>
    `;
});
