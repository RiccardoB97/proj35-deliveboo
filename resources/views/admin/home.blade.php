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
            <div class="col-6 card shadow p-3 mb-5 bg-white rounded">
                <div class="card-body p-0">
                    <div class="container">
                        <div class="row details_image_wrapper">
                            <div class="col-12 details_image p-0">
                                <div style="background-image: url('{{asset('storage/'.$user->restaurant_image)}}')"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-4 d-flex align-items-center justify-content-between border-bottom">
                                <span style="font-size: 10px;">NOME RISTORANTE: </span>
                                <h5 class="pl-2 mb-0">{{ $user->restaurant_name }}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-4 d-flex align-items-center justify-content-between border-bottom">
                                <span style="font-size: 10px;">P.IVA: </span>
                                <h5 class="pl-2 mb-0">{{ $user->piva }}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-4 d-flex align-items-center justify-content-between border-bottom">
                                <span style="font-size: 10px;">EMAIL: </span>
                                <h5 class="pl-2 mb-0">{{ $user->email }}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-4 d-flex align-items-center justify-content-between border-bottom">
                                <span style="font-size: 10px;">TELEFONO: </span>
                                <h5 class="pl-2 mb-0">{{ $user->phone_number }}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-4">
                                <span style="font-size: 10px">CATEGORIA/E:</span>
                                <ul class="category_list px-0">
                                    @foreach ($user->categories as $category)
                                    <li>{{ $category->name }}</li>
                                    @endforeach
                                </ul>
                            </div> 
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
