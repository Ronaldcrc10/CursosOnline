<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class);
    }
}
