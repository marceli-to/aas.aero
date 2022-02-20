@extends('web.layout.app')
@section('seo_title', 'Home')
@section('content')
<main role="main" class="site">
  <div class="video-container">
    <video playsinline autoplay muted loop>
      <source src="/assets/aas-1080p_low.mp4" type="video/mp4">
    </video>
  </div>
  <section>
    <div class="slogan">ready.</div>
  </section>
  @include('web.partials.social', array('class' => ''))
</main>
@endsection