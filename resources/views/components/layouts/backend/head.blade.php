<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>{{ setting('website_title') }}</title>
<meta name="robots" content="noindex, follow" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" type="image/x-icon" href="{{asset(setting('favicon')) ?? null}}">
<link rel="stylesheet" href="{{ asset('backend/assets/css/vendor/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/css/vendor/material-design-iconic-font.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/css/vendor/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/css/vendor/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/css/vendor/cryptocurrency-icons.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/css/plugins/plugins.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/css/helper.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/css/common.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/phosphor-icons@1.4.2/src/css/icons.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css" />

<livewire:styles />
{{ $slot }}