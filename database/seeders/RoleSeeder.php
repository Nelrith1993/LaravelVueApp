<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //Creamos los roles

        $role_admin = Role::create(['name' => 'admin']);
        $role_editor = Role::create(['name' => 'editor']);

        //creamos los permisos

        $permission_create_role = Permission::create(['name' => 'create roles']);
        $permission_read_role = Permission::create(['name' => 'read roles']);
        $permission_update_role = Permission::create(['name' => 'update roles']);
        $permission_delete_role = Permission::create(['name' => 'delete roles']);

        $permission_create_product = Permission::create(['name' => 'create products']);
        $permision_read_product = Permission::create(['name' => 'read products']);
        $permision_update_product = Permission::create(['name' => 'update products']);
        $permision_delete_product = Permission::create(['name' => 'delete products']);

        $permission_create_category = Permission::create(['name' => 'create categories']);
        $permision_read_category = Permission::create(['name' => 'read categories']);
        $permision_update_category = Permission::create(['name' => 'update categories']);
        $permision_delete_category = Permission::create(['name' => 'delete categories']);

        //creamos array de permisos para cada rol
        $permissions_admin = [$permission_create_role, $permission_read_role, $permission_update_role, $permission_delete_role, $permission_create_product, $permision_read_product, $permision_update_product, $permision_delete_product, $permission_create_category, $permision_read_category, $permision_update_category, $permision_delete_category];

        $permissions_editor = [$permission_create_product, $permision_read_product, $permision_update_product, $permision_delete_product, $permission_create_category, $permision_read_category, $permision_update_category, $permision_delete_category];

        //asignamos permisos a los roles
        $role_admin->syncPermissions($permissions_admin);
        $role_editor->syncPermissions($permissions_editor);
    }
}
