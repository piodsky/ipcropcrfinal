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
                    <input class="form-control" type="text" name="distribution" id="distro" value="8%" onClick="this.select();"></input>
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
                    <input class="form-control" type="text" name="distribution" id="distro-2" value="8%" onClick="this.select();"></input>
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
              </form>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>           
                


@endsection