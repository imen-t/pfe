@extends('layouts.app')

@section('content')
<div style="display:block;overflow-x:hidden;" >
<div class="row project-detail" style="margin-left: 30px;">
        <h3 style="margin-left: 460px;" >Project title:</h3>
        <div class="col">
        <form>
                @csrf

                <table class="table" style="width: 1000px;">
                    <thead>
                        <tr>
                            <th scope="col">Location</th>
                            <th scope="col">project leader</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <br>
                    <tbody>
                        <tr>
                            <td> <input name="location" value="" type="text" class="form-control" id="location" />
                            </td>
                            <td><input name="project_leader" value="" type="text" class="form-control" id="project_leader" />
                            
                            <td><input name="date" value="" type="date" class="form-control" id="date" />

                            <td> <button type="submit" class="btn btn-primary">Update</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <!-- Teams  -->
    <div class="row project-detail"  >
        <h3 style="margin-left: 500px;" >Team Members:</h3>
        <div class="col">

            <table class="table" style="width: 1000px;margin-left:30px;" > 
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">level</th>

                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td>
                                @csrf
                                <button type="submit" class="btn btn-danger btn-icon">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>

                  
 

                </tbody>
            </table>
            </form>
        </div>
    </div>
    <br>
    <br>
<nav>
  <ul class="dmaic-nav">
    <li><a href="#define">Define</a></li>
    <li><a href="#measure">Measure</a></li>
    <li><a href="#analyze">Analyze</a></li>
    <li><a href="#improve">Improve</a></li>
    <li><a href="#control">Control</a></li>
  </ul>
</nav>
<div class="container">
<br>
<br>
<br>
<!-- Form Section A -->
<div id="define">
  
        <h2> Define</h2>
        
        <div class="col-md-9">
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">step1:Define And scope Problem</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>identify the business gap:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Document_the_process:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>colllect and transltae the voice of the customor(VOC):</td>
                                    <td><strong></strong></td>
                                </tr>
                            </table>
                    </div>
<div class="card-header">step2:Define projects objective and benifits</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>Define metrics and defects:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Establish preliminary Baseline and entitlement:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Develop problem objective statements:</td>
                                    <td><strong></strong></td>
                                </tr>
                  
                            </table>
                    </div>
                    <div class="card-header">Step 3: Create project Charter</div>
   
            <div class="card-body">

                    <table class="table">
                        <tr>
                            <td>confirm_improvement_methodology:</td>
                            <td><strong></strong></td>
                        </tr>
                        <tr>
                            <td>Define_project_roles:</td>
                            <td><strong></strong></td>
                        </tr>
                        <tr>
                            <td>identify_project_risks:</td>
                            <td><strong></strong></td>
                        </tr>
                       
                    </table>
            </div>

        
    </div>
</div>
        </div>
    </div>

      
<!-- Link to Section B -->
<br>
<br>
<br>
<br>
<br>

<!-- Form Section B -->
<div id="measure" style="margin-left: 70px;" >
  
        <h2> Measure</h2>
       
        <div class="col-md-9" >
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">step1:Define And scope Problem</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>identify the business gap:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Document_the_process:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>colllect and transltae the voice of the customor(VOC):</td>
                                    <td><strong></strong></td>
                                </tr>
                            </table>
                    </div>
<div class="card-header">step2:Define projects objective and benifits</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>Define metrics and defects:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Establish preliminary Baseline and entitlement:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Develop problem objective statements:</td>
                                    <td><strong></strong></td>
                                </tr>
                  
                            </table>
                    </div>
                    <div class="card-header">Step 3: Create project Charter</div>
   
            <div class="card-body">

                    <table class="table">
                        <tr>
                            <td>confirm_improvement_methodology:</td>
                            <td><strong></strong></td>
                        </tr>
                        <tr>
                            <td>Define_project_roles:</td>
                            <td><strong></strong></td>
                        </tr>
                        <tr>
                            <td>identify_project_risks:</td>
                            <td><strong></strong></td>
                        </tr>
                       
                    </table>
            </div>

        
    </div>
</div>
        </div>
  </div>

   
<br>
<br>
<br>
<br>
<br>

<!-- Link to Section C -->
<!-- Form Section C -->


  <br>
<br>
<br>
<br>
<br>

