<?php
use ZendServerGateway\Controller\AbstractActionController;

class RPCServices extends AbstractActionController
{

    /**
     * At this point you would replace the code below with whatever
     * authentication scheme you needed -- e.g., validate against a database or
     * otherwise. This login action *should* reference the src/Service/AuthenticationService::validateToken function.
     *
     * @return multitype:string
     */
    public function postLoginAction ()
    {
        $email = $this->bodyParam('email');
        $password = $this->bodyParam('password');

        if ($email == "you@example.com") {
            return array(
                    'status' => 'authenticated'
            );
        } else {
            return array(
                    'status' => 'invalid email'
            );
        }
    }

    public function getLAction ()
    {
        return array(
                "Server is live."
        );
    }
}

?>