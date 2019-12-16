<?php

namespace App\Traits;

use App\Friendship;

/**
 * 
 */
trait Friend
{

    public function addfriend($id) {
        $Friendship = Friendship::create( [

            'requester' => $this->id,
            'user_requested' => $id,

            
        ]);

        if($Friendship) {
            return $Friendship;
        }

        return 'failed';
    }
}


