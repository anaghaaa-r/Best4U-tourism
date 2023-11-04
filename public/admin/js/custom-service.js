document.addEventListener('DOMContentLoaded', function () {
    const addServiceForm = document.getElementById('add-service-form');
    const editServiceForm = document.querySelectorAll('.edit-service-form');
    const deleteServiceBlog = document.querySelectorAll('.delete-service-form');

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

    addServiceForm.addEventListener('submit', handleFormSubmission);

    editServiceForm.forEach((form) => {
        form.addEventListener('submit', handleFormSubmission);
    });

    deleteServiceBlog.forEach((form) => {
        form.addEventListener('submit', handleFormSubmission);
    });
});