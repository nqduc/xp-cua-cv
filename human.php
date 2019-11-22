<?php
class human {
    public $names;
    public $address;
    public $experience;
    public $education;
    public $skills;
    public $interest;
    public $award;
    public $reperences;
    public $profile;
    public $contact;

    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
    

    function set_address($address){
        $this->address = $address;
    }
    function get_address(){
        return $this->address;
    }


    function set_experience($experience){
        $this->experience = $experience;
    }
    function get_Experience(){
        return $this->experience;
    }


    function set_contact($contact){
        $this->contact = $contact;
    }
    function get_contact(){
        return $this->contact;
    }


    function set_education($education){
        $this->education = $education;
    }
    function get_education(){
        return $this->ducation;
    }


    function set_skills($skills){
        $this->skills = $skills;
    }
    function get_skills(){
        return $this->skills;
    }

    
    function set_award($award){
        $this->award = $award;
    }
    function get_award(){
        return $this->award;
    }


    function set_reperences($reperences){
        $this->reperences = $reperences;
    }
    function get_reperences(){
        return $this->reperences;
    }
  

    function set_profile($profile){
        $this->profile = $profile;
    }
    function get_profile(){
        return $this->profile;
    }
}
   


?>