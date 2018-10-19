@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
      @include ( 'atoms.pictureheavy-layout' )
      {{-- @include ( 'partials.page-header' )
       @include ( 'atoms.candidates' )
      @include ( 'partials.content-page' ) 
      @svg('compass') --}}
  @endwhile
@endsection
