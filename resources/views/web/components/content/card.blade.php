<figure class="card is-{{$type}}">
  <a href="">
    {!! ImageHelper::post($image, '') !!}
    @if ($type == 'news')
      <figcaption>
        <em>News | {{$subtitle}}</em>
        <h2>{{$title}}</h2>
      </figcaption>  
    @else
      <figcaption>
        <h2>{{$title}}</h2><em>{{$subtitle}}</em>
      </figcaption>
    @endif
  </a>
</figure>