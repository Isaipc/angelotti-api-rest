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
                <tr v-for="cuenta in cuentas" :key="cuenta.id">
                    <td>{{ cuenta.id }}</td>
                    <td>{{  }}</td>
                    <td>{{  }}</td>
                    <td>{{  }}</td>
                    <td>{{ cuenta.created_at }}</td>
                    <td>{{ cuenta.updated_at }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <router-link :to="{name: 'edit', params: { id: cuenta.id }}" class="btn btn-info">
                                Editar
                            </router-link>
                            <button class="btn btn-danger" @click="deleteCategoria(cuenta.id)">Eliminar</button>
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
                cuentas: []
            }
        },
        created() {
            this.axios.get('https://angelotti.herokuapp.com/api/cuentas')
            .then( response => {
                this.cuentas = response.data;
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
