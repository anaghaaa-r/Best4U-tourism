document.addEventListener('DOMContentLoaded', function () {
    const updateForm = document.getElementById('update-blog');

    updateForm.addEventListener('submit', function (event) {
        event.preventDefault();
        const form = event.target;

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
    })
})