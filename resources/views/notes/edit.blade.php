@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
					<h1>
					Edit Note
					</h1> 


					<form action="{{route('notes.update',$note->id)}}" method="POST">
						{{csrf_field()}}
						{{method_field('PUT')}}
						<div class="form-group">
							<label for="title"> 
								MFI
							</label>
							<input class="form-control" type="text" name="MFI" value="{{$note->MFI}}" onClick="this.select();">
						</div>

						<div class="form-group">
							<label for="body">
								Success Indicator
							</label>
							<input class="form-control" type="text" name="successIndicator" value="{{$note->successIndicator}}" onClick="this.select();">
						</div>

						<div class="form-group">
							<label for="body">
								Actual Accomplishment
							</label>
							<input class="form-control" type="text" name="actualaccomplishments" value="{{$note->actualaccomplishments}}" onClick="this.select();">
						</div>

						<div class="form-group">
							<label for="body">
								Distribution
							</label>
							<input class="form-control" type="number" name="distribution" value="{{$note->distribution}}" onClick="this.select();">
						</div>

						<div class="form-group">
							<label for="body">
								Q1
							</label>
							<select style="width:43px; height: 36px; border-radius: 4px;" name="T3" id="T3" onchange="calc('Q1','E2','T3','distro','A4','Ave')" value="{{$note->Q1}}">
              			<option value="0">0</option>
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
						</div>							
						
						<div class="form-group">
							<label for="body">
								E2
							</label>
							<input class="form-control" type="number" name="E2" value="{{$note->E2}}" onClick="this.select();">
						</div>

						<div class="form-group">
							<label for="body">
								T3
							</label>
							<input class="form-control" type="number" name="T3" value="{{$note->T3}}" onClick="this.select();">
						</div>

						<input class="btn btn-primary" type="submit" value="Done"></input>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection