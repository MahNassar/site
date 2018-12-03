<?php

return array(
    /*
    |--------------------------------------------------------------------------
    | App ID
    |--------------------------------------------------------------------------
    |
    | Facebook App ID
    | https://developers.facebook.com/docs/graph-api/reference/application
    |
    */
    'app-id' => '622186378197357',

    /*
    |--------------------------------------------------------------------------
    | App secret
    |--------------------------------------------------------------------------
    |
    | Your app secret
    |
    */
    'app-secret' => '83ae9805b453b75fa29cfabb00f44c70',

    /*
    |--------------------------------------------------------------------------
    | Page permanent access token
    |--------------------------------------------------------------------------
    |
    | Your page's permanent access token
    |
    | See here on how to obtain a permanent access token for your facebook page:
    | https://stackoverflow.com/questions/12168452/long-lasting-fb-access-token-for-server-to-pull-fb-page-info
    |
    */

    'access-token' => 'EAAI14A4OeW0BANWW4ZCVNowGVqJyKv9tWaOgZAnfNIU5Ep4gC1vRjc1FxI8poBmISvs4EGTniIDCqdLOE7IO8St8XyMGFITK96OcR6E6dd0lfs8v2kDdKGjlCz6Uhp1ONbiNrTdUig7IJDc14THKt8yII81VnmQtkenjfH0dMxJMZCDyCgDLEKnMnHVxc3iDjcfHX3JwCG9AmT7sY0ZC3G9WDv5jwV8ZD',

    /*
    |--------------------------------------------------------------------------
    | Page ID
    |--------------------------------------------------------------------------
    |
    | Your page's Id
    |
    */

    'page-id' => '1611992405704557',

    /*
    |--------------------------------------------------------------------------
    | API call limit per query
    |--------------------------------------------------------------------------
    |
    | The maximum number of API calls one query is allowed to make
    | This applies to queries made to get data from extended period of time. For example: if you make a query
    | with a date range of over 92 days, it will split the query in several API calls that each fetch a part of
    | the date range. (93 days is the date range limit on the Facebook Graph API)
    |
    */

    'api-call-max' => 15,

    /*
    |--------------------------------------------------------------------------
    | Cache lifetime
    |--------------------------------------------------------------------------
    |
    | The amount of time (in minutes) Graph API responses will be cached.
    | If you set this to zero, the responses won't be cached at all.
    |
    */

    'cache-lifetime' => 60 * 24,
);