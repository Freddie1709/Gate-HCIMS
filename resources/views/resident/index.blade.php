@extends('layouts.main')

@section('title', 'Residents')

@section('content')

    <div class="index-contents d-flex align-items-center justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="d-flex align-items-center auth-card-header">
                        <i class='bx bx-group'></i>
                        <h6 style="margin-top: 5px;"><strong>Residents</strong></h6>
                    </span>
                    <a href="{{ route('residents.add') }}" class="btn-add d-flex align-items-center">
                        <i class='bx bx-user-plus'></i>
                        Add New Resident
                    </a>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="tab active d-flex align-items-center" id="pregnant-tab" data-bs-toggle="tab" href="#pregnant"
                                role="tab" aria-controls="other" aria-selected="false">
                                <i class='bx bxs-user-detail'></i>
                                Pregnant
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="tab d-flex align-items-center ms-2" id="senior-tab" data-bs-toggle="tab" href="#senior"
                                role="tab" aria-controls="location" aria-selected="false">
                                <i class='bx bxs-user-detail'></i>
                                Senior Citizen
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="tab d-flex align-items-center ms-2" id="baby-tab" data-bs-toggle="tab" href="#baby"
                                role="tab" aria-controls="hospital" aria-selected="false">
                                <i class='bx bxs-user-detail'></i>
                                Baby
                            </a>
                        </li>
                    </ul>
                    <div class="resident-form">
                        <div class="col-left">
                            <div class="tab-content" id="myTabContent" style="margin-top: 30px;">
        
                                {{-- Pregnant Tab --}}
        
                                <div class="tab-pane fade show active" id="pregnant" role="tabpanel" aria-labelledby="pregnant-tab">
                                    <table id="pregnant-tbl" class="table" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th>Last Menstruation</th>
                                                <th>Probable Birth Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="td-content">
                                                    Juana Dela Cruz
                                                </td>
                                                <td class="td-content">28</td>
                                                <td class="td-content">Feb. 14, 2022</td>
                                                <td class="td-content">Dec. 14, 2022</td>
                                                <td>

                                                    <a href="{{ route('resident.pregnant.show') }}">
                                                        <i class='bx bx-show btn-table btn-edit' data-tippy-content="View" data-tippy-arrow="false"></i>
                                                    </a>

                                                    <a href="{{ route('resident.pregnant.edit') }}">
                                                        <i class='bx bx-edit btn-table btn-edit' data-tippy-content="Edit User" data-tippy-arrow="false"></i>
                                                    </a>
                
                                                    <a href="#" onclick="return confirm('Are you sure you want to delete this user?')">
                                                        <i class='bx bx-trash btn-table btn-delete' data-tippy-content="Delete User" data-tippy-arrow="false"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
        
                                {{-- Senior Tab --}}
        
                                <div class="tab-pane fade show" id="senior" role="tabpanel" aria-labelledby="senior-tab">
                                    <table id="senior-tbl" class="table" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th>Birthday</th>
                                                <th>Guardian</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="td-content">
                                                    Melchora Aquino
                                                </td>
                                                <td class="td-content">72</td>
                                                <td class="td-content">Aug. 27, 1950</td>
                                                <td class="td-content">Juan Dela Cruz</td>
                                                <td>
                                                    <a href="{{ route('resident.senior.show') }}">
                                                        <i class='bx bx-show btn-table btn-edit' data-tippy-content="View" data-tippy-arrow="false"></i>
                                                    </a>

                                                    <a href="{{ route('resident.senior.edit') }}">
                                                        <i class='bx bx-edit btn-table btn-edit' data-tippy-content="Edit User" data-tippy-arrow="false" ></i>
                                                    </a>
                
                                                    <a href="#" onclick="return confirm('Are you sure you want to delete this user?')">
                                                        <i class='bx bx-trash btn-table btn-delete' data-tippy-content="Delete User" data-tippy-arrow="false"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
        
                                {{-- Baby Tab --}}
        
                                <div class="tab-pane fade show" id="baby" role="tabpanel" aria-labelledby="baby-tab">
                                    <table id="baby-tbl" class="table" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th>Birthday</th>
                                                <th>Mother's Name</th>
                                                <th>Father's Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="td-content">
                                                    Maria Dela Cruz
                                                </td>
                                                <td class="td-content">5</td>
                                                <td class="td-content">Jan. 1, 2017</td>
                                                <td class="td-content">Juana Dela Cruz</td>
                                                <td class="td-content">Juan Dela Cruz</td>
                                                <td>
                                                    <a href="{{ route('resident.baby.show') }}">
                                                        <i class='bx bx-show btn-table btn-edit' data-tippy-content="View" data-tippy-arrow="false"></i>
                                                    </a>

                                                    <a href="{{ route('resident.baby.edit') }}">
                                                        <i class='bx bx-edit btn-table btn-edit' data-tippy-content="Edit User" data-tippy-arrow="false"></i>
                                                    </a>
                
                                                    <a href="#" onclick="return confirm('Are you sure you want to delete this user?')">
                                                        <i class='bx bx-trash btn-table btn-delete' data-tippy-content="Delete User" data-tippy-arrow="false"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
