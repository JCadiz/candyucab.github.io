<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');

        // creacion de permisos CRUD
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'read users']);
        Permission::create(['name' => 'update users']);
        Permission::create(['name' => 'delete users']);

        Permission::create(['name' => 'create role']);
        Permission::create(['name' => 'read role']);
        Permission::create(['name' => 'update role']);
        Permission::create(['name' => 'delete role']);

        Permission::create(['name' => 'create permission']);
        Permission::create(['name' => 'read permission']);
        Permission::create(['name' => 'update permission']);
        Permission::create(['name' => 'delete permission']);

        Permission::create(['name' => 'create carnet']);
        Permission::create(['name' => 'read carnet']);
        Permission::create(['name' => 'update carnet']);
        Permission::create(['name' => 'delete carnet']);

        Permission::create(['name' => 'create points']);
        Permission::create(['name' => 'read points']);
        Permission::create(['name' => 'update points']);
        Permission::create(['name' => 'delete points']);

        Permission::create(['name' => 'create tienda']);
        Permission::create(['name' => 'read tienda']);
        Permission::create(['name' => 'update tienda']);
        Permission::create(['name' => 'delete tienda']);

        Permission::create(['name' => 'create oferta']);
        Permission::create(['name' => 'read oferta']);
        Permission::create(['name' => 'update oferta']);
        Permission::create(['name' => 'delete oferta']);

        Permission::create(['name' => 'create producto']);
        Permission::create(['name' => 'read producto']);
        Permission::create(['name' => 'update producto']);
        Permission::create(['name' => 'delete producto']);

        $role = Role::create(['name' => 'vendedor']);
        $role->givePermissionTo(['create users','read users', 'create carnet', 'read carnet','update carnet']);

        $role = Role::create(['name' => 'gerente']);
        $role->givePermissionTo([
            'create users', 'read users','update users',
            'create carnet', 'read carnet','update carnet',
            'read points', 'read tienda', 'update tienda',
            'create oferta','read oferta','update oferta','delete oferta',
            'create producto','read producto','update producto','delete producto'
            ]);

        $role = Role::create(['name' => 'cliente']);
        $role->givePermissionTo(['read carnet', 'read points', 'read producto','read oferta']);

        $role = Role::create(['name' => 'dueño']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());
    }
}
