<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'slv_token',
        'national_id_number',
        'national_id_file',
        'selfie_file',
        'phone',
        'address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static $ethTokenList = [
        'A1'=>'0x3f2ae07aeDBb023256Cb37645eBa09D964245AEB',
        'A2'=>'0x2d031654149481f4ce8f5d94F7d24A0e03e1C9E4',
        'A3'=>'0xFDe57C40d129b928d4A31Cfd1518E8592bF6FbBE',
        'A4'=>'0x8cCcdAD67B1e6E227f69A64F87Ae7E063f37cEa9',
        'A5'=>'0x71311E5AA150f59C53CFFB5179C7dbd4DaAA5D47',
        'A6'=>'0xbac03761F3a998d082f01998EB7dBa7aC530F58D',
        'A7'=>'0xC5A553c95Ba387b1D85b5646123315ed233A3751',
        'A8'=>'0x4Ed132FA683a3A7a070856681b743A8f925002bE',
        'A9'=>'0x7b01E3C1e7b679EA8e1DeD5186EC9B19fFf0eC68'
    ];
}
