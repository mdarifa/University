@extends('layouts.master')

@section('header')
    @include('back.student.inc.header')
@endsection

@section('sidebar')
    @include('back.student.inc.sidebar')
@endsection

@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">List of all Units where you can apply</h4>
            </div>
        </div>
        <div class="row">
            <div class="offset-sm-1 col-sm-10">
                <div class="card-box">
                    <div class="card-block">
                        <h6 class="card-title text-bold">Units List</h6>
                        <table class="datatable table table-stripped table-responsive text-center">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Unit Name</th>
                                    <th>University Name</th>
                                    <th>Exam Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($units as $key => $unit)
                                  <tr>
                                      <td>{{ ++$key }}</td>
                                      <td>{{ $unit->unit_name }}</td>
                                      <td>{{ App\University::find($unit->university_id)->university_name }}</td>
                                      <td>{{ $unit->exam_date }}</td>
                                      <td>
                                        <a href="#exampleModalCenter{{ $key }}" data-toggle="modal" class="btn btn-info"> View Details</a>
                                        <a href="{{ url('/student/unit/subjects')}}/{{ $unit->id }}"  class="btn btn-primary"> View Subjects</a>
                                      </td>
                                  </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @foreach ($units as $key => $unit)
                        <div class="modal fade" id="exampleModalCenter{{ ++$key }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Details About {{ $unit->unit_name }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                          <div class="">
                                              <h4>University Name</h4>
                                                <p>{{ App\University::find($unit->university_id)->university_name }}</p>
                                          </div>
                                          <div class="">
                                              <h4>Required SSC GPA</h4>
                                              <p>{{ $unit->required_ssc_gpa }}</p>
                                          </div>
                                          <div class="">
                                              <h4>Required HSC GPA</h4>
                                              <p>{{ $unit->required_hsc_gpa }}</p>
                                          </div>
                                          <div class="">
                                              <h4>Required GPA</h4>
                                              <p>{{ $unit->required_total_gpa }}</p>
                                          </div>
                                          <div class="">
                                              <h4>Application Deadline</h4>
                                              <p>{{ $unit->application_deadline }}</p>
                                          </div>
                                          <div class="">
                                              <h4>Exam Date</h4>
                                              <p>{{ $unit->exam_date }}</p>
                                          </div>
                                          <div class="">
                                              <h4>Exam Fee</h4>
                                              <p>{{ $unit->apply_fee }}/- tk.</p>
                                          </div>
                                          <div class="">
                                              <h4>Apply Process</h4>
                                              <p>{{ $unit->apply_process }}</p>
                                          </div>
                                      </div>
                                      <div class="modal-footer m-auto">
                                          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @endforeach
                      </div>
                  </div>
              </div>
          </div>
      @endsection
