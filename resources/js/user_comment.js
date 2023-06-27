$(document).ready(function (){
    $('#form_comment').on('submit',function (e){
        e.preventDefault()
        let $formEle = $(this);
        let form = $formEle[0];
        let formData = new FormData(form);
        let userId = $('#user_id').val()
        // console.log(userId);
        if(userId === ''){
            console.log('true')
            window.location.href='/login';
            return;
        }
        console.log(formData)
        formData.append('_token', $('input[name="_token"]').val());
        let xhr = $.ajax({
            url: "/campaigns/user/comment",
            type: 'post',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
        })

        xhr.done(function (response){
            console.log(response)
            if(response.success){
                $('#image_preview_comment').addClass('hidden')
                $('#commentText').val('')
                window.location.reload()
            }
        })
    })
    $('#btn_upload_image_comment').on('click',function (){
        $('#comment_image').click();
    })
    function previewImage(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();

            reader.onload = function(e) {
                //$('#previewMessage').addClass('hidden');
                $('#image_preview_comment').attr('src', e.target.result).removeClass('hidden');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#comment_image').on('change',function() {
        console.log('imageCHoose')
        let fileInput = this;
        if (fileInput.files && fileInput.files[0]) {
            // Show image preview
            //$('#previewContainer').removeClass('bg-gray-100').addClass('bg-white');
            previewImage(fileInput);
            // $('#uploadButton').addClass('hidden');
            //$('#submitButton').removeClass('hidden');
        } else {

        }
    });
})
