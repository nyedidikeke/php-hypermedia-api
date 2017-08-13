<?php
namespace Solvire\API\JSONSchema;

/**
 * Represents the list of Auth types that can be presented by this schema.
 *
 * The Auth itself should have the scopes or their reference
 *
 * @author solvire <info@scotttactical.com>
 * @package JSONSchema
 * @namespace Solvire\API\JSONSchema
 */
class Auth
{

    protected $authCollection = null;

    public function __construct()
    {}

    public function addAuthType(AuthType $auth)
    {
        $this->authCollection[$auth] = $auth;
    }
}