@extends('layouts.admin')

@section('content')
    <div class="container mt-0">
        <div class="row mx-0">
            <div class="col-12">
                <h1 class="text-center">I tuoi dati</h1>
            </div>
        </div>

        <div class="row justify-content-center mx-0" >
            @if ($errors->any())
                <div class="alert alert-danger col-md-8" role="alert">
                    {{ $errors->first() }}
                </div>
            @endif
        </div>

        <div class="row justify-content-center mt-3 mx-0">
            <div class="col-md-4 card shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-4 pb-1 border-bottom">
                        <span style="font-size: 10px;">NOME RISTORANTE: </span>
                        <h5 class="pl-2 mb-0">{{ $user->restaurant_name }}</h5>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-4 pb-1 border-bottom">
                        <span style="font-size: 10px;">P.IVA: </span>
                        <h5 class="pl-2 mb-0">{{ $user->piva }}</h5>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-4 pb-1 border-bottom">
                        <span style="font-size: 10px;">EMAIL: </span>
                        <h5 class="pl-2 mb-0">{{ $user->email }}</h5>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-4 pb-1 border-bottom">
                        <span style="font-size: 10px;">TELEFONO: </span>
                        <h5 class="pl-2 mb-0">{{ $user->phone_number }}</h5>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <span style="font-size: 10px">CATEGORIA/E:</span>
                            <ul class="category_list px-0">
                                @foreach ($user->categories as $category)
                                <li>• {{ $category->name }}</li>
                                @endforeach
                            </ul>
                        </div> 

                        <div class='col-12 col-md-6 user_image_wrapper'>
                            <span style="font-size: 10px">IMMAGINE:</span> 
                            <div class="user_image">
                                <img src="{{ asset('storage/' . $user->restaurant_image) }}" class="rounded" alt="{{ $user->restaurant_name }}">    
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
