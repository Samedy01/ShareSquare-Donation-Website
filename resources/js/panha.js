// import 'select2';
$(document).ready(function () {

   // $('#payment_fail').removeClass('hidden').addClass('justify-center items-center flex');
    $('#comment_tab').on('click',function (){
        let route = $(this).data('route');
        console.log(route)
        window.location.href = route
    })
    /*Browse campaign*/
    $('#test').on('click', function () {
        console.log('Hello')
    })
    $('.campaign-filter').on('click', function () {
        let isDropDown = $(this).data('dropdown');
        if (!isDropDown) {
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
            // $('#modalBackground').removeClass('hidden')
            /*change color other dropdown if they open*/
            hiddenDropDown($otherDropDown)
        } else {
            hiddenDropDown($(this))
            // $('#modalBackground').addClass('hidden')

        }
    })
    $('.under-dropdown').on('click', function (e) {
        e.stopPropagation();
    })
    function hiddenDropDown(element) {
        element.removeClass('text-red-500')
        element.find('i.icon-dropdown').addClass('text-gray-400 fa-chevron-right')
        element.find('i.icon-dropdown').removeClass('text-red-500 fa-chevron-down')
        element.data('dropdown', 0)
        element.find('.under-dropdown').addClass('hidden')
    }
    labelStatus(1, 'form_step_1')
    /*Create campaign - cash type*/
    $('.nextform').on('click', function () {
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
        labelStatus(1, targetForm.substring(1))

    })
    $('.previousform').on('click', function () {
        let targetForm = $(this).attr('href');
        let thisFormId = $(this).closest('.form').attr('id')
        // console.log(targetForm)
        //close this form
        $(this).closest('.form').addClass('hidden')
        $(targetForm).removeClass('hidden')

        /*change status to pending for this form*/
        labelStatusThisAndPrevious(thisFormId, targetForm)
    })
    $('input[name="campaign_type"]').on('change', function () {

        let $unCheckedInput = $('input[name="campaign_type"]:not(:checked)')
        let $checkedInput = $('input[name="campaign_type"]:checked')

        if ($(this).is(':checked')) {
            let checkedLabelElement = $(this).closest('label.campaign_type');
            let checkedValue = $(this).val();
            // console.log('Checked value: ' + checkedValue);
            /*remove all css from all label*/
            let allLabelCampaignType = $('label.campaign_type')
            allLabelCampaignType.removeClass('border-red-500 bg-red-50')
            allLabelCampaignType.find('img.icon_active').addClass('hidden')
            allLabelCampaignType.find('img.icon').removeClass('hidden')
            /*add active to checked element*/
            checkedLabelElement.addClass('border-red-500 bg-red-50')
            checkedLabelElement.find('img.icon').addClass('hidden')
            checkedLabelElement.find('img.icon_active').removeClass('hidden')
            /* show additional form when selecting*/
            if (checkedValue === 'donating') {
                choosePaymentMethodOption('hide')
                accountNumberForm('hide')
                addQrCodePayForm('hide')
            }
        }
        targetForm('show', $checkedInput)
        targetForm('hide', $unCheckedInput)

        /*reset select of raising type campaign*/
        resetRaisingOption()
    })

    function resetRaisingOption() {
        $('input[name="raising-option"]').prop('checked',false);
        /*remove all css from all label*/
        let allLabelDonationOption = $('label.raising_option')
        allLabelDonationOption.removeClass('border-red-500 bg-red-50')
        allLabelDonationOption.find('img.icon_active').addClass('hidden')
        allLabelDonationOption.find('img.icon').removeClass('hidden')
    }

    function raisingOptionForm(status) {
        let raisingOptionForm = $('#raising_option_form')
        if (status === 'show') {
            raisingOptionForm.removeClass('hidden')
        } else if (status === 'hide') {
            raisingOptionForm.addClass('hidden')
        }
    }

    $('input[name="raising_option"]').on('change', function () {
        console.log('change')
        if ($(this).is(':checked')) {
            let checkedLabelElement = $(this).closest('label.raising_option');
            let checkedValue = $(this).val();
            console.log('Checked value: ' + checkedValue);
            /*remove all css from all label*/
            let allLabelDonationOption = $('label.raising_option')
            allLabelDonationOption.removeClass('border-red-500 bg-red-50')
            allLabelDonationOption.find('img.icon_active').addClass('hidden')
            allLabelDonationOption.find('img.icon').removeClass('hidden')
            /*add active to checked element*/
            checkedLabelElement.addClass('border-red-500 bg-red-50')
            checkedLabelElement.find('img.icon').addClass('hidden')
            checkedLabelElement.find('img.icon_active').removeClass('hidden')

            /* show additional form when selecting*/

            if (checkedValue === 'cashOrItem') {
                itemCategorySelectedForm('show')
                deliveryOptionForm('show')
                choosePaymentMethodOption('hide')
                accountNumberForm('hide')
                addQrCodePayForm('hide')
            } else if (checkedValue === 'cash') {
                choosePaymentMethodOption('show')
                accountNumberForm('show')
                addQrCodePayForm('show')
                itemCategorySelectedForm('hide')
                deliveryOptionForm('hide')
            }
        }
    })
    function itemCategorySelectedForm(status) {
        let $itemCategorySelectedForm = $('#item_category_form')
        if (status === 'show') {
            $itemCategorySelectedForm.removeClass('hidden')
        } else if (status === 'hide') {
            $('#item_category').val('');
            $itemCategorySelectedForm.addClass('hidden')
        }
    }

    function deliveryOptionForm(status) {
        let $deliveryOptionForm = $('#delivery_option_form')
        if (status === 'show') {
            $deliveryOptionForm.removeClass('hidden')
        } else if (status === 'hide') {
            $deliveryOptionForm.addClass('hidden')
        }
    }

    function addQrCodePayForm(status) {
        let $addQrCodePayForm = $('#add_qr_code_pay_form')
        if (status === 'show') {
            $addQrCodePayForm.removeClass('hidden')
        } else if (status === 'hide') {
            $addQrCodePayForm.addClass('hidden')
        }
    }

    function choosePaymentMethodOption(status) {
        let paymentOptionForm = $('#payment_option_form')
        if (status === 'show') {
            paymentOptionForm.removeClass('hidden')
        } else if (status === 'hide') {
            paymentOptionForm.addClass('hidden')
        }
    }

    function accountNumberForm(status) {
        let accountNumberForm = $('#account_number_form')
        if (status === 'show') {
            accountNumberForm.removeClass('hidden')
        } else if (status === 'hide') {
            accountNumberForm.addClass('hidden')
        }
    }

    $('input[name="payment_option"]').on('change', function () {
        if ($(this).is(':checked')) {
            let checkedLabelElement = $(this).closest('label.paymentOption');
            let checkedValue = $(this).val();
            console.log('Checked value: ' + checkedValue);
            /*remove all css from all label*/
            let allLabelPaymentOption = $('label.paymentOption')
            allLabelPaymentOption.find('span.tick-border').addClass('border-gray-200').removeClass('border-red-500')
            /*add active to checked element*/
            checkedLabelElement.find('span.tick-border').removeClass('border-gray-200').addClass('border-red-500')
        }
    })
    $('input[name^="deliveryOption"]').on('change', function () {
        /*get the elements that are not checked*/
        let $unCheckedInput = $('input[name^="deliveryOption"]:not(:checked)')
        let $checkedInput = $('input[name^="deliveryOption"]:checked')
        let unCheckedLabelEle = $unCheckedInput.closest('label.deliveryOption')
        unCheckedLabelEle.find('span.tick-border').addClass('border-gray-200 bg-white').removeClass('border-red-500 bg-red-50')
        unCheckedLabelEle.removeClass('border-red-500 bg-red-50')
        if ($(this).is(':checked')) {
            let checkedLabelElement = $(this).closest('label.deliveryOption');
            let checkedValue = $(this).val();
            // console.log('Checked value: ' + checkedValue);
            /*remove all css from all label*/
            /*add active to checked element*/
            checkedLabelElement.find('span.tick-border').removeClass('border-gray-200 bg-white').addClass('border-red-500 bg-red-50')
            checkedLabelElement.addClass('border-red-500 bg-red-50')
        }

        //show the note target for each data-target-open attr
        $checkedInput.each(function () {
            console.log($(this))
            targetForm('show', $(this))
        })
        $unCheckedInput.each(function () {
            targetForm('hide', $(this))
        })
    })

    function targetForm(status, inputEle) {
        let targetEleIdsString = inputEle.data('target-open')
        let targetFormEleIds = targetEleIdsString.split(',')
        if (status === 'hide') {
            $.each(targetFormEleIds, function (index, targetNoted) {
                $(targetNoted).addClass('hidden')
            })
        } else if (status === 'show') {
            console.log(targetFormEleIds)
            $.each(targetFormEleIds, function (index, targetNoted) {
                $(targetNoted).removeClass('hidden')
            })
        }
    }

    function labelStatusThisAndPrevious(thisFormId, targetFormId) {
        let targetLabelEle = $('.label-form-number[data-for-label="' + targetFormId + '"]')
        let thisLabelEle = $('.label-form-number[data-for-label="' + thisFormId + '"]')

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

    function labelStatus(statusVal, targetFormId) {
        /**/
        // console.log(targetFormId)
        let labelEle = $('.label-form-number[data-for-label="' + targetFormId + '"]')
        if (statusVal === 1) {
            labelEle.find('i').addClass('hidden')
            labelEle.find('.form-label-outline').removeClass('bg-green-500').addClass('bg-red-500')
            labelEle.find('.form-label-outline .num-label-form').removeClass('text-gray-500').addClass('text-white')
            labelEle.find('.text-label-form').removeClass('text-green-500').addClass('text-red-500')
            labelEle.find('.form-label-outline .num-label-form').removeClass('hidden')

        } else if (statusVal === 2) {
            labelEle.find('i').removeClass('hidden')
            labelEle.find('.form-label-outline').addClass('bg-green-500').removeClass('bg-red-500')
            labelEle.find('.form-label-outline .num-label-form').addClass('hidden')
            labelEle.find('.text-label-form').removeClass('text-red-500').addClass('text-green-500')
        }
    }


    const fileTempl = $("#file-template")[0];
    const imageTempl = $("#image-template")[0];
    const empty = $("#empty")[0];

    let FILES = {};

    function addFile(target, file) {
        const isImage = file.type.match("image.*");
        const objectURL = URL.createObjectURL(file);

        const clone = isImage
            ? $(imageTempl.content).clone(true)
            : $(fileTempl.content).clone(true);

        clone.find("h1").text(file.name);
        clone.find("li").attr("id", objectURL);
        clone.find(".delete").attr("data-target", objectURL);
        clone.find(".size").text(file.size > 1024
            ? file.size > 1048576
                ? Math.round(file.size / 1048576) + "mb"
                : Math.round(file.size / 1024) + "kb"
            : file.size + "b");

        if (isImage) {
            clone.find("img").attr({
                src: objectURL,
                alt: file.name
            });
        }

        empty.classList.add("hidden");
        console.log(clone)
        console.log(target)

        $(target).prepend(clone);

        FILES[objectURL] = file;
    }

    const gallery = $("#gallery")[0];
    const overlay = $("#overlay")[0];

    $("#AddPhotoToTitle").click(function() {
        $("#hidden-input-images-title").click();
    });

    $("#hidden-input-images-title").on("change", function(e) {
        for (const file of e.target.files) {
            console.log(file)
            addFile(gallery, file);
        }
    });

    const hasFiles = function({ dataTransfer: { types = [] } }) {
        return types.indexOf("Files") > -1;
    };

    let counter = 0;

    function dropHandler(ev) {
        ev.preventDefault();
        for (const file of ev.originalEvent.dataTransfer.files) {
            addFile(gallery, file);
            overlay.classList.remove("draggedover");
            counter = 0;
        }
    }

    function dragEnterHandler(e) {
        e.preventDefault();
        if (!hasFiles(e)) {
            return;
        }
        ++counter && overlay.classList.add("draggedover");
    }

    function dragLeaveHandler(e) {
        1 > --counter && overlay.classList.remove("draggedover");
    }

    function dragOverHandler(e) {
        if (hasFiles(e)) {
            e.preventDefault();
        }
    }

    $("#gallery").on("click", ".delete", function() {
        const ou = $(this).data("target");
        const espacedOu = $.escapeSelector(ou);
        console.log(espacedOu)
        $("#" + espacedOu).remove();
        gallery.children.length === 1 && empty.classList.remove("hidden");
        delete FILES[ou];
    });

    $("#submit").click(function() {
        alert(`Submitted Files:\n${JSON.stringify(FILES)}`);
        console.log(FILES);
    });

    $("#cancel").click(function() {
        while (gallery.children.length > 0) {
            gallery.lastChild.remove();
        }
        FILES = {};
        empty.classList.remove("hidden");
        gallery.append(empty);
    });


    /*Add photo to Summary*/
    $('.addPhotoToAnyTitle').on('click',function (){
        let targetInputId = $(this).data('input-target');
        console.log('hello')
        $(targetInputId).click()
    })


    $(".inputForMultipleImage").on("change", function(e) {
        // console.log('hi')
        /*find imageInputWrapper class*/
        let $parentDiv = $(this).closest('.oneSubTitle');
        let imageInputWrapper = $parentDiv.find('.imageInputWrapper');
        const thisGallery = imageInputWrapper[0];
        for (const file of e.target.files) {
            // console.log(file)
            addFile(thisGallery, file);
        }
    });
    $(".imageInputWrapper").on("click", ".delete", function() {
        let thisGallery = $(this)// $(this)[0];
        const ou = $(this).data("target");
        const espacedOu = $.escapeSelector(ou);
        // console.log(espacedOu)
        $("#" + espacedOu).remove();
        thisGallery.children.length === 1 && empty.classList.remove("hidden");
        delete FILES[ou];
    });

    let subtitleCounter = 0; // Counter variable for unique IDs

    $("#addNewSubtitle").click(function() {
        // Clone the template element
        let template = `
            <div>
                <div class="flex flex-col mt-4">
                    <label for="campaign_title-${subtitleCounter}" class="font-bold">Title</label>
                    <input type="text" id="campaign_title-${subtitleCounter}"
                           class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent"
                           placeholder="Your campaign title"
                           name="campaign_additional_title[]">
                </div>
                <div class="flex flex-col mt-4 oneSubTitle newSubtitleTemplate">
                    <label for="campaign_description-${subtitleCounter}" class="font-bold">Description</label>
                    <textarea id="campaign_description-${subtitleCounter}"
                              name="campaign_additional_subtitle_description[]"
                              class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent"
                              placeholder="What is the purpose of your campaign"></textarea>
                    <a href="#" class="primary-color-letter mt-3 addPhotoToAdditionalTitle" data-input-target="#hidden-input-images-for-description-${subtitleCounter}">
                        <i class="fa fa-plus-circle"></i>
                        <span>Add Photos</span>
                    </a>
                    <input name="multiple_image_for_additional_subtitle-${subtitleCounter}[]" id="hidden-input-images-for-description-${subtitleCounter}" type="file" multiple class="hidden inputForMultipleImage">
                    <ul class="flex flex-1 flex-wrap -m-1 imageInputWrapper">

                    </ul>
                </div>

            </div>
        `;
        // console.log(template)

        $("#additionalSubtitle").append(template);

        subtitleCounter++;
    })
    let $additionalSubtitle = $('#additionalSubtitle');
    $additionalSubtitle.on('click','.addPhotoToAdditionalTitle',function (){
        let targetInputId = $(this).data('input-target');
        console.log('hello')
        $(targetInputId).click()
    })
    $additionalSubtitle.on("change", '.inputForMultipleImage', function(e) {
        console.log('hi');
        let $parentDiv = $(this).closest('.oneSubTitle');
        let imageInputWrapper = $parentDiv.find('.imageInputWrapper');
        console.log($parentDiv)
        const thisGallery = imageInputWrapper[0];
        for (const file of e.target.files) {
            console.log(file);
            addFile(thisGallery, file);
        }
    });
    $additionalSubtitle.on("click", ".imageInputWrapper .delete", function() {
        let thisGallery = $(this)// $(this)[0];
        const ou = $(this).data("target");
        const espacedOu = $.escapeSelector(ou);
        // console.log(espacedOu)
        $("#" + espacedOu).remove();
        thisGallery.children.length === 1 && empty.classList.remove("hidden");
        delete FILES[ou];
    });


    let countNewContact = 0;
    /*Add additional contact*/
    $('#addNewContactInfo').on('click',function() {
        // Clone the template element
        console.log('Hello')
        let templateContact = `
                <div class="mt-4">
                    <p class="font-bold">New contact ${countNewContact} (optional)</p>
                    <label for="campaign-contact-title-${countNewContact}" class="">
                        <input name="campaign_additional_contact_title[]" placeholder="Contact title (Ex: Instagram)" type="text"
                               id="campaign-contact-title-${countNewContact}"
                               class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent w-full">
                    </label>
                    <label for="campaign-contact-detail-${countNewContact}" class="">
                        <input name="campaign_additional_contact_detail[]" placeholder="Enter contact link" type="text"
                               id="campaign-contact-detail-${countNewContact}"
                               class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent w-full">
                    </label>
                </div>
        `;
        // console.log(templateContact)
        $("#additionalContactWrapper").append(templateContact);
        countNewContact++;
    })

    $('#formAddNewLocation').on('submit', function (e){
        e.preventDefault();
        let $locationInputName = $('#location_name');
        let $locationDescriptionInput = $('#location_description');
        let $latitude = $('#latitude_input');
        let $longitude = $('#longitude_input');
        let locationName = $locationInputName.val();
        let locationDescription = $locationDescriptionInput.val();
        let latitude = $latitude.val();
        let longitude = $longitude.val();
        let templateLocation = `
               <div class="w-2/3 py-3 px-5 bg-gray-100 rounded relative mt-3 locationWrapper">
                        <h2 class="text-2xl font-bold">${locationName}</h2>
                        <input type="text" name="location_name[]" class="hidden" value="${locationName}">
                        <p class="text-xs text-gray-400">${locationDescription}</p>
                        <input type="text" name="location_description[]" class="hidden" value="${locationDescription}">
                        <input type="text" name="latitude[]" class="hidden" value="${latitude}">
                        <input type="text" name="longitude[]" class="hidden" value="${longitude}">
                        <div class="absolute flex flex-col top-0 h-full right-3 justify-center">
                            <div class=" flex ">
                                <a href="#"
                                   class="flex w-5 h-5 justify-center items-center p-3 bg-white mr-2 shadow rounded"><i
                                        class="fa fa-edit block"></i></a>
                                <a href="#"
                                   class="flex w-5 h-5 justify-center items-center p-3 bg-white shadow rounded"><i
                                        class="fa fa-trash block"></i></a>
                            </div>
                        </div>
               </div>
        `;
        $('#additionalLocationWrapper').append(templateLocation)
        //reset input
        $locationInputName.val('')
        $locationDescriptionInput.val('')
        $longitude.val('')
        $latitude.val('')
    })

    $(document).on('click','.fa-trash',function (){
        // find the wrapper parent
        let $parent = $(this).closest('.locationWrapper')
        $parent.remove();
    })


    /*Upload Identity Card*/
    // Handle file input change event
    function previewImage(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();

            reader.onload = function(e) {
                $('#previewMessage').addClass('hidden');
                $('#previewImage').attr('src', e.target.result).removeClass('hidden');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#imageIDCardInput').on('change',function() {
        let fileInput = this;
        if (fileInput.files && fileInput.files[0]) {
            // Show image preview
            $('#previewContainer').removeClass('bg-gray-100').addClass('bg-white');
            previewImage(fileInput);
            // $('#uploadButton').addClass('hidden');
            $('#submitButton').removeClass('hidden');
        } else {
            // Hide image preview if no file is selected
            $('#previewMessage').removeClass('hidden');
            $('#previewImage').addClass('hidden');
            $('#previewContainer').removeClass('bg-white').addClass('bg-gray-100');
            $('#uploadButton').removeClass('hidden');
            $('#submitButton').addClass('hidden');
        }
    });

    /*Image preview for Thumbnail Input*/
    $('#imageThumbnailInput').on('change',function() {
        let fileInput = this;
        //find uploadContainer first
        let $uploadContainer = $(this).closest('.uploadContainer')
        let $previewContainer = $uploadContainer.find('.previewContainer');
        let $previewMessage = $uploadContainer.find('.previewMessage')
        let $previewImage = $uploadContainer.find('.previewImage')
        if (fileInput.files && fileInput.files[0]) {
            // Show image preview
            $previewContainer.removeClass('bg-gray-100').addClass('bg-white');
                previewAnImage(fileInput,$uploadContainer);
        } else {
            // Hide image preview if no file is selected
            $previewMessage.removeClass('hidden');
            $previewImage.addClass('hidden');
            $previewContainer.removeClass('bg-white').addClass('bg-gray-100');
        }
    });

    $('.image_input_with_preview').on('change',function() {
        let fileInput = this;
        //find uploadContainer first
        let $uploadContainer = $(this).closest('.uploadContainer')
        let $previewContainer = $uploadContainer.find('.previewContainer');
        let $previewMessage = $uploadContainer.find('.previewMessage')
        let $previewImage = $uploadContainer.find('.previewImage')
        if (fileInput.files && fileInput.files[0]) {
            // Show image preview
            $previewContainer.removeClass('bg-gray-100').addClass('bg-white');
            previewAnImage(fileInput,$uploadContainer);
        } else {
            // Hide image preview if no file is selected
            $previewMessage.removeClass('hidden');
            $previewImage.addClass('hidden');
            $previewContainer.removeClass('bg-white').addClass('bg-gray-100');
        }
    });
    function previewAnImage(input, parent) {
        let $previewMessage = parent.find('.previewMessage')
        let $previewImage = parent.find('.previewImage')
        if (input.files && input.files[0]) {
            let reader = new FileReader();

            reader.onload = function(e) {
                $previewMessage.addClass('hidden');
                $previewImage.attr('src', e.target.result).removeClass('hidden');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    // submit the form as Ajax request
    $('form#formCreateCampaign').submit(function (e){
        e.preventDefault()
        /*$('#letterSubmmit').addClass('hidden')
        $('#submitLoading').removeClass('hidden')*/
        let formData = new FormData(this);
        // console.log(formData)
        formData.append('_token', $('input[name="_token"]').val());
        let xhr = $.ajax({
            url: "store",
            type: 'post',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
        })

        xhr.done(function (response){
            console.log(response)
            if(response.success){
                labelStatus(2,'form_step_4')
                $('#form_step_4').addClass('hidden')
                $('#result_from_create_campaign').removeClass('hidden')

            }
        })
    })

    /*filter wrapper*/
    $('#clearFilter').on('click',function (){
        console.log('filter clear')
        $('#filterWrapper input[type="checkbox"]').prop('checked',false)
    })


/*submit payment with stripe*/
    $('form#paymentForm').submit(function (e){
        e.preventDefault()
        /*$('#letterSubmmit').addClass('hidden')
        $('#submitLoading').removeClass('hidden')*/
        let formData = new FormData(this);
        // console.log(formData)
        formData.append('_token', $('input[name="_token"]').val());
        let xhr = $.ajax({
            url: "stripe/paymentRequest",
            type: 'post',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
        })

        xhr.done(function (response){
            console.log(response)
            if(response.success){

            }
        })
    })

    /*Search campaign or user*/
    $('#searchCampaignOrUser').on('input',function (){
        let input = $(this).val()
        // console.log(input.trim().length === 0);
        $('#resultWrapper').empty();

        $('#searchResultWrapper').removeClass('hidden')
        $('#loadingDot').removeClass('hidden')
        $('#noResultSearch').addClass('hidden')

        if(input.trim().length === 0){
            $('#searchResultWrapper').addClass('hidden')
            return;
        }
        let xhr = $.ajax({
            url: "/search?keyword="+input,
            method: 'get',
        })

        xhr.done(function (response){
            $('#loadingDot').addClass('hidden')
            // console.log(response)
            // console.log(response.result === null)
            if(response.result === null){
                $('#noResultSearch').removeClass('hidden')
                return;
            }
            let elements = '';
            $.each(response.result, function (index,object){
                let element = '';
                if(object.type === 'campaign'){
                    element = `
                        <a href="/campaigns/show/${object.id}">
                            <div class="flex border-b items-center py-2 hover:bg-gray-300 px-3 campaign_result">
                                <img src="${object.image_path}" class="h-5 w-5 border object-cover rounded mr-2">
                                <p class="line-clamp-1 text-xs md:text-base">${object.title}</p>
                            </div>
                        </a>
                    `;
                }else{
                    element = `
                            <a href="/user-profile">
                                <div class="flex border-b items-center py-2 hover:bg-gray-300 px-3" id="userResult">
                                    <img src="${object.image_path}" class="h-5 w-auto border object-cover rounded-[50%] mr-2">
                                    <p class="md:text-base text-xs">${object.name}</p>
                                </div>
                            </a>
                    `;
                }
                elements += element;
            })
            $('#resultWrapper').append(elements);
        })

    })
    let $loveButton = $('#love-button')
    let isCare = $loveButton.data('care-lock')
    isApplyCareActive($loveButton, isCare);
    /*implement love  or care button button*/
    // isApplyCareActive($('.love-button'), isCare)
    $('.love-button').on('click',function (){
        let $this = $(this);
        let isCare = $this.data('care-lock');
        console.log('love click')
        let csrfToken = $this.data('token')

        let campaignId = $this.data('campaign-id')
        //request to backend
        // console.log(csrfToken)
        console.log(isCare)
        let xhr = $.ajax({
            url: "/user/care_campaign",
            type: 'POST',
            // dataType: 'json',
            data: {
                "_token": csrfToken,
                "campaign_id": campaignId,
                "is_care": !isCare
            },
            // cache: false,
            // contentType: false,
            // processData: false,
        })

        xhr.done(function (response){
            console.log(response)
            //Todo handle if not success
        })

        if(!isCare){
            isApplyCareActive($this, 1)
            /*$this.find('.icon_button').removeClass('far dark-blue-grey').addClass('fa text-mainColor')
            $this.data('care-lock', 1)*/
            return;
        }
        /*$this.find('.icon_button').removeClass('fa text-mainColor').addClass('far dark-blue-grey')
        $this.data('care-lock', 0)*/
        isApplyCareActive($this, 0)
    })
    function isApplyCareActive(element, isCare){
        if(isCare){
            element.find('.icon_button').removeClass('far dark-blue-grey').addClass('fa text-mainColor')
            element.data('care-lock', 1)
            return;
        }
        element.find('.icon_button').removeClass('fa text-mainColor').addClass('far dark-blue-grey')
        element.data('care-lock', 0)

    }
    /*$('.share-button').on('click',function (){
        console.log('share click')
    })*/
    $('.follow-button').on('click',function (){
        console.log('follow click')
    })

    /*for datalist*/
    const $input = $('#item_category_name');
    const $browsers = $('#itemCategoryList');
    let currentFocus = -1;

    $input.on('focus', function (e) {
        $browsers.css('display', 'block');
        console.log('focus')
        // $input.css('borderRadius', '5px 5px 0 0');
    });
    $input.on('click',function (e){
        e.stopPropagation();
        console.log('input click')
    })

    $browsers.on('click', 'option', function (e) {
        e.stopPropagation();
        $input.val($(this).val());
        $browsers.css('display', 'none');
        $input.css('borderRadius', '5px');
    });

    $input.on('input', function (e) {
        e.stopPropagation();
        currentFocus = -1;
        const text = $input.val().toUpperCase();
        $browsers.find('option').each(function () {
            if ($(this).val().toUpperCase().indexOf(text) > -1) {
                $(this).css('display', 'block');
                // $(this).removeClass('hidden')
            } else {
                $(this).css('display','none');
            }
        });
    });
    /*$input.on('blur',function (){
        $browsers.css('display','none')
    })*/
    $('#form_step_2').on('click',function (){
        $browsers.css('display','none')
        console.log('hi')
    })


    $input.on('keydown', function (e) {
        if (e.keyCode === 40) {
            currentFocus++;
            addActive($browsers.find('option'));
        } else if (e.keyCode === 38) {
            currentFocus--;
            addActive($browsers.find('option'));
        } else if (e.keyCode === 13) {
            e.preventDefault();
            if (currentFocus > -1) {
                $browsers.find('option').eq(currentFocus).click();
            }
        }
    });

    function addActive($x) {
        if (!$x) return false;
        removeActive($x);
        if (currentFocus >= $x.length) currentFocus = 0;
        if (currentFocus < 0) currentFocus = $x.length - 1;
        $x.eq(currentFocus).addClass('active');
    }

    function removeActive($x) {
        $x.removeClass('active');
    }

    $('.donateNow').on('click',function (){
        let route = $(this).data('route');
        window.location.href = route;
    })

    $('.amount_suggest').on('click', function (){
        let $thisEle = $(this);
        let amountSuggest = $thisEle.data('amount-suggest')
        let $otherEle = $('.option_donate_amount').find('.amount_suggest').not(this);
        $thisEle.removeClass('border-transparent').addClass('bg-secondaryColor border-mainColor')
        $otherEle.removeClass('bg-secondaryColor border-mainColor').addClass('border-transparent')

        $('#donate_amount').val(amountSuggest)
        calculateTotalAmount()
    })
    $('.payment-option').on('click', function (){
        let $thisEle = $(this);
        let amountSuggest = $thisEle.data('amount-suggest')
        let $otherEle = $('.payment-option-wrapper').find('.payment-option').not(this);
        $thisEle.removeClass('border-transparent').addClass('bg-secondaryColor border-mainColor')
        $otherEle.removeClass('bg-secondaryColor border-mainColor').addClass('border-transparent')
    })

    function calculateTotalAmount(){
        let inputAmount = $('#donate_amount').val();
        // console.log('Hello')
        $('#total_amount_donate').text(formatCurrency(inputAmount))
    }
    $('#donate_amount').bind('keyup',function (){
        // console.log('hi')
        calculateTotalAmount()
        let $suggestPay = $('.amount_suggest');
        // console.log($suggestPay)
        $suggestPay.removeClass('bg-secondaryColor border-mainColor').addClass('border-transparent')
    })

    $('input[name="payment-option"]').on('change',function (){
        let paymentOptionVal = $(this).val();
        console.log(paymentOptionVal);
        if(paymentOptionVal === "stripe"){
            $('#card_stripe').removeClass('hidden')
        }
    })

    /*Stripe*/
    let stripe = Stripe("pk_test_51NDo0uKvkwimcBFs3unPRJufPaReSTR5QccXu7BcJgXgsRnJ29xgCLaE8huQEpsQ2fEqCgBV6owvz6Dcs0aMV2Rz00h0mcPiyZ")
    const elements = stripe.elements()
    const cardElement = elements.create('card', {
        style: {
            base: {
                fontSize: '16px'
            }
        }
    })
    const cardForm = document.getElementById('payment-form')
    const cardName = document.getElementById('card-strip-name')
    cardElement.mount('#card_stripe')
    cardForm.addEventListener('submit', async (e) => {
        e.preventDefault()
        $('#donateLoading').removeClass('hidden');
        let paymentOptionValue = $('input[name="payment-option"]').val();
        if(paymentOptionValue === "stripe"){
            const { paymentMethod, error } = await stripe.createPaymentMethod({
                type: 'card',
                card: cardElement,
                billing_details: {
                    name: cardName.value
                }
            })
            if (error) {
                console.log(error)
            } else {
                let input = document.createElement('input')
                input.setAttribute('type', 'hidden')
                input.setAttribute('name', 'payment_method')
                input.setAttribute('value', paymentMethod.id)
                cardForm.appendChild(input)
                console.log(paymentMethod.id)
                // cardForm.submit()
            }
            let $formEle = $('#payment-form');
            let form = $formEle[0];
            let formData = new FormData(form);
            console.log(formData)
            formData.append('_token', $('input[name="_token"]').val());
            let xhr = $.ajax({
                url: "/campaigns/donate_now_with_cash",
                type: 'post',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
            })

            xhr.done(function (response){
                console.log(response)
                if(response.success){
                    $('#donateLoading').addClass('hidden');
                    $formEle.addClass('hidden');
                    $('.resultDonate').removeClass('hidden');
                    $('#resultDonateAmount').text(formatCurrency(response.data.donate_amount));
                }else{
                    $('#donateLoading').addClass('hidden');
                    $('#payment_fail').removeClass('hidden').addClass('justify-center items-center flex');
                }
            })
        }
    })
})
function formatCurrency(number) {
    const formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD'
    });
    return formatter.format(number);
}

