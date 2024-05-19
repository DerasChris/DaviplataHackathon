<div id="menu">
    <div class="menu-header">
        <div class="menu-btn">
            <i class="fa fa-bars fa-2x"></i>
        </div>
        <a href="#">
            <span>DAVIPLATA</span><br>
            <span>Ultima Sesion: {{ date('Y-m-d H:i:s') }}</span>
        </a>
    </div>
    <div class="menu-group">
        <div class="menu-item">
            <span >Consultar saldos</span>
        </div>
    </div>
    <div class="menu-group">
        <div class="menu-item">
            <span >Actualizar documentos</span>
        </div>
    </div>
    <div class="menu-group">
        <div class="menu-item">
            <span >Agregar o modificar</span>
        </div>
    </div>
    <div class="menu-group">
        <div class="menu-item">
            <span >Datos personales</span>
        </div>
    </div>
    <div class="menu-group">
        <div class="menu-item">
            <span >Encontrar un Cajero</span>
        </div>
    </div>
    <div class="menu-group">
        <div class="menu-item">
            <span><a href="{{ route('custom.login') }}" class="menufx">Pago unversidad</a></span>
            <div class="new-functionality-badge">Nueva</div>
        </div>
    </div>
    <div class="menu-group">
        <div class="menu-item">
        <span><a href="{{ route('davinegocios') }}" class="menufx">Davi negocios</a></span>
            <div class="new-functionality-badge">Nueva</div>
        </div>
    </div>
    <div class="menu-group">
        <div class="menu-item">
            <span >Activar Tecla de la Casita</span>
        </div>
    </div>
    <div class="menu-group">
        <div class="menu-item">
            <span >Transacciones QR</span>
        </div>
    </div>
    <div class="menu-group">
        <div class="menu-item">
            <span >Cerrar sesion</span>
        </div>
    </div>
    <div class="menu-group">
        <div class="menu-item">
            <span >Inidicaciones</spa>
        </div>
    </div>
</div>