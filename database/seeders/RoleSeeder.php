<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       $role1 =  Role::create(['name'=>'Admin']);
       $role2 =  Role::create(['name'=>'Empleado']);
       $role3 =  Role::create(['name'=>'Gerente']);
       
        // reportes
        Permission::create(['name'=>'reporte.index','descripcion'=>'ver dashboard'])->syncRoles([$role1,$role3]);
        Permission::create(['name'=>'reporte-pdf','descripcion'=>'descargar reporte'])->syncRoles([$role1,$role3]);

        // pedidos
        Permission::create(['name'=>'pedido.index','descripcion'=>'ver pedidos'])->syncRoles([$role1,$role3]);
        Permission::create(['name'=>'pedido.destroy','descripcion'=>'eliminar pedido'])->syncRoles([$role1]);

        

        // usuarios crud
        Permission::create(['name'=>'user.index','descripcion'=>'Listado de usuarios'])->syncRoles($role1);
        Permission::create(['name'=>'user.edit','descripcion'=>'Editar rol usuario'])->syncRoles($role1);
        Permission::create(['name'=>'user.update','descripcion'=>'Actualizar rol usuario'])->syncRoles($role1);

        // productos   sync
        Permission::create(['name'=>'productos.index','descripcion'=>'Listado de productos'])->syncRoles([$role1,$role3]);
        Permission::create(['name'=>'productos.create','descripcion'=>'Crear un producto'])->syncRoles([$role1,$role3]);
        Permission::create(['name'=>'productos.show','descripcion'=>'Ver producto'])->syncRoles([$role1,$role3]);
        Permission::create(['name'=>'productos.edit','descripcion'=>'Editar un producto'])->syncRoles([$role1,$role3]);
        Permission::create(['name'=>'productos.destroy','descripcion'=>'Eliminar un producto'])->syncRoles($role1);

       
        // Permission
        Permission::create(['name'=>'permission.index','descripcion'=>'Listado de permisos'])->syncRoles($role1);
        
      
        Permission::create(['name'=>'permission.show','descripcion'=>'Ver permisos'])->syncRoles($role1);
        Permission::create(['name'=>'permission.destroy','descripcion'=>'Eliminar un permiso'])->syncRoles($role1);
        Permission::create(['name'=>'permission.edit','descripcion'=>'Editar un permiso'])->syncRoles($role1);

        // Roles
        Permission::create(['name'=>'role.index','descripcion'=>'Ver roles'])->syncRoles($role1);
        //Permission::create(['nombre'=>'role.store','descripcion'=>''])->syncRoles($role1);
        Permission::create(['name'=>'role.create','descripcion'=>'Crear rol'])->syncRoles($role1);
        Permission::create(['name'=>'role.show','descripcion'=>'Ver rol'])->syncRoles($role1);
        //Permission::create(['nombre'=>'role.update','descripcion'=>''])->syncRoles($role1);
        Permission::create(['name'=>'role.destroy','descripcion'=>'Eliminar rol'])->syncRoles($role1);
        Permission::create(['name'=>'role.edit','descripcion'=>'Editar rol'])->syncRoles($role1);

        // Cart
        Permission::create(['name'=>'cart.cart','descripcion'=>'Ver catálogo'])->syncRoles($role2);
        Permission::create(['name'=>'cart.checkout','descripcion'=>'Ver carrito'])->syncRoles($role2);
   

        // compra

        Permission::create(['name'=>'cart.stripe','descripcion'=>'Realizar compra'])->syncRoles($role2);

    
        // Facturas
        Permission::create(['name'=>'cart.invoices','descripcion'=>'Realizar compra'])->syncRoles([$role2,$role3]);

        // CLIENTES CRUD
        Permission::create(['name'=>'client.index','descripcion'=>'ver clientes'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'client.create','descripcion'=>'agregar cliente'])->syncRoles([$role1,$role2,$role3]);



    }
}
