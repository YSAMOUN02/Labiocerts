(function() {
  const suggestions = [
    { text: 'Physico-Chemical Analysis', link: 'Phy-analysis.html' },
    { text: 'Analysis Fees For Food', link: 'Food-analysis.html' },
    { text: 'Analysis Fees For Water and Waste Water', link: 'analysisfees.html' },
    { text: 'Labiocert Analysis', link: 'La-analysis.html' },
    { text: 'Pharmaceutical Testing', link: 'service-one.html' },
    { text: 'Welcome to Labiocert', link: 'welcomebio.html' },
    { text: 'Food and Feed Testing', link: 'service-two.html' },
    { text: 'Water and Wastewater Testing', link: 'service-three.html' },
    { text: 'Get a quote', link: 'getquote.html' },
    { text: 'New year and double birthday', link: 'Eventone.html' },
    { text: 'Launch of KEM', link: 'Eventtwo.html' },
    { text: 'KINAL is the symbol of the effective pain-killer', link: 'Eventthree.html' },
    { text: 'Location and Contact', link: 'location.html' },
    { text: 'The Group PPM/Confirel announces the launch of KEM', link: 'group-ppm.html' }
  ];

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
    const searchSuggestions = document.querySelector('.search-suggestions');
    searchSuggestions.innerHTML = '';

    // Remove any "No results" message if present
    const noResultsMessage = document.querySelector('.search-suggestions li.no-results');
    if (noResultsMessage) {
      noResultsMessage.remove();
    }
  }

  // Function for search icon click event
  function onSearchIconClick() {
    toggleSearchBox();
    hideSearchSuggestions(); 
  }

  // Function for clicking outside the search bar
  function onDocumentClick(event) {
    if (!event.target.closest('.search-container') && !event.target.closest('.search-box')) {
      hideSearchBox();
    }
  }

  // Function for input in search box
  function onSearchBoxInput() {
    const query = this.value.trim().toLowerCase();
    const searchSuggestions = document.querySelector('.search-suggestions');
    let hasResults = false;

    searchSuggestions.innerHTML = '';

    if (query !== '') {
      suggestions.forEach(suggestion => {
        if (suggestion.text.toLowerCase().startsWith(query)) {
          const li = document.createElement('li');
          const link = document.createElement('a');
          link.href = suggestion.link;
          link.textContent = suggestion.text;
          li.appendChild(link);
          searchSuggestions.appendChild(li);
          hasResults = true;
        }
      });

      if (!hasResults) {
        const noResultli = document.createElement('li');
        noResultli.textContent = "No results";
        noResultli.classList.add('no-results');
        searchSuggestions.appendChild(noResultli);
      }
    }
  }

  // Function for search button click
  function onSearchButtonClick(event) {
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
  }

  // Att// Media Center
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
        });

        item.addEventListener('mouseout', () => {
            item.querySelector('div').style.display = 'none';
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
// End of media centerach event listeners
  document.querySelector('.search-icon').addEventListener('click', onSearchIconClick);
  document.addEventListener('click', onDocumentClick);
  document.querySelector('.search-box input').addEventListener('input', onSearchBoxInput);
  document.querySelector('#search-button').addEventListener('click', onSearchButtonClick);
  })();

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
