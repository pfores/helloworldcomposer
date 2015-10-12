<?php

/**
 * Created by PhpStorm.
 * User: pau
 * Date: 12/10/15
 * Time: 22:02
 */
class BaseController extends Controller
{

    protected function setupLayout(
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View:make($this->layout);
        }
    }

}