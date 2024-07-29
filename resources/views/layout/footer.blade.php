<!-- Footer Section -->
<footer>
    <div class="top-footer">
        <p>Anup Shakya .</p>
    </div>
    <div class="middle-footer">
        <ul class="footer-menu">
            <li class="footer_menu_list">
                <a href="#home">Home</a>
            </li>
            <li class="footer_menu_list">
                <a href="#about">About</a>
            </li>
            <li class="footer_menu_list">
                <a href="#projects">Projects</a>
            </li>
            <li class="footer_menu_list">
                <a href="#contact">Contact</a>
            </li>
        </ul>
    </div>
    <div class="footer-social-icons">
        @if(!empty(setting('site.instagram')))
        <div class="icon">
            <a href="{{setting('site.instagram')}}" target="__blank"><i class="uil uil-instagram"></i></a>
        </div>
        @endif
        @if(!empty(setting('site.linkedin')))
        <div class="icon">
            <a href="{{setting('site.linkedin')}}" target="__blank"><i class="uil uil-linkedin"></i></a>
        </div>
        @endif
        @if(!empty(setting('site.github')))
        <div class="icon">
            <a href="{{setting('site.github')}}" target="__blank"><i class="uil uil-github"></i></a>
        </div>
        @endif
        @if(!empty(setting('site.facebook')))
        <div class="icon">
            <a href="{{setting('site.facebook')}}" target="__blank"><i class="uil uil-facebook"></i></a>
        </div>
        @endif
    </div>
    <div class="bottom-footer">
        <p>Copyright &copy; <a href="#home" style="text-decoration: none;">Anup Shakya</a> - All rights reserved
        </p>
    </div>
</footer>
<!-- Footer Section -->
</div>

<!-- Scroll Reveal Js Link -->
<script src="https://unpkg.com/scrollreveal"></script>
<!-- Scroll Reveal Js Link -->

<!-- Typed Library -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12/lib/typed.min.js"></script>
<!-- Typed Library -->

<!-- Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Jquery -->

<!-- Toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Toastr -->

<!-- Custom Script -->
<script src="{{asset('js/script.js')}}"></script>

<script>
    // Success Message
    @if(session('success'))
        toastr.success({{'session('success')'}})
    @endif

    // Error Message
    @if(session('error'))
        toastr.error({{'session('error')'}})
    @endif

    // Info Message
    @if(session('info'))
        toastr.info({{'session('info')'}})
    @endif

    // Warning Message
    @if(session('warning'))
        toastr.warning({{'session('warning')'}})
    @endif
</script>
<!-- Custom Script -->

<!-- Individual Script -->
@yield('script')
<!-- Individual Script -->

</body>

</html>