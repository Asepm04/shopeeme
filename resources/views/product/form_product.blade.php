@extends('master')

@section('content')

<div class="col-sm-4"></div>
<div class="form-group col-sm-4" style="margin-top:20px">

  @if($errors->any())

  @foreach($errors->all() as $error)

  <div class="alert-danger">
    {{$error}}
  </div>

  @endforeach

  @endif

    <form action="{{'/proses/product'}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
          {{-- @error('id') {{$message}} @enderror --}}
            <input type="text" class="form-control" placeholder="id" name="id">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="size" name="size">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="file" class="form-control" placeholder="gambar_product" name="gambar">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Add</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
</div>


@endsection