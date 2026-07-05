<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <div class="p-5 bg-primary text-white text-center">
        <h1>My First Bootstrap 5 Page</h1>
        <p>Resize this responsive page to see the effect!</p>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-3">
        <h2 class="d-inline">Student List</h2>
        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#myModal">
            New Student
        </button>

        <div id="notification" class="alert alert-success mt-3 d-none"></div>

        @include('table')
    </div>

    <div class="mt-5 p-4 bg-dark text-white text-center">
        <p>Footer</p>
    </div>

    @include('entry')

    @if ($errors->any())
        <script>
            const createStudentModal = new bootstrap.Modal(document.getElementById('myModal'));
            createStudentModal.show();
        </script>
    @endif

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'Accept': 'application/json'
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $(document).on('submit', '#studentEntry', function(e) {
                e.preventDefault();
                let formData = new FormData(this);

                $('.error_text').text('');
                $('#notification').addClass('d-none').text('');

                $.ajax({
                    url: "{{ route('students.store') }}",
                    method: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function(response) {
                        const studentModal = bootstrap.Modal.getOrCreateInstance(document
                            .getElementById('myModal'));
                        studentModal.hide();
                        $('#studentEntry')[0].reset();
                        $('#notification')
                            .removeClass('d-none alert-danger')
                            .addClass('alert-success')
                            .text(response.message);

                        $('#studentsTableBody').append(
                            '<tr>' +
                            '<td>' + response.student.id + '</td>' +
                            '<td>' + response.student.name + '</td>' +
                            '<td>' + response.student.email + '</td>' +
                            '<td>' + response.student.phone + '</td>' +
                            '<td>' + response.student.address + '</td>' +
                            '</tr>'
                        );
                    },
                    error: function(err) {
                        let errors = err.responseJSON && err.responseJSON.errors ? err
                            .responseJSON.errors : {};
                        $.each(errors, function(key, value) {
                            $('#' + key + '_error').text(value[0]);
                        });
                    }

                });
            });
        });
    </script>
</body>

</html>
