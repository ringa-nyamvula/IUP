<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form id="registration-form" action="{{ route('registration.submit') }}" method="post" enctype="multipart/form-data">
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="profile_photo">Profile Photo:</label>
        <input type="file" id="profile_photo" name="profile_photo" accept="image/*"><br><br>

        <input type="submit" value="Register">
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#registration-form').submit(function(event) {
                event.preventDefault();
                $.ajax({
                    url: '/register',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.success) {
                            window.location.href = '/landing-page';
                        } else {
                            alert('Registration failed. Please try again.');
                        }
                    },
                    error: function() {
                        alert('Registration failed. Please try again.');
                    }
                });
            });
        });
    </script>
</body>
</html>