<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
	use Notifiable;

    protected $table 		= 'users';
	protected $primaryKey 	= 'id';
	
	protected $fillable = [
		'username', 'title', 'firstname', 'lastname', 'gender', 'date_of_birth', 'email', 'phone', 'email_verified_at', 'profile_photo', 'availability',
		'nhs_number', 'address', 'postcode', 'emergency_contact', 'gp_details', 'occupation', 'height', 'weight', 'blood_type', 'referral_source', 'medication_allergies',
		'current_medication', 'more_info', 'slot', 'communication_preference', 'privacy_policy', 'patient_note', 'stripe_user_id', 'stripe_response', 'specialism', 'qualifications', 'med_co_no',
		'mdu_no', 'qualifications_details', 'gp_med_co_legal_experience', 'med_co_legal_experience', 'signature', 'role_id', 'role_type', 'user_id', 'creator_id', 'room_id', 'deleted_at',
		'password', 'remember_token', 'gmc_no'
	];

	
	protected $hidden = [
		'password'
	];
	
}
