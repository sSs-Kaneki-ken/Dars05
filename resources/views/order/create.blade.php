@extends('layouts.main')

@section('title', 'Buyurtmani qo'shing!')

@section('content')
<!-- Часть Контента -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            
            <div class="row mt-4">
                <!-- left column -->
                <div class="col-md-12">
                    <a href="/orders" class="btn btn-primary">back</a>
                    <!-- general form elements -->
                    <div class="card card-success mt-2">

                        <div class="card-header">
                            <h3 class="card-title">Buyurtma qo'shing</h3>
                        </div>

                        @error('count')
                            <style>
                                .custom-placeholder-count::placeholder {
                                    color: #C92020;
                                    opacity: 1;
                                }
                            </style>
                        @enderror

                        <form action="/orders" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="prod_id" class="text-success fs-4">Mahsulot</label>
                                    <select class="form-control border-success" id="prod_id" name="prod_id"
                                        placeholder="Продукт">
                                        @foreach ($products as $prod)
                                            <option value="{{$prod->id}}">{{$prod->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="count" class="text-success fs-4">Miqdori</label>
                                    <input type="number" name="count"
                                        class="form-control border-success custom-placeholder-count" id="count"
                                        placeholder="@error('count'){{'Ushbu maydonni toldiring!'}} @else Miqdori @enderror">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" name="ok" class="btn btn-success">Tejash</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection