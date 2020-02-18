<?php
namespace App\Http\Composers;

use Illuminate\View\View;

class HelloComposer
{
  public function compose(view $view)
  {
    $view->with('view_message','this view is "'. $view->getName() .'"!!');
  }
}