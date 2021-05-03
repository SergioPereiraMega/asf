<div class="container contact">
    <div class="row" style="color:green">
        <div class="col-sm-6" style="color: green">
            <!-- Success message -->
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif

            <form method="post" action="{{ route('contact.store') }}">

                <!-- CROSS Site Request Forgery Protection -->
                @csrf

                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" placeholder="Ingrese su Nombre...." required>
                    <!-- Error -->
                    @if ($errors->has('name'))
                    <div class="error">
                        {{ $errors->first('name') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" placeholder="Email...." required>
                    @if ($errors->has('email'))
                    <div class="error">
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone" placeholder="Ingrese su Telefono...." required>
                    @if ($errors->has('phone'))
                    <div class="error">
                        {{ $errors->first('phone') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject" id="subject" placeholder="Subject...." required>
                    @if ($errors->has('subject'))
                    <div class="error">
                        {{ $errors->first('subject') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message" rows="4" placeholder="Envie su pregunta y le responderemos a la brevedad...." required></textarea>
                    @if ($errors->has('message'))
                    <div class="error">
                        {{ $errors->first('message') }}
                    </div>
                    @endif
                </div>

                <input type="submit" name="send" value="Enviar" class="btn btn-primary btn-lg mt-12">
            </form>
        </div>

        <div class="col-sm-6" style="color: green">
            <h2>Contacte con nosotros</h2>
            <!-- <ul class="list-unstyled address-container"> -->
            <ul class="list-unstyled">

                <li>
                    <span class="fa-icon">
                        <i class="fa fa-phone" aria-hidden="true" href="tel:+59899758229"></i>
                    </span>
                    +598 99758229
                </li>
                <li>
                    <span class="fa-icon">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </span>
                    info@asfgranos.com.uy
                </li>
                <li>
                    <span class="fa-icon">
                        <i class="fa fa fa-map-marker" aria-hidden="true"></i>
                    </span>
                    Daniel Otero 6591 - Montevideo
                </li>
            </ul>
            <h3>Seguinos en redes</h3>
            <a href="https://facebook.com/" title="" class="fa-icon">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="https://www.linkedin.com/" title="" class="fa-icon">
                <i class="fa fa-linkedin"></i>
            </a>
            <a href="https://instagram.com/" title="" class="fa-icon">
                <i class="fa fa-instagram"></i>
            </a>

        </div>

    </div>
</div>
