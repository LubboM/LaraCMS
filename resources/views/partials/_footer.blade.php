<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h3 class="footer-heading" style="text-transform:uppercase;"><i
                    class="fas fa-globe-europe"></i> {{ config('hotel.hotel_name') }}</h3>
            <p>{{ __('footer.text') }}</p>
        </div>
        <div class="col-sm-4">
            <h3 class="footer-heading" style="text-transform:uppercase;"><i class="fa fa-bars"></i> Navigation</h3>
            <div class="row margin-bottom">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <div class="col-sm-6">
                        <ul class="list-unstyled footer-nav">
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="{{ route('me') }}">Me</a>
                            </li>
                        </ul>
                        <ul class="list-unstyled footer-nav">
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="{{ route('Staff') }}">{{ __('Staff') }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-unstyled footer-nav">
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="{{ route('top_players') }}">{{ __('Top players') }}</a></li>
                        </ul>
                    </div>
                @else
                    <div class="col-sm-6">
                        <ul class="list-unstyled footer-nav">
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="{{ route('index') }}">Login</a>
                            </li>
                        </ul>
                        <ul class="list-unstyled footer-nav">
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="{{ route('register') }}">Register</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-unstyled footer-nav">
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="#">Terms and
                                    Conditions</a></li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-sm-4">
            <h3 class="footer-heading" style="text-transform:uppercase;"><i class="fa fa-share-square"></i> Social media
            </h3>
            <ul class="list-unstyled footer-nav">
                <li><i class="fab fa-facebook-f"></i> <a href="#" target="_blank">Facebook</a></li>
                <li><i class="fab fa-twitter"></i></i> <a href="#" target="_blank">Twitter</a></li>
                <li><i class="fab fa-instagram"></i></i> <a href="#" target="_blank">Instagram</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="center copyright">{{ config('hotel.hotel_name') }} © 2019</div>
