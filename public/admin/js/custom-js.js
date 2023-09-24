document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.getElementById('login-form');
    const loginError = document.getElementById('login-error');
    loginError.textContent = '';

    loginForm.addEventListener('submit', function (event) {
        const form = event.target;
        if (form.id == 'login-form') 
        {
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
                    if (data.status == true) {
                        loginError.textContent = '';
                        localStorage.setItem('username', data.currentusername);
                        window.location.href = '/admin/dashboard';
                    }
                    else {
                        loginError.textContent = data.message;
                        form.reset();
                    }
                })
                .catch((error) => {
                    console.log("Error: ", error)
                    form.reset();
                })
        }
    })

});