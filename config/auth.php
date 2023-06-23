<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'antigo'=>[
      'driver'=>'eloquent',
      'model'=>App\Models\Antigo::class,
   ],
   'super'=>[
      'driver'=>'eloquent',
      'model'=>App\Models\Super::class,
   ],

   'empresa'=>[
      'driver'=>'eloquent',
      'model'=>App\Models\Empresa::class,
   ],
    'estudante'=>[
        'driver'=>'eloquent',
        'model'=>App\Models\Estudante::class,
     ],
     'professor'=>[
        'driver'=>'eloquent',
        'model'=>App\Models\Professor::class,
     ],
     'secretaria_administrativa'=>[
        'driver'=>'eloquent',
        'model'=>App\Models\Secretario::class,
     ],
     'secretaria_geral'=>[
      'driver'=>'eloquent',
      'model'=>App\Models\Secretario::class,
   ],

     'secretaria_pedagogica'=>[
      'driver'=>'eloquent',
      'model'=>App\Models\Secretario::class,
   ],
     'administracao'=>[
        'driver'=>'eloquent',
        'model'=>App\Models\Administrativo::class,
     ],
     'pedagogia'=>[
        'driver'=>'eloquent',
        'model'=>App\Models\Pedagogia::class,
     ],
     'geral'=>[
      'driver'=>'eloquent',
      'model'=>App\Models\Geral::class,
     ],
      'biblioteca'=>[
         'driver'=>'eloquent',
         'model'=>App\Models\Biblioteca::class,
     ],
     'gabinete_psicopedagogo'=>[
      'driver'=>'eloquent',
      'model'=>App\Models\Gabinete::class,
  ],

  'coordenacao'=>[
   'driver'=>'eloquent',
   'model'=>App\Models\Coordenador::class,
],

'tecnico'=>[
   'driver'=>'eloquent',
   'model'=>App\Models\Engenheiro::class,
],




    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'antigo'=>[
         'driver'=>'session',
         'provider'=>'antigo',
      ],

      
      'super'=>[
         'driver'=>'session',
         'provider'=>'super',
      ],

      'empresa'=>[
         'driver'=>'session',
         'provider'=>'empresa',
      ],

        'biblioteca'=>[
            'driver'=>'session',
            'provider'=>'biblioteca',
         ],

        'estudante'=>[
            'driver'=>'session',
            'provider'=>'estudante',
         ],
         'professor'=>[
            'driver'=>'session',
            'provider'=>'professor',
         ],
         'secretaria_administrativa'=>[
            'driver'=>'session',
            'provider'=>'secretaria_administrativa',
         ],
         'secretaria_pedagogica'=>[
            'driver'=>'session',
            'provider'=>'secretaria_pedagogica',
         ],
         'secretaria_geral'=>[
            'driver'=>'session',
            'provider'=>'secretaria_geral',
         ],
         'administracao'=>[
            'driver'=>'session',
            'provider'=>'administracao',
         ],
         'pedagogia'=>[
            'driver'=>'session',
            'provider'=>'pedagogia',
         ],
         'geral'=>[
            'driver'=>'session',
            'provider'=>'geral',
         ],

         'pais'=>[
            'driver'=>'session',
            'provider'=>'pais',
         ],

         'gabinete_psicopedagogo'=>[
            'driver'=>'session',
            'provider'=>'gabinete_psicopedagogo',
         ],
        
         'coordenacao'=>[
            'driver'=>'session',
            'provider'=>'coordenacao',
         ],

         'tecnico'=>[
            'driver'=>'session',
            'provider'=>'tecnico',
         ],
    
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],
        

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],

        'antigo'=>[
         'driver'=>'eloquent',
         'model'=>App\Models\Antigo::class,
      ],
      'super'=>[
         'driver'=>'eloquent',
         'model'=>App\Models\Super::class,
      ],
      'empresa'=>[
         'driver'=>'eloquent',
         'model'=>App\Models\Empresa::class,
      ],

      'estudante'=>[
        'driver'=>'eloquent',
        'model'=>App\Models\Estudante::class,
     ],
     'professor'=>[
        'driver'=>'eloquent',
        'model'=>App\Models\Professor::class,
     ],
     'secretaria_administrativa'=>[
        'driver'=>'eloquent',
        'model'=>App\Models\Secretario::class,
     ],

     'secretaria_pedagogica'=>[
      'driver'=>'eloquent',
      'model'=>App\Models\Secretario::class,
   ],

   'secretaria_geral'=>[
      'driver'=>'eloquent',
      'model'=>App\Models\Secretario::class,
   ],
     'administracao'=>[
        'driver'=>'eloquent',
        'model'=>App\Models\Administrativo::class,
     ],
     'pedagogia'=>[
        'driver'=>'eloquent',
        'model'=>App\Models\Pedagogia::class,
     ],
     'geral'=>[
      'driver'=>'eloquent',
      'model'=>App\Models\Geral::class,
     ],
      'biblioteca'=>[
         'driver'=>'eloquent',
         'model'=>App\Models\Biblioteca::class,
     ],

     'pais'=>[
      'driver'=>'eloquent',
      'model'=>App\Models\Pai::class,
  ],

  'gabinete_psicopedagogico'=>[
   'driver'=>'eloquent',
   'model'=>App\Models\Secretario::class,
],

'coordenacao'=>[
   'driver'=>'eloquent',
   'model'=>App\Models\Coordenador::class,
],
'tecnico'=>[
   'driver'=>'eloquent',
   'model'=>App\Models\Engenheiro::class,
],


   
   
    
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that each reset token will be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

        'antigo'=>[
         'driver'=>'eloquent',
         'model'=>App\Models\Antigo::class,
     ],

     'super'=>[
      'driver'=>'eloquent',
      'model'=>App\Models\Super::class,
  ],
     'empresa'=>[
      'driver'=>'eloquent',
      'model'=>App\Models\Empresa::class,
  ],

  'estudante'=>[
   'driver'=>'eloquent',
   'model'=>App\Models\Estudante::class,
],
'professor'=>[
   'driver'=>'eloquent',
   'model'=>App\Models\Professor::class,
],
'secretaria_administrativa'=>[
   'driver'=>'eloquent',
   'model'=>App\Models\Secretario::class,
],

'secretaria_pedagogica'=>[
   'driver'=>'eloquent',
   'model'=>App\Models\Secretario::class,
],

'secretaria_geral'=>[
   'driver'=>'eloquent',
   'model'=>App\Models\Secretario::class,
],
'administracao'=>[
   'driver'=>'eloquent',
   'model'=>App\Models\Administrativo::class,
],
'pedagogia'=>[
   'driver'=>'eloquent',
   'model'=>App\Models\Pedagogia::class,
],
'geral'=>[
 'driver'=>'eloquent',
 'model'=>App\Models\Geral::class,
],
 'biblioteca'=>[
    'driver'=>'eloquent',
    'model'=>App\Models\Biblioteca::class,
],

'pais'=>[
   'driver'=>'eloquent',
   'model'=>App\Models\Pais::class,
],

'gabinente_psicopedagogo'=>[
   'driver'=>'eloquent',
   'model'=>App\Models\Biblioteca::class,
],

'coordenacao'=>[
   'driver'=>'eloquent',
   'model'=>App\Models\Coordenador::class,
],
'tecnico'=>[
   'driver'=>'eloquent',
   'model'=>App\Models\Engenheiro::class,
],


         
      
         
      
     ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

];