<!-- continue with sections D through Z -->
</div>
</div>
</div>
<div id="measure"  style="margin-left: 330px;"  >
  
        <h2> Analyse</h2>
       
        <div class="col-md-9">
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">step1:Define And scope Problem</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>identify the business gap:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Document_the_process:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>colllect and transltae the voice of the customor(VOC):</td>
                                    <td><strong></strong></td>
                                </tr>
                            </table>
                    </div>
<div class="card-header">step2:Define projects objective and benifits</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>Define metrics and defects:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Establish preliminary Baseline and entitlement:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Develop problem objective statements:</td>
                                    <td><strong></strong></td>
                                </tr>
                  
                            </table>
                    </div>
                    <div class="card-header">Step 3: Create project Charter</div>
   
            <div class="card-body">

                    <table class="table">
                        <tr>
                            <td>confirm_improvement_methodology:</td>
                            <td><strong></strong></td>
                        </tr>
                        <tr>
                            <td>Define_project_roles:</td>
                            <td><strong></strong></td>
                        </tr>
                        <tr>
                            <td>identify_project_risks:</td>
                            <td><strong></strong></td>
                        </tr>
                       
                    </table>
            </div>

        
    </div>
</div>
        </div>
  </div>

  <br>
<br>
<br>
<br>
<br>

  <div id="control" style="margin-left: 330px;" >
  
        <h2> Improve</h2>
       
        <div class="col-md-9">
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">step1:Define And scope Problem</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>identify the business gap:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Document_the_process:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>colllect and transltae the voice of the customor(VOC):</td>
                                    <td><strong></strong></td>
                                </tr>
                            </table>
                    </div>
<div class="card-header">step2:Define projects objective and benifits</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>Define metrics and defects:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Establish preliminary Baseline and entitlement:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Develop problem objective statements:</td>
                                    <td><strong></strong></td>
                                </tr>
                  
                            </table>
                    </div>
                    <div class="card-header">Step 3: Create project Charter</div>
   
            <div class="card-body">

                    <table class="table">
                        <tr>
                            <td>confirm_improvement_methodology:</td>
                            <td><strong></strong></td>
                        </tr>
                        <tr>
                            <td>Define_project_roles:</td>
                            <td><strong></strong></td>
                        </tr>
                        <tr>
                            <td>identify_project_risks:</td>
                            <td><strong></strong></td>
                        </tr>
                       
                    </table>
            </div>

        
    </div>
</div>
        </div>
  </div>
  <br>
<br>
<br>
<br>
<br>

  <div id="control"  style="margin-left: 330px;"  >
  
        <h2> Control</h2>
       
        <div class="col-md-9">
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">step1:Define And scope Problem</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>identify the business gap:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Document_the_process:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>colllect and transltae the voice of the customor(VOC):</td>
                                    <td><strong></strong></td>
                                </tr>
                            </table>
                    </div>
<div class="card-header">step2:Define projects objective and benifits</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>Define metrics and defects:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Establish preliminary Baseline and entitlement:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Develop problem objective statements:</td>
                                    <td><strong></strong></td>
                                </tr>
                  
                            </table>
                    </div>
                    <div class="card-header">Step 3: Create project Charter</div>
   
            <div class="card-body">

                    <table class="table">
                        <tr>
                            <td>confirm_improvement_methodology:</td>
                            <td><strong></strong></td>
                        </tr>
                        <tr>
                            <td>Define_project_roles:</td>
                            <td><strong></strong></td>
                        </tr>
                        <tr>
                            <td>identify_project_risks:</td>
                            <td><strong></strong></td>
                        </tr>
                       
                    </table>
            </div>

        
    </div>
</div>
        </div>
  </div>



@endsection



<style>
.dmaic-nav {
  margin-left: 30px;
  list-style: none;
  display: flex;
  justify-content: space-between;
  margin: 0;
  padding: 0;
  width: 1000px;
}
.dmaic-nav li {
  flex-grow: 1;
  text-align: center;
}
.dmaic-nav li a {
  display: block;
  padding: 0.5rem;
  color: #333;
  text-decoration: none;

}
.dmaic-nav li a:hover {
  background-color: #bebebe;
}
#define,
#measure,
#section-c {
  width: 100%;
  display: block;
  margin-bottom: 50px; /* add some space between each phase */
}
</style>

