<?php declare(strict_types=1);


namespace Coalition\Exam;


class Skill
{

    public function __construct()
    {
        
    }

    public function __call($method, $args)
    {
        $passedArguments = get_defined_vars() ['args'];

        // Checking If Function Exists of Not
        if (substr($method, 0, 4) == 'has_')
        {
            echo 'exists';
        }
        else
        {
            echo 'non exist';
        }

        // Checking If Property Should be Encrypted or Not
        for ($i = 0;$i < count($passedArguments);$i++)
        {
            if (substr($passedArguments[$i], -3) == '_CT')
            {
                echo md5($passedArguments[$i]);
            }
            else
            {
                echo $passedArguments[$i];
            }
        }
    }

    // Function to check the string is ends 
    // with given substring or not
    public function check_property_ends_with_specific_string($str, $lastString) {            
        $last = substr($lastString, -1);
        if($last === '_CT'){
            echo "property exists";
        }
        if(property_exists($str,$lastString)){
            return md5($str);
        }
    }
  


}