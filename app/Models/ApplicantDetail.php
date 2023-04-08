<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ApplicantDetail
 * 
 * @property int $id
 * @property string $profile_photo
 * @property string $name
 * @property string $phone
 * @property Carbon $dob
 * @property string $address
 * @property string $city
 * @property string $state
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|KycDocument[] $kyc_documents
 * @property Collection|LoanDocument[] $loan_documents
 *
 * @package App\Models
 */
class ApplicantDetail extends Model
{
	protected $table = 'applicant_details';

	protected $casts = [
		'dob' => 'datetime'
	];

	protected $fillable = [
		'profile_photo',
		'name',
		'phone',
		'dob',
		'address',
		'city',
		'state'
	];

	public function kyc_documents()
	{
		return $this->hasMany(KycDocument::class, 'applicant_id');
	}

	public function loan_documents()
	{
		return $this->hasMany(LoanDocument::class, 'applicant_id');
	}
}
