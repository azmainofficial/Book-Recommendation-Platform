@extends('layouts.admin')

@section('title', 'Manage Users')

@section('content')
<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="card-title fw-semibold">User Management</h5>
                    <a href="#" class="btn btn-primary disabled">Add New User</a>
                </div>
                <div class="table-responsive">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0"><h6 class="fw-semibold mb-0">Id</h6></th>
                                <th class="border-bottom-0"><h6 class="fw-semibold mb-0">Image</h6></th>
                                <th class="border-bottom-0"><h6 class="fw-semibold mb-0">Name</h6></th>
                                <th class="border-bottom-0"><h6 class="fw-semibold mb-0">Email</h6></th>
                                <th class="border-bottom-0"><h6 class="fw-semibold mb-0">Status</h6></th>
                                <th class="border-bottom-0"><h6 class="fw-semibold mb-0">Action</h6></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $user->id }}</h6></td>
                                <td class="border-bottom-0">
                                    <img src="{{ $user->image ?? 'https://img.freepik.com/premium-photo/naruto-illustration-icon-cartoon-graphic_1070876-7005.jpg' }}" alt="User Image" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">{{ $user->name }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">{{ $user->email }}</p>
                                </td>
                                <td class="border-bottom-0">
                                    <span class="badge bg-success rounded-3 fw-semibold">Active</span>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex gap-2">
                                        <a href="#" class="btn btn-sm btn-info">Edit</a>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
