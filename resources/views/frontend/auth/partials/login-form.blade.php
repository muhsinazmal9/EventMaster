<form action="{{ url('api/login') }}" method="post" class="mt-5" id="login-form">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control rounded-0" id="email" name="email" autofocus>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control rounded-0" id="password" name="password">
    </div>
    <x-buttons.primary :type="'submit'">Continue</x-buttons.primary>
    <p class="mt-3 text-muted">By continuing, you agree to EventMaster's <a href="/">Terms of Service</a></p>
</form>

@push('scripts')
    <script>
        const loginForm = $('#login-form');

        loginForm.submit(function(event) {
            event.preventDefault();
            disableFormButton(loginForm);

            const url = loginForm.attr('action');
            const method = loginForm.attr('method');
            const formData = loginForm.serialize();

            $.ajax({
                url,
                method,
                data: formData,
                dataType: 'json',
                success: handleSuccess,
                error: handleError
            }).always(function() {
                enableFormButton(loginForm);
            });

            function handleSuccess(response) {
                if (response.success) {
                    console.log(response);
                } else {
                    console.log(response);
                    displayErrors(loginForm, response.data.errors);
                }
            }

            function handleError(xhr) {
                console.log(xhr);
                enableFormButton(loginForm);
                // displayErrors(loginForm, xhr.responseJSON.errors);
            }

            function disableFormButton(form) {
                form.find('button[type="submit"]')
                    .prop('disabled', true)
                    .html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>&nbsp;&nbsp;Processing...');
            }

            function enableFormButton(form) {
                form.find('button[type="submit"]')
                    .prop('disabled', false)
                    .html('Continue');
            }

            function displayErrors(form, errors) {
                if (errors) {
                    form.find('.invalid-feedback').remove();
                    Object.keys(errors).forEach(function(key) {
                        const errorMessage = errors[key][0];
                        const inputElement = $(`#${key}`);

                        inputElement.addClass('is-invalid');
                        inputElement.after(`<span class="invalid-feedback" role="alert">
                            <strong>${errorMessage}</strong>
                        </span>`);
                    });
                }
            }
        });
    </script>
@endpush
