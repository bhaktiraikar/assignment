<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LoanDocument
 * 
 * @property int $id
 * @property int $applicant_id
 * @property float $loan_amount
 * @property float $tenure
 * @property string $income_details
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property ApplicantDetail $applicant_detail
 *
 * @package App\Models
 */
class LoanDocument extends Model
{
	protected $table = 'loan_documents';

	protected $casts = [
		'applicant_id' => 'int',
		'loan_amount' => 'float',
		'tenure' => 'float'
	];

	protected $fillable = [
		'applicant_id',
		'loan_amount',
		'tenure',
		'income_details'
	];

	public function applicant_detail()
	{
		return $this->belongsTo(ApplicantDetail::class, 'applicant_id');
	}
}
