@extends('backend.layouts')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />
    <main id="main" class="main">
        <div class="container">
            <form id="workerProfileForm" action="" method="POST" class="needs-validation" novalidate>
                @csrf

                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="tel" id="phone_number" name="phone_number" class="form-control" required>
                        <input type="hidden" id="full_phone_number" name="full_phone_number">
                        <div id="phone_number-error" class="invalid-feedback"></div>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            const phoneInput = document.getElementById('phone_number');
            const fullPhoneNumberInput = document.getElementById('full_phone_number');
            const phoneNumberError = document.getElementById('phone_number-error');

            const iti = window.intlTelInput(phoneInput, {
                initialCountry: "auto",
                geoIpLookup: function(callback) {
                    fetch('https://ipapi.co/json')
                        .then(response => response.json())
                        .then(data => callback(data.country_code))
                        .catch(() => callback('us'));
                },
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
            });

            phoneInput.addEventListener('input', function() {
                if (iti.isValidNumber()) {
                    phoneNumberError.textContent = '';
                    phoneInput.classList.remove('is-invalid');
                    phoneInput.classList.add('is-valid');
                } else {
                    phoneNumberError.textContent = 'Invalid phone number.';
                    phoneInput.classList.remove('is-valid');
                    phoneInput.classList.add('is-invalid');
                }
            });

            const form = document.getElementById('workerProfileForm');
            form.addEventListener('submit', function(e) {
                if (!iti.isValidNumber()) {
                    e.preventDefault();
                    phoneNumberError.textContent = 'Invalid phone number. Please correct it.';
                    phoneInput.classList.add('is-invalid');
                } else {
                    fullPhoneNumberInput.value = iti.getNumber();
                }
            });
        });
    </script>
@endsection
