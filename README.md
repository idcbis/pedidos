# Pedidos IDCBIS

## Mapa de proceso

<img src="http://idcbis.org.co/images/soft-pedidos/proceso.png"/></p>

## Estructura

### HomeController

<ul>
  <li>Si el usuario logueado es administrador</li>
  <li>Si el usuario logueado pertenece a una entidad pública
    <ul>
      <li>Si pertenece a entidad pública cargar el stock. Una sola vez por entidad</li>
    </ul>
  </li>
</ul>

### UserController


### ShippingController