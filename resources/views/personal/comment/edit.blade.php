@extends('personal.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-6">
                        <form action="{{route('personal.comment.update', $comment->id)}}" class="W-50" method="post">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <textarea class="form-control" name="message" cols="30" rows="10">{{ $comment->message }}</textarea>
                            </div>
                            @error('message')
                            <div class="text-danger">Это поле необходимо заполнить</div>
                            @enderror
                            <input type="submit" class="btn btn-primary" value="Обновить">
                        </form>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
