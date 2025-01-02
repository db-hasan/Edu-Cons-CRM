    <!-- Vendor JS Files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('backend/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/js/main.js') }}"></script>
    <script src="{{ asset('backend/js/dataTables.js') }} "></script>
    <script src="{{ asset('backend/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/chart.js/chart.umd.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>

    {{-- sweetalert --}}
    <script>
        document.querySelectorAll('.btnDelete').forEach(function(btn) {
            btn.addEventListener('click', function() {
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this!",
                    icon: "warning",
                    buttons: {
                        cancel: {
                            text: "Cancel",
                            value: null,
                            visible: true,
                            className: "btn btn-secondary"
                        },
                        confirm: {
                            text: "Delete",
                            value: true,
                            visible: true,
                            className: "btn btn-danger"
                        }
                    },
                    dangerMode: true
                }).then((willDelete) => {
                    if (willDelete) {
                        this.closest('.deleteForm').submit();
                    }
                });
            });
        });
    </script>


    {{-- toastr --}}
    <script>
        @if (Session::has('success'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('success') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>

    {{-- DataTable --}}
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>


    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>

    {{-- needs-validation --}}
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
        })
        })()
    </script>