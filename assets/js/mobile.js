document.addEventListener('DOMContentLoaded', function () {
  const inputs = document.getElementById('s-input');
  const stions = document.getElementById('s-suggestions');
  const sItems = stions.querySelectorAll('li');
  const sButton = document.getElementById('s-button');
  const sLink = document.getElementById('s-link');

  function updateSuggestions() {
      const query = inputs.value.toLowerCase().trim();
      let matches = 0;

      sItems.forEach(item => {
          const text = item.textContent.toLowerCase();
          if (text.includes(query)) {
              item.style.display = 'block';
              matches++;
          } else {
              item.style.display = 'none';
          }
      });

      const nResults = stions.querySelector('.no-results');
      if (matches === 0 && query !== '') {
          if (!nResults) {
              const nResultsItem = document.createElement('li');
              nResultsItem.className = 'no-results';
              nResultsItem.textContent = 'No results found';
              stions.appendChild(nResultsItem);
          }
      } else {
          if (nResults) {
              nResults.remove();
          }
      }

      stions.style.display = (matches > 0 || query === '') ? 'block' : 'none';
  }

  inputs.addEventListener('input', updateSuggestions);
  inputs.addEventListener('focus', function () {
      if (inputs.value.trim() !== '') {
          updateSuggestions();
      }
  });

  inputs.addEventListener('blur', function () {
      setTimeout(() => { stions.style.display = 'none'; }, 0);
  });

  inputs.addEventListener('keydown', function (event) {
      if (event.key === 'Backspace' && inputs.value.trim() === '') {
          stions.style.display = 'none';
      }
  });

  sItems.forEach(item => {
      item.addEventListener('click', function () {
          inputs.value = item.textContent;
          stions.style.display = 'none';
      });
  });

  sButton.addEventListener('click', function (event) {
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
              const nResultsItem = document.createElement('li');
              nResultsItem.className = 'no-results';
              nResultsItem.textContent = 'No results found';
              stions.appendChild(nResultsItem);
          }
          stions.style.display = 'block';
      }
  });
});
