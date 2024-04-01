@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('public/assets/css/thankyou.css') }}">
@section('content')
<section class="thankyou-page">
    <div class="container">
        <div class="thanks-wrapper">
            <img src="{{ asset('public/assets/images/thanks.png') }}" alt="">
            <h1>Thank You! <br>You have made the right choice by choosing us.</h1>
            <p>You can expect to hear back from us very soon.</p>
            <a href="{{ url('') }}" type="button" class="back-to-home">Back to home</a>
            <div class="quote-wrap">
                <span class="quote">
                You can dream, create, design, and build the most wonderful place in the world. But it requires people to make the dream a reality.
                <b>- Walt Disney</b>
                </span>
            </div>
        </div>
    </div>
</section>
<style>

    .popup__content{background-image:url('{{ asset("public/assets/images/popup-bg.png") }}');background-repeat:no-repeat;background-size:cover;width:700px;height:auto;display:flex;flex-direction:column;justify-content:center;align-items:center;position:relative;border-radius:17px}.popup__close{background-color:#ddd!important;height:30px;width:30px;line-height:30px;text-align:center;border-radius:50%;position:absolute;right:-10px;top:-10px;display:flex;align-items:center;justify-content:center;cursor:pointer}.popup-cont h5{font-family:sofia_probold;font-size:42px;line-height:55px;color:#ffc30e;margin:0;position:relative;padding-bottom:35px}.popup-cont #off{position:absolute;right:5%;top:35px;display:block;width:200px;height:auto}.popup-cont h5:before{content:"";width:100px;height:2px;background:#fff;display:block;position:absolute;bottom:10px;left:0;right:0;margin:0}.popup-cont p{font-size:22px;line-height:32px;color:#fff;max-width:800px;margin:auto; font-family: sofia_prolight;padding-top:10px}.popup-cont p b{font-family:sofia_probold}.popup-cont a{margin-top:20px}.popup-cont{width:70%;padding:60px 30px 145px 30px}#popup-img{position:absolute!important;width:100%;right:0;bottom:0}#popup-img img{border-bottom-right-radius:17px;border-bottom-left-radius:17px}.popup-cont .nav_quote{font-size:16px;z-index:99}@media screen and (max-width:640px){.popup__content{width:340px;position:relative}.popup-cont{width:80%;padding:80px 15px 70px 16px}.popup-cont #off{right:5%;top:14px;display:block;width:105px!important}.popup-cont h5{font-size:21px;line-height:30px;padding-bottom:20px}.popup-cont p{font-size:13px;line-height:24px}.popup-cont .nav_quote{font-size:12px;min-width:inherit;padding:5px 9px}#popup-img{height:40%;width:100%;bottom:0;right:0}}@media screen and (max-width:340px){.popup__content{width:310px;position:relative}.popup-cont{width:80%;padding:80px 15px 70px 16px}}
    @media screen and (min-width:768px){ .floating-cta{display:none}}.whatsapp-footer{transition:all ease .3s;}@media screen and (max-width:768px){footer {padding-bottom: 75px;}.whatsapp-footer.show{bottom:70px;}.floating-cta.show{bottom:0;}.floating-cta{position:fixed;width:100%;display:flex;align-items:center;justify-content:center;padding:8px 20px;background:#fff;-webkit-box-shadow:0 -2px 4px 0 rgb(173 173 173 / 30%);-moz-box-shadow:0 -2px 4px 0 rgb(173 173 173 / 30%);box-shadow:0 -2px 4px 0 rgb(173 173 173 / 30%);transition: all ease .3s;bottom: -70px;z-index:9999;}.floating-cta a{height:48px;display:inline-block;background:#ffc30e;border-radius:3px;color:#000;text-align:center;font-size:16px;font-family: "proxima-nova", sans-serif;font-weight: 700;line-height:48px;padding:0 30px;border:none;transition:all .3s cubic-bezier(.25,.8,.25,1);position:relative;z-index:1;width:auto;}}@media screen and (max-width:641px){.floating-cta a{width:100%;}}</style>
<div class="floating-cta">
    <a rel="nofollow" id="sales-header" href="{{ route('get.quote') }}" title="Get a free quote">Get A Free Quote</a>
    </div>
@endsection
