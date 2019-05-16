@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                @include('common.errors')

                <!-- Форма новой задачи -->
                <form action="{{route('artickles_store')}}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <!-- Имя задачи -->
                    <div class="form-group">
                        <label for="task" class="col-sm-3 control-label">Заголовок</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" id="artickle-name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task" class="col-sm-3 control-label">Текст</label>
                        <div class="col-sm-6">
                            <textarea name="text" id="artickle-text" class="form-control"></textarea>
                        </div>
                    </div>
                    <!-- Кнопка добавления задачи -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-plus"></i> Добавить статью
                            </button>
                        </div>
                    </div>
                </form>
                @if (count($artickles) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Текущие статьи
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">

                            <!-- Заголовок таблицы -->
                            <thead>
                                <tr>
                            <th>Статья</th>
                            <th>Дейтсиве</th>
                                </tr>
                            </thead>

                            <!-- Тело таблицы -->
                            <tbody>
                                @foreach ($artickles as $artickle)
                                <tr>
                                    <!-- Имя задачи -->
                                    <td class="table-text">
                                        <a href=""> <div>{{ $artickle->name }}</div></a>
                                    </td>

                                    <td>
                                        <!-- TODO: Кнопка Удалить -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection