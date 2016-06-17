require.config({
    urlArgs: "bust=" + (new Date()).getTime(),
    //baseUrl:'scripts',
    paths:{
        //"jquery":["http://code.jquery.com/jquery-1.10.2.min.js","vendor/jquery/dist/jquery"],
        "jquery":"vendor/jquery/dist/jquery.min",
        //"gmap":"https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places&language=ro",
        "gmap":"http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places",

    },
    shim:{
        "jquery":{
            exports: '$'
        }

    }
});