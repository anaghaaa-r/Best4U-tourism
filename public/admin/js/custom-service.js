document.addEventListener('DOMContentLoaded', function () {
    const addServiceForm = document.getElementById('add-service-form');
    const editServiceForm = document.getElementById('edit-service-form');
    const deleteServiceForm = document.getElementById('delete-service-form');

    // const addDimensionError = document.getElementById('dimension-error');
    // const addThumbnailInput = document.getElementById('thumbnail');

    // const editDimensionError = document.getElementById('edit-dimension-error');
    // const editThumbnailInput = document.getElementById('edit-thumbnail');

    function handleFormSubmission(event)
    {
        const form = event.target;
        event.preventDefault();
        const formData = new FormData(form);

        // const dimensionError = form === addServiceForm ? addDimensionError : editDimensionError;
        // const thumbnailInput = form === addServiceForm ? addThumbnailInput : editThumbnailInput;

        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value,
            }
        })

        .then((response) => response.json())
        .then((data) => {
            if (data.status === true) {
                alert(data.message);
                location.reload();
            }
            else if (data.error == 'dimensionError')
            {
                // dimensionError.textContent = data.message;
                // thumbnailInput.scrollIntoView({ behavior: 'smooth', block: 'center' });
                alert(data.message)
                console.log(data.error)
            }
            else
            {
                alert(data.message);
                console.log(data.error);
            }
        })
        .catch((error) => {
            dimensionError.textContent = '';
            alert('An error occurred, please try again.');
            form.reset();
            console.log("Error: ", error)
        });
    }

    addServiceForm.addEventListener('submit', handleFormSubmission);
    editServiceForm.addEventListener('submit', handleFormSubmission);

    deleteServiceForm.addEventListener('submit', function (event) {
        const form = event.target;
        event.preventDefault();
        const formData = new FormData(form);

        fetch(form.action, {
            method: 'DELETE',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value,
            }
        })

            .then((response) => response.json())
            .then((data) => {
                if(data.status == true)
                {
                    alert(data.message);
                    location.reload();
                }
                else
                {
                    alert(data.message)
                    console.log(data.error);
                }
            })
            .catch((error) => {
                alert('An error occured, please try again later.');
                console.log("Error: ", error);
            })
    })
});