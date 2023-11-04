document.addEventListener('DOMContentLoaded', function () {
    const addBlog = document.getElementById('add-blog-form');
    const updatePreview = document.querySelectorAll('.edit-blog-preview');
    const deleteBlog = document.querySelectorAll('.delete-blog');

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

    addBlog.addEventListener('submit', handleFormSubmission);

    updatePreview.forEach((form) => {
        form.addEventListener('submit', handleFormSubmission);
    });

    deleteBlog.forEach((form) => {
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

    if (!activeTab || (activeTab != 'blog' && activeTab != 'add-blog')) {
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