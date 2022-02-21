<div class="item">
  @if (isset($title))
    <div class="item__title">
      <h2>{{ $title }}</h2>
    </div>
  @else
    <div class="item__title hide-sm">
      <h2>&nbsp;</h2>
    </div>
  @endif
  <div class="item__content">
    {{ $content}}
  </div>
</div>