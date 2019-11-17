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
        Permission::create(['name' => 'realizar hemodialisis']);
        Permission::create(['name' => 'crear pacientes']);
        Permission::create(['name' => 'editar citas']);
        Permission::create(['name' => 'borrar citas']);

        // create roles and assign created permissions

        // this can be done as separate statements

        $roleAdmin = Role::create(['name' => 'superAdmin']);
        $roleAdmin->givePermissionTo(Permission::all());



        $roleTec = Role::create(['name' => 'tecnico']);
        $roleTec->givePermissionTo('realizar hemodialisis');
        $roleTec->givePermissionTo('ver pacientes');



        $roleDr = Role::create(['name' => 'doctor']);
        $roleDr->givePermissionTo('ver pacientes');
        $roleDr->givePermissionTo('editar pacientes');
        $roleDr->givePermissionTo('agendar citas');


        $role = Role::create(['name' => 'secretaria']);
        $role->givePermissionTo('agendar citas');
        $role->givePermissionTo('editar pacientes');
        $role->givePermissionTo('ver pacientes');

        
        

    }
}