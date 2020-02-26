<?php
/*
|--------------------------------------------------------------------------
| Modelo Story
|--------------------------------------------------------------------------
*/
    namespace xixha;
    use Illuminate\Database\Eloquent\Model;
    /*
    |--------------------------------------------------------------------------
    | Modelo Story
    |--------------------------------------------------------------------------
    | Invoca los datos de la tabla Story de la DB,
    */
        class Story extends Model{
            protected $table = 'story';
            protected $primaryKey ='id_story'; 
            public $timestamps = false;  
            protected $fillable = [
                'id_ref',
                'fechaRegistro',
                'cantidad'
            ];       
            protected $guarded = [       
            ];
        } 