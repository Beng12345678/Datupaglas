import showModal from './modal.js';

// Define an array of categories
const categories = ['Agricultural', 'Commercial', 'Industrial', 'Mineral', 'Residential', 'Timberland'];

// Loop through the categories and call the showModal function
categories.forEach(category => {
  showModal(category);
});