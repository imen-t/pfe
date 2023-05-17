<div  style="width:700px;height:100%;margin-left:200px;margin-top:100px;" >
    <form  wire:submit.prevent="CreateStepOne" action="{{ route('projects.dmaic.measure.CreateStepOne') }}" >
    @csrf
    <!-- {{--Step 1--}} -->
         @if ($currentStep == 1)

       <div class="step-one">
        <div class="card">
           <div class="card-header bg-secondary text-white"> STEP 1/3 - Define "AS IS" Process"</div>
           <div class="card-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">chooose</label>
                        <select class="form-control" wire:model="Defect_or_time">
                            <option value="" selected>Primary metric</option>
                            <option value="Defects">Defects</option>
                            <option value="Time">Time </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">create_a_value_stream</label>
                        <input type="text" class="form-control" placeholder="..." wire:model="crete_a_value_stream">
                    </div>
                </div>

           </div>

        </div>
       </div>

       @endif

       <!-- {{--Step 2--}} -->
       @if ($currentStep == 2)
       <div class="step-two">
        <div class="card">
           <div class="card-header bg-secondary text-white"> STEP 2/3 - Validate measurment system for outputs"</div>
           <div class="card-body">
           <div class="col-md-6">
                    <div class="form-group">
                        <label for="">create_processflow_diagram</label>
                        <input type="text" class="form-control" placeholder="..." wire:model="create_processflow_diagram">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">expose_simplification_opportunities</label>
                        <input type="text" class="form-control" placeholder="..." wire:model="expose_simplification_opportunities">
                    </div>
                </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Quick hit!</label>
                        <div class="form-check">
                            <input class="form-check-input"  type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                yes
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                no
                            </label>
                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                <label for="">objevtives met!</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Yes
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        No
                    </label>
                    </div>
                </div>

            </div>
           </div>

        </div>
       </div>
       @endif
        <!-- {{--Step 3--}} -->
        @if ($currentStep == 3)
        <div class="step-three">
        <div class="card">
           <div class="card-header bg-secondary text-white"> STEP 3/3 - Quantify process performance Process"</div>
           <div class="card-body">
           <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">analyse_measurememnts_systems</label>
                        <input type="text" class="form-control" placeholder="..." wire:model="analyse_measurememnts_systems">
                    </div>
                </div>
               
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">improve_Measurement_systems_if_needed</label>
                        <input type="text" class="form-control" placeholder="..." wire:model="improve_Measurement_systems_if_needed">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">collect_data</label>
                        <input type="text" class="form-control" placeholder="..." wire:model="collect_data">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">examine_process_stability</label>
                        <input type="text" class="form-control" placeholder="..." wire:model="examine_process_stability">
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">perform_capability_analysis</label>
                        <input type="text" class="form-control" placeholder="..." wire:model="perform_capability_analysis">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">attach a file if neccesssary</label>
                        <input type="file" class="form-control" placeholder="" wire:model="upload1">
                    </div>
                </div>
           </div>
           </div>


        </div>
       </div>
       @endif
       <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">
       @if ($currentStep == 1)
        <div></div>
       @endif

       @if ($currentStep == 2 || $currentStep == 3)
        <button type="button" class="btn btn-sm btn-secondary" wire:click="decreaseStep()">back</button>
       @endif
       @if ($currentStep == 1 || $currentStep == 2)
       <button type="button" class="btn btn-sm btn-success" wire:click="increaseStep()">Next</button>   
       @endif
       @if ($currentStep == 3)
       <button type="submit" class="btn btn-sm btn-primary">Submit</button>

       @endif

        

       </div>
      

    </form>
   
</div>
@livewireScripts
@livewireStyles
