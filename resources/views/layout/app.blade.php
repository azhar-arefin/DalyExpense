<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Page Title -->
    <title>Daly Expense Report</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('imgs/daily-expense.png') }}">

    <!-- Basic Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Daily Expense Report">
    <meta name="description" content="Easily manage and analyze your daily expenses with our comprehensive reporting system.">
    <meta name="keywords" content="daily expense, expense tracker, financial report, budgeting tool">
    <meta name="author" content="Your Name or Business Name">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta Tags (for social media) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Daily Expense Report">
    <meta property="og:description" content="Easily manage and analyze your daily expenses with our comprehensive reporting system.">
    <meta property="og:image" content="{{ asset('imgs/daily-expense.png') }}">
    <meta property="og:url" content="https://yourwebsite.com/daily-expense-report">
    <meta property="og:site_name" content="Your Website Name">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Daily Expense Report">
    <meta name="twitter:description" content="Easily manage and analyze your daily expenses with our comprehensive reporting system.">
    <meta name="twitter:image" content="{{ asset('imgs/daily-expense.png') }}">
    <meta name="twitter:site" content="@YourTwitterHandle">

  
   
 
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">

    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <!-- Icons CDN  //  https://fonts.google.com/icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

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