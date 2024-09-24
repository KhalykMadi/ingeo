@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Изменение контента</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('admin.coordinate.update', $coordinate)}}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" value="{{$coordinate->title}}"
                                       placeholder="Title">
                                @error('title')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Информация</label>
                                <input type="text" name="text" class="form-control"  placeholder="Информация" value="{{$coordinate->text}}">
                                @error('text')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Долгота</label>
                                <input type="text" name="longitude" class="form-control"  placeholder="Долгота" value="{{$coordinate->longitude}}">
                                @error('longitude')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Ширина</label>
                                <input type="text" name="latitude" class="form-control"  placeholder="Ширина" value="{{$coordinate->latitude}}">
                                @error('latitude')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label>Регион</label>
                                <select class="custom-select" name="region_id">
                                    @foreach($regions as $region)
                                        <option value="{{$region->id}}"
                                            {{$region->id == $coordinate->region_id ? 'selected' : ''}}
                                        >{{$region->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Изменить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
