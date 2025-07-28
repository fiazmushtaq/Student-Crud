
@extends('layouts.frontend')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Show Student Details
                            <a href="{{ url('category') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
 
                        <!-- For Name -->
                        <div class="mb-3">
                            <label>Name</label>
                            <p>
                                {{ $category->name }}
                            </p>
                                                           
                        </div>
                        <!-- For subject -->
                        <div class="mb-3">
                            <label>Subject</label>
                            <p>
                                {{ $category->subject }}
                            </p>
                        </div>

                        <!-- For Status -->
                        <div class="mb-3">
                            <label>Status</label>
                            <br/>
                            <p>
                                {{ $category->status == 1 ? 'checked':'' }}
                            </p>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection