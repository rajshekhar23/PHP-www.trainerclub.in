$(document).ready(function () {
    $('form').submit(function(event) {
        $.post("./backend/clientApprovalOperation.php", {
            flag: 'clientApproval',
            name: $("#name").val(),
            email: $("#email").val(),
            subject: $("#subject").val(),
            comments: $("#comments").val()
        }, function (data) {
            if(data == 'success')
                alert(data);
            else 
                alert('Failed For Client Approval');
        });
        event.preventDefault();
    });
});