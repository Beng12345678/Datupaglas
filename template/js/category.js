function showInfo(type) {
  const infoPopup = document.getElementById('infoPopup');
  const infoContent = document.getElementById('infoContent');

  // Set content based on the clicked item
  switch(type) {
    case 'agriculturalInfo':
      infoContent.innerHTML = '<h3>Agricultural Information</h3><p>Used for farming, forestry, livestock, aquaculture, and other agricultural acrivities. including rice fields, vegetable farms, orchards, plantation, and livestock ranches</p><br><p>Assessed Value: <strong> 40% </strong></p>';
      break;
    case 'commercialInfo':
      infoContent.innerHTML = '<h3>Commercial Information</h3><p>Details about commercial properties and business opportunities.</p>';
      break;
    case 'industrialInfo':
      infoContent.innerHTML = '<h3>Industrial Information</h3><p>Details about industrial sites, factories, and manufacturing.</p>';
      break;
    case 'mineralInfo':
      infoContent.innerHTML = '<h3>Mineral Information</h3><p>Details about mineral resources and extraction methods.</p>';
      break;
    case 'residentialInfo':
      infoContent.innerHTML = '<h3>Residential Information</h3><p>Details about residential areas, housing types, and living conditions.</p>';
      break;
    case 'timberlandInfo':
      infoContent.innerHTML = '<h3>Timberland Information</h3><p>Details about timber resources, forestry, and conservation.</p>';
      break;
    default:
      infoContent.innerHTML = '<p>No information available.</p>';
  }

  infoPopup.style.display = 'block'; // Show the popup
}

function closeInfo() {
  const infoPopup = document.getElementById('infoPopup');
  infoPopup.style.display = 'none'; // Hide the popup
}
