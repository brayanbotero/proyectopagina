<div class="header-content container" id="informacion">
            <div class="header-txt">
                <h1>Sabor & Café</h1>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Rem hic, est deleniti quae nobis error reiciendis soluta ullam fugiat
                    fugit quis quo officiis iste sequi voluptate repellendus ad sint suscipit?
                </p>
                <a href="#informacion" class="btn-1">informacion</a>
            </div>
            <div class="header-img">
                <img src="./assets/images/left.png" alt="">
            </div>
        </div>
    </header>
    <section class="about container" id="nosotros">
    <div class="about-img">
        <img src="./assets/images/about.png" alt="">
    </div>
    <div class="about-txt">
        <h2>Nosotros</h2>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Quia excepturi delectus hic eos error voluptatibus dicta laborum neque quisquam dolores quam blanditiis unde asperiores, a animi eius.
            Omnis, animi corporis.
        </p>
        <br>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Quia excepturi delectus hic eos error voluptatibus dicta laborum neque quisquam dolores quam blanditiis unde asperiores, a animi eius.
            Omnis, animi corporis.
        </p>
    </div>
</section>

<main class="servicios" id="servicios">
    <h2>Servicios</h2>
    <div class="servicios-content container">
        <div class="servicio-1">
            <i class="fa-solid fa-wifi"></i>
            <h3>Wi-Fi gratis</h3>
        </div>
        <div class="servicio-1">
            <i class="fa-solid fa-calendar-check"></i>
            <h3>Reservas de mesas</h3>
        </div>
        <div class="servicio-1">
            <i class="fa-solid fa-users"></i>
            <h3>Eventos privados</h3>
        </div>
        <div class="servicio-1">
            <i class="fa-solid fa-music"></i>
            <h3>Musica en vivo</h3>
        </div>
        <div class="servicio-1">
            <i class="fa-solid fa-birthday-cake"></i>
            <h3>Pasteleria artesanal</h3>
        </div>
    </div>
</main>

<section class="reserva container" id="reservas">
    <form method="post" autocomplete="off">
        <h2>Agenda tu reservación</h2>
        <div class="input-group">
            <div class="input-container">
                <input type="text" name="name" placeholder="Nombre y Apellido">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-container">
                <input type="number" name="number" placeholder="Numero de contacto">
                <i class="fa-solid fa-phone"></i>
            </div>
            <div class="input-container">
                <input type="email" name="email" placeholder="Ingrese su correo electronico">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-container">
                <input type="date" name="fecha" placeholder="Ingrese la fecha de la reserva">
                <i class="fa-solid fa-calendar-check"></i>
            </div>
            <div class="input-container">
                <textarea name="mensaje" placeholder="Detalles de la reserva"></textarea>
            </div>
            <input type="submit" name="send" class="btn" onClick="enviar()">
        </div>
    </form>
</section>
