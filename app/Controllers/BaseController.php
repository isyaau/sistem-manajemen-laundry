<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */

class BaseController extends Controller
{
	/**
	 * Instance of the main Request object.
	 *
	 * @var IncomingRequest|CLIRequest
	 */
	protected $request;

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];

	/**
	 * Constructor.
	 *
	 * @param RequestInterface  $request
	 * @param ResponseInterface $response
	 * @param LoggerInterface   $logger
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.: $this->session = \Config\Services::session();
		session();
		$this->akunModel = new \App\Models\AkunModel();
		$this->suplierModel = new \App\Models\SuplierModel();
		$this->userModel = new \App\Models\UserModel();
		$this->pemasukanModel = new \App\Models\PemasukanModel();
		$this->pengeluaranModel = new \App\Models\PengeluaranModel();
		$this->suplierModel = new \App\Models\SuplierModel();
		$this->userModel = new \App\Models\UserModel();
		$this->kiloanModel = new \App\Models\KiloanModel();
		$this->satuanModel = new \App\Models\SatuanModel();
		$this->meteranModel = new \App\Models\MeteranModel();
		$this->kasModel = new \App\Models\KasModel();
		$this->jurnalumumModel = new \App\Models\JurnalumumModel();
		$this->neracaModel = new \App\Models\NeracaModel();
		$this->labarugiModel = new \App\Models\LabarugiModel();
		
		
	}
}