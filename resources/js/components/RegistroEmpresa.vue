<template lang="">
    <div>
        <div class="row">
            <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3">nombre</div>
            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6"> <input class="form-control" type='text' v-model="nombre"></div>
        </div>
        <div class="row">
            <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3">rut</div>
            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6"> <input class="form-control" type='text' v-model="rut"></div>
        </div>
        <div class="row">
            <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3">direccion</div>
            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6"> <input class="form-control" type='text' v-model="direccion"></div>
        </div>
        <div class="row">
            <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3">nombre contacto</div>
            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6"> <input class="form-control" type='text' v-model="nombre_contacto"></div>
        </div>
        <div class="row">
            <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3">rut contacto</div>
            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6"> <input class="form-control" type='text' v-model="rut_contacto"></div>
        </div>
        <div class="row">
            <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3">direccio contacto</div>
            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6"> <input class="form-control" type='text' v-model="direccio_contacto"></div>
        </div>
        <div class="row">
            <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3">email</div>
            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6"> <input class="form-control" type='text' v-model="email"></div>
        </div>
        <div class="row">
            <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3">telefono</div>
            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6"> <input class="form-control" type='text' v-model="telefono"></div>
        </div>

        <br>
        <br>

        <div class="table table-striped">
            <div class="row">
                <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2"><b>Nombre</b></div>
                <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2"><b>Rut</b></div>
                <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2"><b>direccion</b></div>
                <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2"><b>nombre contacto</b></div>
                <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2"><b>rut contacto</b></div>
                <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2"><b>direccio contacto</b></div>
                <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2"><b>email</b></div>
                <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2"><b>telefono</b></div>
                <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2"><b>Acciones</b></div>
            </div>
            <div class="row" v-for="empresa in empresas">
                <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2">{{empresa.nombre}}</div>
                <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2">{{empresa.rut}}</div>
                <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2">{{empresa.direccion}}</div>
                <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2">{{empresa.nombre_contacto}}</div>
                <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2">{{empresa.rut_contacto}}</div>
                <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2">{{empresa.direccio_contacto}}</div>
                <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2">{{empresa.email}}</div>
                <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2">{{empresa.telefono}}</div>
                <a @click="eliminar(empresa)" class="btn btn-xs btn-danger"> Eliminar </a> 
                <a @click="modal(empresa)" data-toggle="modal" data-target="#myModal" class="btn btn-xs btn-primary"> Modificar </a> 
            </div>
        </div>
        <!-- Trigger the modal with a button -->

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Editar Usuario</h4>
            </div>
            <div class="modal-body">
                
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <b>Nombre:</b>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <input class="form-control" type="text" v-model="empresa.nombre">
                    </div>
                </div>



            </div> <!-- Fin del modal body-->
            <div class="modal-footer">
            <button type="button" @click="update()" class="btn btn-info btn-lg" data-dismiss="modal">Guardar</button>
            </div>
            </div>

        </div>
        </div>

    </div>
</template>
<script>
import miniToastr from 'mini-toastr';
miniToastr.init();

export default {
    mounted(){
        console.log('componente montado con éxito')
    },
    data(){
        return{
            empresas   : [],
            nombre  : '',
            rut  : '',
            categoria  : '',
            empresa    : '',
        }
    },
    created(){
        this.fetch()
    },
    methods: {
        fetch(){
            axios.get('./empresas/index').then(response=>{
                console.log(response.data.data);
                this.empresas = response.data.data;
                // filteredResources(this.empresas);
            })
        },
        modal(empresa){
            this.empresa = empresa;
        },
        update(){
            axios.post('./empresas/index/'+this.empresa.id,{
                'nombre' : this.empresa.nombre,
                'rut' : this.empresa.nombre,
                'categoria' : this.empresa.nombre,
                '_method': 'PATCH',
            }

            ).then(response=>{
                miniToastr.success(response.msg, 'Actualizado');
            }
            )
            .catch(error=>{
                if(error.response.status == 422){
                    miniToastr.error('No ingrese valores vacíos', 'Error');
                }else{
                    miniToastr.error(error, 'Error');
                }
                console.log(error)
                console.log(error.response.status)
            })
        },
        create(){
            // e.preventDefault();
            let settings = { headers: { 'cache-control'   : 'no-cache',
                'content-type'    : 'multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW',
                'Accept'          : 'application/json' } };
            var formData = new FormData();
            formData.append('nombre',this.nombre);
            formData.append('rut',this.rut);
            formData.append('categoria',this.categoria);
            axios.post('./empresas/index', formData)
            
            .then(response=>{
                this.nombre         = '';
                this.rut         = '';
                this.categoria         = '';
                miniToastr.success(response.msg, 'Creado!');
                this.fetch();
                },

            )
        },
        eliminar(empresa){
            // console.log(empresa);
            // console.log(empresa.id);
            if(confirm('Seguro que quiere eliminar el empresa?')){
                axios.post('./empresas/index/'+this.empresa.id,{
                    'id'     : empresa.rut,
                    '_method': 'DELETE',
                }
    
                ).then(
                    this.empresas.splice(this.empresas.indexOf(empresa), 1)
                ).catch(error=>{
                if(error.response.status == 422){
                    miniToastr.error('No ingrese valores vacíos', 'Error');
                }
                // else{
                //     miniToastr.error(error, 'Error');
                // }
                // console.log(error)
                // console.log(error.response.status)
            })
            }
        },
    }
}
</script>
<style>
    div.row:nth-child(even) {
  background-color: #d3deff !important;
}
</style>