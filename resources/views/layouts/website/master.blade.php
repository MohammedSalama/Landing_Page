<!DOCTYPE html>
<html lang="en">
@include('layouts.website.head')
<body>
<!-- Background Video-->
<video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="{{ URL::asset('website/assets/mp4/bg.mp4') }}" type="video/mp4" /></video>
<!-- Masthead-->
<div class="masthead">
   @include('layouts.website.masthead')
</div>

@include('layouts.website.social')

@include('layouts.website.script')
</body>
</html>
