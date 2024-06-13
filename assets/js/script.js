// search bar
// Add click event listener to search icon to toggle the search box
(function() {
  // Function to toggle the search box visibility
  function toggleSearchBox() {
    var searchBox = document.querySelector('.search-box');
    searchBox.classList.toggle('show');
  }

  // Function to hide the search box and suggestions
  function hideSearchBox() {
    var searchBox = document.querySelector('.search-box');
    searchBox.classList.remove('show');
    hideSearchSuggestions();
  }

  // Function to hide search suggestions
  function hideSearchSuggestions() {
    const searchSuggestions = document.querySelectorAll('.search-suggestions li');
    searchSuggestions.forEach(li => {
      li.style.display = 'none';
    });

    // Remove any "No results" message if present
    const noResultsMessage = document.querySelector('.search-suggestions li.no-results');
    if (noResultsMessage) {
      noResultsMessage.remove();
    }
  }

  // Event listener for search icon click
  document.querySelector('.search-icon').addEventListener('click', function () {
    toggleSearchBox();
    hideSearchSuggestions(); // Hide search suggestions when clicking on the search bar
  });

  // Event listener for clicking outside the search bar
  document.addEventListener('click', function (event) {
    if (!event.target.closest('.search-container') && !event.target.closest('.search-box')) {
      hideSearchBox();
    }
  });

  // Event listener for input in search box
  document.querySelector('.search-box input').addEventListener('input', function () {
    const query = this.value.trim().toLowerCase();
    const searchSuggestions = document.querySelectorAll('.search-suggestions li');
    let hasResults = false;

    searchSuggestions.forEach(li => {
      const text = li.textContent.trim().toLowerCase();
      if (query && text.startsWith(query)) {
        li.style.display = 'block';
        hasResults = true;
      } else {
        li.style.display = 'none';
      }
    });

    // Remove existing "No results" message if present
    const noResultsMessage = document.querySelector('.search-suggestions li.no-results');
    if (noResultsMessage) {
      noResultsMessage.remove();
    }

    // Display "No results" message if no matches found
    if (!hasResults && query !== '') {
      const noResultli = document.createElement('li');
      noResultli.textContent = "No results";
      noResultli.classList.add('no-results');
      document.querySelector('.search-suggestions').appendChild(noResultli);
    }
  });

  // Event listener for search button click
  document.querySelector('#search-button').addEventListener('click', function (event) {
    event.preventDefault();
    const query = document.querySelector('.search-box input').value.trim().toLowerCase();
    const searchSuggestions = document.querySelectorAll('.search-suggestions li');

    for (const li of searchSuggestions) {
      const text = li.textContent.trim().toLowerCase();
      if (text.startsWith(query)) {
        const link = li.querySelector('a').href;
        window.location.href = link;
        break;
      }
    }
  });
})();
// end of search bar 

