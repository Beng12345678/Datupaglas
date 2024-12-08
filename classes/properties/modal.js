import modalContent from './modal-content.js';

function showModal(category) {
  document.getElementById("modalContent").innerHTML = modalContent[category];
  document.getElementById("infoModalLabel").textContent = category;
  const modal = new bootstrap.Modal(document.getElementById('infoModal'), {
    backdrop: false
  });
  modal.show(); 
}

export default showModal;