<?php

namespace App\Models;

use App\Core\Traits\SpatieLogsActivity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class UserInfo extends Model
{
    use SpatieLogsActivity;
    protected $guarded = [];
    protected $primaryKey = 'id';

    protected $casts = [
        "contact_method" => "json",
    ];

    /**
     * Prepare proper error handling for url attribute
     *
     * @return string
     */
    public function getAvatarUrlAttribute()
    {
        // if file avatar exist in storage folder
        $avatar = public_path(Storage::url($this->avatar));
        if (is_file($avatar) && file_exists($avatar)) {
            // get avatar url from storage
            return Storage::url($this->avatar);
        }

        // check if the avatar is an external url, eg. image from google
        if (filter_var($this->avatar, FILTER_VALIDATE_URL)) {
            return $this->avatar;
        }

        // no avatar, return blank avatar
        return asset(theme()->getMediaUrlPath().'avatars/blank.png');
    }

    /**
     * User info relation to user model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * User info relation to District model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function district()
    {
        return $this->belongsTo(District::class);
    }


    public function beneficiaryProfile()
    {
        return $this->hasOne(Beneficiary::class);
    }
    public function volunteer()
    {
        return $this->hasOne(Volunteer::class);
    }
    public function supporter()
    {
        return $this->hasOne(Supporter::class);
    }
    public function suggestionsSender()
    {
        return $this->hasMany(Suggestion::class,'user_info_id_sender');
    }
    public function suggestionsReceiver()
    {
        return $this->hasMany(Suggestion::class,'user_info_id_receiver');
    }

    /**
     * Unserialize values by default
     *
     * @param $value
     *
     * @return mixed|null
     */
    public function getCommunicationAttribute($value)
    {
        // test to un-serialize value and return as array
        $data = @unserialize($value);
        if ($data !== false) {
            return $data;
        } else {
            return null;
        }
    }
}
