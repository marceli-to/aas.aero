@extends('web.layout.app')
@section('seo_title', 'Contacts')
@section('content')
<main role="main" class="site">
  <section>
    <div class="content">
      @include('web.partials.addresses.entities')
      @include('web.partials.addresses.sales')
    </div>
  </section>
  @include('web.partials.social', array('class' => 'hide-mobile'))
</main>
@endsection

