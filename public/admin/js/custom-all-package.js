document.addEventListener('DOMContentLoaded', function () {
    const addDestinationForm = document.getElementById('add-destination-form');
    const editDestinationForm = document.querySelectorAll('.edit-destination-form');
    const deleteDestinationForm = document.querySelectorAll('.delete-destination-form');

    const addTourismForm = document.getElementById('add-tourism-form');
    const editTourismForm = document.querySelectorAll('.edit-tourism-form');
    const deleteTourismForm = document.querySelectorAll('.delete-tourism-form');

    const addPackageForm = document.getElementById('add-package-form');
    const editPackageForm = document.querySelectorAll('.edit-package-form');
    const deletePackageForm = document.querySelectorAll('.delete-package-form');

    function handleFormSubmission(event) 
    {
        const form = event.target;
        event.preventDefault();

        fetch(form.action, {
            method: 'POST',
            body: new FormData(form),
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            }
        })

            .then((response) => response.json())
            .then((data) => {
                if (data.status == true) {
                    location.reload();
                }
                else
                {
                    alert(data.message)
                    console.log(data.error)
                }
            })
    }

    // destinations
    addDestinationForm.addEventListener('submit', handleFormSubmission);

    editDestinationForm.forEach((form) => {
        form.addEventListener('submit', handleFormSubmission);
    });

    deleteDestinationForm.forEach((form) => {
        form.addEventListener('submit', handleFormSubmission);
    });
    
    // tourism
    addTourismForm.addEventListener('submit', handleFormSubmission);

    editTourismForm.forEach((form) => {
        form.addEventListener('submit', handleFormSubmission);
    });

    deleteTourismForm.forEach((form) => {
        form.addEventListener('submit', handleFormSubmission);
    });

    // dubai special
    addPackageForm.addEventListener('submit', handleFormSubmission);

    editPackageForm.forEach((form) => {
        form.addEventListener('submit', handleFormSubmission);
    });

    deletePackageForm.forEach((form) => {
        form.addEventListener('submit', handleFormSubmission);
    });




    // tabs
    const tabButtons = document.querySelectorAll('.nav-item .nav-link');
    const tabContents = document.querySelectorAll('.tab-content .tab-pane');
    
    function setActiveTab(tabId) {
        localStorage.setItem('activeTab', tabId);
    }

    tabButtons.forEach(function (tabButton) {
        tabButton.addEventListener('click', function () {
            const tabId = tabButton.getAttribute('data-tab-id');
            setActiveTab(tabId);
            showTabContent(tabId);
        });
    });

    function getActiveTab() {
        return localStorage.getItem('activeTab');
    }

    function showTabContent(tabId) {
        tabContents.forEach(function (tabContent) {
            const id = tabContent.getAttribute('id');
            const isActiveTab = id === tabId;
            tabContent.classList.toggle('show', isActiveTab);
            tabContent.classList.toggle('active', isActiveTab);
        });
    }

    const activeTab = getActiveTab();

    if (!activeTab || (activeTab != 'destinations' && activeTab != 'tourism' && activeTab != 'dubai-special')) {
        const firstTabButton = tabButtons[0];
        const firstTabId = firstTabButton.getAttribute('data-tab-id');
        setActiveTab(firstTabId);
        showTabContent(firstTabId);
        firstTabButton.classList.toggle('active', isTabActive);
        firstTabButton.setAttribute('aria-selected', isTabActive ? 'true' : 'false');
    } else {
        showTabContent(activeTab);
    }
    
    tabButtons.forEach(function (tabButton) {
        const tabId = tabButton.getAttribute('data-tab-id');
        const isTabActive = tabId === activeTab;
        tabButton.classList.toggle('active', isTabActive);
        tabButton.setAttribute('aria-selected', isTabActive ? 'true' : 'false');
    });
});