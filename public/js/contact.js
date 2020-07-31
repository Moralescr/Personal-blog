$('#contactForm').on('submit', function(event) {

    event.preventDefault();
    name = $('#name').val();
    email = $('#email').val();
    subject = $('#subject').val();
    message = $('#message').val();

    $.ajax({
        url: "/contact",
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {

            name: name,
            email: email,
            subject: subject,
            message: message,
        },
        success: function(response) {
            $('#name').val('');
            $('#email').val('');
            $('#subject').val('');
            $('#message').val('');
            toastr.success(response.success);
            console.log(response);
        },
    });
});