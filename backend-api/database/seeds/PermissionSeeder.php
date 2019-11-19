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
        
        Permission::create(['name' => 'crear pacientes']);
        Permission::create(['name' => 'ver pacientes']);
        Permission::create(['name' => 'editar pacientes']);
        Permission::create(['name' => 'borrar pacientes']);
        Permission::create(['name' => 'dar consulta']);

        
        Permission::create(['name' => 'gestionar usuarios']);
        Permission::create(['name' => 'realizar hemodialisis']);

        Permission::create(['name' => 'agendar citas']);
        Permission::create(['name' => 'editar citas']);
        Permission::create(['name' => 'borrar citas']);

        Permission::create(['name' => 'ver estadisticas']);
        Permission::create(['name' => 'ingresar formularios']);
        Permission::create(['name' => 'vista general']);

        Permission::create(['name' => 'crear usuarios']);


        // create roles and assign created permissions

        // this can be done as separate statements

        $roleAdmin = Role::create(['name' => 'superAdmin']);
        $roleAdmin->givePermissionTo(Permission::all());


        //dr
        $rolePro = Role::create(['name' => 'profesional']);
        $rolePro->givePermissionTo('realizar hemodialisis');
        $rolePro->givePermissionTo('ver pacientes');
        $rolePro->givePermissionTo('editar pacientes');
        $rolePro->givePermissionTo('crear pacientes');
        $rolePro->givePermissionTo('dar consulta');
        $rolePro->givePermissionTo('agendar citas');
        $rolePro->givePermissionTo('ingresar formularios');


        $role = Role::create(['name' => 'secretaria']);
        $role->givePermissionTo('agendar citas');
        $role->givePermissionTo('editar pacientes');
        $role->givePermissionTo('ver pacientes');
        $role->givePermissionTo('crear pacientes');
        $role->givePermissionTo('borrar pacientes');
        $role->givePermissionTo('vista general');
        


        $roleAssist = Role::create(['name' => 'asistente']);
        $roleAssist->givePermissionTo('agendar citas');
        $roleAssist->givePermissionTo('editar pacientes');
        $roleAssist->givePermissionTo('ver pacientes');
        $roleAssist->givePermissionTo('crear pacientes');
        $roleAssist->givePermissionTo('borrar pacientes');
        $roleAssist->givePermissionTo('realizar hemodialisis');

        $roleTec = Role::create(['name' => 'tecnico']);
        $roleTec->givePermissionTo('realizar hemodialisis');

        $roleVi =Role::create(['name' => 'visitante']);
        $roleVi->givePermissionTo('agendar citas');
        $roleVi->givePermissionTo('ingresar formularios');
        

    }
}   