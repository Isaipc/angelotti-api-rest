<template>
    <div class="container">
        <table class="table table-bordered table-responsive">
            <thead class="text-uppercase">
                <th>id</th>
                <th>cuenta</th>
                <th>platillo</th>
                <th>direccion</th>
                <th>creado</th>
                <th>actualizado</th>
                <th></th>
            </thead>
            <tbody>
                <tr v-for="pedido in pedidos" :key="pedido.id">
                    <td>{{ pedido.id }}</td>
                    <td>{{  }}</td>
                    <td>{{  }}</td>
                    <td>{{  }}</td>
                    <td>{{ pedido.created_at }}</td>
                    <td>{{ pedido.updated_at }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <router-link :to="{name: 'edit', params: { id: pedido.id }}" class="btn btn-info">
                                Editar
                            </router-link>
                            <button class="btn btn-danger" @click="deleteCategoria(pedido.id)">Eliminar</button>
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
                pedidos: []
            }
        },
        created() {
            this.axios.get('https://angelotti.herokuapp.com/api/pedidos')
            .then( response => {
                this.pedidos = response.data;
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
