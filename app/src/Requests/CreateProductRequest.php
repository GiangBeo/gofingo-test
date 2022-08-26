<?php

namespace App\Requests;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;

class CreateProductRequest extends BaseRequest
{
    bne
    #[Type('integer')]
    #[NotBlank()]
    protected $e_id;

    #[Type('string')]
    #[NotBlank([])]
    protected $title;

    #[Type('array')]
    #[NotBlank([])]
    #[NotBlank([])]
    protected $category_ids;

    #[Type('float')]
    #[NotBlank([])]
    protected $price;
}
