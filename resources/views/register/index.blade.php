<x-layout>
    <x-slot:tittle>
        <div class="container mx-auto h-screen flex items-center justify-center">
            <section class="bg-gray-50 dark:bg-gray-900 w-full h-screen">
                <div class="flex items-center justify-center w-full h-full">
                    <div class="w-full bg-white rounded-lg shadow dark:border sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                                Sign Up your account
                            </h1>

                            <form action="/signup" method="post" class="space-y-4 md:space-y-6">
                                @csrf

                                <!-- Name Field -->
                                <div>
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                    <input type="text" name="name" id="name"
                                           value="{{ old('name') }}"
                                           class="bg-gray-50 border @error('name') border-red-500 @enderror
                                           text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block
                                           w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                           dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                           placeholder="Your name" required>
                                    @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Username Field -->
                                <div>
                                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                    <input type="text" name="username" id="username"
                                           value="{{ old('username') }}"
                                           class="bg-gray-50 border @error('username') border-red-500 @enderror
                                           text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block
                                            w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                           placeholder="Username" required>
                                    @error('username')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Email Field -->
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="email" name="email" id="email"
                                           value="{{ old('email') }}"
                                           class="bg-gray-50 border @error('email') border-red-500 @enderror text-gray-900
                                            rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5
                                            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                                            dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                           placeholder="name@company.com" required>
                                    @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Password Field -->
                                <div>
                                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                    <input type="password" name="password" id="password"
                                           class="bg-gray-50 border @error('password') border-red-500 @enderror
                                           text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block
                                           w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                           dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                           placeholder="••••••••" required>
                                    @error('password')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Sign up
                                </button>

                                <p class="text-sm font-black text-gray-500 dark:text-gray-400">
                                    Already had an account? <a href="/login" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Sign in</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </x-slot:tittle>
</x-layout>
