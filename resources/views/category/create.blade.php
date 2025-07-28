@extends('layouts.frontend')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Student Data
                            <a href="{{ url('category') }}" class="btn btn-danger float-end">Back</a>
                            <a style="background-color: rgb(250, 121, 0); margin-right: 10px" href="{{ url('category') }}" class="btn btn-danger float-end">Show List</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <!-- Creating Forms -->
                        <form action="{{ route('category.store') }}" method="post">
                            @csrf
                        <!-- For Name -->
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control"/>
                            @error('name') <span class="text-danger">{{ $message }} </span> @enderror
                                                           
                        </div>
                        <!-- For subject -->
                        <div class="mb-3">
                            <label>Subject</label>
                            <input type="text" name="subject" class="form-control"/>
                            @error('subject') <span class="text-danger">{{ $message }} </span> @enderror
                        </div>

                        <!-- For Status -->
                        <div class="mb-3">
                            <label>Status</label>
                            <br/>
                            <input type="checkbox" name="status" checked style="width:20px;height:20px;" /> Checked=visible, unchecked=hidden
                            @error('status') <span class="text-danger">{{ $message }} </span> @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection