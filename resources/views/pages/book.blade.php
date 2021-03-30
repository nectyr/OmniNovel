@extends("layouts.{$layout}", [
  'title' => 'Books',
  'breadcrumb' => [[
    'title' => 'Books'
  ]],
  'new_button_label' => false
])

@section('content')

    <div class="{{ $containerClass ?? 'container' }} page__container">









    </div>

@endsection

@section('head')
    <!-- Flatpickr -->
    <link type="text/css" href="{{ mix('css/vendor/flatpickr.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ mix('css/vendor/flatpickr-airbnb.css') }}" rel="stylesheet">
@endsection

@section('footer')
    <!-- Global Settings -->
    <script src="{{ mix('js/settings.js') }}" defer></script>

    <!-- Flatpickr -->
    <script src="{{ mix('vendor/flatpickr/flatpickr.min.js') }}" defer></script>
    <script src="{{ mix('js/flatpickr.js') }}" defer></script>

    <!-- Moment.js -->
    <script src="{{ mix('vendor/moment.min.js') }}" defer></script>
    <script src="{{ mix('vendor/moment-range.js') }}" defer></script>

    <!-- Chart.js -->
    <script src="{{ mix('vendor/Chart.min.js') }}" defer></script>
    <script src="{{ mix('js/charts.js') }}" defer></script>
    <script src="{{ mix('js/chartjs-rounded-bar.js') }}" defer></script>

    <!-- Chart.js Samples -->
    <script src="{{ mix('js/page.dashboard.js') }}" defer></script>
    <script src="{{ mix('js/progress-charts.js') }}" defer></script>

@endsection
