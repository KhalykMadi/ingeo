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
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('admin.user.update', $user->id)}}" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label>ФИО</label>
                                        <input type="text" name="name" class="form-control" value="{{$user->name}}"
                                               placeholder="Title">
                                        @error('name')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" value="{{$user->email}}"
                                               placeholder="Title">
                                        @error('email')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Пароль</label>
                                        <input type="text" name="password" class="form-control"
                                               placeholder="Пароль">
                                        @error('password')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group w-50">
                                        <label>Регион</label>
                                        <select class="custom-select" name="role">
                                            @foreach($roles as $id => $role)
                                                <option value="{{$id}}"
                                                    {{$id == $user -> role ? 'selected' : ''}}
                                                >{{$role}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Изменить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
