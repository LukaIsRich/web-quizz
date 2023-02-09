$(document).ready(
    function()
    {
        $("form").on("submit", function (e) {
            var dataString = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "http://localhost:8080/index.php",
                data: dataString,
                success: function () {
                    console.log(dataString);
                }
            });
        
            e.preventDefault();
        });
        
        $(`#submit-settings`).click(function (){
            console.log("Click!");
            $(`form#game-settings`).submit();
        });
    }
);

$(document).on('input change', '#vol', function() {
    $('#volLabel').html($(this).val());
});