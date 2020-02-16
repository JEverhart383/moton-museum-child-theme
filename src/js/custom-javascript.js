// Add your custom JS here.

window.addEventListener('DOMContentLoaded', setHeightToTallestCard);
window.addEventListener('resize', setHeightToTallestCard); 


function setHeightToTallestCard() {
  var cards = document.querySelectorAll('.child-card-container .card');
  var tallestCard = 0; 
  for (var i = 0; i < cards.length; i++) {
    if (cards[i].offsetHeight > tallestCard) {
      tallestCard = cards[i].offsetHeight;
    }
  }
  for (var j = 0; j < cards.length; j++) {
    cards[j].style.height = tallestCard + 'px';
  }
}