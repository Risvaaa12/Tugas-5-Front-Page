<x-home-layout>
<body class="font-sans antialiased text-gray-900 transition-all bg-white">
    <!-- start hero -->
    <section class="relative flex items-center min-h-screen px-4 overflow-hidden bg-gray-700 cover bg-blue-teal-gradient sm:px-8 lg:px-16 ">
        <div class="absolute top-0 left-0 right-0 z-0 h-full">
            <img src="images/kost1.png" alt="" class="object-cover w-full h-full opacity-20">
        </div>
        
        <div class="relative z-10 lg:w-3/4 xl:w-2/4 h-50 lg:mt-6">
            <div >
                <h1 class="text-4xl font-bold leading-tight text-yellow-400 md:text-5xl xl:text-6xl">Home is where we should feel secure and comfortable.</h1>
                <p class="mt-4 text-xl leading-snug text-blue-100 md:text-2xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis sit autem assumenda fugit!</p>
                <a href="#" class="inline-block px-12 py-4 mt-8 font-bold text-white bg-yellow-400 rounded hover:bg-teal-600 hover:transition-4">Get Started</a>
            </div>
        </div>
    </section>
    <!-- end hero -->

    <!-- Fyp Section-->
    <section>
    <div class="container min-h-screen px-12 pt-16 bg-gray-100">
        <div class="flex justify-between py-6 rounded-lg md:w-full md:px-72 ">
            <form class="w-full">
                <input class="w-full px-6 py-1 rounded-l-lg md:h-12" type="text" placeholder="Cari Kost Disini ...">    
            </form>
            <button type="submit"><i class="px-6 py-2 bg-yellow-400 rounded-r-lg md:py-4 md:h-12 fa fa-search" aria-hidden="true"></i></button>                   
        </div>
        
        <div class="grid gap-4 my-6 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($packages as $key=>$item)
            <div class="overflow-hidden bg-white rounded shadow group">
                <div class="relative">
                    <img src="images/kost1.png" alt="product 1" class="w-full">
                    <div class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                        <a href="#BookPage"
                            id="sch1"
                            type="submit"
                            class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-yellow-400 fa-solid fa-magnifying-glass"
                            title="view product">
                        </a>
                        <a href="#BookPage"
                            id="Kos1"
                            type="submit"
                            class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-yellow-400 fa fa-heart"
                            title="add to wishlist">
                        </a>
                    </div>
                </div>
                <div class="px-4 pt-4 pb-3">
                    <a id="Pos1" type="submit">
                        <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">{{$item->package_name}}</h4>
                    </a> 
                    <p>{{$item->package_desc}}</p>
                    <div class="flex flex-col items-baseline mb-1">
                        <p class="text-xl font-semibold text-primary">Rp. 400.000/month</p>
                        <p class="text-sm text-gray-400 line-through">Rp. 500.000/month</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>
                        <div class="ml-3 text-xs text-gray-500">(150)</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>    
        <div class="py-6 font-sans text-center ">
                <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-yellow-400 hover:text- gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Prev
                </a>
                <!-- Next Button -->
                <a href="#" class="inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-yellow-400 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Next
                </a>
            </div>
    </section>
    <!-- End FYP Section -->

    <!-- Booking Pages -->       
    <div class="flex items-center justify-center min-h-screen px-4 py-16 bg-gray-200 2xl:container 2xl:mx-auto lg:py-16 md:py-12 py-9 md:px-6 xl:px-48 " id="BookPage">
        <div class="flex flex-col items-center justify-center w-full space-y-12 sm:w-9/12 lg:w-full lg:flex-row lg:space-x-10 2xl:space-x-36 lg:space-y-0" >
            <div class="flex flex-col items-start justify-start w-full">
                <div>
                    <p class="text-3xl font-semibold leading-7 lg:text-4xl dark:text-white lg:leading-9">Booking Kost</p>
                </div>
                <div class="flex flex-col items-start justify-start w-full mt-8 space-y-8">
                    <input class="w-full px-2 py-4 text-base leading-4 placeholder-gray-600 border-b border-gray-200 rounded-lg focus:outline-none dark:bg-transparent dark:text-gray-400 dark:placeholder-gray-400 focus:ring-2 focus:ring-gray-500" type="text" placeholder="Nama Depan" />
                    <input class="w-full px-2 py-4 text-base leading-4 placeholder-gray-600 border-b border-gray-200 rounded-lg focus:outline-none dark:bg-transparent dark:text-gray-400 dark:placeholder-gray-400 focus:ring-2 focus:ring-gray-500" type="text" placeholder="Nama Belakang" />
                    <input class="w-full px-2 py-4 text-base leading-4 placeholder-gray-600 border-b border-gray-200 rounded-lg focus:outline-none dark:bg-transparent dark:text-gray-400 dark:placeholder-gray-400 focus:ring-2 focus:ring-gray-500" type="text" placeholder="Alamat" />
                    <input class="w-full px-2 py-4 text-base leading-4 placeholder-gray-600 border-b border-gray-200 rounded-lg focus:outline-none dark:bg-transparent dark:text-gray-400 dark:placeholder-gray-400 focus:ring-2 focus:ring-gray-500" type="number" placeholder="No Hanphone"/>
                    <input class="w-full px-2 py-4 text-base leading-4 placeholder-gray-600 border-b border-gray-200 rounded-lg focus:outline-none dark:text-gray-400 dark:bg-transparent dark:placeholder-gray-400 focus:ring-2 focus:ring-gray-500" type="text" placeholder="Catatan"/>
                </div>
                <button class="w-full py-4 mt-8 text-base font-medium leading-4 text-white bg-yellow-400 rounded-lg focus:outline-none focus:ring-2 dark:bg-gray-800 dark:text-white focus:ring-gray-500 focus:ring-offset-2 focus:ring-ocus:ring-gray-800 hover:bg-teal-400 md:w-4/12 lg:w-full">Order</button>
            </div>

            <div class="flex flex-col items-start justify-start w-full p-6 bg-white rounded-lg dark:bg-gray-800 md:p-14">
                <div>
                    <h1 class="text-2xl font-semibold leading-6 text-gray-800 dark:text-white">Order Summary</h1>
                </div>
                <div class="flex flex-col items-end w-full space-y-6 mt-7">
                <div class="flex items-center justify-between w-full">
                        <p class="text-lg leading-4 text-gray-600 dark:text-gray-300">Nama Kos :</p>
                        <p class="text-lg font-semibold leading-4 text-gray-600 dark:text-gray-300" id="kosName"></p>
                    </div>
                    <div class="flex items-center justify-between w-full">
                        <p class="text-lg leading-4 text-gray-600 dark:text-gray-300">Harga :</p>
                        <p class="text-lg font-semibold leading-4 text-gray-600 dark:text-gray-300" id="Harga">Rp. </p>
                    </div>
                    <div class="flex items-center justify-between w-full">
                        <p class="text-lg leading-4 text-gray-600 dark:text-gray-300">Diskon :</p>
                        <p class="text-lg font-semibold leading-4 text-gray-600 dark:text-gray-300" id="Disc">Rp. </p>
                    </div>
                </div>
                <div class="flex items-center justify-between w-full mt-24">
                    <p class="text-xl font-semibold leading-4 text-gray-800 dark:text-white">Estimasi Total :</p>
                    <p class="text-lg font-semibold leading-4 text-gray-800 dark:text-white " id="Total">Rp. </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Book -->

    <!-- start about -->
    <section class="relative px-4 py-16 bg-gray-400 sm:px-8 lg:px-16 xl:px-40 lg:py-32">
    <div class="flex flex-col text-white lg:flex-row lg:-mx-8">
        <div class="w-full lg:w-1/2 lg:px-8">
        <h2 class="mt-4 text-4xl font-bold leading-tight text-gray-800">About Us</h2>
        <p class="mt-4 text-xl font-semibold">InKost on your area</p>
        <p class="mt-2 leading-relaxed">InKost merupakan singkatan dari Info Kost yang merupakan web layanan informasi seputar properti seperti Kost dan Kontrakan siap huni. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, temporibus est corrupti quae hic commodi? Pariatur fugit voluptatibus obcaecati aliquam asperiores neque aut nulla veniam, adipisci explicabo odit a saepe?</p>
        </div>

        <div class="w-full mt-12 lg:w-1/2 lg:px-8 lg:mt-0">
        <div class="md:flex">
            <div>
            <div class="w-16 h-16 bg-yellow-400 rounded-full hover:translate-y-3"></div>
            </div>
            <div class="mt-4 md:ml-8 md:mt-0">
            <h4 class="text-xl font-bold leading-tight text-gray-700">Apa Yang Kami Berikan</h4>
            <p class="mt-2 leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis ab laborum repellat doloribus, perspiciatis dignissimos. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem alias et voluptatibus aliquam, ipsum harum.</p>
            </div>
        </div>

        <div class="mt-8 md:flex">
            <div>
            <div class="w-16 h-16 bg-teal-400 rounded-full hover:translate-y-3"></div>
            </div>
            <div class="mt-4 md:ml-8 md:mt-0">
            <h4 class="text-xl font-bold leading-tight text-gray-700">Apa Yang Kami Kerjakan</h4>
            <p class="mt-2 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae reprehenderit enim, cumque ad corrupti? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ad ut veritatis eius unde necessitatibus.</p>
            </div>
        </div>
        </div>
    </div>

    <div class="mt-12"> 
        <h1 class="mt-4 text-xl text-3xl font-bold leading-tight text-gray-800 ">Cara Booking</h1>
    </div>

    <div class="text-center text-gray-800 md:flex md:flex-wrap md:-mx-4 sm:mb-6">
        <div class="pt-6 md:w-1/2 md:px-4 lg:w-1/4">
        <div class="p-8 bg-yellow-400 border border-gray-300 rounded-lg hover:translate-y-4 hover:transition-all">
            <h4 class="mt-4 text-xl font-bold">Log in</h4>
            <p class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, fugit? Lorem ipsum dolor sit amet.</p>
            <a href="#" class="block mt-4 text-blue-500 hover:text-blue-100">Read More</a>
        </div>
        </div>

        <div class="pt-6 md:w-1/2 md:px-4 lg:w-1/4">
        <div class="p-8 bg-teal-400 border border-gray-300 rounded-lg hover:translate-y-4 hover:transition-all">
            <h4 class="mt-4 text-xl font-bold">Pilih Kost</h4>
            <p class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, fugit?.</p>
            <a href="#" class="block mt-4 text-blue-500 hover:text-blue-100">Read More</a>
        </div>
        </div>

        <div class="pt-6 md:w-1/2 md:px-4 lg:w-1/4">
        <div class="p-8 bg-yellow-400 border border-gray-300 rounded-lg hover:translate-y-4 hover:transition-all">
            <h4 class="mt-4 text-xl font-bold">Tambah Ke Keranjang</h4>
            <p class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, fugit? Lorem ipsum dolor sit amet.</p>
            <a href="#" class="block mt-4 text-blue-500 hover:text-blue-100">Read More</a>
        </div>
        </div>

        <div class="pt-6 md:w-1/2 md:px-4 lg:w-1/4">
        <div class="p-8 bg-teal-400 border border-gray-300 rounded-lg hover:translate-y-4 hover:transition-all">
            <h4 class="mt-4 text-xl font-bold">Booking</h4>
            <p class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, fugit?.</p>
            <a href="#" class="block mt-4 text-blue-500 hover:text-blue-100">Read More</a>
        </div>
        </div>       
    </div>
    </section>
    <!-- end about -->


    <!-- Testimoni -->
    <section class="relative px-4 py-16 bg-gray-600 sm:px-8 lg:px-16 xl:px-40 lg:py-32">
        <div class="px-4 py-12 lg:px-20 md:px-6">
            <div class="flex flex-col items-center justify-center">
                <h1 class="text-3xl font-bold text-center text-white lg:text-4xl ">Hear from our clients</h1>
                <p class="mt-4 text-base leading-6 text-center text-white 2xl:w-2/5 ">Here is why you should trust us</p>
            </div>
            <div class="items-center w-full gap-6 mt-10 lg:flex">
                <div class="lg:w-1/2">
                    <div class="relative p-6 bg-teal-400 border rounded-md hover:translate-y-2 dark:bg-gray-800 dark:border-gray-700 sm:p-10">
                        <div>
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/testimonials-4-svg1.svg" alt="commas" />
                        </div>
    
                        <p class="mt-4 text-base leading-6 text-gray-600 dark:text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas esse quia officia exercitationem mollitia assumenda. Lorem, ipsum dolor.</p>
                    </div>
                    <div class="flex items-center mt-4 ">
                        <div class="flex items-center justify-center w-12 h-12 border border-indigo-700 rounded-full">
                            <img src="https://i.ibb.co/R6WQhYj/Mask-Group.png" class="w-10 h-10 rounded-full" alt="profile"/>
                        </div>
                        <div class="flex flex-col items-start ml-4">
                            <p class="text-base font-semibold leading-4 text-white ">David Mario</p></p>
                            <p class="mt-2 text-base leading-4 text-center text-white ">Mahasiswa</p>
                        </div>
                    </div>
                </div>
                <div class="mt-16 lg:w-1/2 lg:mt-0">
                    <div class="relative p-6 bg-yellow-400 border rounded-md hover:translate-y-2 dark:bg-gray-800 dark:border-gray-700 sm:p-10">
                        <div>
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/testimonials-4-svg1.svg" alt="commas" />
                        </div>
                        <p class="mt-4 text-base leading-6 text-gray-600 dark:text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore fugit dolorum, exercitationem esse soluta ducimus.</p>
                    </div>
                    <div class="flex items-center mt-4">
                        <div class="flex items-center justify-center w-12 h-12 border border-indigo-700 rounded-full">
                            <img src="https://i.ibb.co/C6bwf12/Mask-Group.png" class="w-10 h-10 rounded-full" alt="profile"/>
                        </div>
                        <div class="flex flex-col items-start ml-4">
                            <p class="text-base font-semibold leading-4 text-white ">Wibisana</p>
                            <p class="mt-2 text-base leading-4 text-center text-white ">Mahasiswa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end testi -->

    <!-- start footer -->
    <footer class="relative px-4 py-12 text-white bg-gray-900 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 lg:py-24">
    <div class="flex flex-col md:flex-row">
        <div class="w-full lg:w-2/6 lg:mx-4 lg:pr-8">
        <img src="images/In-Kost.png" alt="">
        <p class="text-gray-400">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</p>
        </div>

        <div class="w-full mt-8 lg:w-1/6 lg:mt-0 lg:mx-4">
        <h5 class="font-semibold tracking-wider text-gray-500 uppercase">Featured</h5>
        <ul class="mt-4">
            <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Info Kost Singaraja</a></li>
            <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Mami Kost</a></li>
            <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Ngekost Aja</a></li>
        </ul>
        </div>

        <div class="w-full mt-8 lg:w-2/6 lg:mt-0 lg:mx-4 lg:pr-8">
        <h5 class="font-semibold tracking-wider text-gray-500 uppercase">Our Company</h5>
        <ul class="mt-4">
            <li>
            <a href="#" title="" class="flex items-center block opacity-75 hover:opacity-100">
                <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    class="fill-current">
                    <path
                    d="M12,2C7.589,2,4,5.589,4,9.995C3.971,16.44,11.696,21.784,12,22c0,0,8.029-5.56,8-12C20,5.589,16.411,2,12,2z M12,14 c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S14.21,14,12,14z" />
                </svg>
                </span>
                <span class="ml-3">
                Jl. Udayana, Singaraja, Bali 
                </span>
            </a>
            </li>
            <li class="mt-4">
            <a href="#" title="" class="flex items-center block opacity-75 hover:opacity-100">
                <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    class="fill-current">
                    <path
                    d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10c5.514,0,10-4.486,10-10S17.514,2,12,2z M12,20c-4.411,0-8-3.589-8-8 s3.589-8,8-8s8,3.589,8,8S16.411,20,12,20z" />
                    <path d="M13 7L11 7 11 13 17 13 17 11 13 11z" /></svg>
                </span>
                <span class="ml-3">
                Mon - Fri: 8:00 - 16:00<br>
                Closed on Weekends
                </span>
            </a>
            </li>
            <li class="mt-4">
            <a href="#" title="" class="flex items-center block opacity-75 hover:opacity-100">
                <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    class="fill-current">
                    <path
                    d="M14.594,13.994l-1.66,1.66c-0.577-0.109-1.734-0.471-2.926-1.66c-1.193-1.193-1.553-2.354-1.661-2.926l1.661-1.66 l0.701-0.701L5.295,3.293L4.594,3.994l-1,1C3.42,5.168,3.316,5.398,3.303,5.643c-0.015,0.25-0.302,6.172,4.291,10.766 C11.6,20.414,16.618,20.707,18,20.707c0.202,0,0.326-0.006,0.358-0.008c0.245-0.014,0.476-0.117,0.649-0.291l1-1l0.697-0.697 l-5.414-5.414L14.594,13.994z" />
                </svg>
                </span>
                <span class="ml-3">
                +62 0363-81029
                </span>
            </a>
            </li>
            <li class="mt-4">
            <a href="#" title="" class="flex items-center block opacity-75 hover:opacity-100">
                <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    class="fill-current">
                    <path
                    d="M20,4H4C2.896,4,2,4.896,2,6v12c0,1.104,0.896,2,2,2h16c1.104,0,2-0.896,2-2V6C22,4.896,21.104,4,20,4z M20,8.7l-8,5.334 L4,8.7V6.297l8,5.333l8-5.333V8.7z" />
                </svg>
                </span>
                <span class="ml-3">
                inKost@gmail.com
                </span>
            </a>
            </li>
        </ul>
        </div>

        <div class="w-full mt-8 lg:w-1/6 lg:mt-0 lg:mx-4">
        <h5 class="font-semibold tracking-wider text-gray-500 uppercase">Social Media</h5>
        <ul class="flex mt-4">
            <li>
            <a href="#" target="_blank" title="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                <path
                    d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592	c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20	c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z" />
                </svg>
            </a>
            </li>

            <li class="ml-6">
            <a href="#" target="_blank" title="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                <path
                    d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809	c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793	c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05	c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032	c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028	c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22	c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z" />
                </svg>
            </a>
            </li>

            <li class="ml-6">
            <a href="#" target="_blank" title="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                <path
                    d="M20.947,8.305c-0.011-0.757-0.151-1.508-0.419-2.216c-0.469-1.209-1.424-2.165-2.633-2.633 c-0.699-0.263-1.438-0.404-2.186-0.42C14.747,2.993,14.442,2.981,12,2.981s-2.755,0-3.71,0.055 c-0.747,0.016-1.486,0.157-2.185,0.42C4.896,3.924,3.94,4.88,3.472,6.089C3.209,6.788,3.067,7.527,3.053,8.274 c-0.043,0.963-0.056,1.268-0.056,3.71s0,2.754,0.056,3.71c0.015,0.748,0.156,1.486,0.419,2.187 c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45c0.963,0.043,1.268,0.056,3.71,0.056s2.755,0,3.71-0.056 c0.747-0.015,1.486-0.156,2.186-0.419c1.209-0.469,2.164-1.425,2.633-2.633c0.263-0.7,0.404-1.438,0.419-2.187 c0.043-0.962,0.056-1.267,0.056-3.71C21.003,9.572,21.003,9.262,20.947,8.305z M11.994,16.602c-2.554,0-4.623-2.069-4.623-4.623 s2.069-4.623,4.623-4.623c2.552,0,4.623,2.069,4.623,4.623S14.546,16.602,11.994,16.602z M16.801,8.263 c-0.597,0-1.078-0.482-1.078-1.078s0.481-1.078,1.078-1.078c0.595,0,1.077,0.482,1.077,1.078S17.396,8.263,16.801,8.263z" />
                <circle cx="11.994" cy="11.979" r="3.003" /></svg>
            </a>
            </li>

            <li class="ml-6">
            <a href="#" target="_blank" title="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                <path
                    d="M21.593,7.203c-0.23-0.858-0.905-1.535-1.762-1.766C18.265,5.007,12,5,12,5S5.736,4.993,4.169,5.404	c-0.84,0.229-1.534,0.921-1.766,1.778c-0.413,1.566-0.417,4.814-0.417,4.814s-0.004,3.264,0.406,4.814	c0.23,0.857,0.905,1.534,1.763,1.765c1.582,0.43,7.83,0.437,7.83,0.437s6.265,0.007,7.831-0.403c0.856-0.23,1.534-0.906,1.767-1.763	C21.997,15.281,22,12.034,22,12.034S22.02,8.769,21.593,7.203z M9.996,15.005l0.005-6l5.207,3.005L9.996,15.005z" />
                </svg>
            </a>
            </li>
        </ul>

        <p class="mt-12 text-sm text-gray-400">2022©rsv. <br class="hidden lg:block">All Rights Reserved.
        </p>
        </div>
    </div>
    </footer>
    <!-- end footer -->
</body>
</x-home-layout>