@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><center><strong>Department</strong></center></div>

                <div class="panel-body">
               

                    Pick choices:
                    <br>
                <br>
             <div class="btn-group btn-group-justified">
  <a href="/ipcr" class="btn btn-success">College of Arts and Sciences</a>
  <a href="#" class="btn btn-warning">College of Business</a>
  <a href="#" class="btn btn-primary">College of Education</a>
  <a href="#" class="btn btn-danger">CSDT</a>
  <a href="#" class="btn btn-default">College of Nursing</a>
</div>
                <br>
                <br>
              <!--    <a class="btn btn-lg btn-primary btn-block" href="/home" role="button">
              Office Performance Commitment and Review Form (OPCR)
                              </a>
                              </div> -->
            </div>
        </div>
    </div>
</div>
@endsection