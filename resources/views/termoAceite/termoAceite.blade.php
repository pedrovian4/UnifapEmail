@extends('layout.layout')

@section('main')

<section id="main">
    <div class="ExternalFiles text-center">
        <iframe src="{{$termoAceite}}" frameborder="0" width="600" height="600"></iframe>
    </div>

    <div class="text-center mt-1">
            <form action="/generation" method="post">
                @csrf
                <button type="submit"  class="btn btn-secondary">Aceito os Termos</button>
  
            </form>
  
  
    </div>

</section>


    
@endsection