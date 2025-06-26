<?php
namespace Zxkiller\OAuth2\Client\Grant\MiniProgram;

class AuthorizationCode extends \League\OAuth2\Client\Grant\AuthorizationCode
{
    protected function getRequiredRequestParameters()
    {
        return [
            'js_code',
        ];
    }
}
