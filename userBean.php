<?php
class LoginBean{
    private $name = "";
    private $emp_id = "";
    private $age = "";
    private $dob = "";
    private $fathername = "";
    private $email = "";
    private $city = "";
    private $option = "";
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmp_id()
    {
        return $this->emp_id;
    }

    /**
     * @param string $emp_id
     */
    public function setEmp_id($emp_id)
    {
        $this->emp_id = $emp_id;
    }

    /**
     * @return string
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param string $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param string $dob
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    }
    /**
     * @return string
     */
    public function getFathername()
    {
        return $this->fathername;
    }

    /**
     * @param string $fathername
     */
    public function setFathername($fathername)
    {
        $this->fathername = $fathername;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }
    /**
     * @return string
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param string $option
     */
    public function setOption($option)
    {
        $this->option = $option;
    }



}
?>