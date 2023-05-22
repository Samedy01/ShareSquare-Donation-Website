$(document).ready(function (){

    /*Browse campaign*/
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
            $('#modalBackground').removeClass('hidden')
            /*change color other dropdown if they open*/
            hiddenDropDown($otherDropDown)
        }else{
            hiddenDropDown($(this))
            $('#modalBackground').addClass('hidden')

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
    labelStatus(1,'form_step_1')
    // labelStatus(1,'form_step_2')
    /*Create campaign - cash type*/
    $('.nextform').on('click',function (){
        let targetForm = $(this).attr('href')
        let thisFormId = $(this).closest('.form').attr('id')
        // console.log(targetForm)
        //close this form
        $(this).closest('.form').addClass('hidden')
        $(targetForm).removeClass('hidden')

        /*change status to done for this label*/
        labelStatus(2, thisFormId);
        // console.log(thisFormId)
        /*change status to active for target label*/
        labelStatus(1,targetForm.substring(1))

    })
    $('.previousform').on('click',function (){
        let targetForm = $(this).attr('href');
        let thisFormId = $(this).closest('.form').attr('id')
        // console.log(targetForm)
        //close this form
        $(this).closest('.form').addClass('hidden')
        $(targetForm).removeClass('hidden')

        /*change status to pending for this form*/
        labelStatusThisAndPrevious(thisFormId, targetForm)
    })
    function labelStatusThisAndPrevious(thisFormId, targetFormId){
        let targetLabelEle = $('.label-form-number[data-for-label="'+targetFormId+'"]')
        let thisLabelEle = $('.label-form-number[data-for-label="'+thisFormId+'"]')

        // console.log(thisFormId)
        // console.log(targetFormId.substring(1))

        /*change status from active to pending for this element*/
        // thisLabelEle.find('i').addClass('hidden')
        thisLabelEle.find('.form-label-outline').removeClass('bg-red-500').addClass('bg-gray-200')
        thisLabelEle.find('.form-label-outline .num-label-form').addClass('text-gray-500').removeClass('text-white')
        thisLabelEle.find('.text-label-form').removeClass('text-red-500')

        /*change tartget form from Done to pending status label*/
        labelStatus(1, targetFormId.substring(1))

    }
    function labelStatus(statusVal, targetFormId){
        /**/
        // console.log(targetFormId)
        let labelEle = $('.label-form-number[data-for-label="'+targetFormId+'"]')
        if(statusVal === 1){
            labelEle.find('i').addClass('hidden')
            labelEle.find('.form-label-outline').removeClass('bg-green-500').addClass('bg-red-500')
            labelEle.find('.form-label-outline .num-label-form').removeClass('text-gray-500').addClass('text-white')
            labelEle.find('.text-label-form').removeClass('text-green-500').addClass('text-red-500')
            labelEle.find('.form-label-outline .num-label-form').removeClass('hidden')

        }else if(statusVal === 2){
            labelEle.find('i').removeClass('hidden')
            labelEle.find('.form-label-outline').addClass('bg-green-500').removeClass('bg-red-500')
            labelEle.find('.form-label-outline .num-label-form').addClass('hidden')
            labelEle.find('.text-label-form').removeClass('text-red-500').addClass('text-green-500')
        }
    }
})
