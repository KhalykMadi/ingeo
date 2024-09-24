@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление контента</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.region.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Кординаты</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 card p-3">
                        <form action="{{route('admin.coordinate.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Название</label>
                                <input type="text" name="title" class="form-control"  placeholder="Название">
                                @error('title')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Информация</label>
                                <input type="text" name="text" class="form-control"  placeholder="Информация">
                                @error('text')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Долгота</label>
                                <input type="text" name="longitude" class="form-control"  placeholder="Долгота">
                                @error('longitude')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Ширина</label>
                                <input type="text" name="latitude" class="form-control"  placeholder="Ширина">
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
                                            {{$region->id == old('region_id') ? 'selected' : ''}}
                                        >{{$region->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
