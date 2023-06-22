$(document).ready(function (){
    console.log('hi')

    $('#uploadProfile').on('click',function (){
        console.log('hello')
        $('#profile-image').click();
    })
    function previewImage(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();

            reader.onload = function(e) {
                //$('#previewMessage').addClass('hidden');
                $('#previewProfileUpload').attr('src', e.target.result).removeClass('hidden');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#profile-image').on('change',function() {
        let fileInput = this;
        if (fileInput.files && fileInput.files[0]) {
            // Show image preview
            //$('#previewContainer').removeClass('bg-gray-100').addClass('bg-white');
            previewImage(fileInput);
            // $('#uploadButton').addClass('hidden');
            //$('#submitButton').removeClass('hidden');
        } else {
            // Hide image preview if no file is selected
            /*$('#previewMessage').removeClass('hidden');
            $('#previewImage').addClass('hidden');
            $('#previewContainer').removeClass('bg-white').addClass('bg-gray-100');
            $('#uploadButton').removeClass('hidden');
            $('#submitButton').addClass('hidden');*/
        }
    });
})
