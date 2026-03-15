<?php

namespace App\Models;

use Database\Factories\HRSFactory;
use Illuminate\Database\Eloquent\Attributes\UseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[UseFactory(HRSFactory::class )]

class HR extends Model
{
    use HasFactory;

    protected $table = 'h_r_s';

    protected $fillable = [
        'agent_id',
        'name',
        'father',
        'mother',
        'dob',
        'mofa_id',
        'old_mofa_id',
        'birth_place',
        'prev_nationality',
        'nationality',
        'sex',
        'marital_status',
        'sect',
        'religion',
        'address',
        'passport_no',
        'passport_issue_date',
        'passport_expiry_date',
        'passport_issue_place',
        'visa_no',
        'visa_issue_date',
        'sponsor_name',
        'sponsor_id',
        'visa_issue_place_ar',
        'visa_issue_place_en',
        'qualification_ar',
        'qualification_en',
        'profession_ar',
        'profession_en',
        'musaned_no',
        'wakala_no',
        'police_clearance_no',
        'police_clearance_issue_date',
        'driving_license_type',
        'stay_duration'
    ];


    public function agent()
    {
        return $this->belongsTo(Agent::class, 'agent_id');
    }
}
