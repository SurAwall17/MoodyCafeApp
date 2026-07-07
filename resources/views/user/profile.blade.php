@include('partials.navbar')

<main class="pt-25 bg-gray-100">
    <section>
        <h1 class="title mt-2">My Account</h1>
        <p class="sub-title mt-2">
            <a href="/">Home </a>/
            <a href="/account" class="text-primary"> My Account</a>
        </p>
    </section>

    <section class="p-10 flex gap-5 h-max">
        <div class="feature p-3 flex flex-col w-1/3 gap-2 bg-white  rounded-2xl">
            <span class="settings setting-active ">
                <x-heroicon-o-user class="w-5 me-1" />
                Personal Information
            </span>
            <span class="settings">
                <x-heroicon-o-map-pin class="w-5 me-1" />
                Manage Address
            </span>
            <span class="settings">
                <x-heroicon-o-lock-closed class="w-5 me-1" />
                Password Manager
            </span>
            <form action="/logout" method="POST" class="">
                @csrf
                <button type="submit" class="settings-logout">
                    <x-heroicon-o-arrow-right-start-on-rectangle class="w-5 me-1" />
                    Logout
                </button>
            </form>
        </div>

        <div class="form bg-white w-full rounded-2xl py-5 px-10">
            {{-- Photo Profile --}}
            <form action="{{ route('profile.update') }}" method="POST" class="personal-information"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class=" items-center flex flex-col w-full">
                    {{-- personal information --}}
                    <div class="photo relative w-max">
                        <img src="{{ $dataUser->photo ?? 'https://ui-avatars.com/api/?length=1&background=random&color=fff&name=' . $dataUser->name }}"
                            alt="" class="w-30 rounded-full">
                        <div
                            class="pencil right-1 bottom-1 absolute rounded-full bg-gray-50 hover:bg-gray-200 w-7 p-1 border border-gray-300 transition-all ease-in-out duration-200 cursor-pointer">
                            <x-heroicon-o-pencil />
                        </div>
                        <input type="file" accept="image/*" name="photo"
                            class="border w-7 right-1 bottom-1 absolute opacity-0 cursor-pointer">
                    </div>

                    <div class="name mb-3 font-semibold text-2xl uppercase mt-2">
                        <span>{{ $dataUser->name }}</span>
                    </div>
                    <div class="mb-3 flex flex-col w-full">
                        <label for="name">Name</label>
                        <input type="text" class="form-control p-3 rounded bg-gray-100 border border-gray-300"
                            id="name" name="name" value="{{ $dataUser->name }}">
                        @error('name')
                            <p class="text-primary">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 flex flex-col w-full">
                        <label for="email">Email</label>
                        <input type="text" class="form-control p-3 rounded bg-gray-100 border border-gray-300"
                            id="email" name="email" value="{{ $dataUser->email }}">
                        @error('email')
                            <p class="text-primary">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 flex flex-col w-full">
                        <label for="phone">No. Handphone</label>
                        <input type="text" class="form-control p-3 rounded bg-gray-100 border border-gray-300"
                            id="phone" name="phone" value="{{ $dataUser->phone }}">
                        @error('phone')
                            <p class="text-primary">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- button update changes --}}
                    @session('error')
                        <p>{{ $value }}</p>
                    @endsession
                    <div class="button-update ms-auto">
                        <button type="submit"
                            class="me-0 p-3 bg-primary text-white rounded-lg hover:bg-primary/80 transition-all ease-in-out duration-200">Update
                            Changes</button>
                    </div>
                </div>
            </form>
            <form action="{{ route('profile.update') }}" method="POST" class="manage-address" hidden>
                @csrf
                @method('PUT')
                {{-- manage address --}}
                <div class=" items-center flex flex-col w-full">
                    <p class="me-auto text-2xl font-semibold mb-3">Manage Address</p>
                    <div class="mb-3 flex flex-row gap-3 w-full">
                        <div class="form-group flex flex-col w-full">
                            <label for="latitude">Latitude</label>
                            <input type="text" name="latitude" id="latitude" value="{{ $dataAddress->latitude }}"
                                class="form-control p-3 rounded bg-gray-100 border border-gray-300" readonly>
                        </div>
                        <div class="form-group flex flex-col w-full">
                            <label for="longitude">Longitude</label>
                            <input type="text" id="longitude" name="longitude" value="{{ $dataAddress->longitude }}"
                                class="form-control p-3 rounded bg-gray-100 border border-gray-300" readonly>
                        </div>
                    </div>

                    <div class="mb-3 flex flex-row gap-3 w-full">
                        <div class="form-group flex flex-col w-full">
                            <label for="desa">Desa/Kelurahan</label>
                            <input type="text" id="desa" name="desa" value="{{ $dataAddress->desa }}"
                                class="form-control p-3 rounded bg-gray-100 border border-gray-300" readonly>
                        </div>

                        <div class="form-group flex flex-col w-full">
                            <label for="kabupaten">Kabupaten/Kota</label>
                            <input type="text" id="kabupaten" name="kabupaten" value="{{ $dataAddress->kabupaten }}"
                                class="form-control p-3 rounded bg-gray-100 border border-gray-300" readonly>
                        </div>
                    </div>

                    <div class="mb-3 form-group flex flex-col w-full">
                        <label for="provinsi">Provinsi</label>
                        <input type="text" id="provinsi" name="provinsi" value="{{ $dataAddress->provinsi }}"
                            class="form-control p-3 rounded bg-gray-100 border border-gray-300" readonly>
                    </div>

                    <div class="mb-3 form-group flex flex-col w-full">
                        <label for="full_address">Alamat Lengkap</label>
                        <div class="flex gap-1 ">
                            <input type="text" id="full_address" name="full_address"
                                class="form-control w-full p-3 rounded-l bg-gray-100 border border-gray-300"
                                placeholder="Alamat lengkap akan terisi otomatis"
                                value="{{ $dataAddress->full_address }}">
                            <button type="button" id="btnLokasi" onclick="getAddress()"
                                class="bg-primary text-white w-15 rounded-r hover:bg-primary/80 transition-all duration-200 ease-in-out">
                                <x-heroicon-o-map-pin class="w-6 m-auto" />
                            </button>
                        </div>

                    </div>

                    <div class="mb-3 form-group info-box flex flex-col w-full">
                        <label for="jarak">Jarak dari MoodyCafe</label>
                        <input type="text" id="jarak" name="jarak" readonly
                            class="form-control p-3 rounded bg-gray-100 border border-gray-300"
                            value="{{ $dataAddress->jarak }}">
                    </div>
                    @session('error')
                        <p>{{ $value }}</p>
                    @endsession
                    {{-- button update changes --}}
                    <div class="button-update ms-auto">
                        <button
                            class="me-0 p-3 bg-primary text-white rounded-lg hover:bg-primary/80 transition-all ease-in-out duration-200">Update
                            Changes</button>
                    </div>
                </div>
            </form>
            {{-- <span class="loading" id="loadingText">Mengambil lokasi...</span> --}}
            <form action="{{ route('profile.update') }}" method="POST" class="password-manager" hidden>
                @csrf
                @method('PUT')
                {{-- password manager --}}
                <div class=" items-center flex flex-col w-full">
                    <p class="me-auto text-2xl font-semibold mb-3">Change Password</p>

                    <div class="mb-3 form-group flex flex-col w-full">
                        <label for="current_password">Current Password</label>
                        <input type="password" id="current_password"
                            class="form-control p-3 rounded bg-gray-100 border border-gray-300" readonly>
                    </div>
                    <div class="mb-3 form-group flex flex-col w-full">
                        <label for="new_password">New Password</label>
                        <input type="password" id="new_password"
                            class="form-control p-3 rounded bg-gray-100 border border-gray-300" readonly>
                    </div>
                    <div class="mb-3 form-group flex flex-col w-full">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" id="confirm_password"
                            class="form-control p-3 rounded bg-gray-100 border border-gray-300" readonly>
                    </div>
                    {{-- button update changes --}}
                    <div class="button-update ms-auto">
                        <button
                            class="me-0 p-3 bg-primary text-white rounded-lg hover:bg-primary/80 transition-all ease-in-out duration-200">Update
                            Changes</button>
                    </div>
                </div>

        </div>
        </form>
    </section>
</main>

<script src="{{ asset('js/profile.js') }}"></script>
<script src="{{ asset('js/getAddress.js') }}"></script>
@include('partials.footer')
