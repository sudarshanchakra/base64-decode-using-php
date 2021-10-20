$(document).ready(function() {
    console.log("document ready");
    $("#decode_button").click(function() {
        event.preventDefault();
        $.ajax({
            type: 'post',
            url: 'decode.php',
            cache: false,
            data: {
                decode: $("#decode_input").val()
            },
            success: function(data) {
                $('#decode_output').val(data);
            }
        });
    });
});
