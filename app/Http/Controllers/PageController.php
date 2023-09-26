<?php
namespace App\Http\Controllers;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class PageController extends BaseController
{
  protected $viewPath = 'web.pages.';

  public function __construct()
  {
    parent::__construct();
  }

  /**
   * Page: 'Home'
   * @return \Illuminate\Http\Response
   */

  public function index()
  { 
    return view($this->viewPath . 'home');
  }

  /**
   * Page: 'Stations'
   * @return \Illuminate\Http\Response
   */

  public function stations()
  { 
    return view($this->viewPath . 'stations');
  }

  /**
   * Page: 'Contacts'
   * @return \Illuminate\Http\Response
   */

  public function contacts()
  { 
    return view($this->viewPath . 'contacts');
  }

  /**
   * Page: 'Career'
   * @return \Illuminate\Http\Response
   */

  public function career()
  { 
    return view($this->viewPath . 'career');
  }

  /**
   * Page: 'Privacy Policy'
   * @return \Illuminate\Http\Response
   */

   public function privacy()
   { 
     return view($this->viewPath . 'privacy');
   }

}
