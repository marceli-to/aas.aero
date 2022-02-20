<?php
namespace App\View\Components;
use Illuminate\View\Component;

class Mailto extends Component
{
  public $email;

  public function __construct($email = NULL)
  {
    $this->email = $email;
  }

  public function render()
  {
    return view('web.components.content.mailto');
  }
}
