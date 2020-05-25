<template>
    <div class="container">
        <!-- <div class="text-center my-5">
            <span class="h3 text-info">Panel de control</span>
        </div>-->
        <div class="row">
            <nav id="sidebar" class="vertical-nav navbar-dark bg-dark pl-2">
                <p class="text-gray font-weight-bold text-uppercase small mb-0 pt-2">Catalogos</p>

                <ul class="navbar-nav flex-column">
                    <li class="nav-item active">
                        <router-link to="/" class="nav-link">Inicio</router-link>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="dropdownId" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Categorias</a>

                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <router-link to="/categorias" class="dropdown-item">Lista</router-link>
                            <router-link to="/categorias/nuevo" class="dropdown-item">Agregar</router-link>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="dropdownId" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Platillos</a>

                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <router-link to="/platillos" class="dropdown-item">Lista</router-link>
                            <router-link to="/platillos/nuevo" class="dropdown-item">Agregar</router-link>
                        </div>
                    </li>
                    <router-link to="/pedidos" class="nav-item nav-link">Pedidos</router-link>
                    <router-link to="/cuentas" class="nav-item nav-link">Cuentas</router-link>
                </ul>
            </nav>

            <div id="content" class="page-content">
                <button id="sidebar-collapse" type="button"
                    class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4">
                    <i class="fa fa-bars mr-2"></i>
                    <small class="text-uppercase font-weight-bold">Toggle</small>
                </button>

                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>
