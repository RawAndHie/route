@extends('layout.master')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Student Manager</h2>
            <div class="right-wrapper pull-right">
            </div>
        </header>

        <!-- start: page -->
        <div class="row">
            <div class="col-xs-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Student manager</h2>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal form-bordered" method="post" action="/student">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Rollnumber</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="rollNumber">
                                </div>
                                @error('rollNumber')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">First Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="firstName">
                                </div>
                                @error('firstName')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Last Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="lastName">
                                </div>
                                @error('lastName')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Phone</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="phone">
                                </div>
                                @error('phone')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Gender</label>
                                <div class="col-sm-9">
                                    <div class="radio-custom radio-primary col-sm-3">
                                        <input name="gender" type="radio" value="0" checked>
                                        <label for="male">Male</label>
                                    </div>
                                    <div class="radio-custom radio-primary col-sm-3">
                                        <input name="gender" type="radio" value="1">
                                        <label for="female">Female</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-6 col-xs-11">
                                    <button type="submit" class="btn btn-sm btn-primary colorpicker-element">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-sm btn-default colorpicker-element">
                                        Reset
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>

        <!-- end: page -->
    </section>
@endsection
