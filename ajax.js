function submitForm() {
    var name = $('input[name=name]').val();
    var type = $('input[name=type]').val();
    var num = $('input[name=num]').val();

    if (name != '' && type != '' && num != '') {
        var formData = {
            name: name,
            type: type,
            num: num
        };
        $('#message').html('<span style="color: red">Processing form. . . please wait. . .</span>');
        $.ajax({
            url: "http://localhost/remaxTable/addTransaction.php",
            type: 'POST',
            data: formData,
            success: function(response) {
                var res = JSON.parse(response);
                console.log(res);
                if (res.success == true)
                    $('#message').html('<span style="color: green">Form submitted successfully</span>');
                else
                    $('#message').html('<span style="color: red">Form not submitted. Some error in running the database query.</span>');
            }
        });
    } else {
        $('#message').html('<span style="color: red">Please fill all the fields</span>');
    }


}