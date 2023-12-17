@extends('layouts.master')
@section('title', 'Employees')

@section('content')
    <div class="">
        <x-app-tool-bar current="Employees" title="Manage Employees">
            <x-slot name="actions">
                <x-primary-button size="sm" id="addNewBtn">
                    <i class="bi bi-plus"></i>
                    New Employee
                </x-primary-button>
            </x-slot>
        </x-app-tool-bar>
        <div class=" card-flush">

            <div class="card-body">
                <div class="table-responsive">


                    <table class="table ps-2 align-middle border rounded table-row-dashed fs-6 g-5" id="employeesTable">
                        <thead>
                        <tr class="text-start text-gray-800 fw-bold fs-7 text-uppercase">
                            <th class="min-w-150px">Name</th>
                            <th class="min-w-150px">Email</th>
                            <th>Phone</th>
                            <th>Position</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" tabindex="-1" id="employeeModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">
                        Employee
                    </h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <i class="bi bi-x"></i>
                    </div>
                    <!--end::Close-->
                </div>

                <form action="{{ route('employees.store') }}" id="employeeForm" method="post">
                    @csrf
                    <input type="hidden" id="id" name="id" value="0"/>


                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"/>
                            <span class="mt-1 text-danger d-block" id="name_error"></span>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="Enter email"/>
                            <span class="mt-1 text-danger d-block" id="email_error"></span>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                   placeholder="Enter phone"/>
                            <span class="mt-1 text-danger d-block" id="phone_error"></span>
                        </div>

                        <div class="mb-3">
                            <label for="position" class="form-label">Position</label>
                            <input type="text" class="form-control" id="position" name="position"
                                   placeholder="Enter position"/>
                            <span class="mt-1 text-danger d-block" id="position_error"></span>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input class="form-control" id="address" name="address" placeholder="Enter address"/>
                            <span class="mt-1 text-danger d-block" id="address_error"></span>
                        </div>
                    </div>

                    <div class="modal-footer bg-light">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn bg-secondary text-light-emphasis" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>

        $(document).ready(function () {

            let $employeesTable = $('#employeesTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('employees.index') }}",
                columns: [
                    {data: 'user.name', name: 'user.name'},
                    {data: 'user.email', name: 'user.email'},
                    {data: 'phone', name: 'phone'},
                    {data: 'position', name: 'position'},
                    {data: 'status', name: 'status'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });


            let $employeeModal = $('#employeeModal');
            $('#addNewBtn').click(function () {
                $employeeModal.modal('show');
            });

            let $employeeForm = $('#employeeForm');
            $employeeForm.submit(function (e) {
                e.preventDefault();
                let id = Number($('#id').val());
                let url = id === 0 ? "{{ route('employees.store') }}" : "{{ route('employees.update', ':id') }}";
                url = url.replace(':id', id);
                let method = id === 0 ? 'POST' : 'PUT';
                let data = $(this).serialize();
                let btn = $(this).find('[type="submit"]');
                btn.prop('disabled', true);
                btn.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Saving...');
                $.ajax({
                    url: url,
                    method: method,
                    data: data,
                    success: function (response) {
                        $employeeModal.modal('hide');
                        $employeesTable.ajax.reload();
                        $employeeForm[0].reset();
                    },
                    error: function (xhr) {
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function (key, value) {
                            $('#' + key).addClass('is-invalid');
                            $('#' + key + '_error').html(value);
                        });
                    },
                    complete: function () {
                        btn.prop('disabled', false);
                        btn.html('Save changes');
                    }
                });
            });

            $('.js-edit').on('click', function (e) {
                e.preventDefault();
                let href = $(this).attr('href');
                $.ajax({
                    url: href,
                    method: 'GET',
                    success: function (response) {
                        let employee = response.employee;
                        $('#id').val(employee.id);
                        $('#name').val(employee.user.name);
                        $('#email').val(employee.user.email);
                        $('#phone').val(employee.phone);
                        $('#position').val(employee.position);
                        $('#address').val(employee.address);
                        $employeeModal.modal('show');
                    }
                });

            });

        });
    </script>
@endpush
