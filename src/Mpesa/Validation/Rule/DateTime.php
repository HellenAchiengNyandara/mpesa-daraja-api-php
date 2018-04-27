<?php
namespace Bascil\Mpesa\Validation\Rule;

class DateTime extends Date
{
    const MESSAGE = 'This input must be a date having the format {format}';

    const LABELED_MESSAGE = '{label} must be a date having the format {format}';

    protected $options = array(
        'format' => 'Y-m-d H:i:s'
    );
}
