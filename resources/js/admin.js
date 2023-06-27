$(document).ready(function (){
    // console.log('hello')
    $('.campaign_row').on('click',function (){
        let route = $(this).data('route')
        console.log(route)
        window.location.href = route;
    })
  //$('#reason-modal').removeClass('hidden');



    $('#approve_button').on('click',function (){
        // hide approve or reject wrapper
        $('#approve_reject_wrapper').addClass('hidden')
        loading('show')

        let campaignId = $('#campaign_id').val()
        let adminId = $('#admin_id').val()
        console.log(campaignId)

        let xhr = $.ajax({
            url: "/admin/approve_campaign",
            type: 'POST',
            // dataType: 'json',
            data: {
                campaign_id: campaignId,
                admin_id: adminId,
            },
        })
        xhr.done(function (response){
            console.log(response)
            if(response.success){
                loading('hide')
                $('#success_approve_after_request').removeClass('hidden')
            }
        })
    })

    $('#reject_button').on('click',function (){
        // hide approve or reject wrapper
        $('#approve_reject_wrapper').addClass('hidden')
        loading('show')

        let campaignId = $('#campaign_id').val()
        let adminId = $('#admin_id').val()
        let reason = $('#reason').val()
        console.log(campaignId)

        let xhr = $.ajax({
            url: "/admin/reject_campaign",
            type: 'POST',
            // dataType: 'json',
            data: {
                campaign_id: campaignId,
                admin_id: adminId,
                reason: reason
            },
        })
        xhr.done(function (response){
            console.log(response)
            if(response.success){
                loading('hide')
                $('#reject_approve_after_request').removeClass('hidden')
                $('#rejected_reason').val(response.reason)
            }
        })
    })
    // changeLanguageOnMap()

    function changeLanguageOnMap(){
        let buttonEnlarge = $('.google-maps-link').find('a')
        console.log(buttonEnlarge)
        buttonEnlarge.text('See on map')
    }
    function loading(status){
        let $loadingEle = $('#loadingDot');
        if(status === 'show'){
            $loadingEle.removeClass('hidden')
            return;
        }
        $loadingEle.addClass('hidden')
    }
    // setTheMap();
    function setTheMap(){
        // Get the iframe and button elements
        var mapIframe = document.getElementById('map-iframe');
        var showLocationButton = document.getElementById('show-location-button');

        // Set the latitude and longitude coordinates
        var latitude = 11.577717; // Example latitude
        var longitude = 104.920095; // Example longitude
        //11.577717, 104.920095
        // Set the source URL of the iframe with the latitude and longitude
        var mapUrl = 'https://www.google.com/maps?q=' + latitude + ',' + longitude + '&z=15&output=embed';
        mapIframe.src = mapUrl;

        // Add a click event listener to the button
        showLocationButton.addEventListener('click', function() {
            // Reload the iframe to show the location on the map
            mapIframe.src = mapUrl;
        });
    }

    $('#user_profile').on('click',function (){
        let route = $(this).data('route-to-profile');
        console.log(route)
        window.location.href=route;
    })
    $('#user_name').on('click',function (){
        let route = $(this).data('route-to-profile');
        console.log(route)
        window.location.href=route;
    })
    $('.action_button').on('click',function (e){
        e.stopPropagation();
    })
    $('#raising_type').on('change',function (){
        let $form = $('#form_filter_other')
        $form.submit()
    })
    $('#campaignCategoryId').on('change',function (){
        let $form = $('#form_filter_other')
        // Get the form action URL
        $form.submit()
    })
})
