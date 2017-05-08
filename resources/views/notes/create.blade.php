@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 col-md-offset-0">
     <div class="panel panel-default">
        <div class="panel-heading"><center>INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW (IPCR)</center></div>

          <div class="panel-body">

            <table style="width: 100%;border-collapse: separate;border-spacing: 8px;">

              <form action="{{route('notes.store')}}" method="POST">
              {{csrf_field()}}
                <tr>
                  <th style="width: 150px;">Major Final Output</th>
                  <th>Success Indicator</th>
                  <th>Actual Accomplishments</th>
                  <th style="width: 50px;">Distribution (%)</th>
                  <th>Rating (Q1)</th>
                  <th>Rating (E2)</th>
                  <th>Rating (T3)</th>
                  <th style="width: 60px;">Rating (A4)</th>
                  <th>Average Score</th>
                  <th>Remarks</th>
                </tr>
                <tr>
                  <th>Core Functions: 70 %</th>
                </tr>
                <tr>
               		<td><div class="form-group">
              	   	<label for="MFI">
                    </label>
                    <input class="form-control" type="text" name="MFI" placeholder="Major Final Output" id="MFI" value="No. of course syllabus revised">
              		</div></td>

                  <td><div class="form-group">
                    <label for="successIndicator">
                    </label>
                    <input class="form-control" type="text" name="successIndicator" placeholder="Success Indicator" id="successIndicator" value="Revised at least one course syllabus taught within the semester">
                  </div></td>

              		<td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="actualaccomplishments" placeholder="Actual Accomplishments" id="actualaccomplishments">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Distribution"></label>
                    <input class="form-control" type="text" name="distribution" id="distro" value="8%"></input>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
              			</label>
              			<select style="width:43px; height: 36px; border-radius: 4px;" name="Q1" id="Q1" onclick="calc();">
              			<option value="0">0</option>
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
              		</div></td>

              		<td><div class="form-group">
              			<label for="E2">
              			</label>
              			<select style="width:43px; height: 36px; border-radius: 4px;" name="E2" id="E2" onclick="calc();">
              			<option value="0">0</option>
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
              		</div></td>

              		<td><div class="form-group">
              			<label for="T3">
              			</label>
              			<select style="width:43px; height: 36px; border-radius: 4px;" name="T3" id="T3" onclick="calc();">
              			<option value="0">0</option>
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
              		</div></td>

                  <td><div class="form-group">
                    <label for="A4">
                    </label>
                    <input class="form-control" type="text" name="A4" placeholder="A4" id="A4" disabled>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average" id="Ave" disabled>
                  </div></td>
                
                  <td><div class="form-group">
                    <label for="Remarks">
                    </label>
                    <input class="form-control" type="text" name="Remarks" id="Remarks" placeholder="Remarks">
                  </div></td>

                  <div class="form-group"><td>
                    <input type="hidden" name="ipcr_id" value="{{$id}}">
                    <input class="btn btn-primary" type="submit" value="Save">
                  </input>
                  </div></td>
                </tr>
                <tr>
               		<td><div class="form-group">
              	   	<label for="MFI">
                    </label>
                    <input class="form-control" type="text" name="MFI" placeholder="Major Final Output" id="MFI" value="No. of course syllabus revised">
              		</div></td>

                  <td><div class="form-group">
                    <label for="successIndicator">
                    </label>
                    <input class="form-control" type="text" name="successIndicator" placeholder="Success Indicator" id="successIndicator" value="Revised at least one course syllabus taught within the semester">
                  </div></td>

              		<td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="actualaccomplishments" placeholder="Actual Accomplishments" id="actualaccomplishments">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Distribution"></label>
                    <input class="form-control" type="text" name="distribution" id="distro" value="8%"></input>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
              			</label>
              			<select style="width:43px; height: 36px; border-radius: 4px;" name="Q1" id="Q1" onclick="calc();">
              			<option value="0">0</option>
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
              		</div></td>

              		<td><div class="form-group">
              			<label for="E2">
              			</label>
              			<select style="width:43px; height: 36px; border-radius: 4px;" name="E2" id="E2" onclick="calc();">
              			<option value="0">0</option>
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
              		</div></td>

              		<td><div class="form-group">
              			<label for="T3">
              			</label>
              			<select style="width:43px; height: 36px; border-radius: 4px;" name="T3" id="T3" onclick="calc();">
              			<option value="0">0</option>
                      <option value="1">1</option> 
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option>   
                    </select>
              		</div></td>

                  <td><div class="form-group">
                    <label for="A4">
                    </label>
                    <input class="form-control" type="text" name="A4" placeholder="A4" id="A4" disabled>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average" id="Ave" disabled>
                  </div></td>
                
                  <td><div class="form-group">
                    <label for="Remarks">
                    </label>
                    <input class="form-control" type="text" name="Remarks" id="Remarks" placeholder="Remarks">
                  </div></td>

                  <div class="form-group"><td>
                    <input type="hidden" name="ipcr_id" value="{{$id}}">
                    <input class="btn btn-primary" type="submit" value="Save">
                  </input>
                  </div></td>
                </tr>

              </form>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>           
                


@endsection