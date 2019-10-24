<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class PermissionSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'ver pacientes']);
        Permission::create(['name' => 'agendar citas']);
        Permission::create(['name' => 'crear usuarios']);
        Permission::create(['name' => 'editar pacientes']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'secretaria']);
        $role->givePermissionTo('ver pacientes');
        $role->givePermissionTo('agendar citas');

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());

    }
}