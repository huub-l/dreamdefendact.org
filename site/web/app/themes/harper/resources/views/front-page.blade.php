@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
      @include ( 'partials.bulma-top-bar' )
      @include ( 'atoms.intro' )
      @include ( 'partials.content-page' )
      @include ( 'atoms.interlude', array(
        'bg' => 'images/2018/banner.png'
      ))
      @include ( 'atoms.prep' )
      @include ( 'atoms.amendments' )
      @include ( 'atoms.candidates' )
      @include ( 'atoms.dream-killers' )
      @include ( 'atoms.freedom-pledge' )
      @include ( 'atoms.dream-defenders' )
      @include ( 'atoms.interlude-2', array(
        'bg' => 'images/2018/banner.png'
      ))
  @endwhile
@endsection
