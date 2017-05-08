@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 col-md-offset-0">
     <div class="panel panel-default">
        <div class="panel-heading"><center>INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW (IPCR)</center></div>

          <div class="panel-body">
          	<a href="/getPDF" class="btn btn-danger">Export in PDF</a>
            <a href="/preview" class="btn btn-success">Print Preview</a>

            <table style="width: 100%;border-collapse: separate;border-spacing: 8px;">

              <form action="{{route('notes.store')}}" method="POST">
              {{csrf_field()}}
                <tr>
                  <th style="width: 150px;">Major Final Output</th>
                  <th style="width: 200px;">Success Indicator</th>
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
                    <input class="form-control" type="text" name="MFI" placeholder="Major Final Output" id="MFI" value="No. of course syllabus revised" onClick="this.select();">
              		</div></td>

                  <td><div class="form-group">
                    <label for="successIndicator">
                    </label>
                    <input class="form-control" type="text" name="successIndicator" placeholder="Success Indicator" id="successIndicator" value="Revised at least one course syllabus taught within the semester" onClick="this.select();">
                  </div></td>

              		<td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="actualaccomplishments" placeholder="Actual Accomplishments" id="actualaccomplishments" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Distribution"></label>
                    <input class="form-control" type="text" name="distribution" id="distro" value="8%" onClick="this.select();" onchange="calc('Q1','E2','T3','distro','A4','Ave')"></input>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
              			</label>
              			<select style="width:43px; height: 36px; border-radius: 4px;" name="Q1" id="Q1" onchange="calc('Q1','E2','T3','distro','A4','Ave')">
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
              			<select style="width:43px; height: 36px; border-radius: 4px;" name="E2" id="E2" onchange="calc('Q1','E2','T3','distro','A4','Ave')">
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
              			<select style="width:43px; height: 36px; border-radius: 4px;" name="T3" id="T3" onchange="calc('Q1','E2','T3','distro','A4','Ave')">
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
                    <input class="form-control" type="text" name="A4" placeholder="A4" id="A4" disabled onchange="calc('Q1','E2','T3','distro','A4','Ave')">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average" id="Ave" disabled onchange="calc('Q1','E2','T3','distro','A4','Ave')">
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
                    <input class="form-control" type="text" name="MFI" placeholder="Major Final Output" id="MFI" value="No. of IMs utilized" onClick="this.select();">
              		</div></td>

                  <td><div class="form-group">
                    <label for="successIndicator">
                    </label>
                    <input class="form-control" type="text" name="successIndicator" placeholder="Success Indicator" id="successIndicator" value="Utilized at least one IM in a year" onClick="this.select();">
                  </div></td>

              		<td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="actualaccomplishments" placeholder="Actual Accomplishments" id="actualaccomplishments" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Distribution"></label>
                    <input class="form-control" type="text" name="distribution" id="distro-2" value="8%" onClick="this.select();" onchange="calc('Q1-2','E2-2','T3-2','distro-2','A4-2','Ave-2')"></input>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
              			</label>
              			<select style="width:43px; height: 36px; border-radius: 4px;" name="Q1" id="Q1-2" onchange="calc('Q1-2','E2-2','T3-2','distro-2','A4-2','Ave-2')">
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
              			<select style="width:43px; height: 36px; border-radius: 4px;" name="E2" id="E2-2" onchange="calc('Q1-2','E2-2','T3-2','distro-2','A4-2','Ave-2')">
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
              			<select style="width:43px; height: 36px; border-radius: 4px;" name="T3" id="T3-2" onchange="calc('Q1-2','E2-2','T3-2','distro-2','A4-2','Ave-2')">
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
                    <input class="form-control" type="text" name="A4" placeholder="A4" id="A4-2" disabled onchange="calc('Q1-2','E2-2','T3-2','distro-2','A4-2','Ave-2')">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average" id="Ave-2" disabled onchange="calc('Q1-2','E2-2','T3-2','distro-2','A4-2','Ave-2')">
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
                    <input class="form-control" type="text" name="MFI" placeholder="Major Final Output" id="MFI" value="Teaching Performance" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="successIndicator">
                    </label>
                    <input class="form-control" type="text" name="successIndicator" placeholder="Success Indicator" id="successIndicator" value="Teaching performance rated as satisfactory or better" onClick="this.select();">
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="actualaccomplishments" placeholder="Actual Accomplishments" id="actualaccomplishments" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Distribution"></label>
                    <input class="form-control" type="text" name="distribution" id="distro-3" value="10%" onClick="this.select();"></input>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="Q1" id="Q1-3" onchange="calc('Q1-3','E2-3','T3-3','distro-3','A4-3','Ave-3')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="E2" id="E2-3" onchange="calc('Q1-3','E2-3','T3-3','distro-3','A4-3','Ave-3')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="T3" id="T3-3" onchange="calc('Q1-3','E2-3','T3-3','distro-3','A4-3','Ave-3')">
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
                    <input class="form-control" type="text" name="A4" placeholder="A4" id="A4-3" disabled onchange="calc('Q1-3','E2-3','T3-3','distro-3','A4-3','Ave-3')">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average" id="Ave-3" disabled onchange="calc('Q1-3','E2-3','T3-3','distro-3','A4-3','Ave-3')">
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
                    <input class="form-control" type="text" name="MFI" placeholder="Major Final Output" id="MFI" value="Attendance in class meetings" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="successIndicator">
                    </label>
                    <input class="form-control" type="text" name="successIndicator" placeholder="Success Indicator" id="successIndicator" value="Not more than 3 days absent in class meetings" onClick="this.select();">
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="actualaccomplishments" placeholder="Actual Accomplishments" id="actualaccomplishments" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Distribution"></label>
                    <input class="form-control" type="text" name="distribution" id="distro-4" value="7%" onClick="this.select();"></input>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="Q1" id="Q1-4" onchange="calc('Q1-4','E2-4','T3-4','distro-4','A4-4','Ave-4')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="E2" id="E2-4" onchange="calc('Q1-4','E2-4','T3-4','distro-4','A4-4','Ave-4')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="T3" id="T3-4" onchange="calc('Q1-4','E2-4','T3-4','distro-4','A4-4','Ave-4')">
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
                    <input class="form-control" type="text" name="A4" placeholder="A4" id="A4-4" disabled onchange="calc('Q1-4','E2-4','T3-4','distro-4','A4-4','Ave-4')">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average" id="Ave-4" disabled onchange="calc('Q1-4','E2-4','T3-4','distro-4','A4-4','Ave-4')">
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
                    <input class="form-control" type="text" name="MFI" placeholder="Major Final Output" id="MFI" value="On time administration of major exams" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="successIndicator">
                    </label>
                    <input class="form-control" type="text" name="successIndicator" placeholder="Success Indicator" id="successIndicator" value="Administer major exams within the prescribe schedule" onClick="this.select();">
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="actualaccomplishments" placeholder="Actual Accomplishments" id="actualaccomplishments" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Distribution"></label>
                    <input class="form-control" type="text" name="distribution" id="distro-5" value="7%" onClick="this.select();"></input>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="Q1" id="Q1-5" onchange="calc('Q1-5','E2-5','T3-5','distro-5','A4-5','Ave-5')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="E2" id="E2-5" onchange="calc('Q1-5','E2-5','T3-5','distro-5','A4-5','Ave-5')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="T3" id="T3-5" onchange="calc('Q1-5','E2-5','T3-5','distro-5','A4-5','Ave-5')">
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
                    <input class="form-control" type="text" name="A4" placeholder="A4" id="A4-5" disabled onchange="calc('Q1-5','E2-5','T3-5','distro-5','A4-5','Ave-5')">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average" id="Ave-5" disabled onchange="calc('Q1-5','E2-5','T3-5','distro-5','A4-5','Ave-5')">
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
                    <input class="form-control" type="text" name="MFI" placeholder="Major Final Output" id="MFI" value="Participation in CAS INSET" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="successIndicator">
                    </label>
                    <input class="form-control" type="text" name="successIndicator" placeholder="Success Indicator" id="successIndicator" value="Participate in at least two of the four INSET sessions on OBE" onClick="this.select();">
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="actualaccomplishments" placeholder="Actual Accomplishments" id="actualaccomplishments" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Distribution"></label>
                    <input class="form-control" type="text" name="distribution" id="distro-6" value="8%" onClick="this.select();"></input>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="Q1" id="Q1-6" onchange="calc('Q1-6','E2-6','T3-6','distro-6','A4-6','Ave-6')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="E2" id="E2-6" onchange="calc('Q1-6','E2-6','T3-6','distro-6','A4-6','Ave-6')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="T3" id="T3-6" onchange="calc('Q1-6','E2-6','T3-6','distro-6','A4-6','Ave-6')">
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
                    <input class="form-control" type="text" name="A4" placeholder="A4" id="A4-6" disabled onchange="calc('Q1-6','E2-6','T3-6','distro-6','A4-6','Ave-6')">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average" id="Ave-6" disabled onchange="calc('Q1-6','E2-6','T3-6','distro-6','A4-6','Ave-6')">
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
                    <input class="form-control" type="text" name="MFI" placeholder="Major Final Output" id="MFI" value="No. of Hours rendered during student consultation" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="successIndicator">
                    </label>
                    <input class="form-control" type="text" name="successIndicator" placeholder="Success Indicator" id="successIndicator" value="Render at least 8 hrs/week for student consultation/advisement" onClick="this.select();">
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="actualaccomplishments" placeholder="Actual Accomplishments" id="actualaccomplishments" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Distribution"></label>
                    <input class="form-control" type="text" name="distribution" id="distro-7" value="7%" onchange="calc('Q1-7','E2-7','T3-7','distro-7','A4-7','Ave-7')" onClick="this.select();"></input>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="Q1" id="Q1-7" onchange="calc('Q1-7','E2-7','T3-7','distro-7','A4-7','Ave-7')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="E2" id="E2-7" onchange="calc('Q1-7','E2-7','T3-7','distro-7','A4-7','Ave-7')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="T3" id="T3-7" onchange="calc('Q1-7','E2-7','T3-7','distro-7','A4-7','Ave-7')">
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
                    <input class="form-control" type="text" name="A4" placeholder="A4" id="A4-7" disabled onchange="calc('Q1-7','E2-7','T3-7','distro-7','A4-7','Ave-7')">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average" id="Ave-7" disabled onchange="calc('Q1-7','E2-7','T3-7','distro-7','A4-7','Ave-7')">
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
                    <input class="form-control" type="text" name="MFI" placeholder="Major Final Output" id="MFI" value="Prompt submission and uploading of grades" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="successIndicator">
                    </label>
                    <input class="form-control" type="text" name="successIndicator" placeholder="Success Indicator" id="successIndicator" value="Submitted and uploaded grades ten owrking days after the last day of exam" onClick="this.select();">
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="actualaccomplishments" placeholder="Actual Accomplishments" id="actualaccomplishments" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Distribution"></label>
                    <input class="form-control" type="text" name="distribution" id="distro-8" value="10%" onchange="calc('Q1-8','E2-8','T3-8','distro-8','A4-8','Ave-8')" onClick="this.select();"></input>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="Q1" id="Q1-8" onchange="calc('Q1-8','E2-8','T3-8','distro-8','A4-8','Ave-8')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="E2" id="E2-8" onchange="calc('Q1-8','E2-8','T3-8','distro-8','A4-8','Ave-8')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="T3" id="T3-8" onchange="calc('Q1-8','E2-8','T3-8','distro-8','A4-8','Ave-8')">
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
                    <input class="form-control" type="text" name="A4" placeholder="A4" id="A4-8" disabled onchange="calc('Q1-8','E2-8','T3-8','distro-8','A4-8','Ave-8')">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average" id="Ave-8" disabled onchange="calc('Q1-8','E2-8','T3-8','distro-8','A4-8','Ave-8')">
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
                    <input class="form-control" type="text" name="MFI" placeholder="Major Final Output" id="MFI" value="No of faculty meetings attended" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="successIndicator">
                    </label>
                    <input class="form-control" type="text" name="successIndicator" placeholder="Success Indicator" id="successIndicator" value="Not more than 3 days absent in absent" onClick="this.select();">
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="actualaccomplishments" placeholder="Actual Accomplishments" id="actualaccomplishments" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Distribution"></label>
                    <input class="form-control" type="text" name="distribution" id="distro-9" value="5%" onchange="calc('Q1-9','E2-9','T3-9','distro-9','A4-9','Ave-9')" onClick="this.select();"></input>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="Q1" id="Q1-9" onchange="calc('Q1-9','E2-9','T3-9','distro-9','A4-9','Ave-9')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="E2" id="E2-9" onchange="calc('Q1-9','E2-9','T3-9','distro-9','A4-9','Ave-9')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="T3" id="T3-9" onchange="calc('Q1-9','E2-9','T3-9','distro-9','A4-9','Ave-9')">
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
                    <input class="form-control" type="text" name="A4" placeholder="A4" id="A4-9" disabled onchange="calc('Q1-9','E2-9','T3-9','distro-9','A4-9','Ave-9')">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average" id="Ave-9" disabled onchange="calc('Q1-9','E2-9','T3-9','distro-9','A4-9','Ave-9')">
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
                	<th>Strategic Functions: 30%</th>
                </tr>
                <tr>
                  <td><div class="form-group">
                    <label for="MFI">
                    </label>
                    <input class="form-control" type="text" name="MFI" placeholder="Major Final Output" id="MFI" value="No of trainings/seminars/conferences attended" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="successIndicator">
                    </label>
                    <input class="form-control" type="text" name="successIndicator" placeholder="Success Indicator" id="successIndicator" value="Attend at least one research training/seminar/conference" onClick="this.select();">
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="actualaccomplishments" placeholder="Actual Accomplishments" id="actualaccomplishments" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Distribution"></label>
                    <input class="form-control" type="text" name="distribution" id="distro-10" value="6%" onchange="calc('Q1-10','E2-10','T3-10','distro-10','A4-10','Ave-10')" onClick="this.select();"></input>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="Q1" id="Q1-10" onchange="calc('Q1-10','E2-10','T3-10','distro-10','A4-10','Ave-10')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="E2" id="E2-10" onchange="calc('Q1-10','E2-10','T3-10','distro-10','A4-10','Ave-10')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="T3" id="T3-10" onchange="calc('Q1-10','E2-10','T3-10','distro-10','A4-10','Ave-10')">
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
                    <input class="form-control" type="text" name="A4" placeholder="A4" id="A4-10" disabled onchange="calc('Q1-10','E2-10','T3-10','distro-10','A4-10','Ave-10')">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average" id="Ave-10" disabled onchange="calc('Q1-10','E2-10','T3-10','distro-10','A4-10','Ave-10')">
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
                    <input class="form-control" type="text" name="MFI" placeholder="Major Final Output" id="MFI" value="No of proposed/completed research" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="successIndicator">
                    </label>
                    <input class="form-control" type="text" name="successIndicator" placeholder="Success Indicator" id="successIndicator" value="At least one proposed/completed research within the rating period" onClick="this.select();">
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="actualaccomplishments" placeholder="Actual Accomplishments" id="actualaccomplishments" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Distribution"></label>
                    <input class="form-control" type="text" name="distribution" id="distro-11" value="7%" onchange="calc('Q1-11','E2-11','T3-11','distro-11','A4-11','Ave-11')" onClick="this.select();"></input>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="Q1" id="Q1-11" onchange="calc('Q1-11','E2-11','T3-11','distro-11','A4-11','Ave-11')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="E2" id="E2-11" onchange="calc('Q1-11','E2-11','T3-11','distro-11','A4-11','Ave-11')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="T3" id="T3-11" onchange="calc('Q1-11','E2-11','T3-11','distro-11','A4-11','Ave-11')">
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
                    <input class="form-control" type="text" name="A4" placeholder="A4" id="A4-11" disabled onchange="calc('Q1-11','E2-11','T3-11','distro-11','A4-11','Ave-11')">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average" id="Ave-11" disabled onchange="calc('Q1-11','E2-11','T3-11','distro-11','A4-11','Ave-11')">
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
                    <input class="form-control" type="text" name="MFI" placeholder="Major Final Output" id="MFI" value="" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="successIndicator">
                    </label>
                    <input class="form-control" type="text" name="successIndicator" placeholder="Success Indicator" id="successIndicator" value="Disseminiate at least one research" onClick="this.select();">
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="actualaccomplishments" placeholder="Actual Accomplishments" id="actualaccomplishments" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Distribution"></label>
                    <input class="form-control" type="text" name="distribution" id="distro-12" value="5%" onchange="calc('Q1-12','E2-12','T3-12','distro-12','A4-12','Ave-12')" onClick="this.select();"></input>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="Q1" id="Q1-12" onchange="calc('Q1-12','E2-12','T3-12','distro-12','A4-12','Ave-12')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="E2" id="E2-12" onchange="calc('Q1-12','E2-12','T3-12','distro-12','A4-12','Ave-12')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="T3" id="T3-12" onchange="calc('Q1-12','E2-12','T3-12','distro-12','A4-12','Ave-12')">
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
                    <input class="form-control" type="text" name="A4" placeholder="A4" id="A4-12" disabled onchange="calc('Q1-12','E2-12','T3-12','distro-12','A4-12','Ave-12')">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average" id="Ave-12" disabled onchange="calc('Q1-12','E2-12','T3-12','distro-12','A4-12','Ave-12')">
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
                    <input class="form-control" type="text" name="MFI" placeholder="Major Final Output" id="MFI" value="Extension" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="successIndicator">
                    </label>
                    <input class="form-control" type="text" name="successIndicator" placeholder="Success Indicator" id="successIndicator" value="Participate in the department's extension project" onClick="this.select();">
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="actualaccomplishments" placeholder="Actual Accomplishments" id="actualaccomplishments" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Distribution"></label>
                    <input class="form-control" type="text" name="distribution" id="distro-13" value="7%" onchange="calc('Q1-13','E2-13','T3-13','distro-13','A4-13','Ave-13')" onClick="this.select();"></input>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="Q1" id="Q1-13" onchange="calc('Q1-13','E2-13','T3-13','distro-13','A4-13','Ave-13')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="E2" id="E2-13" onchange="calc('Q1-13','E2-13','T3-13','distro-13','A4-13','Ave-13')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="T3" id="T3-13" onchange="calc('Q1-13','E2-13','T3-13','distro-13','A4-13','Ave-13')">
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
                    <input class="form-control" type="text" name="A4" placeholder="A4" id="A4-13" disabled onchange="calc('Q1-13','E2-13','T3-13','distro-13','A4-13','Ave-13')">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average" id="Ave-13" disabled onchange="calc('Q1-13','E2-13','T3-13','distro-13','A4-13','Ave-13')">
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
                    <input class="form-control" type="text" name="MFI" placeholder="Major Final Output" id="MFI" value="QA" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="successIndicator">
                    </label>
                    <input class="form-control" type="text" name="successIndicator" placeholder="Success Indicator" id="successIndicator" value="100% participation in ISO/AACCUP - related activities" onClick="this.select();">
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="actualaccomplishments" placeholder="Actual Accomplishments" id="actualaccomplishments" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Distribution"></label>
                    <input class="form-control" type="text" name="distribution" id="distro-14" value="5%" onchange="calc('Q1-14','E2-14','T3-14','distro-14','A4-14','Ave-14')" onClick="this.select();"></input>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="Q1" id="Q1-14" onchange="calc('Q1-14','E2-14','T3-14','distro-14','A4-14','Ave-14')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="E2" id="E2-14" onchange="calc('Q1-14','E2-14','T3-14','distro-14','A4-14','Ave-14')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="T3" id="T3-14" onchange="calc('Q1-14','E2-14','T3-14','distro-14','A4-14','Ave-14')">
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
                    <input class="form-control" type="text" name="A4" placeholder="A4" id="A4-14" disabled onchange="calc('Q1-14','E2-14','T3-14','distro-14','A4-14','Ave-14')">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average" id="Ave-14" disabled onchange="calc('Q1-14','E2-14','T3-14','distro-14','A4-14','Ave-14')">
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
                	<th>Support Functions: 10%</th>
                </tr>
                <tr>
                  <td><div class="form-group">
                    <label for="MFI">
                    </label>
                    <input class="form-control" type="text" name="MFI" placeholder="Major Final Output" id="MFI" value="Punctual submission of documents and records" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="successIndicator">
                    </label>
                    <input class="form-control" type="text" name="successIndicator" placeholder="Success Indicator" id="successIndicator" value="Submit required documents and records (DTR, SALN, liquidation, leave forms, etc.) on time" onClick="this.select();">
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="actualaccomplishments" placeholder="Actual Accomplishments" id="actualaccomplishments" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Distribution"></label>
                    <input class="form-control" type="text" name="distribution" id="distro-15" value="5%" onchange="calc('Q1-15','E2-15','T3-15','distro-15','A4-15','Ave-15')" onClick="this.select();"></input>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="Q1" id="Q1-15" onchange="calc('Q1-15','E2-15','T3-15','distro-15','A4-15','Ave-15')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="E2" id="E2-15" onchange="calc('Q1-15','E2-15','T3-15','distro-15','A4-15','Ave-15')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="T3" id="T3-15" onchange="calc('Q1-15','E2-15','T3-15','distro-15','A4-15','Ave-15')">
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
                    <input class="form-control" type="text" name="A4" placeholder="A4" id="A4-15" disabled onchange="calc('Q1-15','E2-15','T3-15','distro-15','A4-15','Ave-15')">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average" id="Ave-15" disabled onchange="calc('Q1-15','E2-15','T3-15','distro-15','A4-15','Ave-15')">
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
                    <input class="form-control" type="text" name="MFI" placeholder="Major Final Output" id="MFI" value="Participate in school activities" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="successIndicator">
                    </label>
                    <input class="form-control" type="text" name="successIndicator" placeholder="Success Indicator" id="successIndicator" value="Participate in school activities" onClick="this.select();">
                  </div></td>

                  <td style="width: 200px;"><div class="form-group">
                    <label for="ActualAccomplishments">
                    </label>
                    <input class="form-control" type="text" name="actualaccomplishments" placeholder="Actual Accomplishments" id="actualaccomplishments" onClick="this.select();">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Distribution"></label>
                    <input class="form-control" type="text" name="distribution" id="distro-16" value="5%" onchange="calc('Q1-16','E2-16','T3-16','distro-16','A4-16','Ave-16')" onClick="this.select();"></input>
                  </div></td>

                  <td><div class="form-group">
                    <label for="Q1">
                    </label>
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="Q1" id="Q1-16" onchange="calc('Q1-16','E2-16','T3-16','distro-16','A4-16','Ave-16')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="E2" id="E2-16" onchange="calc('Q1-16','E2-16','T3-16','distro-16','A4-16','Ave-16')">
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
                    <select style="width:43px; height: 36px; border-radius: 4px;" name="T3" id="T3-16" onchange="calc('Q1-16','E2-16','T3-16','distro-16','A4-16','Ave-16')">
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
                    <input class="form-control" type="text" name="A4" placeholder="A4" id="A4-16" disabled onchange="calc('Q1-16','E2-16','T3-16','distro-16','A4-16','Ave-16')">
                  </div></td>

                  <td><div class="form-group">
                    <label for="Ave">
                    </label>
                    <input class="form-control" type="text" name="Ave" placeholder="Average" id="Ave-16" disabled onchange="calc('Q1-16','E2-16','T3-16','distro-16','A4-16','Ave-16')">
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