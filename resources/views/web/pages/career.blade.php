@extends('web.layout.app')
@section('seo_title', 'Career')
@section('content')
<main role="main" class="site">
  <div class="swiper js-swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="/assets/img/aas-aero-01.jpg" height="800" width="1200">
      </div>
      <div class="swiper-slide">
        <img src="/assets/img/aas-aero-02.jpg" height="800" width="1200">
      </div>
      <div class="swiper-slide">
        <img src="/assets/img/aas-aero-03.jpg" height="800" width="1200">
      </div>
      <div class="swiper-slide">
        <img src="/assets/img/aas-aero-04.jpg" height="800" width="1200">
      </div>
    </div>
  </div>
  <section>
    <div class="content" style="translateZ(0);">
      <div class="career">
        <div class="career__items">
          <h3>Wir suchen dich - Interessiert?</h3>
          <p>Alle offenen Stellen bei der AAS findet ihr auf unserer Karriereseite unter <a href="https://join.com/companies/aas" target="_blank" class="anchor">https://join.com/companies/aas</a>.</p>
          <p>Get on board with AAS! Wir freuen uns auf deine Bewerbung.</p>
        </div>
        {{-- <div class="career__items">
          <x-jobs>
            <x-slot name="title">ZRH</x-slot>
            <x-slot name="content">
              <p><strong>Mitarbeitende für die Bodenabfertigung </strong><br>Im Stundenlohn (Flexibles Pensum und verschiedene Einsatzbereiche möglich)<br><a href="https://join.com/companies/aas/3920938-mitarbeitende-fuer-die-bodenabfertigung-im-stundenlohn-flexibles-pensum-und-verschiedene-einsatzbereiche-moeglich" target="_blank" title="join.com/companies/aas">&gt; more information</a></p>
            </x-slot>
          </x-jobs>
          <x-jobs>
            <x-slot name="title">VIE</x-slot>
            <x-slot name="content">
              <p><strong>HSSQTE Group Support Officer (m/w/d)</strong><br>Vollzeit<br><a href="https://join.com/companies/aas/3919779-hssqte-group-support-officer-w-m-d-vollzeit" target="_blank" title="join.com/companies/aas">&gt; more information</a></p>
              <p><strong>Data Analyst (m/w/d)</strong><br>Vollzeit<br><a href="https://join.com/companies/aas/3938835-data-analyst-w-m-d" target="_blank" title="join.com/companies/aas">&gt; more information</a></p>
              <p><strong>Passenger Service Agent (m/w/d)</strong><br>Teilzeit<br><a href="https://join.com/companies/aas/3939085-passenger-service-agent-w-m-d" target="_blank" title="join.com/companies/aas">&gt; more information</a></p>
            </x-slot>
          </x-jobs>
          <x-jobs>
            <x-slot name="title">HAM</x-slot>
            <x-slot name="content">
              <p><strong>Lost & Found Agent (m/w/d)</strong><br>Vollzeit/Teilzeit (auch Split mit Check-In möglich)<br><a href="https://join.com/companies/aas/3920082-lost-und-found-agent-w-m-d-teilzeit-vollzeit-auch-split-mit-check-in-moeglich" target="_blank" title="join.com/companies/aas">&gt; more information</a></p>
              <p><strong>Passenger Service Agent (m/w/d)</strong><br>Vollzeit/Teilzeit<br><a href="https://join.com/companies/aas/3903235-passenger-service-agent-w-m-d-teilzeit-vollzeit" target="_blank" title="join.com/companies/aas">&gt; more information</a></p>
              <p><strong>Passenger Service Supervisor (m/w/d)</strong><br>Vollzeit/Teilzeit<br><a href="https://join.com/companies/aas/3920302-passenger-service-supervisor-w-m-d-vollzeit-teilzeit" target="_blank" title="join.com/companies/aas">&gt; more information</a></p>
              <p><strong>Planning Officer (m/w/d)</strong><br>Vollzeit/Teilzeit<br><a href="https://join.com/companies/aas/3920317-planning-officer-w-m-d-teilzeit-vollzeit" target="_blank" title="join.com/companies/aas">&gt; more information</a></p>
              <p><strong>Ticket Service Agent (m/w/d)</strong><br>Vollzeit/Teilzeit<br><a href="https://join.com/companies/aas/3920329-ticket-service-agent-w-m-d-teilzeit-vollzeit" target="_blank" title="join.com/companies/aas">&gt; more information</a></p>
            </x-slot>
          </x-jobs>
          <x-jobs>
            <x-slot name="title">DUS</x-slot>
            <x-slot name="content">
              <p><strong>Head of Human Resources Germany (W/M/D) </strong><br>Vollzeit<br><a href="https://join.com/companies/aas/3919513-human-resources-manager-w-m-d-vollzeit" target="_blank" title="join.com/companies/aas">&gt; more information</a></p>
              <p><strong>Lost & Found Agent (m/w/d)</strong><br>Vollzeit/Teilzeit (auch Split mit Check-In möglich)<br><a href="https://join.com/companies/aas/3920081-lost-und-found-agent-w-m-d-teilzeit-vollzeit-auch-split-mit-check-in-moeglich" target="_blank" title="join.com/companies/aas">&gt; more information</a></p>
              <p><strong>PMO / Project Manager (m/w/d)</strong><br>Vollzeit<br><a href="https://join.com/companies/aas/3937184-pmo-project-manager-w-m-d-vollzeit" target="_blank" title="join.com/companies/aas">&gt; more information</a></p>
              <p><strong>Passenger Service Agent (m/w/d)</strong><br>Vollzeit/Teilzeit<br><a href="https://join.com/companies/aas/3903234-passenger-service-agent-w-m-d-teilzeit-vollzeit" target="_blank" title="join.com/companies/aas">&gt; more information</a></p>
              <p><strong>Passenger Service Supervisor (m/w/d)</strong><br>Vollzeit/Teilzeit<br><a href="https://join.com/companies/aas/3920300-passenger-service-supervisor-w-m-d-vollzeit-teilzeit" target="_blank" title="join.com/companies/aas">&gt; more information</a></p>
              <p><strong>Planning Officer (m/w/d)</strong><br>Vollzeit/Teilzeit<br><a href="https://join.com/companies/aas/3920319-planning-officer-w-m-d-teilzeit-vollzeit" target="_blank" title="join.com/companies/aas">&gt; more information</a></p>
              <p><strong>Ticket Service Agent (m/w/d)</strong><br>Vollzeit/Teilzeit<br><a href="https://join.com/companies/aas/3920333-ticket-service-agent-w-m-d-teilzeit-vollzeit" target="_blank" title="join.com/companies/aas">&gt; more information</a></p>
            </x-slot>
          </x-jobs>
        </div> --}}
        <div class="career__info">
          <p><strong>Human Resources / Recruitment</strong><br>For questions or unsolicitated applications please contact:</p>
          <p><strong>ZRH Station</strong><br><x-mailto email="recruitment_zrh@aas.aero" /></p>
          <p><strong>VIE Station</strong><br><x-mailto email="recruitment_vie@aas.aero" /></p>
          <p><strong>DUS Station</strong><br><x-mailto email="recruitment_dus@aas.aero" /></p>
          <p><strong>HAM Station</strong><br><x-mailto email="recruitment_ham@aas.aero" /></p>
          <p><strong>FRA Station</strong><br><x-mailto email="recruitment_fra@aas.aero" /></p>
          <p><strong>BER Station</strong><br><x-mailto email="recruitment_ber@aas.aero" /></p>
        </div>
      </div>
    </div>
  </section>
  @include('web.partials.social', array('class' => 'hide-mobile'))
</main>
@endsection

