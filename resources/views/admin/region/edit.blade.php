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
                            <li class="breadcrumb-item"><a href="{{route('admin.region.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">{{$region->title}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3">
                        <form action="{{route('admin.region.update', $region)}}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" value="{{$region->title}}"
                                       placeholder="Title">
                                @error('title')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
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
