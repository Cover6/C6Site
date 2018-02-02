<?php
    //Build configuration array
    $config = [
        //Location where to redirect users once they authenticate with Discord
        //For this example we choose to come back to this same script
        'callback' => 'Hybridauth\HttpClient\Util::getCurrentUrl()',

        //Discord client credentials
        'keys' => [
            'id'     => '408756068244520970', //Required: your Discord client id
            'secret' => 'nnE3WjYfDFhclK3cdBFSr2_0gmQjeqGS'  //Required: your Discord client secret 
        ]
    ];

    try {
        //Instantiate Discord's adapter directly
        $discord = new Hybridauth\Provider\Discord($config);

        //Attempt to authenticate the user with Discord
        $discord->authenticate();

        //Returns a boolean of whether the user is connected with Discord
        $isConnected = $discord->isConnected();
    
        //Retrieve the user's profile
        $userProfile = $discord->getUserProfile();

        //Inspect profile's public attributes
        var_dump($userProfile);

        //Disconnect the adapter 
        $discord->disconnect();
    }
    catch(\Exception $e){
        echo 'Oops, we ran into an issue! ' . $e->getMessage();
    }
?>    