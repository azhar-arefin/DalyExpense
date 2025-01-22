<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daly Expense Report</title>
    <link rel="icon" type="image/png" href="{{ asset('imgs/daily-expense.png') }}">


    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">

    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Icons CDN  //  https://fonts.google.com/icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
 <!-- TinyMCE -->
 <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
   
 <style>
    @yield('style')
 </style>

<!-- Sweet Alert  -->
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    

@include('layout.header')

    @yield('pages')


@include('layout.footer')




<!-- =========== Scripts =========  -->
<script src="{{asset('js/main.js')}}"></script>
<script>
   
   function updateDateTime() {
        const now = new Date();

            // Convert to Bangladesh Standard Time (BST) (UTC+6)
        const options = {
            timeZone: 'Asia/Dhaka',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: true
        };

        const formattedTime = new Intl.DateTimeFormat('en-US', options).format(now);

        const dateStr = now.toLocaleDateString('en-GB');
        const formattedDate = dateStr.replace(/\//g, '.');

        // Display the formatted time in the paragraph element
        document.getElementById('live-time').innerText = formattedDate + ' ' + formattedTime;

        
    }   

    // Update the time every second
    setInterval(updateDateTime, 1000);
</script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>