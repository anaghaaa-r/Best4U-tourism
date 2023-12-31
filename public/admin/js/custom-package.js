document.addEventListener('DOMContentLoaded', function () {
    const addPackageForm = document.getElementById('add-package-form');
    const editPackageForm = document.querySelectorAll('edit-package-form');
    const deletePackageForm = document.querySelectorAll('delete-package-form');

    const addDimensionError = document.getElementById('dimension-error');
    const addThumbnailInput = document.getElementById('thumbnail');

    const editDimensionError = document.getElementById('edit-dimension-error');
    const editThumbnailInput = document.getElementById('edit-thumbnail');

    function handleFormSubmission(event)
    {
        const form = event.target;
        event.preventDefault();
        const formData = new FormData(form);

        const dimensionError = form === addPackageForm ? addDimensionError : editDimensionError;
        const thumbnailInput = form === addPackageForm ? addThumbnailInput : editThumbnailInput;

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
                dimensionError.textContent = data.message;
                thumbnailInput.scrollIntoView({ behavior: 'smooth', block: 'center' });
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

    addPackageForm.addEventListener('submit', handleFormSubmission);

    editPackageForm.forEach((form) => {
        form.addEventListener('submit', handleFormSubmission);
    });

    deletePackageForm.forEach((form) => {
        form.addEventListener('submit', handleFormSubmission);
    });

});