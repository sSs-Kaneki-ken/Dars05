@extends('layouts.main')

@section('title', 'Kategoriya qoshing!')

@section('content')

<section class="app-content">
      <div class="container">
        <div class="row g-4 ml-5">
          <!-- left column -->
          <div class="col-md-12 ">
            <!-- general form elements -->
            <div class="card card-primary card-outline mb-4 ">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              @csrf 
              <form action="/category" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter email">
                  </div>

                <div class="card-footer">
                  <button type="submit" name="ok" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

@endsection