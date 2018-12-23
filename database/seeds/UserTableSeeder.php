<?php

use App\Role;
use App\User;
use App\Permission;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission_create =Permission::where('slug','Create')->first()->id;
        $permission_read   =Permission::where('slug','Read')->first()->id;
        $permission_update =Permission::where('slug','Update')->first()->id;
        $permission_delete =Permission::where('slug','Delete')->first()->id;

        $role_admin   =Role::where('slug','Admin')->first()->id;
        $role_manager =Role::where('slug','Manager')->first()->id;
        $role_user    =Role::where('slug','User')->first()->id;

        $user_admin=new User;
        $user_admin->name="ADMIN";
        $user_admin->email="admin@example.com";
        $user_admin->password=bcrypt("admin");
        $user_admin->save();

        $user_admin->roles()->sync([$role_admin,$role_manager,$role_user]);
        #time based given permissions to user...
        $user_admin->permissions()->sync([$permission_create=>['time_start'=>date('Y-m-d H:i:s'),'time_end'=>date('Y-m-d H:i:s',strtotime('+5 hours'))]]);
        //https://www.sitepoint.com/what-are-polymorphic-relations-and-how-do-we-use-them-with-eloquent/
        $user_admin->roles_access()->sync([$role_admin,$role_manager,$role_user]);
        

        $user_manager=new User;
        $user_manager->name="Manager";
        $user_manager->email="manager@example.com";
        $user_manager->password=bcrypt("manager");
        $user_manager->save();

        $user_manager->roles()->sync([$role_manager]);


        $user=new User;
        $user->name="USER";
        $user->email="user@example.com";
        $user->password=bcrypt("user");
        $user->save();

        $user->roles()->sync([$role_user]);

    }
}
