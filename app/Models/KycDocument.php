<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class KycDocument
 * 
 * @property int $id
 * @property int $applicant_id
 * @property string $document_type
 * @property string $document
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property ApplicantDetail $applicant_detail
 *
 * @package App\Models
 */
class KycDocument extends Model
{
	protected $table = 'kyc_documents';

	protected $casts = [
		'applicant_id' => 'int'
	];

	protected $fillable = [
		'applicant_id',
		'document_type',
		'document'
	];

	public function applicant_detail()
	{
		return $this->belongsTo(ApplicantDetail::class, 'applicant_id');
	}
}
