<?php

use Illuminate\Database\Seeder;
use Kodeine\Acl\Models\Eloquent\Role;
use Kodeine\Acl\Models\Eloquent\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $permission = new Permission();
        $permAdmin = $permission->create([
            'name' => 'administrador',
            'slug' => [
                'create'    => true,
                'view'      => true,
                'update'    => true,
                'delete'    => true
            ],
            'description' => 'los permisos del admin'
        ]);
        $permAdmin->save();

        $roleAdmin = Role::where('slug', 'administrador')->first();
        $roleAdmin->assignPermission('administrador');
    }
}
