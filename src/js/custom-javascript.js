// Add your custom JS here.

// window.addEventListener('load', setHeightToTallestCard);
// window.addEventListener('resize', setHeightToTallestCard); 


// function setHeightToTallestCard() {
//   var cards = document.querySelectorAll('.child-card-container .card');
//   if (window.innerWidth > 768) {
//     var tallestCard = 0; 
//     for (var i = 0; i < cards.length; i++) {
//       if (cards[i].offsetHeight > tallestCard) {
//         tallestCard = cards[i].offsetHeight;
//       }
//     }
//     for (var j = 0; j < cards.length; j++) {
//       cards[j].style.height = tallestCard + 'px';
//     }
//   } else {
//     for (var k = 0; k < cards.length; k++) {
//       cards[k].style.height = '';
//     }
//   }

// }
window.addEventListener('load', bootstrapSearchForm);
function bootstrapSearchForm( ) {
  // var closeSearchButton = document.getElementById('close-search-button');
  var searchFormOpen = false;
  document.querySelector('#searchform input.field').setAttribute('placeholder', 'Enter your search term')
  var searchToggleButton = document.querySelector('#main-menu [href="#search"]');
  searchToggleButton.innerHTML = '<i class="fa fa-search"></i> Search ';
  var searchWrapper = document.querySelector('.search-wrapper');
  // closeSearchButton.addEventListener('click', closeSearchForm)
  searchToggleButton.addEventListener('click', toggleSearchForm)
  function toggleSearchForm() {
    if (searchFormOpen === false) {
      searchWrapper.style.display = 'block';
      searchToggleButton.innerHTML = '<i class="fa fa-close"></i> Close';
      searchFormOpen = true
    } else {
      searchWrapper.style.display = 'none';
      searchToggleButton.innerHTML = '<i class="fa fa-search"></i> Search';
      searchFormOpen = false;
    }
  }
}