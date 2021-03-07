<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    /**
     *
     * Mark assignment as completed and save into DB.
     *
     */
    public function complete()
    {
        $this->completed = true;
        $this->save();
    }
}
