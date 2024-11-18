document.querySelector('.search-icon').addEventListener('click', function () {
    toggleSearchBox();
    hideSearchSuggestions(); // Hide search suggestions when clicking on the search bar
  });
  
  // Hide the search box and suggestions when clicking outside the search bar
  document.addEventListener('click', function (event) {
    if (!event.target.closest('.search-container') && !event.target.closest('.search-box')) {
      hideSearchBox();
    }
  });
  
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
  
  // Function to display search suggestions based on input
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
  
  // Add click event listener to search button
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
  // end of search bar 

//   second script

const inputs = document.getElementById('s-input');
const stions = document.getElementById('s-suggestions');
const sItems = stions.querySelectorAll('li');
const sButton = document.getElementById('s-button');
const sLink = document.getElementById('s-link');

function createNoResultsElement() {
    const nResultsItem = document.createElement('li');
    nResultsItem.className = 'no-results';
    nResultsItem.textContent = 'No results found';
    return nResultsItem;
}

function toggleSuggestionsDisplay(matches, query) {
    stions.style.display = (matches > 0 || query === '') ? 'block' : 'none';
}

function handleInput() {
    const query = inputs.value.toLowerCase().trim();
    let matches = 0;

    sItems.forEach(item => {
        const txt = item.textContent.toLowerCase();
        const isMatch = txt.includes(query);
        item.style.display = isMatch ? 'block' : 'none';
        if (isMatch) matches++;
    });

    const nResults = stions.querySelector('.no-results');
    if (matches === 0 && query !== '') {
        if (!nResults) {
            stions.appendChild(createNoResultsElement());
        }
    } else {
        if (nResults) {
            nResults.remove();
        }
    }

    toggleSuggestionsDisplay(matches, query);
}

function handleFocus() {
    if (inputs.value.trim() !== '') {
        handleInput();
    }
}

function handleBlur() {
    setTimeout(() => { stions.style.display = 'none'; }, 0);
}

function handleBackspace(event) {
    if (event.key === 'Backspace' && inputs.value.trim() === '') {
        stions.style.display = 'none';
    }
}

function handleItemClick(item) {
    inputs.value = item.textContent;
    stions.style.display = 'none';
}

function handleButtonClick(event) {
    event.preventDefault();
    const query = inputs.value.toLowerCase().trim();
    let found = false;

    sItems.forEach(item => {
        const text = item.textContent.toLowerCase();
        if (text === query) {
            sLink.href = item.querySelector('a').href;
            found = true;
        }
    });

    if (found) {
        window.location.href = sLink.href;
    } else {
        const nResults = stions.querySelector('.no-results');
        if (!nResults) {
            stions.appendChild(createNoResultsElement());
        }
        stions.style.display = 'block';
    }
}

inputs.addEventListener('input', handleInput);
inputs.addEventListener('focus', handleFocus);
inputs.addEventListener('blur', handleBlur);
inputs.addEventListener('keydown', handleBackspace);

sItems.forEach(item => {
    item.addEventListener('click', () => handleItemClick(item));
});

sButton.addEventListener('click', handleButtonClick);

// end of second script