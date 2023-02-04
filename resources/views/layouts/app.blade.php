<!DOCTYPE html>
<html lang="en">

{{-- header --}}
@include('header')

<body>

    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    @include('formSearch')
    <!--/ Form Search End /-->

    <!--/ Nav Star /-->
    @include('nav')
    <!--/ Nav End /-->

    <!--/ Carousel Star /-->
    @include('intro')
    <!--/ Carousel end /-->

    <!--/ Services Star /-->
    @include('services')
    <!--/ Services End /-->

    <!--/ Property Star /-->
    @include('property')
    <!--/ Property End /-->

    <!--/ Agents Star /-->
    @include('agents')
    <!--/ Agents End /-->

    <!--/ News Star /-->
    @include('news')
    <!--/ News End /-->

    <!--/ Testimonials Star /-->
    @include('testimonals')
    <!--/ Testimonials End /-->

    <!--/ footer Star /-->
    @include('sectionFooter')
    {{-- footer --}}
    @include('footer')
    <!--/ Footer End /-->

    <a
        href="#"
        class="back-to-top"
    ><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- JavaScript Libraries -->
    @include('script')

</body>

</html>
