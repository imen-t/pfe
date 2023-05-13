@extends('layouts.app')

@section('content')

@livewireStyles

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            
                
             <form>
             @csrf
                <div class="card">
                    <div class="card-header">step1:Define And scope Problem</div>
  
                    <div class="card-body">
  
                           
  
                            <div class="form-group">
                                <label for="identify_the_business_gap">identify the business gap::</label>
                                <input type="text"  class="form-control" id="identify_the_business_gap"  name="identify_the_business_gap">
                            </div>
                            <div class="form-group">
                                <label for="Document_the_process">Document_the_process:</label>
                                <input type="text"   class="form-control" id="Document_the_process" name="Document_the_process"/>
                            </div>
   
                            <div class="form-group">
                                <label for="colllect_and_transltae">colllect_and_transltae:</label>
                                <textarea type="text"  class="form-control" id="colllect_and_transltae" name="colllect_and_transltae"></textarea>
                            </div>
                          
                            <div class="form-group">
                                <label for="scope_the_project">colllect_and_transltae:</label>
                                <textarea type="text"  class="form-control" id="scope_the_project" name="scope_the_project"></textarea>
                            </div>
                            
                    </div>
       
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> -->

@livewire('multistepform')
@endsection
@livewireScripts