<!doctype html>
<html class="no-js" lang="en">

<head>
    <x-layouts.backend.head />
</head>

<body class="skin-dark">

    <div class="main-wrapper">


        <x-layouts.backend.header />
       
        <x-layouts.backend.drawer />
        
            {{ $slot }}
          
        <x-layouts.backend.footer />
            

    </div>

    <x-layouts.backend.script />

</body>

</html>