$(document).ready(function () {
    $('input[name="deliveryOption"]').on('change',function(){
        /*get the elements that are not checked*/
        let unCheckedLabelEle = $('input[name="deliveryOption"]:not(:checked)').closest('label.deliveryOption')
        unCheckedLabelEle.find('span.tick-border').addClass('border-gray-200 bg-white').removeClass('border-red-500 bg-red-50')
        unCheckedLabelEle.removeClass('border-red-500 bg-red-50')

        if($(this).is(':checked')) {
            let checkedLabelElement = $(this).closest('label.deliveryOption');
            let checkedValue = $(this).val();
            console.log('Checked value: ' + checkedValue);
            /*remove all css from all label*/
            /*add active to checked element*/
            checkedLabelElement.find('span.tick-border').removeClass('border-gray-200 bg-white').addClass('border-red-500 bg-red-50')
            checkedLabelElement.addClass('border-red-500 bg-red-50')
        }
    })
})