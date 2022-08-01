<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZipCode extends Model
{
    use HasFactory;

    protected $table = 'codigo_postal';

    public $tildes      = ['á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä','é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë','í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î','ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô','ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'];
    public $sinTildes   = ['a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A','e', 'e', 'e', 'e', 'E', 'E', 'E', 'E','i', 'i', 'i', 'i', 'I', 'I', 'I', 'I','o', 'o', 'o', 'o', 'O', 'O', 'O', 'O','u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'];

    public function setd_estado() {
		return str_replace($this->tildes,$this->sinTildes,$this->attributes['d_estado']);
    }

    public function setd_ciudad() {
		return str_replace($this->tildes,$this->sinTildes,$this->attributes['d_ciudad']);
    }

    public function setd_zona() {
		return str_replace($this->tildes,$this->sinTildes,$this->attributes['d_zona']);
    }

    public function setd_asenta() {
		return str_replace($this->tildes,$this->sinTildes,$this->attributes['d_asenta']);
    }

    public function setd_mnpio() {
		return str_replace($this->tildes,$this->sinTildes,$this->attributes['d_mnpio']);
    }
}
