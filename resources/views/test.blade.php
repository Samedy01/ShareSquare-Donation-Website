<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- @vite('resources/css/app.css') --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        fieldset {
            border: 1px solid blue;
            width: 360px;
            border-radius: 5px;
        }

        legend, label{
            color: blue;
            font-size: 24px;
            font-family: sans-serif;
        }

        input {
            font-size: 18px;
            padding: 5px;
            height: 35px;
            width: 350px;
            border: 1px solid blue;
            outline: none;
            border-radius: 5px;
            color: blue;
            /*   border-bottom: none; */
        }
        datalist {
            position: absolute;
            background-color: white;
            border: 1px solid blue;
            border-radius: 0 0 5px 5px;
            border-top: none;
            font-family: sans-serif;
            width: 350px;
            padding: 5px;
            max-height: 10rem;
            overflow-y: auto

        }

        option {
            background-color: white;
            padding: 4px;
            color: blue;
            margin-bottom: 1px;
            font-size: 18px;
            cursor: pointer;
        }
    </style>
</head>

<body>
<fieldset>
    <legend>
        Datalist Form
    </legend>
    <label>Select Browser</label>
    <input  autocomplete="off" role="combobox" list="" id="input" name="browsers" placeholder="Select your fav browser">
    <!-- It's important that you keep the list attribute empty to hide the default dropdown icon and the browser's default datalist -->

    <datalist id="browsers" role="listbox">
        <option value="Internet Explorer">Internet Explorer</option>
        <option value="Chrome">Chrome</option>
        <option value="Safari">Safari</option>
        <option value="Microsoft Edge">Microsoft Edge</option>
        <option value="Firefox">Firefox</option>
        <option value="Microsoft Edge">Microsoft Edge</option>
        <option value="Firefox">Firefox</option>
        <option value="Microsoft Edge">Microsoft Edge</option>
        <option value="Firefox">Firefox</option>
        <option value="Microsoft Edge">Microsoft Edge</option>
        <option value="Firefox">Firefox</option>
        <option value="Microsoft Edge">Microsoft Edge</option>
        <option value="Firefox">Firefox</option>
        <option value="Microsoft Edge">Microsoft Edge</option>
        <option value="Firefox">Firefox</option>
        <option value="Microsoft Edge">Microsoft Edge</option>
        <option value="Firefox">Firefox</option>
        <option value="Microsoft Edge">Microsoft Edge</option>
        <option value="Firefox">Firefox</option>
    </datalist>
</fieldset>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        const $input = $('#input');
        const $browsers = $('#browsers');
        let currentFocus = -1;

        $input.on('focus', function () {
            $browsers.css('display', 'block');
            $input.css('borderRadius', '5px 5px 0 0');
        });

        $browsers.on('click', 'option', function () {
            $input.val($(this).val());
            $browsers.css('display', 'none');
            $input.css('borderRadius', '5px');
        });

        $input.on('input', function () {
            currentFocus = -1;
            const text = $input.val().toUpperCase();
            $browsers.find('option').each(function () {
                if ($(this).val().toUpperCase().indexOf(text) > -1) {
                    $(this).css('display', 'block');
                } else {
                    $(this).css('display', 'none');
                }
            });
        });

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
    });
</script>

</body>

</html>
