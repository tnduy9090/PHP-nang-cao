<!--
Yeu cau:
- phan welcome hien thi danh sach cac mon thuc uong duoc them san duoi dang danh sach, hinh anh tu them
    Cafe: 20k
    Nuoc dua: 15k
    String: 10k
- Doi ten trang lai thanh "Cua hang nuoc giai khat"
- Mau nen la mau trang, bo cuc de nhin
- tham khao tai duong link: https://www.google.com/search?sca_esv=5d5c6f10d970169a&udm=2&fbs=ABfTbFW4UnGvBVgqDYjq_ksvF_WzL0qSsUjsQCJMDr-_PEHsElEq-XkTNsyVCf0qvOFQ8LlAP3OBXid3ZsI4boXaUXM6De78OScsZ_c6NeF4LMU8_A3fwSCTiv9JLak7nGOu90Jo3dkuwYYyPlGe7wl_0Sbbv6UuHo4BfHgMRwkFNEp6CPHh98YI1oohW9YUAPMvRPDbX2hlcTEnbq-GOy7S927wGBs3_OhbxGM7_zM5_sK0tduEG5W3BxEpKzA5VrBa0fMJBBDM&q=website+nuoc+giai+khat&sa=X&ved=2ahUKEwi_q8K3n_KVAxUJ2DgGHTY7AYYQtKgLegQIFhAB&biw=1366&bih=641&dpr=1#sv=CAMSXhoyKhBlLTRmaWUzcDBGaHlSa0JNMg40ZmllM3AwRmh5UmtCTToORHJzUHowdUJvX0xvQk0gBCokCg5kWjF2RlZJcld6WVNsTRIQZS00ZmllM3AwRmh5UmtCTRgAMAEYByCFkZmkD0oIEAEYASABKAE
-->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title> 

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        
        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        <div class="divBody">
            <div>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/A_small_cup_of_coffee.JPG/1280px-A_small_cup_of_coffee.JPG?utm_source=vi.wiktionary.org&utm_campaign=index&utm_content=thumbnail" alt="">
            <h1>Cafe</h1>
            <h2>Gia: 20k</h2>
        </div>
        <div>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSn4yervSU6cD_jsB9IuxttW4UpyVHg8WycY8-eN6iKlQ&s=10" alt="">
            <h1>Nuoc Dua</h1>
            <h2>Gia: 15k</h2>
        </div>
        <div>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjTCR2ROhBXB5i1r8z1xnLINXhUv5TxAZQwnr9mp465A&s=10" alt="">
            <h1>Sting</h1>
            <h2>Gia: 10k</h2>
        </div>
        </div>
        
        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
