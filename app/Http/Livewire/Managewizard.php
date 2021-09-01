<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ec_city;
use App\Models\Ec_district;
use App\Models\Ec_postalcode;
use App\Models\Ec_province;
use App\Models\User;
use Livewire\WithFileUploads;

class Managewizard extends Component
{
    use WithFileUploads;
    public $currentStep = 1;
    public $firstname, $lastname, $email, $password;
    public $address, $province, $district, $zip, $city;
    public $cities=[];
    public $districts=[];
    public $zips=[];
    public $photo;

    public function mount(){
    }

    public function render()
    {
        if($this->province!=null){
            $this->cities = Ec_city::where('prov_id',$this->province)->get();
            if($this->city!=null && $this->province!=null){
                $this->districts = Ec_district::where('city_id',$this->city)->get();
                if($this->district!=null && $this->city!=null && $this->province!=null){
                    $this->zips = Ec_postalcode::where('prov_id',$this->province)->where('city_id',$this->city)->get();
                }
            }
        }
        $provinces = Ec_province::all();
        return view('livewire.managewizard',[
            'provinces'=>$provinces,
        ]);
    }

    public function back($step)
    {
        $this->currentStep = $step;    
    }

    public function firstStepSubmit()
    {
        $rules = [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
        ];
        $customMessage = [
            'firstname.required' => 'Your custom message for firstname.',
            'lastname.required' => 'Your custom message for lastname.',
            'email.required' => 'Your custom message for email.',
            'password.required' => 'Your custom message for password.',
        ];
        $this->validate($rules,$customMessage);
        $this->currentStep = 2;
    }

    public function secondStepSubmit(){
        $rules = [
            'address' => 'required',
            'province' => 'required',
            'city' => 'required',
            'district' => 'required',
            'zip' => 'required',
        ];
        $customMessage = [
            'address.required' => 'Your custom message for address.',
            'province.required' => 'Your custom message for province.',
            'city.required' => 'Your custom message for city.',
            'district.required' => 'Your custom message for district.',
            'zip.required' => 'Your custom message for postal code.',
        ];
        $this->validate($rules,$customMessage);
        $this->currentStep = 3;
    }

    public function submit(){
        $this->photo->store('public/images');
        User::insert([
            'firstname'=>$this->firstname,
            'lastname'=>$this->lastname,
            'email'=>$this->email,
            'password'=>bcrypt($this->password),
            'address'=>$this->address,
            'prov_id'=>$this->province,
            'city_id'=>$this->city,
            'dis_id'=>$this->district,
            'postal_code'=>$this->zip,
            'photo'=>$this->photo->hashName(),
        ]);
        $this->reset();
        $this->currentStep = 1;
    }

    public function clear()
    {
        $this->reset();
        $this->currentStep = 1;
    }
}
