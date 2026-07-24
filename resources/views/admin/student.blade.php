@extends('template.admin_template')

@section('title', $title)

@section('content')
    <div class="col-12">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Student Management</h1>
                </div>
                <div class="col-12">
                    <table id="student" class="table" style="color: #000 !important;">
                        <thead class="bg-white">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th class="text-center">
                                    <a href="#AddPart" class="btn btn-mini btn-blok btn-inverse" data-toggle="modal">Tambah
                                        Data</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->address}}</td>
                                    <td align="center">
                                        <a class="me-2" href="#EditPart {{$item->id}}" data-bs-toggle="modal"
                                            data-bs-target="#EditPart{{ $item->id }}"><i
                                                class="fa-solidfa-solid
                                                                                                                        fa-pen-to-square"></i></a>
                                        <a href="{{ url('student/hapus/' . $item->id) }}"
                                            onclick="return confirm('data akan dihapus')"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Modal -->
                    <div class="modal fade" id="AddPart" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url('student/tambah') }}" method="POST">
                                        @csrf
                                        <fieldset class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="masukan nama" required>
                                        </fieldset>

                                        <fieldset class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="masukan email" required>
                                        </fieldset>

                                        <fieldset class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="masukan nomor telpon" required>
                                        </fieldset>

                                        <fieldset class="form-group">
                                            <label for="address">Address</label>
                                            <textarea class="form-control" id="address" name="address" rows="3"
                                                required></textarea>
                                        </fieldset>
                                        <button type="submit" class="btn btn-primary" id="" >Submit</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
