 @extends('Layouts.default')

@section('content')
<div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
      <div class="col-sm-6">
         <h1 class="m-0"><img src="{{ asset('/asset/img/form-icon.jpg') }}" width="40" style="border-radius: 100px;">Update Employee</h1>
         </div>
            <div class="col-sm-6">
               <!-- <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#" style="color: white;">Home</a></li>
                  <li class="breadcrumb-item active" style="color: white;">Dashboard</li>
               </ol> -->
            </div>
         </div>
      </div>
         @include('Layouts.partials.messages')
      <div class="row card p-5" style="background-color: white;">
         <form action="{{ route('list.edit.update') }}"  method="post">
            @csrf
            <div class="col-md-12">
               <div class="card-header"></div>
                        <div class="row">
                           <div class="col-md-5">
                              <div class="form-group">
                                 <label>Full Name </label>
                                 <input type="hidden" name="id" value="{{$employee->id}}">
                                 <input type="text" name="fullname" value="{{$employee->name}}" class="form-control" placeholder="Enter Full Name">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label>Password</label>
                                 <input type="text" name="password"  class="form-control" placeholder="Enter Password">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label>Email</label>
                                 <input type="text" name="email" value="{{ $employee->email }}" class="form-control" placeholder="Enter Password">
                              </div>
                           </div>

                           <div class="col-md-12">
                              <div class="form-group">
                                <label> Position </label>
                                 <input type="text" name="position" value="{{$employee->position}}" class="form-control" placeholder="Enter Position">
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                <label> Department </label>
                                <select class="form-control" name="department" id="department">
                                 <option value="{{ $employee->position }}">{{ $employee->department }}</option>
                                 <option value="OFFICE OF THE MUNICIPAL MAYOR">OFFICE OF THE MUNICIPAL MAYOR</option>
                                  <option value="OFFICE OF THE SANGGUNIANG BAYAN">OFFICE OF THE SANGGUNIANG BAYAN</option>
                                  <option value="MUNICIPAL PLANNING AND DEVELOPMENT OFFICE">MUNICIPAL PLANNING AND DEVELOPMENT OFFICE</option>
                                  <option value="MUNICIPAL ENGINEERING OFFICE">MUNICIPAL ENGINEERING OFFICE</option>
                                  <option value="BIDS AWARDS COMMITTE">BIDS AWARDS COMMITTE</option>
                                  <option value="MMUNICIPAL ACCOUNTING OFFICE">MUNICIPAL ACCOUNTING OFFICE</option>
                                  <option value="HUMAN RESOURCE MANAGEMENT OFFICE">HUMAN RESOURCE MANAGEMENT OFFICE</option>
                                  <option value="MMUNICIPAL BUDGET OFFICE">MUNICIPAL BUDGET OFFICE</option>
                                  <option value="MUNICIPAL AGRICULTURE & SERVICES OFFICE">MUNICIPAL AGRICULTURE & SERVICES OFFICE</option>
                                  <option value="MUNICIPAL SOCIAL WELFARE OFFICE">MUNICIPAL SOCIAL WELFARE OFFICE</option>
                                  <option value="MUNICIPAL TREASURER'S OFFICE">MUNICIPAL TREASURER'S OFFICE</option>
                                  <option value="MUNICIPAL ASSESSOR'S OFFICE">MUNICIPAL ASSESSOR'S OFFICE</option>
                                  <option value="MUNICIPAL CIVIL REGISTRAR'S OFFICE">MUNICIPAL CIVIL REGISTRAR'S OFFICE</option>
                                  <option value="MMUNICIPAL HEALTH OFFICE">MUNICIPAL HEALTH OFFICE</option>
                                  <option value="GENERAL SERVICES OFFICE">GENERAL SERVICES OFFICE</option>
                                  <option value="MUNICIPAL TOURISM OFFICE">MUNICIPAL TOURISM OFFICE</option>
                                  <option value="MUNICIPAL DISASTER RISK REDUCTION MANAGEMENT OFFICE">MUNICIPAL DISASTER RISK REDUCTION MANAGEMENT OFFICE</option>
                                  <option value="SENIOR CITIZEN OFFICE">SENIOR CITIZEN OFFICE</option>
                                </select>
                             
                              </div>
                           </div>             
                         </div>
                         <center>
                          <div class="col-md-0">
                            <button type="submit" class="btn btn-primary" style="background-color: black;">Save</button>
                          </div>
                        </center>
                      </form>
                    </div>  
                  </div>
      
@endsection

            