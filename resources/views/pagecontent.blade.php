@extends('layouts.default')

@section('content')
<div class="mt-3">
    <form action="{{ route('pagecontent.store') }}" method="POST" class="row g-3 justify-content-center">
        @csrf
        <div class="div-col-lg-4">
            <input type="text" class="form-control" name="title" id="title" placeholder="input here">
            <input type="text" class="form-control" name="body" id="" placeholder="input here">
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
</div>
@endsection