<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission_create= new Permission();
        $permission_create->name="Create";
        $permission_create->slug=ucfirst("create");
        $permission_create->description="This is basic Create Permission";
        $permission_create->save();

        $permission_read= new Permission();
        $permission_read->name="Read";
        $permission_read->slug=ucfirst("read");
        $permission_read->description="This is basic read Permission";
        $permission_read->save();

        $permission_update= new Permission();
        $permission_update->name="Updated";
        $permission_update->slug=ucfirst("update");
        $permission_update->description="This is basic update Permission";
        $permission_update->save();

        $permission_delete= new Permission();
        $permission_delete->name="Delete";
        $permission_delete->slug=ucfirst("delete");
        $permission_delete->description="This is basic delete Permission";
        $permission_delete->save();


    }
}
