{{-- ---------------------------------------------------------------------------------- --}}
{{-- Head HTML --}}
@include('layouts.head' , ['title' => " "])
{{-- ---------------------------------------------------------------------------------- --}}






{{-- Contents --}}
{{-- ---------------------------------------------------------------------------------- --}}

{{-- 1.Navber --}}
@include('layouts.Navbar.navbar')
{{-- 2.Banner --}}
@include('layouts.Banner.banner')
{{-- 4.Notice --}}
@include('layouts.Notice.notice')
{{-- 3.Catagories --}}
@include('layouts.Catagories.catagories')
{{-- 4.Featured Item --}}
@include('layouts.Featured-Product.featured_product')
{{-- 5.About --}}
@include('layouts.About.about')
{{-- 6.Footer --}}
@include('layouts.Footer.footer')










{{-- ---------------------------------------------------------------------------------- --}}
{{-- Bottom HTML --}}
@include('layouts.bottom')
{{-- ---------------------------------------------------------------------------------- --}}