// Media Center
document.addEventListener('DOMContentLoaded', () => {
  const submenuItems = document.querySelectorAll('.submenu-tropdown');
  const mediaCenter = document.getElementById('media-center');
  const allSubMenu = document.querySelector('.alls div');
  const eventsSubMenu = document.querySelector('.events-submenu');
  const newsSubMenu = document.querySelector('.news-submenu');

  // Add event listeners for each submenu item
  submenuItems.forEach(item => {
    item.addEventListener('mouseover', () => {
      item.querySelector('div').style.display = 'flex';
      item.querySelector('h3').style.backgroundColor = '#2969ff';
    });

    item.addEventListener('mouseout', () => {
      item.querySelector('div').style.display = 'none';
      item.querySelector('h3').style.backgroundColor = 'transparent';
    });
  });

  // Function to display events submenu when hovering over "Events"
  function showEventsSubMenu() {
    eventsSubMenu.style.display = 'flex';
    allSubMenu.style.display = 'none'; // Hide "All" submenu
    newsSubMenu.style.display = 'none'; // Hide news submenu
  }

  // Event listener for hovering over "Events" menu item
  document.getElementById('events').addEventListener('mouseover', showEventsSubMenu);

  // Function to display news submenu when hovering over "News"
  function showNewsSubMenu() {
    newsSubMenu.style.display = 'flex';
    allSubMenu.style.display = 'none'; // Hide "All" submenu
    eventsSubMenu.style.display = 'none'; // Hide events submenu
  }

  // Event listener for hovering over "News" menu item
  document.getElementById('news').addEventListener('mouseover', showNewsSubMenu);

  // Function to toggle dropdown
  // Function to toggle dropdown
  function toggleDropdown(icon) {
    var dropdown = icon.parentElement.nextElementSibling;
    if (dropdown.style.display === "block") {
      dropdown.style.display = "none";
      icon.classList.remove("active");
    } else {
      closeDropdowns(); // Close all dropdowns first
      dropdown.style.display = "block";
      icon.classList.add("active");
    }
  }

  // Function to close all dropdowns
  function closeDropdowns() {
    var dropdowns = document.querySelectorAll(".na-dropdown");
    dropdowns.forEach(function (dropdown) {
      dropdown.style.display = "none";
    });

    var icons = document.querySelectorAll(".dropdown-icon");
    icons.forEach(function (icon) {
      icon.classList.remove("active");
    });
  }
  var dropdownIcons = document.querySelectorAll(".dropdown-icon");
  dropdownIcons.forEach(function (icon) {
    icon.addEventListener("click", function (event) {
      event.stopPropagation(); 
      toggleDropdown(icon); 
    });
  });

  document.addEventListener("click", function (event) {
    var isClickInsideDropdown = event.target.closest(".dropdown-container");
    if (!isClickInsideDropdown) {
      closeDropdowns();
    }
  });
  function closeNav() {
    document.getElementById("myNav").style.width = "0";
  }
  var closeButton = document.querySelector(".closebtn");
  closeButton.addEventListener("click", closeNav);
// End of Function to close all dropdowns
  // Quote Section 
  const form = document.getElementById('quoteForm');
  const responseMessage = document.getElementById('responseMessage');
  const alertMessage = document.getElementById('alertMessage');

  form.addEventListener('submit', (event) => {
      event.preventDefault();
      
      let isValid = true;

      const fields = [
          'fullName', 
          'companyName', 
          'industrySelector', 
          'contactNumber', 
          'emailAddress', 
          'inquiry'
      ];
      fields.forEach(field => {
          const input = document.getElementById(field);
          const errorElement = document.getElementById(`${field}Error`);
          if (!input.value) {
              errorElement.style.display = 'block';
              isValid = false;
          } else {
              errorElement.style.display = 'none';
          }
      });

      if (isValid) {
          responseMessage.classList.remove('hidden');
          alertMessage.classList.add('hidden');
          form.reset();
      } else {
          responseMessage.classList.add('hidden');
          alertMessage.classList.remove('hidden');
      }
  });
});
// End of Function to toggle dropdown
// navigation function remains unchanged
function navigate(event) {
  event.preventDefault();
  const url = event.target.href;
  console.log(`Navigating to: ${url}`);
  window.location.href = url;
}
// end of menu

// End of media center
// Example of swiper initialization
var swiper = new Swiper('.swiper-container', {
  pagination: {
    el: '.swiper-pagination',
    type: 'progressbar',
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
});

// slide
let slides = document.querySelectorAll('.slide');
let currentSlide = 0;
const slideInterval = 300;
function nextSlide() {
  currentSlide = (currentSlide + 1) % slides, length;
  updateCarousel();
}
function updateCarousel() {
  const offset = currentSlide * 100;
  document.querySelector('sliders').style.transform = `translateX(${offset}%)`;
}
function startCarousel() {
  setInterval(nextSlide, slideInterval);
}
startCarousel();
// end of slide
// Client 
var swiper = new Swiper('.swiper', {
  slidesPerView: 4,
  direction: getDirection(),
  loop: true,
  speed: 800,
  navigation: {
    nextEl: '.button-next',
    prevEl: '.button-prev',
  },
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  on: {
    resize: function () {
      swiper.changeDirection(getDirection());
    },
  },
});

function getDirection() {
  var windowWidth = window.innerWidth;
  return windowWidth <= 300 ? 'vertical' : 'horizontal';
}
document.querySelector('.button-next').addEventListener('click', function () {
  swiper.slideNext();
});

document.querySelector('.button-prev').addEventListener('click', function () {
  swiper.slidePrev();
});

// Quote Section 
document.addEventListener('DOMContentLoaded', () => {

});

// End of Quote Section 

// Share button 

document.querySelector('.button-container').addEventListener('click', async function (event) {
  if (event.target.id === 'share-copy') {
    const url = window.location.href;
    try {
      await navigator.clipboard.writeText(url);
      alert('Link copied to clipboard!');
    } catch (err) {
      alert('Failed to copy link.');
    }
  }
});
// End of share button

//Tablet Section
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
function oNav() {
  document.getElementById("m-Nav").style.width = "100%";
}
function cNav() {
  document.getElementById("m-Nav").style.width = "0%";
}
function toggleSearch() {
  const searchBox = document.getElementById("searchBox");
  searchBox.classList.toggle("show");
}
function performSearch() {
  const query = document.getElementById("searchInput").value;
  // Perform your search functionality here
}
// Dropdown menu mobile
document.addE
function toggleDropdown(icon) {
  icon.classList.toggle("active");
  var dropdown = icon.nexttElementSiblings;
  if (dropdown.style.display === "block") {
    dropdown.style.display = "none";
  } else {
    dropdown.style.display = "block";
  }
}

// End of Tablet Section
//search
