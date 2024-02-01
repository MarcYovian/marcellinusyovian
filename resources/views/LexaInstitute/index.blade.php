@extends('layouts.LexaInstitute.main')

@section('title', 'Lexa Institute')

@section('style')
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    @vite('resources/css/LexaInstitute/home.css')
@endsection

@section('content')
    <!-- HOME START -->
    <section class="home">
        <div class="home-img">
            <img src="{{ asset('img/LexaInstitute/girl.jpg') }}" alt="" class="img1" />
            {{-- <img src=" {{ assets('img/LexaInstitute/girl.jpg') }} " alt="LEXA logo" class="img1" /> --}}
        </div>
        <div class="content">
            <h1>LEXA INSTITUTE</h1>
            <p>
                Welcome to Lexa Institute, where innovation and education converge to
                shape a limitless future. As a dynamic institution, we lead the way in
                AI, Data Science, and Web/App Development, equipping our students with
                the skills necessary to excel in these cutting-edge fields. Our
                mission is to empower students and provide them with the tools they
                need to succeed.
            </p>
            <br />
            <p>
                At Lexa Institute, we cultivate a vibrant learning environment under
                the guidance of experienced faculty who are industry experts. Through
                engaging hands-on projects, our graduates emerge as trailblazers,
                securing highly sought-after positions as AI Engineers, Data
                Scientists, and Web/App Developers.
            </p>
            <div style="padding-top: 35px">
                <a class="btns" href="mailto:lexainstitute@gmail.com"><strong>Let's Join US</strong></a>
            </div>
        </div>
    </section>
    <!-- HOME END-->

    <!-- AMOUNT START -->
    <section class="amount">
        <div class="statistik">
            <table style="width: 100%">
                <tr>
                    <th>25</th>
                    <th>826</th>
                    <th>85</th>
                    <th>16</th>
                </tr>
                <tr>
                    <td>Lecturer</td>
                    <td>Student</td>
                    <td>Project</td>
                    <td>Awards</td>
                </tr>
            </table>
        </div>
    </section>
    <!-- AMOUNT END-->

    <!-- KELULUSAN START -->
    <section class="graduate" id="graduate">
        <div class="graduate-card">
            <img src="{{ asset('img/LexaInstitute/AICourse.png') }}" alt="AI Engineer" />
            <h2>AI Engineer</h2>
            <p>
                Lexa Institute graduates in AI Engineering possess expertise in
                developing advanced artificial intelligence systems. They have a deep
                understanding of algorithms, machine learning, and data processing.
            </p>
        </div>
        <div class="graduate-card">
            <img src="{{ asset('img/LexaInstitute/webapp.png') }}" alt="Web & App Development" srcset="" />
            <h2>Web & App Development</h2>
            <p>
                Lexa Institute graduates in Web and App Development are experts in
                designing and developing innovative web and mobile applications.
            </p>
        </div>
        <div class="graduate-card">
            <img src=" {{ asset('img/LexaInstitute/NLPCourse.png') }} " alt="Data Scientist" srcset="" />
            <h2>Data Scientist</h2>
            <p>
                Master techniques to extract insights from data, build predictive
                models, and communicate findings. Apply data science skills across
                industries such as finance, marketing, and healthcare.
            </p>
        </div>
    </section>
    <!-- KELULUSAN END-->

    <!-- WELCOME MESSAGE START -->
    <section class="welcome">
        <div class="welcome-img">
            <img src="{{ asset('img/LexaInstitute/girl2.png') }}" alt="LEXA logo" class="img1" />
        </div>
        <div class="content">
            <h1>LEXA INSTITUTE</h1>
            <p>Welcome to Lexa University!</p>
            <br />
            <p>
                At Lexa University, we understand the importance of staying ahead of
                innovation and artificial intelligence (AI). We are committed to
                creating an exhilarating learning environment that enriches and
                prepares our students to become highly skilled AI Engineers, Data
                Scientists, and Web and App Developers.
            </p>
            <br />
            <p>
                Our tagline, "Best Future," reflects our vision to help students reach
                their full potential and open doors to a bright future. At Lexa
                University, we foster creativity, dedication, and collaboration to
                create an extraordinary educational experience.
            </p>
        </div>
    </section>
    <!-- WELCOME MESSAGE END-->

    <!-- VIDEO PROFILE START -->
    <section class="video-profile">
        <video width="640" height="480" controls>
            <source src="{{ asset('video/LexaInstitute/videoProfile.mp4') }}" type="video/mp4" />
            Your browser does not support the video tag.
        </video>
    </section>
    <!-- VIDEO PROFILE START -->
@endsection

@section('scripts')
    <script src="https://kit.fontawesome.com/aa3910db9c.js" crossorigin="anonymous"></script>
    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        }

        var backToTopBtn = document.getElementById("back-to-top-btn");

        backToTopBtn.addEventListener("click", scrollToTop);

        // Tambahkan event listener untuk mengatur tampilan tombol "Back to Top"
        window.addEventListener("scroll", function() {
            if (window.pageYOffset > 200) {
                backToTopBtn.style.display = "block";
            } else {
                backToTopBtn.style.display = "none";
            }
        });
    </script>
@endsection
