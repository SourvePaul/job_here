@extends('admin.master')
@section('title')
    Slider
@endsection
@section('content')

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-hover table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr class="text-center">
                        <th>Sl No</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i=1
                    @endphp
                    @foreach($sliders as $slider)

                        <tr class="text-center">
                            <td> {{ $i++ }} </td>
                            <td> {{ $slider->title}} </td>
                            <td> {{ $slider->contenti }} </td>
                            <td> <img src="{{asset($slider->sImage)}}" alt="slider-image" style="width: 100px;height: 100px;"></td>
                            <td>
                                <a href="{{ route('edit-slider',['id'=>$slider->id]) }}" class="btn btn-outline-primary">Edit</a>
                                <br>
                                <br>
                                <a>
                                    <form action="{{ route('delete-slider') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $slider->id }}" name="slider_id">
                                        <input type="submit" value="Delete" class="btn btn-outline-danger" onclick="return confirm('are you confirm delete this !!')">
                                    </form>
                                </a>

                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
