<?php

namespace App\Exceptions;

use Exception;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        HttpException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
        return parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {

		if($this->isHttpException($e))
		{
			switch ($e->getStatusCode()) {
				// not found
				case 404:
					 \Session::flash('flashMessage', 'Sorry, that page was not found');
					return redirect()->guest('/');
					break;

				// internal error
				case '500':
					 \Session::flash('flashMessage', 'Sorry, an internal server error occured');
					return redirect()->guest('/');
					break;

				default:
					return $this->renderHttpException($e);
					break;
			} // End of switch statement
        } // End of 404 and 50x exception handling
		else
		{return parent::render($request, $e);}
	} // End of render function
} // ENd of handler class
