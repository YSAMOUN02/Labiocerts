function initializeSearch() {
    const stions = [
        { text: 'Physico-Chemical Analysis', link: '/service/foodtesting/physicoanalysis' },
        { text: 'Analysis Fees For Food', link: '/service/foodtesting/analysisfeesforfood' },
        { text: 'Analysis Fees For Water and Waste Water', link: '/services/watertesting/analysisfees' },
        { text: 'Labiocert Analysis', link: '/service/pharamaceutial/testparameter' },
        { text: 'Pharmaceutical Testing', link: '/service/pharmaceutical' },
        { text: 'Welcome to Labiocert', link: '/welcomelabiocert' },
        { text: 'Food and Feed Testing', link: '/service/foodtesting' },
        { text: 'Water and Wastewater Testing', link: '/service/watertesting' },
        { text: 'Get a quote', link: '/service/pharmaceutical/quote' },
        { text: 'New year and double birthday', link: '/media/newyear' },
        { text: 'Launch of KEM', link: '/media/launchofKEM' },
        { text: 'KINAL is the symbol of the effective pain-killer', link: '/media/kinal' },
        { text: 'Location and Contact', link: '/location' },
        { text: 'The Group PPM/Confirel announces the launch of KEM', link: '/media/ppmandconfirel' }
    ];

    const sInput = document.getElementById('s-input');
    const sSuggestions = document.getElementById('s-suggestions');

    // Function to create suggestion items
    function createSuggestionItems() {
        sSuggestions.innerHTML = ''; // Clear any existing suggestions
        stions.forEach(suggestion => {
            const li = document.createElement('li');
            const a = document.createElement('a');
            a.href = suggestion.link;
            a.textContent = suggestion.text;
            li.appendChild(a);
            sSuggestions.appendChild(li);
        });
    }

    function onInput() {
        const filter = sInput.value.toLowerCase();
        let hasResults = false;

        Array.from(sSuggestions.getElementsByTagName('li')).forEach(item => {
            const text = item.textContent || item.innerText;
            if (text.toLowerCase().includes(filter) && text.toLowerCase().startsWith(filter[0])) {
                item.style.display = '';
                hasResults = true;
            } else {
                item.style.display = 'none';
            }
        });

        if(!hasResults && filter.length > 0){
            const noResultItem = document.createElement('li');
            noResultItem.textContent = 'No results found';
            noResultItem.style.color = 'white'; 
            sSuggestions.appendChild(noResultItem);
            sSuggestions.style.display = 'block'; 
        }else{
            sSuggestions.style.display = hasResults ? 'block' : 'none';  
        }
    }

    function onFocus() {
        sSuggestions.style.display = sInput.value ? 'block' : 'none';
    }

    function onClick(e) {
        if (!sInput.contains(e.target) && !sSuggestions.contains(e.target)) {
            sSuggestions.style.display = 'none';
        }
    }

    function onKeyDown(e) {
        if (e.key === 'Enter') {
            const query = sInput.value.toLowerCase();
            const match = stions.find(suggestion => suggestion.text.toLowerCase() === query);
            if (match) {
                window.location.href = match.link;
            }
        }
    }

    createSuggestionItems();

    sInput.addEventListener('input', onInput);
    sInput.addEventListener('focus', onFocus);
    document.addEventListener('click', onClick);
    sInput.addEventListener('keydown', onKeyDown);
}

function setupDOMContentLoadedListener() {
    document.addEventListener('DOMContentLoaded', initializeSearch);
}

// Call the function to set up the event listener
setupDOMContentLoadedListener();
