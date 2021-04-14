<section class="body-sign">
    <div class="center-sign">
        <a href="/" class="logo float-left">
            <img src="{{ asset('img/logo/4s-logo.jpg') }}" height="54" alt="4S Cleaning Logo" />
        </a>

        <div class="panel card-sign">
            <div class="card-title-sign mt-3 text-right">
                <h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle mr-1 text-6 position-relative top-5"></i> Sign In</h2>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="submit">
                    <div class="form-group mb-3">
                        <label>Username</label>
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" wire:model.lazy="form.email" />
                            <span class="input-group-append">
                                <span class="input-group-text">
                                    <i class="bx bx-user text-4"></i>
                                </span>
                            </span>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="clearfix">
                            <label class="float-left">Password</label>
                            {{--<a href="pages-recover-password.html" class="float-right">Lost Password?</a>--}}
                        </div>
                        <div class="input-group">
                            <input type="password" class="form-control form-control-lg" wire:model.lazy="form.password" />
                            <span class="input-group-append">
                                <span class="input-group-text">
                                    <i class="bx bx-lock text-4"></i>
                                </span>
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            {{--<div class="checkbox-custom checkbox-default">
                                <input id="RememberMe" name="rememberme" type="checkbox"/>
                                <label for="RememberMe">Remember Me</label>
                            </div>--}}
                        </div>
                        <div class="col-sm-4 text-right">
                            <button type="submit" class="btn btn-primary mt-2">Sign In</button>
                        </div>
                    </div>

                    @if ( count( $errors ) > 0 )
                    <div class="row">
                        <div class="col-12 mt-3">
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{!! $error !!}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endif
                </form>
            </div>
        </div>
        <p class="text-center text-muted mt-3 mb-3">&copy; Copyright {{ date('Y') }}. All Rights Reserved.</p>
    </div>
</section>
