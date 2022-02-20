@extends('web.layout.app')
@section('seo_title', 'Stations')
@section('content')
<main role="main" class="site">
  <section>
    <div class="content">
      @include('web.partials.addresses.airport-services')
      @include('web.partials.addresses.technics')
    </div>
  </section>
  @include('web.partials.social', array('class' => 'hide-mobile'))
</main>
@endsection

