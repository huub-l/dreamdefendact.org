@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
      @include ( 'atoms.pictureheavy-layout' )
      @include ( 'atoms.intro' )
      @include ( 'partials.content-page' )
  @endwhile
@endsection
@section('wildflower')
  @include('atoms.wildflowers')
@endsection
