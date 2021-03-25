@extends('layouts.master')
@section('content')
    <br><br>
    <h1>Enter student info</h1>
    <br>
    <form method="post" action="{{route('student.store')}}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name"/>
        </div>
        <div>{{$errors-> first('name')}}</div>
        <div class="mb-3">
            <label for="roll" class="form-label">Roll</label>
            <input type="number" name="roll" class="form-control" id="roll"/>
        </div>
        <div class="mb-3">
            <label for="reg" class="form-label">Reg</label>
            <input type="number" name="reg" class="form-control" id="reg"/>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email"/>
        </div>
        <div class="mb-3">
            <label for="department" class="form-label">Department</label>
            <input type="text" name="department" class="form-control" id="department"/>
        </div>
        <div class="mb-3">
            <label for="semester" class="form-label">Semester</label>
            <input type="text" name="semester" class="form-control" id="semester"/>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
    <br><br><br>
    <h1>All Students</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Roll</th>
                <th scope="col">Reg</th>
                <th scope="col">Email</th>
                <th scope="col">Department</th>
                <th scope="col">Semester</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <th scope="row">{{$student-> id}}</th>
                    <td>{{$student-> name}}</td>
                    <td>{{$student-> roll}}</td>
                    <td>{{$student-> reg}}</td>
                    <td>{{$student-> email}}</td>
                    <td>{{$student-> department}}</td>
                    <td>{{$student-> semester}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
