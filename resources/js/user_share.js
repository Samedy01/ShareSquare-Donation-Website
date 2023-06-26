$(document).ready(function() {

    $('.share-button').on('mouseenter',function (){
        console.log('hover')
        $('.copy').removeClass('hidden')
        $('.copy_wrapper').removeClass('hidden')
    })
    $('.share-button').on('mouseleave',function (){
        $('.copy').addClass('hidden')
        $('.copied').addClass('hidden')
        $('.copy_wrapper').addClass('hidden')
    })
    $('.share-button').on('click',function (){
        $('.copy').addClass('hidden')
        $('.copied').removeClass('hidden')
        let url = $('#current_url').val()
        navigator.clipboard.writeText(url)
            .then(()=>{
                console.log('Text copy to clipboard')
            })
            .catch((error)=>{
                console.error('Fail to copy, error: ', error)
            });
        setTimeout(function() {
            $('.copied').addClass('hidden')
            $('.copy').removeClass('hidden')
        }, 3000);
    })
});
