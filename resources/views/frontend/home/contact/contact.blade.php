@extends('frontend.layout.app')

@section('frontend_content')


<div class="container">
    <div class="row align-items-center">
        <div class="col-10 border shadow align-items-center m-2 p-2">
            <h3 class="text-decoration-underline">How To Find Us</h3>
        <div class="row g-3">
            @if( !empty($contacts))
            @foreach( $contacts as $contact)
         
                <div class="col-3   text-center mx-4 p-3">
                    <div class="card m-3" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $contact->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Lorem ipsum dolor sit amet.</h6>
                            <p class="card-text">{{ $contact->address}}</p>
                            <a href="#" class="card-link">{{ $contact->phone}}</a>
                            <a href="#" class="card-link">{{ $contact->email}}</a>
                        </div>
                    </div>
                </div>
          
            @endforeach
            @endif

            </div>


        </div>
    </div>
</div>


@endsection

@section('frontend_script')

@endsection