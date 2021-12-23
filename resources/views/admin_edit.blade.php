<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>pweb</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
    <style>
        .shoes:hover #hoveritem1 {
            display: none;
        }

        .shoes:hover #hoveritem2 {
            display: block;
        }

        .shoes:hover #hovertext {
            margin-left: 2rem;
        }

        .modal {
            transition: opacity 0.25s ease;
        }

        body.modal-active {
            overflow-x: hidden;
            overflow-y: visible !important;
        }

    </style>
</head>

<body>
    <div class="wrapper">
        <div class="grid grid-cols-12">
            <div class="col-span-3 h-screen bg-black">
                <ul class="pt-10 flex flex-col items-center">
                    <li>
                        <img src="" alt="" class="w-40">
                    </li>
                    <li class="mt-2">
                        <h2 class="text-white font-semibold text-lg">
                            Welcome, Admin
                        </h2>
                    </li>
                    <li class="mt-20 px-10 w-full h-12">
                        <button
                            class="shoes bg-black border-2 border-white rounded-md px-2 py-2 w-full h-12 text-white hover:bg-white hover:border-black hover:text-black">
                            <a href="{{route('admin')}}" class="flex items-center">
                                <img src="" alt="" id="hoveritem1" class="relative w-8 pl-1">
                                <img src="" alt="" id="hoveritem2"
                                    class="absolute w-8 pl-1 hidden">
                                <span class="pl-4" id="hovertext">Pending Payment</span>
                            </a>
                        </button>
                    </li>
                    <li class="mt-6 px-10 w-full h-12">
                        <button class="bg-white rounded-md px-2 py-2 w-full h-12">
                            <a href="{{route('additem')}}" class="flex items-center">
                                <img src="" alt="" class="w-8 pl-1">
                                <span class="pl-4">Parent Management</span>
                            </a>
                        </button>
                    </li>
                    <!-- <li class="mt-6 px-10 w-full h-12">
                        <button
                            class="shoes bg-black border-2 border-white rounded-md px-2 py-2 w-full h-12 text-white hover:bg-white hover:border-black hover:text-black">
                            <a href="/public/admin_overview.html" class="flex items-center">
                                <img src="/images/overview-white.png" alt="" id="hoveritem1" class="relative w-8 pl-1">
                                <img src="/images/overview-black.png" alt="" id="hoveritem2"
                                    class="absolute w-8 pl-1 hidden">
                                <span class="pl-4" id="hovertext">Overview</span>
                            </a>
                        </button>
                    </li> -->
                    <li class="mt-6 px-10 w-full h-12">
                        <button
                            class="shoes bg-black border-2 border-white rounded-md px-2 py-2 w-full h-12 text-white hover:bg-white hover:border-black hover:text-black">
                            <a href="{{route('updatestatus')}}" class="flex items-center">
                                <img src="" alt="" id="hoveritem1" class="relative w-8 pl-1">
                                <img src="" alt="" id="hoveritem2"
                                    class="absolute w-8 pl-1 hidden">
                                <span class="pl-4" id="hovertext">E-Payslip</span>
                            </a>
                        </button>
                    </li>
                    <li class="mt-44 px-10 w-full h-10">
                        <button
                            class="bg-red-700 rounded-md px-2 py-2 w-full h-10 text-white hover:bg-red-800 hover:text-gray-200">
                            <a href="{{route('signin')}}" class="flex flex-col items-center">
                                <span class="font-bold text-md">Sign Out</span>
                            </a>
                        </button>
                    </li>
            </div>
            <div class="col-span-9 col-start-4 p-20">
                <form method="POST" action="{{route('edititem.post')}}" enctype="multipart/form-data">
                    @csrf
                    <input name="id" type="hidden" value="{{$product->id}}">
                    <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold">Edit Parent</p>

                    </div>


                    <ul class="text-lg">
                        <li class="pt-6">
                            <span class="font-bold">Name :</span><br>
                            <span class=""><input
                                    class="border-2 border-gray-500 rounded w-full py-1 px-3 text-gray-700" id="name"
                                    name="name" value="{{$product->name}}" type="text" placeholder=""></span>
                        </li>

                        <li class="pt-6">
                            <span class="font-bold">Phone :</span><br>
                            <span class=""><input
                                    class="border-2 border-gray-500 rounded w-full py-1 px-3 text-gray-700" id="price"
                                    name="price" value="{{$product->price}}" type="text" placeholder=""></span>
                        </li>
                        <li class="pt-6">
                            <span class="font-bold">Adress :</span><br>
                            <span class=""><input
                                    class="border-2 border-gray-500 rounded w-full py-1 px-3 text-gray-700"
                                    id="category" value="{{$product->category}}" name="category" type="text"
                                    placeholder=""></span>
                        </li>
                        <li class="flex flex-col pt-6">
                            <span class="font-bold pb-2">KTP :</span>
                            <div class="flex items-center">
                                <label
                                    class="pt-2 bg-white rounded-md border-2 border-black px-6 py-2 text-sm text-black font-semibold cursor-pointer hover:bg-gray-100 mr-72">
                                    Add File
                                    <input type="file" name="file" class="hidden">
                                </label>
                            </div>
                        </li>

                    </ul>
                    <div class="flex justify-end pt-2">
                        <button class="modal-close px-6 bg-black py-2 rounded-lg text-white hover:text-gray-200"
                            type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>


</body>

</html>
