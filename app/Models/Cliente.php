<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    
    protected $table = 'llx_cliente';

    public $timestamps = false;

    protected $primaryKey = 'rowid';

    protected $fillable = ['code', 'name','alias','cuil','dni', 'fk_fiscal_position', 'address', 'zip', 'town', 'provincia', 'date_nac', 'nacionalidad', 'fk_estado_civil', 'phone_ofi', 'phone', 'movil', 'mail_fact_1', 'mail_fact_2', 'mail_com_1', 'mail_com_2', 'nota_publica', 'nota_privada', 'logo', 'active', 'datec', 'userc', 'clave'];

}
