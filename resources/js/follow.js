$(document).ready(function() {
    console.log('hello')
    isApplyFollowActive();
    $('#followButton').click(function() {
        var buttonText = $('#buttonText');
        let userTargetId = $('#hidden_data_follow').data('user-target-id');
        let isFollow = $('#hidden_data_follow').data('follow-lock');

        if (buttonText.text() === 'Follow') {
            buttonText.text('Following');
            let xhr = $.ajax({
                url: "/user/user_follow_to_other_user",
                type: 'POST',
                // dataType: 'json',
                data: {
                    "user_target_id": userTargetId,
                    "is_follow": 1
                },
            })
            xhr.done(function (response){
                console.log(response)
                //Todo handle if not success
            })
        } else {
            buttonText.text('Follow');
            let xhr = $.ajax({
                url: "/user/user_follow_to_other_user",
                type: 'POST',
                // dataType: 'json',
                data: {
                    "user_target_id": userTargetId,
                    "is_follow": 0
                },
            })
            xhr.done(function (response){
                console.log(response)
                //Todo handle if not success
            })
        }
    });
    function isApplyFollowActive(){
        let isFollow = $('#hidden_data_follow').data('follow-lock');
        console.log(isFollow);
        if(isFollow){
            $('#buttonText').text('Followed');
            return;
        }
        $('#buttonText').text('Follow');
    }
});
