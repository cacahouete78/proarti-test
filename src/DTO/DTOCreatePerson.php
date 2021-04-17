<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

final class DTOCreatePerson
{

    /**
     * @Assert\Type("string")
     * @Assert\NotBlank()
     */
    public $firstName;

    /**
     * @Assert\Type("string")
     * @Assert\NotBlank()
     */
    public $lastName;

}