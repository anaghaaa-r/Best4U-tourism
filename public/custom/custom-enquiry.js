document.addEventListener('DOMContentLoaded', function () {
    const enquiryForm = document.getElementById('enquiry-form');
    const submitMessage = document.getElementById('submit-message');

    enquiryForm.addEventListener('submit', function (event) {
        const form = event.target;
        event.preventDefault();

        submitMessage.textContent = 'Sending message, Please wait.'

        fetch(form.action, {
            method: 'POST',
            body: new FormData(form),
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            }
        })

            .then((response) => response.json())
            .then((data) => {
                
                if(data.status == true)
                {
                    submitMessage.textContent = 'Message send successfully.'
                    form.reset()
                }
                else
                {
                    submitMessage.textContent = 'Could not send message. Please try again.'
                    alert(data.message)
                    console.log(data.error)
                }
            })
            .catch((error) => {
                alert('An error occurred. Please try again later')
                console.log(error)
            })
    })
})