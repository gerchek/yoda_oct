<?php namespace Atash\Yoda\Models;

use Model;

/**
 * Model
 */
class Client extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'atash_yoda_client';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'image' => 'System\Models\File'
    ];

    public $attachMany = [
        'images' => 'System\Models\File'
    ];
}
