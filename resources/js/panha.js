$(document).ready(function (){
    $('#test').on('click',function (){
        console.log('Hello')
    })
    $('.campaign-filter').on('click',function (){
        let isDropDown = $(this).data('dropdown');
        if(!isDropDown){
            let $thisParent = $(this).parent();
            let $thisUnderDropDown = $(this).find('.under-dropdown')
            let $otherDropDown = $thisParent.find('.campaign-filter').not(this)
            $(this).addClass('text-red-500')
            $(this).find('i.icon-dropdown').removeClass('text-gray-400 fa-chevron-right')
            $(this).find('i.icon-dropdown').addClass('text-red-500 fa-chevron-down')
            $(this).data('dropdown', 1)
            $(this).find('.under-dropdown').removeClass('hidden')
            /*other dropdown*/
            $('.under-dropdown').not($thisUnderDropDown).addClass('hidden')

            /*change color other dropdown if they open*/
            hiddenDropDown($otherDropDown)
        }else{
            hiddenDropDown($(this))
        }
    })
    $('.under-dropdown').on('click', function (e){
        e.stopPropagation();
    })

    function hiddenDropDown(element){
        element.removeClass('text-red-500')
        element.find('i.icon-dropdown').addClass('text-gray-400 fa-chevron-right')
        element.find('i.icon-dropdown').removeClass('text-red-500 fa-chevron-down')
        element.data('dropdown', 0)
        element.find('.under-dropdown').addClass('hidden')
    }
})
