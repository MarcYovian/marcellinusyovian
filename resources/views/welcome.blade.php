<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MarcYovian Portfolio</title>
    @vite('resources/css/app.css')
    {{-- @vite('resources/js/app.js') --}}

</head>

<body class="">
    {{-- Hero Section Start --}}
    <section id="home" class="bg-dark-full pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 md:w-1/2">
                    <h1 class="text-base font-semibold text-light sm:text-2xl">Hello!, I'm <span
                            class="mb-3 mt-1 block text-4xl font-bold text-primary">Marcellinus Yovian</span></h1>
                    <p class="mb-8 font-medium leading-relaxed text-slate-300">"Welcome to my digital realm! i'm a <span
                            class="text-bold text-primary">web & mobile developer</span> passionate about creating
                        innovative solutions for seamless digital experiences."</p>

                    <a href="#"
                        class="float-end rounded-full bg-primary px-8 py-2 text-base font-semibold text-light transition duration-300 ease-in-out hover:opacity-80 hover:shadow-md md:float-none">Contact
                        Me</a>
                </div>
                <div class="w-full self-end px-4 md:w-1/2">
                    <div class="relative mt-10 lg:right-0 lg:mt-0">
                        <img src="{{ asset('img/profile.png') }}" alt="Marcellinus Yovian"
                            class="relative z-10 mx-auto max-w-full" height="500">
                        <span
                            class="absolute bottom-0 left-1/2 -translate-x-1/2 scale-90 max-[478px]:-bottom-10 max-[478px]:scale-50 sm:bottom-10 sm:scale-100 md:top-1 md:scale-75 lg:top-20 lg:scale-90">
                            <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#0880D5"
                                    d="M47.3,-51C58,-36.7,60.9,-18.3,60.4,-0.5C60,17.4,56.2,34.9,45.5,46.7C34.9,58.5,17.4,64.7,-3,67.7C-23.5,70.8,-47.1,70.7,-62.3,58.9C-77.4,47.1,-84.3,23.5,-82.1,2.2C-79.9,-19.1,-68.6,-38.2,-53.4,-52.6C-38.2,-66.9,-19.1,-76.5,-0.4,-76.1C18.3,-75.7,36.7,-65.4,47.3,-51Z"
                                    transform="translate(100 100) scale(1.2)" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero Section End --}}

    {{-- About Section Start --}}
    <section id="about" class="bg-dark-semi pb-8 pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="relative w-full self-start px-4 pb-5 lg:w-1/2">
                    <img src="{{ asset('img/profile2.png') }}" alt="Marcellinus Yovian"
                        class="relative z-10 mx-auto max-w-full max-[300px]:w-48">
                    <span
                        class="absolute left-1/2 top-5 -translate-x-1/2 max-[400px]:scale-75 max-[300px]:bottom-10 max-[300px]:scale-50">
                        <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#0880D5"
                                d="M37.7,-39.4C42.9,-23.5,37.2,-8.1,34.7,10C32.3,28.2,33.1,49.3,21.9,60.3C10.8,71.3,-12.2,72.2,-29.4,63.2C-46.7,54.1,-58.1,35,-64.3,13.1C-70.6,-8.7,-71.6,-33.3,-60,-50.7C-48.4,-68,-24.2,-78.2,-4,-75C16.2,-71.8,32.4,-55.3,37.7,-39.4Z"
                                transform="translate(100 100) scale(1.2)" />
                        </svg>
                    </span>
                </div>
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-sm font-semibold text-light lg:text-base">LEMME INTRODUCE MYSELF</h1>
                    <h1 class="mb-4 block text-4xl font-bold text-primary">About Me</h1>
                    <h2 class="mb-2 text-base font-semibold text-light">A Journey of Passion and Expertise</h2>
                    <p class="mb-8 font-medium leading-relaxed text-third">Hello, I'm Marcellinus Yovian, a
                        passionate Full Stack Developer based in Indonesia. Welcome to my portfolio world. Throughout my
                        career journey, I have honed my skills as a versatile developer who can work across the full
                        technology stack. I thrive on new challenges and am always excited to tackle complex projects.
                        With my experience and knowledge, I am committed to delivering innovative and high-quality
                        solutions to clients and users. I believe that the combination of my technical abilities and
                        creativity will help me become a successful developer and make a positive impact in this
                        industry.</p>

                    <a href="#"
                        class="float-end rounded-full bg-primary px-8 py-2 text-base font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg sm:float-none">Curiculum
                        Vitae</a>
                </div>
            </div>
        </div>
    </section>
    {{-- About Section End --}}

    {{-- Skill Section Start --}}
    <section id="skill" class="bg-dark-semi pb-32">
        <div class="container">
            <div class="flex flex-col justify-center">
                <div class="mb-10 flex h-auto w-full justify-center">
                    <h1 class="text-lg font-semibold text-primary">MY SKILLS</h1>
                </div>
                <div class="h-auto w-full">
                    <div class="grid grid-cols-2 gap-4 min-[500px]:grid-cols-3 sm:grid-cols-4 lg:grid-cols-6">

                        {{-- HTML --}}
                        <div class="flex h-20 flex-col items-center justify-center p-2 text-white">
                            <div class="flex h-12 w-9 items-center justify-center fill-current pb-1">
                                <svg role="img" class="fill-current" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>HTML5</title>
                                    <path
                                        d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z" />
                                </svg>
                            </div>
                            <h4 class="fill-current text-center text-base font-medium">HTML</h4>
                        </div>

                        {{-- CSS --}}
                        <div class="flex h-20 flex-col items-center justify-start p-2 text-white">
                            <div class="flex h-12 w-9 items-center justify-center fill-current">
                                <svg role="img" class="fill-current" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>CSS3</title>
                                    <path
                                        d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z" />
                                </svg>
                            </div>
                            <h4 class="fill-current text-center text-base font-medium">CSS</h4>
                        </div>

                        {{-- Javascript --}}
                        <div class="flex h-20 flex-col items-center justify-start p-2 text-white">
                            <div class="flex h-12 w-9 items-center justify-center fill-current">
                                <svg role="img" class="fill-current" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>JavaScript</title>
                                    <path
                                        d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z" />
                                </svg>
                            </div>
                            <h4 class="fill-current text-center text-base font-medium">Java Script</h4>
                        </div>

                        {{-- PHP --}}
                        <div class="flex h-20 flex-col items-center justify-start p-2 text-white">
                            <div class="flex h-12 w-9 items-center justify-center fill-current">
                                <i class="fa-brands fa-php fa-2xl fill-current"></i>
                            </div>
                            <h4 class="fill-current text-center text-base font-medium">PHP</h4>
                        </div>

                        {{-- Laravel --}}
                        <div class="flex h-20 flex-col items-center justify-start p-2 text-white">
                            <div class="flex h-12 w-9 items-center justify-center fill-current">
                                <svg role="img" class="fill-current" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Laravel</title>
                                    <path
                                        d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027c-.008.002-.016.008-.024.01a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 01.375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 01.024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 01.375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033.011.02.018.04.024.06.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.147 1.225-6.126 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.002-.003H5.04c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 01-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81L1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505l2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95l-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087 14.63 6.18v4.283l2.182 1.256 1.58.908zm-8.65 9.654l5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z" />
                                </svg>
                            </div>
                            <h4 class="fill-current text-center text-base font-medium">Laravel</h4>
                        </div>

                        {{-- C --}}
                        <div class="flex h-20 flex-col items-center justify-start p-2 text-white">
                            <div class="flex h-12 w-9 items-center justify-center fill-current">
                                <svg role="img" class="fill-current" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>C</title>
                                    <path
                                        d="M16.5921 9.1962s-.354-3.298-3.627-3.39c-3.2741-.09-4.9552 2.474-4.9552 6.14 0 3.6651 1.858 6.5972 5.0451 6.5972 3.184 0 3.5381-3.665 3.5381-3.665l6.1041.365s.36 3.31-2.196 5.836c-2.552 2.5241-5.6901 2.9371-7.8762 2.9201-2.19-.017-5.2261.034-8.1602-2.97-2.938-3.0101-3.436-5.9302-3.436-8.8002 0-2.8701.556-6.6702 4.047-9.5502C7.444.72 9.849 0 12.254 0c10.0422 0 10.7172 9.2602 10.7172 9.2602z" />
                                </svg>
                            </div>
                            <h4 class="fill-current text-center text-base font-medium">C</h4>
                        </div>

                        {{-- C++ --}}
                        <div class="flex h-20 flex-col items-center justify-start p-2 text-white">
                            <div class="flex h-12 w-9 items-center justify-center fill-current">
                                <svg role="img" viewBox="0 0 24 24" class="fill-current"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>C++</title>
                                    <path
                                        d="M22.394 6c-.167-.29-.398-.543-.652-.69L12.926.22c-.509-.294-1.34-.294-1.848 0L2.26 5.31c-.508.293-.923 1.013-.923 1.6v10.18c0 .294.104.62.271.91.167.29.398.543.652.69l8.816 5.09c.508.293 1.34.293 1.848 0l8.816-5.09c.254-.147.485-.4.652-.69.167-.29.27-.616.27-.91V6.91c.003-.294-.1-.62-.268-.91zM12 19.11c-3.92 0-7.109-3.19-7.109-7.11 0-3.92 3.19-7.11 7.11-7.11a7.133 7.133 0 016.156 3.553l-3.076 1.78a3.567 3.567 0 00-3.08-1.78A3.56 3.56 0 008.444 12 3.56 3.56 0 0012 15.555a3.57 3.57 0 003.08-1.778l3.078 1.78A7.135 7.135 0 0112 19.11zm7.11-6.715h-.79v.79h-.79v-.79h-.79v-.79h.79v-.79h.79v.79h.79zm2.962 0h-.79v.79h-.79v-.79h-.79v-.79h.79v-.79h.79v.79h.79z" />
                                </svg>
                            </div>
                            <h4 class="fill-current text-center text-base font-medium">C++</h4>
                        </div>

                        {{-- Dart --}}
                        <div class="flex h-20 flex-col items-center justify-start p-2 text-white">
                            <div class="flex h-12 w-9 items-center justify-center fill-current">
                                <svg role="img" class="fill-current" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Dart</title>
                                    <path
                                        d="M4.105 4.105S9.158 1.58 11.684.316a3.079 3.079 0 0 1 1.481-.315c.766.047 1.677.788 1.677.788L24 9.948v9.789h-4.263V24H9.789l-9-9C.303 14.5 0 13.795 0 13.105c0-.319.18-.818.316-1.105l3.789-7.895zm.679.679v11.787c.002.543.021 1.024.498 1.508L10.204 23h8.533v-4.263L4.784 4.784zm12.055-.678c-.899-.896-1.809-1.78-2.74-2.643-.302-.267-.567-.468-1.07-.462-.37.014-.87.195-.87.195L6.341 4.105l10.498.001z" />
                                </svg>
                            </div>
                            <h4 class="fill-current text-center text-base font-medium">Dart</h4>
                        </div>

                        {{-- Flutter --}}
                        <div class="flex h-20 flex-col items-center justify-start p-2 text-white">
                            <div class="flex h-12 w-9 items-center justify-center fill-current">
                                <svg role="img" class="fill-current" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Flutter</title>
                                    <path
                                        d="M14.314 0L2.3 12 6 15.7 21.684.013h-7.357zm.014 11.072L7.857 17.53l6.47 6.47H21.7l-6.46-6.468 6.46-6.46h-7.37z" />
                                </svg>
                            </div>
                            <h4 class="fill-current text-center text-base font-medium">Flutter</h4>
                        </div>

                        {{-- Flutter --}}
                        <div class="flex h-20 flex-col items-center justify-start p-2 text-white">
                            <div class="flex h-12 w-9 items-center justify-center fill-current">
                                <svg class="fill-current" role="img" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Python</title>
                                    <path
                                        d="M14.25.18l.9.2.73.26.59.3.45.32.34.34.25.34.16.33.1.3.04.26.02.2-.01.13V8.5l-.05.63-.13.55-.21.46-.26.38-.3.31-.33.25-.35.19-.35.14-.33.1-.3.07-.26.04-.21.02H8.77l-.69.05-.59.14-.5.22-.41.27-.33.32-.27.35-.2.36-.15.37-.1.35-.07.32-.04.27-.02.21v3.06H3.17l-.21-.03-.28-.07-.32-.12-.35-.18-.36-.26-.36-.36-.35-.46-.32-.59-.28-.73-.21-.88-.14-1.05-.05-1.23.06-1.22.16-1.04.24-.87.32-.71.36-.57.4-.44.42-.33.42-.24.4-.16.36-.1.32-.05.24-.01h.16l.06.01h8.16v-.83H6.18l-.01-2.75-.02-.37.05-.34.11-.31.17-.28.25-.26.31-.23.38-.2.44-.18.51-.15.58-.12.64-.1.71-.06.77-.04.84-.02 1.27.05zm-6.3 1.98l-.23.33-.08.41.08.41.23.34.33.22.41.09.41-.09.33-.22.23-.34.08-.41-.08-.41-.23-.33-.33-.22-.41-.09-.41.09zm13.09 3.95l.28.06.32.12.35.18.36.27.36.35.35.47.32.59.28.73.21.88.14 1.04.05 1.23-.06 1.23-.16 1.04-.24.86-.32.71-.36.57-.4.45-.42.33-.42.24-.4.16-.36.09-.32.05-.24.02-.16-.01h-8.22v.82h5.84l.01 2.76.02.36-.05.34-.11.31-.17.29-.25.25-.31.24-.38.2-.44.17-.51.15-.58.13-.64.09-.71.07-.77.04-.84.01-1.27-.04-1.07-.14-.9-.2-.73-.25-.59-.3-.45-.33-.34-.34-.25-.34-.16-.33-.1-.3-.04-.25-.02-.2.01-.13v-5.34l.05-.64.13-.54.21-.46.26-.38.3-.32.33-.24.35-.2.35-.14.33-.1.3-.06.26-.04.21-.02.13-.01h5.84l.69-.05.59-.14.5-.21.41-.28.33-.32.27-.35.2-.36.15-.36.1-.35.07-.32.04-.28.02-.21V6.07h2.09l.14.01zm-6.47 14.25l-.23.33-.08.41.08.41.23.33.33.23.41.08.41-.08.33-.23.23-.33.08-.41-.08-.41-.23-.33-.33-.23-.41-.08-.41.08z" />
                                </svg>
                            </div>
                            <h4 class="fill-current text-center text-base font-medium">Python</h4>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Skill Section End --}}

    {{-- Service Section Start --}}
    <section id="service" class="bg-dark-full pb-16 pt-36">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto mb-16 max-w-xl text-center">
                    <h3 class="text-base font-semibold text-white md:text-lg xl:text-2xl">What Am I Providing</h3>
                    <h1 class="text-4xl font-bold text-primary md:text-5xl xl:text-6xl mb-2 xl:mb-4">SERVICES</h1>
                    <p class="mb-8 text-xs font-medium leading-relaxed md:text-sm text-third">Elevate your digital
                        presence with my comprehensive web and mobile development services, tailored to bring your ideas
                        to life and enhance user engagement.</p>
                </div>
            </div>

            <div class="flex w-full flex-wrap justify-center px-4 min-[630px]:space-x-2 sm:space-x-4 md:space-x-16">
                <div
                    class="mb-12 w-auto rounded-2xl bg-dark-semi px-10 py-24 transition duration-500 hover:bg-primary sm:w-72 md:max-w-72">
                    <div class="flex justify-center text-white">
                        <svg role="img" class="w-28 fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>htmx</title>
                            <path
                                d="M0 13.01v-2l7.09-2.98.58 1.94-5.1 2.05 5.16 2.05-.63 1.9Zm16.37 1.03 5.18-2-5.16-2.09.65-1.88L24 10.95v2.12L17 16zm-2.85-9.98H16l-5.47 15.88H8.05Z" />
                        </svg>
                    </div>
                    <h3 class="text-wrap text-center text-2xl font-semibold text-white">Web Development</h3>
                </div>
                <div
                    class="mb-12 w-auto rounded-2xl bg-dark-semi px-10 py-24 transition duration-500 hover:bg-primary sm:w-72 md:max-w-72">
                    <div class="flex justify-center text-white">
                        <svg role="img" class="w-28 fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>htmx</title>
                            <path
                                d="M0 13.01v-2l7.09-2.98.58 1.94-5.1 2.05 5.16 2.05-.63 1.9Zm16.37 1.03 5.18-2-5.16-2.09.65-1.88L24 10.95v2.12L17 16zm-2.85-9.98H16l-5.47 15.88H8.05Z" />
                        </svg>
                    </div>
                    <h3 class="text-wrap text-center text-2xl font-semibold text-white">Web Development</h3>
                </div>
            </div>
        </div>
    </section>
    {{-- Service Section End --}}

    {{-- Portfolio Section Start --}}
    <section id="portfolio" class="bg-dark-semi pt-36 pb-16">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto mb-10 max-w-xl text-center">
                    <h3 class="text-base font-semibold text-white md:text-lg xl:text-xl">Diverse Web and Mobile
                        Creations</h3>
                    <h1 class="text-4xl font-bold text-primary md:text-5xl mb-2 xl:mb-4">PROJECTS SHOWCASE
                    </h1>
                    <p class="text-xs font-medium leading-relaxed md:text-sm text-third">Explore my diverse
                        portfolio
                        featuring web
                        and mobile projects, each a testament to my commitment
                        to innovation and seamless user experiences.</p>
                </div>
            </div>

            <div class="w-full px-4">
                <div class="grid grid-cols-1">
                    <div class="p-4 m-4 bg-dark-full rounded-2xl">
                        <img src="{{ asset('img/portfolio-lexainstitute.png') }}" alt="Lexa Institute" width="w-full"
                            class="rounded-xl">
                        <h3 class="font-semibold text-xl text-primary mt-5">Lexa Institute Educational Website</h3>
                        <p class="font-medium text-sm text-third">
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Omnis, aperiam. Molestias nulla adipisci consectetur expedita.
                        </p>
                        <div class=" flex flex-wrap mt-5">
                            <div class="text-white m-2">
                                <svg role="img" class="fill-current w-8" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Laravel</title>
                                    <path
                                        d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027c-.008.002-.016.008-.024.01a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 01.375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 01.024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 01.375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033.011.02.018.04.024.06.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.147 1.225-6.126 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.002-.003H5.04c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 01-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81L1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505l2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95l-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087 14.63 6.18v4.283l2.182 1.256 1.58.908zm-8.65 9.654l5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z" />
                                </svg>
                            </div>
                            <div class="text-white m-2">
                                <svg role="img" class="fill-current w-8" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>CSS3</title>
                                    <path
                                        d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z" />
                                </svg>
                            </div>
                            <div class="text-white m-2">
                                <svg role="img" class="fill-current w-8" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Bootstrap</title>
                                    <path
                                        d="M11.77 11.24H9.956V8.202h2.152c1.17 0 1.834.522 1.834 1.466 0 1.008-.773 1.572-2.174 1.572zm.324 1.206H9.957v3.348h2.231c1.459 0 2.232-.585 2.232-1.685s-.795-1.663-2.326-1.663zM24 11.39v1.218c-1.128.108-1.817.944-2.226 2.268-.407 1.319-.463 2.937-.42 4.186.045 1.3-.968 2.5-2.337 2.5H4.985c-1.37 0-2.383-1.2-2.337-2.5.043-1.249-.013-2.867-.42-4.186-.41-1.324-1.1-2.16-2.228-2.268V11.39c1.128-.108 1.819-.944 2.227-2.268.408-1.319.464-2.937.42-4.186-.045-1.3.968-2.5 2.338-2.5h14.032c1.37 0 2.382 1.2 2.337 2.5-.043 1.249.013 2.867.42 4.186.409 1.324 1.098 2.16 2.226 2.268zm-7.927 2.817c0-1.354-.953-2.333-2.368-2.488v-.057c1.04-.169 1.856-1.135 1.856-2.213 0-1.537-1.213-2.538-3.062-2.538h-4.16v10.172h4.181c2.218 0 3.553-1.086 3.553-2.876z" />
                                </svg>
                            </div>
                        </div>
                        <a href="/lexainstitute">
                            <button class="bg-primary px-4 py-1 mt-3 rounded-lg hover:opacity-80">
                                <h4 class="text-sm font-semibold text-white">See Website</h4>
                            </button>
                        </a>
                    </div>
                    <div class="p-4 m-4 bg-dark-full rounded-2xl">
                        <img src="{{ asset('img/portfolio-lexainstitute.png') }}" alt="Lexa Institute" width="w-full"
                            class="rounded-xl">
                        <h3 class="font-semibold text-xl text-primary mt-5">Lexa Institute Educational Website</h3>
                        <p class="font-medium text-sm text-third">
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Omnis, aperiam. Molestias nulla adipisci consectetur expedita.
                        </p>
                        <div class=" flex flex-wrap mt-5">
                            <div class="text-white m-2">
                                <svg role="img" class="fill-current w-8" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Laravel</title>
                                    <path
                                        d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027c-.008.002-.016.008-.024.01a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 01.375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 01.024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 01.375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033.011.02.018.04.024.06.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.147 1.225-6.126 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.002-.003H5.04c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 01-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81L1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505l2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95l-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087 14.63 6.18v4.283l2.182 1.256 1.58.908zm-8.65 9.654l5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z" />
                                </svg>
                            </div>
                            <div class="text-white m-2">
                                <svg role="img" class="fill-current w-8" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>CSS3</title>
                                    <path
                                        d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z" />
                                </svg>
                            </div>
                            <div class="text-white m-2">
                                <svg role="img" class="fill-current w-8" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Bootstrap</title>
                                    <path
                                        d="M11.77 11.24H9.956V8.202h2.152c1.17 0 1.834.522 1.834 1.466 0 1.008-.773 1.572-2.174 1.572zm.324 1.206H9.957v3.348h2.231c1.459 0 2.232-.585 2.232-1.685s-.795-1.663-2.326-1.663zM24 11.39v1.218c-1.128.108-1.817.944-2.226 2.268-.407 1.319-.463 2.937-.42 4.186.045 1.3-.968 2.5-2.337 2.5H4.985c-1.37 0-2.383-1.2-2.337-2.5.043-1.249-.013-2.867-.42-4.186-.41-1.324-1.1-2.16-2.228-2.268V11.39c1.128-.108 1.819-.944 2.227-2.268.408-1.319.464-2.937.42-4.186-.045-1.3.968-2.5 2.338-2.5h14.032c1.37 0 2.382 1.2 2.337 2.5-.043 1.249.013 2.867.42 4.186.409 1.324 1.098 2.16 2.226 2.268zm-7.927 2.817c0-1.354-.953-2.333-2.368-2.488v-.057c1.04-.169 1.856-1.135 1.856-2.213 0-1.537-1.213-2.538-3.062-2.538h-4.16v10.172h4.181c2.218 0 3.553-1.086 3.553-2.876z" />
                                </svg>
                            </div>
                        </div>
                        <a href="/lexainstitute">
                            <button class="bg-primary px-4 py-1 mt-3 rounded-lg hover:opacity-80">
                                <h4 class="text-sm font-semibold text-white">See Website</h4>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Portfolio Section End --}}

    <script src="https://kit.fontawesome.com/aa3910db9c.js" crossorigin="anonymous"></script>
</body>

</html>
