import CategoriaList from './components/categorias/List.vue';
import PlatilloList from './components/platillos/List.vue';
import CuentaList from './components/cuentas/List.vue';
import PedidoList from './components/pedidos/List.vue';

export const routes = [
    {
        name:'home',
        path: '/',
        component: PedidoList
    },
    {
        name: 'categorias',
        path: '/categorias',
        component: CategoriaList
    },
    {
        name: 'platillos',
        path: '/platillos',
        component: PlatilloList
    },
    {
        name: 'pedidos',
        path: '/pedidos',
        component: PedidoList
    },
    {
        name: 'cuentas',
        path: '/cuentas',
        component: CuentaList
    }
];
