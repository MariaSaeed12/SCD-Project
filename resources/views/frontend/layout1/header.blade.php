<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('frontend/css/design.css') }}" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LittleHeartsHealth</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: purple">
        <a class="navbar-brand" href="#"><b>LittleHeartsHealth</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- HTML for the Search Bar -->
        <div class="input-group">
            <input type="text" id="search-bar" class="form-control" placeholder="Search for topics, articles, or doctors..." />
            <div id="search-results" class="dropdown-menu" style="width: 100%; max-height: 200px; overflow-y: auto; display: none;"></div>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}"><b>Home</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}"><b>About Us</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}"><b>Contact Us</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('doctors') }}"><b>Doctors</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"><b>Login</b></a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            // Set up CSRF token for Laravel
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Trigger AJAX on typing in the search bar
            $('#search-bar').on('keyup', function () {
                var query = $(this).val(); // Get the current input value

                if (query.length >= 1) {
                    $.ajax({
                        method: 'POST',
                        url: '/search', // Laravel route for search functionality
                        data: { query: query },
                        success: function (response) {
                            // Show the response inside the search results container
                            if (response.length > 0) {
                                var resultsHtml = '';
                                response.forEach(function (item) {
                                    resultsHtml += `
                                        <a class="dropdown-item search-item" data-id="${item.id}">
                                            ${item.name}
                                        </a>`;
                                });
                                $("#search-results").html(resultsHtml).show();
                            } else {
                                $("#search-results").html('<span class="dropdown-item">No results found</span>').show();
                            }
                        },
                        error: function (xhr, status, error) {
                            console.error('Error during AJAX request: ', error);
                            $("#search-results").html('<span class="dropdown-item">Something went wrong. Please try again.</span>').show();
                        }
                    });
                } else {
                    // If input is empty, clear the search results
                    $("#search-results").hide().html('');
                }
            });

            // Optionally, close the dropdown when an item is clicked
            $(document).on('click', '.search-item', function () {
                // Set the clicked result into the search bar
                $('#search-bar').val($(this).text());

                // Redirect to the doctor's details page if `data-id` exists
                var doctorId = $(this).data('id'); // Assuming each result has a data-id attribute with the doctor's ID
                if (doctorId) {
                    window.location.href = `http://127.0.0.1:8000/doctors/${doctorId}`;  // Redirect to the doctor's page
                }

                // Clear the results dropdown
                $("#search-results").hide().html('');
            });
        });
    </script>
</body>

</html>
