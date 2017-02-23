@extends('layouts.master')

@section('title')
    Property
@endsection

@section('content')
    @foreach($properties->chunk(3) as $propertyChunk)
        <div class="row">
            @foreach($propertyChunk as $property)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{ $property->imagePath }}" alt="..." class="img-responsive">
                        <div class="caption">
                            <h3>{{ $property->title }}</h3>
                            <p class="description">{{ $property->description }}</p>
                            <div class="clearfix">
                                <div class="pull-left prise">$ {{ $property->price }}</div>
                                <a href="#" class="btn btn-primary pull-right" role="button">Add to Property cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection