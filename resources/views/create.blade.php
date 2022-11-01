@extends('layouts.application')
@section('head')

@endsection

@section('content')
<div>


 <!-- Page Header Start -->
 <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">The post page</h1>
        <div class="d-inline-flex mb-lg-5">
            <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Post page</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

    <form method="POST" action ="{{route('store')}}" enctype="multipart/form-data">
        @csrf
        {{-- @method('PUT ') --}}

@if (session('status'))
<p style="color: #fff; width:100%;font-size:18px;font-weight:500;text-align:center;background:#86DA3A;padding:10px 0;margin-bottom:6px;">
    {{ session('status') }}</p>
@endif
        <div class="form-group">
          <label for="exampleInputEmail1">Whats your name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
          @error('name')
          <div class="alert-danger">{{($message)}}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleControlFile1">Dont be shy</label>
          <input type="file" class="form-control-file" name="imagepath" id="imagepath">
          @error('imagepath')
          <div class="alert-danger">{{($message)}}</div>
          @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Tell us about you</label>
            <textarea class="form-control" name='body'  rows="3"></textarea>
            @error('body')
          <div class="alert-danger">{{($message)}}</div>
          @enderror

            {{-- <textarea name="editor1"></textarea>
            <script>
                    CKEDITOR.replace( 'editor1' );
            </script> --}}
        <button type="submit" class="btn btn-primary">Submit</button>

          </div>


      </form>{{-- Hello:<textarea name="body" id="body" cols="30" rows="10"></textarea> --}}

</div>
<script>
    CKEDITOR.replace( 'body' );
</script>
@endsection
