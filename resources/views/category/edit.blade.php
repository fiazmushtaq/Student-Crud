@extends('layouts.frontend')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Student Data
                            <a href="{{ url('category') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('category.update', $category->id) }}" method="post">
                            @csrf
                            @method('PUT')
                        <!-- For Name -->
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $category->name }}"/>
                            @error('name') <span class="text-danger">{{ $message }} </span> @enderror
                                                           
                        </div>
                        <!-- For subject -->
                        <div class="mb-3">
                            <label>Subject</label>
                            <input type="text" name="subject" class="form-control" value="{{ $category->subject }}"/>
                            @error('subject') <span class="text-danger">{{ $message }} </span> @enderror
                        </div>

                        <!-- For Status -->
                        <div class="mb-3">
                            <label>Status</label>
                            <br/>
                            <input type="checkbox" name="status" {{ $category->status == 1 ? 'checked':'' }} style="width:20px;height:20px;" /> Checked=visible, unchecked=hodden
                            @error('status') <span class="text-danger">{{ $message }} </span> @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection