<template lang="">
    <div>
        <div class="row">
            <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3">nombre</div>
            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6"> <input class="form-control" type='text' v-model="nombre"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6 col-sm-push-3 col-xs-push-3 col-md-push-3 col-lg-push-3" @click="create()"><button type="submit" class="btn btn-xs btn-primary form-control">Crear nuevo</button></div>
        </div>

        <br>
        <br>

        <div class="table table-striped">
            <div class="row">
                <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2"><b>Nombre</b></div>
                <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2"><b>Acciones</b></div>
            </div>
            <div class="row" v-for="tipo in tipos">
                <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2">{{tipo.nombre}}</div>
                <a @click="eliminar(tipo)" class="btn btn-xs btn-danger"> Eliminar </a> 
                <a @click="modal(tipo)" data-toggle="modal" data-target="#myModal" class="btn btn-xs btn-primary"> Modificar </a> 
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
                        <input class="form-control" type="text" v-model="tipo.nombre">
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
            tipos   : [],
            nombre  : '',
            tipo    : '',
        }
    },
    created(){
        this.fetch()
    },
    methods: {
        fetch(){
            axios.get('./tipos_analisis/index').then(response=>{
                console.log(response.data.data);
                this.tipos = response.data.data;
                // filteredResources(this.tipos);
            })
        },
        modal(tipo){
            this.tipo = tipo;
        },
        update(){
            axios.post('./tipos_analisis/index/'+this.tipo.id,{
                'nombre' : this.tipo.nombre,
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
            axios.post('./tipos_analisis/index', formData)
            
            .then(response=>{
                this.nombre         = '';
                miniToastr.success(response.msg, 'Creado!');
                this.fetch();
                },

            )
        },
        eliminar(tipo){
            // console.log(tipo);
            // console.log(tipo.id);
            if(confirm('Seguro que quiere eliminar el tipo?')){
                axios.post('./tipos_analisis/index/'+this.tipo.id,{
                    'id'     : tipo.id,
                    '_method': 'DELETE',
                }
    
                ).then(
                    this.tipos.splice(this.tipos.indexOf(tipo), 1)
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