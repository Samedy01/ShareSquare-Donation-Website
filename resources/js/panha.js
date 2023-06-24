
$(document).ready(function () {

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
            $('#modalBackground').removeClass('hidden')
            /*change color other dropdown if they open*/
            hiddenDropDown($otherDropDown)
        } else {
            hiddenDropDown($(this))
            $('#modalBackground').addClass('hidden')

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
            choosePaymentMethodOption('show')
            accountNumberForm('show')
            addQrCodePayForm('show')
            if (checkedValue === 'cashOrItem') {
                itemCategorySelectedForm('show')
                deliveryOptionForm('show')
            } else if (checkedValue === 'cash') {
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
    $('input[name="deliveryOption"]').on('change', function () {
        /*get the elements that are not checked*/
        let $unCheckedInput = $('input[name="deliveryOption"]:not(:checked)')
        let $checkedInput = $('input[name="deliveryOption"]:checked')
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

    let subtitleCounter = 1; // Counter variable for unique IDs

    $("#addNewSubtitle").click(function() {
        // Clone the template element
        let template = `
            <div>
                <div class="flex flex-col mt-4">
                    <label for="campaign_title-${subtitleCounter}" class="font-bold">Title</label>
                    <input type="text" id="campaign_title-${subtitleCounter}"
                           class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent"
                           placeholder="Your campaign title"
                           name="campaign_title-${subtitleCounter}"
                           >
                </div>
                <div class="flex flex-col mt-4 oneSubTitle newSubtitleTemplate">
                    <label for="campaign_description-${subtitleCounter}" class="font-bold">Description</label>
                    <textarea id="campaign_description-${subtitleCounter}"
                              name="campaign_description-${subtitleCounter}"
                              class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent"
                              placeholder="What is the purpose of your campaign"></textarea>
                    <a href="#" class="primary-color-letter mt-3 addPhotoToAdditionalTitle" data-input-target="#hidden-input-images-for-description-${subtitleCounter}">
                        <i class="fa fa-plus-circle"></i>
                        <span>Add Photos</span>
                    </a>
                    <input name="multiple_image_for_title-${subtitleCounter}[]" id="hidden-input-images-for-description-${subtitleCounter}" type="file" multiple class="hidden inputForMultipleImage">
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


    let countNewContact = 1;
    /*Add additional contact*/
    $('#addNewContactInfo').on('click',function() {
        // Clone the template element
        console.log('Hello')
        let templateContact = `
                <div class="mt-4">
                    <p class="font-bold">New contact ${countNewContact} (optional)</p>
                    <label for="campaign-contact-title-${countNewContact}" class="">
                        <input name="campaign_contact_title-${countNewContact}" placeholder="Contact title (Ex: Instagram)" type="text"
                               id="campaign-contact-title-${countNewContact}"
                               class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent w-full">
                    </label>
                    <label for="campaign-contact-detail-${countNewContact}" class="">
                        <input name="campaign_contact_detail-${countNewContact}" placeholder="Enter contact link" type="text"
                               id="campaign-contact-detail-${countNewContact}"
                               class="border py-5 px-7 rounded-[10px] mt-3 focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent w-full">
                    </label>
                </div>
        `;
        // console.log(templateContact)
        $("#additionalContactWrapper").append(templateContact);
        countNewContact++;
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
        $('#letterSubmmit').addClass('hidden')
        $('#submitLoading').removeClass('hidden')
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
})
