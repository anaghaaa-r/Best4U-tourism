document.addEventListener('DOMContentLoaded', function () {
    const addDestinationForm = document.getElementById('add-destination-form');
    const editDestinationForm = document.getElementById('edit-destination-form');
    const deleteDestinationForm = document.getElementById('delete-destination-form');

    function handleFormSubmission(event)
    {
        const form = event.target;
        event.preventDefault();
        const formData = new FormData(form);

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
            } else {
                alert(data.message);
                console.log(data.error);
            }
        })
        .catch((error) => {
            alert('An error occurred, please try again.');
            console.log("Error: ", error)
        });
    }

    addDestinationForm.addEventListener('submit', handleFormSubmission);
    editDestinationForm.addEventListener('submit', handleFormSubmission);

    deleteDestinationForm.addEventListener('submit', function (event) {
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