<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Closure;

class Bosh
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;

    }

    public function handle($request, Closure $next)
    {   
        switch ($this->auth->user()->rol_id) {
            case '2':
                return redirect()->to('/');
                break;
 
             case '3':
                return redirect()->to('/');
                break;
            
            case '4':
                return redirect()->to('/');
                break;
            
            case '5':
                return redirect()->to('/');
                break;

            default:
                # code...
                break;
        }

        return $next($request);
    }
}
