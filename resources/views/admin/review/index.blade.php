@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Картинки</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">Картинки</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <a href="{{route('admin.review.create')}}" class="btn btn-primary">Добавить</a>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Отзывы</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Пользователь</th>
                                        <th>Кордината</th>
                                        <th>Отзыв</th>
                                        <th>Оценка</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($reviews as $review)
                                        <tr>
                                            <td>{{$review->id}}</td>
                                            <td>{{$review->user->name}}</td>
                                            <td>{{$review->coordinate->title}}</td>
                                            <td>{{$review->comment}}</td>
                                            <td>
                                                <div class="rating-mini">
                                                    @for($n = 0; $n < $review->rating; $n++)
                                                        <span class="active"></span>
                                                    @endfor
                                                </div>
                                            </td>
                                            <td><a href="{{route('admin.review.edit', $review->id)}}"
                                                   class="text-success">
                                                    <i class="fas fa-pencil-alt"></i></a></td>
                                            <td>
                                                <form action="{{route('admin.review.destroy', $review->id)}}"
                                                      method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border-0 bg-transparent">
                                                        <i class="fas fa-trash text-danger" role="button"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @push('css')
        <style>
            .rating-mini {
                display: inline-block;
                font-size: 0;
            }
            .rating-mini span {
                padding: 0;
                font-size: 20px;
                line-height: 1;
                color: lightgrey;
            }
            .rating-mini > span:before {
                content: '★';
            }
            .rating-mini > span.active {
                color: gold;
            }
        </style>
    @endpush
@endsection
