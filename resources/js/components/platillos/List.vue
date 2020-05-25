<template>
    <div class="container">
        <table class="table table-bordered table-responsive">
            <thead class="text-uppercase">
                <th>id</th>
                <th>platillo</th>
                <th>precio</th>
                <th>categoría</th>
                <th>creado</th>
                <th>actualizado</th>
                <th></th>
            </thead>
            <tbody>
                <tr v-for="platillo in platillos" :key="platillo.id">
                    <td>{{ platillo.id }}</td>
                    <td>{{ platillo.nombre }}</td>
                    <td>{{ platillo.precio }}</td>
                    <td>{{ platillo.categoria_id }}</td>
                    <td>{{ platillo.created_at }}</td>
                    <td>{{ platillo.updated_at }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <router-link :to="{name: 'edit', params: { id: platillo.id }}" class="btn btn-info">
                                Editar
                            </router-link>
                            <button class="btn btn-danger" @click="deleteCategoria(platillo.id)">Eliminar</button>
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
                platillos: []
            }
        },
        created() {
            this.axios.get('https://angelotti.herokuapp.com/api/platillos')
            .then( response => {
                this.platillos = response.data;
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
