@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Student Management</h3>
        <hr>
        <p align="center">Student Name : {{ $student->stu_name }}</p>
        <hr>



        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('student.saveRecord') }}">
                    @csrf

                    <input type="hidden" name="stu_id" value="{{ $student->id }}">

                    <div class="row">
                        <div class="col-md-6">
                            <label>Record Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="col-md-6">
                            <label>Record Date</label>
                            <input type="date" class="form-control" name="date">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Add Record">
                        </div>

                    </div>
                </form>
            </div>

                <table class="table mt-5">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Record Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ( $stuRecords as $key => $stuRecord )

                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $stuRecord->title }}</td>
                            <td>{{ $stuRecord->description }}</td>
                            <td>{{ $stuRecord->date }}</td>
                            <td></td>
                        </tr>


                        @endforeach


                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection


@push('css')
    <style>

    </style>
@endpush
