<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;
class RoleTableSeeder extends Seeder
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

        $role_admin=new Role;
        $role_admin->name="Admin";
        $role_admin->slug=ucfirst("admin");
        $role_admin->description="This is Super-Admin Role";
        $role_admin->save();

        //$role_admin->permissions()->sync(array($permission_create,$permission_read,$permission_update,$permission_delete));
        
        $role_admin->permissions()->attach([$permission_create,$permission_read,$permission_update,$permission_delete]);


        $role_manager=new Role;
        $role_manager->name="Manager";
        $role_manager->slug=ucfirst("manager");
        $role_manager->description="This is Manager Role";
        $role_manager->save();

        //$role_admin->permissions()->sync(array($permission_create,$permission_read,$permission_update,$permission_delete));
        
        $role_manager->permissions()->attach([$permission_read,$permission_update]);

        $role_user=new Role;
        $role_user->name="User";
        $role_user->slug=ucfirst("user");
        $role_user->description="This is User Role";
        $role_user->save();

        //$role_admin->permissions()->sync(array($permission_create,$permission_read,$permission_update,$permission_delete));
        
        $role_user->permissions()->attach([$permission_read,$permission_create]);



    }
}
