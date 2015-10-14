<?php
namespace Solvire\API\Exceptions;

/**
 * Throws a 400
 * When something like a system error occures but we just need to blame it on someone so the client gets it.
 *
 *
 * @author solvire <stevenjscott@gmail.com>
 * @package API
 * @namespace Solvire\API\Exceptions
 */
class ConditionalFailureException extends APIException
{

    /**
     *
     * @param string $message            
     * @param \Exception $previous            
     * @param array $errors            
     */
    public function __construct($message, $previous = null, array $errors = [])
    {
        parent::__construct($message, 400, $previous, $errors);
    }
}
