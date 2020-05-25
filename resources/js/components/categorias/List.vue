<template>
    <div class="container">
        <table class="table table-bordered table-responsive">
            <thead class="text-uppercase">
                <th>id</th>
                <th>categoria</th>
                <th>creado</th>
                <th>actualizado</th>
                <th></th>
            </thead>
            <tbody>
                <tr v-for="categoria in categorias" :key="categoria.id">
                    <td>{{ categoria.id }}</td>
                    <td>{{ categoria.nombre }}</td>
                    <td>{{ categoria.created_at }}</td>
                    <td>{{ categoria.updated_at }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <router-link :to="{name: 'edit', params: { id: categoria.id }}" class="btn btn-info">
                                Editar
                            </router-link>
                            <button class="btn btn-danger" @click="deleteCategoria(categoria.id)">Eliminar</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default{
        data() {
            return {
                categorias: []
            }
        },
        created() {
            this.axios.get('https://angelotti.herokuapp.com/api/categorias')
            .then( response => {
                this.categorias = response.data;
            });
        },
        methods: {
            deleteCategoria(id) {
                this.axios.delete('')
                .then( response => {
                    //delete?
                });
            }
        }
    }
</script>
