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
                    <div class="col-md-12">
                        <div class="card card-widget">
                            <form action="{{ route('admin.review.update', $review) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="col-md-6">
                                            <p>Отзыв пользователя: {{ $review->user->name }}</p>
                                            <p>На место: {{ $review->coordinate->title }}</p>
                                        </div>
                                        <div class="justify-content-end col-md-6">
                                            <div class="rating-area">
                                                @for ($n = 5; $n > 0; $n--)
                                                    <input type="radio" id="star-{{ $n }}" name="rating" value="{{ $n }}"
                                                           @if ($n == $review->rating) checked @endif>
                                                    <label for="star-{{ $n }}" title="Оценка «{{ $n }}»"></label>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="is_publish">Опубликовать</label>
                                        <div>
                                            <input type="checkbox" id="is_publish" name="is_publish" value="1"
                                                {{ $review->is_publish ? 'checked' : '' }}>
                                            <label for="is_publish">Да</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="text">Отзыв</label>
                                        <textarea id="text" name="comment" rows="6" class="form-control">{{ $review->comment }}</textarea>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Изменить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @push('css')
        <style>
            .rating-area {
                overflow: hidden;
                width: 265px;
                margin: 0 auto;
            }

            .rating-area:not(:checked) > input {
                display: none;
            }

            .rating-area:not(:checked) > label {
                float: right;
                width: 42px;
                cursor: pointer;
                font-size: 32px;
                line-height: 32px;
                color: lightgrey;
                text-shadow: 1px 1px #bbb;
            }

            .rating-area:not(:checked) > label:before {
                content: '★';
            }

            .rating-area > input:checked ~ label {
                color: gold;
                text-shadow: 1px 1px #c60;
            }

            .rating-area:not(:checked) > label:hover,
            .rating-area:not(:checked) > label:hover ~ label {
                color: gold;
            }

            .rating-area > input:checked + label:hover,
            .rating-area > input:checked + label:hover ~ label,
            .rating-area > input:checked ~ label:hover,
            .rating-area > input:checked ~ label:hover ~ label,
            .rating-area > label:hover ~ input:checked ~ label {
                color: gold;
                text-shadow: 1px 1px goldenrod;
            }
        </style>
    @endpush
@endsection
