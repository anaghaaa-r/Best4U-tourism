document.addEventListener('DOMContentLoaded', function () {
    const addTourismForm = document.getElementById('add-tourism-form');
    const editTourismForm = document.getElementById('edit-tourism-form');
    const deleteTourismForm = document.getElementById('delete-tourism-form');

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

    addTourismForm.addEventListener('submit', handleFormSubmission);
    editTourismForm.addEventListener('submit', handleFormSubmission);

    deleteTourismForm.addEventListener('submit', function (event) {
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