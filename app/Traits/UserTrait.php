<?php
namespace App\Traits;
trait UserTrait
{
    /**
     * collections of roles
     * 
     */
    
    public function hasAnyRole($roles)
     {
         if(is_array($roles))
         {
             foreach($roles as $role)
             {
                 if($this->hasRole($role))
                 {
                     return true;
                 }
             }
         }
         else
         {
             if($this->hasRole($roles))
             {
                 return true;
             }
         }
         return false;
     }
    

    /**
     * check only role
     */

    public function hasRole($role)
    {
        if($this->roles()->where('slug',$role)->first())
        {
            return true;
        }
        return false;
    }
}