<!--Favicon -->
<link rel="icon" href="{{URL::asset('img/brand/favicon.ico')}}" type="image/x-icon"/>

<!-- Animate -->
<link href="{{URL::asset('css/animated.css')}}" rel="stylesheet" />

<!-- Bootstrap 5 -->
<link href="{{URL::asset('plugins/bootstrap-5.0.2/css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Icons -->
<link href="{{URL::asset('css/icons.css')}}" rel="stylesheet" />

<!-- P-scrollbar -->
<link href="{{URL::asset('plugins/p-scrollbar/p-scrollbar.css')}}" rel="stylesheet" />

<!-- Simplebar -->
<link href="{{URL::asset('plugins/simplebar/css/simplebar.css')}}" rel="stylesheet">

<!-- Tippy -->
<link href="{{URL::asset('plugins/tippy/scale-extreme.css')}}" rel="stylesheet" />
<link href="{{URL::asset('plugins/tippy/material.css')}}" rel="stylesheet" />

		<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '172376325777907');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=172376325777907&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
<!--  Hotjar Tracking Code for  -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:3510916,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PH72947');</script>
<!-- End Google Tag Manager -->

<!-- Toastr -->
<link href="{{URL::asset('plugins/toastr/toastr.min.css')}}" rel="stylesheet" />

<link href="{{URL::asset('plugins/awselect/awselect.min.css')}}" rel="stylesheet" />

@yield('css')

<!-- All Styles -->
<link href="{{URL::asset('css/app.css')}}" rel="stylesheet" />
	