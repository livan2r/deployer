<?php

namespace Livan2r\Deployer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Livan2r\Deployer\Facades\Deployer;

class DeployerController extends Controller
{
    /**
     * To process the deploy request coming from Github
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public function deploy(Request $request)
    {
        Deployer::deploy($request->get('payload', $request->getContent()));

        return response('OK', 200)
            ->header('Content-Type', 'text/plain');
    }

}
