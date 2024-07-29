@extends('layout.main')
@section('content')
<!-- Body Section -->
<main class="wrapper">
    <!-- Featured Box -->
    <section class="featured-box" id="home">
        <div class="featured-text">
            <div class="featured-text-card">
                <span>Anup Shakya</span>
            </div>
            <div class="featured-name">
                <p>I'm <span class="typedText">Designer</span></p>
            </div>
            <div class="featured-text-info">
                <p>Experienced full-stack developer with a strong passion for building visually stunning and
                    user-friendly websites.</p>
            </div>
            <div class="featured-text-btn">
                <button class="btn blue-btn">Hire Me</button>
                <button class="btn ">Download CV <i class="uil uil-file-alt"></i></button>
            </div>
            <div class="social_icons">
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
        </div>
        <div class="featured-image">
            <div class="image">
                <img src="{{asset('images/avatar.jpg')}}" alt="avatar">
            </div>
        </div>
        <div class="scroll-icon-box">
            <a href="#about" class="scroll-btn">
                <i class="uil uil-mouse-alt"></i>
                <p>Scroll Down</p>
            </a>
        </div>
    </section>

    <!-- About -->
    <section class="section" id="about">
        <div class="top-header">
            <h1>About Me</h1>
        </div>
        <div class="row">
            <div class="col">
                <div class="about-info">
                    <h3>My introduction</h3>
                    <p>I am well-versed in HTML, CSS and Javascript, and other cutting edge frameworks and
                        libraries, which allows me to implement interactive features. Additionally, I have
                        experience working with content management systems (CMS) Wordpress.</p>
                    <div class="about-btn">
                        <button class="btn">Download CV <i class="uil uil-file-alt"></i></button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="skills-box">
                    <div class="skills-header">
                        <h3>Frontend</h3>
                    </div>
                    <div class="skills-list">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>Bootstrap</span>
                        <span>Javascript</span>
                        <span>Vue</span>
                        <span>React</span>
                        <span>Angular</span>
                    </div>
                </div>
                <div class="skills-box">
                    <div class="skills-header">
                        <h3>Backend</h3>
                    </div>
                    <div class="skills-list">
                        <span>PHP</span>
                        <span>JAVA</span>
                        <span>Python</span>
                        <span>C++</span>
                    </div>
                </div>
                <div class="skills-box">
                    <div class="skills-header">
                        <h3>Database</h3>
                    </div>
                    <div class="skills-list">
                        <span>MySQL</span>
                        <span>MongoDB</span>
                        <span>PostgreSQL</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Box -->
    <section class="section" id="projects">
        <div class="top-header">
            <h1>Projects</h1>
        </div>
        <div class="project-container">
            <div class="project-box">
                <i class="uil uil-briefcase-alt"></i>
                <h3>Completed</h3>
                <label>15+ Finished Projects</label>
            </div>
            <div class="project-box">
                <i class="uil uil-users-alt"></i>
                <h3>Clients</h3>
                <label>25+ Happy Clients</label>
            </div>
            <div class="project-box">
                <i class="uil uil-award"></i>
                <h3>Experience</h3>
                <label>7+ Years in the field</label>
            </div>
        </div>
    </section>

    <!-- Contact Box -->
    <section class="section" id="contact">
        <div class="top-header">
            <h1>Get in Touch</h1>
            <span>Do you have a project in your mind, contact me here</span>
        </div>
        <div class="row">
            <div class="col">
                <div class="contact-info">
                    <h2>Find Me <i class="uil uil-corner-right-down"></i></h2>
                    <p><i class="uil uil-envelope"></i> Email:anupshk39@gmail.com</p>
                    <p><i class="uil uil-phone"></i> Tel:+250 708 770 000</p>
                </div>
            </div>
            <div class="col">
                <div class="form-control">
                    <div class="form-inputs">
                        <input type="text" class="input-field" placeholder="Name">
                        <input type="email" class="input-field" placeholder="Email">
                    </div>
                    <div class="text-area">
                        <textarea placeholder="Message"></textarea>
                    </div>
                    <div class="form-button">
                        <button class="btn">Send <i class="uil uil-message"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Body Section -->
@endsection