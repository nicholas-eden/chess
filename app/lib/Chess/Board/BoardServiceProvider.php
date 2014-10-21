<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 10/20/14
 * Time: 9:08 PM
 */

namespace Chess\Board;


use Illuminate\Support\ServiceProvider;

class BoardServiceProvider extends ServiceProvider {

    public function register() {

        $this->app->singleton('Board', function($obj, $params){
            //todo: implement loading from cache
            $board = new Board();

            return $board;
        });

    }

} 