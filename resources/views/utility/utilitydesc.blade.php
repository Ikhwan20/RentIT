<x-app-layout>
@foreach($utility as $util)
    <div class="">
        <form action="{{ url('/createorder') }}" method="POST" enctype="multipart/form-data" class="flex w-full items-center justify-center mt-10" >
        @csrf    
            <div class="" >
                <div class="">
                    <div class="">
                        <div class="swiper group enabled:fixed enabled:w-screen enabled:h-full top-0 left-0 enabled:z-100 md:bg-white border mx-5">
                            <div class="">
                                <div class="">
                                    <img src="{{ asset($util->photo) }}" width= '500' height='500' class="shadow-lg rounded align-middle" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="w-full md:w-1/2 h-auto pb-8">
                <div class="md:sticky top-0 p-header">
                    <div class="md:flex flex-col justify-center">
                        <nav class="flex mb-4 items-center">
                            <span>
                                <a class="transition hover:text-gray-900" href="/c/pantry">Utility</a>
                            </span>
                            <span class="block mx-2">›</span>
                            <a class="transition hover:text-gray-900" href="/c/{{ $util->category }}">{{ $util->category }}</a>
                        </nav>
                        <h1 class="text-3xl lg:text-5xl leading-snug" itemprop="name">
                            <a href="/brand/{{ $util->brand }}">{{ $util->brand }}</a>
                            <br>
                            <span class="font-body font-normal">{{ $util->name }}</span>
                        </h1>

                        <div class="enabled hidden enabled:block" data-target="product.variant" data-variant="24962">
                            <ul class="uppercase font-mono font-medium leading-snug mt-9" itemprop="offers" itemtype="http://schema.org/Offer" itemscope>
                                <li>
                                    <div class="flex flex-wrap space-x-2 items-center">
                                        <span itemprop="price" class="flex-none">
                                            RM {{ $util->prices }} per hour
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-4 md:mt-7">
                            <div class="enabled items-center align-center relative" data-target="product.variant" data-variant="24962">
                                
                                <div hidden>
                                    <label for="utility"></label>
                                    <input id="utility" class="" type="text" name="utility" value="{{ $util->id }}" required/>
                                </div>
                                
                                <input type="text" name="start" id="start-datetime" placeholder="Start" /><br><br>
                                <input type="text" name="end" id="end-datetime" placeholder="End" />

                                <script>
                                var startDateInput = document.getElementById("start-datetime");
                                var endDateInput = document.getElementById("end-datetime");

                                flatpickr(startDateInput, {
                                    enableTime: true,
                                    dateFormat: "Y-m-d H:i",
                                    minDate: new Date(),
                                    onChange: function(selectedDates, dateStr, instance) {
                                        endDateInput.flatpickr({
                                            enableTime: true,
                                            dateFormat: "Y-m-d H:i",
                                            minDate: dateStr
                                        });
                                    }
                                });
                                </script>

                            
                                <br><br>
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" id="checkoutbutton">
                                    Rent Now
                                </button>
                            </form>
                                
                            <form class="mt-3" action="{{ route('favorite.add', $util->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" id="checkoutbutton">
                                    Add to wishlist
                                </button>
                            </form>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class = "m-10">
        <header class="paragraphs space-y-4">
            <h3 class="text-3xl lg:text-4xl">Description</h3>
            <div itemprop="description">
                <p>{{ $util->description }}</p>
            </div>
        </header>
    <div>
    @endforeach
    
    <div class="m-4 p-4 overflow-hidden">
        <section class="">
            <header class="mb-4">
                <h2 class="text-xl md:text-3.5xl">Related products</h2>
                <div class="flex items-center gap-6">
                    <div class="hidden lg:block">
                        <button class="w-10 h-auto p-3 hover:text-red enabled:pointer-events-none enabled:opacity-50 slider-prev" type="button">
                            <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.1696 6.93374C14.8905 6.93155 15.4632 7.5042 15.4607 8.22513C15.4567 8.9448 14.8845 9.51627 14.1654 9.51635L5.37363 9.50608L8.45855 12.591C8.95937 13.0918 8.95655 13.9093 8.45526 14.4106C7.95385 14.912 7.13654 14.9147 6.63569 14.4139L0.443651 8.22182L6.56758 2.09789C7.06887 1.5966 7.88634 1.59378 8.38715 2.0946C8.88797 2.59542 8.88515 3.41289 8.38386 3.91417L5.36472 6.93332L14.1696 6.93374Z"></path>
                            </svg>
                        </button>
                        <button class="w-10 h-auto p-3 hover:text-red enabled:pointer-events-none enabled:opacity-50 slider-next" type="button">
                            <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M 1.7347592,6.93374 C 1.0138592,6.93155 0.44115915,7.5042 0.44365915,8.22513 0.44765915,8.9448 1.0198592,9.51627 1.7389592,9.51635 L 10.530729,9.50608 7.4458092,12.591 c -0.50082,0.5008 -0.498,1.3183 0.00329,1.8196 0.50141,0.5014 1.31872,0.5041 1.81957,0.0033 L 15.460708,8.22182 9.3367792,2.09789 c -0.50129,-0.50129 -1.31876,-0.50411 -1.81957,-0.00329 -0.50082,0.50082 -0.498,1.31829 0.00329,1.81957 l 3.0191398,3.01915 z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </header>
        </section>
    </div>
</x-app-layout>
