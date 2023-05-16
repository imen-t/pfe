<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use App\Models\dmaicProject;

use Livewire\Component;
use Symfony\Contracts\Service\Attribute\Required;

class Multistepform extends \Livewire\Component
{
    use WithFileUploads;
    public $crete_a_value_stream;
    public $create_processflow_diagram;
    public $expose_simplification_opportunities;
    public $analyse_measurememnts_systems;
    public $improve_Measurement_systems_if_needed;
    public $collect_data;
    public $examine_process_stability ;
    public $perform_capability_analysis;
    public $upload1;

    public $totalSteps=3;
    public $currentStep=1;
    public function mount(){
        $this->currentStep =1;
    }

    public function render()
    {
        return view('livewire.multistepform');
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateDatameasure();
        $this->currentStep++;
        if($this->currentStep > $this->totalSteps){
            $this->currentStep = $this->totalSteps;
        }
    }
    public function decreaseStep(){
        $this->resetErrorBag();
        $this-> currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }
    public function validateDatameasure(){
        if($this->currentStep ==1){
            $this->validate([
                'crete_a_value_stream'=>'required'
            ]);

        }
        elseif($this->currentStep ==2){
            $this->validate([
                'create_processflow_diagram'=>'required',
                'expose_simplification_opportunities'=>'required'

            ]);  
            
        }


    }
    public function CreateStepOne(){
        if ($this->currentStep == 1) {
            $this->validate([
                'crete_a_value_stream' => 'required',
            ]);
        } elseif ($this->currentStep == 2) {
            $this->validate([
                'create_processflow_diagram' => 'required',
                'expose_simplification_opportunities' => 'required',
            ]);
        } elseif ($this->currentStep == 3) {
            $this->validate([
                'analyse_measurememnts_systems' => 'required',
                'improve_Measurement_systems_if_needed' => 'required',
                'collect_data' => 'required',
                'examine_process_stability' => 'required',
                'perform_capability_analysis' => 'required',
                'upload1' => 'required|mimes:doc,doxs,pdf,xl|max:1024',
            ]);
        }
    
        // Form data is valid, proceed with saving to the database
        $values = [
            'crete_a_value_stream' => $this->crete_a_value_stream,
            'create_processflow_diagram' => $this->create_processflow_diagram,
            'expose_simplification_opportunities' => $this->expose_simplification_opportunities,
            'analyse_measurememnts_systems' => $this->analyse_measurememnts_systems,
            'improve_Measurement_systems_if_needed' => $this->improve_Measurement_systems_if_needed,
            'collect_data' => $this->collect_data,
            'examine_process_stability' => $this->examine_process_stability,
            'perform_capability_analysis' => $this->perform_capability_analysis,
            'upload1' => $this->upload1->store('uploads'), // Store the uploaded file in a designated folder
        ];
    
        dmaicProject::create($values);
    
        $this->reset();
        $this->currentStep = 1;
    
    }
}
